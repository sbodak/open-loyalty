<?php

namespace OpenLoyalty\Domain\Segment;

use OpenLoyalty\Domain\Identifier;
use Assert\Assertion as Assert;

/**
 * Class PosId.
 */
class PosId implements Identifier
{
    /**
     * @var string
     */
    protected $posId;

    /**
     * PosId constructor.
     *
     * @param string $posId
     */
    public function __construct($posId)
    {
        Assert::string($posId);
        Assert::uuid($posId);

        $this->posId = $posId;
    }

    public function __toString()
    {
        return $this->posId;
    }
}