<?php

class Hcgs_Form_Departemen extends Zend_Form
{

    public function init()
    {   
        $this->setName('Form Departemen');
        $this->setmethod('POST');


        $no = new Zend_Form_Element_Text('no');
//        $no ->setRequired('true');
        $no ->setLabel('No');
        $no ->setAttrib('disabled','disabled');
        $no ->setAttrib('size', '5');
//        $no ->addValidator('NotEmpty');
//        /$no ->addErrorMessage('No Tidak Boleh Kosong');
        
        $nohidden = new Zend_Form_Element_Hidden('nohiden');
        
        
        $nama = new Zend_Form_Element_Text('Nama');
        $nama ->setLabel('Nama');
        $nama ->setRequired('true');
        $nama ->setAttrib('size', '26');
        $nama ->addValidator('NotEmpty');
        $nama ->addErrorMessage('Nama Tidak Boleh Kosong');
        
        $submit = new Zend_Form_Element_Submit('Simpan');
        $submit->setLabel('Simpan');
        






        $this->addElements(array($no,$nohidden,$nama,$submit));
    }


}

