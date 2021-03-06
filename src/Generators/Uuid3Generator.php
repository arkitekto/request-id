<?php

/*
 * This file is part of the Arki\RequestId library.
 *
 * (c) Alexandru Furculita <alex@furculita.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.md.
 */

namespace Arki\RequestId\Generators;

use Ramsey\Uuid\UuidFactory;
use Ramsey\Uuid\UuidFactoryInterface;

final class Uuid3Generator implements RequestIdGenerator
{
    private $ns;

    private $name;

    private $factory;

    /**
     * @param UuidFactoryInterface $factory
     * @param string               $ns
     * @param string               $name
     */
    public function __construct($ns, $name, UuidFactoryInterface $factory = null)
    {
        $this->factory = $factory ?: new UuidFactory();
        $this->ns = $ns;
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function generate()
    {
        return $this->factory->uuid3($this->ns, $this->name)->toString();
    }
}
