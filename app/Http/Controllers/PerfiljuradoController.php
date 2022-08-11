<?php

namespace App\Http\Controllers;

use App\Models\Jurado;
use Illuminate\Http\Request;
use App\Models\Mesajurado;

class PerfiljuradoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Perfiljurado  $perfiljurado
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perfiljurado  $perfiljurado
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Perfiljurado  $perfiljurado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perfiljurado  $perfiljurado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
    }

    public function chart(){
        $sitio = Mesajurado::all();
        $user = Jurado::all();

        $label  = $sitio->pluck('sitio');
        $data = $user->pluck('id_mesajurado');
        // return dump($label,$data);
        return View('Pages.chart',compact('label','data','sitio','user'));
    }
}
