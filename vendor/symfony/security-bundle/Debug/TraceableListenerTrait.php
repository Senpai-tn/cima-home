<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bundle\SecurityBundle\Debug;

use Symfony\Component\Security\Http\Firewall\LegacyListenerTrait;

/**
 * @author Robin Chalas <robin.chalas@gmail.com>
 *
 * @internal
 */
trait TraceableListenerTrait
{
    use LegacyListenerTrait;

    private $response;
    private $listener;
    private $time;
    private $stub;

    /**
     * Proxies all method calls to the original listener.
     */
    public function __call(string $method, array $arguments)
    {
        return $this->listener->{$method}(...$arguments);
    }

    public function getWrappedListener()
    {
        return $this->listener;
    }
}
