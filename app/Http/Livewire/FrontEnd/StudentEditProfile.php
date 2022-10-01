<?php

namespace App\Http\Livewire\FrontEnd;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class StudentEditProfile extends Component
{
    use WithFileUploads;
    public $profile_image;
    public $profile_new_image;
    public $student_name;
    public $student_phone;
    public $institution_name;
    public $academic_qualification;
    public $address;
    public $alternative_email;
    public $alternative_phone;
    public function mount(){
        $this->profile_image = Auth::user()->profile_photo_path;
        $this->student_name = Auth::user()->name;
        $this->student_phone = Auth::user()->phone;
        $this->institution_name = Auth::user()->institution_name ;
        $this->academic_qualification = Auth::user()->academic_qualification ;
        $this->address = Auth::user()->address ;
        $this->alternative_email = Auth::user()->alternative_email ;
        $this->alternative_phone = Auth::user()->alternative_phone ;
    }
    public function UpdateStudentProfile(){
        $user = User::find(Auth::user()->id);
        if($this->profile_new_image)
        {
            if($this->profile_image){
                unlink('assets/image/'.$this->profile_image);
            }            
            $imageName = time() . '.' . $this->profile_new_image->getClientOriginalExtension();
            $this->profile_new_image->storeAs('profile-photos',$imageName);
            $user->profile_photo_path = 'profile-photos/'.$imageName;
        }
        $user->name = $this->student_name;
        $user->phone  = $this->student_phone;
        $user->institution_name = $this->institution_name;
        $user->academic_qualification = $this->academic_qualification;
        $user->address = $this->address;
        $user->alternative_email = $this->alternative_email;
        $user->alternative_phone = $this->alternative_phone;
        $user->save();

        return redirect()->route('student_profile')->with('message', 'Profile Updated successfully.');
    }
    public function render()
    {
        return view('livewire.front-end.student-edit-profile')->layout('layouts.dashboard');
    }
}
