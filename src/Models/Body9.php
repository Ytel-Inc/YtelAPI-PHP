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
class Body9 implements JsonSerializable
{
    /**
     * The unique identifier for a transcription object.
     * @required
     * @var string $transcriptionsid public property
     */
    public $transcriptionsid;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $transcriptionsid Initialization value for $this->transcriptionsid
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->transcriptionsid = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['transcriptionsid'] = $this->transcriptionsid;

        return $json;
    }
}