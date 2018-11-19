@extends('adminlte::page')

@section('title', 'Usuários')

@section('content_header')
    <h1>Usuários</h1>
@stop

@section('content')
<div class="table">
    <form method="POST" action=" {{ route('users.update', $user->id) }} ">
        {!! method_field('PUT') !!}  {!! csrf_field() !!}
        
        <div class="panel panel-default">
            <div class="panel-heading">Edit</div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label for="name">Name</label>
                        <input class="form-control" type="text" name="name" value="{{ $user->name }}">
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
                        <label for="email" class="control-label">Email*</label>
                        <input type="text" class="form-control" name="email" required value=" {{ $user->email }} ">
                        <p class="help-block"></p>
                        @if($errors->has('email'))
                            <p class="help-block">
                                {{ $errors->first('email') }}
                            </p>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" required>
                        <p class="help-block"></p>
                        @if($errors->has('password'))
                            <p class="help-block">
                                {{ $errors->first('password') }}
                            </p>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label for="roles">Roles</label>
                        <select name="roles[]" id="select2" class="form-control" multiple="multiple">
                            @foreach ($roles as $role)
                                @php
                                    if ( in_array($role->name, $roles_user) ) {
                                        echo "<option selected value=$role->id > $role->name </option>";
                                    } else {
                                        echo "<option value=$role->id> $role->name </option>";
                                    }
                                @endphp
                            @endforeach
                        </select>
                        <p class="help-block"></p>
                        @if($errors->has('roles'))
                            <p class="help-block">
                                {{ $errors->first('roles') }}
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
    $(document).ready(function() {
        $('#select2').select2();
    })
</script>
@stop