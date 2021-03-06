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
class Body58 implements JsonSerializable
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
     * Only list SMS messages sent from this number
     * @maps From
     * @var string|null $from public property
     */
    public $from;

    /**
     * Only list SMS messages sent to Shortcode
     * @maps Shortcode
     * @var string|null $shortcode public property
     */
    public $shortcode;

    /**
     * Only list SMS messages sent in the specified date MAKE REQUEST
     * @maps Datecreated
     * @var string|null $datecreated public property
     */
    public $datecreated;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $page        Initialization value for $this->page
     * @param integer $pagesize    Initialization value for $this->pagesize
     * @param string  $from        Initialization value for $this->from
     * @param string  $shortcode   Initialization value for $this->shortcode
     * @param string  $datecreated Initialization value for $this->datecreated
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->page        = func_get_arg(0);
            $this->pagesize    = func_get_arg(1);
            $this->from        = func_get_arg(2);
            $this->shortcode   = func_get_arg(3);
            $this->datecreated = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['page']        = $this->page;
        $json['pagesize']    = $this->pagesize;
        $json['From']        = $this->from;
        $json['Shortcode']   = $this->shortcode;
        $json['Datecreated'] = $this->datecreated;

        return $json;
    }
}
