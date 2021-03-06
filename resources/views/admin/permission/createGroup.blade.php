@extends('admin.base')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">新增权限分组
        <div class="pull-right">
            <a href="/admin/permission"><i class="fa fa-key"></i> 权 限 </a> /
            <a href="/admin/permission/group">权限分组</a> /
            新增分组
        </div>
    </div>
    <div class="panel-body">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/permission/create') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
                <label class="col-md-3 control-label">代号</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="例:user">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label">名称</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="例:用户">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label">描述</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="description" value="{{ old('description') }}" placeholder="例:用户的权限分组">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-2 col-md-offset-3">
                    <button type="submit" class="btn btn-primary">
                        新增
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
