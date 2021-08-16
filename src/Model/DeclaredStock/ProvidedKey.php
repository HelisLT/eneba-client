<?php

declare(strict_types=1);

namespace Helis\EnebaClient\Model\DeclaredStock;

use Helis\EnebaClient\Enum\KeyFormatEnum;

class ProvidedKey
{
    private $type;
    private $value;
    private $filename;

    public function __construct(KeyFormatEnum $type, string $value, ?string $filename)
    {
        $this->type = $type;
        $this->value = $value;
        $this->filename = $filename;
    }

    public function getType(): KeyFormatEnum
    {
        return $this->type;
    }

    public function setType(KeyFormatEnum $type): void
    {
        $this->type = $type;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function setValue(string $value): void
    {
        $this->value = $value;
    }

    public function getFilename(): ?string
    {
        return $this->filename;
    }

    public function setFilename(string $filename): void
    {
        $this->filename = $filename;
    }
}
