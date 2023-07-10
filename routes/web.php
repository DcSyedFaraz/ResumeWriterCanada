<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes([
    //  'login'     =>true,   //    login Routes  
    'register'  => true,     // Registration Routes...
    'verify'    => true,       // Email Verification Routes...
    'reset'     => true,        // Password Reset Routes...
]);

Route::get('redirect/{driver}', [App\Http\Controllers\Auth\LoginController::class, 'redirectToProvider']);

Route::get('{driver}/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleProviderCallback']);




Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth', 'verified', 'admin']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    // Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    // Route::resource('permissions', 'PermissionsController');

    // Roles
    // Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    // Route::resource('roles', 'RolesController');

    // Users
    // Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    // Route::resource('users', 'UsersController');

    // Orders
    Route::get('get-orders', 'OrdersController@getOrders')->name('orders.get');
    Route::resource('orders', 'OrdersController');

    // Invoices
    Route::resource('invoices', 'InvoicesController');

    // Contacts
    Route::get('get-contacts', 'ContactController@getContacts')->name('contacts.get');
    Route::resource('contacts', 'ContactController');

    // Services
    Route::get('get-services', 'ServicesController@getServices')->name('services.get');
    Route::resource('services', 'ServicesController')->except('show');

    // Blogs
    Route::get('get-blogs', 'BlogsController@getBlogs')->name('blogs.get');
    Route::resource('blogs', 'BlogsController');

    // Customers
    Route::resource('setting', 'WebSettingController');

    // Customers
    Route::resource('customers', 'CustomersController');
});

Route::group(['prefix' => 'customer', 'as' => 'customer.', 'namespace' => 'Customer', 'middleware' => [ 'auth', 'verified', 'customer']], function () {
    
    Route::get('/', 'HomeController@index')->name('home');

    // Orders
    Route::resource('orders', 'OrdersController');

    // Invoices
    Route::resource('invoices', 'InvoicesController');

    // Profile
    Route::resource('profile', 'ProfileController')->only(['index', 'update']);
    // Change
    Route::get('change-password', 'ProfileController@changePassword')->name('profile.change-password');
    Route::post('change-password', 'ProfileController@changePasswordUpdate')->name('profile.change-password.change');
});

Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});

Route::group(['namespace' => 'Web'], function() {
    Route::get('/cache',            "PagesController@cache")->name('cache');
    // PagesController
    Route::get('/',                 "PagesController@index")->name('home');

    // Route::get('/thankyou',         "OrdersController@success")->name('success');
    // Route::post('/thankyou',         "OrdersController@successpost")->name('order.success');

    Route::view('/samples',         "pages.samples")->name('samples');
    Route::get('about-us',          "PagesController@about")->name('about');
    Route::get('pricing',           "PagesController@pricing")->name('pricing');
    Route::get('samples',           "PagesController@samples")->name('samples');
    Route::get('reviews',           "PagesController@reviews")->name('reviews');
    // Route::get('privacy-policy',        "PagesController@privacy")->name('privacy');
    // Route::get('term-and-conditions',   "PagesController@terms")->name('terms');
    // Route::post('/quotation',           "PagesController@quotation")->name('price-quote');

    // ContactController
    Route::get('/contact-us',       "ContactController@create")->name('contact');
    Route::post('/contact-us',      "ContactController@store")->name('contact.store');
    // // OrdersController
    Route::get('/order-now',            "OrdersController@create")->name('order');
    Route::post('/order-now',           "OrdersController@store")->name('order.store');

    Route::get('/invoice',          "OrdersController@invoice")->name('invoice');
    // Route::post('/order',        "OrdersController@store")->name('order.store');
    // Route::get('/payment',          "PaymentController@payment")->name('payment');
    Route::post('/charge',   'PaymentController@charge')->name('payment.charge');
    // BlogController
    Route::get('/blogs',            "BlogController@index")->name('blogs');

    // ServicesController
    Route::get('/{slug}',           "ServicesController@show")->name('services.show');
});
