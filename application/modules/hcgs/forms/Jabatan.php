<?php

class Hcgs_Form_Jabatan extends Zend_Form
{

    public function init()
    {
        /* Form Elements & Other Definitions Here ... */
  		$this->setName('Form Update Jabatan');
		$this->setMethod('post');
                
                
                $id  = new Zend_Form_Element_Text('id_jabatan');
                $id->setLabel('Id Jabatan');
//                $id->setRequired(true);     
                $id->setAttrib('disable','disabled');
                $id->setAttrib('size', '5');
                        
                
		$jab = new Zend_Form_Element_Text('Jabatan');
		$jab->setLabel('Jabatan');
		$jab->setRequired(TRUE);
		$jab->setAttrib('size', '25');
		$jab->addValidator('NotEmpty');
		$jab->addErrorMessage('Pilih Jabatan');
		
		
		
		$submit = new Zend_Form_Element_Submit('Simpan');
		$submit->setLabel('Simpan');
		
		$this->addElements(array($id,$jab,$submit));
	
    }


}

