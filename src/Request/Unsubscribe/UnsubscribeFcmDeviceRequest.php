<?php namespace DeSmart\Uniqush\Request\Unsubscribe;

class UnsubscribeFcmDeviceRequest extends AbstractUnsubscribeDeviceRequest
{
    /**
     * @var string
     */
    protected $service;

    /**
     * @var string
     */
    protected $subscriber;

    /**
     * @var string
     */
    protected $regId;

    public function __construct($service, $subscriber, $regId)
    {
        $this->service = $service;
        $this->subscriber = $subscriber;
        $this->regId = $regId;
    }

    /**
     * Return an array with request param.
     *
     * @return array
     */
    public function getQuery()
    {
        return [
            'service' => $this->service,
            'subscriber' => $this->subscriber,
            'pushservicetype' => 'fcm',
            'regid' => $this->regId,
        ];
    }
}
