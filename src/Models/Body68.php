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
class Body68 implements JsonSerializable
{
    /**
     * Sub account user first name
     * @required
     * @maps FirstName
     * @var string $firstName public property
     */
    public $firstName;

    /**
     * sub account user last name
     * @required
     * @maps LastName
     * @var string $lastName public property
     */
    public $lastName;

    /**
     * Sub account email address
     * @required
     * @maps Email
     * @var string $email public property
     */
    public $email;

    /**
     * Descriptive name of the sub account
     * @required
     * @maps FriendlyName
     * @var string $friendlyName public property
     */
    public $friendlyName;

    /**
     * The password of the sub account.  Please make sure to make as password that is at least 8 characters
     * long, contain a symbol, uppercase and a number.
     * @required
     * @maps Password
     * @var string $password public property
     */
    public $password;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $firstName    Initialization value for $this->firstName
     * @param string $lastName     Initialization value for $this->lastName
     * @param string $email        Initialization value for $this->email
     * @param string $friendlyName Initialization value for $this->friendlyName
     * @param string $password     Initialization value for $this->password
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->firstName    = func_get_arg(0);
            $this->lastName     = func_get_arg(1);
            $this->email        = func_get_arg(2);
            $this->friendlyName = func_get_arg(3);
            $this->password     = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['FirstName']    = $this->firstName;
        $json['LastName']     = $this->lastName;
        $json['Email']        = $this->email;
        $json['FriendlyName'] = $this->friendlyName;
        $json['Password']     = $this->password;

        return $json;
    }
}
