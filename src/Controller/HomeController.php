<?php

namespace Application\Controller;

use Ihsan\Client\Platform\Controller\AbstractController;
use Pimple\Container;
use Symfony\Component\HttpFoundation\Response;

/**
 * @author Muhamad Surya Iksanudin <surya.iksanudin@bisnis.com>
 */
class HomeController extends AbstractController
{
    public function __construct(Container $container)
    {
        parent::__construct($container);
    }

    public function indexAction()
    {
        return new Response('Hello World!');
    }
}
