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
class Body4 implements JsonSerializable
{
    /**
     * The page count to retrieve from the total results in the collection. Page indexing starts at 1.
     * @maps Page
     * @var integer|null $page public property
     */
    public $page;

    /**
     * The count of objects to return per page.
     * @maps PageSize
     * @var integer|null $pageSize public property
     */
    public $pageSize;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $page     Initialization value for $this->page
     * @param integer $pageSize Initialization value for $this->pageSize
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->page     = func_get_arg(0);
            $this->pageSize = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['Page']     = $this->page;
        $json['PageSize'] = $this->pageSize;

        return $json;
    }
}
