<?php
 
namespace App\Http\Controllers;
 
    use App\User;
    use App\Biodata;
    use Auth;
    
    use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\Validator;
    use Illuminate\Foundation\Auth\RegistersUsers;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Input;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\File;
 
class PendaftarController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Dashboard Calon Siswa';
        $id =  Auth::user()->id;
        $user = DB::table('users')->where('id', $id)->first();
        $biodata = DB::table('biodatas')->where('user_id', $id)->first();
 
        return view('pendaftar/dashboard', compact('title', 'user', 'biodata'));
    }

    public function edit()
    {
        return view('/pendaftar/daftar');
    }

    public function show(Biodata $biodata)
    {
        return view('/pendaftar/status', compact('biodata'));
    }

    protected function validator(array $data)
    {
        
    }

    protected function create(Request $request)
    {
        $validator = Validator::make($request->all(), 
        [
            'nama' => 'required|string|max:255',
            'nisn' => 'required|string|max:45',
            'tempat_lahir' => 'required|string|max:45',
            'tanggal_lahir' => 'required',
            'no_telp' => 'required|string|max:45',
            'alamat' => 'required',
            'un_average' => 'required|string|max:45',
            'no_ijazah' => 'required|string|max:45',
            'foto' => 'mimes:pdf,jpeg,png,jpg|max:2048',
            'berkas' => 'mimes:pdf,jpeg,png,jpg|max:2048',
            'total_pembayaran' => 'mimes:pdf,jpeg,png,jpg|max:2048',
        ],
 
        $messages = 
        [
            'nama.required' => 'Nama tidak boleh kosong!',
            'nisn.required' => 'NISN tidak boleh kosong!',
            'tempat_lahir.required' => 'Tempat lahir tidak boleh kosong!',
            'tanggal_lahir.required' => 'Tanggal lahir tidak boleh kosong!',
            'no_telp.required' => 'No.Telpon tidak boleh kosong!',
            'alamat.required' => 'Alamat tidak boleh kosong!',
            'un_average.required' => 'Nem tidak boleh kosong!',
            'no_ijazah.required' => 'No.Ijazah tidak boleh kosong!',
            'foto.image' => 'Format file tidak mendukung! Gunakan jpg, jpeg, png, gif atau pdf.',
            'foto.max' => 'Ukuran file terlalu besar, maksimal file 2Mb !',
            'berkas.image' => 'Format file tidak mendukung! Gunakan jpg, jpeg, png, gif atau pdf.',
            'berkas.max' => 'Ukuran file terlalu besar, maksimal file 2Mb !',
            'total_pembayaran.image' => 'Format file tidak mendukung! Gunakan jpg, jpeg, png, gif atau pdf.',
            'total_pembayaran.max' => 'Ukuran file terlalu besar, maksimal file 2Mb !',
        ]);     
 
        if($validator->fails())
        {
            return back()->withErrors($validator)->withInput();  
        }
       
        $id = Auth::user()->id;

        $user_id = $id;
        $biodata = new Biodata;
        $biodata->user_id = $user_id;
        $biodata->nama = Input::get('nama');
        $biodata->nisn = Input::get('nisn');
        $biodata->tempat_lahir = Input::get('tempat_lahir');
        $biodata->tanggal_lahir = Input::get('tanggal_lahir');
        $biodata->no_telp = Input::get('no_telp');
        $biodata->alamat = Input::get('alamat');
        $biodata->un_average = Input::get('un_average');
        $biodata->no_ijazah = Input::get('no_ijazah');
        // if($file = $request->hasFile('foto')) 
        // {
        //     $namaFile = $user->id;
        //     $file = $request->file('foto') ;
        //     $fileName = $namaFile.'_'.$file->getClientOriginalName() ;
        //     $destinationPath = public_path().'/foto/' ;
        //     $file->move($destinationPath,$fileName);
        //     $biodata->foto = $fileName ;
        // }
        // if($file = $request->hasFile('berkas')) 
        // {
        //     $namaFile = $user->id;
        //     $file = $request->file('berkas') ;
        //     $fileName = $namaFile.'_'.$file->getClientOriginalName() ;
        //     $destinationPath = public_path().'/berkas/' ;
        //     $file->move($destinationPath,$fileName);
        //     $biodata->berkas = $fileName ;
        // }
        // if($file = $request->hasFile('total_pembayaran')) 
        // {
        //     $namaFile = $user->id;
        //     $file = $request->file('total_pembayaran') ;
        //     $fileName = $namaFile.'_'.$file->getClientOriginalName() ;
        //     $destinationPath = public_path().'/total_pembayaran/' ;
        //     $file->move($destinationPath,$fileName);
        //     $biodata->total_pembayaran = $fileName ;
        // }
        $biodata->foto = "-" ;
        $biodata->berkas = "-" ;
        $biodata->total_pembayaran = "-" ;
        $biodata->status = "-";
        $biodata->no_test = "-";
        $biodata->lokasi = "-";
        $biodata->save();
        
        return redirect('/pendaftar/dashboard') ->with ('status', 'Data Pendaftar Berhasil Ditambah!');
    }
}