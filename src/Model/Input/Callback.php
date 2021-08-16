<?php

declare(strict_types=1);

namespace Helis\EnebaClient\Model\Input;

use Helis\EnebaClient\Enum\CallbackTypeEnum;

class Callback
{
    private $type;
    private $url;
    private $authorization;

    public function __construct(CallbackTypeEnum $type, string $url, string $authorization)
    {
        $this->type = $type;
        $this->url = $url;
        $this->authorization = $authorization;
    }

    public function getType(): ?CallbackTypeEnum
    {
        return $this->type;
    }

    public function setType(CallbackTypeEnum $type): void
    {
        $this->type = $type;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    public function getAuthorization(): ?string
    {
        return $this->authorization;
    }

    public function setAuthorization(string $authorization): void
    {
        $this->authorization = $authorization;
    }
}
