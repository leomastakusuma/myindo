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
        $getkaryawan = new Hcgs_Model_DbTable_Karyawan();
        $this->view->karyawan=$getkaryawan->getKaryawan();
    }

    public function deleteAction()
    {
        // action body
    }

    public function insertAction()
    {
        // action body
        $form           = new Hcgs_Form_Karyawan();
        $data_karyawan  = new Hcgs_Model_DbTable_Karyawan();
        $jabatan        = new Hcgs_Model_DbTable_Jabatan();
        $golongan       = new Hcgs_Model_DbTable_Golongan();
        $departemen     = new Hcgs_Model_DbTable_Departemen();
        $data_K         = $data_karyawan->getCount();
        $this->view->form=$form;
        
        foreach ($data_K as $rowkaryawan)
            {
            $id = $rowkaryawan['total']+1;
            }
       
            $iddepartemen   = $departemen->getall();
            $idjabatan      = $jabatan->getall();
            $idgolongan     = $golongan->getall();
            $listJabatan    = array();
            $listgolongan   = array();
            $listdepartemen = array();
            
        foreach ($iddepartemen as $row)
            {
            $listdepartemen['']                   = 'Pilih Departemen';
            $listdepartemen[$row->id_departemen]  = $row->departemen;    
            }
            
        foreach ($idgolongan as $rowgolongan)
            {
            $listJabatan['']                              = 'Pilih Jabatan';
            $listJabatan[$rowgolongan->id_jabatan]        = $rowgolongan->jabatan;    
            }
            
        foreach ($idgolongan as $row)
            {
                $listgolongan['']                     = 'Pilih Golongan';
            }
            $listGolongan = array();
            foreach ($idgolongan as $idx=>$row) {
                $listGolongan[$idx]['id_golongan']  = $row->id_golongan;
                $listGolongan[$idx]['id_jabatan']   = $row->id_jabatan;
                $listGolongan[$idx]['golongan']     = $row->golongan;
                
            }
        $this->view->listGolongan = $listGolongan;  // data untuk 
        
        
        $form->getElement('idjabatan')->addMultiOptions($listJabatan);
        $form->getElement('idgolongan')->addMultiOptions($listgolongan);
        $form->getElement('iddepartemen')->addMultiOptions($listdepartemen);
            
            
            
        if($this->getRequest()->isPost())
        {
            
//            print_r($this->getParam('idgolongan'));die;
//            $form->getElement('idgolongan')->setValue($this->getParam('idgolongan'));
//            echo '<pre>';
//            echo $form->getElement('idgolongan')->getValue();
//            print_r($form);die;
            if($form->isValid($this->_request->getPost()))
            {
                $id           = $this->getRequest()->getParam('idkaryawan');
                $nama         = $this->getRequest()->getParam('namakaryawan');
                $klmn         = $this->getRequest()->getParam('jeniskelamin');
                $ttl          = $this->getRequest()->getParam('ttl');
                $umur         = $this->getRequest()->getParam('umur');
                $idjabatan    = $this->getRequest()->getParam('idjabatan');
                $iddepartemen = $this->getRequest()->getParam('iddepartemen');
                $idgolongan   = $this->getRequest()->getParam('idgolongan');
                       
                
                $karyawan= new Hcgs_Model_DbTable_Karyawan();
                $karyawan->inputKaryawan($id,$nama,$klmn,$ttl,$umur,$idjabatan,$iddepartemen,$idgolongan);
                $this->_helper->redirector ( 'index' );   
            }
        }
          
        $form->getElement('idkaryawan')->setValue($id);
        $this->view->form= $form;
        }
}