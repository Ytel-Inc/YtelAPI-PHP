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
class Body60 implements JsonSerializable
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
     * Only list keywords of keyword
     * @maps Keyword
     * @var string|null $keyword public property
     */
    public $keyword;

    /**
     * Only list keywords of shortcode
     * @maps Shortcode
     * @var integer|null $shortcode public property
     */
    public $shortcode;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $page      Initialization value for $this->page
     * @param integer $pagesize  Initialization value for $this->pagesize
     * @param string  $keyword   Initialization value for $this->keyword
     * @param integer $shortcode Initialization value for $this->shortcode
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->page      = func_get_arg(0);
            $this->pagesize  = func_get_arg(1);
            $this->keyword   = func_get_arg(2);
            $this->shortcode = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['page']      = $this->page;
        $json['pagesize']  = $this->pagesize;
        $json['Keyword']   = $this->keyword;
        $json['Shortcode'] = $this->shortcode;

        return $json;
    }
}
