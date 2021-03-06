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
class Body41 implements JsonSerializable
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
     * Filter SMS message objects from this valid 10-digit phone number (E.164 format).
     * @maps From
     * @var string|null $from public property
     */
    public $from;

    /**
     * Filter SMS message objects to this valid 10-digit phone number (E.164 format).
     * @maps To
     * @var string|null $to public property
     */
    public $to;

    /**
     * Only list SMS messages sent in the specified date range
     * @maps DateSent
     * @var string|null $dateSent public property
     */
    public $dateSent;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $page     Initialization value for $this->page
     * @param integer $pageSize Initialization value for $this->pageSize
     * @param string  $from     Initialization value for $this->from
     * @param string  $to       Initialization value for $this->to
     * @param string  $dateSent Initialization value for $this->dateSent
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->page     = func_get_arg(0);
            $this->pageSize = func_get_arg(1);
            $this->from     = func_get_arg(2);
            $this->to       = func_get_arg(3);
            $this->dateSent = func_get_arg(4);
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
        $json['From']     = $this->from;
        $json['To']       = $this->to;
        $json['DateSent'] = $this->dateSent;

        return $json;
    }
}
