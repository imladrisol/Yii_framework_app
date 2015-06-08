<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MyWidget
 *
 * @author Olga N
 */
class MyWidget extends CWidget{
    //put your code here
    public function run() {
         $this->render('my/myWidget', array('iml'=>'16.09.1983'));
    }
}
