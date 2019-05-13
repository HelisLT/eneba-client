<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Model\Input;

class PaginationFilter
{
    protected $page = 1;
    protected $perPage = 20;

    public function getPage(): int
    {
        return $this->page;
    }

    public function setPage(int $page): void
    {
        $this->page = $page;
    }

    public function getPerPage(): int
    {
        return $this->perPage;
    }

    public function setPerPage(int $perPage): void
    {
        $this->perPage = $perPage;
    }
}
