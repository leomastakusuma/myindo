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
        $look = new Hcgs_Model_Jabatan();
        $this->view->nama=$look->fetchAll();
    }


}
