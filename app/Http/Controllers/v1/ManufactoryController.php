<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\ManufactoryResource;
use App\Models\Manufactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class ManufactoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $manufactory = Manufactory::paginate(10);

        return ManufactoryResource::collection($manufactory);
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
            'country' => 'required|max:255',
            'founded_year' => 'required', // Ano deve ser válido
        ]);

        // Verifica se a validação falhou
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Erro de validação.',
                'errors' => $validator->errors(),
            ], 422); // Status 422: Unprocessable Entity
        }

        // Criação da nova fábrica
        $manufactory = Manufactory::create([
            'name' => $request->name,
            'country' => $request->country,
            'founded_year' => $request->founded_year,
        ]);

        // Retorna o recurso formatado com mensagem e dados
        return response()->json([
            'message' => 'Registro inserido com sucesso',
            'data' => new ManufactoryResource($manufactory),
        ], 201); // Status 201: Created
    }
    /**
     * Display the specified resource.
     */
    public function show(Manufactory $manufactorye)
    {
        return new ManufactoryResource($manufactorye);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $manufactorye)
    {
        // Validação dos dados recebidos
        $validator = Validator::make($request->all(), [
            'name' => 'sometimes|required|max:255',
            'country' => 'sometimes|required|max:255',
            'founded_year' => 'sometimes|required|date',
        ]);

        // Verifica se a validação falhou
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Erro de validação.',
                'errors' => $validator->errors(),
            ], 422); // Status 422: Unprocessable Entity
        }

        // Tenta encontrar o registro pelo ID
        $manufactory = Manufactory::find($manufactorye);

        // Verifica se o registro existe
        if (!$manufactory) {
            return response()->json([
                'message' => 'Registro não encontrado.',
            ], 404); // Status 404: Not Found
        }

        // Atualiza os campos com os dados recebidos
        $manufactory->update($request->only(['name', 'country', 'founded_year']));

        // Retorna a resposta com sucesso
        return response()->json([
            'message' => 'Registro atualizado com sucesso.',
            'data' => new ManufactoryResource($manufactory),
        ], 200); // Status 200: OK
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $manufactorye)
    {
        // Tenta encontrar o registro pelo ID
        $manufactory = Manufactory::find($manufactorye);

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
            'data' => new ManufactoryResource($registro) // Inclui o recurso deletado
        ], 200); // Status 200: OK
    }
}
