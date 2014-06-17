<?php

class Hcgs_Model_DbTable_Departemen extends Zend_Db_Table_Abstract
{

    protected $_name = 'T_Departemen';


    public function getdepartemen($order ='id_departemen')
    {
        $query = $this->select();
        $query->from(($this->_name),array('*'));
        $query->order($order,'asc');
        $getdepartemen = $this->fetchAll($query);
        
        return $getdepartemen;
    }
    
    public function getCount()
    {
        $query = $this->select();
        $query->from(($this->_name),('count(*) as total'));
        $count = $this->fetchAll($query)->toArray();
      

        return $count;
        
                
                
                
                
                
    }
    
}

