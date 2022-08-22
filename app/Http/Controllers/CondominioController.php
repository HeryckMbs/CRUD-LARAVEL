<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Model\Condominio;
use Illuminate\Support\Facades\DB;


class condominioController extends Controller
{
    public function salvar(Request $request)
    {
        try {
            DB::beginTransaction();

//            $validator = $request->validate([
//                ''
//            ]);

            $arr = [
                'sindico_id' => $request->sindico,
                'name' => $request->nome,
                'endereco' => $request->endereco
            ];

            Condominio::create($arr);

            DB::commit();
            return response()->json(['msg' => 'Deu bom']);
        } catch (\Exception $e) {
            report($e);
            DB::rollBack();
            return response()->json(['msg' => 'Deu ruim']);
        }

    }

}
