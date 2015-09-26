<?php

namespace Helpdesk\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;


class TicketController extends AbstractActionController{

    public function indexAction(){
        $viewResult = new ViewModel();


        return $viewResult;
    }

    public function createAction(){

        return new ViewModel();
    }

    public function updateAction(){
        $ticket = array( 'title' => 'testing title', 'description' => 'testing description', 'ticket_id' => 1, 'user_id' => 1, 'user_name' => 'testing name', 'file' => 'testing file' );
        return new ViewModel( array( 'ticket' => $ticket ));
    }


}

