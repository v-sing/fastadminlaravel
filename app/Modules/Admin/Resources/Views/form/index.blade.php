@include('vendor.form-builder.assets')
@include('vendor.form-builder.script',['form'=>$form])


<script>   //laravelFormCreate_store('.panel-body');
    laravelFormCreate('.content', function callback(status, res, $f, formData) {
        //表单提交回调函数
        if (!status) {

        }
        //TODO 表单提交成功
        else {

        }
        //TODO 表单提交失败
    });

</script>