@extends('spark::layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-7 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Add customer</div>
                <div class="panel-body">
                    <form role="form" action="/added" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
                            </div>
                            <div class="form-group col-xs-6">
                                <label for="phone">Phone</label>
                                <input type="number" class="form-control" name="phone" id="phone" placeholder="Phone" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" name="address" id="address" placeholder="Address" required>
                            </div>
                            <div class="form-group col-xs-6">
                                <label for="mail">E-mail</label>
                                <input type="email" class="form-control" name="mail" id="mail" placeholder="E-mail" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label for="zip">Zip code</label>
                                <input type="text" class="form-control" name="zip" id="zip" placeholder="Zip code" required>
                            </div>
                            <div class="form-group col-xs-6">
                                <label for="country">Country</label>
                                <input type="text" class="form-control" name="country" id="country" placeholder="Country" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label for="city">City</label>
                                <input type="text" class="form-control" name="city" id="city" placeholder="City" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
