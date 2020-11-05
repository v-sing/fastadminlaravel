define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'user/queshare/index',
                    add_url: 'user/queshare/add',
                    edit_url: 'user/queshare/edit',
                    del_url: 'user/queshare/del',
                    multi_url: 'user/queshare/multi',
                    table: 'questions',
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
                        {field: 'type_text', title: __('Type')},
                        {field: 'school.name', title: __('Schid')},
                        {field: 'year', title: __('Year')},
                        {field: 'category1.name', title: __('Categoryl1')},
                        {field: 'category2.name', title: __('Categoryl2')},
                        {field: 'category3.name', title: __('Categoryl3')},
                        {field: 'point', title: __('Point')},
                        {field: 'difficultpoint', title: __('Difficultpoint')},
                        {field: 'creator.nickname', title: __('Creator')},
                        {field: 'createtime', title: __('Createtime'), operate:'RANGE', addclass:'datetimerange', formatter: Table.api.formatter.datetime},
                        {field: 'ower', title: __('Ower'), visible:false, searchList: {"1":__('Ower 1')}},
                        {field: 'ower_text', title: __('Ower'), operate:false},
                        {field: 'status', title: __('Status'), visible:false, searchList: {"1":__('Status 1')}},
                        {field: 'status_text', title: __('Status'), operate:false},
                        {field: 'istrue', title: __('Istrue'), visible:false, searchList: {"1":__('Istrue 1')}},
                        {field: 'istrue_text', title: __('Istrue'), operate:false},
                        {field: 'user.nickname', title: __('User.nickname')},
                        {field: 'user.mobile', title: __('User.mobile')},
                        {field: 'operate', title: __('Operate'), table: table, events: Table.api.events.operate, formatter: Table.api.formatter.operate}
                    ]
                ]
            });

            // 为表格绑定事件
            Table.api.bindevent(table);
        },
        add: function () {
            Controller.api.bindevent();
        },
        edit: function () {
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