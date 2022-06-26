<?php
/**
 * Reagordi Component
 *
 * @link https://reagordi.com/
 * @copyright Copyright (c) 2020 - 2022 Universe Group
 * @license https://dev.reagordi.com/license
 */

declare(strict_types=1);

namespace Reagordi\Component\Di;

use Reagordi\Contracts\Exceptions\InvalidConfigException;
use Psr\Container\NotFoundExceptionInterface;
use Throwable;

/**
 * NotInstantiableException represents an exception caused by incorrect dependency injection container
 * configuration or usage.
 *
 * @author Sergej Rufov <support@reagordi.com>
 * @since 1.0
 */
class NotInstantiableException extends InvalidConfigException implements NotFoundExceptionInterface
{
    /**
     * {@inheritdoc}
     */
    public function __construct(string $class, ?string $message = null, int $code = 0, ?Throwable $previous = null)
    {
        if ($message === null) {
            $message = 'Can not instantiate ' . $class . '.';
        }
        parent::__construct($message, $code, $previous);
    }

    /**
     * @return string the user-friendly name of this exception
     */
    public function getName(): string
    {
        return 'Not instantiable';
    }
}
