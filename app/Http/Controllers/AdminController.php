<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\User;
 
class AdminController extends Controller
{
 
 
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Dashboard Admin';
        $users = User::where('hak_akses', 'pendaftar')->get();
 
        return view('/admin/dashboard', compact('title', 'users'));
    }    
}