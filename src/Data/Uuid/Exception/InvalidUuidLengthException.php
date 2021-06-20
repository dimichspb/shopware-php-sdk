<?php declare(strict_types=1);

namespace Vin\ShopwareSdk\Data\Uuid\Exception;

use Symfony\Component\HttpFoundation\Response;

class InvalidUuidLengthException extends \Exception
{
    public function __construct(int $length, string $hex)
    {
        parent::__construct(
            'UUID has a invalid length. 16 bytes expected, {{ length }} given. Hexadecimal reprensentation: {{ hex }}',
            ['length' => $length, 'hex' => $hex]
        );
    }

    public function getErrorCode(): string
    {
        return 'FRAMEWORK__UUID_INVALID_LENGTH';
    }

    public function getStatusCode(): int
    {
        return Response::HTTP_BAD_REQUEST;
    }
}
