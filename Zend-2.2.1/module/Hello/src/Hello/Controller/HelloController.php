<?php
namespace Hello\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class HelloController extends AbstractActionController
{
    public function indexAction()
    {
        $name = $this->params()->fromRoute('name');;
        return new ViewModel(array('name' => $name));
    }
}
