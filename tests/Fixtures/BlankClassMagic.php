<?php

declare(strict_types=1);

/*
 * This file is part of PHP Invoker.
 *
 * PHP version 7.1 and above required
 *
 * @author    Divine Niiquaye Ibok <divineibok@gmail.com>
 * @copyright 2019 Biurad Group (https://biurad.com/)
 * @license   https://opensource.org/licenses/BSD-3-Clause License
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DivineNii\Invoker\Tests\Fixtures;

class BlankClassMagic
{
    public function __call($name, $arguments)
    {
        return (new BlankClass())->{$name}($arguments);
    }

    public function staticMethod(): string
    {
        return BlankClass::BODY;
    }
}
