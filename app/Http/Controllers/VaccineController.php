<?php

namespace App\Http\Controllers;

use App\Models\Vaccine;
use Illuminate\Http\Request;
use App\Http\Requests\VaccineRequest;
use Illuminate\Http\JsonResponse;

class VaccineController extends Controller
{
    // Listar todas as vacinas
    public function index(): JsonResponse
    {
        return response()->json(Vaccine::all());
    }

    // Criar nova vacina
    public function store(VaccineRequest $request): JsonResponse
    {
        $vaccine = Vaccine::create($request->validated());
        return response()->json($vaccine, 201);
    }

    // Mostrar uma vacina
    public function show(Vaccine $vaccine): JsonResponse
    {
        return response()->json($vaccine);
    }

    // Atualizar vacina
    public function update(VaccineRequest $request, Vaccine $vaccine): JsonResponse
    {
        $vaccine->update($request->validated());
        return response()->json($vaccine);
    }

    // Deletar vacina
    public function destroy(Vaccine $vaccine): JsonResponse
    {
        $vaccine->delete();
        return response()->json(['message' => 'Vaccine deleted']);
    }
}
