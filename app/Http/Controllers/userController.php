<?php

namespace App\Http\Controllers;
use App\modelUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class userController extends Controller
{
    //
    public function index(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
    }
    public function login(){
        return view('login');
    }
    public function loginPost(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        $pekerjaan = $request->pekerjaan;
        $data = modelUser::where('email',$email)->first();
       
            if (Hash::check($password, optional($data)->password)) {
            	if($data->pekerjaan=="Koordinator Kesehatan"){
                Session::put('name',$data->name);
                Session::put('email',$data->email);
                Session::put('pekerjaan',$data->pekerjaan);
                Session::put('login',TRUE);
                return redirect('homekoor');
           		}
           	if($data->pekerjaan=="Staff Pengelola"){
                Session::put('name',$data->name);
                Session::put('email',$data->email);
                Session::put('pekerjaan',$data->pekerjaan);
                Session::put('login',TRUE);
                return redirect('indexpengelola');
            }
            if($data->pekerjaan=="Staff IT"){
                Session::put('name',$data->name);
                Session::put('email',$data->email);
                Session::put('pekerjaan',$data->pekerjaan);
                Session::put('login',TRUE);
                return redirect('indexstaffit');
            }
        }

            else{
                return redirect('login')->with('alert','Password atau Email Salah !'. Hash::check($password, optional($data)->password));
            }
        }

    public function destroy($id)
    {
        $data = modelUser::where('id',$id)->first();
        $data->delete();
        return redirect()->route('indexstaffit')->with('alert-success','Data deleted');
    }
    
    public function logout(){
        Session::flush();
        return redirect('login')->with('alert','Kamu sudah logout');
    }
    public function register(Request $request){
        return view('register');
    }
    public function registerPost(Request $request){
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|min:4|email|unique:users',
            'pekerjaan' => 'required',
            'password' => 'required',
            'confirmation' => 'required|same:password',
        ]);
        $data =  new ModelUser();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->pekerjaan = $request->pekerjaan;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('indexstaffit')->with('alert-success','Kamu berhasil Register');
    }
}