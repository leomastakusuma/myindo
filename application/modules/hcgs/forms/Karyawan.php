<?php

class Hcgs_Form_Karyawan extends Zend_Form
{

    public function init()
    {
        /* Form Elements & Other Definitions Here ... */
        $this->setMethod('POST');
        $this->setName('Form Karyawan');
        
        
        $idkaryawan     = new Zend_Form_Element_Text('idkaryawan');
        $idkaryawan     ->setLabel('NIK');
        $idkaryawan     ->setAttribs(array('size'=>'5','disable'=>'disabled'));
                
        $namakaryawan   = new Zend_Form_Element_Text('namakaryawan');
        $namakaryawan   ->setLabel('Nama Karyawan');
        $namakaryawan   ->setAttribs(array('size'=>'30'));
        $namakaryawan   ->setRequired(true);
        $namakaryawan   ->addValidator('NotEmpty');
        $namakaryawan   ->addErrorMessage('Nama Karyawan Tidak Boleh Kosong');
        
        $ttl            = new Zend_Form_Element_Text('ttl');
        $ttl            ->setLabel('Tempat Tanggal Lahir');
        $ttl            ->setAttribs(array('size'=>'30'));
        
        $jeniskelamin   = new Zend_Form_Element_Select('jeniskelamin');
        $jeniskelamin   ->addMultiOptions(array('L'=>'Laki - Laki','P'=> 'Perempuan'));
        $jeniskelamin   ->setLabel('Jenis Kelamin');
        $jeniskelamin   ->addErrorMessage('Tidak Boleh Kosong');
        
        $umur           = new Zend_Form_Element_Text('umur');
        $umur           ->setLabel('Umur');
        $umur           ->setAttribs(array('size'=>'5'));
        $umur           ->setRequired(true);
        $umur           ->addValidator('NotEmpty');
        $umur           ->addErrorMessage('Umur Tidak Boleh Kosong');
        
        $alamat         = new Zend_Form_Element_Textarea('alamat');
        $alamat         ->setLabel('Alamat');
        $alamat         ->setAttribs(array('rows'=>'5','cols'=>'30'));
        $alamat         ->setRequired(TRUE);
        $alamat         ->addValidator('NotEmpty');
        $alamat         ->addErrorMessage('Alamat tidak boleh kosong');
        
        $agama          = new Zend_Form_Element_Select('agama');
        $agama          ->addMultiOptions(array('Islam'=>'Islam','Kristen'=>'Kristen','Hindu'=>'Hindu','Budha'=>'Budha'));
        $agama          ->setLabel('Agama');
        
        $gol_darah      = new Zend_Form_Element_Select('gol_darah');
        $gol_darah      ->addMultiOptions(array('A'=>'A','B'=>'B','0'=>'O','AB'=>'AB'));
        $gol_darah      ->setLabel('Golongan Darah');
        
        $stat_kawin     = new Zend_Form_Element_Select('status_perkawinan');
        $stat_kawin     ->addMultiOptions(array('Kawin'=>'Kawin','Belum Kawin'=>'Belum Kawin'));
        $stat_kawin     ->setLabel('Status Perkawinan');
     
        $kwn            = new Zend_Form_Element_Select('kewarganegaraan');
        $kwn            ->addMultiOptions(array('WNI'=>'WNI','WNA'=>'WNA'));
        $kwn            ->setLabel('Kewarganegaraan');
        
        $no_telp        = new Zend_Form_Element_Text('no_telp');
        $no_telp        ->setLabel('Telepon');
        $no_telp        ->setAttribs(array('size'=>'30'));
        $no_telp        ->setRequired(true);
        $no_telp        ->addValidator('NotEmpty');
        $no_telp        ->addErrorMessage('Nomor Telepon Tidak Boleh Kosong');
        
        $no_ktp         = new Zend_Form_Element_Text('no_ktp');
        $no_ktp         ->setLabel('No KTP/SIM');
        $no_ktp         ->setAttribs(array('size'=>'30'));
        $no_ktp         ->setRequired(true);
        $no_ktp         ->addValidator('NotEmpty');
        $no_ktp         ->addErrorMessage('Nomor KTP Tidak Boleh Kosong');
        
        $npwp           = new Zend_Form_Element_Text('npwp');
        $npwp           ->setLabel('NPWP');
        $npwp           ->setAttribs(array('size'=>'30'));
        //$npwp           ->setRequired(true);
        //$npwp           ->addValidator('NotEmpty');
        //$npwp           ->addErrorMessage('NPWP Tidak Boleh Kosong');
        
        $id_departemen  = new Zend_Form_Element_Select('iddepartemen');
        $id_departemen  ->setLabel('Departemen');
        $id_departemen  ->setRequired(true);
        $id_departemen  ->addErrorMessage('Departemen Tidak Boleh Kosong');
        
        $id_jabatan     = new Zend_Form_Element_Select('idjabatan');
        $id_jabatan     ->setLabel('Jabatan');
        $id_jabatan     ->setRequired(true);
        $id_jabatan     ->addErrorMessage('Jabatan Tidak Boleh Kosong');
        
        $id_golongan    = new Zend_Form_Element_Select('idgolongan');
        $id_golongan    ->setLabel('Golongan');
        $id_golongan    ->setRegisterInArrayValidator(false);
        
        $stat_pegawai   = new Zend_Form_Element_Select('status_pegawai');
        $stat_pegawai   ->addMultiOptions(array('Tetap'=>'Tetap','Magang'=>'Magang','Kontrak'=>'Kontrak','Percobaan'=>'Percobaan'));
        $stat_pegawai   ->setLabel('Status Pegawai');
        
        $tgl_masuk      = new Zend_Form_Element_Text('tgl_masuk');
        $tgl_masuk      ->setLabel('Tanggal Masuk');
        $tgl_masuk      ->setAttribs(array('size'=>'30'));
        $tgl_masuk      ->setRequired(true);
        $tgl_masuk      ->addValidator('NotEmpty');
        $tgl_masuk      ->addErrorMessage('Tidak Boleh Kosong');
                
        
                
        $submit         = new Zend_Form_Element_Submit('Simpan');
        $submit         ->setLabel('Simpan');
        
        
        $this->addElements(array($idkaryawan,$namakaryawan,$ttl,$jeniskelamin,
                                 $umur,$alamat,$agama,$gol_darah,$stat_kawin,
                                 $kwn,$no_telp,$no_ktp,$npwp,$id_departemen,
                                 $id_jabatan,$id_golongan,$stat_pegawai,
                                 $tgl_masuk,$submit));          
    }
}

