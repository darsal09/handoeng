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
        $message = '<p>The following person has contacted handoeng.com with the following information: <br/>Name: '.$data[ 'name'].
                    '<br/>Phone: '.$data[ 'phone'].'<br/>Message: </p><p>'.$data[ 'message'].'</p>';
        if( mail( $data[ 'email'], $data[ 'subject'], $message )){
            $this->redirect()->toRoute( 'contact-successful' );
        }else{
            $this->redirect()->toRoute( 'contact' );
        }
    }

    public function successfulContactAction(){
        return new ViewModel();
    }

}