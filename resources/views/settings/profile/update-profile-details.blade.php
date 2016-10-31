<update-profile-details :user="user" inline-template>
    <div>
        <div class="panel panel-default">
            <div class="panel-heading">Profile details</div>
            <div class="panel-body">
                <!-- Success Message -->
                <div class="alert alert-success" v-if="form.successful">
                    Your profile has been updated!
                </div>

                <form role="form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <!-- start form row -->
                    <div class="row">
                        <div class="form-group col-xs-6" :class="{'has-error': form.errors.has('firstName')}">
                            <label for="firstName" class="control-label">First name</label>
                            <input type="text" class="form-control" name="firstName" id="firstName"
                                   value="{{ $user->firstName}}" v-model="form.firstName">

                            <span class="help-block" v-show="form.errors.has('firstName')">
                                    @{{ form.errors.get('firstName') }}
                                </span>
                        </div>
                        <div class="form-group col-xs-6" :class="{'has-error': form.errors.has('lastName')}">
                            <label for="lastName" class="control-label">Last name</label>
                            <input type="text" class="form-control" name="lastName" id="lastName"
                                   value="{{ $user->lastName}}" v-model="form.lastName">

                            <span class="help-block" v-show="form.errors.has('lastName')">
                                    @{{ form.errors.get('lastName') }}
                                </span>
                        </div>
                    </div>
                    <!-- end form row -->

                    <!-- start form row -->
                    <div class="row">
                        <div class="form-group col-xs-6" :class="{'has-error': form.errors.has('companyName')}">
                            <label for="companyName" class="control-label">Company name</label>
                            <input type="text" class="form-control" name="companyName" id="companyName"
                                   value="{{ $user->companyName}}" v-model="form.companyName">

                            <span class="help-block" v-show="form.errors.has('companyName')">
                                    @{{ form.errors.get('companyName') }}
                                </span>
                        </div>
                        <div class="form-group col-xs-6" :class="{'has-error': form.errors.has('email')}">
                            <label for="email" class="control-label">E-mail address</label>
                            <input type="text" class="form-control" name="email" id="email"
                                   value="{{ $user->email}}" v-model="form.email">

                            <span class="help-block" v-show="form.errors.has('email')">
                                    @{{ form.errors.get('email') }}
                                </span>
                        </div>
                    </div>
                    <!-- end form row -->

                    <!-- start form row -->
                    <div class="row">
                        <div class="form-group col-xs-6" :class="{'has-error': form.errors.has('streetName')}">
                            <label for="streetName" class="control-label">Street</label>
                            <input type="text" class="form-control" name="streetName" id="streetName"
                                   value="{{ $user->streetName}}" v-model="form.streetName">

                            <span class="help-block" v-show="form.errors.has('streetName')">
                                    @{{ form.errors.get('streetName') }}
                                </span>
                        </div>
                        <div class="form-group col-xs-6" :class="{'has-error': form.errors.has('houseNumber')}">
                            <label for="houseNumber" class="control-label">House number</label>
                            <input type="number" class="form-control" name="houseNumber" id="houseNumber"
                                   value="{{ $user->houseNumber}}" v-model="form.houseNumber">

                            <span class="help-block" v-show="form.errors.has('houseNumber')">
                                    @{{ form.errors.get('houseNumber') }}
                                </span>
                        </div>
                    </div>
                    <!-- end form row -->

                    <!-- start form row -->
                    <div class="row">
                        <div class="form-group col-xs-6" :class="{'has-error': form.errors.has('zipCode')}">
                            <label for="zipCode" class="control-label">Zip code</label>
                            <input type="text" class="form-control" name="zipCode" id="zipCode"
                                   value="{{ $user->zipCode}}" v-model="form.zipCode">

                            <span class="help-block" v-show="form.errors.has('zipCode')">
                                    @{{ form.errors.get('zipCode') }}
                                </span>
                        </div>
                        <div class="form-group col-xs-6" :class="{'has-error': form.errors.has('city')}">
                            <label for="city" class="control-label">City</label>
                            <input type="text" class="form-control" name="city" id="city"
                                   value="{{ $user->city}}" v-model="form.city">

                            <span class="help-block" v-show="form.errors.has('city')">
                                    @{{ form.errors.get('city') }}
                                </span>
                        </div>
                    </div>
                    <!-- end form row -->

                    <!-- start form row -->
                    <div class="row">
                        <div class="form-group col-xs-6" :class="{'has-error': form.errors.has('phone')}">
                            <label for="phone" class="control-label">Phone number</label>
                            <input type="number" class="form-control" name="phone" id="phone"
                                   value="{{ $user->phone}}" v-model="form.phone">

                            <span class="help-block" v-show="form.errors.has('phone')">
                                    @{{ form.errors.get('phone') }}
                                </span>
                        </div>
                        <div class="form-group col-xs-6" :class="{'has-error': form.errors.has('mobile')}">
                            <label for="mobile" class="control-label">Mobile</label>
                            <input type="number" class="form-control" name="mobile" id="mobile"
                                   value="{{ $user->mobile}}" v-model="form.mobile">

                            <span class="help-block" v-show="form.errors.has('mobile')">
                                    @{{ form.errors.get('mobile') }}
                                </span>
                        </div>
                    </div>
                    <!-- end form row -->

                    <!-- start form row -->
                    <div class="row">
                        <div class="form-group col-xs-6" :class="{'has-error': form.errors.has('kvk')}">
                            <label for="kvk" class="control-label">KVK</label>
                            <input type="number" class="form-control" name="kvk" id="kvk"
                                   value="{{ $user->kvk}}" v-model="form.kvk">

                            <span class="help-block" v-show="form.errors.has('kvk')">
                                    @{{ form.errors.get('kvk') }}
                                </span>
                        </div>
                        <div class="form-group col-xs-6" :class="{'has-error': form.errors.has('btw')}">
                            <label for="btw" class="control-label">BTW</label>
                            <input type="text" class="form-control" name="btw" id="btw"
                                   value="{{ $user->btw}}" v-model="form.btw">

                            <span class="help-block" v-show="form.errors.has('btw')">
                                    @{{ form.errors.get('btw') }}
                                </span>
                        </div>
                    </div>
                    <!-- end form row -->

                    <!-- start form row -->
                    <div class="row">
                        <div class="form-group col-xs-6" :class="{'has-error': form.errors.has('country')}">
                            <label for="country" class="control-label">Country</label>
                            <input type="text" class="form-control" name="country" id="country"
                                   value="{{ $user->country}}" v-model="form.country">

                            <span class="help-block" v-show="form.errors.has('country')">
                                    @{{ form.errors.get('country') }}
                                </span>
                        </div>
                    </div>
                    <!-- end form row -->


                    <!-- Update Button -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"
                                @click.prevent="update"
                                :disabled="form.busy">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</update-profile-details>