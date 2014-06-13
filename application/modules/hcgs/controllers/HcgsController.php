<?php

class Hcgs_HcgsController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $this->view->hcgs =array('Nama'=>'Aldnoni','Umur'=>'21');
        
    }


}

