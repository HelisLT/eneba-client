<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Exception;

use Exception;

class GraphQLException extends Exception
{
    private $messages;
    private $codes;

    /**
     * @param string[] $messages
     * @param string[] $codes
     */
    public function __construct(array $messages = [], array $codes = [])
    {
        parent::__construct('GraphQL exception');
        $this->messages = $messages;
        $this->codes = $codes;
    }

    public function getMessages(): array
    {
        return $this->messages;
    }

    public function getCodes(): array
    {
        return $this->codes;
    }
}
