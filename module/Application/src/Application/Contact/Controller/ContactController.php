<?php
namespace Application\Contact\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ContactController extends AbstractActionController{
    public function contactAction(){
        return new ViewModel();
    }

    public function sendContactAction(){
        $data = $this->getRequest()->getPost()->toArray();
        print_r( $data );

        $this->redirect()->toRoute( 'contact-successful' );
    }

    public function successfulContactAction(){
        return new ViewModel();
    }

}