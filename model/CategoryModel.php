<?php
class CategoryModel extends MasterModel {
    public static function get_all(){
        $table = 'categories';
        $result = MasterModel::get_all_from($table);
        return $result;
    }
} 