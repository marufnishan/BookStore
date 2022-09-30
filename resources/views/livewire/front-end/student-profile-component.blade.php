<div>
    <style>
        #dashboard::-webkit-scrollbar {
            display: none;
        }
        .table-responsive::-webkit-scrollbar {
            display: none;
        }

    </style>
    <div class="container-fluid">
        <div class="row ">
            <div id="main">

                <div class="col-md-12" id="dashboard" style="height:95vh; overflow-y: scroll; padding:0px; margin:0; ">
                    <div class="row py-3 p-md-5">
                        <div id="tbl" class="panel panel-default p-5 rounded-3">
                            <div class="panel-heading rounded-3"
                                style="background: linear-gradient(to right, #74ebd5, #acb6e5);     padding: 13px 31px;">
                                Profile
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <div class="row">                                        
                                    <div class="col-md-4 my-3">
                                        @if(Auth::user()->profile_photo_path)
                                        <img src="{{asset('assets/image/'.Auth::user()->profile_photo_path)}}"
                                            width="100%" />
                                        @else
                                        <img src="{{Auth::user()->profile_photo_url}}" alt="{{ Auth::user()->name }}"  width="100%" />
                                        @endif
                                    </div>
                                    <div id="profile" class="col-md-8">
                                        <h3 class="py-3">Name : {{Auth::user()->name}}</h3>
                                        <p><b>Email : </b>{{Auth::user()->email}}</p>
                                        <p><b>Phone : </b>{{Auth::user()->phone}}</p>
                                        <hr>
                                        <p><b>Institution Name : </b>{{-- {{$user->profile->line1}} --}}</p>
                                        <p><b>Academic Qualification : </b>{{-- {{$user->profile->line1}} --}}</p>
                                        <p><b>Address : </b>{{-- {{$user->profile->line1}} --}}</p>                                        
                                        <p><b>Alernative Email : </b>{{-- {{$user->profile->line1}} --}}</p>                                        
                                        <p><b>Alernative Phone : </b>{{-- {{$user->profile->line1}} --}}</p>                                        
                                        <a href="{{-- {{route('user.editprofile')}} --}}" class="btn btn-info pull-right text-light">
                                            Update Profile
                                        </a>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
