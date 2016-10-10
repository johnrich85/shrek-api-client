<?php namespace Cobwebinfo\ShrekApiClient\Http;

use Cobwebinfo\ShrekApiClient\Support\HttpRequester;

/**
 * Class GuzzleAdapter
 *
 * @package Cobwebinfo\ShrekApiClient\Http
 */
class GuzzleAdapter implements HttpRequester
{
    /**
     * @var \GuzzleHttp\Client
     */
    protected $client;

    /**
     * GuzzleAdapter constructor.
     * @param array $options
     */
    public function __construct(array $options)
    {
        $options['exceptions'] = false;

        $this->client = new \GuzzleHttp\Client($options);
    }

    /**
     * @param $uri
     * @param array $options
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function get($uri, array $options = [])
    {
        return $this->client->get($uri, $options);
    }

    /**
     * @param $uri
     * @param array $options
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function head($uri, array $options = [])
    {
        return $this->client->head($uri, $options);
    }

    /***
     * @param $uri
     * @param array $options
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function put($uri, array $options = [])
    {
        return $this->client->put($uri, $options);
    }

    /**
     * @param $uri
     * @param array $options
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function post($uri, array $options = [])
    {
        return $this->client->post($uri, $options);
    }

    /**
     * @param $uri
     * @param array $options
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function patch($uri, array $options = [])
    {
        return $this->client->patch($uri, $options);
    }

    /**
     * @param $uri
     * @param array $options
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function delete($uri, array $options = [])
    {
        return $this->client->delete($uri, $options);
    }
}