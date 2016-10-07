<?php namespace Cobwebinfo\ShrekApiClient\Support;

/**
 * Interface HttpRequester
 *
 * @package Cobwebinfo\ShrekApiClient\Support
 */
interface HttpRequester
{
    /**
     * @param $uri
     * @param array $options
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function get($uri, array $options = array());

    /**
     * @param $uri
     * @param array $options
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function head($uri, array $options = array());

    /**
     * @param $uri
     * @param array $options
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function put($uri, array $options = array());

    /**
     * @param $uri
     * @param array $options
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function post($uri, array $options = array());

    /**
     * @param $uri
     * @param array $options
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function patch($uri, array $options = array());

    /**
     * @param $uri
     * @param array $options
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function delete($uri, array $options = array());
}