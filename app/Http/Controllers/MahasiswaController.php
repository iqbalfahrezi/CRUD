<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_Mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->search;
        // $data = M_Mahasiswa::all();
        $data = M_Mahasiswa::when($search, function($query, $search){
            return $query->where('nama', 'like', "%($search)%");
        })->paginate(25);
        return view('index',[
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except(['_token']);
        M_Mahasiswa::insert($data);
        return redirect('/')->With('success', "Data Saved Successfully");
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = M_Mahasiswa::findOrFail($id);
        return view('show')->with([
            'data' => $data
        ]);
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
        $item = M_Mahasiswa::findOrFail($id);
        $data = $request->except(['_token']);
        $item->update($data);
        return redirect('/')->With('success', "Data Updated Successfully");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = M_Mahasiswa::findOrFail($id);
        $item->delete();
        return redirect('/')->With('success', "Data Deleted Successfully");
    }
}
