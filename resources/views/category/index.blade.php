@extends('templates.template')

@section('content')
    <h1>Categorias</h1>

    <table border="1">
        <thead>
            <td>Codigo</td>
            <td>Categoría</td>
            <td>Descripcion</td>
        </thead>
        @foreach ($categories as $item)
            <tr>
                <td><a href="{{ route('category-show', $item->id) }}" target="_blank"
                        rel="noopener noreferrer">{{ $item->id }}</a></td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->description }}</td>
            </tr>
        @endforeach
    </table>
    {{ $categories->links() }}
@endsection
