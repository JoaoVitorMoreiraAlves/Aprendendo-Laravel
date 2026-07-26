@extends('layouts.main')

@section('title','HDC Events')

@section('content')
    <h1>Alguma coisa</h1>
    <img src="/img/banner.jpg" alt="">
    @if (10 > 50)
        <p>A condição é true</p>
    @endif

    <p>{{ $nome }}</p>

    @if ($nome == 'Pedro')
        <p>O Nome é Pedro</p>
    @elseif ($nome == 'João Vitor')
        <p>O nome é João Vitor e ele tem {{ $idade }}</p>
    @else
        <p>O nome não é Pedro</p>
    @endif

    @for($i=0; $i < count($arr); $i++)
        <p>{{ $arr[$i] }} - {{ $i }}</p>

        @if ($i == 2)
            <p>O I é 2</p>
        @endif
    @endfor

    @php
        $name = 'Jov';
        echo $name;
    @endphp

    <!-- Comentário Html -->
    {{-- Comentário Html do Blade --}}



    @foreach ($nomes as $nome)
        <p>{{ $nome }} - {{ $loop->index }}</p>
    @endforeach

@endsection