<div class="panel panel-default panel-intro">
    {!! build_heading() !!}

    <div class="panel-body">
        <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade active in" id="one">
                <div class="widget-body no-padding">
                    <div id="toolbar" class="toolbar">
                        {!! build_toolbar('refresh,delete') !!}
                        <a class="btn btn-info btn-disabled disabled btn-selected" href="javascript:;"><i class="fa fa-leaf"></i> 获取选中项</a>
                        <a class="btn btn-success btn-toggle-view" href="javascript:;"><i class="fa fa-leaf"></i> 切换视图</a>
                    </div>
                    <table id="table" class="table table-striped table-bordered table-hover" width="100%">
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

<style type="text/css">
    .example {
        height:100%;position: relative;
    }
    .example > span {
        position:absolute;left:15px;top:15px;
    }
</style>

<script id="itemtpl" type="text/html">
    <!--
    如果启用了templateView,默认调用的是itemtpl这个模板，可以通过设置templateFormatter来修改
    在当前模板中可以使用三个变量(item:行数据,i:当前第几行,data:所有的行数据)
    此模板引擎使用的是art-template的native,可参考官方文档
    -->

    <div class="col-sm-4 col-md-3">
        <!--下面四行是为了展示随机图片和标签，可移除-->
        <% var labelarr = ['primary', 'success', 'info', 'danger', 'warning']; %>
        <% var label = labelarr[item.id % 5]; %>
        <div class="thumbnail example">
            <span class="btn btn-<%=label%>">ID:<%=item.id%></span>
            <img src="<%=item.fullurl%>" onerror="this.src='/assets/img/png.png'" class="img-responsive" style="height:246px" alt="<%=item.url%>" >
            <div class="caption">
                <h4  style="overflow: hidden;white-space: nowrap;text-overflow: ellipsis;"><%=item.url?item.url:'无'%></h4>
                <p class="text-muted">{{lang('Mimetype')}}: <%=item.mimetype%> &nbsp;; {{lang('Storage')}} : <%=item.storage%></p>
                <p class="text-muted">{{lang('Created_at')}}: <%=item.created_at%></p>
                <p>

                    <!--如果需要响应编辑或删除事件，可以给元素添加 btn-edit或btn-del的类和data-id这个属性值-->
                    <a href="#" class="btn btn-danger btn-del" data-id="<%=item.id%>"><i class="fa fa-times"></i> {{lang('Del')}}</a>
                    <span class="pull-right" style="margin-top:10px;">
                        <!--如果需要多选操作，请确保有下面的checkbox元素存在,可移除-->
                        <input name="checkbox" data-id="<%=item.id%>" type="checkbox" />
                    </span>
                </p>
            </div>
        </div>
    </div>
</script>