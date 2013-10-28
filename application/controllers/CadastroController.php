<?php

class CadastroController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }
    
    public function createAction()
    {
        // action body
        $model = new Application_Model_Empresa();
        $model->insert($this->_getAllParams());

        $this->_redirect('index');
    }

}

