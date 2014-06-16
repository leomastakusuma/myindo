<?php

class Hcgs_DepartemenController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
       
        $departemen = new Hcgs_Model_DbTable_Departemen();
        $this->view->departemen = $departemen->getdepartemen();
    }

    public function insertAction()
    {
        // action body
    }


}



