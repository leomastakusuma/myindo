<?php

class Hcgs_Model_DbTable_Jabatan extends Zend_Db_Table_Abstract
{

    protected $_name = 'T_Jabatan';
    protected $_primary = 'id_jabatan';

    public function input($id,$nama)
    {
    $data  =   array('id_jabatan'=>$id,
                       'jabatan'=>$nama,
                      );
                     
    $this->insert($data);
    }


    public function getall($order='id_jabatan')
    {
    	$query = $this->select();
    	$query ->from (($this->_name),array('*'));
    	$query ->order($order, 'asc');
    	$jabatan =$this->fetchall($query);
    	return $jabatan;
    }
    
    public function deljabatab($id_jabatan)
    {
        $where = $this->getAdapter()->quoteInto('id_jabatan = ?', $id_jabatan);
        $this->delete($where);
    }
}

