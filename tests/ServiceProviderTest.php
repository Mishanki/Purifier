<?php

namespace Larahook\Tests\Purifier;

use GrahamCampbell\TestBenchCore\ServiceProviderTrait;
use Larahook\Purifier\Purifier;

class ServiceProviderTest extends AbstractTestCase
{
    use ServiceProviderTrait;

    public function testPurifierIsInjectable()
    {
        $this->assertIsInjectable(Purifier::class);
    }
}