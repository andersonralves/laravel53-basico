@extends('painel.templates.template')

@section('content')
    <h1 class="title-pg">
        <a href="{{ route('produtos.index') }}" style="text-decoration: none;"> <i class="fa fa-arrow-left"></i> </a>
        Produto: <strong>{{$product->name}}</strong>
    </h1>

    <p><strong>Ativo: </strong>{{$product->active == 1? 'sim' : 'não'}}</p>
    <p><strong>Número: </strong>{{$product->number}}</p>
    <p><strong>Descrição: </strong>{{$product->description}}</p>
    <p><strong>Categoria: </strong>{{$product->category}}</p>

    <hr>

    @if ( isset($errors) && count($errors) > 0 )
        <div class="alert alert-danger">
            @foreach( $errors->all() as $error )
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    {{ Form::open(['route' => ['produtos.destroy', $product->id], 'method' => 'DELETE' ]) }}

    {{ Form::submit("Deletar Produto: $product->name", ['class' => 'btn btn-danger']) }}
    {{ Form::close() }}

@endsection
