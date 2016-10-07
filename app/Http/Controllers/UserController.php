<?php

namespace h4ck\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use h4ck\Http\Requests;
use h4ck\User;
use DB;

class UserController extends Controller
{
    /**
     * Se desplega un json con la informacion paginada.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::paginate();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }

    /**
     * Se guarda en BD un usuario
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create($request->all());
        return response()->json(['created' => true]);
    }

    /**
     * Se muestra un usuario en especifico.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = DB::table('users')->where('id', $id)->first();

        if(!$user){
            return response()->json(['user' => "No Existe"]);    
        }
        return response()->json($user);
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
     *  Se actualiza un usuario.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $up = DB::table('users')
                ->where('id', $id)
                ->update($request->all());
        if($up){
            return response()->json(['updated' => true]);    
        }else{
            return response()->json(['updated' => false]);
        }     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = DB::table('users')->where('id', '=', $id)->delete();
        
        if(!$user){
            return response()->json(['destroyed' => false]);
        }
        
        return response()->json(['destroyed' => true]);
    
    }
}
