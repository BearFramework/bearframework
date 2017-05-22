<?php

/*
 * Bear Framework
 * http://bearframework.com
 * Copyright (c) 2016-2017 Ivo Petkov
 * Free to use under the MIT license.
 */

/**
 * @runTestsInSeparateProcesses
 */
class LogTest extends BearFrameworkTestCase
{

    /**
     * 
     */
    public function testLog()
    {
        $app = $this->getApp();

        $uniqueMessage = md5(uniqid());
        $level = 'warning';
        $filename = $app->config->logsDir . DIRECTORY_SEPARATOR . $level . '-' . date('Y-m-d') . '.log';
        $app->logger->log($level, $uniqueMessage);
        $this->assertTrue(is_file($filename) && strpos(file_get_contents($filename), $uniqueMessage) !== false);
    }

    /**
     * 
     */
    public function testInvalidLevelArgument()
    {
        $app = $this->getApp();

        $this->setExpectedException('InvalidArgumentException');
        $app->logger->log('', 'message');
    }

    /**
     * 
     */
    public function testInvalidFile()
    {
        $app = $this->getApp();
        $level = 'warning';
        $filename = $app->config->logsDir . DIRECTORY_SEPARATOR . $level . '-' . date('Y-m-d') . '.log';
        mkdir($filename, 0777, true);
        $this->setExpectedException('\Exception');
        $app->logger->log($level, 'message');
    }

}
