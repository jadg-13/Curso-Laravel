@extends('templates.template')

@section('content')
<h1>Categoria</h1>

<h2>{{$category->name}}</h2>
<p>{{$category->description}}</p>

@endsection
