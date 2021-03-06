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
class Body2 implements JsonSerializable
{
    /**
     * The unique identifier for a template object
     * @required
     * @maps TemplateId
     * @var string $templateId public property
     */
    public $templateId;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $templateId Initialization value for $this->templateId
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->templateId = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['TemplateId'] = $this->templateId;

        return $json;
    }
}
