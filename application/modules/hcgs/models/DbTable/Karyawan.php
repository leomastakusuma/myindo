<?php

class Hcgs_Model_DbTable_Karyawan extends Zend_Db_Table_Abstract
{

    protected $_name = 'T_Karyawan';
    
    public function getKaryawan($order ='id_karyawan'){
        $query = $this->select();
        $query->from(($this->_name),array('*'));
        $query->order($order,'asc');
        $getkaryawan = $this->fetchAll($query);
        
        return $getkaryawan;
    }
    
    

}

