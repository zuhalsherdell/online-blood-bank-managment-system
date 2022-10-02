<?php

namespace App\Http\Controllers;

use App\Models\labtechnicians;
use Illuminate\Http\Request;

class LabTechnicianController extends Controller
{
    
    public function index(){

        $labtechnician = labtechnicians::all();

        return view('admin.labtechnician.index', compact('labtechnician'));
        
    }
    public function store(Request $request ){
        
        $request->validate([
            'name'  => 'required|min:4|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required',
        ]);

        labtechnicians::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        session()->flash('success', 'You have successfully added a new Lab Technician');
        
        return redirect()->route('lab-technician');

     }
    
   
}
