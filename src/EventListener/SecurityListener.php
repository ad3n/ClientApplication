<?php

namespace Application\EventListener;

use Application\Controller\AdminController;
use Ihsan\Client\Platform\DependencyInjection\ContainerAwareInterface;
use Ihsan\Client\Platform\DependencyInjection\ContainerAwareTrait;
use Ihsan\Client\Platform\Event\FilterController;
use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * @author Muhamad Surya Iksanudin <surya.iksanudin@bisnis.com>
 */
class SecurityListener implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function filterController(FilterController $event)
    {
        $controller = $event->getController();
        if ($controller instanceof AdminController) {
            if (!$this->container['internal.session_storage']->get('token')) {
                return new RedirectResponse('/login');
            }
        }
    }
}
