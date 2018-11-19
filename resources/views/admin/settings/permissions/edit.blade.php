@extends('adminlte::page')

@section('title', 'Permissões')

@section('content_header')
    <h1>Permissões</h1>
@stop

@section('content')
<div class="table">
    <form method="POST" action=" {{ route('permissions.update', $permission->id) }} ">
        {!! method_field('PUT') !!}  {!! csrf_field() !!}
        
        <div class="panel panel-default">
            <div class="panel-heading">Edit</div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label for="name">Nome</label>
                        <input class="form-control" type="text" name="name" value="{{ $permission->name }}">
                        
                        <p class="help-block"></p>
                        @if($errors->has('name'))
                            <p class="help-block">
                                {{ $errors->first('name') }}
                            </p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        
        <button type="submit" class="btn btn-danger">Update</button>
    </form>
</div>
@stop

