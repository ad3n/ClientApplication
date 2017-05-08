<?php

namespace Application\Middleware;

use Application\Controller\AdminController;
use Ihsan\Client\Platform\DependencyInjection\ContainerAwareInterface;
use Ihsan\Client\Platform\DependencyInjection\ContainerAwareTrait;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\HttpKernelInterface;

/**
 * @author Muhamad Surya Iksanudin <surya.iksanudin@bisnis.com>
 */
class SecurityMiddleware implements HttpKernelInterface, ContainerAwareInterface
{
    use ContainerAwareTrait;

    /**
     * @var HttpKernelInterface
     */
    private $app;

    /**
     * @param HttpKernelInterface $app
     */
    public function __construct(HttpKernelInterface $app)
    {
        $this->app = $app;
    }

    /**
     * @param Request $request
     * @param int $type
     * @param bool $catch
     *
     * @return Response
     *
     * @throws \Exception
     */
    public function handle(Request $request, $type = self::MASTER_REQUEST, $catch = true)
    {
        $controller = $request->attributes->get('_controller');
        if ($controller && $controller instanceof AdminController) {
            if (!$this->container['internal.session_storage']->get('token')) {
                return new RedirectResponse('/login');
            }
        }

        return $this->app->handle($request, $type, $catch);
    }
}