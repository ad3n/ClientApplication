<?php

namespace Application\Controller;

use Ihsan\Client\Platform\Controller\AbstractController;
use Pimple\Container;
use Symfony\Component\HttpFoundation\Response;

/**
 * @author Muhamad Surya Iksanudin <surya.iksanudin@bisnis.com>
 */
class HomeController extends AdminController
{
    public function indexAction()
    {
        $this->client->bearer('eyJhbGciOiJSUzI1NiJ9.eyJyb2xlcyI6WyJST0xFX0FERU4iXSwidXNlcm5hbWUiOiJhZGVuIiwiZXhwIjoxNDk0MjE5OTI3LCJpYXQiOjE0OTQyMTYzMjd9.DIuVN6HKweTByR2X8B9qOYeR3OnOTmarcQXAbYVq9yRaNIyJntPAsv1hcKnG2AiKuRki7wKte_lWW-5c23IfpNVMyjRF0-R1UySOrULOJCWQP2oXbHhkOSFbrhwWPr310wbf53ygwv_x7NJ7ya_bFY2Bbcjj3sHKusJXarJIw8-p6WltdtaV1v2oo4fCuqpRB4c1E0CALM7b-K6AkwllhxpXCbNqJo9vlHciRkzpBrF_t30pERzw8R63hZ4bkV35y6MNgUF9bO7YbaG7f1Cm-uGVePXCoRajDR-0H_hShPvwqg9I6dknw9oLJ81vpI6k9j1441HR1mOSrZ5Xb4yjAHYOY0C-yUBAaeiLeKOOgE0isKkv0VM9GczicLlqhKJo7qBrYPxy2cGF7Jy6KLZcIxC1JzXrf9RJfAfDX6DtCmgqISZP_EWl4nTwtEYtweQj2jpevI_R-C2RgMZLpcRQLCQjemBzH_0eqFlo4w-lFyui-O7RW-wV1z111Kcr5vASFs0_DzM-JURmYIzuiGjE6Q44ecu948Mt1Lo1GG0ur7XgS6F22qMhTiCIKd8XzakdOhvZVRSfznQBvaBFV0x-BAIjw9fldbz3554WhFXRj3u8cETxmAVXentU0-fL0WoZpQAHpJgn6zxZ1AFq3MLAzSM77UJH54fM1qfDi2iTw2c');
        $response = $this->client->get('clients/1');
        var_dump($response->getContent());

        return new Response('Hello World!');
    }
}
