<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Biodata;

class VerifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Verifikasi Pendaftar';
        $users = User::where('hak_akses', 'user')->get();
 
        return view('/admin/verifikasi', compact('title', 'users'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Biodata $biodata)
    {
        return view('/admin/edit', compact('biodata'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Biodata $biodata)
    {
        $request->validate([
            'status' => 'required|string|max:20',
            'no_test' => 'required|string|max:10',
            'lokasi' => 'required|string|max:30',
            ]);
           
            Biodata::where('id', $biodata->id)
            ->update([
            'status' => $request->status,
            'no_test' => $request->no_test,
            'lokasi' => $request->lokasi,
            ]);
            return redirect('/admin/verifikasi') ->with ('status', 'Data Pendaftar Berhasil Diverifikasi!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
