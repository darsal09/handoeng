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
        $projects = [
            [
                'title' => 'Project 1',
                'image' => 'http://www.bustler.net/images/news2/2013_aia_institute_honor_awards_-_architecture-06.jpg',
                'description' => 'Brief description of the project should go here. Try to include top 5 main points of the work and what it was done by the company.',
            ],
            [
                'title' => 'Project 2',
                'image' => 'http://www.oneworld365.org/img/101/Architecture%20Internships%20Abroad.jpg',
                'description' => 'Brief description of the project should go here. Try to include top 5 main points of the work and what it was done by the company.',
            ],
            [
                'title' => 'Project 3',
                'image' => 'http://bedroomkitchen.com/wp-content/uploads/2014/01/architecture-design-606.jpg',
                'description' => 'Brief description of the project should go here. Try to include top 5 main points of the work and what it was done by the company.',
            ],
            [
                'title' => 'Project 4',
                'image' => 'https://secure.static.tumblr.com/b05009699d8487b856765345d7d5a8d6/duj1jbc/iZxn33osm/tumblr_static_architectural_drawing_4.jpg',
                'description' => 'Brief description of the project should go here. Try to include top 5 main points of the work and what it was done by the company.',
            ],
            [
                'title' => 'Project 5',
                'image' => 'http://www.parentscountdowntocollegecoach.com/wp-content/uploads/2013/09/rolls-architecture-blueprint-work-tools-14438775.jpg',
                'description' => 'Brief description of the project should go here. Try to include top 5 main points of the work and what it was done by the company.',
            ],
            [
                'title' => 'Project 6',
                'image' => 'http://walldays.com/wp-content/uploads/2015/03/modern-architecture-sketches-hd-wallpapers-53131.jpg',
                'description' => 'Brief description of the project should go here. Try to include top 5 main points of the work and what it was done by the company.',
            ],
            [
                'title' => 'Project 7',
                'image' => 'http://newshour-tc.pbs.org/newshour/wp-content/blogs.dir/1/files/slideshow/mos-floatinghouse_model_slideshow.jpg',
                'description' => 'Brief description of the project should go here. Try to include top 5 main points of the work and what it was done by the company.',
            ],
            [
                'title' => 'Project 8',
                'image' => 'http://image.guardian.co.uk/sys-images/Arts/Arts_/Pictures/2007/12/05/architecture460.jpg',
                'description' => 'Brief description of the project should go here. Try to include top 5 main points of the work and what it was done by the company.',
            ],

        ];
        return new ViewModel(['projects' => $projects]);
    }
}