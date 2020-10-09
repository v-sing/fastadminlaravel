<div class="panel panel-default panel-intro">
    {!! build_heading() !!}

    <div class="panel-body">
        <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade active in" id="one">
                <div class="widget-body no-padding">
                    <div id="toolbar" class="toolbar">
                        {!!build_toolbar('refresh,delete')!!}
                    </div>
                    <table id="table" class="table table-striped table-bordered table-hover"
                           data-operate-detail="{{$auth->check('auth/adminlog/index')}}"
                           data-operate-del="{{$auth->check('auth/adminlog/del')}}"
                           width="100%">
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>