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
class Body35 implements JsonSerializable
{
    /**
     * The SubaccountSid to be activated or suspended
     * @required
     * @maps SubAccountSID
     * @var string $subAccountSID public property
     */
    public $subAccountSID;

    /**
     * 0 to suspend or 1 to activate
     * @required
     * @maps Activate
     * @var int $activate public property
     */
    public $activate;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $subAccountSID Initialization value for $this->subAccountSID
     * @param int    $activate      Initialization value for $this->activate
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->subAccountSID = func_get_arg(0);
            $this->activate      = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['SubAccountSID'] = $this->subAccountSID;
        $json['Activate']      = $this->activate;

        return $json;
    }
}
