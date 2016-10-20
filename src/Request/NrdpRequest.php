<?php namespace DeSmart\Uniqush\Request;

class NrdpRequest implements RequestInterface
{
    /**
     * @var string
     */
    protected $service;

    /**
     * @var string
     */
    protected $subscriber;

    public function __construct($service, $subscriber)
    {
        $this->service = $service;
        $this->subscriber = $subscriber;
    }

    /**
     * Return an url where request will be send.
     *
     * @return string
     */
    public function getUrl()
    {
        return '/nrdp';
    }

    /**
     * Return an array with request param.
     *
     * @return array
     */
    public function getQuery()
    {
        return array_filter([
            'service' => $this->service,
            'subscriber' => $this->subscriber
        ]);
    }
}
