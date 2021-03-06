<?php

namespace App\Http\Controllers\suscriptor;

use App\Http\Controllers\Controller;
use App\suscriptor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class SuscriptorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this -> authorize('viewAny', Suscriptor::class);

        $suscriptor = DB::table('users')
        ->where('rol', 'suscriptor')
        ->get();

        return view('suscriptor.suscriptor', ['suscriptor'=>$suscriptor]);
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
     * @param  \App\suscriptor  $suscriptor
     * @return \Illuminate\Http\Response
     */
    public function show(suscriptor $suscriptor)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\suscriptor  $suscriptor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $id = DB::table('users')
      ->where('id', $id)
      ->find($id);
      return view('cobrador.suscriptor.historial', ['suscriptor'=>$id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\suscriptor  $suscriptor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, suscriptor $suscriptor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\suscriptor  $suscriptor
     * @return \Illuminate\Http\Response
     */
    public function destroy(suscriptor $suscriptor)
    {
        //
    }

    public function historial()
    {

    }
}
