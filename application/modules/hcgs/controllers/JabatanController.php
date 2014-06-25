<?php

class Hcgs_JabatanController extends Zend_Controller_Action
{

    public function init()
    {

        // $layoutPath = APPLICATION_PATH . '/templates/admin';
        // $options    = array('layout'=>'index',
        //                     'layoutPath'=>$layoutPath);
        // Zend_Layout::startMvc($options);

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
        $count  = new Hcgs_Model_DbTable_Jabatan();
        $data   = $count->getCount();
        $form   = new Hcgs_Form_Jabatan(null,$data);
        foreach ($data as $row):
            $no=$row['total']+1;
        endforeach;
      
        if($this->getRequest()->isPost()){
            
           if ($form->isValid ( $this->_request->getPost () )) {
                            $id         = $this->getRequest ()->getParam ( 'id_jabatan' );
                            $nama       = $this->getRequest ()->getParam ( 'Jabatan' );
                            
                        
                            $jabatan    = new Hcgs_Model_DbTable_Jabatan();
                            $jabatan->input($id,$nama);
                            $this->_helper->redirector ( 'index' );
          }
          
        }      
        
        $form->populate ( $data );
        $form->getElement('id_jabatan')->setValue($no);
        $this->view->form=$form;
        
        
    }

   public function editAction()
   {
       // action body
   }

    public function deleteAction()
    {
      $deletejabatan = new Hcgs_Model_DbTable_Jabatan();
      $id_jabatan = $this->getRequest()->getParam('id');
      $deletejabatan->deljabatab($id_jabatan);
      $this->_helper->redirector ( 'index' );
                
    }


}




