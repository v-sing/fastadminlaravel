<meta charset="utf-8">
<title>{{isset($title)?$title:''}}</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="renderer" content="webkit">
<link rel="shortcut icon" href="{{$config['site']['cdnurl']}}/assets/img/favicon.ico" />
<!-- Loading Bootstrap -->
<link href="{{$config['site']['cdnurl']}}/assets/css/backend{{$config['app_debug']?'':'.min'}}.css?v={{$config['site']['version']}}" rel="stylesheet">
<meta name="csrf-token" content="{{csrf_token()}}" />
<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
<script src="{{$config['site']['cdnurl']}}/assets/js/html5shiv.js"></script>
<script src="{{$config['site']['cdnurl']}}/assets/js/respond.min.js"></script>
<![endif]-->
<script>
    var require={
        config:<?php echo json_encode($config,256);?>
    }
</script>