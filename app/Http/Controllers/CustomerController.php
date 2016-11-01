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
            //company
            'c_name'      => 'required|unique:customers|max:100|filled',
            'c_email'     => 'email|required|unique:customers|max:255|filled',
            'c_phone'     => 'required|max:15|filled',
            'c_street'    => 'required|max:100|filled',
            'c_streetNum' => 'required|numeric|filled',
            'c_zip'       => 'required|max:10|filled',
            'c_city'      => 'required|max:100|filled',
            'c_country'   => 'required|max:100|filled',
            'c_kvk'       => 'required|unique:customers|digits:8|filled',
            'c_btw'       => 'required|unique:customers|max:15|filled',
            //contact person
            'p_firstName' => 'required|max:50|filled',
            'p_lastName'  => 'required|max:50|filled',
            'p_email'     => 'email|required|unique:customers|max:255|filled',
            'p_phone'     => 'required|max:15|filled',
            'p_mobile'    => 'required|max:15|filled',
            'p_street'    => 'required|max:100|filled',
            'p_streetNum' => 'required|numeric|filled',
            'p_zip'       => 'required|max:10|filled',
            'p_city'      => 'required|max:100|filled',
            'p_country'   => 'required|max:100|filled',
            'ending_on'   => 'required|date|filled',
        ]);

        $customer = new Customer;

        //company
        $customer->c_name = request()->c_name;
        $customer->c_email = request()->c_email;
        $customer->c_phone = request()->c_phone;
        $customer->c_street = request()->c_street;
        $customer->c_streetNum = request()->c_streetNum;
        $customer->c_zip = request()->c_zip;
        $customer->c_city = request()->c_city;
        $customer->c_country = request()->c_country;
        $customer->c_kvk = request()->c_kvk;
        $customer->c_btw = request()->c_btw;

        //contact person
        $customer->p_firstName = request()->p_firstName;
        $customer->p_lastName = request()->p_lastName;
        $customer->p_email = request()->p_email;
        $customer->p_phone = request()->p_phone;
        $customer->p_mobile = request()->p_mobile;
        $customer->p_street = request()->p_street;
        $customer->p_streetNum = request()->p_streetNum;
        $customer->p_zip = request()->p_zip;
        $customer->p_city = request()->p_city;
        $customer->p_country = request()->p_country;
        $customer->ending_on = request()->ending_on;

        $customer->save();

        return redirect('/customers/show');
    }

    public function edit (Customer $customer) {
        return view('customers.edit', compact('customer'));
    }

    public function more (Customer $customer) {
        return view('customers.more', compact('customer'));
    }

    public function c_update (Customer $customer) {
        $this->validate(request(), [
            'c_name'      => 'required|unique:customers,c_name,' . $customer->id . '|max:100|filled',
            'c_email'     => 'email|required|unique:customers,c_email,' . $customer->id . '|max:255|filled',
            'c_phone'     => 'required|max:15|filled',
            'c_street'    => 'required|max:100|filled',
            'c_streetNum' => 'required|numeric|filled',
            'c_zip'       => 'required|max:10|filled',
            'c_city'      => 'required|max:100|filled',
            'c_country'   => 'required|max:100|filled',
            'c_kvk'       => 'required|unique:customers,c_kvk,' . $customer->id . '|digits:8|filled',
            'c_btw'       => 'required|unique:customers,c_btw,' . $customer->id . '|max:15|filled',
            'ending_on'   => 'required|date|filled',
        ]);

        $customer->update(request()->all());

        return back();
    }

    public function p_update (Customer $customer) {
        $this->validate(request(), [
            'p_firstName'  => 'required|max:50|filled',
            'p_lastName'   => 'required|max:50|filled',
            'p_email'      => 'email|required|unique:customers,p_email,' . $customer->id . '|max:255|filled',
            'p_phone'      => 'required|max:15|filled',
            'p_mobile'      => 'required|max:15|filled',
            'p_street'     => 'required|max:100|filled',
            'p_streetNum' => 'required|numeric|filled',
            'p_zip'        => 'required|max:10|filled',
            'p_city'       => 'required|max:100|filled',
            'p_country'    => 'required|max:100|filled',
        ]);

        $customer->update(request()->all());

        return back();
    }

    public function delete (Customer $customer) {
        $customer->delete();

        return redirect('/customers/show');
    }
}




