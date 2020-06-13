<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
<<<<<<< HEAD
        return Validator::make($data, [
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
=======
        $biodata = Biodata::all();
 
        return view('auth.register');
>>>>>>> Fesa - Rebuild
    }

    protected function create(array $data)
    {
<<<<<<< HEAD
        //Table Users
        User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'level' => '1',
        ]);

        return redirect('/login') ->with ('status', 'Register Berhasil!. Silahkan Login..');
=======
        $validator = Validator::make($request->all(), 
        [
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            // 'nama' => 'required|string|max:255',
            // 'nisn' => 'required|string|max:45',
            // 'tempat_lahir' => 'required|string|max:45',
            // 'tanggal_lahir' => 'required',
            // 'no_telp' => 'required|string|max:45',
            // 'alamat' => 'required',
            // 'un_average' => 'required|string|max:45',
            // 'no_ijazah' => 'required|string|max:45',
            // 'foto' => 'mimes:pdf,jpeg,png,jpg|max:2048',
            // 'berkas' => 'mimes:pdf,jpeg,png,jpg|max:2048',
        ],
 
        $messages = 
        [
            'email.required' => 'E-Mail tidak boleh kosong !',
            'password.required' => 'Password tidak boleh kosong!',
            // 'nama.required' => 'Nama tidak boleh kosong!',
            // 'nisn.required' => 'NISN tidak boleh kosong!',
            // 'tempat_lahir.required' => 'Tempat lahir tidak boleh kosong!',
            // 'tanggal_lahir.required' => 'Tanggal lahir tidak boleh kosong!',
            // 'no_telp.required' => 'No.Telpon tidak boleh kosong!',
            // 'alamat.required' => 'Alamat tidak boleh kosong!',
            // 'un_average.required' => 'Nem tidak boleh kosong!',
            // 'no_ijazah.required' => 'No.Ijazah tidak boleh kosong!',
            // 'foto.image' => 'Format file tidak mendukung! Gunakan jpg, jpeg, png, gif atau pdf.',
            // 'foto.max' => 'Ukuran file terlalu besar, maksimal file 2Mb !',
            // 'berkas.image' => 'Format file tidak mendukung! Gunakan jpg, jpeg, png, gif atau pdf.',
            // 'berkas.max' => 'Ukuran file terlalu besar, maksimal file 2Mb !',
        ]);     
 
        if($validator->fails())
        {
            return back()->withErrors($validator)->withInput();  
        }
       
        //Table Users
        $user = new User;
        $user->email = Input::get('email');
        $user->password = Hash::make(Input::get('password'));
        $user->level = 1;
        $user->save();
 
        // //Table Biodata 
        // $user_id = $user->id;
        // $biodata = new Biodata;
        // $biodata->user_id = $user_id;
        // $biodata->nama = Input::get('nama');
        // $biodata->nisn = Input::get('nisn');
        // $biodata->tempat_lahir = Input::get('tempat_lahir');
        // $biodata->tanggal_lahir = Input::get('tanggal_lahir');
        // $biodata->no_telp = Input::get('no_telp');
        // $biodata->alamat = Input::get('alamat');
        // $biodata->un_average = Input::get('un_average');
        // $biodata->no_ijazah = Input::get('no_ijazah');
        // if($file = $request->hasFile('foto')) 
        // {
        //     $namaFile = $user->id;
        //     $file = $request->file('foto');
        //     $fileName = $namaFile.'_'.$file->getClientOriginalName();
        //     $destinationPath = public_path().'/images/';
        //     $file->move($destinationPath,$fileName);
        //     $biodata->url_foto = $fileName;
        // }
        // if($file = $request->hasFile('berkas')) 
        // {
        //     $namaFile = $user->id;
        //     $file = $request->file('berkas');
        //     $fileName = $namaFile.'_'.$file->getClientOriginalName();
        //     $destinationPath = public_path().'/berkas/';
        //     $file->move($destinationPath,$fileName);
        //     $biodata->url_foto = $fileName;
        // }
        // $biodata->save();
     
        return redirect('/login')->with('status', 'Registrasi Anda telah berhasil!. Silakan login dengan menggunakan email dan password Anda.');
>>>>>>> Fesa - Rebuild
    }
}
