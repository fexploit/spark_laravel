@extends('spark::layouts.app')

@section('content')
    <div id="edit_panel" class="col-md-10 col-md-offset-1">
        <form role="form" action="/customers/{{ $customer->id }}" method="post">
            <div class="panel panel-default">
                <div class="panel-heading">Edit customer</div>
                <div class="panel-body">

                    {{ method_field('patch') }}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="row">
                        <div class="form-group col-xs-6" id="nameDiv">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name"
                                   value="{{ $customer->name }}" required>
                            @if ($errors->has('name'))
                                @foreach($errors->get('name') as $error)
                                    <span class="help-block">{{ $error }}</span>
                                @endforeach
                            @endif
                        </div>
                        <div class="form-group col-xs-6" id="phoneDiv">
                            <label for="phone">Phone</label>
                            <input type="number" class="form-control" name="phone" id="phone" placeholder="Phone"
                                   value="{{ $customer->phone }}" required>
                            @if ($errors->has('phone'))
                                @foreach($errors->get('phone') as $error)
                                    <span class="help-block">{{ $error }}</span>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-xs-6" id="addressDiv">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" name="address" id="address"
                                   placeholder="Address" value="{{ $customer->address }}" required>
                            @if ($errors->has('address'))
                                @foreach($errors->get('address') as $error)
                                    <span class="help-block">{{ $error }}</span>
                                @endforeach
                            @endif
                        </div>
                        <div class="form-group col-xs-6" id="mailDiv">
                            <label for="mail">E-mail</label>
                            <input type="email" class="form-control" name="mail" id="mail" placeholder="E-mail"
                                   value="{{ $customer->mail }}" required>
                            @if ($errors->has('mail'))
                                @foreach($errors->get('mail') as $error)
                                    <span class="help-block">{{ $error }}</span>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-xs-6" id="zipDiv">
                            <label for="zip">Zip code</label>
                            <input type="text" class="form-control" name="zip" id="zip" placeholder="Zip code"
                                   value="{{ $customer->zip }}" required>
                            @if ($errors->has('zip'))
                                @foreach($errors->get('zip') as $error)
                                    <span class="help-block">{{ $error }}</span>
                                @endforeach
                            @endif
                        </div>
                        <div class="form-group col-xs-6" id="countryDiv">
                            <label for="country">Country</label>
                            <input type="text" class="form-control" name="country" id="country"
                                   placeholder="Country" value="{{ $customer->country }}" required>
                            @if ($errors->has('country'))
                                @foreach($errors->get('country') as $error)
                                    <span class="help-block">{{ $error }}</span>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-xs-6" id="cityDiv">
                            <label for="city">City</label>
                            <input type="text" class="form-control" name="city" id="city" placeholder="City"
                                   value="{{ $customer->city }}" required>
                            @if ($errors->has('city'))
                                @foreach($errors->get('city') as $error)
                                    <span class="help-block">{{ $error }}</span>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update customer</button>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('postJquery')
    @parent
    @if ($errors->has('name'))
        $("#nameDiv").addClass("has-error");
    @endif
    @if ($errors->has('phone'))
        $("#phoneDiv").addClass("has-error");
    @endif
    @if ($errors->has('address'))
        $("#addressDiv").addClass("has-error");
    @endif
    @if ($errors->has('mail'))
        $("#mailDiv").addClass("has-error");
    @endif
    @if ($errors->has('zip'))
        $("#zipDiv").addClass("has-error");
    @endif
    @if ($errors->has('country'))
        $("#countryDiv").addClass("has-error");
    @endif
    @if ($errors->has('city'))
        $("#cityDiv").addClass("has-error");
    @endif
@endsection
