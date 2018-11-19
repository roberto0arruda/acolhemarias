@extends('adminlte::page')

@section('title', 'Função')

@section('content_header')
    <h1>Função</h1>
@stop

@section('content')
<p>
    <a href="{{ route('roles.create') }}" class="btn btn-success" >
        <span class="glyphicon glyphicon-plus"></span> add_new
    </a>
</p>

<div class="panel panel-default">
    <div class="panel-heading">
        List
    </div>

    <div class="panel-body table-responsive">
        <table class="table table-bordered table-striped {{ count($roles) > 0 ? 'datatable' : '' }} dt-select">
            <thead>
                <tr>
                    <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>

                    <th>name</th>
                    <th>permissions</th>
                    <th>&nbsp;</th>

                </tr>
            </thead>
            
            <tbody>
                @if (count($roles) > 0)
                    @foreach ($roles as $role)
                        <tr data-entry-id="{{ $role->id }}">
                            <td></td>

                            <td>{{ $role->name }}</td>
                            <td>
                                @foreach ($role->permissions()->pluck('name') as $permission)
                                    <span class="label label-info label-many">{{ $permission }}</span>
                                @endforeach
                            </td>
                            <td>
                                <a href="{{ route('roles.edit',[$role->id]) }}" class="btn btn-xs btn-info">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </a>
                                <a href="javascript:void(0)" class="btn btn-xs btn-danger" onclick="$(this).find('form').submit();">
                                    <form action="{{ route('roles.destroy', $role->id) }}" method="POST">
                                        {!! method_field('DELETE') !!}  {!! csrf_field() !!}
                                    </form>
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </td>

                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="9">Não existe registros na tabela @lang('global.app_no_entries_in_table')</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@stop

