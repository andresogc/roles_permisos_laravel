@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Roles
                    @can('roles.create')
                    <a href="{{route('roles.create')}}" class="btn btn-sm btn-primary pull-right">Crear</a>
                    @endcan
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Role</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $role)
                                <tr>
                                    <td>{{$role->id}}</td>
                                    <td>{{$role->name}}</td>
                                    <td>
                                        @can('roles.show')
                                            <a href="{{route('roles.show', $role->id)}}" class="btn btn-sm btn-dark">
                                                Ver
                                            </a>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('roles.edit')
                                            <a href="{{route('roles.edit', $role->id)}}" class="btn btn-sm btn-primary">
                                                Edit
                                            </a>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('roles.destroy')
                                         {!! Form::open(['route' => ['roles.destroy', $role->id],
                                         'method' =>'DELETE']) !!}
                                                <button class="btn btn-sm btn-danger">Eliminar</button>
                                         {!! FORM::close() !!}
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $roles->render()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
