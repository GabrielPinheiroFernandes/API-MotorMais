<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;

use App\Http\Resources\V1\Brads\BrandCarResource;
use App\Models\V1\Brads\CarBrands;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BrandCarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = CarBrands::paginate(10);

        return BrandCarResource::collection($brands);
    }

    /**
     * Show the form for creating a new resource.
     */ 
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Validação dos dados recebidos
         $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);

        // Verifica se a validação falhou
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Erro de validação.',
                'errors' => $validator->errors(),
            ], 422); // Status 422: Unprocessable Entity
        }

        // Criação da nova fábrica
        $manufactory = CarBrands::create([
            'name' => $request->name,
        ]);

        // Retorna o recurso formatado com mensagem e dados
        return response()->json([
            'message' => 'Registro inserido com sucesso',
            'data' => new BrandCarResource($manufactory),
        ], 201); // Status 201: Created
    }

    /**
     * Display the specified resource.
     */
    public function show(CarBrands $brand)
    {
        return new BrandCarResource($brand);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $brand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $brand)
    {
         // Tenta encontrar o registro pelo ID
         $manufactory = CarBrands::find($brand);

         // Verifica se o registro existe
         if (!$manufactory) {
             return response()->json([
                 'message' => 'Registro não encontrado.',
             ], 404); // Status 404: Not Found
         }
 
         // Guarda o registro antes de deletá-lo
         $registro = $manufactory;
 
         // Deleta o registro
         $manufactory->delete();
 
         // Retorna uma mensagem de sucesso com o registro deletado
         return response()->json([
             'message' => 'Registro deletado com sucesso.',
             'data' => new BrandCarResource($registro) // Inclui o recurso deletado
         ], 200); // Status 200: OK
    }
}
