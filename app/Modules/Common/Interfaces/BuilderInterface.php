<?php
/**
 * Created by PhpStorm.
 * Author: 紫云沫雪こ
 * Email:email1946367301@163.com
 * Date: 2019/5/10 0010
 * Time: 16:52
 */

namespace App\Modules\Common\Interfaces;

interface BuilderInterface
{
    /**
     * 按钮
     * @return mixed
     */
    public function button();

    /**
     * 数字类型
     * @return mixed
     */
    public function number();

    /**
     * 文本类型
     * @return mixed
     */
    public function text();

    /**
     * 富文本
     * @return mixed
     */
    public function editor();

    /**
     * 输入框
     * @return mixed
     */
    public function input();

    /**
     * 列表组
     * @return mixed
     */
    public function fieldList();

    /**
     * 日期类型
     * @return mixed
     */
    public function date();

    /**
     *
     * @return mixed
     *
     */
    public function dateRange();

    /**
     * 调色板
     * @return mixed
     */
    public function color();

    /**
     * 文件上传
     * @return mixed
     */
    public function file();

    /**
     * 文件上传(多)
     * @return mixed
     */
    public function files();

    /**
     * 单图上传
     * @return mixed
     */
    public function image();

    /**
     * 单图上传(多)
     * @return mixed
     */
    public function images();

    /**
     * 三级联动
     * @return mixed
     */
    public function cityArea();

    /**
     * 下拉框
     * @return mixed
     */
    public function select();

    /**
     * 下拉框(多选)
     * @return mixed
     */
    public function selects();

    /**
     * 选择框
     * @return mixed
     */
    public function checkbox();

    /**
     * 单选框
     * @return mixed
     */
    public function radio();
}