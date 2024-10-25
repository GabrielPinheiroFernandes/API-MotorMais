<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\Brads\ModelCarResource;
use App\Models\V1\Brads\CarBrands;
use App\Models\V1\Brads\CarModels;
use Illuminate\Http\Request;

class ModelCarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($brandId)
    {
        // Encontrar todos os modelos que pertencem à marca especificada pelo ID com paginação
        $models = CarModels::where('brand_id', $brandId)->paginate(10);

        // Retornar os modelos como resposta JSON usando o recurso ModelCarResource
        return ModelCarResource::collection($models);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($brandId, CarModels $carModel)
    {
        // Verificar se o modelo pertence à marca especificada
        if ($carModel->brand_id !== (int)$brandId) {
            return response()->json(['error' => 'Model not found for this brand'], 404);
        }
    
        // Retornar o modelo específico como resposta JSON usando o recurso ModelCarResource
        return new ModelCarResource($carModel);
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
