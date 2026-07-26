@extends('layouts.main')

@section('title', 'Produto')

@section('content')

@if ($id)
    <p>Exibindo produto id: {{ $id }}</p>
@else
    <p>Produto não encontrado!
@endif

@endsection