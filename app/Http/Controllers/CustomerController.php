<?php
namespace App\Http\Controllers;

use DB;
use App\Customer;

class CustomerController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct () {
        $this->middleware('auth');
        $this->middleware('subscribed');
    }

    public function add () {
        return view('customers.add');
    }

    public function show () {
        $customers = Customer::all();

        return view('customers.show', compact('customers'));
    }

    public function store () {
        $this->validate(request(), [
            'name'    => 'required|unique:customers|max:100|filled',
            'mail'    => 'email|required|unique:customers|max:100|filled',
            'phone'   => 'required|max:50|filled',
            'address' => 'required|max:100|filled',
            'zip'     => 'required|max:8|filled',
            'city'    => 'required|max:100|filled',
            'country' => 'required|max:100|filled'
        ]);

        $customer = new Customer;

        $customer->name = request()->name;
        $customer->phone = request()->phone;
        $customer->address = request()->address;
        $customer->mail = request()->mail;
        $customer->zip = request()->zip;
        $customer->country = request()->country;
        $customer->city = request()->city;


        $customer->save();


        return redirect('/customers/show');
    }

    public function edit (Customer $customer) {
        return view('customers.edit', compact('customer'));
    }

    public function update (Customer $customer) {
        $this->validate(request(), [
            'name'    => 'required|unique:customers,name,' . $customer->id . '|max:100|filled',
            'mail'    => 'email|required|unique:customers,mail,' . $customer->id . '|max:100|filled',
            'phone'   => 'required|max:50|filled',
            'address' => 'required|max:100|filled',
            'zip'     => 'required|max:8|filled',
            'city'    => 'required|max:100|filled',
            'country' => 'required|max:100|filled'
        ]);

        $customer->update(request()->all());

        return redirect('/customers/show');
    }

    public function delete (Customer $customer) {
        $customer->delete();

        return redirect('/customers/show');
    }
}




