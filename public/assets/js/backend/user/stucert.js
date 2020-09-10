define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'user/stucert/index',
                    add_url: 'user/stucert/add',
                    edit_url: 'user/stucert/edit',
                    // del_url: 'user/stucert/del',
                    import_url: 'user/stucert/import',
                    multi_url: 'user/stucert/multi',
                    table: 'stu_cert',
                }
            });

            var table = $("#table");

            // 初始化表格
            table.bootstrapTable({
                url: $.fn.bootstrapTable.defaults.extend.index_url,
                pk: 'id',
                sortName: 'id',
                columns: [
                    [
                        {checkbox: true},
                        {field: 'id', title: __('Id')},
                        {field: 'undergraduate_text', title: __('Undergraduate')},
                        {field: 'apply_university_text', title: __('Apply_university')},
                        {field: 'major', title: __('Major'), visible:false, searchList: {"1":__('Major 1')}},
                        {field: 'major_text', title: __('Major'), operate:false},
                        {field: 'status', title: __('Status'), visible:false, searchList: {"1":__('Status 1')}},
                        {field: 'status_text', title: __('Status'), operate:false},
                        {field: 'user.username', title: __('User.username')},
                        {field: 'user.nickname', title: __('User.nickname')},
                        {field: 'user.mobile', title: __('User.mobile')},
                        // {field: 'operate', title: __('Operate'), table: table, events: Table.api.events.operate, formatter: Table.api.formatter.operate, buttons: [
                        //         {
                        //             name: 'au',
                        //             icon: 'fa fa-cog',
                        //             text: '认证审核',
                        //             title: __('认证审核'),
                        //             extend: 'data-url="user/teacert/docert"',
                        //             classname: 'btn btn-xs btn-info btn-dialog',
                        //             visible: function (row) {
                        //                 if(row.status == 0){
                        //                     return true;
                        //                 }else{
                        //                     return false;
                        //                 }
                        //             }
                        //         }
                        //     ]}
                        {field: 'operate', title: __('Operate'), table: table, events: Table.api.events.operate, formatter: function (value, row, index) {
                                var table = this.table;
                                // 操作配置
                                var options = table ? table.bootstrapTable('getOptions') : {};
                                // 默认按钮组
                                var buttons = $.extend([], this.buttons || []);
                                // 所有按钮名称
                                var names = [];
                                buttons.forEach(function (item) {
                                    names.push(item.name);
                                });
                                if(row.status == '0'){
                                    buttons.push({
                                        name: 'options',
                                        icon: 'fa fa-cog',
                                        title: __('认证审核'),
                                        extend: 'data-url="user/stucert/docert?ids=' + row.id +'"',
                                        classname: 'btn btn-xs btn-info btn-options',
                                    });
                                }
                                if (options.extend.edit_url !== '' && names.indexOf('edit') === -1 && row.status != '0') {
                                    buttons.push({
                                        name: 'edit',
                                        icon: 'fa fa-bars',
                                        title: __('查看详情'),
                                        extend: 'data-toggle="tooltip"',
                                        classname: 'btn btn-xs btn-success btn-editone',
                                        url: options.extend.edit_url
                                    });
                                }
                                if (options.extend.del_url !== '' && names.indexOf('del') === -1 && row.status == '0') {
                                    buttons.push({
                                        name: 'del',
                                        icon: 'fa fa-trash',
                                        title: __('Del'),
                                        extend: 'data-toggle="tooltip"',
                                        classname: 'btn btn-xs btn-danger btn-delone'
                                    });
                                }
                                return Table.api.buttonlink(this, buttons, value, row, index, 'operate');
                            }}
                    ]
                ]
            });

            // 为表格绑定事件
            Table.api.bindevent(table);
            $(document).on('click', '.btn-options', function () {
                var url = $(this).attr('data-url');
                var title = $(this).attr('title');
                Fast.api.open(url, title, {});
            });
        },
        add: function () {
            Controller.api.bindevent();
        },
        edit: function () {
            Controller.api.bindevent();
        },
        docert: function () {
            Controller.api.bindevent();
        },
        api: {
            bindevent: function () {
                Form.api.bindevent($("form[role=form]"));
            }
        }
    };
    return Controller;
});