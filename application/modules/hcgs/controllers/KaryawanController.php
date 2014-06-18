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





