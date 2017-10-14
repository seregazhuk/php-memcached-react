<?php

namespace seregazhuk\React\Memcached\Protocol\Response;

use seregazhuk\React\Memcached\Protocol\Parser;

class TouchResponse extends Response
{
    /**
     * @return bool
     */
    public function parse()
    {
        return trim($this->data) === Parser::RESPONSE_TOUCHED;
    }
}
