<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class Uploadcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd('asdf');
        //return view('hide');
         $users=Data::get();
         return view('welcome',['Data'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $req->validate([
            'excel_file'=>'required|mimes:xlsx'
        ]);
        Excel::import(new UsersImport, $req->file('excel_file'));
        return redirect()->with('success', 'Data successfully imported');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //dd('sdf');
        $users= Data::all();
         return view('show',['Data'=>$users]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    $data=Data::find($id);  
    $data->delete();
    return view('welcome',['Data'=>$id]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hide()
    {
        dd('asdf');
    }
}
