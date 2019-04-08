@extends('site.templates.template1')

@section('content')
<h3>HomePage do Site</h3>

@if($var1 == 1123)
<p>É igual</p>
@else
<p>Não é igual</p>
@endif

@unless($var1 == 1234)
<p>É diferente....unless</p>
@endunless

<h4>Laço For</h4>
@for( $i = 0; $i < 10; $i++)

<p>Valor: {{ $i }}</p>

@endfor

{{--
<h4>Laço Foreach</h4>
@foreach($nums as $num)
<p>Numero: {{ $num }}</p>
@endforeach
--}}

<h4>Laço Forelse</h4>
@forelse($names as $name)
    <p>Nome: {{ $name }}</p>
@empty
    <p>Nenhum nome informado</p>
@endforelse

@php

echo 'Utilizando codigo PHP';

@endphp

@include('site._includes.sidebar')

@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@endpush
