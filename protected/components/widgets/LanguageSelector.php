<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LanguageSelector
 *
 * @author Olga N
 */
class LanguageSelector extends CWidget {
    //put your code here
    public function run() {
        $currentLang = Yii::app()->language;
        $languages = Yii::app()->params->languages;
        $this->render('languageSelector', array('currentLang'=>$currentLang, 'languages'=>$languages));
    }
}
