<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MyComponent
 *
 * @author Olga N
 */
class MyComponent extends CComponent{
    //put your code here
    private $_textWidth;
    protected $_completed = false;
    
    public function getTextWidth() {
        echo "MyComponent::getTextWidth()<br>";
        return $this->_textWidth;
    }
    public function setTextWidth($param) {
        echo "MyComponent::setTextWidth()<br>";
        $this->_textWidth = $param;
    }
    public function getTextHeight(){
        echo "MyComponent::getTextHeight()<br>";
    }
    public function setCompleted($param) {
        echo "MyComponent::setCompleted()<br>";
        $this->_completed = $param;
    }
    
    public function onClicked($event) {
        $this->raiseEvent('onClicked', $event);
    }
}
