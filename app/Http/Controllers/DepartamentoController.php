<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\departamento;
use App\funcionario;
use App\Http\Controllers\FuncionarioController;

class DepartamentoController extends Controller
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
      return view ('departamento.index', [
        'departamento' => departamento::all()
  ]);  }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view ('departamento.create');
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
        $departamento = new departamento ();
      $departamento-> nombre = $request->get('nombre');
      $departamento-> descrip = $request->get('descrip');
      $departamento-> save();
    return  redirect  ('/departamento');
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
      $departamento = Departamento::findOrFail($id);
      $departamento->delete();
        //'departamento' -> $departamento;
      return redirect('/departamento');

        //
    }
}
