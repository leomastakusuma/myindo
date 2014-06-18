<?php

class Hcgs_Model_DbTable_Golongan extends Zend_Db_Table_Abstract
{

    protected $_name = 'T_Golongan';

    public function getall(){
        $query = $this->select();
        $query->from(($this->_name),array('*'));
        $query->setIntegrityCheck(false);
        $query->join('T_Jabatan', 'T_Jabatan.id_jabatan = T_Golongan.id_jabatan');
        $query->order('T_Jabatan.jabatan asc');
        $getgolongan = $this->fetchAll($query);
        
        return $getgolongan;
    }
    
    public function insertgolongan($idgolongan,$idjabatan,$golongan){
        $data = array('id_golongan'  =>  $idgolongan,
                     'id_jabatan'   =>  $idjabatan,
                     'golongan'     =>  $golongan
                );
        $this->insert($data);      
   }

    public function getCount()
    {
        $query = $this->select();
        $query->from(($this->_name),('max(id_golongan) as total'));
        $count = $this->fetchAll($query)->toArray();
   
        return $count;
     }    
     
     public function delgolongan ($id_golongan = 'id_golongan'){
         $where = $this->getAdapter()->quoteInto('id_golongan = ?', $id_golongan);
         $this->delete($where);
     }

}

