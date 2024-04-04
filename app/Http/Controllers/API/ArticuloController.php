<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Articulo;

class ArticuloController extends Controller
{
    //
    public function get()
    {
        try {
            $data = Articulo::get();
            return response()->json($data, 200);
        } catch (\Throwable $me) {
            return response()->json(['Error, No se tiene informacion' => $me->getMessage()], 500);
        }
    }

    public function create(Request $param)
    {
        $validatedData = $param->validate([
            'titulo' => 'required|string',
            'descripcion' => 'required|string',
            'precio' => 'required|numeric',
            'disponibilidad' => 'required|boolean',
        ]);
    
        try {
            $result = Articulo::create($validatedData);
            return response()->json($result, 200);
        } catch (\Throwable $me) {
            return response()->json(['Error no se creo correctamente, verficar la información' => $me->getMessage()], 500);
        }
    }

    public function getById($id)
    {
        try {
            $data = Articulo::findOrFail($id);
            return response()->json($data, 200);
        }catch (\Throwable $e) {
            return response()->json(['error' => $e->getMessage()], 404);
        }
    }

    public function update(Request $param, $id)
    {
        $validatedData = $param->validate([
            'titulo' => 'required|string',
            'descripcion' => 'required|string',
            'precio' => 'required|numeric',
            'disponibilidad' => 'required|boolean',
        ]);
    
        try {
            Articulo::find($id)->update($validatedData);
            $res = Articulo::find($id);
            return response()->json($res, 200);
        } catch (\Throwable $me) {
            return response()->json(['Error no se actualizo la informacion del id: ' . $id => $me->getMessage()], 500);
        }
    }

    public function delete($id)
    {
        try {
            $articulo = Articulo::findOrFail($id);
            $articulo->delete();
            return response()->json(['message' => 'Se ha eliminado el artículo con ID: ' . $id], 204);
        } catch (\Throwable $th) {
            return response()->json(['error' => 'No se pudo eliminar el artículo con ID: ' . $id, 'message' => $th->getMessage()], 500);
        }
    }
}
