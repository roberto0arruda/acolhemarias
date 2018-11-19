@extends('adminlte::page')

@section('title', 'Função')

@section('content_header')
    <h1>Função</h1>
@stop

@section('content')
<div class="table">
    <form method="POST" action=" {{ route('roles.update', $role->id) }} ">
        {!! method_field('PUT') !!}  {!! csrf_field() !!}
        
        <div class="panel panel-default">
            <div class="panel-heading">Edit</div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label for="name" class="control-label">name</label>
                        <input class="form-control" type="text" name="name" value="{{ $role->name }}">
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
                        <label for="permission" class="control-label">Premissions</label>
                        <select class="form-control" multiple="multiple" name="permission[]" id="select2">
                            @foreach ($permissions as $permission)
                                @php
                                    if ( in_array($permission->name, $permissions_role) ) {
                                        echo "<option selected value=$permission->id > $permission->name </option>";
                                    } else {
                                        echo "<option value=$permission->id> $permission->name </option>";
                                    }
                                @endphp
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
        
        <button type="submit" class="btn btn-danger">Update</button>
    </form>
</div>
@stop

@section('js')
<script>
    $(document).ready(function () {
        $('#select2').select2();
    });
</script>
@stop