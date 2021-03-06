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
class Body51 implements JsonSerializable
{
    /**
     * The unique identifier for a conference object.
     * @required
     * @maps ConferenceSid
     * @var string $conferenceSid public property
     */
    public $conferenceSid;

    /**
     * The phone number of the participant to be added.
     * @required
     * @maps ParticipantNumber
     * @var string $participantNumber public property
     */
    public $participantNumber;

    /**
     * Specifies if participant should be muted.
     * @maps Muted
     * @var bool|null $muted public property
     */
    public $muted;

    /**
     * Specifies if the participant should hear audio in the conference.
     * @maps Deaf
     * @var bool|null $deaf public property
     */
    public $deaf;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $conferenceSid     Initialization value for $this->conferenceSid
     * @param string $participantNumber Initialization value for $this->participantNumber
     * @param bool   $muted             Initialization value for $this->muted
     * @param bool   $deaf              Initialization value for $this->deaf
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->conferenceSid     = func_get_arg(0);
            $this->participantNumber = func_get_arg(1);
            $this->muted             = func_get_arg(2);
            $this->deaf              = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['ConferenceSid']     = $this->conferenceSid;
        $json['ParticipantNumber'] = $this->participantNumber;
        $json['Muted']             = $this->muted;
        $json['Deaf']              = $this->deaf;

        return $json;
    }
}
