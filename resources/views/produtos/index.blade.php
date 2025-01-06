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
                    <tr style="cursor: pointer;">
                        <!-- Envolvendo toda a linha da tabela com a tag <a> -->
                        <td>
                            <a href="{{ route('produtos.edit', $produto->id) }}" style="color: inherit; text-decoration: none; display: block;">
                                {{ $produto->id }}
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('produtos.edit', $produto->id) }}" style="color: inherit; text-decoration: none; display: block;">
                                {{ $produto->nome }}
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('produtos.edit', $produto->id) }}" style="color: inherit; text-decoration: none; display: block;">
                                {{ $produto->descricao }}
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('produtos.edit', $produto->id) }}" style="color: inherit; text-decoration: none; display: block;">
                                R$ {{ number_format($produto->preco, 2, ',', '.') }}
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="_token" value="IccZAMAqzTXmoBss4gD0UMXxfaTUyEkz1rwvKoeW">
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger btn-sm rounded-circle" style="width: 30px; height: 30px; display: flex; justify-content: center; align-items: center; padding: 0;">
                                    <i class="fas fa-trash-alt" style="font-size: .75rem;"></i> <!-- Ícone de lixeira -->
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