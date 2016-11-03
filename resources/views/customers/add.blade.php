@extends('spark::layouts.app')

@section('content')
    <!-- add customer panel -->
    <div id="customer_panel" class="col-md-10 col-md-offset-1">
        <form role="form" action="/customers/store" method="post">
            <!-- company panel -->
            <div id="company_panel" class="pull-left col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">Company</div>
                    <div class="panel-body">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <!-- row 1 -->
                        <div class="row">
                            <!-- company name -->
                            <div class="form-group col-xs-6" id="nameDiv">
                                <label for="name" class="control-label">Name</label>
                                <input type="text" class="form-control" name="name" id="name"
                                       placeholder="Max. 100, unique" value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                    @foreach($errors->get('name') as $error)
                                        <span class="help-block">{{ $error }}</span>
                                    @endforeach
                                @endif
                            </div>

                            <!-- company mail -->
                            <div class="form-group col-xs-6" id="emailDiv">
                                <label for="email" class="control-label">E-mail address</label>
                                <input type="text" class="form-control" name="email" id="email"
                                       placeholder="Valid e-mail, unique" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    @foreach($errors->get('email') as $error)
                                        <span class="help-block">{{ $error }}</span>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <!-- /row 1 -->

                        <!-- row 1.2 -->
                        <div class="row">
                            <!-- company phone number -->
                            <div class="form-group col-xs-6" id="phoneDiv">
                                <label for="phone" class="control-label">Phone number</label>
                                <input type="number" class="form-control" name="phone" id="phone"
                                       placeholder="Max. 15 long" value="{{ old('phone') }}">
                                @if ($errors->has('phone'))
                                    @foreach($errors->get('phone') as $error)
                                        <span class="help-block">{{ $error }}</span>
                                    @endforeach
                                @endif
                            </div>

                            <!-- end date -->
                            <div class="form-group col-xs-6" id="ending_onDiv">
                                <label for="ending_on" class="control-label">End date</label>
                                <input type="datetime-local" class="form-control" name="ending_on" id="ending_on"
                                       value="{{ old('ending_on') }}">
                                @if ($errors->has('ending_on'))
                                    @foreach($errors->get('ending_on') as $error)
                                        <span class="help-block">{{ $error }}</span>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <!-- /row 1.2 -->
                        <br/>
                        <!-- row 2 -->
                        <div class="row">
                            <!-- company street -->
                            <div class="form-group col-xs-6" id="streetDiv">
                                <label for="street" class="control-label">Street name</label>
                                <input type="text" class="form-control" name="street" id="street"
                                       placeholder="Max. 100 long" value="{{ old('street') }}">
                                @if ($errors->has('street'))
                                    @foreach($errors->get('street') as $error)
                                        <span class="help-block">{{ $error }}</span>
                                    @endforeach
                                @endif
                            </div>

                            <!-- company street number -->
                            <div class="form-group col-xs-6" id="streetNumDiv">
                                <label for="streetNum" class="control-label">Street number</label>
                                <input type="number" class="form-control" name="streetNum" id="streetNum"
                                       placeholder="Max. 11 long" value="{{ old('streetNum') }}">
                                @if ($errors->has('streetNum'))
                                    @foreach($errors->get('streetNum') as $error)
                                        <span class="help-block">{{ $error }}</span>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <!-- /row 2 -->

                        <!-- row 3 -->
                        <div class="row">
                            <!-- company zip code -->
                            <div class="form-group col-xs-6" id="zipDiv">
                                <label for="zip" class="control-label">Zip code</label>
                                <input type="text" class="form-control" name="zip" id="zip"
                                       placeholder="Max. 10 long" value="{{ old('zip') }}">
                                @if ($errors->has('zip'))
                                    @foreach($errors->get('zip') as $error)
                                        <span class="help-block">{{ $error }}</span>
                                    @endforeach
                                @endif
                            </div>

                            <!-- company city -->
                            <div class="form-group col-xs-6" id="cityDiv">
                                <label for="city" class="control-label">City</label>
                                <input type="text" class="form-control" name="city" id="city"
                                       placeholder="Max. 100 long" value="{{ old('city') }}">
                                @if ($errors->has('city'))
                                    @foreach($errors->get('city') as $error)
                                        <span class="help-block">{{ $error }}</span>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <!-- /row 3 -->

                        <!-- row 4 -->
                        <div class="row">
                            <!-- company country -->
                            <div class="form-group col-xs-6" id="countryDiv">
                                <label for="country" class="control-label">Country</label>
                                <input type="text" class="form-control" name="country" id="country"
                                       placeholder="Max. 100 long" value="{{ old('country') }}">
                                @if ($errors->has('country'))
                                    @foreach($errors->get('country') as $error)
                                        <span class="help-block">{{ $error }}</span>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <!-- /row 4 -->
                        <br/>
                        <!-- row 5 -->
                        <div class="row">
                            <!-- company kvk -->
                            <div class="form-group col-xs-6" id="kvkDiv">
                                <label for="kvk" class="control-label">KVK</label>
                                <input type="number" class="form-control" name="kvk" id="kvk"
                                       placeholder="Max. 11, unique" value="{{ old('kvk') }}">
                                @if ($errors->has('kvk'))
                                    @foreach($errors->get('kvk') as $error)
                                        <span class="help-block">{{ $error }}</span>
                                    @endforeach
                                @endif
                            </div>

                            <!-- company btw -->
                            <div class="form-group col-xs-6" id="btwDiv">
                                <label for="btw" class="control-label">BTW</label>
                                <input type="text" class="form-control" name="btw" id="btw"
                                       placeholder="Max. 15, unique" value="{{ old('btw') }}">
                                @if ($errors->has('btw'))
                                    @foreach($errors->get('btw') as $error)
                                        <span class="help-block">{{ $error }}</span>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <!-- /row 5 -->
                    </div>
                </div>
            </div>
            <!-- /company panel -->

            <!-- submit button -->
            <div class="col-xs-2" style="margin-bottom: 15px;">
                <button type="submit" class="btn btn-primary col-xs-offset-2">Add customer</button>
            </div>

            <!-- /submit button -->
        </form>
    </div>
    <!-- /add customer panel -->
@endsection

@section('postJquery')
    @parent
    <!-- Company error if's -->
    @if ($errors->has('name'))
        $("#nameDiv").addClass("has-error");
    @endif
    @if ($errors->has('email'))
        $("#emailDiv").addClass("has-error");
    @endif
    @if ($errors->has('phone'))
        $("#phoneDiv").addClass("has-error");
    @endif
    @if ($errors->has('street'))
        $("#streetDiv").addClass("has-error");
    @endif
    @if ($errors->has('streetNum'))
        $("#streetNumDiv").addClass("has-error");
    @endif
    @if ($errors->has('zip'))
        $("#zipDiv").addClass("has-error");
    @endif
    @if ($errors->has('city'))
        $("#cityDiv").addClass("has-error");
    @endif
    @if ($errors->has('country'))
        $("#countryDiv").addClass("has-error");
    @endif
    @if ($errors->has('kvk'))
        $("#kvkDiv").addClass("has-error");
    @endif
    @if ($errors->has('btw'))
        $("#btwDiv").addClass("has-error");
    @endif
    <!-- /company error if's -->
@endsection
