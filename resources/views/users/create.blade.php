@extends('layouts.app')

@section('title', 'Novo usuário')

@section('content')
<h1>Novo usuário</h1>

<form action="{{ route('users.store') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Nome:" value="{{old}}">
    <input type="text" name="email" placeholder="E-mail:" value="{{old}}">
    <input type="text" name="password" placeholder="Senha:" value="{{old}}">
    <button type="submit">Enviar</button>
</form>

@endsection