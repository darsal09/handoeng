<?php
namespace Application\Contact\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ContactController extends AbstractActionController{
    public function contactAction(){
        return new ViewModel();
    }

    public function sendContactAction(){

        return new ViewModel();
    }

}