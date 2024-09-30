<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Skill;
use App\Models\Experience;
use Auth;

class UserController extends Controller
{
    public function index(){
        $user = User::find(1);
        $user->sumary = trim($user->sumary);
        return $user;
    }
    public function updateAbout(Request $request){
        $link = public_path().'/storage/profile_pic/';
        $file = $request->file('image');
        if($request->file('image')){
            // $ext  = pathinfo($file->getClientOriginalName(),PATHINFO_EXTENSION);
            // $name = md5(uniqid()).'.'.$ext;
            $file->move($link, $file->getClientOriginalName());
        }
        $user = User::find(1);
        $user->profile_pic = isset($file) ? $file->getClientOriginalName() : $user->profile_pic;
        $user->first_name = isset($request->first_name) ? $request->first_name : $user->first_name;
        $user->last_name = isset($request->last_name) ? $request->last_name : $user->last_name;
        $user->sumary = isset($request->sumary) ? $request->sumary : $user->sumary;
        $user->title = isset($request->title) ? $request->title : $user->title;
        $user->phone = isset($request->phone) ? $request->phone : $user->phone;
        $user->city = isset($request->city) ? $request->city : $user->city;
        $user->age = isset($request->age) ? $request->age : $user->age;
        $user->degree = isset($request->degree) ? $request->degree : $user->degree;
        $user->email = isset($request->email) ? $request->email : $user->email;
        $user->freelance = isset($request->freelance) ? $request->freelance : $user->freelance;
        $user->save();
        return $user;
    }
    public function getSkill(){
        $skills = Skill::where('user_id', 1)->get();
        return $skills;
    }
    public function addSkill(Request $request){
        $skill = new Skill;
        $skill->user_id = 1;
        $skill->name = $request->name;
        $skill->value = $request->value;
        $skill->save();
        return 'Success';
    }
    public function updateSkill(Request $request){
        $skill = Skill::find($request->id);
        $skill->name = $request->name;
        $skill->value = $request->value;
        $skill->save();
        return 'Success';
    }
    public function removeSkill($id){
        Skill::find($id)->delete();
        return 'Record removed Successfully';
    }
    public function getExperience(){
        $experiences = Experience::where('user_id', 1)->get();
        return $experiences;
    }
    public function addExperience(Request $request){
        $experience = new Experience;
        $experience->user_id = 1;
        $experience->name = $request->name;
        $experience->value = $request->value;
        $experience->save();
        return 'Success';
    }
    public function updateExperience(Request $request){
        $experience = Experience::find($request->id);
        $experience->name = $request->name;
        $experience->value = $request->value;
        $experience->save();
        return 'Success';
    }
    public function removeExperience($id){
        Experience::find($id)->delete();
        return 'Record removed Successfully';
    }
}
