<!-- Logo -->
<a href="javascript:;" class="logo">
    <!-- 迷你模式下Logo的大小为50X50 -->
    <span class="logo-mini">{{$config['site']['name']}}</span>
    <!-- 普通模式下Logo -->
    <span class="logo-lg"><b>{{$config['site']['name']}}</b></span>
</a>

<!-- 顶部通栏样式 -->
<nav class="navbar navbar-static-top">

    <!--第一级菜单-->
    <div id="firstnav">
        <!-- 边栏切换按钮-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">{{lang('Toggle navigation')}}</span>
        </a>

        <!--如果不想在顶部显示角标,则给ul加上disable-top-badge类即可-->
        <ul class="nav nav-tabs nav-addtabs disable-top-badge hidden-xs" role="tablist">
            {!!$navlist!!}
        </ul>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                <li>
                    <a href="{{url('index/index')}}" target="_blank"><i class="fa fa-home" style="font-size:14px;"></i></a>
                </li>
                <!-- 账号信息下拉框 -->
                <li class="hidden-xs">
                    <a href="javascript:;" data-toggle="checkupdate" title="{{lang('Check for updates')}}">
                        <i class="fa fa-refresh"></i>
                    </a>
                </li>
                <!-- 清除缓存 -->
                <li>
                    <a href="javascript:;" data-toggle="dropdown" title="{{lang('Wipe cache')}}">
                        <i class="fa fa-trash"></i>
                    </a>
                    <ul class="dropdown-menu wipecache">
                        <li><a href="javascript:;" data-type="all"><i
                                        class="fa fa-trash"></i> {{lang('Wipe all cache')}}</a></li>
                        <li class="divider"></li>
                        <li><a href="javascript:;" data-type="content"><i
                                        class="fa fa-file-text"></i> {{lang('Wipe content cache')}}</a></li>
                        <li><a href="javascript:;" data-type="template"><i
                                        class="fa fa-file-image-o"></i> {{lang(('Wipe template cache'))}}</a></li>
                        <li><a href="javascript:;" data-type="config"><i
                                        class="fa fa-rocket"></i> {{lang(('Wipe config cache'))}}</a></li>
                        <li><a href="javascript:;" data-type="route"><i
                                        class="fa fa-link"></i> {{lang(('Wipe route cache'))}}</a></li>
                    </ul>
                </li>


                <!-- 多语言列表 -->
                @if($config['admin']['lang_switch_on'])
                    <li class="hidden-xs">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i
                                    class="fa fa-language"></i></a>
                        <ul class="dropdown-menu">
                            @foreach($site['languages'] as $k=> $v)
                                <li class="{{$config['language']==$v?'active':''}}">
                                    <a href="javascript:void(0);" class="lang" data-id="{{$v}}">{{lang($k)}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
            @endif

            <!-- 全屏按钮 -->
                <li class="hidden-xs">
                    <a href="#" data-toggle="fullscreen"><i class="fa fa-arrows-alt"></i></a>
                </li>

                <!-- 账号信息下拉框 -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{$admin['avatar']}}" onerror="{{$site['avatar']}}"
                             class="user-image" alt="{{$admin['nickname']}}">
                        <span class="hidden-xs">{{$admin['nickname']}}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{($admin['avatar']}}" onerror="{{$site['avatar']}}"
                                 class="img-circle" alt="">
                            <p>
                                {{$admin['nickname']}}
                                <small><?php echo date('Y-m-d H:i:s', $admin['logintime']);?></small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                            <div class="row">
                                <div class="col-xs-4 text-center">
                                    <a href="https://www.fastadmin.net" target="_blank">{{lang('FastAdmin')}}</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="https://forum.fastadmin.net" target="_blank">{{lang('Forum')}}</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="https://doc.fastadmin.net" target="_blank">{{('Docs')}}</a>
                                </div>
                            </div>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="{{url('admin/profile')}}" class="btn btn-primary addtabsit"><i
                                            class="fa fa-user"></i>
                                    {{lang('Profile')}}</a>
                            </div>
                            <div class="pull-right">
                                <a href="{{url('admin/logout')}}" class="btn btn-danger"><i class="fa fa-sign-out"></i>
                                    {{lang('Logout')}}</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- 控制栏切换按钮 -->
                <li class="hidden-xs">
                    <a href="javascript:;" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
            </ul>
        </div>
    </div>

@if($config['admin']['multiplenav'])
    <!--第二级菜单,只有在multiplenav开启时才显示-->
        <div id="secondnav">
            <ul class="nav nav-tabs nav-addtabs disable-top-badge" role="tablist">
                @if($fixedmenu)
                    <li role="presentation" id="tab_{{$fixedmenu['id']}}" class="{{$referermenu?'':'active'}}"><a
                                href="#con_{{$fixedmenu['id']}}" node-id="{{$fixedmenu['id']}}"
                                aria-controls="{{$fixedmenu['id']}}" role="tab" data-toggle="tab"><i
                                    class="fa fa-dashboard fa-fw"></i> <span>{{$fixedmenu['title']}}</span> <span
                                    class="pull-right-container"> </span></a></li>
                @endif
                @if($referermenu)

                    <li role="presentation" id="tab_{{$referermenu['id']}}" class="active"><a
                                href="#con_{{$referermenu['id']}}" node-id="{{$referermenu['id']}}"
                                aria-controls="{{$referermenu['id']}}" role="tab" data-toggle="tab"><i
                                    class="fa fa-list fa-fw"></i> <span>{{$referermenu['title']}}</span> <span
                                    class="pull-right-container"> </span></a> <i class="close-tab fa fa-remove"></i>
                    </li>
                @endif
            </ul>
        </div>
    @endif
</nav>