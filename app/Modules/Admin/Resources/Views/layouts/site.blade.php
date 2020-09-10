<!DOCTYPE html>
{{--<html lang="{{$config['language']}}">--}}
<head>
    @include('admin::common/meta')
</head>
<body class="inside-header inside-aside {{defined('IS_DIALOG') && IS_DIALOG ? 'is-dialog' : ''}}">
<div id="main" role="main">
    <div class="tab-content tab-addtabs">
        <div id="content">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <section class="content-header hide">
                        <h1>
                            {{lang('Dashboard')}}
                            <small>{{lang('Control panel')}}</small>
                        </h1>
                    </section>
                @if(!IS_DIALOG && !$config['admin']['multiplenav'])

                    <!-- RIBBON -->
                        <div id="ribbon">
                            <ol class="breadcrumb pull-left">
                                <li><a href="dashboard" class="addtabsit"><i
                                                class="fa fa-dashboard"></i> {{lang('Dashboard')}}</a></li>
                            </ol>
                            <ol class="breadcrumb pull-right">
                                @foreach($breadcrumb as $vo)
                                    <li><a href="javascript:;" data-url="{{$vo['url']}}">{{$vo['title']}}</a></li>
                                @endforeach
                            </ol>
                        </div>
                        <!-- END RIBBON -->
                    @endif
                    <div class="content">
                        {!! $layouts !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin::common/script')
</body>
</html>