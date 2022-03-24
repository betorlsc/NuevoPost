@extends('adminlte::page')

@section('title', 'xSoft ')

@section('content_header')
<a href="{{ route('admin.tags.create') }}" class="btn btn-secondary btn-sm float-right">Agregar etiqueta</a>

    <h1>Lista de Etiquetas </h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>
                {{ session('info') }}
            </strong>
        </div>
    @endif

    <div class="card">
      {{--   <div class="card-header">
            <a href="{{ route('admin.tags.create') }}" class="btn btn-secondary" )>Agregar etiqueta</a>
        </div> --}}
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Color</th>
                    <th colspan="2"></th>
                </thead>

                <tbody>
                    @foreach ($tags as $tag)
                        <tr>
                            <td>{{ $tag->id }}</td>
                            <td>{{ $tag->name }}</td>
                            <td>{{ $tag->color }}</td>
                            <td width="10px">
                                <a href="{{ route('admin.tags.edit', $tag) }}" class="btn btn-primary btn-sm">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{ route('admin.tags.destroy', $tag) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
