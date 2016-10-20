<?php namespace DeSmart\Uniqush\Request;

class SubscriptionsRequest implements RequestInterface
{
    /**
     * @var array
     */
    protected $services;

    /**
     * @var string
     */
    protected $subscriber;

    public function __construct($subscriber, array $services = [])
    {
        $this->services = $services;
        $this->subscriber = $subscriber;
    }

    /**
     * Return an url where request will be send.
     *
     * @return string
     */
    public function getUrl()
    {
        return '/subscriptions';
    }

    /**
     * Return an array with request param.
     *
     * @return array
     */
    public function getQuery()
    {
        return array_filter([
            'services' => join(',', $this->services),
            'subscriber' => $this->subscriber
        ]);
    }
}
