<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Storage;

use DateTime;

class ArrayAccessTokenStorage implements AccessTokenStorageInterface
{
    /**
     * @var string|null
     */
    private $accessToken;

    /**
     * @var DateTime|null
     */
    private $expirationDate;

    public function get(): ?string
    {
        if (!$this->accessToken || $this->expirationDate < new DateTime()) {
            $this->accessToken = null;
        }

        return $this->accessToken;
    }

    public function set(string $accessToken, DateTime $expiresAt): void
    {
        $this->accessToken = $accessToken;
        $this->expirationDate = $expiresAt;
    }
}
