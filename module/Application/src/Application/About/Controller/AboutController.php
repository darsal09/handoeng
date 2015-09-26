<?php
/**
 * Created by PhpStorm.
 * User: darsal
 * Date: 9/24/15
 * Time: 8:37 AM
 */

namespace Application\About\Controller;


use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class AboutController extends AbstractActionController {
    public function indexAction(){
        return new ViewModel();
    }

}