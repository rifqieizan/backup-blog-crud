<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Model\Mahasiswa; 
use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;

class HomeController extends Controller
{
    public function index()
    {	
    	return view('dashboard.dashboard');

    	$mahasiswa=Mahasiswa::get();
    	foreach ($mahasiswa as $value)
    	{
			dd($value);    		
    	}


    }

    public function homes()
    {
    	return view('dashboard.homes');
    } 

    public function pages()
    {
    	return view('dashboard.pages');
    }

    public function about()
    {
    	return view('dashboard.about');
    }

    public function create (Request $request)
    {
    	$atribute=$request->all();
    	//$atribute=$request->input();
    	$mahasiswa=new Mahasiswa;

    	$mahasiswa->setAtribute($atribute);
    	
    	$mahasiswa->save();

    	return view('dashboard.about');

    }

    public function delete(Request $request)
    {
        $attributes = $request->all();

    	Mahasiswa::find($attributes['id'])->delete();

    	return view('dashboard.about');
    }

    public function update($id, Request $request)
    {
    	$atribute=$request->all();

    	$mahasiswa=Mahasiswa::find($id);
    	
    	$mahasiswa->setAtribute($atribute);
    	
    	$mahasiswa->save();

    	return view('dashboard.about');
    }

    public function edit ($id, Request $request)
    {
    	$atribute=$request->all();
    	$mahasiswa= Mahasiswa::find($id);
    	return view('dashboard.edit')->with('id',$id)->with ('data',$mahasiswa);
    }

    public function bookingData()
    {
        \Log::info("test");
    	$mahasiswa = Mahasiswa::get();
        return Datatables::of($mahasiswa)->addColumn('action', function($mahasiswa) {
        	 return '<a href="' . route("edit", $mahasiswa->id) . '" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>
        	 		<a onclick="javascript:deleteData('.$mahasiswa->id.')" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i>
                            Delete</a>';
        })->make(true);

    }

}
