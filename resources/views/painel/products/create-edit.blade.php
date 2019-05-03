@extends('painel.templates.template')

@section('content')

    <h1 class="title-pg">
        <a href="{{ route('produtos.index') }}" style="text-decoration: none;"> <i class="fa fa-arrow-left"></i> </a>

        Gestão Produto: <strong>{{ $product->name or 'Novo' }}</strong>
    </h1>

    @if ( isset($errors) && count($errors) > 0 )
        <div class="alert alert-danger">
            @foreach( $errors->all() as $error )
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    @if( isset($product) )
            {!! Form::model($product, ['route'=>[ 'produtos.update', $product->id ], 'method'=>'PUT' ]) !!}
    @else
            {!! Form::open(['route'=>'produtos.store']) !!}
    @endif

        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Nome</label>
            <div class="col-sm-10">
                {!! Form::text('name',  null, ['class'=> 'form-control', 'placeholder'=>'Nome']) !!}
            </div>
        </div>

        <div class="form-group row">
            <label for="number" class="col-sm-2 col-form-label">Número</label>
            <div class="col-sm-10">
                {!! Form::text('number',  null, ['class'=> 'form-control', 'placeholder'=>'Número']) !!}
            </div>
        </div>

        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">Descrição</label>
            <div class="col-sm-10">
                {!! Form::textarea('description',  null, ['class'=> 'form-control', 'cols'=>30, 'rows'=>2, 'placeholder'=>'Descrição']) !!}
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Ativo?</label>
            <div class="col-sm-10">
                    <label>
                        {!! Form::checkbox('active') !!}
                        Sim
                    </label>
            </div>
        </div>

        <div class="form-group row">
            <label for="category" class="col-sm-2 col-form-label">Categoria</label>
            <div class="col-sm-10">
                {!! Form::select('category', $categories, null, ['class'=>'form-control']) !!}
            </div>
        </div>

        <div class="form-group row">
            <div class="col text-right">
                {!! Form::submit('Enviar', ['class'=> 'btn btn-primary']) !!}
            </div>
        </div>

    {!! Form::close() !!}

@endsection