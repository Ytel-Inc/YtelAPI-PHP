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
class Body10 implements JsonSerializable
{
    /**
     * The unique identifier for a recording object.
     * @required
     * @var string $recordingSid public property
     */
    public $recordingSid;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $recordingSid Initialization value for $this->recordingSid
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->recordingSid = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['recordingSid'] = $this->recordingSid;

        return $json;
    }
}