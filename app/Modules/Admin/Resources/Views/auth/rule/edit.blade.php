<form id="edit-form" class="form-horizontal form-ajax" role="form" data-toggle="validator" method="POST" action="">
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2">{{lang('Ismenu')}}:</label>
        <div class="col-xs-12 col-sm-8">
            {!! build_radios('row[ismenu]', ['1'=>lang('Yes'), '0'=>lang('No')], $row['ismenu']) !!}
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2">{{lang('Parent')}}:</label>
        <div class="col-xs-12 col-sm-8">
            {!! build_select('row[pid]', $ruledata, $row['pid'], ['class'=>'form-control', 'required'=>'']) !!}
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="control-label col-xs-12 col-sm-2">{{lang('Name')}}:</label>
        <div class="col-xs-12 col-sm-8">
            <input type="text" class="form-control" id="name" name="row[name]"
                   data-placeholder-node="{{lang('Node tips')}}" data-placeholder-menu="{{lang('Menu tips')}}"
                   value="{{$row['name']}}"
                   data-rule="required"/>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2">{{('Title')}}:</label>
        <div class="col-xs-12 col-sm-8">
            <input type="text" class="form-control" id="title" name="row[title]" value="{{$row['title']}}"
                   data-rule="required"/>
        </div>
    </div>
    <div class="form-group">
        <label for="icon" class="control-label col-xs-12 col-sm-2">{{lang('Icon')}}:</label>
        <div class="col-xs-12 col-sm-8">
            <div class="input-group input-groupp-md">
                <input type="text" class="form-control" id="icon" name="row[icon]" value="{{$row['icon']}}"/>
                <a href="javascript:;" class="btn-search-icon input-group-addon">{{lang('Search icon')}}</a>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="weigh" class="control-label col-xs-12 col-sm-2">{{lang('Weigh')}}:</label>
        <div class="col-xs-12 col-sm-8">
            <input type="text" class="form-control" id="weigh" name="row[weigh]" value="{{$row['weigh']}}"
                   data-rule="required"/>
        </div>
    </div>
    <div class="form-group">
        <label for="remark" class="control-label col-xs-12 col-sm-2">{{lang('Condition')}}:</label>
        <div class="col-xs-12 col-sm-8">
            <textarea class="form-control" id="condition" name="row[condition]">{{$row['condition']}}</textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="remark" class="control-label col-xs-12 col-sm-2">{{lang('Remark')}}:</label>
        <div class="col-xs-12 col-sm-8">
            <textarea class="form-control" id="remark" name="row[remark]">{{$row['remark']}}</textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2">{{lang('Status')}}:</label>
        <div class="col-xs-12 col-sm-8">
            {!! build_radios('row[status]', ['normal'=>lang('Normal'), 'hidden'=>lang('Hidden')],$row['status']) !!}
        </div>
    </div>
    <div class="form-group hidden layer-footer">
        <div class="col-xs-2"></div>
        <div class="col-xs-12 col-sm-8">
            <button type="submit" class="btn btn-success btn-embossed disabled">{{lang(('OK'))}}</button>
            <button type="reset" class="btn btn-default btn-embossed">{{lang('Reset')}}</button>
        </div>
    </div>
</form>
@include('admin::rule/tpl')
