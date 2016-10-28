@extends('spark::layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-7 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit customer</div>
                <div class="panel-body">
                    <form role="form" action="/customers/{{ $customer->id }}" method="post">
                        {{ method_field('patch') }}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name"
                                       value="{{ $customer->name }}">
                            </div>
                            <div class="form-group col-xs-6">
                                <label for="phone">Phone</label>
                                <input type="number" class="form-control" name="phone" id="phone" placeholder="Phone"
                                       value="{{ $customer->phone }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" name="address" id="address"
                                       placeholder="Address" value="{{ $customer->address }}">
                            </div>
                            <div class="form-group col-xs-6">
                                <label for="mail">E-mail</label>
                                <input type="email" class="form-control" name="mail" id="mail" placeholder="E-mail"
                                       value="{{ $customer->mail }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label for="zip">Zip code</label>
                                <input type="text" class="form-control" name="zip" id="zip" placeholder="Zip code"
                                       value="{{ $customer->zip }}">
                            </div>
                            <div class="form-group col-xs-6">
                                <label for="country">Country</label>
                                <input type="text" class="form-control" name="country" id="country"
                                       placeholder="Country" value="{{ $customer->country }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label for="city">City</label>
                                <input type="text" class="form-control" name="city" id="city" placeholder="City"
                                       value="{{ $customer->city }}">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-default">Update customer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
