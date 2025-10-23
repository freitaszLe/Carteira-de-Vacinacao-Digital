@extends('layouts.app')

@section('title', isset($vaccine) ? 'Editar Vacina' : 'Nova Vacina')

@section('content')
<h1 class="text-2xl font-bold mb-4">{{ isset($vaccine) ? 'Editar Vacina' : 'Nova Vacina' }}</h1>

<form action="{{ isset($vaccine) ? route('vaccines.update', $vaccine) : route('vaccines.store') }}" method="POST" class="bg-white p-6 rounded shadow">
    @csrf
    @if(isset($vaccine))
        @method('PUT')
    @endif

    <div class="mb-4">
        <label class="block mb-1 font-bold">Nome</label>
        <input type="text" name="name" value="{{ $vaccine->name ?? old('name') }}" class="w-full border rounded p-2">
    </div>

    <div class="mb-4">
        <label class="block mb-1 font-bold">Fabricante</label>
        <input type="text" name="manufacturer" value="{{ $vaccine->manufacturer ?? old('manufacturer') }}" class="w-full border rounded p-2">
    </div>

    <div class="mb-4">
        <label class="block mb-1 font-bold">Doses</label>
        <input type="number" name="doses" value="{{ $vaccine->doses ?? old('doses') }}" class="w-full border rounded p-2">
    </div>

    <div class="mb-4">
        <label class="block mb-1 font-bold">Intervalo entre doses (dias)</label>
        <input type="number" name="interval_days" value="{{ $vaccine->interval_days ?? old('interval_days') }}" class="w-full border rounded p-2">
    </div>

    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        {{ isset($vaccine) ? 'Atualizar' : 'Cadastrar' }}
    </button>
</form>
@endsection
