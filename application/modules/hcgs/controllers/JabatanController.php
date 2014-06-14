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
        $this->view->jabatan=$look->getall();

        
    
    }

    public function inputAction()
    {
        // action body
        $form   = new Hcgs_Form_Jabatan();
        $this->view->form=$form;
        
        if($this->getRequest()->isPost()){
            
           if ($form->isValid ( $this->_request->getPost () )) {
                            $id         = $this->getRequest ()->getParam ( 'id_jabatan' );
                            $nama       = $this->getRequest ()->getParam ( 'Jabatan' );
                            
                           
                        
                            $jabatan    = new Hcgs_Model_DbTable_Jabatan();
                            $jabatan->input($id,$nama);
                            $this->_helper->redirector ( 'index' );
          }
          else
          {
              $this->view->form=$form;
          }
                 
        }
    }

    public function editAction()
    {
        // action body
    }

    public function deleteAction()
    {
        // action body
       $deletedata= new Hcgs_Model_DbTable_Jabatan();
       
       if ($this->getRequest()->isPost()){
           
           $id_jabatan= $this->getRequest ()->getParam ( 'id_jabatan' );
           $deletedata->deletedata( $id_jabatan );
       }
       else { $this->view->delete= $deletedata;}

           }
                
    }


    


