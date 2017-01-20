<?php

namespace PlentyConnector\Connector\TransferObject\Category;

use PlentyConnector\Connector\TransferObject\AttributeableInterface;
use PlentyConnector\Connector\TransferObject\TransferObjectInterface;
use PlentyConnector\Connector\TransferObject\TranslateableInterface;

/**
 * Interface CategoryInterface
 */
interface CategoryInterface extends TransferObjectInterface, TranslateableInterface, AttributeableInterface
{
    /**
     * @return string
     */
    public function getName();

    /**
     * @return string
     */
    public function getParentIdentifier();

    /**
     * @return array
     */
    public function getShopIdentifier();

    /**
     * @return array
     */
    public function getImageIdentifiers();

    /**
     * @return int
     */
    public function getPosition();

    /**
     * @return string
     */
    public function getDescription();

    /**
     * @return string
     */
    public function getLongDescription();

    /**
     * @return string
     */
    public function getMetaTitle();

    /**
     * @return string
     */
    public function getMetaDescription();

    /**
     * @return string
     */
    public function getMetaKeywords();

    /**
     * @return string
     */
    public function getMetaRobots();
}
