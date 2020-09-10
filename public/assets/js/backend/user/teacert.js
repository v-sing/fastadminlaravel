define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'user/teacert/index',
                    add_url: 'user/teacert/add',
                    edit_url: 'user/teacert/edit',
                    // del_url: 'user/teacert/del',
                    import_url: 'user/teacert/import',
                    multi_url: 'user/teacert/multi',
                    table: 'tea_cert',
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
                        {field: 'qualification', title: __('Qualification'), visible:false, searchList: {"1":__('Qualification 1')}},
                        {field: 'qualification_text', title: __('Qualification'), operate:false},
                        {field: 'gradetype.grade_name', title: __('Grade'), visible:false, searchList: {"1":__('Grade 1')}},
                        {field: 'gradetype.grade_name_text', title: __('Grade'), operate:false},
                        {field: 'registration', title: __('Registration'), visible:false, searchList: {"1":__('Registration 1')}},
                        {field: 'registration_text', title: __('Registration'), operate:false},
                        {field: 'id_card_front', title: __('Id_card_front')},
                        {field: 'id_card_back', title: __('Id_card_back')},
                        {field: 'teacher_certification', title: __('Teacher_certification')},
                        {field: 'status', title: __('Status'), visible:false, searchList: {"1":__('Status 1')}},
                        {field: 'status_text', title: __('Status'), operate:false},
                        {field: 'user.username', title: __('User.username')},
                        {field: 'user.nickname', title: __('User.nickname')},
                        {field: 'user.mobile', title: __('User.mobile')},
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
                                        extend: 'data-url="user/teacert/docert?ids=' + row.id +'"',
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