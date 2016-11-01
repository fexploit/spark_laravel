@extends('spark::layouts.app')

@section('content')
    <div class="container">
        <h3>Company</h3>
        <table class="table table-striped table-responsive">
            <thead>
            <!-- headers here -->
            <tr>
                <th>Name</th>
                <th>E-mail</th>
                <th>Phone</th>
                <th>Street</th>
                <th>Zip</th>
                <th>City</th>
                <th>Country</th>
                <th>KVK</th>
                <th>BTW</th>
                <th>Start date</th>
                <th>End date</th>
            </tr>
            </thead>

            <tbody>
            <!-- foreach loop here -->
            <tr>
                <td>{{ $customer->c_name }}</td>
                <td>{{ $customer->c_email }}</td>
                <td>{{ $customer->c_phone }}</td>
                <td>{{ $customer->c_street }} {{ $customer->c_streetNum }}</td>
                <td>{{ $customer->c_zip }}</td>
                <td>{{ $customer->c_city }}</td>
                <td>{{ $customer->c_country }}</td>
                <td>{{ $customer->c_kvk }}</td>
                <td>{{ $customer->c_btw }}</td>
                <td>{{ $customer->created_at }}</td>
                <td>{{ $customer->ending_on }}</td>
            </tr>
            </tbody>
        </table>
        <button id="editCompany" class="btn btn-warning" type="button"
                onclick="$('#companyForm').show(1000); $('#editCompany').hide(1000);">
            edit
        </button>
        <br/>
        <form id="companyForm" name="companyForm" role="form" action="/company/{{ $customer->id }}"
              method="post" hidden>
            {{ method_field('patch') }}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="container">
                <!-- row 1 -->
                <div class="row">
                    <div class="form-group col-xs-4" id="c_nameDiv">
                        <label class="control-label" for="c_name">Name</label>
                        <input type="text" class="form-control" id="c_name" name="c_name"
                               value="{{ $customer->c_name }}">
                        @if ($errors->has('c_name'))
                            @foreach($errors->get('c_name') as $error)
                                <span class="help-block">{{ $error }}</span>
                            @endforeach
                        @endif
                    </div>
                    <div class="form-group col-xs-4" id="c_emailDiv">
                        <label class="control-label" for="c_email">E-mail address</label>
                        <input type="text" class="form-control" id="c_email" name="c_email"
                               value="{{ $customer->c_email }}">
                        @if ($errors->has('c_email'))
                            @foreach($errors->get('c_email') as $error)
                                <span class="help-block">{{ $error }}</span>
                            @endforeach
                        @endif
                    </div>
                    <div class="form-group col-xs-4" id="c_phoneDiv">
                        <label class="control-label" for="c_phone">Phone number</label>
                        <input type="number" class="form-control" id="c_phone" name="c_phone"
                               value="{{ $customer->c_phone }}">
                        @if ($errors->has('c_phone'))
                            @foreach($errors->get('c_phone') as $error)
                                <span class="help-block">{{ $error }}</span>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!-- /row 1 -->

                <!-- row 2 -->
                <div class="row">
                    <div class="form-group col-xs-4" id="c_streetDiv">
                        <label class="control-label" for="c_street">Street</label>
                        <input type="text" class="form-control" id="c_street" name="c_street"
                               value="{{ $customer->c_street }}">
                        @if ($errors->has('c_street'))
                            @foreach($errors->get('c_street') as $error)
                                <span class="help-block">{{ $error }}</span>
                            @endforeach
                        @endif
                    </div>
                    <div class="form-group col-xs-4" id="c_streetNumDiv">
                        <label class="control-label" for="c_streetNum">Number</label>
                        <input type="number" class="form-control" id="c_streetNum" name="c_streetNum"
                               value="{{ $customer->c_streetNum }}">
                        @if ($errors->has('c_streetNum'))
                            @foreach($errors->get('c_streetNum') as $error)
                                <span class="help-block">{{ $error }}</span>
                            @endforeach
                        @endif
                    </div>
                    <div class="form-group col-xs-4" id="c_countryDiv">
                        <label class="control-label" for="c_country">Country</label>
                        <input type="text" class="form-control" id="c_country" name="c_country"
                               value="{{ $customer->c_country }}">
                        @if ($errors->has('c_country'))
                            @foreach($errors->get('c_country') as $error)
                                <span class="help-block">{{ $error }}</span>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!-- /row 2 -->

                <!-- row 3 -->
                <div class="row">
                    <div class="form-group col-xs-4" id="c_zipDiv">
                        <label class="control-label" for="c_zip">Zip code</label>
                        <input type="text" class="form-control" id="c_zip" name="c_zip"
                               value="{{ $customer->c_zip }}">
                        @if ($errors->has('c_zip'))
                            @foreach($errors->get('c_zip') as $error)
                                <span class="help-block">{{ $error }}</span>
                            @endforeach
                        @endif
                    </div>
                    <div class="form-group col-xs-4" id="c_cityDiv">
                        <label class="control-label" for="c_city">City</label>
                        <input type="text" class="form-control" id="c_city" name="c_city"
                               value="{{ $customer->c_city }}">
                        @if ($errors->has('c_city'))
                            @foreach($errors->get('c_city') as $error)
                                <span class="help-block">{{ $error }}</span>
                            @endforeach
                        @endif
                    </div>
                    <div class="form-group col-xs-4" id="ending_onDiv">
                        <label class="control-label" for="ending_on">End date</label>
                        <input type="datetime" class="form-control" id="ending_on" name="ending_on"
                               value="{{ $customer->ending_on }}">
                        @if ($errors->has('ending_on'))
                            @foreach($errors->get('ending_on') as $error)
                                <span class="help-block">{{ $error }}</span>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!-- /row 3 -->

                <!-- row 4 -->
                <div class="row">
                    <div class="form-group col-xs-4" id="c_kvkDiv">
                        <label class="control-label" for="c_kvk">KVK</label>
                        <input type="number" class="form-control" id="c_kvk" name="c_kvk"
                               value="{{ $customer->c_kvk }}">
                        @if ($errors->has('c_kvk'))
                            @foreach($errors->get('c_kvk') as $error)
                                <span class="help-block">{{ $error }}</span>
                            @endforeach
                        @endif
                    </div>
                    <div class="form-group col-xs-4" id="c_btwDiv">
                        <label class="control-label" for="c_btw">BTW</label>
                        <input type="text" class="form-control" id="c_btw" name="c_btw"
                               value="{{ $customer->c_btw }}">
                        @if ($errors->has('c_btw'))
                            @foreach($errors->get('c_btw') as $error)
                                <span class="help-block">{{ $error }}</span>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!-- /row 4 -->
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="button" onclick="$('#companyForm').hide(1000); $('#editCompany').show(1000);"
                        class="btn btn-danger">
                    Close
                </button>
            </div>
        </form>
        <br/>

        <h3>Contact person</h3>
        <table class="table table-striped table-responsive">
            <thead>
            <!-- headers here -->
            <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>E-mail</th>
                <th>Phone</th>
                <th>Mobile</th>
                <th>Street</th>
                <th>Zip</th>
                <th>City</th>
                <th>Country</th>
            </tr>
            </thead>

            <tbody>
            <!-- foreach loop here -->
            <tr>
                <td>{{ $customer->p_firstName }}</td>
                <td>{{ $customer->p_lastName }}</td>
                <td>{{ $customer->p_email }}</td>
                <td>{{ $customer->p_phone }}</td>
                <td>{{ $customer->p_mobile }}</td>
                <td>{{ $customer->p_street }} {{ $customer->p_streetNum }}</td>
                <td>{{ $customer->p_zip }}</td>
                <td>{{ $customer->p_city }}</td>
                <td>{{ $customer->p_country }}</td>
            </tr>
            </tbody>
        </table>
        <button id="editPerson" class="btn btn-warning" type="button"
                onclick="$('#personForm').show(1000); $('#editPerson').hide(1000);">
            edit
        </button>
        <br/>
        <form id="personForm" name="personForm" role="form" action="/person/{{ $customer->id }}"
              method="post" hidden>
            {{ method_field('patch') }}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="container">
                <!-- row 1 -->
                <div class="row">
                    <div class="form-group col-xs-4" id="p_firstNameDiv">
                        <label class="control-label" for="p_firstName">First name</label>
                        <input type="text" class="form-control" id="p_firstName" name="p_firstName"
                               value="{{ $customer->p_firstName }}">
                        @if ($errors->has('p_firstName'))
                            @foreach($errors->get('p_firstName') as $error)
                                <span class="help-block">{{ $error }}</span>
                            @endforeach
                        @endif
                    </div>
                    <div class="form-group col-xs-4" id="p_lastNameDiv">
                        <label class="control-label" for="p_lastName">Last name</label>
                        <input type="text" class="form-control" id="p_lastName" name="p_lastName"
                               value="{{ $customer->p_lastName }}">
                        @if ($errors->has('p_lastName'))
                            @foreach($errors->get('p_lastName') as $error)
                                <span class="help-block">{{ $error }}</span>
                            @endforeach
                        @endif
                    </div>
                    <div class="form-group col-xs-4" id="p_emailDiv">
                        <label class="control-label" for="p_email">E-mail address</label>
                        <input type="text" class="form-control" id="p_email" name="p_email"
                               value="{{ $customer->p_email }}">
                        @if ($errors->has('p_email'))
                            @foreach($errors->get('p_email') as $error)
                                <span class="help-block">{{ $error }}</span>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!-- /row 1 -->

                <!-- row 2 -->
                <div class="row">
                    <div class="form-group col-xs-4" id="p_phoneDiv">
                        <label class="control-label" for="p_phone">Phone number</label>
                        <input type="number" class="form-control" id="p_phone" name="p_phone"
                               value="{{ $customer->p_phone }}">
                        @if ($errors->has('p_phone'))
                            @foreach($errors->get('p_phone') as $error)
                                <span class="help-block">{{ $error }}</span>
                            @endforeach
                        @endif
                    </div>
                    <div class="form-group col-xs-4" id="p_mobileDiv">
                        <label class="control-label" for="p_mobile">Mobile number</label>
                        <input type="number" class="form-control" id="p_mobile" name="p_mobile"
                               value="{{ $customer->p_mobile }}">
                        @if ($errors->has('p_mobile'))
                            @foreach($errors->get('p_mobile') as $error)
                                <span class="help-block">{{ $error }}</span>
                            @endforeach
                        @endif
                    </div>
                    <div class="form-group col-xs-4" id="p_countryDiv">
                        <label class="control-label" for="p_country">Country</label>
                        <input type="text" class="form-control" id="p_country" name="p_country"
                               value="{{ $customer->p_country }}">
                        @if ($errors->has('p_country'))
                            @foreach($errors->get('p_country') as $error)
                                <span class="help-block">{{ $error }}</span>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!-- /row 2 -->

                <!-- row 2 -->
                <div class="row">
                    <div class="form-group col-xs-4" id="p_streetDiv">
                        <label class="control-label" for="p_street">Street</label>
                        <input type="text" class="form-control" id="p_street" name="p_street"
                               value="{{ $customer->p_street }}">
                        @if ($errors->has('p_street'))
                            @foreach($errors->get('p_street') as $error)
                                <span class="help-block">{{ $error }}</span>
                            @endforeach
                        @endif
                    </div>
                    <div class="form-group col-xs-4" id="p_streetNumDiv">
                        <label class="control-label" for="p_streetNum">Number</label>
                        <input type="number" class="form-control" id="p_streetNum" name="p_streetNum"
                               value="{{ $customer->p_streetNum }}">
                        @if ($errors->has('p_streetNum'))
                            @foreach($errors->get('p_streetNum') as $error)
                                <span class="help-block">{{ $error }}</span>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!-- /row 2 -->

                <!-- row 3 -->
                <div class="row">
                    <div class="form-group col-xs-4" id="p_zipDiv">
                        <label class="control-label" for="p_zip">Zip code</label>
                        <input type="text" class="form-control" id="p_zip" name="p_zip"
                               value="{{ $customer->p_zip }}">
                        @if ($errors->has('p_zip'))
                            @foreach($errors->get('p_zip') as $error)
                                <span class="help-block">{{ $error }}</span>
                            @endforeach
                        @endif
                    </div>
                    <div class="form-group col-xs-4" id="p_cityDiv">
                        <label class="control-label" for="p_city">City</label>
                        <input type="text" class="form-control" id="p_city" name="p_city"
                               value="{{ $customer->p_city }}">
                        @if ($errors->has('p_city'))
                            @foreach($errors->get('p_city') as $error)
                                <span class="help-block">{{ $error }}</span>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!-- /row 3 -->
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="button" onclick="$('#personForm').hide(1000); $('#editPerson').show(1000);"
                        class="btn btn-danger">
                    Close
                </button>
            </div>
        </form>
    </div>
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
