@extends('adminlte::page')

@section('title', 'Função')

@section('content_header')
    <h1>Função</h1>
@stop

@section('content')
<div class="table">
    <form action=" {{ route('roles.store')}} " method="post">
        {!! csrf_field() !!}
        <div class="panel panel-default">
            <div class="panel-heading">
                Create
            </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label for="name">Nome</label>
                        <input class="form-control" type="text" name="name" placeholder="Nome da Função" required>
                        <p class="help-block"></p>
                        @if($errors->has('name'))
                            <p class="help-block">
                                {{ $errors->first('name') }}
                            </p>
                        @endif
                    </div>
                </div>  
        
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label for="pesmission">Permissions</label>
                        <select name="permission[]" id="select2-multiple" class="form-control" multiple="multiple">
                            <option value=""></option>
                            @foreach ($permissions as $permission)
                                <option value="{{$permission->id}}"> {{$permission->name}} </option>
                            @endforeach
                        </select>
                        <p class="help-block"></p>
                        @if($errors->has('permission'))
                            <p class="help-block">
                                {{ $errors->first('permission') }}
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

@section('js')
    <script>
        $(document).ready(function() {
            $('#select2-multiple').select2();
        });
    </script>
@stop