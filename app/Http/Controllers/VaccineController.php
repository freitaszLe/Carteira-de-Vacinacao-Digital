<?php

namespace App\Http\Controllers;

use App\Models\Vaccine;
use Illuminate\Http\Request;
use App\Http\Requests\VaccineRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class VaccineController extends Controller
{
    // Listar todas as vacinas
    public function index(): View
    {
        $vaccines = Vaccine::all();
        return view('vaccines.index', compact('vaccines'));
    }

    public function create()
    {
        return view('vaccines.form');
    }

    // Formulário de edição
    public function edit(Vaccine $vaccine)
    {
        return view('vaccines.form', compact('vaccine'));
    }

    // Store e update continuam iguais, mas você pode fazer redirect para index:
    public function store(VaccineRequest $request): RedirectResponse
    {
        Vaccine::create($request->validated());
        return redirect()->route('vaccines.index');
    }

    public function update(VaccineRequest $request, Vaccine $vaccine): RedirectResponse
    {
        $vaccine->update($request->validated());
        return redirect()->route('vaccines.index');
    }

    public function destroy(Vaccine $vaccine)
    {
        $vaccine->delete();
        return redirect()->route('vaccines.index');
    }
}