<?php
namespace App\Http\Controllers;

use DB;
use App\Customer;

class CustomerController extends Controller {

    public function add()
    {
        return view('customers.add');
    }

    public function show()
    {
        $customers = Customer::all();

        return view('customers.show', compact('customers'));
    }

    public function store()
    {
        $this->validate(request(), [
           'name' => 'required|unique:customers|max:255',
           'mail' => 'required|unique:customers|max:255',
           'address' => 'max:255',
           'zip' => 'max:8',
           'city' => 'max:255',
           'country' => 'max:255',
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

    public function edit(Customer $customer)
    {
        return view('customers.edit', compact('customer'));
    }

    public function update(Customer $customer)
    {
        $customer->update(request()->all());

        return redirect('/customers/show');
    }

    public function delete(Customer $customer)
    {
        $customer->delete();

        return redirect('/customers/show');
    }
}




