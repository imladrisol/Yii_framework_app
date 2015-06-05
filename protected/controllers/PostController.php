<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PostController
 *
 * @author Olga N
 */
class PostController extends Controller{
    //put your code here
    public function actions() {
        return array(
            'edit' => 'application.controllers.post.Edit',
        );
    }
    public function filters() {
        return [
            ['application.filters.SimpleFilter + edit',]
        ];
    }
}
