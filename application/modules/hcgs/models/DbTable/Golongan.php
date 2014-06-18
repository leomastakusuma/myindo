<?php

class Hcgs_Model_DbTable_Golongan extends Zend_Db_Table_Abstract
{

    protected $_name = 'T_Golongan';

    
    public function getall($order='id_golongan'){
        $query = $this->select();
        $query->from(($this->_name),array('*'));
        $query->order($order,'asc');
        $getgolongan = $this->fetchAll($query);
        
        return $getgolongan;
        
    }

}

