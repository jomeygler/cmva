<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\evento;
use App\funcionario;
use App\tipoevento;


class EventoController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *@param  int  $id

     * @return \Illuminate\Http\Response
     */
    public function create(funcionario $funcionario, tipoevento $tipoevento)
    {
     $funcionario = funcionario::findorfail($funcionario->id);
     $tipoevento = tipoevento::all();


//  return $tipoevento;
    return view('evento.create',
              ['funcionario' => $funcionario]
              ,['tipoevento' => $tipoevento]
              );


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(funcionario $funcionario, tipoevento $tipoevento, Request $request)
    {
      $DaliData = $request->validate([
            'descrip_ev' => 'required|min:4',
            'fec_ini' => 'required',
            'fec_fin' => 'required',
         ]);
      $evento = new evento();
       $evento->descrip_ev = $request->get('descrip_ev');
      //  $evento->tipoevento_id = $tipoevento->id;
        $evento->fec_ini = $request->get('fec_ini');
      $evento->fec_fin = $request->get('fec_fin');
       $evento->funcionario_id = $funcionario->id;
       $evento-> tipoevento_id = $request->get('tipoevento_id');
        $evento->save();
         return redirect('/funcionario/' . $funcionario->id);
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
}
