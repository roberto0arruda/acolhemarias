@extends('adminlte::page')

@section('title', 'Quartos')

@section('content_header')
    <h1>Quartos</h1>
@stop

@section('content')
    <p>
        <a href="{{ route('rooms.create') }}" class="btn btn-success">
            <span class="glyphicon glyphicon-plus"></span> add_new
        </a> 
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            list
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($rooms) > 0 ? 'datatable' : '' }} @can('room_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>

                        <th>room-number</th>
                        <th>floor</th>
                        <th>description</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($rooms) > 0)
                        @foreach ($rooms as $room)
                            <tr data-entry-id="{{ $room->id }}">
                                <td></td>
                                
                                <td field-key='room_number'>{{ $room->room_number }}</td>
                                <td field-key='floor'>{{ $room->floor }}</td>
                                <td field-key='description'>{!! $room->description !!}</td>
                                <td>
                                    <a href="{{ route('rooms.show',[$room->id]) }}" class="btn btn-xs btn-primary">view</a>
                                    <a href="{{ route('rooms.edit',[$room->id]) }}" class="btn btn-xs btn-info">edit</a>
                                    <a href="javascript:void(0)" class="btn btn-xs btn-danger" onclick="$(this).find('form').submit();">
                                        {{-- <span class="glyphicon glyphicon-trash"></span> --}}
                                        <form action="{{ route('rooms.destroy', $room->id) }}" method="POST">
                                            {!! method_field('DELETE') !!}  {!! csrf_field() !!}
                                        </form>
                                        delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="8">no_entries_in_table</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop
