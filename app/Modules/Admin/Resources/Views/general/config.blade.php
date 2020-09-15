<style type="text/css">
    @media (max-width: 375px) {
        .edit-form tr td input {
            width: 100%;
        }

        .edit-form tr th:first-child, .edit-form tr td:first-child {
            width: 20%;
        }

        .edit-form tr th:nth-last-of-type(-n+2), .edit-form tr td:nth-last-of-type(-n+2) {
            display: none;
        }
    }

    .edit-form table > tbody > tr td a.btn-delcfg {
        visibility: hidden;
    }

    .edit-form table > tbody > tr:hover td a.btn-delcfg {
        visibility: visible;
    }
</style>
<div class="panel panel-default panel-intro">
    <div class="panel-heading">
        {!! build_heading(null, false) !!}
        <ul class="nav nav-tabs">
            @foreach($siteList as $index=>$vo)
                <li class="{{$vo['active']?'active':''}}"><a href="#{{$vo['name']}}"
                                                             data-toggle="tab">{{lang($vo['title'])}}</a></li>
            @endforeach
            <li>
                <a href="#addcfg" data-toggle="tab"><i class="fa fa-plus"></i></a>
            </li>
        </ul>
    </div>
    <div class="panel-body">
        <div id="myTabContent" class="tab-content">
            @foreach($siteList as $index=>$vo)
                <div class="tab-pane fade {{$vo['active'] ? 'active in' : ''}}" id="{{$vo['name']}}">
                    <div class="widget-body no-padding">
                        <form id="{{$vo['name']}}-form" class="edit-form form-horizontal" role="form"
                              data-toggle="validator" method="POST" action="{{url('admin/general/config/edit')}}">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th width="15%">{{lang('Title')}}</th>
                                    <th width="68%">{{lang('Value')}}</th>
                                    <th width="15%">{{lang('Name')}}</th>
                                    <th width="2%"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($vo['list'] as $item)
                                    <tr>
                                        <td>{{lang($item['title'])}}</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-sm-8 col-xs-12">
                                                    @if($item['type']=='string')
                                                        <input {{$item['extend']}} type="text"
                                                               name="row[{{$item['name']}}]"
                                                               value="{{$item['crux_value']}}" class="form-control"
                                                               data-rule="{{$item['crux_rule']}}"
                                                               data-tip="{{$item['tip']}}"/>
                                                    @endif
                                                    @if($item['type']=='text')
                                                        <textarea {{$item['extend']}} name="row[{{$item['name']}}]"
                                                                  class="form-control"
                                                                  data-rule="{{$item['crux_rule']}}"
                                                                  rows="5"
                                                                  data-tip="{{$item['tip']}}">{{$item['crux_value']}}</textarea>
                                                    @endif
                                                    @if($item['type']=='editor')
                                                        <textarea {{$item['extend']}} name="row[{{$item['name']}}]"
                                                                  id="editor-{{$item['name']}}"
                                                                  class="form-control editor"
                                                                  data-rule="{{$item['crux_rule']}}" rows="5"
                                                                  data-tip="{{$item['tip']}}">{{$item['crux_value']}}</textarea>
                                                    @endif
                                                    @if($item['type']=='array')
                                                        <dl class="fieldlist" data-name="row[{{$item['name']}}]">
                                                            <dd>
                                                                <ins>{{lang('Array key')}}</ins>
                                                                <ins>{{lang('Array value')}}</ins>
                                                            </dd>
                                                            <dd><a href="javascript:;"
                                                                   class="btn btn-sm btn-success btn-append"><i
                                                                            class="fa fa-plus"></i> {{lang('Append')}}
                                                                </a>
                                                            </dd>
                                                            <textarea name="row[{{$item['name']}}]"
                                                                      class="form-control hide"
                                                                      cols="30"
                                                                      rows="5">{{$item['crux_value']}}</textarea>
                                                        </dl>
                                                    @endif
                                                    @if($item['type']=='datetime')
                                                        <input {{$item['extend']}} type="text"
                                                               name="row[{{$item['name']}}]"
                                                               value="{{$item['crux_value']}}"
                                                               class="form-control datetimerange"
                                                               data-tip="{{$item['tip']}}"
                                                               data-rule="{{$item['crux_rule']}}"/>

                                                    @endif
                                                    @if($item['type']=='date'||$item['type']=='time')
                                                        <input {{$item['extend']}} type="text"
                                                               name="row[{{$item['name']}}]"
                                                               value="{{$item['crux_value']}}"
                                                               class="form-control datetimepicker"
                                                               data-tip="{{$item['tip']}}"
                                                               data-rule="{{$item['crux_rule']}}"/>

                                                    @endif
                                                    @if($item['type']=='number')
                                                        <input {{$item['extend']}} type="number"
                                                               name="row[{{$item['name']}}]"
                                                               value="{{$item['crux_value']}}" class="form-control"
                                                               data-tip="{{$item['tip']}}"
                                                               data-rule="{{$item['crux_rule']}}"/>
                                                    @endif
                                                    @if($item['type']=='checkbox')
                                                        @foreach($item['content'] as $key=> $vo1)

                                                            <label for="row[{{$item['name']}}][]-{{$key}}"><input
                                                                        id="row[{{$item['name']}}][]-{{$key}}"
                                                                        name="row[{{$item['name']}}][]" type="checkbox"
                                                                        value="{{$key}}" data-tip="{{$item['tip']}}"
                                                                        @if(in_array($key,$item['crux_value'])) checked @endif /> {{lang($vo1)}}
                                                            </label>
                                                        @endforeach
                                                    @endif
                                                    @if($item['type']=='radio')
                                                        @foreach($item['content'] as $key=> $vo1)
                                                            <label for="row[{{$item['name']}}]-{{$key}}"><input
                                                                        id="row[{{$item['name']}}]-{{$key}}"
                                                                        name="row[{{$item['name']}}]" type="radio"
                                                                        value="{{$key}}" data-tip="{{$item['tip']}}"
                                                                        @if(in_array($key,$item['crux_value'])) checked @endif /> {{lang($vo1)}}
                                                            </label>
                                                        @endforeach
                                                    @endif
                                                    @if($item['type']=='selects'||$item['type']=='select')
                                                        <select {{$item['extend']}}
                                                                name="row[{{$item['name']}}]{{$item['type']=='selects'?'[]':''}}"
                                                                class="form-control selectpicker"
                                                                data-tip="{{$item['tip']}}"
                                                                {{$item['type']=='selects'?'multiple':''}}>
                                                            @foreach($item['content'] as $key=> $vo1)
                                                                <option value="{{$key}}"
                                                                        @if(in_array($key,$item['value'])) selected @endif
                                                                >{{lang($vo1)}}</option>
                                                            @endforeach
                                                        </select>
                                                    @endif
                                                    @if($item['type']=='images'||$item['type']=='image')
                                                        <div class="form-inline">
                                                            <input id="c-{{$item['name']}}" class="form-control"
                                                                   size="50"
                                                                   name="row[{{$item['name']}}]" type="text"
                                                                   value="{{$item['crux_value']}}"
                                                                   data-base64="@if($item['crux_value']){!!get_upload_image($item['crux_value'])!!} @endif"
                                                                   data-tip="{{$item['tip']}}">
                                                            <span><button type="button" id="plupload-{{$item['name']}}"
                                                                          class="btn btn-danger plupload"
                                                                          data-input-id="c-{{$item['name']}}"
                                                                          data-mimetype="image/*"
                                                                          data-multiple="{{$item['type']=='image'?'false':'true'}}"
                                                                          data-preview-id="p-{{$item['name']}}"><i
                                                                            class="fa fa-upload"></i> {{lang('Upload')}}</button></span>
                                                            <span><button type="button" id="fachoose-{{$item['name']}}"
                                                                          class="btn btn-primary fachoose"
                                                                          data-input-id="c-{{$item['name']}}"
                                                                          data-mimetype="image/*"
                                                                          data-multiple="{{$item['type']=='image'?'false':'true'}}"><i
                                                                            class="fa fa-list"></i> {{lang('Choose')}}</button></span>
                                                            <ul class="row list-inline plupload-preview"
                                                                id="p-{{$item['name']}}"></ul>
                                                        </div>
                                                    @endif
                                                    @if($item['type']=='file'||$item['type']=='files')
                                                        <div class="form-inline">
                                                            <input id="c-{{$item['name']}}" class="form-control"
                                                                   size="50"
                                                                   name="row[{{$item['name']}}]" type="text"
                                                                   value="{{$item['crux_value']}}"
                                                                   data-tip="{{$item['tip']}}">
                                                            <span><button type="button" id="plupload-{{$item['name']}}"
                                                                          class="btn btn-danger plupload"
                                                                          data-input-id="c-{{$item['name']}}"
                                                                          data-multiple="{{$item['type']=='file'?'false':'true'}}"><i
                                                                            class="fa fa-upload"></i> {{lang('Upload')}}</button></span>
                                                            <span><button type="button" id="fachoose-{{$item['name']}}"
                                                                          class="btn btn-primary fachoose"
                                                                          data-input-id="c-{{$item['name']}}"
                                                                          data-multiple="{{$item['type']=='file'?'false':'true'}}"><i
                                                                            class="fa fa-list"></i> {{lang('Choose')}}</button></span>
                                                        </div>

                                                    @endif
                                                    @if($item['type']=='switch')
                                                        <input id="c-{{$item['name']}}" name="row[{{$item['name']}}]"
                                                               type="hidden" value="{{$item['crux_value']?1:0}}">
                                                        <a href="javascript:;" data-toggle="switcher"
                                                           class="btn-switcher" data-input-id="c-{{$item['name']}}"
                                                           data-yes="1" data-no="0">
                                                            <i class="fa fa-toggle-on text-success @if($item['crux_value'])fa-flip-horizontal text-gray @endif fa-2x"></i>
                                                        </a>
                                                    @endif
                                                    @if($item['type']=='bool')
                                                        <label for="row[{{$item['name']}}]-yes"><input
                                                                    id="row[{{$item['name']}}]-yes"
                                                                    name="row[{{$item['name']}}]"
                                                                    type="radio" value="1"
                                                                    {{$item['crux_value']?'checked':''}}
                                                                    data-tip="{{$item['tip']}}"/> {{lang('Yes')}}
                                                        </label>
                                                        <label for="row[{{$item['name']}}]-no"><input
                                                                    id="row[{{$item['name']}}]-no"
                                                                    name="row[{{$item['name']}}]"
                                                                    type="radio" value="0"
                                                                    {{$item['crux_value']?'':'checked'}}
                                                                    data-tip="{{$item['tip']}}"/> {{lang('No')}}</label>
                                                    @endif
                                                </div>
                                                <div class="col-sm-4"></div>
                                            </div>
                                        </td>
                                        <td><?php echo "{{\$site['" . $item['name'] . "']}}";?></td>
                                        <td><a href="javascript:;" class="btn-delcfg text-muted"
                                               data-name="{{$item['name']}}"><i class="fa fa-times"></i></a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td></td>
                                    <td>
                                        <button type="submit"
                                                class="btn btn-success btn-embossed">{{lang('OK')}}</button>
                                        <button type="reset" class="btn btn-default btn-embossed">{{lang('Reset')}}
                                        </button>
                                    </td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                </tfoot>
                            </table>
                        </form>
                    </div>
                </div>
            @endforeach
            <div class="tab-pane fade" id="addcfg">
                <form id="add-form" class="form-horizontal" role="form" data-toggle="validator" method="POST"
                      action="{{url('admin/general/config/add')}}">
                    <div class="form-group">
                        <label for="type" class="control-label col-xs-12 col-sm-2">{{lang('Type')}}:</label>
                        <div class="col-xs-12 col-sm-4">
                            <select name="row[type]" class="form-control selectpicker">
                                @foreach($typeList as $key=>$vo)
                                    <option value="{{$key}}">{{$vo}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="group" class="control-label col-xs-12 col-sm-2">{{lang('Group')}}:</label>
                        <div class="col-xs-12 col-sm-4">
                            <select name="row[crux_group]" class="form-control selectpicker">
                                @foreach($groupList as $key=>$vo)
                                    <option value="{{$key}}">{{$vo}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="control-label col-xs-12 col-sm-2">{{lang('Name')}}:</label>
                        <div class="col-xs-12 col-sm-4">
                            <input type="text" class="form-control" id="name" name="row[name]" value=""
                                   data-rule="required; length(3~30); remote(general/config/check)"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="title" class="control-label col-xs-12 col-sm-2">{{lang('Title')}}:</label>
                        <div class="col-xs-12 col-sm-4">
                            <input type="text" class="form-control" id="title" name="row[title]" value=""
                                   data-rule="required"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="value" class="control-label col-xs-12 col-sm-2">{{lang('Value')}}:</label>
                        <div class="col-xs-12 col-sm-4">
                            <input type="text" class="form-control" id="value" name="row[crux_value]" value=""
                                   data-rule=""/>
                        </div>
                    </div>
                    <div class="form-group hide" id="add-content-container">
                        <label for="content" class="control-label col-xs-12 col-sm-2">{{lang('Content')}}:</label>
                        <div class="col-xs-12 col-sm-4">
                            <textarea name="row[content]" id="content" cols="30" rows="5" class="form-control"
                                      data-rule="required">value1|title1
                          value2|title2</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tip" class="control-label col-xs-12 col-sm-2">{{lang('Tip')}}:</label>
                        <div class="col-xs-12 col-sm-4">
                            <input type="text" class="form-control" id="tip" name="row[tip]" value="" data-rule=""/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="rule" class="control-label col-xs-12 col-sm-2">{{lang('Rule')}}:</label>
                        <div class="col-xs-12 col-sm-4">
                            <input type="text" class="form-control" id="rule" name="row[crux_rule]" value=""/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="extend" class="control-label col-xs-12 col-sm-2">{{lang('Extend')}}:</label>
                        <div class="col-xs-12 col-sm-4">
                            <textarea name="row[extend]" id="extend" cols="30" rows="5" class="form-control"
                                      data-rule=""></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-12 col-sm-2"></label>
                        <div class="col-xs-12 col-sm-4">
                            <button type="submit" class="btn btn-success btn-embossed">{{lang('OK')}}</button>
                            <button type="reset" class="btn btn-default btn-embossed">{{lang('Reset')}}</button>
                        </div>
                    </div>

                </form>

            </div>

        </div>
    </div>
</div>