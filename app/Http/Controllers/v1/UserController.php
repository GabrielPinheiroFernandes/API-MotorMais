<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $users = User::paginate(10);

        return UserResource::collection($users);
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
        // // Validação dos dados recebidos
        // $validator = Validator::make($request->all(), [
        //     'name' => 'required|max:255',
        //     'email' => 'required|email|max:255|unique:users', // Certifica-se de que o email é único
        //     'password' => 'required|min:8', // Adiciona uma validação para a senha
        // ]);

        // // Verifica se a validação falhou
        // if ($validator->fails()) {
        //     // Lança uma exceção de validação
        //     throw new ValidationException($validator);
        // }

        // // Criação do novo usuário
        // $user = User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => bcrypt($request->password), // Hash da senha
        // ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return new UserResource($user);
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
