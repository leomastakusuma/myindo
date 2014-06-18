<?php

class Hcgs_GolonganController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
        $getgolongan = new Hcgs_Model_DbTable_Golongan();
        $this->view->golongan=$getgolongan->getall();
                
    }

    public function insertAction()
    {
        // action body
        $form       = new Hcgs_Form_Golongan();
        $jabatan    = new Hcgs_Model_DbTable_Jabatan();
        $data_golongan   = new Hcgs_Model_DbTable_Golongan();
        $data       =$data_golongan->getCount();
       
        foreach ($data as $rowgolongan){
            $id_golongan = $rowgolongan['total']+1;
        }
       
        $idjabatan = $jabatan->getall();
        $listJabatan = array();
        foreach ($idjabatan as $row){
            $listJabatan[''] = 'Pilih Jabatan';
            $listJabatan[$row->id_jabatan] = $row->jabatan;    
        }
        $form->getElement('idjabatan')->addMultiOptions($listJabatan);
        
        if($this->getRequest()->isPost())
        {
            if($form->isValid($this->_request->getPost())){
                $id_golongan    = $this->getRequest()->getParam('idgolongan');
                $id_jabatan = $this->getRequest()->getParam('idjabatan');
                $golongan   = $this->getRequest()->getParam('golongan');
                
               
                $data_golongan->insertgolongan($id_golongan, $id_jabatan, $golongan);
                $this->_helper->redirector('index');
                
            }
        }
        
        $form->getElement('idgolongan')->setValue($id_golongan);
    
        $this->view->form=$form;
    }

    public function deleteAction()
    {
        // action body
      $deletegolongan = new Hcgs_Model_DbTable_Golongan();
      $id_golongan = $this->getRequest()->getParam('id');
      $deletegolongan->delgolongan($id_golongan);
      $this->_helper->redirector('index');
    }


}





