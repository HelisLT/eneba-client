<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Credentials;

interface ClientCredentialsInterface
{
    public function getClientId(): string;

    public function getClientSecret(): string;
}
