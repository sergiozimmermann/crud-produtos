<!-- resources/views/produtos/edit.blade.php -->
@extends('layouts.layout')

@section('content')
<div class="container">
    <h2 class="text-center">Editar Produto</h2>

    <!-- Formulário de edição de produto -->
    <div class="card">
        <div class="card-body">
            <form action="{{ route('produtos.update', $produto->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <input type="text" name="nome" class="form-control" value="{{ $produto->nome }}" required>
                </div>
                <div class="mb-3">
                    <input type="text" name="descricao" class="form-control" value="{{ $produto->descricao }}">
                </div>
                <div class="mb-3">
                    <input type="number" name="preco" class="form-control" value="{{ $produto->preco }}" step="0.01" required>
                </div>
                <button type="submit" class="btn btn-primary">Atualizar Produto</button>
            </form>
        </div>
    </div>
</div>
@endsection