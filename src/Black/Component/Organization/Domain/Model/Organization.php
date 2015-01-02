<?php

namespace Black\Component\Organization\Domain\Model;

use Black\DDD\DDDinPHP\Domain\Model\Entity;

/**
 * Class Organization
 *
 * @author Alexandre Balmes <${COPYRIGHT_NAME}>
 * @license ${COPYRIGHT_LICENCE}
 */
class Organization implements Entity
{
    /**
     * @var OrganizationId
     */
    protected $organizationId;

    /**
     * @var
     */
    protected $name;

    /**
     * @var
     */
    protected $logo;

    /**
     * @var
     */
    protected $email;

    /**
     * @var
     */
    protected $image;

    /**
     * @var
     */
    protected $faxNumber;

    /**
     * @var
     */
    protected $telephone;

    /**
     * @var
     */
    protected $vatId;

    /**
     * @var \DateTime
     */
    protected $foundingDate;

    /**
     * @var null
     */
    protected $dissolutionDate;

    /**
     * @param OrganizationId $organizationId
     * @param $name
     */
    public function __construct(
        OrganizationId $organizationId,
        $name
    ) {
        $this->organizationId  = $organizationId;
        $this->name            = $name;
    }

    /**
     * @return string
     */
    public function getOrganizationId()
    {
        return $this->organizationId;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getFaxNumber()
    {
        return $this->faxNumber;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @return mixed
     */
    public function getVatId()
    {
        return $this->vatId;
    }

    /**
     * @return \DateTime
     */
    public function getFoundingDate()
    {
        return $this->foundingDate;
    }

    /**
     * @param \DateTime $disolvedDate
     * @throws \Exception
     */
    public function disolve(\DateTime $disolvedDate)
    {
        if ($this->foundingDate >= $disolvedDate) {
            throw new \Exception(sprintf("Disolved date MUST be newer than founding Date"));
        }

        $this->dissolutionDate = $disolvedDate;
    }

    /**
     * @return bool
     */
    public function isDisolved()
    {
        if ($this->dissolutionDate) {
            return true;
        }

        return false;
    }
}
