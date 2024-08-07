<?php declare(strict_types=1);

namespace Shopware\Core\Framework\App\Payment\Payload\Struct;

use Shopware\Core\Checkout\Order\Aggregate\OrderTransaction\OrderTransactionEntity;
use Shopware\Core\Framework\App\Payload\SourcedPayloadInterface;
use Shopware\Core\Framework\Log\Package;

/**
 * @internal only for use by the app-system
 */
#[Package('checkout')]
interface PaymentPayloadInterface extends SourcedPayloadInterface
{
    public function getOrderTransaction(): OrderTransactionEntity;
}
