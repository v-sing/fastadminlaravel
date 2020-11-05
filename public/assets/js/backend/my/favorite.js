define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'my/favorite/index',
                    // add_url: 'my/favorite/add',
                    // edit_url: 'my/favorite/edit',
                    del_url: 'my/favorite/del',
                    multi_url: 'my/favorite/multi',
                    table: 'my_favorite',
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
                        {field: 'type', title: __('Type'), visible:false, searchList: {'0':'试题', '1':'评图', '2':'快题'}},
                        {field: 'type_text', title: __('Type'), operate:false},
                        // {field: 'objid', title: __('Objid'), operate:false},
                        {field: 'objtitle', title: __('Objtitle'), operate:false},
                        {field: 'questions.title', title: __('Question.title'), operate:'LIKE', visible: false},
                        {field: 'problem.describe', title: __('Problem.describe'), operate:'LIKE', visible: false},
                        {field: 'fast.description', title: __('Fast.description'), operate:'LIKE', visible: false},
                        // {field: 'creator', title: __('Creator')},
                        {field: 'createtime', title: __('Createtime'), operate:'RANGE', addclass:'datetimerange', formatter: Table.api.formatter.datetime},
                        // {field: 'updatetime', title: __('Updatetime'), operate:'RANGE', addclass:'datetimerange', formatter: Table.api.formatter.datetime},
                        // {field: 'delete_time', title: __('Delete_time'), operate:'RANGE', addclass:'datetimerange', formatter: Table.api.formatter.datetime},
                        {field: 'user.username', title: __('User.username')},
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