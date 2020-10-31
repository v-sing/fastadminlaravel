<style>
    .bootstrap-table tr td .text-muted {
        color: #888;
    }
</style>
<div class="panel panel-default panel-intro">
    {!! build_heading() !!}

    <div class="panel-body">
        <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade active in" id="one">
                <div class="widget-body no-padding">
                    <div id="toolbar" class="toolbar">
                        <a href="javascript:;" class="btn btn-primary btn-refresh" title="{{lang('Refresh')}}"><i
                                    class="fa fa-refresh"></i> </a>
                        <a href="javascript:;"
                           class="btn btn-success btn-add {{$auth->check('auth/rule/add')?'':'hide'}}"
                           title="{{lang('Add')}}"><i class="fa fa-plus"></i> {{lang('Add')}}</a>
                        <a href="javascript:;"
                           class="btn btn-success btn-edit btn-disabled disabled {{$auth->check('auth/rule/edit')?'':'hide'}}"
                           title="{{lang('Edit')}}"><i class="fa fa-pencil"></i> {{lang('Edit')}}</a>
                        <a href="javascript:;"
                           class="btn btn-danger btn-del btn-disabled disabled {{$auth->check('auth/rule/del')?'':'hide'}}"
                           title="{{lang('Delete')}}"><i class="fa fa-trash"></i> {{lang('Delete')}}</a>
                        <div class="dropdown btn-group {{$auth->check('auth/rule/multi')?'':'hide'}}">
                            <a class="btn btn-primary btn-more dropdown-toggle btn-disabled disabled"
                               data-toggle="dropdown"><i class="fa fa-cog"></i> {{lang('More')}}</a>
                            <ul class="dropdown-menu text-left" role="menu">
                                <li><a class="btn btn-link btn-multi btn-disabled disabled" href="javascript:;"
                                       data-params="status=normal"><i class="fa fa-eye"></i> {{lang('Set to normal')}}
                                    </a>
                                </li>
                                <li><a class="btn btn-link btn-multi btn-disabled disabled" href="javascript:;"
                                       data-params="status=hidden"><i class="fa fa-eye-slash"></i> {{lang('Set to
                                        hidden')}}</a></li>
                            </ul>
                        </div>
                        <a href="javascript:;" class="btn btn-danger btn-toggle-all"><i class="fa fa-plus"></i>
                            {{lang('Toggle all')}}</a>
                    </div>
                    <table id="table" class="table table-bordered table-hover"
                           data-operate-edit="{{$auth->check('auth/rule/edit')}}"
                           data-operate-del="{{$auth->check('auth/rule/del')}}"
                           width="100%">
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
