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
    
    
    public function addDepartemen($id,$nama)
    {
       $data  =   array('id_departemen'=>$id,
                        'departemen'=>$nama,
                      );
                         
       $this->insert($data);
    }


    public function getCount()
    {
        $query = $this->select();
        $query->from(($this->_name),('max(id_departemen) as total'));
        $count = $this->fetchAll($query)->toArray();
      

        return $count;
                  
    }
    public function deldepatemen($id_departemen)
    {
        $where = $this->getAdapter()->quoteInto('id_departemen = ?', $id_departemen);
        $this->delete($where);
    }
   
}

