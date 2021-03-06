<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Integration\Mvc\Collection;

use IntegrationTester;

/**
 * Class FireEventCest
 */
class FireEventCest
{
    /**
     * Tests Phalcon\Mvc\Collection :: fireEvent()
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function mvcCollectionFireEvent(IntegrationTester $I)
    {
        $I->wantToTest('Mvc\Collection - fireEvent()');
        $I->skipTest('Need implementation');
    }
}
