<?php

class Hcgs_Model_DbTable_Jabatan extends Zend_Db_Table_Abstract
{

    protected $_name = 'T_Jabatan';

    public function input($id,$nama)
    {
        
    }


    public function getall($order='id_jabatan')
    {
    	$query = $this->select();
    	$query ->from (($this->_name),array('*'));
    	$query ->order($order, 'asc');
    	$jabatan =$this->fetchall($query);
    	return $jabatan;
    }

}

