<?php

namespace App\Http\Controllers\Admin;

use App\Invoice;
use App\Order;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class HomeController
{
    public function index()
    {
        $totalCustomers = User::whereHas('roles', function ($query) {
            return $query->where('id', '=', 2);
        })->count();

        $orders = Order::with('invoice')->get('id');

        $invoices=Invoice::get('status_id');

        $latestOrders = Order::whereDate('created_at', Carbon::today())->get();
        // return $latestOrders;

        $data = [
            'totalCustomers'    => $totalCustomers,
            'totalOrders'       => $orders->count(),
            // 'clearInvoices'     => $orders->pluck('invoice')->where('status_id', 2)->count(),
            'clearInvoices'     =>$invoices->where('status_id',5)->count(),
            'pendingInvoices'   => $orders->pluck('invoice')->where('status_id', 4)->count(),
        ];

        return view('admin.home', compact('data', 'latestOrders'));
    }

}
