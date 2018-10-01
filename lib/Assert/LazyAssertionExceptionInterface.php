<?php

declare(strict_types=1);

/**
 * Assert
 *
 * LICENSE
 *
 * This source file is subject to the MIT license that is bundled
 * with this package in the file LICENSE.txt.
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to kontakt@beberlei.de so I can send you a copy immediately.
 */

namespace Assert;

interface LazyAssertionExceptionInterface
{
    /**
     * @param InvalidArgumentException[] $errors
     *
     * @return $this
     */
    public static function fromErrors(array $errors);

    public function getErrorExceptions();
}
