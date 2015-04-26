<?php namespace DeSmart\Uniqush\Request\RmPsp;

class RmGcmPspRequest extends AbstractRmPspRequest
{
    /**
     * @var string
     */
    protected $serviceName;

    /**
     * @var string
     */
    protected $projectId;

    public function __construct($serviceName, $projectId)
    {
        $this->serviceName = $serviceName;
        $this->projectId = $projectId;
    }

    /**
     * Return an array with request param.
     *
     * @return array
     */
    public function getQuery()
    {
        return array(
            'service' => $this->serviceName,
            'pushservicetype' => 'gcm',
            'projectid' => $this->projectId,
        );
    }
}
