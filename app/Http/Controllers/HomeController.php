<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Service;
use App\Models\Skill;
use Context;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $service = Service::all();
        $project = Project::all();
        $skill = Skill::all();
        $about = About::first();
        $experience = Experience::all();
        return view('index',compact('about','experience','service','skill','project'));
    }
    public function single(){
        return view('single');
    }
    public function sendContact(Request $request){
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->route('admin.index');
    }
    public function deleteContact($id){
        $contact = Contact::find($id);
        $contact->Delete();
        return redirect()->back();
    }
}
