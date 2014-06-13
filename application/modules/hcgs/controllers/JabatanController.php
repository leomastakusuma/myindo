<?php

class Hcgs_JabatanController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
        $look = new Hcgs_Model_DbTable_Jabatan();
        $this->view->nama=$look->fetchAll();
        
    
    }

    public function inputAction()
    {
        // action body
        $form   = new Hcgs_Form_Jabatan();
        $this->view->form=$form;
          
    }


}




