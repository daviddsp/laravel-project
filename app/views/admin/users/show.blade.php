@extends ('admin/layout')

@section ('title') User {{ $user->full_name }} @stop

@section ('content')

<h2>User #{{ $user->id }}</h2>

    <table class="table table-striped table-condensed table-bordered table-responsive text-center">
        <tr>
            <th class="text-center">Full name</th>
            <th class="text-center">Email</th>
            <th class="text-center">Acciones</th>
        </tr>

        
            <tr>
                <td>{{$user->full_name}}</td>
                <td>{{$user->email}}</td>
                <td>
                <a href="#" data-id="{{ $user->id }}" class="btn btn-danger btn-delete">Eliminar</a>
{{ Form::open(array('route' => array('admin.users.destroy', 'USER_ID'), 'method' => 'DELETE', 'role' => 'form', 'id' => 'form-delete')) }}
{{ Form::close() }}
                </td>
            </tr>
        
    </table>

<p>

  <a href="{{ route('admin.users.index') }}" class="btn btn-success">
    Retornar
  </a>
</p>

@stop