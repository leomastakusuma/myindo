<?php

class Hcgs_KaryawanController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
        $getkaryawan = new Hcgs_Model_DbTable_Karyawan();
        $this->view->karyawan=$getkaryawan->getKaryawan();
    }

    public function deleteAction()
    {
        // action body
    }

    public function insertAction()
    {
        // action body
        $form = new Hcgs_Form_Karyawan();
        $this->view->form=$form;
    }


}





