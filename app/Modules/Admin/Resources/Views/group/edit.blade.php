<form id="edit-form" class="form-horizontal form-ajax" role="form" data-toggle="validator" method="POST" action="">
    <input type="hidden" name="row[rules]" value="{{$row['rules']}}" />
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2">{{lang('Parent')}}:</label>
        <div class="col-xs-12 col-sm-8">
            {!! build_select('row[pid]', $groupdata, $row['pid'], ['class'=>'form-control selectpicker', 'data-rule'=>'required', 'data-id'=>$row['id'], 'data-pid'=>$row['pid']]) !!}
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2">{{lang('Name')}}:</label>
        <div class="col-xs-12 col-sm-8">
            <input type="text" class="form-control" id="name" name="row[name]" value="{!! $row['name'] !!}" data-rule="required" />
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2">{{lang('Permission')}}:</label>
        <div class="col-xs-12 col-sm-8">
            <span class="text-muted"><input type="checkbox" name="" id="checkall" /> <label for="checkall"><small>{{lang('Check all')}}</small></label></span>
            <span class="text-muted"><input type="checkbox" name="" id="expandall" /> <label for="expandall"><small>{{lang('Expand all')}}</small></label></span>

            <div id="treeview"></div>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2">{{lang('Status')}}:</label>
        <div class="col-xs-12 col-sm-8">
            {!! build_radios('row[status]', ['normal'=>lang('Normal'), 'hidden'=>lang('Hidden')], $row['status']) !!}
        </div>
    </div>
    <div class="form-group hidden layer-footer">
        <label class="control-label col-xs-12 col-sm-2"></label>
        <div class="col-xs-12 col-sm-8">
            <button type="submit" class="btn btn-success btn-embossed disabled">{{lang('OK')}}</button>
            <button type="reset" class="btn btn-default btn-embossed">{{lang('Reset')}}</button>
        </div>
    </div>
</form>
