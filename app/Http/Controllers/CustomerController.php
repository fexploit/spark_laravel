<?php
namespace App\Http\Controllers;

use DB;
use App\Customer;

class CustomerController extends Controller {

    public function index()
    {
        return view('add_customer');

    }

    public function show()
    {
        $customers = Customer::all();

        return view('show_customer', compact('customers'));
    }

    public function store()
    {
        $customer = new Customer;

        $customer->name = request()->name;
        $customer->phone = request()->phone;
        $customer->address = request()->address;
        $customer->mail = request()->mail;
        $customer->zip = request()->zip;
        $customer->country = request()->country;
        $customer->city = request()->city;

        $customer->save();

        return redirect('/show');
    }
}




