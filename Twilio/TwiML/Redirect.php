<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\TwiML;

class Redirect extends TwiML {
    /**
     * Redirect constructor.
     * 
     * @param url $url Redirect URL
     * @param array $attributes Optional attributes
     */
    public function __construct($url, $attributes = array()) {
        parent::__construct('Redirect', $url, $attributes);
    }

    /**
     * Add Method attribute.
     * 
     * @param httpMethod $method Redirect URL method
     * @return TwiML $this.
     */
    public function setMethod($method) {
        return $this->setAttribute('method', $method);
    }
}