<?php

class Hcgs_Model_DbTable_Karyawan extends Zend_Db_Table_Abstract
{

    protected $_name = 'T_Karyawan';
    
    public  function inputKaryawan ($id, $nama, $jns_klmn, $ttl, $umur)
    {   
            $data = array('id_Karyawan'=>$id,
                           'nama_karyawan'=>$nama,
                           'jenis_kelamin'=>$jns_klmn,
                           'ttl'=>$ttl,
                           'umur'=>$umur,
                         );
            $this->insert($data);
    }      


    public function getKaryawan($order ='id_karyawan')
        {
        $query = $this->select();
        $query->from(($this->_name),array('*'));
        $query->order($order,'asc');
        $getkaryawan = $this->fetchAll($query);
        
        return $getkaryawan;
        }
    
    public function getCount()
    {
        $query = $this->select();
        $query->from(($this->_name),('max(id_Karyawan) as total'));
        $count = $this->fetchAll($query)->toArray();
   
        return $count;
    }

}

