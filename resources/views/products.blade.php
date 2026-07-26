{{-- Extende o layout de uma página --}}
@extends('layouts.main')

{{-- Modifica o titulo para ficar de acordo --}}
@section('title', 'Produtos')

{{-- Incorpora a seção content que o layout main fico aguardando --}}
@section('content')

<h1>Produtos</h1>

@if ($busca != '')
    <p>O usuário está buscando por {{ $busca }}</p>
@endif

@endsection