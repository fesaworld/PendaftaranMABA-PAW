<?php

namespace App\Http\Controllers;

use App\User;
use App\Biodata;
 
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class BiodataController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function edit(Biodata $biodata)
    {
        return view('biodata.edit', compact('biodata'));
    }

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

        return redirect('/admin/dashboard') ->with ('status', 'Data Mahasiswa Berhasil Diubah!');
    }
}
