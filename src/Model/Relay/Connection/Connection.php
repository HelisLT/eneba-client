<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Model\Relay\Connection;

class Connection
{
    private $edges;
    private $pageInfo;
    private $totalCount;

    /**
     * @param Edge[] $edges
     */
    public function __construct(array $edges, PageInfo $pageInfo, ?int $totalCount = null)
    {
        $this->edges = $edges;
        $this->pageInfo = $pageInfo;
        $this->totalCount = $totalCount;
    }

    /**
     * @return Edge[]
     */
    public function getEdges(): array
    {
        return $this->edges;
    }

    public function getPageInfo(): PageInfo
    {
        return $this->pageInfo;
    }

    public function getTotalCount(): ?int
    {
        return $this->totalCount;
    }
}
