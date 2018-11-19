@extends('adminlte::page')

@section('title', 'Usuários')

@section('content_header')
    <h1>Usuários</h1>
@stop

@section('content')
    <p>
        <a href="{{ route('users.create') }}" class="btn btn-success" >
            <span class="glyphicon glyphicon-plus"></span> add_new
        </a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            List
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($users) > 0 ? 'datatable' : '' }} dt-select">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>

                        <th>name</th>
                        <th>email</th>
                        <th>roles</th>
                        <th>&nbsp;</th>

                    </tr>
                </thead>
                
                <tbody>
                    @if (count($users) > 0)
                        @foreach ($users as $user)
                            <tr data-entry-id="{{ $user->id }}">
                                <td></td>

                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @foreach ($user->roles()->pluck('name') as $role)
                                        <span class="label label-info label-many">{{ $role }}</span>
                                    @endforeach
                                </td>
                                <td>
                                    <a href="{{ route('users.edit',[$user->id]) }}" class="btn btn-xs btn-info">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </a>
                                    <a href="javascript:void(0)" class="btn btn-xs btn-danger" onclick="$(this).find('form').submit();">
                                        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                            {!! method_field('DELETE') !!}  {!! csrf_field() !!}
                                        </form>
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>

                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="9">@lang('global.app_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop