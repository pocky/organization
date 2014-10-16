<?php

namespace spec\Black\Component\Organization\Domain\Model;

use Black\Component\Organization\Domain\Model\OrganizationId;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class OrganizationSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Black\Component\Organization\Domain\Model\Organization');
        $this->shouldImplement('Black\DDD\DDDinPHP\Domain\Model\Entity');
    }

    function let()
    {
        $organizationId = new OrganizationId(1234);

        $this->beConstructedWith(
            $organizationId,
            "name",
            "logo",
            "image",
            "email",
            "faxNumber",
            "telephone",
            "vatId",
            (new \DateTime("2014-02-18")),
            "dissolutionDate"
        );
    }

    function it_should_have_an_organization_id()
    {
        $this->getOrganizationId()->shouldReturn("1234");
    }

    function it_should_have_a_name()
    {
        $this->getName()->shouldReturn("name");
    }

    function it_should_have_a_logo()
    {
        $this->getLogo()->shouldReturn("logo");
    }

    function it_should_have_an_image()
    {
        $this->getImage()->shouldReturn("image");
    }

    function it_should_have_an_email()
    {
        $this->getEmail()->shouldReturn("email");
    }

    function it_should_have_a_fax_number()
    {
        $this->getFaxNumber()->shouldReturn("faxNumber");
    }

    function it_should_have_a_telephone()
    {
        $this->getTelephone()->shouldReturn("telephone");
    }

    function it_should_have_vat_id()
    {
        $this->getVatId()->shouldReturn("vatId");
    }

    function it_should_have_a_founding_date()
    {
        $this->getFoundingDate()->format("Y-m-d")->shouldReturn("2014-02-18");
    }

    function it_should_not_be_disolved()
    {
        $this->isDisolved()->shouldReturn(false);
    }

    function it_should_be_disolved()
    {
        $this->disolve(new \DateTime("2014-12-12"));
        $this->isDisolved()->shouldReturn(true);
    }
}
