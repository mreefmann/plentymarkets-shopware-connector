<?php

namespace ShopwareAdapter\ResponseParser\Address;

use PlentyConnector\Connector\TransferObject\Order\Address;

/**
 * Interface AddressResponseParserInterface
 */
interface AddressResponseParserInterface
{
    /**
     * @param array $entry
     *
     * @return null|Address\
     */
    public function parse(array $entry);
}
