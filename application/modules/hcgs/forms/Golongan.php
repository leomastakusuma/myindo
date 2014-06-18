<?php

class Hcgs_Form_Golongan extends Zend_Form
{

    public function init()
    {
        /* Form Elements & Other Definitions Here ... */
        $this->setMethod('POST');
        $this->setName('Form Golongan');
        
        $id_golongan = new Zend_Form_Element_Text('idgolongan');
        $id_golongan->setLabel('Id Golongan');
        $id_golongan->setAttrib('size', '5');
        $id_golongan->setAttrib('disable', 'disabled');
        
        $id_jabatan = new Zend_Form_Element_Select('idjabatan');
        $id_jabatan ->setLabel('Jabatan');
        $id_jabatan ->setRequired(true);
        $id_jabatan ->addErrorMessage('Jabatan Tidak Boleh Kosong');
        
          
        $golongan   = new Zend_Form_Element_Text('golongan');
        $golongan->setLabel('Golongan');
        $golongan->setRequired(true);
        $golongan->setAttrib('size', '30');
        $golongan->addValidator('NotEmpty');
        $golongan->addErrorMessage('Golongan Tidak Boleh Kosong');
        
        $submit     = new Zend_Form_Element_Submit('Simpan');
        $submit->setLabel('Simpan');
        
        $this->addElements(array($id_golongan ,$id_jabatan,$golongan,$submit));
              
        
    }


}

