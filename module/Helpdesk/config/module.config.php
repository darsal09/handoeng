<?php

return array(


    'router' => array(
        'routes' => array(

            'kanban' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/helpdesk/kanban',
                    'defaults' => array(
                        'controller' => 'Helpdesk\Controller\Kanban',
                        'action'     => 'index',
                    )
                ),
            ),

            'tickets' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/helpdesk/tickets',
                    'defaults' => array(
                        'controller' => 'Helpdesk\Controller\Ticket',
                        'action'     => 'index',
                    )
                ),
            ),

            'create_ticket' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/helpdesk/tickets/create',
                    'defaults' => array(
                        'controller' => 'Helpdesk\Controller\Ticket',
                        'action'     => 'create',
                    )
                ),
            ),
            'update_ticket' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/helpdesk/tickets/edit',
                    'defaults' => array(
                        'controller' => 'Helpdesk\Controller\Ticket',
                        'action'     => 'update',
                    )
                ),
            ),

        ),
    ),

    'controllers' => array('invokables' => array('Helpdesk\Controller\Kanban' => 'Helpdesk\Controller\KanbanController',
                                                'Helpdesk\Controller\Ticket' => 'Helpdesk\Controller\TicketController',)),

    'view_manager' => array('template_path_stack' => array(__DIR__ . '/../view')),

);
