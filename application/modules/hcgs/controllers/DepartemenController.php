<?php

class Hcgs_DepartemenController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {   $departemen = new Hcgs_Model_DbTable_Departemen();
        $this->view->departemen = $departemen->getdepartemen();
    }

    public function insertAction()
    {
        $count = new Hcgs_Model_DbTable_Departemen;
        $data  = $count->getCount();
        $form = new Hcgs_Form_Departemen(NULL,$data);
        foreach ($data as $row):
            $no=$row['total']+1;
        endforeach;
        	       
        if($this->getRequest()->isPost())
        {
            if($form->isValid($this->_request->getPost()))
            {
              $no    = $this->getRequest()->getParam('no');  
              $nama  = $this->getRequest ()->getParam ('Nama');
              
              
              $departemen = new Hcgs_Model_DbTable_Departemen();
              $departemen->addDepartemen($no, $nama);
              $this->_helper->redirector('index');
             }
  
        }
        $form->populate ( $data );
        $form->getElement('no')->setValue($no);
        $this->view->form = $form;
     
    }

    public function deleteAction()
    {

      $deletedepartemen = new Hcgs_Model_DbTable_Departemen();
      $id_departemen = $this->getRequest()->getParam('id');
      $deletedepartemen->deldepatemen($id_departemen);
      $this->_helper->redirector('index');
      
    }


}





