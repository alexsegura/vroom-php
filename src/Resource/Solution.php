<?php

namespace Webstack\Vroom\Resource;

/**
 * Class Solution
 */
class Solution
{
    /**
     * @var int
     */
    protected $code;

    /**
     * @var string|null
     */
    protected $error;

    /**
     * @var Summary
     */
    protected $summary;

    /**
     * @var Unassigned[]
     */
    protected $unassigned;

    /**
     * @var Route[]
     */
    protected $routes;

    /**
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * @return string|null
     */
    public function getError(): ?string
    {
        return $this->error;
    }

    /**
     * @return Summary
     */
    public function getSummary(): Summary
    {
        return $this->summary;
    }

    /**
     * @return Unassigned[]
     */
    public function getUnassigned(): array
    {
        return $this->unassigned;
    }

    /**
     * @return Route[]
     */
    public function getRoutes(): array
    {
        return $this->routes;
    }
}