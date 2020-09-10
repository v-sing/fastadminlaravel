define(['jquery', 'bootstrap', 'backend', 'addtabs', 'adminlte', 'form'], function ($, undefined, Backend, undefined, AdminLTE, Form) {
    var Controller = {
        login: function () {
            var lastlogin = localStorage.getItem("lastlogin");
            if (lastlogin) {
                lastlogin = JSON.parse(lastlogin);
                if (typeof lastlogin.avatar != 'undefined') {
                    $("#profile-img").attr("src", Backend.api.cdnurl(lastlogin.avatar));
                    $("#profile-name").val(lastlogin.username);
                }
            }
            //让错误提示框居中
            Fast.config.toastr.positionClass = "toast-top-center";

            //本地验证未通过时提示
            $("#login-form").data("validator-options", {
                invalid: function (form, errors) {
                    $.each(errors, function (i, j) {
                        Toastr.error(j);
                    });
                },
                target: '#errtips'
            });
              //为表单绑定事件

            Form.api.bindevent($("#login-form"), function (data,ret) {
                data= ret.data;
                localStorage.setItem("lastlogin", JSON.stringify({
                    id: data.id,
                    username: data.username,
                    avatar: data.avatar
                }));
                console.log(ret.url);
                location.href = Backend.api.fixurl(ret.url);
            });
        }
    };

    return Controller;
});