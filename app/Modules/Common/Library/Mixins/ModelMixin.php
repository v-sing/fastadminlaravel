<?php
/**
 * Created by PhpStorm.
 * User: zhoulongtao
 * Date: 2020-09-09
 * Time: 21:40
 */

namespace App\Modules\Common\Library\Mixins;

use Illuminate\Support\Facades\DB;

/**
 * 自定义Model
 * Class ModelMixin
 * @package App\Modules\Common\Library\Mixins
 */
class ModelMixin
{

    /**
     * 更新绑定数据
     * @return \Closure
     */
    public function bind()
    {
        return function ($param) {
            foreach ($param as $key => $value) {
                $this->$key = $value;
            }
            return $this;
        };

    }

    public function updateBatch()
    {

        return function ($multipleData = []) {
            $firstRow     = current($multipleData);
            $updateColumn = array_keys($firstRow);
            // 默认以id为条件更新，如果没有ID则以第一个字段为条件
            $referenceColumn = isset($firstRow['id']) ? 'id' : current($updateColumn);
            if (empty($multipleData)) {
                throw new \Exception("数据不能为空");
            }
            $tableName = DB::getTablePrefix() . $this->model->getTable(); // 表名
            $firstRow  = current($multipleData);

            $updateColumn = array_keys($firstRow);
            // 默认以id为条件更新，如果没有ID则以第一个字段为条件
            $referenceColumn = isset($firstRow['id']) ? 'id' : current($updateColumn);
            unset($updateColumn[0]);
            // 拼接sql语句
            $updateSql = "UPDATE " . $tableName . " SET ";
            $sets      = [];
            $bindings  = [];
            foreach ($updateColumn as $uColumn) {
                $setSql = "`" . $uColumn . "` = CASE ";
                foreach ($multipleData as $data) {
                    $setSql     .= "WHEN `" . $referenceColumn . "` = ? THEN ? ";
                    $bindings[] = $data[$referenceColumn];
                    $bindings[] = $data[$uColumn];
                }
                $setSql .= "ELSE `" . $uColumn . "` END ";
                $sets[] = $setSql;
            }
            $updateSql .= implode(', ', $sets);
            $whereIn   = collect($multipleData)->pluck($referenceColumn)->values()->all();
            $bindings  = array_merge($bindings, $whereIn);
            $whereIn   = rtrim(str_repeat('?,', count($whereIn)), ',');
            $updateSql = rtrim($updateSql, ", ") . " WHERE `" . $referenceColumn . "` IN (" . $whereIn . ")";
            return DB::update($updateSql, $bindings);
        };

    }
}