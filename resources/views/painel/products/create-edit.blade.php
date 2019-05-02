@extends('painel.templates.template')

@section('content')

    <h1 class="title-pg">Gestão Produto</h1>

    @if ( isset($errors) && count($errors) > 0 )
        <div class="alert alert-danger">
            @foreach( $errors->all() as $error )
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    @if( isset($product) )
        <form method="post" action="{{ route('produtos.update', $product->id) }}">
            {!! method_field('PUT') !!}
    @else
        <form method="post" action="{{ route('produtos.store') }}">
    @endif

        {!! csrf_field() !!}

        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Nome</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="name" id="name" value="{{ $product->name or old('name') }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="number" class="col-sm-2 col-form-label">Número</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="number" id="number" value="{{ $product->number or old('number') }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">Descrição</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="description" id="description" cols="30" rows="2">{{ $product->description or old('description') }}</textarea>
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Ativo?</label>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" name="active" id="active"
                        @if( isset($product) && $product->active == 1 ) checked @endif>
                    <label class="form-check-label" for="active">
                        Sim
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="category" class="col-sm-2 col-form-label">Categoria</label>
            <div class="col-sm-10">
                <select class="form-control" name="category" id="category">
                    <option value="">Escolha a categoria</option>
                    @foreach($categories as $category)
                        <option value="{{ $category }}"
                            @if( isset($product) && $product->category == $category)
                                selected
                            @endif
                            >{{ ucfirst($category) }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row">
            <div class="col text-right">
                <button class="btn btn-primary" >Enviar</button>
            </div>
        </div>

    </form>

@endsection