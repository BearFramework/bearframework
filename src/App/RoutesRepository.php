<?php

/*
 * Bear Framework
 * http://bearframework.com
 * Copyright (c) 2016 Ivo Petkov
 * Free to use under the MIT license.
 */

namespace BearFramework\App;

use BearFramework\App;

/**
 * Provides functionality for registering callbacks for specific requests and executing them.
 */
class RoutesRepository
{

    /**
     * Stores the registered callbacks.
     * 
     * @var array 
     */
    private $data = [];

    /**
     * Registers a request handler.
     * 
     * @param string|string[] $pattern Path pattern. Can contain "?" (path segment) and "*" (matches everything).
     * @param callable $callback Function that is expected to return object of type \BearFramework\App\Response.
     * @param array $options Matching options for methods (GET, HEAD, POST, DELETE, PUT, PATCH, OPTIONS) and protocols (HTTP, HTTPS).
     * @throws \InvalidArgumentException
     * @return \BearFramework\App\RoutesRepository Returns reference to itself.
     */
    public function add($pattern, callable $callback, array $options = ['GET']): \BearFramework\App\RoutesRepository
    {
        if (is_string($pattern)) {
            if (!isset($pattern{0})) {
                throw new \InvalidArgumentException('The route argument must be a not empty string or array of not empty strings');
            }
            $this->data[] = [[$pattern], $callback, $options];
            return $this;
        } elseif (is_array($pattern)) {
            if (empty($pattern)) {
                throw new \InvalidArgumentException('The route argument must be a not empty string or array of not empty strings');
            }
            foreach ($pattern as $_pattern) {
                if (!is_string($_pattern)) {
                    throw new \InvalidArgumentException('The route argument must be a not empty string or array of not empty strings');
                }
                if (!isset($_pattern{0})) {
                    throw new \InvalidArgumentException('The route argument must be a not empty string or array of not empty strings');
                }
            }
            $this->data[] = [$pattern, $callback, $options];
            return $this;
        }
        throw new \InvalidArgumentException('The route argument must be a not empty string or array of not empty strings');
    }

    /**
     * Finds the matching callback and returns its result.
     * 
     * @param \BearFramework\App\Request $request The request object to match against.
     * @return mixed The result of the matching callback. NULL if none.
     */
    public function getResponse(\BearFramework\App\Request $request)
    {
        $requestPath = (string) $request->path;
        foreach ($this->data as $route) {
            foreach ($route[0] as $pattern) {
                $found = preg_match('/^' . str_replace(['/', '?', '*'], ['\/', '[^\/]+?', '.+?'], $pattern) . '$/u', $requestPath) === 1;
                if ($found && !empty($route[2])) {
                    $hasMethodOption = false;
                    $isMethodValid = false;
                    $hasSchemeOption = false;
                    $isSchemeValid = false;
                    foreach ($route[2] as $option) {
                        $option = strtolower($option);
                        if ($option === 'get' || $option === 'head' || $option === 'post' || $option === 'delete' || $option === 'put' || $option === 'patch' || $option === 'options') {
                            $hasMethodOption = true;
                            if ($option === strtolower($request->method)) {
                                $isMethodValid = true;
                            }
                        } elseif ($option === 'http' || $option === 'https') {
                            $hasSchemeOption = true;
                            if ($option === strtolower($request->scheme)) {
                                $isSchemeValid = true;
                            }
                        }
                    }
                    if (($hasMethodOption && !$isMethodValid) || ($hasSchemeOption && !$isSchemeValid)) {
                        $found = false;
                    }
                }
                if ($found) {
                    ob_start();
                    try {
                        $response = call_user_func($route[1]);
                        ob_end_clean();
                    } catch (\Exception $e) {
                        ob_end_clean();
                        throw $e;
                    }
                    if ($response instanceof App\Response) {
                        return $response;
                    }
                    // continue searching
                }
            }
        }
        return null;
    }

}
