@extends('layouts.main')

@section('title', 'HDC Product')

@section('content')
    @if ($id != null)
        <p> Exibindo produto id: {{ $id }}</p>
    @endif
@endsection
