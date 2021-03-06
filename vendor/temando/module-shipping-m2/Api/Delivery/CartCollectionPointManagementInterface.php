<?php
/**
 * Refer to LICENSE.txt distributed with the Temando Shipping module for notice of license
 */
namespace Temando\Shipping\Api\Delivery;

use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;

/**
 * Process Collection Point Search
 *
 * @api
 * @deprecated since 1.5.1
 * @see \Temando\Shipping\Api\Checkout\CartCollectionPointManagementInterface
 *
 * @package Temando\Shipping\Api
 * @author  Benjamin Heuer <benjamin.heuer@netresearch.de>
 * @author  Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link    https://www.temando.com/
 */
interface CartCollectionPointManagementInterface
{
    /**
     * @param int $cartId
     * @param string $countryId
     * @param string $postcode
     * @return \Temando\Shipping\Api\Data\Delivery\CollectionPointSearchRequestInterface
     * @throws CouldNotSaveException
     */
    public function saveSearchRequest($cartId, $countryId, $postcode);

    /**
     * @param int $cartId
     * @return bool
     * @throws CouldNotDeleteException
     */
    public function deleteSearchRequest($cartId);

    /**
     * @param int $cartId
     * @return \Temando\Shipping\Api\Data\Delivery\QuoteCollectionPointInterface[]
     */
    public function getCollectionPoints($cartId);

    /**
     * @param int $cartId
     * @param int $entityId
     * @return bool
     * @throws CouldNotSaveException
     */
    public function selectCollectionPoint($cartId, $entityId);
}
