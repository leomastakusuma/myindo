<?php

class Hcgs_Model_DbTable_Karyawan extends Zend_Db_Table_Abstract
{

    protected $_name = 'T_Karyawan';
    
    public  function inputKaryawan ($id, $nama, $jns_klmn, $ttl, $umur,$idjabatan,$iddepartemen,$idgolongan)
    {   
            $data = array( 'id_Karyawan'=>$id,
                           'nama_karyawan'=>$nama,
                           'jenis_kelamin'=>$jns_klmn,
                           'ttl'=>$ttl,
                           'umur'=>$umur,
                           'id_jabatan'=>$idjabatan,
                           'id_departemen'=>$iddepartemen,
                           'id_golongan'=>$idgolongan
                         );
//                         print_r($data);die;
            $this->insert($data);
    }      


    public function getKaryawan($order ='id_karyawan')
        {
        $query = $this->select();
        $query->from(($this->_name),array('*'));
        $query->order($order,'asc');
        $query->setIntegrityCheck(false);
        $query->join('T_Jabatan', 'T_Jabatan.id_jabatan = T_Karyawan.id_jabatan');
        $query->join('T_Departemen', 'T_Departemen.id_departemen = T_Karyawan.id_departemen');
        $query->join('T_Golongan','T_Golongan.id_golongan = T_Karyawan.id_golongan');
    
        
        return $query->query()->fetchAll();
        }
    
    public function getCount()
    {
        $query = $this->select();
        $query->from(($this->_name),('max(id_Karyawan) as total'));
        $count = $this->fetchAll($query)->toArray();
   
        return $count;
    }

}

