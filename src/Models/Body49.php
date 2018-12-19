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
class Body49 implements JsonSerializable
{
    /**
     * Filter usage results by product type.
     * @maps ProductCode
     * @var int|null $productCode public property
     */
    public $productCode;

    /**
     * Filter usage objects by start date.
     * @var string|null $startDate public property
     */
    public $startDate;

    /**
     * Filter usage objects by end date.
     * @var string|null $endDate public property
     */
    public $endDate;

    /**
     * Will include all subaccount usage data
     * @maps IncludeSubAccounts
     * @var string|null $includeSubAccounts public property
     */
    public $includeSubAccounts;

    /**
     * Constructor to set initial or default values of member properties
     * @param int    $productCode        Initialization value for $this->productCode
     * @param string $startDate          Initialization value for $this->startDate
     * @param string $endDate            Initialization value for $this->endDate
     * @param string $includeSubAccounts Initialization value for $this->includeSubAccounts
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->productCode        = func_get_arg(0);
            $this->startDate          = func_get_arg(1);
            $this->endDate            = func_get_arg(2);
            $this->includeSubAccounts = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['ProductCode']        = $this->productCode;
        $json['startDate']          = $this->startDate;
        $json['endDate']            = $this->endDate;
        $json['IncludeSubAccounts'] = $this->includeSubAccounts;

        return $json;
    }
}
