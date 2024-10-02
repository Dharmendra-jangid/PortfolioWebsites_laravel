<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Service;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function login(){
        return view('admin.login');
    }
    public function authlogin(Request $request){

        if (Auth::attempt(['name' => $request->name, 'password' => $request->password])) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('admin.login')
                ->with('error', 'password is incorrect.');
        }
    }
    public function register()
    {
        return view('admin.register');
    }
    public function authRegister(Request $request){
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect()->route('admins.login');
    }
    public function index(){
        return view('admin.index');
    }
    public function about($id){
        $about= About::find($id);
        return view('admin.about',compact('about'));
    }

    // public function abouts($id){
    //     $about = About::find($id);
    // return
    // }
    public function addAbout(Request $request, $id){
        $about = About::find($id);
        $about->name = $request->name;
        $about->date = $request->date;
        $about->title = $request->title;
        $about->title2 = $request->title2;
        $about->address = $request->address;
        $about->pincode = $request->pincode;
        $about->email = $request->email;
        $about->phone = $request->phone;
        if ($request->hasFile('image')){
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('about'), $imageName);
            $about->image = $imageName;
        }
        if ($request->hasFile('image1')){
            $imageName = time() . '.' . $request->image1->extension();
            $request->image1->move(public_path('about'), $imageName);
            $about->image1 = $imageName;

             }

            $about->save();
            return redirect()->back();

    }



    public function experience(){
        $experience = Experience::all();
        return view('admin.experience',compact('experience'));
    }

    public function addexperience(Request $request){
         $experience = new Experience();
         $experience->name= $request->name;
         $experience->tile= $request->tile;
         $experience->description= $request->description;
         $experience->time= $request->time;
         $experience->save();
         return redirect()->route('admins.experience');


    }
    public function delete($id){
        $delete = Experience::find($id);
        $delete -> Delete();
        return redirect()->route('admins.experience');

    }

    public function service(){
        $service = Service::all();
        return view('admin.service',compact('service'));
    }

    public function addservice(Request $request){
           $service = new Service();
           $service->name= $request->name;
           $service->tile= $request->tile;
           if ($request->hasFile('Icon')){
            $imageName = time() . '.' . $request->Icon->extension();
            $request->Icon->move(public_path('service'), $imageName);
            $service->Icon = $imageName;

            }

           $service->save();
           return redirect()->route('admins.service');

    }
    public function deleteservice($id){
        $service = Service::find($id);
        $service->Delete();
        return redirect()->route('admins.service');

    }
    public function skil(){
        $skill = Skill::all();

        return view('admin.skill',compact('skill'));
    }
  public function addskil(Request $request){
    $skill = new Skill();
    $skill-> name= $request->name;
    $skill-> progressbar= $request->progressbar;
    $skill->save();
     return redirect()->route('admins.skil');
  }


  public function deleteSkill($id){
    $skill = Skill::find($id);
    $skill->Delete();
    return redirect()->route('admins.skil');
  }

    public function project()
        {
            $project = Project::all();
        return view('admin.project',compact('project'));
}
public function addproject(Request $request){
    $project = new Project();
    $project->name = $request->name;
    $project->desinname = $request->desinname;
    if ($request->hasFile('image')){
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('projects'), $imageName);
        $project->image = $imageName;

        }
        $project->save();
        return redirect()->route('admins.project');

}
public function deleteProject($id){
    $project = Project::find($id);
    $project->Delete();
    return redirect()->route('admins.project');
  }


    public function contacts()
    {
        $contact = Contact::all();
        return view('admin.contact',compact('contact'));
}

}
