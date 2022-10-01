<div>
    <div>
        <div style="background-color:#F2F3F5">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-md-8 my-5 p-5  rounded-3" style="background-color: #FFFFFF">
                        @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <h1>Edit Profile</h1>
                        <form wire:submit.prevent="UpdateStudentProfile" enctype="multipart/form-data">
                            
                            <div class="mb-3">
                                <label class="form-label">Student Profile Photo</label>
                                <input type="file" class="form-control" id="profile_image" name="profile_image"
                                    wire:model="profile_new_image">
                                @error('profile_new_image')
                                <span class="error" style="color: red">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Student Name</label>
                                <input type="text" class="form-control" wire:model="student_name">
                                @error('student_name')
                                <span class="error" style="color: red">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Student Phone</label>
                                <input type="text" class="form-control" wire:model="student_phone">
                                @error('student_phone')
                                <span class="error" style="color: red">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Institution Name</label>
                                <input type="text" class="form-control" wire:model="institution_name">
                                @error('institution_name')
                                <span class="error" style="color: red">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Academic Qualification</label>
                                <input type="text" class="form-control" wire:model="academic_qualification">
                                @error('academic_qualification')
                                <span class="error" style="color: red">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-control" wire:model="address">
                                @error('address')
                                <span class="error" style="color: red">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Alternative Email</label>
                                <input type="text" class="form-control" wire:model="alternative_email">
                                @error('alternative_email')
                                <span class="error" style="color: red">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Alternative Phone</label>
                                <input type="text" class="form-control" wire:model="alternative_phone">
                                @error('alternative_phone')
                                <span class="error" style="color: red">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-info text-light">Update Profile</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
