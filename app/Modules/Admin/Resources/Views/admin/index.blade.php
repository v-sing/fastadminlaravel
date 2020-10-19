<div class="panel panel-default panel-intro">
    {!! build_heading() !!}

    <div class="panel-body">
        <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade active in" id="one">
                <div class="widget-body no-padding">
                    <div id="toolbar" class="toolbar">
                        {!! build_toolbar('refresh,add,delete') !!}
                    </div>
                    <table id="table" class="table table-striped table-bordered table-hover"
                           data-operate-edit="{{$auth->check('auth/admin/edit')}}"
                           data-operate-del="{{$auth->check('auth/admin/del')}}"
                           width="100%">
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>