define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'content/adv/index',
                    add_url: 'content/adv/add',
                    edit_url: 'content/adv/edit',
                    del_url: 'content/adv/del',
                    multi_url: 'content/adv/multi',
                    table: 'adv',
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
                        {field: 'ap_id', title: __('Ap_id')},
                        {field: 'adv_title', title: __('Adv_title')},
                        {field: 'adv_url', title: __('Adv_url'), formatter: Table.api.formatter.url},
                        {field: 'adv_image', title: __('Adv_image'), formatter: Table.api.formatter.image},
                        {field: 'click_num', title: __('Click_num')},
                        {field: 'background', title: __('Background')},
                        {field: 'admin.nickname', title: __('Creator')},
                        {field: 'createtime', title: __('Createtime'), operate:'RANGE', addclass:'datetimerange', formatter: Table.api.formatter.datetime},
                        {field: 'status', title: __('Status'), visible:false, searchList: {"1":__('展示'),"0":__('不展示')}},
                        {field: 'status_text', title: __('Status'), operate:false},
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