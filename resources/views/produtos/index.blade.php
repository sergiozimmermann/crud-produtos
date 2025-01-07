@extends('layouts.layout')

@section('content')
<div id="produtos" class="container">
    <h2 class="text-center">Cadastro de Produtos</h2>

    <!-- Formulário para criar novo produto -->
    <div class="card">
        <div class="card-body">
            <form action="{{ route('produtos.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="text" name="nome" class="form-control" placeholder="Nome do Produto" required>
                </div>
                <div class="mb-3">
                    <input type="text" name="descricao" class="form-control" placeholder="Descrição do Produto">
                </div>
                <div class="mb-3">
                    <input type="number" name="preco" class="form-control" placeholder="Preço do Produto" step="0.01" required>
                </div>
                <button type="submit" class="btn btn-primary">Criar Produto</button>
            </form>
        </div>
    </div>

    <!-- Exibição dos Produtos em Tabela -->
    <div class="card mt-4">
        <div class="card-body">
            <h5 class="text-center">Produtos Cadastrados</h5>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Preço</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produtos as $produto)
                    <tr onclick="window.location='{{ route('produtos.edit', $produto->id) }}'" style="cursor: pointer;">
                        <td>
                            {{ $produto->id }}
                        </td>
                        <td>
                            {{ $produto->nome }}
                        </td>
                        <td>
                            {{ $produto->descricao }}
                        </td>
                        <td>
                            R$ {{ number_format($produto->preco, 2, ',', '.') }}
                        </td>
                        <td>
                            <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm rounded-circle" style="width: 30px; height: 30px; display: flex; justify-content: center; align-items: center; padding: 0;">
                                    <i class="fas fa-trash-alt" style="font-size: .75rem;"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection