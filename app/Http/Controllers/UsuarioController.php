<?php

namespace App\Http\Controllers;

 use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Model\Usuario;
use App\Http\Model\Sindico;
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


    public function sindico(Request $request)
    {
        try {
            DB::beginTransaction();
            if(DB::table('sindicos')->where('usuario_id',$request->pessoa)->count() == 0 ){
                $sindico = Usuario::findOrFail($request->pessoa);
                $arr_sindico = [
                    'usuario_id' => $sindico->id,
                    'name' => $sindico->name,
                    'condominio_id' => $request->condominio
                ];

                Sindico::create($arr_sindico);
            }else{
                throw new \Exception('Este usuário já é síndico',-1);
            }

            DB::commit();
            return response()->json(['success'=> true,'msg' => 'Sindico definido com sucesso']);
        }catch (\Exception $e){
            report($e);
            DB::rollBack();
            return response()->json(['success' => false,'msg' => 'Deu ruim']);
        }
    }
}
