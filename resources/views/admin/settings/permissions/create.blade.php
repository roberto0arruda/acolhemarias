@extends('adminlte::page')

@section('title', 'Permissões')

@section('content_header')
    <h1>Permissões</h1>
@stop

@section('content')
<div class="table">
    <form action=" {{ route('permissions.store')}} " method="post">
        {!! csrf_field() !!}
        <div class="panel panel-default">
            <div class="panel-heading">
                Create
            </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label for="name">Nome</label>
                        <input class="form-control" type="text" name="name" placeholder="Nome da Permissão" required>
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
        <button type="submit" class="btn btn-danger">Save</button>
    </form>
</div>
@stop

