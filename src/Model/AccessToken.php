<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Model;

class AccessToken
{
    private $token;
    private $expiresIn;

    public function __construct(string $token, int $expiresIn)
    {
        $this->token = $token;
        $this->expiresIn = $expiresIn;
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function getExpiresIn(): int
    {
        return $this->expiresIn;
    }
}
