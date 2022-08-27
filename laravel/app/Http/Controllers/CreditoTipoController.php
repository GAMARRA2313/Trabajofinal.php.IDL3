<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CreditoTipo;
use Illuminate\Http\Request;

class CreditoTipoController extends Controller
{
    public function getAll()
    {
        $response = new \stdClass();

        $tipos = CreditoTipo::all();

        $response->success = true;
        $response->data = $tipos;

        return response()->json($response, 200);
    }

    public function getItem($id)
    {
        $response = new \stdClass();

        $tipo = CreditoTipo::find($id);

        $response->success = true;
        $response->data = $tipo;

        return response()->json($response, 200);
    }

    public function store(Request $request)
    {
        $response = new \stdClass();

        $tipo = new CreditoTipo();
        $tipo->tipo = $request->tipo;
        $tipo->descripcion = $request->descripcion;
        $tipo->habilitado = 1;
        $tipo->save();

        $response->success = true;
        $response->data = $tipo;

        return response()->json($response, 200);
    }

    public function updatePut(Request $request, $id)
    {
        $response = new \stdClass();
        $tipo = CreditoTipo::find($id);

        $tipo->tipo = $request->tipo;
        $tipo->descripcion = $request->descripcion;
        $tipo->habilitado = $request->habilitado;
        $tipo->save();

        $response->success = true;
        $response->data = $tipo;

        return response()->json($response, 200);
    }


    public function updatePatch(Request $request, $id)
    {
        $response = new \stdClass();
        $tipo = CreditoTipo::find($id);

        if ($request->tipo != null) {
            $tipo->tipo = $request->tipo;
        }

        if ($request->descripcion != null) {
            $tipo->descripcion = $request->descripcion;
        }

        if ($request->habilitado != null) {
            $tipo->habilitado = $request->habilitado;
        }

        $tipo->save();

        $response->success = true;
        $response->data = $tipo;

        return response()->json($response, 200);
    }

    public function delete($id)
    {
        $response = new \stdClass();

        $tipo = CreditoTipo::find($id);
        $tipo->delete();

        $response->success = true;

        return response()->json($response, 200);
    }
}