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
class Body3 implements JsonSerializable
{
    /**
     * The unique identifier for the sms resource
     * @required
     * @maps MessageSid
     * @var string $messageSid public property
     */
    public $messageSid;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $messageSid Initialization value for $this->messageSid
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->messageSid = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['MessageSid'] = $this->messageSid;

        return $json;
    }
}
