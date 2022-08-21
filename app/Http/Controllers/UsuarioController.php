<?php

namespace App\Http\Controllers;

 use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Model\Usuario;
use Illuminate\Contracts\Validation\Validator;


class usuarioController extends Controller
{
    public function salvar(Request $request)
    {
        try{
            DB::beginTransaction();
            $validator =  $request->validate(
              [
                  'nome' => 'required',
                  'telefone' => 'required',
                  'cpf' => 'required',
                  'data_nasc' => 'required',
                  'email' => 'required'

              ]
            );
           $arr= [
               'CPF' => $request->cpf,
               'name' => $request->nome,
               'numero' => $request->telefone,
               'email' => $request->email,
               'data_nasc' => $request->data_nasc
           ];

           Usuario::create($arr);


            DB::commit();
            return response()->json(['msg' => 'deu bom']);

        }catch (\Exception $e){
            report($e);
            DB::rollBack();
            return response()->json(['msg' => 'deu ruim']);
        }
    }
}
