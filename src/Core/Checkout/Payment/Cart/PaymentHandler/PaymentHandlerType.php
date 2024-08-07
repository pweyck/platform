<?php declare(strict_types=1);

namespace Shopware\Core\Checkout\Payment\Cart\PaymentHandler;

use Shopware\Core\Framework\Log\Package;

#[Package('checkout')]
enum PaymentHandlerType
{
    case RECURRING;
    case REFUND;
}
