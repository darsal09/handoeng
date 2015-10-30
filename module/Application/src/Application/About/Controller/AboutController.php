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
        $mission = 'Information about the company will go here. It should describe how the company started.
                It should also mentioned about what services the company provides.';

        $founders = [
            [
                'name' => 'Helman',
                'image' => 'http://www.bustler.net/images/news2/2013_aia_institute_honor_awards_-_architecture-06.jpg',
                'history' => 'Information about the member will go here. It should give a brief history about the
                member. Where s/he graduated from and his/her origin. It should also mentioned where s/he worked before  and the most
                import project s/he has worked on.',
            ],
            [
                'name' => 'Orjuela',
                'image' => 'http://www.oneworld365.org/img/101/Architecture%20Internships%20Abroad.jpg',
                'history' => 'Information about the member will go here. It should give a brief history about the
                member. Where s/he graduated from and his/her origin. It should also mentioned where s/he worked before  and the most
                import project s/he has worked on.',
            ],
        ];
        $members =[
            [
                'name' => 'Juan Pablo Orjuela',
                'image' => 'http://bedroomkitchen.com/wp-content/uploads/2014/01/architecture-design-606.jpg',
                'history' => 'Information about the member will go here. It should give a brief history about the
                member. Where s/he graduated from and his/her origin. It should also mentioned where s/he worked before  and the most
                import project s/he has worked on.',
            ],
            [
                'name' => 'Kathleen',
                'image' => 'https://secure.static.tumblr.com/b05009699d8487b856765345d7d5a8d6/duj1jbc/iZxn33osm/tumblr_static_architectural_drawing_4.jpg',
                'history' => 'Information about the member will go here. It should give a brief history about the
                member. Where s/he graduated from and his/her origin. It should also mentioned where s/he worked before  and the most
                import project s/he has worked on.',
            ],
        ];

        return new ViewModel([ 'members' => $members, 'founders' => $founders,'mission' => $mission ]);
    }

}