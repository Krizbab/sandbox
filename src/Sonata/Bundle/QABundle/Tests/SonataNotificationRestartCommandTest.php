<?php

/*
 * This file is part of the Sonata package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\Bundle\QABundle\Tests;

class SonataNotificationRestartCommandTest extends CommandTestCase
{
    public function testRefresh()
    {
        $client = self::createClient();

        $output = $this->runCommand($client, "sonata:notification:restart");

        $this->assertContains("Nothing to restart, bye.", $output);
    }
}