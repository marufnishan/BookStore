<div>
    <div class="panel-body p-3 p-md-5">
        <div class="btn btn-primary my-3" style="background-color:#3C91E6 ">All Users</div> 
        <div class="table-data" >
            <div id="tbl" class="p-1 p-md-5 rounded-3">                                             
        <div class="table-responsive rounded-3">            
            <table class="table table-striped">
                <thead>
                    <tr style="background-color: rgb(0, 109, 128);color: white;">
                        <th>#</th>
                        <th>Name</th>
                        <th>Profile Photo</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>User Type</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th colspan="2" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody id="tbldta" >
                    @foreach($users as $key=>$user)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{$user->name}}</td>
                        <td><img src="{{asset('assets/image/'.$user->profile_photo_path)}}"/></td>
                        <td>{{$user->email}}</td>                        
                        <td>{{$user->phone}}</td>
                        <td>{{$user->utype}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>{{$user->updated_at}}</td>
                        <td style="width: 6rem"> <a href="{{-- {{route('admin.editcoupon',['coupon_id'=>$coupon->id])}} --}}"><span style="font-size: 2rem; color:rgb(5, 128, 133)"><i class="fa-regular fa-pen-to-square"></i></span></a>
                    <a href="#" onclick="confirm('Are you sure,You want to delete this coupon ?') || event.stopImmediatePropagation()"
                       {{--  wire:click.prevent="deleteCoupon({{$coupon->id}})" --}}
                        style="margin-left:10px;"><span style="font-size: 2rem; color:rgb(122, 21, 21)"><i class="fa-solid fa-trash"></i></span></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- {{$users->links()}} --}}
        </div>
            </div>
        </div>
    </div>
</div>
