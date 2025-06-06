<?php

namespace Deg540\DockerPHPBoilerplate;

class ShoppingList
{
    public function manageList($instruction):?string{
        $instructionParts = explode(" ", $instruction);
        $item = $instructionParts[1];
        $quantity = $instructionParts[2] ?? 1;
        return  $item." x".$quantity;

    }
}