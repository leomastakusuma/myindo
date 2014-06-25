<?php

class Hcgs_Form_Karyawan extends Zend_Form
{

    public function init()
    {
        /* Form Elements & Other Definitions Here ... */
        $this->setMethod('POST');
        $this->setName('Form Karyawan');
        
        
        $idkaryawan = new Zend_Form_Element_Text('idkaryawan');
        $idkaryawan->setLabel('NIK');
        $idkaryawan->setAttribs(array('size'=>'5','disable'=>'disabled'));
                
                
        $namakaryawan   = new Zend_Form_Element_Text('namakaryawan');
        $namakaryawan   ->setLabel('Nama Karyawan');
        $namakaryawan   ->setAttribs(array('size'=>'30'));
        $namakaryawan   ->setRequired(true);
        $namakaryawan   ->addValidator('NotEmpty');
        $namakaryawan   ->addErrorMessage('Nama Karyawan Tidak Boleh Kosong');
        
        $jeniskelamin   = new Zend_Form_Element_Select('jeniskelamin');
        $jeniskelamin   ->addMultiOptions(array('L'=>'Laki - Laki','P'=> 'Perempuan'));
        $jeniskelamin   ->setLabel('Jenis Kelamin');
        
        $ttl            = new Zend_Form_Element_Textarea('ttl');
        $ttl            ->setLabel('Tempat Tanggal Lahir');
        $ttl            ->setAttribs(array('rows'=>'5','cols'=>'30'));
        
        $umur           = new Zend_Form_Element_Text('umur');
        $umur           ->setLabel('Umur');
        $umur           ->setAttribs(array('size'=>'5'));
        $umur           ->setRequired(true);
        $umur           ->addValidator('NotEmpty');
        $umur           ->addErrorMessage('Umur Tidak Boleh Kosong');
        
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
        
        $id_golongan->setRegisterInArrayValidator(false);
//        $id_golongan    ->setRequired(true);
//        $id_golongan    ->addErrorMessage('Golongan Tidak Boleh Kosong');
        
        
        
        
        $submit         = new Zend_Form_Element_Submit('Simpan');
        $submit         ->setLabel('Simpan');
        
        
        
        $this->addElements(array($idkaryawan,$namakaryawan,$jeniskelamin,$ttl,$umur,$id_departemen,$id_jabatan,$id_golongan,$submit));
                
    }


}

