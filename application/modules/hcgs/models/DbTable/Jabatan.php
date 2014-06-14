<?php

class Hcgs_Model_DbTable_Jabatan extends Zend_Db_Table_Abstract
{

    protected $_name = 'T_Jabatan';

    public function input($id,$nama)
    {
    $data  =   array('id_jabatan'=>$id,
                       'jabatan'=>$nama,
                      );
                     
    $this->insert($data);
    }

}

