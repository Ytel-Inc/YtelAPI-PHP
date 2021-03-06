<?php
/*
 * YtelAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace YtelAPILib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class Body75 implements JsonSerializable
{
    /**
     * List of valid dedicated shortcode to your Ytel account.
     * @required
     * @maps Shortcode
     * @var string $shortcode public property
     */
    public $shortcode;

    /**
     * User generated name of the dedicated shortcode.
     * @maps FriendlyName
     * @var string|null $friendlyName public property
     */
    public $friendlyName;

    /**
     * Specifies the HTTP method used to request the required StatusCallBackUrl once call connects.
     * @maps CallbackMethod
     * @var string|null $callbackMethod public property
     */
    public $callbackMethod;

    /**
     * URL that can be requested to receive notification when call has ended. A set of default parameters
     * will be sent here once the call is finished.
     * @maps CallbackUrl
     * @var string|null $callbackUrl public property
     */
    public $callbackUrl;

    /**
     * Specifies the HTTP method used to request the required FallbackUrl once call connects.
     * @maps FallbackMethod
     * @var string|null $fallbackMethod public property
     */
    public $fallbackMethod;

    /**
     * URL used if any errors occur during execution of InboundXML or at initial request of the required
     * Url provided with the POST.
     * @maps FallbackUrl
     * @var string|null $fallbackUrl public property
     */
    public $fallbackUrl;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $shortcode      Initialization value for $this->shortcode
     * @param string $friendlyName   Initialization value for $this->friendlyName
     * @param string $callbackMethod Initialization value for $this->callbackMethod
     * @param string $callbackUrl    Initialization value for $this->callbackUrl
     * @param string $fallbackMethod Initialization value for $this->fallbackMethod
     * @param string $fallbackUrl    Initialization value for $this->fallbackUrl
     */
    public function __construct()
    {
        if (6 == func_num_args()) {
            $this->shortcode      = func_get_arg(0);
            $this->friendlyName   = func_get_arg(1);
            $this->callbackMethod = func_get_arg(2);
            $this->callbackUrl    = func_get_arg(3);
            $this->fallbackMethod = func_get_arg(4);
            $this->fallbackUrl    = func_get_arg(5);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['Shortcode']      = $this->shortcode;
        $json['FriendlyName']   = $this->friendlyName;
        $json['CallbackMethod'] = $this->callbackMethod;
        $json['CallbackUrl']    = $this->callbackUrl;
        $json['FallbackMethod'] = $this->fallbackMethod;
        $json['FallbackUrl']    = $this->fallbackUrl;

        return $json;
    }
}
