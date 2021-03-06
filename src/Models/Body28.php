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
class Body28 implements JsonSerializable
{
    /**
     * The unique identifier for voice call that is in progress.
     * @required
     * @maps CallSid
     * @var string $callSid public property
     */
    public $callSid;

    /**
     * URL the in-progress call will be redirected to
     * @maps Url
     * @var string|null $url public property
     */
    public $url;

    /**
     * The method used to request the above Url parameter
     * @maps Method
     * @var string|null $method public property
     */
    public $method;

    /**
     * Status to set the in-progress call to
     * @maps Status
     * @var string|null $status public property
     */
    public $status;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $callSid Initialization value for $this->callSid
     * @param string $url     Initialization value for $this->url
     * @param string $method  Initialization value for $this->method
     * @param string $status  Initialization value for $this->status
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->callSid = func_get_arg(0);
            $this->url     = func_get_arg(1);
            $this->method  = func_get_arg(2);
            $this->status  = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['CallSid'] = $this->callSid;
        $json['Url']     = $this->url;
        $json['Method']  = $this->method;
        $json['Status']  = $this->status;

        return $json;
    }
}
