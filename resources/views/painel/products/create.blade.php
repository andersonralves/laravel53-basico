@extends('painel.templates.template')

@section('content')

    <h1 class="title-pg">Gestão Produto</h1>

    <form method="post" action="{{ route('produtos.store') }}">

        {!! csrf_field() !!}

        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Nome</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="name" id="name">
            </div>
        </div>

        <div class="form-group row">
            <label for="number" class="col-sm-2 col-form-label">Número</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="number" id="number">
            </div>
        </div>

        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">Descrição</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="description" id="description" cols="30" rows="2"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Ativo?</label>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" name="active" id="active">
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
                        <option value="{{ $category }}">{{ ucfirst($category) }}</option>
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