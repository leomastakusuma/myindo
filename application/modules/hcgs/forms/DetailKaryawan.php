<?php


class Hcgs_Form_DetailKaryawan extends Zend_Form
{

    public function init()
    {
        /* Form Elements & Other Definitions Here ... */
        //$this->setMethod('POST');
        $this->setName('Form Karyawan');
        
        
        $idkaryawan     = new Zend_Form_Element_Text('id_Karyawan');
        $idkaryawan     ->setLabel('NIK');
        $idkaryawan     ->setAttribs(array('size'=>'5','disable'=>'disabled'));
                
        $namakaryawan   = new Zend_Form_Element_Text('nama_karyawan');
        $namakaryawan   ->setLabel('Nama Karyawan');
        $namakaryawan   ->setAttribs(array('disable'=>'disabled'));
        $namakaryawan   ->setRequired(TRUE);
        $namakaryawan   ->addValidator('NotEmpty');
        
        $ttl            = new Zend_Form_Element_Text('ttl');
        $ttl            ->setLabel('Tempat Tanggal Lahir');
        $ttl            ->setAttribs(array('disable'=>'disabled'));
        
        $jeniskelamin   = new Zend_Form_Element_Select('jenis_kelamin');
        $jeniskelamin   ->addMultiOptions(array('Laki-Laki'=>'Laki-Laki','Perempuan'=>'Perempuan'));
        $jeniskelamin   ->setAttribs(array('disable'=>'disabled'));
        $jeniskelamin   ->setLabel('Jenis Kelamin');
        $namakaryawan   ->setRequired(TRUE);
        
        $umur           = new Zend_Form_Element_Text('umur');
        $umur           ->setLabel('Umur');
        $umur           ->setAttribs(array('disable'=>'disabled'));
        $umur           ->setRequired(true);
        $umur           ->addValidator('NotEmpty');
        
        $alamat         = new Zend_Form_Element_Textarea('alamat');
        $alamat         ->setLabel('Alamat');
        $alamat         ->setAttribs(array('rows'=>'5','cols'=>'25','disable'=>'disabled'));
        $alamat         ->setRequired(TRUE);
        $alamat         ->addValidator('NotEmpty');

        $agama          = new Zend_Form_Element_Select('agama');
        $agama          ->addMultiOptions(array('Islam'=>'Islam','Kristen'=>'Kristen','Hindu'=>'Hindu','Budha'=>'Budha'));
        $agama         ->setAttribs(array('disable'=>'disabled'));
        $agama          ->setLabel('Agama');
        
        $gol_darah      = new Zend_Form_Element_Select('gol_darah');
        $gol_darah      ->addMultiOptions(array('A'=>'A','B'=>'B','0'=>'O','AB'=>'AB'));
        $gol_darah      ->setAttribs(array('disable'=>'disabled'));
        $gol_darah      ->setLabel('Golongan Darah');
        
        $stat_kawin     = new Zend_Form_Element_Select('stat_perkawinan');
        $stat_kawin     ->addMultiOptions(array('Kawin'=>'Kawin','Belum Kawin'=>'Belum Kawin'));
        $stat_kawin     ->setAttribs(array('disable'=>'disabled'));
        $stat_kawin     ->setLabel('Status Perkawinan');
     
        $kwn            = new Zend_Form_Element_Select('kwn');
        $kwn            ->addMultiOptions(array('WNI'=>'WNI','WNA'=>'WNA'));
        $kwn            ->setAttribs(array('disable'=>'disabled'));
        $kwn            ->setLabel('Kewarganegaraan');
        
        $no_telp        = new Zend_Form_Element_Text('no_telp');
        $no_telp        ->setLabel('Telepon');
        $no_telp        ->setAttribs(array('size'=>'30','disable'=>'disabled'));
        $no_telp        ->setRequired(true);
        $no_telp        ->addValidator('NotEmpty');

        $no_ktp         = new Zend_Form_Element_Text('no_ktp');
        $no_ktp         ->setLabel('No KTP/SIM');
        $no_ktp         ->setAttribs(array('size'=>'30','disable'=>'disabled'));
        $no_ktp         ->setRequired(true);
        $no_ktp         ->addValidator('NotEmpty');
        
        $npwp           = new Zend_Form_Element_Text('npwp');
        $npwp           ->setLabel('NPWP');
        $npwp           ->setAttribs(array('disable'=>'disabled'));
        
        $id_departemen  = new Zend_Form_Element_Select('id_departemen');
        $id_departemen  ->setLabel('Departemen');
        $id_departemen  ->setAttribs(array('disable'=>'disabled'));
        $id_departemen  ->setRequired(true);

        $id_jabatan     = new Zend_Form_Element_Select('id_jabatan');
        $id_jabatan     ->setLabel('Jabatan');
        $id_jabatan     ->setRequired(true);
        
        $id_golongan    = new Zend_Form_Element_Select('id_golongan');
        $id_golongan    ->setLabel('Golongan');
        $id_golongan    ->setRegisterInArrayValidator(false);
        
        $stat_pegawai   = new Zend_Form_Element_Select('stat_pegawai');
        $stat_pegawai   ->addMultiOptions(array('Tetap'=>'Tetap','Magang'=>'Magang','Kontrak'=>'Kontrak','Percobaan'=>'Percobaan'));
        $stat_pegawai   ->setAttribs(array('disable'=>'disabled'));
        $stat_pegawai   ->setLabel('Status Pegawai');
        
        $tgl_masuk      = new Zend_Form_Element_Text('tgl_masuk');
        $tgl_masuk      ->setLabel('Tanggal Masuk');
        $tgl_masuk      ->setAttribs(array('size'=>'30','disable'=>'disabled'));
        $tgl_masuk      ->setRequired(true);
        $tgl_masuk      ->addValidator('NotEmpty');

        $submit         = new Zend_Form_Element_Submit('Simpan');
        $submit         ->setLabel('Simpan');
        
        
        $this->addElements(array($idkaryawan,$namakaryawan,$ttl,$jeniskelamin,
                                 $umur,$alamat,$agama,$gol_darah,$stat_kawin,
                                 $kwn,$no_telp,$no_ktp,$npwp,$id_departemen,
                                 $id_jabatan,$id_golongan,$stat_pegawai,
                                 $tgl_masuk,$submit));          
    }

}