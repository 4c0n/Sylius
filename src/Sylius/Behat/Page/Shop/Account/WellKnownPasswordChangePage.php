<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\Behat\Page\Shop\Account;

use Behat\Mink\Exception\ElementNotFoundException;
use FriendsOfBehat\PageObjectExtension\Page\SymfonyPage;

class WellKnownPasswordChangePage extends SymfonyPage implements WellKnownPasswordChangePageInterface
{
    public function getRouteName(): string
    {
        return 'sylius_shop_request_password_reset_token_redirect';
    }
}
