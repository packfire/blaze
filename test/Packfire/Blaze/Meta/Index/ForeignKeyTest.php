<?php

namespace Packfire\Blaze\Meta\Index;

use Packfire\Blaze\Meta\AttributeCollection;
use Packfire\Blaze\Meta\Attribute;

class ForeignKeyTest extends \PHPUnit_Framework_TestCase
{
    public function testConstruct()
    {
        $foreignAttributes = new AttributeCollection();
        $foreignAttributes->add(new Attribute('test', 'test', 'text'));
        $reference = new Reference('test', $foreignAttributes);

        $index = new ForeignKey($reference);
        $this->assertInstanceOf('Packfire\\Blaze\\Meta\\AttributeCollection', $index->attributes());
        $this->assertEquals('fk_', $index->name());
        $this->assertEquals($reference, $index->reference());
    }
}
