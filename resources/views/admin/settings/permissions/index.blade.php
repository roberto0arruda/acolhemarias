@extends('adminlte::page')

@section('title', 'Permissões')

@section('content_header')
    <h1>Permissões</h1>
@stop

@section('content')
    <p>
        <a href="{{ route('permissions.create') }}" class="btn btn-success">
            <span class="glyphicon glyphicon-plus"></span> add_new
        </a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">List</div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($permissions) > 0 ? 'datatable' : ''}} dt-select">
                <thead>
                    <tr>
                        <th style="text-aling:center;"><input type="checkbox" id="select-all" /></th>
                        <th>name</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>

                <tbody>
                    @if (count($permissions) > 0)
                        @foreach ($permissions as $permission)
                            <tr data-entry-id="{{$permission->id }}">
                                <td></td>
                                <td>{{ $permission->name}}</td>
                                <td>
                                    <a href="{{ route('permissions.edit', [$permission->id]) }}" class="btn btn-xs btn-info">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </a>
                                    <a href="javascript:void(0)" class="btn btn-xs btn-danger" onclick="$(this).find('form').submit();">
                                        <form action="{{ route('permissions.destroy', $permission->id) }}" method="POST">
                                            {!! method_field('DELETE') !!}  {!! csrf_field() !!}
                                        </form>
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach                        
                    @else
                        <tr>
                            <td colspan="3">@lang('global.app_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('js')
<script>
    window.route_mass_crud_entries_destroy = '{{ route('permissions.mass_destroy') }}';
</script>
@stop