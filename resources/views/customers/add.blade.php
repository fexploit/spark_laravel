@extends('spark::layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-7 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Add customer</div>
                <div class="panel-body">
                    <form role="form" action="/customers/store" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name"
                                       required>
                                @if ($errors->has('name'))
                                    @foreach($errors->get('name') as $error)
                                        <span class="help-block">{{ $error }}</span>
                                    @endforeach
                                @endif
                            </div>
                            <div class="form-group col-xs-6">
                                <label for="phone">Phone</label>
                                <input type="number" class="form-control" name="phone" id="phone" placeholder="Phone"
                                       required>
                                @if ($errors->has('phone'))
                                    @foreach($errors->get('phone') as $error)
                                        <span class="help-block">{{ $error }}</span>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" name="address" id="address"
                                       placeholder="Address" required>
                                @if ($errors->has('address'))
                                    @foreach($errors->get('address') as $error)
                                        <span class="help-block">{{ $error }}</span>
                                    @endforeach
                                @endif
                            </div>
                            <div class="form-group col-xs-6">
                                <label for="mail">E-mail</label>
                                <input type="email" class="form-control" name="mail" id="mail" placeholder="E-mail"
                                       required>
                                @if ($errors->has('mail'))
                                    @foreach($errors->get('mail') as $error)
                                        <span class="help-block">{{ $error }}</span>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label for="zip">Zip code</label>
                                <input type="text" class="form-control" name="zip" id="zip" placeholder="Zip code"
                                       required>
                                @if ($errors->has('zip'))
                                    @foreach($errors->get('zip') as $error)
                                        <span class="help-block">{{ $error }}</span>
                                    @endforeach
                                @endif
                            </div>
                            <div class="form-group col-xs-6">
                                <label for="country">Country</label>
                                <input type="text" class="form-control" name="country" id="country"
                                       placeholder="Country" required>
                                @if ($errors->has('country'))
                                    @foreach($errors->get('country') as $error)
                                        <span class="help-block">{{ $error }}</span>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label for="city">City</label>
                                <input type="text" class="form-control" name="city" id="city" placeholder="City"
                                       required>
                                @if ($errors->has('city'))
                                    @foreach($errors->get('city') as $error)
                                        <span class="help-block">{{ $error }}</span>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <button type="submit" class="btn btn-default">Add customer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
