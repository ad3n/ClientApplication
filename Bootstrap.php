<?php

use Ihsan\Client\Platform\Bootstrap as Base;
use Psr\Cache\CacheItemPoolInterface;

class Bootstrap extends Base
{
    /**
     * @param string $configDir
     * @param CacheItemPoolInterface|null $cachePool
     * @param array $values
     */
    public function __construct($configDir = 'configs', CacheItemPoolInterface $cachePool = null, array $values = array())
    {
        parent::__construct($cachePool, $values);
        $this->boot($configDir);
    }

    /**
     * @return string
     */
    protected function projectDir()
    {
        return __DIR__;
    }
}
