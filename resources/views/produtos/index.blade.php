@extends('layout.app')
@section('title','Lista de produtos')
@section('content')
    

    <h1>Produtos</h1>
    <ul>                                                                                                                                                                                                                                                                                                                                                       
       
       

        @foreach ($produtos as $produto)


        <li><a href="http://projeto1.test/produtos/{{$produto->id}}">{{$produto->titulo}}</a></li>


        @endforeach


    </ul> 
 @endsection   


