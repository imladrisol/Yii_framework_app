<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UrlManager
 *
 * @author Olga N
 */
class UrlManager extends CUrlManager{
    //put your code here
    public function createUrl($route, $params = array(), $ampersand = '&') {
        if(!isset($params['language'])){
            if(Yii::app()->user->hasState('language')){
                Yii::app()->language = Yii::app()->user->getState('language');
            }
            elseif (isset(Yii::app()->request->cookies['language'])) {
            Yii::app()->language = Yii::app()->request->cookies['language']->value;
            }
            $params['language'] = Yii::app()->language;
        }
        return parent::createUrl($route, $params, $ampersand);
    }
}
