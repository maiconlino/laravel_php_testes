@extends('layouts.main')

@section('title', 'HDC Products')

@section('content')
    <h1>Tela de produtos</h1>
    <a href="/">Voltar para home</a>
    @if ($busca != '')
        <p> O usuário está buscando por {{ $busca }}.
    @endif
@endsection
