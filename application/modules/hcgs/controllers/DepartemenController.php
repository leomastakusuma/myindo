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
        $count = new Hcgs_Model_DbTable_Departemen;
        $data  = $count->getCount();
        $form = new Hcgs_Form_Departemen(NULL,$data);
        foreach ($data as $row):
            $no=$row['total']+1;
        endforeach;
        
	
        
        if($this->getRequest()->isPost())
        {
            if($form->isValid($this->_request->getPost())){
                
                        echo'<pre>';
                        print_r($_POST);
              $no    = $this->getRequest()->getParam('nohiden');  
              $nama  = $this->getRequest ()->getParam ('nama');
           
            }
            
            
        }
        $form->populate ( $data );
        $form->getElement('no')->setValue($no);
        $form->getElement('nohiden')->setValue($no);
        $this->view->form = $form;
//        $count = new Hcgs_Model_DbTable_Departemen;
//        foreach ($count->getCount()as $row):
//            echo $row->total;
//        endforeach;
        
        
    }


}



