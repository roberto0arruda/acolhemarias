@extends('adminlte::page')

@section('title', 'Quartos')

@section('content_header')
    <h1>Quartos</h1>
@stop

@section('content')

    <div class="table">
        <form action=" {{route('rooms.store')}} " method="POST">
            {!! csrf_field() !!}
            <div class="panel panel-default">
                <div class="panel-heading">
                    create
                </div>
                
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label for="room_number">Quarto</label>
                            <input type="text" name="room_number" class="form-control" placeholder="Numero do Quarto" required>
                            <p class="help-block"></p>
                            @if($errors->has('room_number'))
                                <p class="help-block">
                                    {{ $errors->first('room_number') }}
                                </p>
                            @endif
                        </div>
                    </div>
                                                        
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label for="floor">Piso</label>
                            <input type="number" name="floor" class="form-control" placeholder="andar" required>
                            <p class="help-block"></p>
                            @if($errors->has('floor'))
                                <p class="help-block">
                                    {{ $errors->first('floor') }}
                                </p>
                            @endif
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label for="description">Descrição</label>
                            <textarea class="form-control" name="description" required placeholder="Descrição para o quarto" id="" cols="30" rows="10"></textarea>
                            <p class="help-block"></p>
                            @if($errors->has('description'))
                                <p class="help-block">
                                    {{ $errors->first('description') }}
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

