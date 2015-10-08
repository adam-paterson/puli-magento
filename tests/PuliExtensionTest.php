<?php

namespace Puli\MagentoExtension\Tests;

use Puli\Repository\InMemoryRepository;
use Puli\Repository\Resource\DirectoryResource;

class PuliExtensionTest extends \PHPUnit_Framework_TestCase
{
    protected $repo;
    protected $magento;

    protected function setUp()
    {
        $this->repo = new InMemoryRepository();
        $this->repo->add('/acme/shop/design', new DirectoryResource(__DIR__.'/Fixtures/puli'));
    }

    public function testExtensionIsLoaded()
    {
        $this->assertNotEmpty($this->repo->find('/acme/shop/design'));
    }
}