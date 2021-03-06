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

class ConferenceControllerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \YtelAPILib\Controllers\ConferenceController Controller instance
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
        self::$controller = $client->getConference();
    }

    /**
     * Setup test
     */
    protected function setUp()
    {
        $this->httpResponse = new HttpCallBackCatcher();
    }

    /**
     * Retrieve a list of conference objects.
     */
    public function testTestListConferences()
    {
        // Parameters for the API call
        $page = null;
        $pagesize = null;
        $friendlyName = null;
        $dateCreated = null;

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
            $result = self::$controller->createListConferences($page, $pagesize, $friendlyName, $dateCreated);
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
