<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Cli\Cli\Dispatcher;

use CliTester;

class GetOptionsCest
{
    /**
     * Tests Phalcon\Cli\Dispatcher :: getOptions()
     *
     * @param CliTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function cliDispatcherGetOptions(CliTester $I)
    {
        $I->wantToTest("Cli\Dispatcher - getOptions()");
        $I->skipTest("Need implementation");
    }
}