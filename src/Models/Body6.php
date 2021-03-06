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
class Body6 implements JsonSerializable
{
    /**
     * ID of the active conference
     * @required
     * @var string $conferenceSid public property
     */
    public $conferenceSid;

    /**
     * ID of an active participant
     * @required
     * @maps ParticipantSid
     * @var string $participantSid public property
     */
    public $participantSid;

    /**
     * Mute a participant
     * @maps Muted
     * @var bool|null $muted public property
     */
    public $muted;

    /**
     * Make it so a participant cant hear
     * @maps Deaf
     * @var bool|null $deaf public property
     */
    public $deaf;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $conferenceSid  Initialization value for $this->conferenceSid
     * @param string $participantSid Initialization value for $this->participantSid
     * @param bool   $muted          Initialization value for $this->muted
     * @param bool   $deaf           Initialization value for $this->deaf
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->conferenceSid  = func_get_arg(0);
            $this->participantSid = func_get_arg(1);
            $this->muted          = func_get_arg(2);
            $this->deaf           = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['conferenceSid']  = $this->conferenceSid;
        $json['ParticipantSid'] = $this->participantSid;
        $json['Muted']          = $this->muted;
        $json['Deaf']           = $this->deaf;

        return $json;
    }
}
