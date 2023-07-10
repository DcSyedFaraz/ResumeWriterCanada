<?php

namespace App\Http\Controllers\Web;

use App\CareerLevel;
use App\Country;
use App\Fare;
use App\File;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrderRequest;
use App\Invoice;
use App\Mail\OrderAdminMail;
use App\Mail\OrderMail;
use App\Mail\UserCreateMail;
use App\Mail\UserCreateOrderAcc;
use App\Order;
use App\Package;
use App\User;
use App\Deadline;
use App\Mail\UserCreateOrderMail;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session as FacadesSession;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;

class OrdersController extends Controller
{

    public $customer;
    // public $password;
    // public $user_created=false;



    public function create()
    {
        $countries      = Country::all();
        $career_levels  = CareerLevel::with('fare.package')->get();
        $packages = Package::orderBy('id', 'asc')->get();
        $deadlines = Deadline::get();
        $fares = Fare::all();
        // return $career_levels;
        return view('pages.order', compact('countries', 'career_levels', 'packages', 'deadlines', 'fares'));
    }

    public function success()
    {

        return view('pages.order-success');
    }

    public function successpost(Request $request)
    {
        return $request->all();
        return view('pages.order-success');
    }


    public function store(StoreOrderRequest $request)
    {
        if ($request->hasfile('emailAttachments')) {
            $fileSize = 0;
            $fileQty = 0;
            foreach ($request->file('emailAttachments') as $file) {
                $fileSize += $file->getSize();
                $fileQty = $fileQty + 1;
            }

            if ($fileQty > 10) {
                $request->session()->flash('message', 'you can attach maximum 10 files.');
                // return redirect()->route('order.now');
                return redirect()->back();
            }

            if ($fileSize > 25000000) {
                $request->session()->flash('message', 'file size exceeded the limit.Max limit is 25mb');
                // return redirect()->route('order.now');
                return redirect()->back();
            }
        }
        
        // Fetching Fare amount
        // $fare = Fare::findOrFail($request->fare_id);
        $fare = Fare::where(['career_level_id' => $request->career_level, 'day_model_id' => $request->deadline, 'package_id' => $request->package])->firstOrFail();

        // create password
        // $this->password = Str::random(8);
        $password = Str::random(8);

        DB::beginTransaction();

        // $this->user_created = false;

        $user = User::where(['email' => $request->email])->first();

        // flag to check user is created default false 
        $flag = false;

        if (!$user) {

            $flag = true;

            $user = User::create(
                // ['email'    =>  request('email')],
                [
                    'name'      => request('name'),
                    'email'    =>  request('email'),
                    'phone'     => request('phone'),
                    'country'   => request('country'),
                    'password'  => Hash::make($password),
                ],
            );

            $user->roles()->sync(2);
            // Send mail to user
            // Mail::to($user->email)->send(new UserCreateMail($user, $this->password));

            $request->merge(['user_id' => $user->id, 'package_id' => $request->package]);

            // $this->user_created = true;
          
            session()->flash('userData', ['userEmail' => 'Customer Account' . ' ' . $user->email . ' ' . 'created successfully check your email for login credentials', 'userId' => $user->id]);
        }
     


        $request->merge(['user_id' => $user->id, 'package_id' => $request->package]);

        $order = Order::create($request->all());

       
        // Generating Invoice before order placing
        $invoice = Invoice::create([
            "ref_no"    => Str::uuid()->toString(),
            "amount"    => $fare->fare,
            "order_id"  => $order->id,
            "user_id"   => $user->id,
            "gateway"   => "stripe",
            "currency"  => "",
        ]);


        $files = [];

        if ($request->hasfile('emailAttachments')) {
            foreach ($request->file('emailAttachments') as $file) {
                $fileName = uniqid() . '_' . time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads', $fileName, 'public');

                array_push($files, $filePath);
                // return $files;
                File::create([
                    "order_id" => $order->id,
                    "file_path" => $filePath
                ]);
            }
        }

        // return $order->invoice;
        $data=[
            'user' =>$user,
            'password'=>$password,
            'files'=>$files,
            'order'=>$order,
            'flag'=>$flag,
            'invoice'=>$invoice,
        ];
        
         Mail::to($request->email)->send(new UserCreateOrderMail($data));
        // Send mail to admin
         Mail::to(env('MAIL_FROM_ADDRESS', 'info@cheapresumewriter.com'))->send(new OrderAdminMail($order, $files, $user, $fare));

        DB::commit();

        return redirect()->route('invoice', ['reference' => $invoice->ref_no]);
       
    }

    public function invoice(Request $request)
    {
        if ($request->query('reference')) {
            $invoice = Invoice::where(['ref_no' => $request->query('reference'), 'status_id' => 4])->with('order.careerLevel')->firstOrFail();
            $order   = Order::where(['id' => $invoice->order_id])->firstorFail();
            if (session('userData.userId') !=  $invoice->user_id) {
                session()->forget('userData');
            }


            return view('pages.invoice', compact('invoice', 'order'));
        }

        return redirect()->route('order');
    }

    public function invoiceCharge(Request $request)
    {
        return $request;

        return redirect()->route('order');
    }
}
