<?php

namespace App\Http\Controllers;

use App\Models\Paste;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mockery\Generator\StringManipulation\Pass\Pass;

class HomePage extends Controller
{
    function LoginForm(){
        return view('login');
    }
    function RegisterForm(){
        return view('register');
    }
    function Dashboard(){
        $tampil = Paste::latest()->get();
        $tampils = Paste::orderByDesc('views')->get();
        return view('index', compact('tampil', 'tampils'));
    }
    function Register(Request $request){
         $request->validate([
            'name' => 'required|unique:users',
            'password' => 'required|min:8',
            'email' => 'required|unique:users'
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->email = $request->email;
        $user->save();

        return redirect()->route('login.form');
         
    }
    function Login(Request $request){
        $data = $request->only('name','password');
        if(Auth::attempt($data)){
            $request->session()->regenerate();
            return redirect()->route('dash.ui');
            
        }
    }
    function NewPasteUi()
    {
        return view('new-paste');
    }
    function Paste(Request $request)
    {
        $request->validate([
            'judul' => 'required|unique:pastes',
            'isi' => 'required'
        ]);

        if(!Auth::user())
        {
            $isi = "";
            $paste = new Paste;
            $paste->password = $request->password;
            if($request->password == "")
            {
                $paste->use_password = '0';

            }
            else
            {
                $paste->use_password = '1';
            }
            $paste->judul = $request->judul;
            $pecahenter = explode("\r\n",htmlspecialchars($request->isi));
            for($i = 0; $i < count($pecahenter); $i++)
            {
               $isi .= $pecahenter[$i] . "\n"; 
            }
            $paste->isi = $isi;
            $paste->user_id = 0;
            try{
                $paste->save();
                return redirect()->route('dash.ui');
            }
            catch(Exception $e)
            {
                
                return $e;
            }
        }
        if(Auth::user())
        {
            $isi = "";
            $paste = new Paste;
            $paste->password = $request->password;
            if($request->password == "")
            {
                $paste->use_password = '0';

            }
            else
            {
                $paste->use_password = '1';
            }
            $paste->judul = $request->judul;
            $pecahenter = explode("\r\n",htmlspecialchars($request->isi));
            for($i = 0; $i < count($pecahenter); $i++)
            {
               $isi .= $pecahenter[$i] . "\n"; 
            }
            $paste->isi = $isi;
            $paste->password = 'a';
            $paste->user_id = Auth::user()->id;
            try{
                $paste->save();
                return redirect()->route('dash.ui');
            }
            catch(Exception $e)
            {
                
                return $e;
            }
        }
        
    }
    
    public function FindPaste($id)
    {
        try
        {
            $found = Paste::find($id);
            $found->views += 1;
            $found->save();

            $hasil = explode("\n",htmlspecialchars_decode($found->isi));
            $count = 0;

            if($found->use_password == 0)
            {
                if($found->user_id == 0)
                {
                    $nama_user = "Tidak Dikenali";
                }
                else
                {
                    $sayuz = User::find($found->user_id);
                    $nama_user = $sayuz->name;

                }
                return view('view-paste', compact('found','hasil','count','nama_user'));
            }
            else
            {
                return redirect()->route('PasswordUi', ['id'=> $found->id]);
            }
        }
        catch(Exception $e)
        {
            return $e;
        }

    }
    public function HasPassword(Request $request)
    {
       $found = Paste::where('id', $request->id)
              ->where('password', $request->password)
              ->first();
       $count = 0;
      
        $hasil = explode("\n",htmlspecialchars_decode($found->isi));

        if($found->_user_id == 0)
        {
            $nama_user = "Tidak Dikenali";
        }
        else
        {
            $sayuz = User::find($found->user_id);
            $nama_user = $sayuz->name;

        }
        return view('view-paste',compact('found','hasil','count', 'nama_user'));
    }
    public function Password($id)
    {
        $found = Paste::find($id);
        
        return view('password-paste',compact('found'));
    }
    public function MyAcc()
    {
        if(Auth::user())
        {
            $found = Paste::where('user_id',Auth::user()->id)->get();
            return view('myaccount',compact('found'));
        }
        return redirect()->route('dash.ui');
    }
}
