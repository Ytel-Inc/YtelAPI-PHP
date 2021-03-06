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
class Body42 implements JsonSerializable
{
    /**
     * The page count to retrieve from the total results in the collection. Page indexing starts at 1.
     * @maps Page
     * @var integer|null $page public property
     */
    public $page;

    /**
     * Number of individual resources listed in the response per page
     * @maps PageSize
     * @var integer|null $pageSize public property
     */
    public $pageSize;

    /**
     * Filter calls that were sent to this 10-digit number (E.164 format).
     * @maps To
     * @var string|null $to public property
     */
    public $to;

    /**
     * Filter calls that were sent from this 10-digit number (E.164 format).
     * @maps From
     * @var string|null $from public property
     */
    public $from;

    /**
     * Return calls that are from a specified date.
     * @maps DateCreated
     * @var string|null $dateCreated public property
     */
    public $dateCreated;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $page        Initialization value for $this->page
     * @param integer $pageSize    Initialization value for $this->pageSize
     * @param string  $to          Initialization value for $this->to
     * @param string  $from        Initialization value for $this->from
     * @param string  $dateCreated Initialization value for $this->dateCreated
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->page        = func_get_arg(0);
            $this->pageSize    = func_get_arg(1);
            $this->to          = func_get_arg(2);
            $this->from        = func_get_arg(3);
            $this->dateCreated = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['Page']        = $this->page;
        $json['PageSize']    = $this->pageSize;
        $json['To']          = $this->to;
        $json['From']        = $this->from;
        $json['DateCreated'] = $this->dateCreated;

        return $json;
    }
}
