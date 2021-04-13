<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    
    public function AddService(){
        return view('admin.service.create');
    }

    public function allService(){
        $services = Service::all();
        return view('admin.service.index',compact('services'));
    }
    public function service(){
        $service = DB::table('services')->first();
        return view('pages.service',compact('service'));
    }
   
    public function StoreService(Request $request){
        
        Service::insert([
            'name' => $request->name,
            'description' => $request->description,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->route('home.service')->with('success','service Inserted Successfully');
    }


    public function EditService($id){
        $services = Service::find($id);
        return view('admin.service.edit',compact('services'));
    }

    public function UpdateService(Request $request, $id){
        $update = Service::find($id)->update([
            'name' => $request->name,
            'description' => $request->description,
            
            
        ]);

        return Redirect()->route('home.service')->with('success','About Updated Successfully');
    }
}
