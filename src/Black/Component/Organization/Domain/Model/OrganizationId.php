<?php

namespace Black\Component\Organization\Domain\Model;

use Black\DDD\DDDinPHP\Domain\Model\ValueObject;

/**
 * Class OrganizationId
 *
 * @author Alexandre Balmes <${COPYRIGHT_NAME}>
 * @license ${COPYRIGHT_LICENCE}
 */
class OrganizationId implements ValueObject
{
    /**
     * @var string
     */
    private $value;

    /**
     * @param $value
     */
    public function __construct($value)
    {
        $this->value = (string) $value;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return sprintf("%s", $this->getValue());
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param OrganizationId $organizationId
     * @return bool
     */
    public function isEqualTo(OrganizationId $organizationId)
    {
        return $organizationId->getValue() === $this->getValue();
    }
}
