<?php

class Hcgs_GolonganController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
        $getgolongan = new Hcgs_Model_DbTable_Golongan();
        $this->view->golongan=$getgolongan->getall();
                
    }

    public function insertAction()
    {
        // action body
        $form = new Hcgs_Form_Golongan();
        $this->view->form=$form;
    }


}



