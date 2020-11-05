define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'my/qus/index',
                    // add_url: 'my/qus/add',
                    // edit_url: 'my/qus/edit',
                    del_url: 'my/qus/del',
                    multi_url: 'my/qus/multi',
                    table: 'my_qus',
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
                        {field: 'type', title: __('Type'), visible:false, searchList: {'0':'章节联系', '1':'顺序联系', '2':'理论真题', '3':'平台考试', '4':'模拟考试'}},
                        {field: 'type_text', title: __('Type'), operate:false},
                        {field: 'paper.title', title: __('Paper.title'), operate:'LIKE'},
                        {field: 'questions.title', title: __('Questions.title'), operate:'LIKE'},
                        {field: 'myanswer', title: __('Myanswer'), operate:'LIKE'},
                        {field: 'questions.answer', title: __('Questions.answer'), operate:'LIKE'},
                        {field: 'begintime', title: __('Begintime'), operate:'RANGE', addclass:'datetimerange', formatter: Table.api.formatter.datetime},
                        {field: 'endtime', title: __('Endtime'), operate:'RANGE', addclass:'datetimerange', formatter: Table.api.formatter.datetime},
                        {field: 'user.username', title: __('User.username')},
                        // {field: 'createtime', title: __('Createtime'), operate:'RANGE', addclass:'datetimerange', formatter: Table.api.formatter.datetime},
                        // {field: 'paper_id', title: __('Paper_id')},
                        // {field: 'creator', title: __('Creator')},
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