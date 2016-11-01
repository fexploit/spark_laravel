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
                            <div class="form-group col-xs-6" id="c_nameDiv">
                                <label for="c_name" class="control-label">Name</label>
                                <input type="text" class="form-control" name="c_name" id="c_name"
                                       placeholder="Max. 100, unique" value="{{ old('c_name') }}">
                                @if ($errors->has('c_name'))
                                    @foreach($errors->get('c_name') as $error)
                                        <span class="help-block">{{ $error }}</span>
                                    @endforeach
                                @endif
                            </div>

                            <!-- company mail -->
                            <div class="form-group col-xs-6" id="c_emailDiv">
                                <label for="c_email" class="control-label">E-mail address</label>
                                <input type="text" class="form-control" name="c_email" id="c_email"
                                       placeholder="Valid e-mail, unique" value="{{ old('c_email') }}">
                                @if ($errors->has('c_email'))
                                    @foreach($errors->get('c_email') as $error)
                                        <span class="help-block">{{ $error }}</span>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <!-- /row 1 -->

                        <!-- row 1.2 -->
                        <div class="row">
                            <!-- company phone number -->
                            <div class="form-group col-xs-6" id="c_phoneDiv">
                                <label for="c_phone" class="control-label">Phone number</label>
                                <input type="number" class="form-control" name="c_phone" id="c_phone"
                                       placeholder="Max. 15 long" value="{{ old('c_phone') }}">
                                @if ($errors->has('c_phone'))
                                    @foreach($errors->get('c_phone') as $error)
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
                            <div class="form-group col-xs-6" id="c_streetDiv">
                                <label for="c_street" class="control-label">Street name</label>
                                <input type="text" class="form-control" name="c_street" id="c_street"
                                       placeholder="Max. 100 long" value="{{ old('c_street') }}">
                                @if ($errors->has('c_street'))
                                    @foreach($errors->get('c_street') as $error)
                                        <span class="help-block">{{ $error }}</span>
                                    @endforeach
                                @endif
                            </div>

                            <!-- company street number -->
                            <div class="form-group col-xs-6" id="c_streetNumDiv">
                                <label for="c_streetNum" class="control-label">Street number</label>
                                <input type="number" class="form-control" name="c_streetNum" id="c_streetNum"
                                       placeholder="Max. 11 long" value="{{ old('c_streetNum') }}">
                                @if ($errors->has('c_streetNum'))
                                    @foreach($errors->get('c_streetNum') as $error)
                                        <span class="help-block">{{ $error }}</span>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <!-- /row 2 -->

                        <!-- row 3 -->
                        <div class="row">
                            <!-- company zip code -->
                            <div class="form-group col-xs-6" id="c_zipDiv">
                                <label for="c_zip" class="control-label">Zip code</label>
                                <input type="text" class="form-control" name="c_zip" id="c_zip"
                                       placeholder="Max. 10 long" value="{{ old('c_zip') }}">
                                @if ($errors->has('c_zip'))
                                    @foreach($errors->get('c_zip') as $error)
                                        <span class="help-block">{{ $error }}</span>
                                    @endforeach
                                @endif
                            </div>

                            <!-- company city -->
                            <div class="form-group col-xs-6" id="c_cityDiv">
                                <label for="c_city" class="control-label">City</label>
                                <input type="text" class="form-control" name="c_city" id="c_city"
                                       placeholder="Max. 100 long" value="{{ old('c_city') }}">
                                @if ($errors->has('c_city'))
                                    @foreach($errors->get('c_city') as $error)
                                        <span class="help-block">{{ $error }}</span>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <!-- /row 3 -->

                        <!-- row 4 -->
                        <div class="row">
                            <!-- company country -->
                            <div class="form-group col-xs-6" id="c_countryDiv">
                                <label for="c_country" class="control-label">Country</label>
                                <input type="text" class="form-control" name="c_country" id="c_country"
                                       placeholder="Max. 100 long" value="{{ old('c_country') }}">
                                @if ($errors->has('c_country'))
                                    @foreach($errors->get('c_country') as $error)
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
                            <div class="form-group col-xs-6" id="c_kvkDiv">
                                <label for="c_kvk" class="control-label">KVK</label>
                                <input type="number" class="form-control" name="c_kvk" id="c_kvk"
                                       placeholder="Max. 11, unique" value="{{ old('c_kvk') }}">
                                @if ($errors->has('c_kvk'))
                                    @foreach($errors->get('c_kvk') as $error)
                                        <span class="help-block">{{ $error }}</span>
                                    @endforeach
                                @endif
                            </div>

                            <!-- company btw -->
                            <div class="form-group col-xs-6" id="c_btwDiv">
                                <label for="c_btw" class="control-label">BTW</label>
                                <input type="text" class="form-control" name="c_btw" id="c_btw"
                                       placeholder="Max. 15, unique" value="{{ old('c_btw') }}">
                                @if ($errors->has('c_btw'))
                                    @foreach($errors->get('c_btw') as $error)
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

            <!-- contact person panel -->
            <div id="contact_panel" class="pull-right col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">Contact person</div>
                    <div class="panel-body">
                        <!-- row 1 -->
                        <div class="row">
                            <!-- person first name -->
                            <div class="form-group col-xs-6" id="p_firstNameDiv">
                                <label for="p_firstName" class="control-label">First name</label>
                                <input type="text" class="form-control" name="p_firstName" id="p_firstName"
                                       placeholder="Max. 50 long" value="{{ old('p_firstName') }}">
                                @if ($errors->has('p_firstName'))
                                    @foreach($errors->get('p_firstName') as $error)
                                        <span class="help-block">{{ $error }}</span>
                                    @endforeach
                                @endif
                            </div>

                            <!-- person last name -->
                            <div class="form-group col-xs-6" id="p_lastNameDiv">
                                <label for="p_lastName" class="control-label">Last name</label>
                                <input type="text" class="form-control" name="p_lastName" id="p_lastName"
                                       placeholder="Max. 50 long" value="{{ old('p_lastName') }}">
                                @if ($errors->has('p_lastName'))
                                    @foreach($errors->get('p_lastName') as $error)
                                        <span class="help-block">{{ $error }}</span>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <!-- /row 1 -->

                        <!-- row 2 -->
                        <div class="row">
                            <!-- person email -->
                            <div class="form-group col-xs-6" id="p_emailDiv">
                                <label for="p_email" class="control-label">E-mail address</label>
                                <input type="text" class="form-control" name="p_email" id="p_email"
                                       placeholder="Valid e-mail, unique" value="{{ old('p_email') }}">
                                @if ($errors->has('p_email'))
                                    @foreach($errors->get('p_email') as $error)
                                        <span class="help-block">{{ $error }}</span>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <!-- /row 2 -->
                        <br/>
                        <!-- row 3 -->
                        <div class="row">
                            <!-- person phone number -->
                            <div class="form-group col-xs-6" id="p_phoneDiv">
                                <label for="p_phone" class="control-label">Phone number</label>
                                <input type="number" class="form-control" name="p_phone" id="p_phone"
                                       placeholder="Max. 15 long" value="{{ old('p_phone') }}">
                                @if ($errors->has('p_phone'))
                                    @foreach($errors->get('p_phone') as $error)
                                        <span class="help-block">{{ $error }}</span>
                                    @endforeach
                                @endif
                            </div>

                            <!-- person mobile number -->
                            <div class="form-group col-xs-6" id="p_mobileDiv">
                                <label for="p_mobile" class="control-label">Mobile number</label>
                                <input type="number" class="form-control" name="p_mobile" id="p_mobile"
                                       placeholder="Max. 15 long" value="{{ old('p_mobile') }}">
                                @if ($errors->has('p_mobile'))
                                    @foreach($errors->get('p_mobile') as $error)
                                        <span class="help-block">{{ $error }}</span>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <!-- /row 3 -->
                        <br/>
                        <!-- row 4 -->
                        <div class="row">
                            <!-- person street -->
                            <div class="form-group col-xs-6" id="p_streetDiv">
                                <label for="p_street" class="control-label">Street</label>
                                <input type="text" class="form-control" name="p_street" id="p_street"
                                       placeholder="Max. 100 long" value="{{ old('p_street') }}">
                                @if ($errors->has('p_street'))
                                    @foreach($errors->get('p_street') as $error)
                                        <span class="help-block">{{ $error }}</span>
                                    @endforeach
                                @endif
                            </div>

                            <!-- person street number -->
                            <div class="form-group col-xs-6" id="p_streetNumDiv">
                                <label for="p_streetNum" class="control-label">Number</label>
                                <input type="number" class="form-control" name="p_streetNum" id="p_streetNum"
                                       placeholder="Max. 11 long" value="{{ old('p_streetNum') }}">
                                @if ($errors->has('p_streetNum'))
                                    @foreach($errors->get('p_streetNum') as $error)
                                        <span class="help-block">{{ $error }}</span>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <!-- /row 4 -->

                        <!-- row 5 -->
                        <div class="row">
                            <!-- person zip -->
                            <div class="form-group col-xs-6" id="p_zipDiv">
                                <label for="p_zip" class="control-label">Zip code</label>
                                <input type="text" class="form-control" name="p_zip" id="p_zip"
                                       placeholder="Max. 10 long" value="{{ old('p_zip') }}">
                                @if ($errors->has('p_zip'))
                                    @foreach($errors->get('p_zip') as $error)
                                        <span class="help-block">{{ $error }}</span>
                                    @endforeach
                                @endif
                            </div>

                            <!-- person city -->
                            <div class="form-group col-xs-6" id="p_cityDiv">
                                <label for="p_city" class="control-label">City</label>
                                <input type="text" class="form-control" name="p_city" id="p_city"
                                       placeholder="Max. 100 long" value="{{ old('p_city') }}">
                                @if ($errors->has('p_city'))
                                    @foreach($errors->get('p_city') as $error)
                                        <span class="help-block">{{ $error }}</span>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <!-- /row 5 -->

                        <!-- row 6 -->
                        <div class="row">
                            <!-- person country -->
                            <div class="form-group col-xs-6" id="p_countryDiv">
                                <label for="p_country" class="control-label">Country</label>
                                <input type="text" class="form-control" name="p_country" id="p_country"
                                       placeholder="Max. 100 long" value="{{ old('p_country') }}">
                                @if ($errors->has('p_country'))
                                    @foreach($errors->get('p_country') as $error)
                                        <span class="help-block">{{ $error }}</span>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <!-- /row 6 -->
                    </div>
                </div>
            </div>
            <!-- /contact person panel -->

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
    @if ($errors->has('c_name'))
        $("#c_nameDiv").addClass("has-error");
    @endif
    @if ($errors->has('c_email'))
        $("#c_emailDiv").addClass("has-error");
    @endif
    @if ($errors->has('c_phone'))
        $("#c_phoneDiv").addClass("has-error");
    @endif
    @if ($errors->has('c_street'))
        $("#c_streetDiv").addClass("has-error");
    @endif
    @if ($errors->has('c_streetNum'))
        $("#c_streetNumDiv").addClass("has-error");
    @endif
    @if ($errors->has('c_zip'))
        $("#c_zipDiv").addClass("has-error");
    @endif
    @if ($errors->has('c_city'))
        $("#c_cityDiv").addClass("has-error");
    @endif
    @if ($errors->has('c_country'))
        $("#c_countryDiv").addClass("has-error");
    @endif
    @if ($errors->has('c_kvk'))
        $("#c_kvkDiv").addClass("has-error");
    @endif
    @if ($errors->has('c_btw'))
        $("#c_btwDiv").addClass("has-error");
    @endif
    <!-- /company error if's -->

    <!-- contact person errors -->
    @if ($errors->has('p_firstName'))
        $("#p_firstNameDiv").addClass("has-error");
    @endif
    @if ($errors->has('p_lastName'))
        $("#p_lastNameDiv").addClass("has-error");
    @endif
    @if ($errors->has('p_email'))
        $("#p_emailDiv").addClass("has-error");
    @endif
    @if ($errors->has('p_phone'))
        $("#p_phoneDiv").addClass("has-error");
    @endif
    @if ($errors->has('p_mobile'))
        $("#p_mobileDiv").addClass("has-error");
    @endif
    @if ($errors->has('p_street'))
        $("#p_streetDiv").addClass("has-error");
    @endif
    @if ($errors->has('p_streetNum'))
        $("#p_streetNumDiv").addClass("has-error");
    @endif
    @if ($errors->has('p_zip'))
        $("#p_zipDiv").addClass("has-error");
    @endif
    @if ($errors->has('p_city'))
        $("#p_cityDiv").addClass("has-error");
    @endif
    @if ($errors->has('p_country'))
        $("#p_countryDiv").addClass("has-error");
    @endif
    @if ($errors->has('ending_on'))
        $("#ending_onDiv").addClass("has-error");
    @endif
    <!-- /contact person errors -->
@endsection
