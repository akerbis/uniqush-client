<?php

namespace spec\DeSmart\Uniqush\Request\Unsubscribe;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class UnsubscribeGcmDeviceRequestSpec extends ObjectBehavior
{

    function let()
    {
        $this->beConstructedWith('test', 'john', '123');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('DeSmart\Uniqush\Request\Unsubscribe\UnsubscribeGcmDeviceRequest');
        $this->shouldImplement('DeSmart\Uniqush\Request\RequestInterface');
    }

    function it_returns_valid_url()
    {
        $this->getUrl()->shouldReturn('/unsubscribe');
    }

    function it_returns_query()
    {
        $this->getQuery()->shouldReturn([
            'service' => 'test',
            'subscriber' => 'john',
            'pushservicetype' => 'gcm',
            'regid' => '123',
        ]);
    }
}
