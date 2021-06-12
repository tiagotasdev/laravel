@extends('layouts.principal')

@section('titulo', 'Opcoes')

@section('conteudo')


<div class = "options">
    <ul>
        <li><a class="warning" href="{{ route('opcoes', 1) }}">warning</a></li>
        <li><a class="info"    href="{{ route('opcoes', 2) }}">info</a></li>
        <li><a class="success" href="{{ route('opcoes', 3) }}">success</a></li>
        <li><a class="error selected"   href="{{ route('opcoes', 4) }}">error</a></li>
    </ul>
</div>

@if(isset($opcao))

    @switch($opcao)
        @case(1)
            <x-alerta titulo='Erro Fatal' tipo='warning'>
            <p><strong>Warning</strong></p>
            <p>Ocorreu um erro inesperado</p>
            </x-alerta>
            @break
        @case(2)
            <x-alerta titulo='Erro Fatal' tipo='info'>
            <p><strong>Info</strong></p>
            <p>Ocorreu um erro inesperado</p>
            </x-alerta>
             @break
        @case(3)
            <x-alerta titulo='Erro Fatal' tipo='success'>
            <p><strong>Success</strong></p>
            <p>Ocorreu um erro inesperado</p>
            </x-alerta>
             @break
         @case(4)
            <x-alerta titulo='Erro Fatal' tipo='error'>
            <p><strong>Error</strong></p>
            <p>Ocorreu um erro inesperado</p>
            </x-alerta>
              @break           
    @endswitch

@endif

<a href="{{ route('clientes.index') }}">Voltar</a>

@endsection