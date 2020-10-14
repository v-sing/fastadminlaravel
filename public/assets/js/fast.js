define(['jquery', 'bootstrap', 'toastr', 'layer', 'lang'], function ($, undefined, Toastr, Layer, Lang) {
    var Fast = {
            config: {
                //toastr默认配置
                toastr: {
                    "closeButton": true,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": false,
                    "positionClass": "toast-top-center",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                },
                base64: {
                    _keyStr: "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/="
                }
            },
            events: {
                //请求成功的回调
                onAjaxSuccess: function (ret, onAjaxSuccess) {
                    var data = typeof ret.data !== 'undefined' ? ret.data : null;
                    var msg = typeof ret.msg !== 'undefined' && ret.msg ? ret.msg : __('Operation completed');

                    if (typeof onAjaxSuccess === 'function') {
                        var result = onAjaxSuccess.call(this, data, ret);
                        if (result === false)
                            return;
                    }
                    Toastr.success(msg);
                },
                //请求错误的回调
                onAjaxError: function (ret, onAjaxError) {
                    var data = typeof ret.data !== 'undefined' ? ret.data : null;
                    if (typeof onAjaxError === 'function') {
                        var result = onAjaxError.call(this, data, ret);
                        if (result === false) {
                            return;
                        }
                    }
                    Toastr.error(ret.msg);
                },
                //服务器响应数据后
                onAjaxResponse: function (response) {
                    try {
                        var ret = typeof response === 'object' ? response : JSON.parse(response);
                        if (!ret.hasOwnProperty('code')) {
                            $.extend(ret, {code: -2, msg: response, data: null});
                        }
                    } catch (e) {
                        var ret = {code: -1, msg: e.message, data: null};
                    }
                    return ret;
                }
            },
            api: {
                HTMLDecode: function (text) {
                    var temp = document.createElement("div");
                    temp.innerHTML = text;
                    var output = temp.innerText || temp.textContent;
                    temp = null;
                    return output;
                },
                trim: function (str, hanld) {  //删除左右两端的空格
                    return str.replace(/(^\s*)|(\s*$)/g, hanld);
                },
                empty: function (d) {
                    if (typeof (d) === 'undefined' || d === null || d === 'null' || d === 'NULL' || d === '' || d === 'undefined' || JSON.stringify(d) === '{}' || JSON.stringify(d) === '[]') {
                        return true;
                    } else {
                        return false;
                    }
                },
                host: function () {
                    return window.location.protocol + '//' + window.location.host;
                },
                //发送Ajax请求
                ajax: function (options, success, error) {
                    options = typeof options === 'string' ? {url: options} : options;
                    options['data']['_token'] = $('meta[name="csrf-token"]').attr('content');
                    var index = Layer.load(1, {
                        shade: [0.1,'#fff']});
                    options = $.extend({
                        type: "POST",
                        dataType: "json",
                        success: function (ret) {
                            Layer.close(index);
                            ret = Fast.events.onAjaxResponse(ret);
                            if (ret.code === 1) {
                                Fast.events.onAjaxSuccess(ret, success);
                            } else {
                                Fast.events.onAjaxError(ret, error);
                            }
                        },
                        error: function (xhr) {
                            Layer.close(index);
                            var ret = {code: xhr.status, msg: xhr.statusText, data: null};
                            Fast.events.onAjaxError(ret, error);
                        }
                    }, options);
                    $.ajax(options);
                },
                //修复URL
                fixurl: function (url) {
                    if (url.substr(0, 1) !== "/") {
                        var r = new RegExp('^(?:[a-z]+:)?//', 'i');
                        if (!r.test(url)) {
                            url = Config.moduleurl + "/" + url;
                        }
                    } else if (url.substr(0, 8) === "/addons/") {
                        url = Config.__PUBLIC__.replace(/(\/*$)/g, "") + url;
                    }
                    return url;
                },
                //获取修复后可访问的cdn链接
                cdnurl: function (url) {
                    return /^(?:[a-z]+:)?\/\//i.test(url) ? url : Config.site.cdnurl + url;
                },
                //查询Url参数
                query: function (name, url) {
                    if (!url) {
                        url = window.location.href;
                    }
                    name = name.replace(/[\[\]]/g, "\\$&");
                    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
                        results = regex.exec(url);
                    if (!results)
                        return null;
                    if (!results[2])
                        return '';
                    return decodeURIComponent(results[2].replace(/\+/g, " "));
                },
                HTMLDecode: function (text) {
                    var temp = document.createElement("div");
                    temp.innerHTML = text;
                    var output = temp.innerText || temp.textContent;
                    temp = null;
                    return output;
                },
                //打开一个弹出窗口
                open: function (url, title, options) {
                    title = title ? title : "";
                    url = Fast.api.fixurl(url);
                    url = url + (url.indexOf("?") > -1 ? "&" : "?") + "dialog=1";
                    var area = [$(window).width() > 800 ? '800px' : '95%', $(window).height() > 600 ? '600px' : '95%'];
                    options = $.extend({
                        type: 2,
                        title: title,
                        shadeClose: true,
                        shade: false,
                        maxmin: true,
                        moveOut: true,
                        area: area,
                        content: url,
                        zIndex: Layer.zIndex,
                        success: function (layero, index) {
                            var that = this;
                            //存储callback事件
                            $(layero).data("callback", that.callback);
                            //$(layero).removeClass("layui-layer-border");
                            Layer.setTop(layero);
                            try {
                                var frame = Layer.getChildFrame('html', index);
                                var layerfooter = frame.find(".layer-footer");
                                Fast.api.layerfooter(layero, index, that);

                                //绑定事件
                                if (layerfooter.size() > 0) {
                                    // 监听窗口内的元素及属性变化
                                    // Firefox和Chrome早期版本中带有前缀
                                    var MutationObserver = window.MutationObserver || window.WebKitMutationObserver || window.MozMutationObserver;
                                    if (MutationObserver) {
                                        // 选择目标节点
                                        var target = layerfooter[0];
                                        // 创建观察者对象
                                        var observer = new MutationObserver(function (mutations) {
                                            Fast.api.layerfooter(layero, index, that);
                                            mutations.forEach(function (mutation) {
                                            });
                                        });
                                        // 配置观察选项:
                                        var config = {attributes: true, childList: true, characterData: true, subtree: true}
                                        // 传入目标节点和观察选项
                                        observer.observe(target, config);
                                        // 随后,你还可以停止观察
                                        // observer.disconnect();
                                    }
                                }
                            } catch (e) {

                            }
                            if ($(layero).height() > $(window).height()) {
                                //当弹出窗口大于浏览器可视高度时,重定位
                                Layer.style(index, {
                                    top: 0,
                                    height: $(window).height()
                                });
                            }
                        }
                    }, options ? options : {});
                    if ($(window).width() < 480 || (/iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream && top.$(".tab-pane.active").size() > 0)) {
                        options.area = [top.$(".tab-pane.active").width() + "px", top.$(".tab-pane.active").height() + "px"];
                        options.offset = [top.$(".tab-pane.active").scrollTop() + "px", "0px"];
                    }
                    return Layer.open(options);
                },
                open_up: function (url, title, options) {
                    title = title ? title : "";
                    url = Fast.api.fixurl(url);
                    url = url + (url.indexOf("?") > -1 ? "&" : "?") + "dialog=1";
                    var area = [$(window).width() > 800 ? '800px' : '95%', $(window).height() > 600 ? '600px' : '95%'];
                    options = $.extend({
                        content: url,
                        zIndex: Layer.zIndex,
                        success: function (layero, index) {
                            var that = this;
                            //存储callback事件
                            $(layero).data("callback", that.callback);
                            //$(layero).removeClass("layui-layer-border");
                            Layer.setTop(layero);
                            try {
                                var frame = Layer.getChildFrame('html', index);
                                var layerfooter = frame.find(".layer-footer");
                                Fast.api.layerfooter(layero, index, that);

                                //绑定事件
                                if (layerfooter.size() > 0) {
                                    // 监听窗口内的元素及属性变化
                                    // Firefox和Chrome早期版本中带有前缀
                                    var MutationObserver = window.MutationObserver || window.WebKitMutationObserver || window.MozMutationObserver;
                                    if (MutationObserver) {
                                        // 选择目标节点
                                        var target = layerfooter[0];
                                        // 创建观察者对象
                                        var observer = new MutationObserver(function (mutations) {
                                            Fast.api.layerfooter(layero, index, that);
                                            mutations.forEach(function (mutation) {
                                            });
                                        });
                                        // 配置观察选项:
                                        var config = {attributes: true, childList: true, characterData: true, subtree: true}
                                        // 传入目标节点和观察选项
                                        observer.observe(target, config);
                                        // 随后,你还可以停止观察
                                        // observer.disconnect();
                                    }
                                }
                            } catch (e) {

                            }
                            if ($(layero).height() > $(window).height()) {
                                //当弹出窗口大于浏览器可视高度时,重定位
                                Layer.style(index, {
                                    top: 0,
                                    height: $(window).height()
                                });
                            }
                        }
                    }, options ? options : {});
                    if ($(window).width() < 480 || (/iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream && top.$(".tab-pane.active").size() > 0)) {
                        options.area = [top.$(".tab-pane.active").width() + "px", top.$(".tab-pane.active").height() + "px"];
                        options.offset = [top.$(".tab-pane.active").scrollTop() + "px", "0px"];
                    }
                    return Layer.open(options);
                },
                //关闭窗口并回传数据
                close: function (data) {
                    var index = parent.Layer.getFrameIndex(window.name);
                    var callback = parent.$("#layui-layer" + index).data("callback");
                    //再执行关闭
                    parent.Layer.close(index);
                    //再调用回传函数
                    if (typeof callback === 'function') {
                        callback.call(undefined, data);
                    }
                },
                layerfooter: function (layero, index, that) {
                    var frame = Layer.getChildFrame('html', index);
                    var layerfooter = frame.find(".layer-footer");
                    if (layerfooter.size() > 0) {
                        $(".layui-layer-footer", layero).remove();
                        var footer = $("<div />").addClass('layui-layer-btn layui-layer-footer');
                        footer.html(layerfooter.html());
                        if ($(".row", footer).size() === 0) {
                            $(">", footer).wrapAll("<div class='row'></div>");
                        }
                        footer.insertAfter(layero.find('.layui-layer-content'));
                        //绑定事件
                        footer.on("click", ".btn", function () {
                            if ($(this).hasClass("disabled") || $(this).parent().hasClass("disabled")) {
                                return;
                            }
                            $(".btn:eq(" + $(this).index() + ")", layerfooter).trigger("click");
                        });

                        var titHeight = layero.find('.layui-layer-title').outerHeight() || 0;
                        var btnHeight = layero.find('.layui-layer-btn').outerHeight() || 0;
                        //重设iframe高度
                        $("iframe", layero).height(layero.height() - titHeight - btnHeight);
                    }
                    //修复iOS下弹出窗口的高度和iOS下iframe无法滚动的BUG
                    if (/iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream) {
                        var titHeight = layero.find('.layui-layer-title').outerHeight() || 0;
                        var btnHeight = layero.find('.layui-layer-btn').outerHeight() || 0;
                        $("iframe", layero).parent().css("height", layero.height() - titHeight - btnHeight);
                        $("iframe", layero).css("height", "100%");
                    }
                },
                success: function (options, callback) {
                    var type = typeof options === 'function';
                    if (type) {
                        callback = options;
                    }
                    return Layer.msg(__('Operation completed'), $.extend({
                        offset: 0, icon: 1
                    }, type ? {} : options), callback);
                },
                error: function (options, callback) {
                    var type = typeof options === 'function';
                    if (type) {
                        callback = options;
                    }
                    return Layer.msg(__('Operation failed'), $.extend({
                        offset: 0, icon: 2
                    }, type ? {} : options), callback);
                },
                toastr: Toastr,
                layer: Layer,
                myBrowser: function () {
                    var userAgent = navigator.userAgent;
                    //取得浏览器的userAgent字符串
                    var isOpera = userAgent.indexOf("Opera") > -1;
                    if (isOpera) {
                        return "Opera"
                    }
                    ;
                    if (userAgent.indexOf("Firefox") > -1) {
                        //判断是否Firefox浏览器
                        return "FF";
                    }
                    ;
                    if (userAgent.indexOf("Chrome") > -1) {
                        return "Chrome";
                    }
                    ;
                    if (userAgent.indexOf("Safari") > -1) {
                        //判断是否Safari浏览器

                        return "Safari";
                    }
                    ;
                    if (userAgent.indexOf("compatible") > -1 && userAgent.indexOf("MSIE") > -1 && !isOpera) {

                        //判断是否IE浏览器
                        return "IE";
                    }

                }
                ,
                mousemove: function (mousex, callback) {
                    $(document).bind("contextmenu", function () {
                        return false;
                    });
                    $(document).bind("selectstart", function () {
                        return false;
                    });
                    var img = $("img");
                    img.on("contextmenu", function () {
                        return false;
                    });
                    img.on("dragstart", function () {
                        return false;
                    });
                    $('body').css({'cursor': 'url(\'/assets/img/cursor.png\'),auto !important'})
                    var oXArr = [];
                    var oYArr = [];
                    var rightArr = [];
                    var leftArr = [];
                    var topArr = [];
                    var downArr = [];
                    var rightMoveL;
                    var leftMoveL;
                    var downMoveL;
                    var upMoveL;
                    var All = [0, 0];
                    mousexx = mousex || 'body'
                    $(mousexx).mousemove(function (e) {
                        var myBrowser = Fast.api.myBrowser();
                        if (e.which == 0 || myBrowser != 'Chrome') {
                            oXArr = [];
                            oYArr = [];
                            rightArr = [];
                            leftArr = [];
                            topArr = [];
                            downArr = [];
                            rightMoveL;
                            leftMoveL;
                            downMoveL;
                            upMoveL;
                            All = [0, 0];
                            return false;
                        }
                        var obxX = e.pageX;
                        var obxY = e.pageY;
                        oXArr.unshift(obxX);
                        oYArr.unshift(obxY);
                        oXArr.splice(2, 1);
                        oYArr.splice(2, 1);

                        // tfo();
                        function tfo() {
                            if (oXArr[0] > oXArr[1]) {
                                leftArr = [];
                                rightArr.push(obxX);
                                rightMoveL = Math.abs(rightArr[rightArr.length - 1] - rightArr[0]);
                                All[3] = rightMoveL;
                                return true;
                            } else {
                                // console.log("向左");
                                rightArr = [];
                                leftArr.push(obxX);
                                leftMoveL = Math.abs(leftArr[leftArr.length - 1] - leftArr[0]);
                                All[2] = leftMoveL;
                                return false;
                            }
                        }

                        // tfw();
                        function tfw() {
                            if (oYArr[0] > oYArr[1]) {
                                // console.log("向下");
                                topArr = [];
                                downArr.push(obxY);
                                downMoveL = Math.abs(downArr[downArr.length - 1] - downArr[0]);
                                All[1] = downMoveL;
                                return true;
                            } else {
                                // console.log("向上");
                                downArr = [];
                                topArr.push(obxY);
                                upMoveL = Math.abs(topArr[topArr.length - 1] - topArr[0]);
                                All[0] = upMoveL;
                                return false;
                            }
                        }

                        // tfo();
                        var tfw = tfw();
                        // if (tfo() && tfw()) {
                        //     //右下
                        //     // console.log("右下");
                        //     console.log('鼠标向右下')
                        // } else if (tfo() && !tfw()) {
                        //     //右上
                        //     console.log('鼠标向右上')
                        //
                        // } else if (!tfo() && tfw()) {
                        //     //左下
                        //     console.log('鼠标向左下')
                        // } else if (!tfo() && !tfw()) {
                        //     //左上
                        //     console.log('鼠标向左上')
                        // }
                        callback(e, All, tfw);
                    });
                },
                //鼠标左右键
                mousedown: function (callback) {

                    $('body').mousedown(function (e) {
                        callback(e.which)
                        return false;//阻止链接跳转
                    })
                },

            },
            base64: {
                encode: function (input) {
                    _keyStr = Fast.config.base64._keyStr;
                    var output = "";
                    var chr1, chr2, chr3, enc1, enc2, enc3, enc4;
                    var i = 0;
                    input = Fast.base64._utf8_encode(input);
                    while (i < input.length) {
                        chr1 = input.charCodeAt(i++);
                        chr2 = input.charCodeAt(i++);
                        chr3 = input.charCodeAt(i++);
                        enc1 = chr1 >> 2;
                        enc2 = ((chr1 & 3) << 4) | (chr2 >> 4);
                        enc3 = ((chr2 & 15) << 2) | (chr3 >> 6);
                        enc4 = chr3 & 63;
                        if (isNaN(chr2)) {
                            enc3 = enc4 = 64;
                        } else if (isNaN(chr3)) {
                            enc4 = 64;
                        }
                        output = output +
                            _keyStr.charAt(enc1) + _keyStr.charAt(enc2) +
                            _keyStr.charAt(enc3) + _keyStr.charAt(enc4);
                    }
                    return output;
                },

                // public method for decoding
                decode: function (input) {
                    _keyStr = Fast.config.base64._keyStr;
                    var output = "";
                    var chr1, chr2, chr3;
                    var enc1, enc2, enc3, enc4;
                    var i = 0;
                    input = input.replace(/[^A-Za-z0-9\+\/\=]/g, "");
                    while (i < input.length) {
                        enc1 = _keyStr.indexOf(input.charAt(i++));
                        enc2 = _keyStr.indexOf(input.charAt(i++));
                        enc3 = _keyStr.indexOf(input.charAt(i++));
                        enc4 = _keyStr.indexOf(input.charAt(i++));
                        chr1 = (enc1 << 2) | (enc2 >> 4);
                        chr2 = ((enc2 & 15) << 4) | (enc3 >> 2);
                        chr3 = ((enc3 & 3) << 6) | enc4;
                        output = output + String.fromCharCode(chr1);
                        if (enc3 != 64) {
                            output = output + String.fromCharCode(chr2);
                        }
                        if (enc4 != 64) {
                            output = output + String.fromCharCode(chr3);
                        }
                    }
                    output = Fast.base64._utf8_decode(output);
                    return output;
                },

                // private method for UTF-8 encoding
                _utf8_encode: function (string) {
                    _keyStr = Fast.config.base64._keyStr;
                    string = string.replace(/\r\n/g, "\n");
                    var utftext = "";
                    for (var n = 0; n < string.length; n++) {
                        var c = string.charCodeAt(n);
                        if (c < 128) {
                            utftext += String.fromCharCode(c);
                        } else if ((c > 127) && (c < 2048)) {
                            utftext += String.fromCharCode((c >> 6) | 192);
                            utftext += String.fromCharCode((c & 63) | 128);
                        } else {
                            utftext += String.fromCharCode((c >> 12) | 224);
                            utftext += String.fromCharCode(((c >> 6) & 63) | 128);
                            utftext += String.fromCharCode((c & 63) | 128);
                        }

                    }
                    return utftext;
                },

                // private method for UTF-8 decoding
                _utf8_decode: function (utftext) {
                    _keyStr = Fast.config.base64._keyStr;
                    var string = "";
                    var i = 0;
                    var c = c1 = c2 = 0;
                    while (i < utftext.length) {
                        c = utftext.charCodeAt(i);
                        if (c < 128) {
                            string += String.fromCharCode(c);
                            i++;
                        } else if ((c > 191) && (c < 224)) {
                            c2 = utftext.charCodeAt(i + 1);
                            string += String.fromCharCode(((c & 31) << 6) | (c2 & 63));
                            i += 2;
                        } else {
                            c2 = utftext.charCodeAt(i + 1);
                            c3 = utftext.charCodeAt(i + 2);
                            string += String.fromCharCode(((c & 15) << 12) | ((c2 & 63) << 6) | (c3 & 63));
                            i += 3;
                        }
                    }
                    return string;
                }

            },
            lang:

                function () {
                    var args = arguments,
                        string = args[0],
                        i = 1;
                    // string = string.toLowerCase();
                    if (typeof Lang[string] != 'undefined') {
                        if (typeof Lang[string] == 'object')
                            return Lang[string];
                        string = Lang[string];
                    } else if (string.indexOf('.') !== -1 && false) {
                        var arr = string.split('.');
                        var current = Lang[arr[0]];
                        for (var i = 1; i < arr.length; i++) {
                            current = typeof current[arr[i]] != 'undefined' ? current[arr[i]] : '';
                            if (typeof current != 'object')
                                break;
                        }
                        if (typeof current == 'object')
                            return current;
                        string = current;
                    } else {
                        string = args[0];
                    }
                    return string.replace(/%((%)|s|d)/g, function (m) {
                        // m is the matched format, e.g. %s, %d
                        var val = null;
                        if (m[2]) {
                            val = m[2];
                        } else {
                            val = args[i];
                            // A switch statement so that the formatter can be extended. Default is %s
                            switch (m) {
                                case '%d':
                                    val = parseFloat(val);
                                    if (isNaN(val)) {
                                        val = 0;
                                    }
                                    break;
                            }
                            i++;
                        }
                        return val;
                    });
                }

            ,
            init: function () {
                // 对相对地址进行处理
                $.ajaxSetup({
                    beforeSend: function (xhr, setting) {
                        setting.url = Fast.api.fixurl(setting.url);
                    }
                });
                Layer.config({
                    skin: 'layui-layer-fast'
                });
                // 绑定ESC关闭窗口事件
                $(window).keyup(function (e) {
                    if (e.keyCode == 27) {
                        if ($(".layui-layer").size() > 0) {
                            var index = 0;
                            $(".layui-layer").each(function () {
                                index = Math.max(index, parseInt($(this).attr("times")));
                            });
                            if (index) {
                                Layer.close(index);
                            }
                        }
                    }
                });

                //公共代码
                //配置Toastr的参数
                Toastr.options = Fast.config.toastr;
            }
        }
    ;
    //将Layer暴露到全局中去
    window.Layer = Layer;
    //将Toastr暴露到全局中去
    window.Toastr = Toastr;
    //将语言方法暴露到全局中去
    window.__ = Fast.lang;
    //将Fast渲染至全局
    window.Fast = Fast;

    //默认初始化执行的代码
    Fast.init();
    return Fast;
});
