@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Usuarios

                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>
                                        @can('users.show')
                                            <a href="{{route('users.show', $user->id)}}" class="btn btn-sm btn-dark">
                                                Ver
                                            </a>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('users.edit')
                                            <a href="{{route('users.edit', $user->id)}}" class="btn btn-sm btn-primary">
                                                Edit
                                            </a>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('users.destroy')
                                         {!! Form::open(['route' => ['users.destroy', $user->id],
                                         'method' =>'DELETE']) !!}
                                                <button class="btn btn-sm btn-danger">Eliminar</button>
                                         {!! FORM::close() !!}
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $users->render()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
