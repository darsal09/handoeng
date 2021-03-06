<?php
/**
* Zend Framework (http://framework.zend.com/)
*
* @link http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
* @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
* @license http://framework.zend.com/license/new-bsd New BSD License
*/
return array(
	'router' => array(
		'routes' => array(
			'home' => array(
				'type' => 'Zend\Mvc\Router\Http\Literal',
				'options' => array(
					'route' => '/',
					'defaults' => array(
						'controller' => 'Application\Controller\Index',
						'action' => 'index',
					),
				),
			),
			'aboutus' => array(
				'type' => 'Zend\Mvc\Router\Http\Literal',
				'options' => array(
					'route' => '/about-us',
					'defaults' => array(
						'controller' => 'Application\About\Controller\About',
						'action' => 'index',
					),
				),
			),
			'projects' => array(
				'type' => 'Zend\Mvc\Router\Http\Literal',
				'options' => array(
					'route' => '/projects',
					'defaults' => array(
						'controller' => 'Application\Projects/Controller\Projects',
						'action' => 'index',
					),
				),
			),
			'contact' => array(
				'type' => 'Zend\Mvc\Router\Http\Literal',
				'options' => array(
					'route' => '/contact',
					'defaults' => array(
						'controller' => 'Application\Contact\Controller\Contact',
						'action' => 'contact',
					),
				),
			),
			'contact-send' => array(
				'type' => 'Zend\Mvc\Router\Http\Literal',
				'options' => array(
					'route' => '/contact/send',
					'defaults' => array(
						'controller' => 'Application\Contact\Controller\Contact',
						'action' => 'sendContact',
					),
				),
			),
            'contact-successful' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/contact/send/successful',
                    'defaults' => array(
                        'controller' => 'Application\Contact\Controller\Contact',
                        'action' => 'successfulContact',
                    ),
                ),
            ),
            'services-index' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/services',
                    'defaults' => array(
                        'controller' => 'Application\Services\Controller\Services',
                        'action' => 'index',
                    ),
                ),
            ),
		),
	),
	'service_manager' => array(
		'abstract_factories' => array(
			'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
			'Zend\Log\LoggerAbstractServiceFactory',
		),
		'aliases' => array(
			'translator' => 'MvcTranslator',
		),
	),
	'translator' => array(
		'locale' => 'en_US',
		'translation_file_patterns' => array(
			array(
				'type' => 'gettext',
				'base_dir' => __DIR__ . '/../language',
				'pattern' => '%s.mo',
			),
		),
	),
	'controllers' => array(
		'invokables' => array(
			'Application\Controller\Index' => 'Application\Controller\IndexController',
			'Application\Contact\Controller\Contact' => 'Application\Contact\Controller\ContactController',
			'Application\Projects\Controller\Projects' => 'Application\Projects\Controller\ProjectsController',
			'Application\About\Controller\About' => 'Application\About\Controller\AboutController',
			'Application\Services\Controller\Services' => 'Application\Services\Controller\ServicesController'
		),
	),
	'view_manager' => array(
		'display_not_found_reason' => true,
		'display_exceptions' => true,
		'doctype' => 'HTML5',
		'not_found_template' => 'error/404',
		'exception_template' => 'error/index',
		'template_map' => array(
			'layout/layout' => __DIR__ . '/../view/layout/layout.phtml',
			'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
			'error/404' => __DIR__ . '/../view/error/404.phtml',
			'error/index' => __DIR__ . '/../view/error/index.phtml',
		),
		'template_path_stack' => array(
			__DIR__ . '/../view',
		),
	),
	// Placeholder for console routes
	'console' => array(
		'router' => array(
			'routes' => array(
			),
		),
	),
);