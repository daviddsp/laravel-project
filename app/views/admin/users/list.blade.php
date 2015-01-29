@extends('admin/layout')
@section('title') Lista de Usuarios @stop
@section('content')
    <h1>Lista de usuarios</h1>
<p>
    <a href="{{ route('admin.users.create' )}}" class="btn btn-info"> Desea Crear otro usuario</a>
</p>
    <table class="table table-striped table-condensed table-bordered table-responsive text-center">
        <tr>
            <th class="text-center">Full name</th>
            <th class="text-center">Email</th>
            <th class="text-center">Acciones</th>
        </tr>

        @foreach ($users as $user)
            <tr>
                <td>{{$user->full_name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <a href="{{ route('admin.users.show', $user->id) }}" data-toggle="tooltip" data-placement="top"
                       title="Ver" class="glyphicon glyphicon-eye-open" ></a>
                    <a href="{{ route('admin.users.edit', $user->id) }}" data-toggle="tooltip" data-placement="top"
                       title="Editar" class="glyphicon glyphicon-wrench"></a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $users->links() }}

@stop
