<?php

namespace spec\Black\Component\Organization\Domain\Model;

use Black\Component\Organization\Domain\Model\OrganizationId;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class OrganizationIdSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Black\Component\Organization\Domain\Model\OrganizationId');
        $this->shouldImplement('Black\DDD\DDDinPHP\Domain\Model\ValueObject');
    }

    function let()
    {
        $this->beConstructedWith(1234);
    }

    function it_should_have_a_value()
    {
        $this->getValue()->shouldReturn("1234");
    }

    function it_should_have_a_to_string()
    {
        $this->__toString()->shouldReturn("1234");
    }

    function it_should_be_equal()
    {
        $org2 = new OrganizationId(1234);
        $this->isEqualTo($org2)->shouldReturn(true);
    }
}
