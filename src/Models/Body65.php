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
class Body65 implements JsonSerializable
{
    /**
     * The page count to retrieve from the total results in the collection. Page indexing starts at 1.
     * @var integer|null $page public property
     */
    public $page;

    /**
     * Number of individual resources listed in the response per page
     * @var integer|null $pagesize public property
     */
    public $pagesize;

    /**
     * Only return conferences with the specified FriendlyName
     * @maps FriendlyName
     * @var string|null $friendlyName public property
     */
    public $friendlyName;

    /**
     * Conference created date
     * @maps DateCreated
     * @var string|null $dateCreated public property
     */
    public $dateCreated;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $page         Initialization value for $this->page
     * @param integer $pagesize     Initialization value for $this->pagesize
     * @param string  $friendlyName Initialization value for $this->friendlyName
     * @param string  $dateCreated  Initialization value for $this->dateCreated
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->page         = func_get_arg(0);
            $this->pagesize     = func_get_arg(1);
            $this->friendlyName = func_get_arg(2);
            $this->dateCreated  = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['page']         = $this->page;
        $json['pagesize']     = $this->pagesize;
        $json['FriendlyName'] = $this->friendlyName;
        $json['DateCreated']  = $this->dateCreated;

        return $json;
    }
}
