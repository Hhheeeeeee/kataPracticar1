<?php
namespace Deg540\DockerPHPBoilerplate;

use PHPUnit\Framework\TestCase;

class ShoppingListTest extends TestCase
{
    private ShoppingList $shoppingList;
    protected function setUp(): void
    {
        parent::setUp();
        $this->shoppingList = new ShoppingList();
    }

    /**
     * @test
     */
    public function givenAñadirInstructionWithOneItemReturnsItemAndItsQuantity()
    {
        $result = $this->shoppingList->manageList("añadir pan");
        $this->assertEquals("pan x1", $result);
    }


}
