<form id="add-form" class="form-horizontal form-ajax" role="form" data-toggle="validator" method="POST" action="">
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2">{{lang('Group')}}:</label>
        <div class="col-xs-12 col-sm-8">
            {!! build_select('group[]', $groupdata, null, ['class'=>'form-control selectpicker', 'multiple'=>'', 'data-rule'=>'required']) !!}
        </div>
    </div>
    <div class="form-group">
        <label for="username" class="control-label col-xs-12 col-sm-2">{{lang('Username')}}:</label>
        <div class="col-xs-12 col-sm-8">
            <input type="text" class="form-control" id="username" name="row[username]" value=""
                   data-rule="required;username"/>
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="control-label col-xs-12 col-sm-2">{{lang('Email')}}:</label>
        <div class="col-xs-12 col-sm-8">
            <input type="email" class="form-control" id="email" name="row[email]" value="" data-rule="required;email"/>
        </div>
    </div>
    <div class="form-group">
        <label for="nickname" class="control-label col-xs-12 col-sm-2">{{lang(('Nickname'))}}:</label>
        <div class="col-xs-12 col-sm-8">
            <input type="text" class="form-control" id="nickname" name="row[nickname]" autocomplete="off" value=""
                   data-rule="required"/>
        </div>
    </div>
    <div class="form-group">
        <label for="password" class="control-label col-xs-12 col-sm-2">{{lang('Password')}}:</label>
        <div class="col-xs-12 col-sm-8">
            <input type="password" class="form-control" id="password" name="row[password]" autocomplete="new-password"
                   value="" data-rule="required;password"/>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2">{{lang('Status')}}:</label>
        <div class="col-xs-12 col-sm-8">
            {!! build_radios('row[status]', ['normal'=>lang('Normal'), 'hidden'=>lang('Hidden')]) !!}
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