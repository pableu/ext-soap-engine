<?php
declare(strict_types=1);

namespace Soap\ExtSoapEngine\Exception;

use Soap\Engine\Exception\RuntimeException;

final class RequestException extends RuntimeException
{
    public static function noRequestWasMadeYet(): self
    {
        return new self('No request has been registered yet.');
    }
}
