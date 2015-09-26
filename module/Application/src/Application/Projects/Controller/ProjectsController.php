<?php
/**
 * Created by PhpStorm.
 * User: darsal
 * Date: 9/24/15
 * Time: 8:32 AM
 */

namespace Application\Projects\Controller;


use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ProjectsController extends AbstractActionController {
    public function indexAction(){
        return new ViewModel();
    }
}