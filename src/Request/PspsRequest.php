<?php namespace DeSmart\Uniqush\Request;

class PspsRequest implements RequestInterface
{
    /**
     * Return an url where request will be send.
     *
     * @return string
     */
    public function getUrl()
    {
        return '/psps';
    }

    /**
     * Return an array with request param.
     *
     * @return array
     */
    public function getQuery()
    {
        return [];
    }
}
