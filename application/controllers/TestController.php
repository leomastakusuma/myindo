<?php

class TestController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
       $this->view->nama='Aldhonie homo';
       $this->view->umur='23';
    }


}

