@extends('spark::layouts.app')

@section('content')
<activity-log :user="user" inline-template>
    <div class="container">
        <!-- No Activity -->
        <div class="row" v-show="activitiesLoaded && activities.length == 0">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Hello</div>

                    <div class="panel-body">
                        You can add a new skill under here!
                    </div>
                </div>
            </div>
        </div>


    </div>
</activity-log>
@endsection
