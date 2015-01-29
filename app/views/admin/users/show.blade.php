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
                    <a href="{{ route('admin.users.destroy', $user->id) }}" data-toggle="tooltip" data-placement="top"
                       title="Eliminar" class="glyphicon glyphicon-remove"></a>
                </td>
            </tr>
        
    </table>


<p>Full name: {{ $user->full_name }}</p>
<p>Email: {{ $user->email }}</p>

<p>
  <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-primary">
    Editar
  </a>    
</p>

{{ Form::model($user, array('route' => array('admin.users.destroy', $user->id), 'method' => 'DELETE'), array('role' => 'form')) }}
  {{ Form::submit('Eliminar usuario', array('class' => 'btn btn-danger')) }}
{{ Form::close() }}

@stop