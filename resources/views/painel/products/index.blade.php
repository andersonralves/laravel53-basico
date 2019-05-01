@extends('painel.templates.template')

@section('content')
    <h1 class="title-pg">Listagem dos Produtos</h1>

    <a href="{{ route('produtos.create') }}" class="btn btn-primary mb-2 mt-2"><i class="fa fa-plus"></i> Cadastrar</a>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th scope="col">Status</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td scope="row">{{ $loop->iteration }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->active == 1? 'Ativo' : 'Inativo' }}</td>
                <td width="100px">
                    <a href="" class="edit actions">
                        <i class="fa fa-edit"></i>
                    </a>
                    <a href="" class="delete actions">
                        <i class="fa fa-trash-alt"></i>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
