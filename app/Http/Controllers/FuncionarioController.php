<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\funcionario;
use App\evento;
use App\departamento;
use App\Http\Controllers\DepartamentoController;

 class FuncionarioController extends Controller
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
  return view ('funcionario.index', [
    'funcionarios' => funcionario::all()

  ]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(departamento $departamento)
    {
      $departamentos = departamento::all();
      // $funcionario= funcionario::findorfail($id);
        // return view ('funcionario.create', compact ('departamentos'));
          return view ('funcionario.create', ['departamentos' => $departamentos]);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(departamento $departamento, Request $request)
    {
    // $departamentos = departamento::all();

    $DaliData = $request->validate([
          'nombre' => 'required|min:4'
       ]);
        $funcionario = new funcionario ();
       $funcionario-> nombre = $request->get('nombre');
       $funcionario-> fecha = $request->get('fecha');
        $funcionario-> rut = $request->get('rut');
        $funcionario-> sexo = $request->get('sexo');
      $funcionario-> sexo = $request->get('sexo');
       $funcionario-> departamento_id = $request->get('departamento_id');
      //  $funcionario->departamento_id = $departamentos[id];
        $funcionario-> save ();
    //    return redirect('/funcionario',
    //   ['funcionario' => $funcionario
    // ]);
    return redirect('/funcionario');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(funcionario $funcionario)
{

    //   $funcionario= funcionario::findorfail($id);
        return view('/funcionario.show', [
          'persona' => $funcionario
        ]);
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
      $funcionario= Funcionario::findorfail($id);
      return view('/funcionario.edit', [
        'funcionario' => $funcionario
      ]);
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
        $funcionario= Funcionario::findorfail($id);
        $funcionario-> nombre = $request->get('nombre');
        $funcionario-> save ();
        return redirect('/funcionario');
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

          $funcionario= Funcionario::findorfail($id);
          $funcionario->delete ();
          return redirect('/funcionario');        //
    }

    public function ConfirmaD($id)
    {
      $funcionario= Funcionario::find($id);
      return view('/funcionario.confirmad', [
      'funcionario' => $funcionario
    ]);
    }
}
