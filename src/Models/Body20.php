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
class Body20 implements JsonSerializable
{
    /**
     * The unique identifier of each conference resource
     * @required
     * @maps ConferenceSid
     * @var string $conferenceSid public property
     */
    public $conferenceSid;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $conferenceSid Initialization value for $this->conferenceSid
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->conferenceSid = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['ConferenceSid'] = $this->conferenceSid;

        return $json;
    }
}