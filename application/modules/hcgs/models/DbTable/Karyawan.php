<?php

class Hcgs_Model_DbTable_Karyawan extends Zend_Db_Table_Abstract
{

    protected $_name = 'T_Karyawan';
    
    public  function inputKaryawan ($id,$nama,$ttl,$jns_klmn,$umur,$alamat,$agama,
                                     $gol_darah,$stat_kawin,$kwn,$no_telp,$no_ktp,
                                     $npwp,$idjabatan,$iddepartemen,$idgolongan,
                                     $stat_pegawai,$tgl_masuk)
    {   
            $data = array( 'id_Karyawan'    =>$id,
                           'nama_karyawan'  =>$nama,
                           'ttl'            =>$ttl,
                           'jenis_kelamin'  =>$jns_klmn,
                           'umur'           =>$umur,
                           'alamat'         =>$alamat,
                           'agama'          =>$agama,
                           'gol_darah'      =>$gol_darah,
                           'stat_kawin'     =>$stat_kawin,
                           'kwn'            =>$kwn,
                           'no_telp'        =>$no_telp,
                           'no_ktp'         =>$no_ktp,
                           'npwp'           =>$npwp,
                           'id_jabatan'     =>$idjabatan,
                           'id_departemen'  =>$iddepartemen,
                           'id_golongan'    =>$idgolongan,
                           'stat_pegawai'   =>$stat_pegawai,
                           'tgl_masuk'      =>$tgl_masuk
                         );
                         //echo '<pre>';
                         //print_r($data);die;
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
    
    public function delKaryawan($id_Karyawan = 'id_Karyawan')
     {
         $where = $this->getAdapter()->quoteInto('id_Karyawan = ?', $id_Karyawan);
         $this->delete($where);
     }
     
     public function getDetailKaryawan($idkaryawan){
         $query = $this->select();
         $query->from(($this->_name),array('*'));
         $query->setIntegrityCheck(false);
         $query->join('T_Jabatan', 'T_Jabatan.id_jabatan = T_Karyawan.id_jabatan');
         $query->join('T_Departemen', 'T_Departemen.id_departemen = T_Karyawan.id_departemen');
         $query->join('T_Golongan','T_Golongan.id_golongan = T_Karyawan.id_golongan');
         $query->where('id_Karyawan = ?',$idkaryawan);
         
         $getdetail = $this->fetchRow($query)->toArray();
         return $getdetail;
         
     }

}

