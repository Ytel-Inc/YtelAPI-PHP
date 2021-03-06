<?php
/*
 * YtelAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace YtelAPILib\Tests;

use YtelAPILib\APIException;
use YtelAPILib\Exceptions;
use YtelAPILib\APIHelper;
use YtelAPILib\Models;

class TranscriptionControllerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \YtelAPILib\Controllers\TranscriptionController Controller instance
     */
    protected static $controller;

    /**
     * @var HttpCallBackCatcher Callback
     */
    protected $httpResponse;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass()
    {
        $client = new \YtelAPILib\YtelAPIClient();
        self::$controller = $client->getTranscription();
    }

    /**
     * Setup test
     */
    protected function setUp()
    {
        $this->httpResponse = new HttpCallBackCatcher();
    }

    /**
     * Retrieve a list of transcription objects for your Ytel account.
     */
    public function testTestListTranscriptions()
    {
        // Parameters for the API call
        $page = null;
        $pagesize = null;
        $status = null;
        $dateTranscribed = null;

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
            $result = self::$controller->createListTranscriptions($page, $pagesize, $status, $dateTranscribed);
        } catch (APIException $e) {
        }

        // Test response code
        $this->assertEquals(
            200,
            $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );

        // Test headers
        $headers = [];
        $headers['Content-Type'] = 'application/json' ;
        
        $this->assertTrue(
            TestHelper::areHeadersProperSubsetOf($headers, $this->httpResponse->getResponse()->getHeaders(), true),
            "Headers do not match"
        );
    }
}
