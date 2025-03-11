<?php
class FactoryModel extends MasterModel {
    public static function get_all() {
        $table = 'factories';
        $result = MasterModel::get_all_from($table);
        return $result;
    }
}