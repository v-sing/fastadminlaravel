define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {
    var Controller = {
        index: function () {
            Form.api.bindevent($("form[role=form]"));
        }

    }
    return Controller;
})