<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Model\Apartamento;
use Illuminate\Support\Facades\Validator;
class apartamentoController extends Controller
{
    public function salvar(Request $request){
        try {
            DB::beginTransaction();

            $validator = Validator::make($request->all(),[
                'andar' => 'required',
                'usuario_id' => 'required',
                'condominio_id' => 'required'
            ],[
                'andar.required' => 'É necessário Informar o Andar do seu apartamento',
                'usuario_id' => 'É necessário informar o usuário responsável pela unidade',
                'condominio_id' => 'É necessário informar o condomínio'
            ]);

            if($validator->fails()){
                throw new \Exception('Campos incompletos',-1);
            }

            $arr = [
                'num_andar' => $request->andar,
                'usuario_id' => $request->usuario_id,
                'condominio_id' => $request->condominio_id
            ];
            Apartamento::create($arr);
            DB::commit();
            return response()->json(['msg' => 'Deu bom']);
        }catch (\Exception $e){
            report($e);
            DB::rollBack();
            return response()->json(['msg' => 'Deu ruim']);
        }

    }
}
