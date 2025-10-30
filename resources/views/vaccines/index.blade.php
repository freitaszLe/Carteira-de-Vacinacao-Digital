@extends('adminlte::page')

@section('content')
<h1 class="text-3xl font-bold mb-4">Vacinas</h1>

<a href="{{ route('vaccines.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Nova Vacina</a>

<table class="min-w-full bg-white border">
    <thead>
        <tr>
            <th class="py-2 px-4 border-b">Nome</th>
            <th class="py-2 px-4 border-b">Fabricante</th>
            <th class="py-2 px-4 border-b">Doses</th>
            <th class="py-2 px-4 border-b">Intervalo (dias)</th>
            <th class="py-2 px-4 border-b">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($vaccines as $vaccine)
        <tr>
            <td class="py-2 px-4 border-b">{{ $vaccine->name }}</td>
            <td class="py-2 px-4 border-b">{{ $vaccine->manufacturer }}</td>
            <td class="py-2 px-4 border-b">{{ $vaccine->doses }}</td>
            <td class="py-2 px-4 border-b">{{ $vaccine->interval_days }}</td>
            <td class="py-2 px-4 border-b">
                <a href="{{ route('vaccines.edit', $vaccine->id) }}" class="text-blue-500">Editar</a>
                <form action="{{ route('vaccines.destroy', $vaccine->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-500" type="submit">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
