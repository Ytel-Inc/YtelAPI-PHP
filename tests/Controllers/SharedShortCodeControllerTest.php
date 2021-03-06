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

class SharedShortCodeControllerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \YtelAPILib\Controllers\SharedShortCodeController Controller instance
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
        self::$controller = $client->getSharedShortCode();
    }

    /**
     * Setup test
     */
    protected function setUp()
    {
        $this->httpResponse = new HttpCallBackCatcher();
    }

    /**
     * Retrieve a list of shortcode assignment associated with your Ytel account.
     */
    public function testTestListShortcodes()
    {
        // Parameters for the API call
        $shortcode = null;
        $page = null;
        $pagesize = null;

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
            $result = self::$controller->createListShortcodes($shortcode, $page, $pagesize);
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

    /**
     * Retrieve a list of keywords associated with your Ytel account.
     */
    public function testTestListKeywords()
    {
        // Parameters for the API call
        $page = null;
        $pagesize = null;
        $keyword = null;
        $shortcode = null;

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
            $result = self::$controller->createListKeywords($page, $pagesize, $keyword, $shortcode);
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

    /**
     * List Shortcode Templates by Type
     */
    public function testTestListTemplates()
    {
        // Parameters for the API call
        $type = null;
        $page = null;
        $pagesize = null;
        $shortcode = null;

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
            $result = self::$controller->createListTemplates($type, $page, $pagesize, $shortcode);
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

    /**
     * List All Inbound ShortCode
     */
    public function testTestListInboundSMS()
    {
        // Parameters for the API call
        $datecreated = null;
        $page = null;
        $pagesize = null;
        $from = null;
        $shortcode = null;

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
            $result = self::$controller->createListInboundSMS($datecreated, $page, $pagesize, $from, $shortcode);
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
