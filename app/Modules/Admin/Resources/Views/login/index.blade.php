<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin::common.meta')
    <style type="text/css">
        body {
            color: #999;
            background: url('{{$config['admin']['login_background']}}');
            background-size: cover;
        }

        a {
            color: #fff;
        }

        .login-panel {
            margin-top: 150px;
        }

        .login-screen {
            max-width: 400px;
            padding: 0;
            margin: 200px auto 0 auto;
        }

        .login-screen .well {
            border-radius: 3px;
            -webkit-box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background: rgba(255, 255, 255, 0.2);
        }

        .login-screen .copyright {
            text-align: center;
        }

        @media (max-width: 767px) {
            .login-screen {
                padding: 0 20px;
            }
        }

        .profile-img-card {
            width: 100px;
            height: 100px;
            margin: 10px auto;
            display: block;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
        }

        .profile-name-card {
            text-align: center;
        }

        #login-form {
            margin-top: 20px;
        }

        #login-form .input-group {
            margin-bottom: 15px;
        }

        #sign_in {
            color: #252d3a;
            background-color: #f3cc0f;
            border-color: #f3cc0f;
        }

        #sign_in:hover {
            color: #252d3a;
            background-color: #ebc50f;
            border-color: #ebc50f;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="login-wrapper">
        <div class="login-screen">
            <div class="well">
                <div class="login-form">
                    <img id="profile-img" class="profile-img-card"
                         src="{{get_storage_image('/assets/img/avatar.png') }}"/>
                    <p id="profile-name" class="profile-name-card"></p>
                    <form action="" method="post" id="login-form">
                        <div id="errtips" class="hide"></div>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="input-group">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-user"
                                                                 aria-hidden="true"></span></div>
                            <input type="text" class="form-control" id="pd-form-username"
                                   placeholder="{{trans('admin::common.Username')}}" name="username" autocomplete="off"
                                   value=""
                                   data-rule="{{trans('admin::common.Username')}}:required;username"/>
                        </div>
                        <div class="input-group">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-lock"
                                                                 aria-hidden="true"></span></div>
                            <input type="password" class="form-control" id="pd-form-password"
                                   placeholder="{{trans('admin::common.Password')}}" name="password"
                                   autocomplete='new-password' value=""
                                   data-rule="{{trans('admin::common.Password')}}:required;password"/>
                        </div>
                        @if($config['admin']['login_captcha'])
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-option-horizontal"
                                                                     aria-hidden="true"></span></div>
                                <input type="text" name="captcha" class="form-control"
                                       placeholder="{{trans('admin::login.Captcha')}}"
                                       data-rule="{{trans('admin::login.Captcha')}}:required"/>
                                <span class="input-group-addon" style="padding:0;border:none;cursor:pointer;">
                                        <img src="{{captcha_src()}}" width="100" height="30"
                                             onclick="this.src='{{captcha_src()}}'+Math.random()"/>
                                    </span>
                            </div>
                        @endif
                        <div class="form-group">
                            <label class="inline" for="keeplogin">
                                <input type="checkbox" name="keeplogin" id="keeplogin" value="1"/>
                                {{trans('admin::common.Keep login')}}
                            </label>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-lg btn-block"
                                    id="sign_in">{{trans('admin::common.Sign in')}}</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- future/framework是开源程序，建议在您的网站底部保留一个future/framework的链接 -->
            <p class="copyright"><a href="#">Powered By future/framework</a></p>
        </div>
    </div>
</div>

@include('admin::common.script')
</body>
</html>