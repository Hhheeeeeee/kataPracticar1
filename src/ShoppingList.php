<?php

namespace Deg540\DockerPHPBoilerplate;

class ShoppingList
{
    private $list = [];
    public function manageList($instruction):?string{
        $instructionParts = explode(" ", $instruction);
        $instruction = $instructionParts[0];
        $item = $instructionParts[1];
        $quantity = $instructionParts[2] ?? 1;

        if ($instruction == "añadir"){
            if (isset($this->list[$item])){
                $this->list[$item] += $quantity;
            }
            else{
                $this->list[$item] = $quantity;
            }
        }
        ksort($this->list);
        $result = [];
        var_dump($this->list);
        foreach ($this->list as $item => $quantity){
            $result[] = "$item x$quantity";
        }
        return implode(" ", $result);

    }
}