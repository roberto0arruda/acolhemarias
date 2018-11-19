@extends('adminlte::page')

@section('title', 'Usuários')

@section('content_header')
    <h1>Usuários</h1>
@stop

@section('content')

<div class="table">
    <form action="{{ route('users.store')}} " method="post">
        {!! csrf_field() !!}
        <div class="panel panel-default">
            <div class="panel-heading">
                create
            </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12 form-group">
                        <label for="name">Nome</label>
                        <input type="text" class="form-control" name="name" placeholder="Nome de Usuário" required>
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
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="E-mail" required>
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
                        <input type="password" class="form-control" name="password" id="password" placeholder="senha" required>
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
                        <select name="roles" id="" class="form-control select2-multiple" multiple="multiple">
                            <option value=""></option>
                            @foreach ($roles as $role)
                                <option value="{{$role->id}}"> {{$role->name}} </option>
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
        <button type="submit" class="btn btn-danger">Save</button>
    </form>
</div>
@stop

@section('js')
<script>
    $(document).ready(function() {
        $('.select2-multiple').select2();
    });
</script>
@stop