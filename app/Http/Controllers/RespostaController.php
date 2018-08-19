<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Models\Resposta;

class respostaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      return $this->create($request);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      $matricula = '123';

      // buscar resposta
      $resposta = Resposta::where('matricula', $matricula)->get();

      if(($resposta->count()) == 0) {
        $resposta = new Resposta();
      }

      return view('resposta.create', ['resposta' => $resposta[0]] );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $matricula = '123';

      $resposta = Resposta::where('matricula', $matricula)->get();

      if($resposta->count() == 0) {
          $resposta = new Resposta();
          $resposta->matricula = $matricula;
          $resposta->lema = trim($request->lema);
          $resposta->defesa = trim($request->defesa);
          $resposta->save();
      } else {
        $this->update($request, $resposta[0]->id);
      }

      return redirect('/resposta');
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
      $resposta =  Resposta::find($id);
      $resposta->lema = trim($request->lema);
      $resposta->defesa = trim($request->defesa);

      $resposta->update();
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
