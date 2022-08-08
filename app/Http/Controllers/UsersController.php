<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Auth.login');
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
        //
    }

    public function login(Request $request){
        $validar=Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);
        $credenciales=[
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
        ];
        if (!$validar->fails()) {
            $user = User::where('email','=',$request->email)->first();
            
            if(Hash::check($request->password,$user->password)){
              if(Auth::attempt($credenciales)){
                return redirect()->route('dashboard');
              }else{
                return("error el iniciar sesion fallo");
                }
            }
        }
        
    }

    public function registrar(){
        return view('Auth.registro');
    }

    public function registrarse(Request $request){
        $validar=Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'avatar'=>'required',
        ]);
        if(!$validar->fails()) {
        $user =new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = hash::make($request->password);
        // usamos una funcionalidad para validar del tipo de file sea adecuado
        if($request->hasfile('avatar')){
            $user->avatar = $request->file('avatar')->store('img','public');
        }
        $user->save();
        return redirect()->route('user');    
    }
        else return("error");
    }
}
