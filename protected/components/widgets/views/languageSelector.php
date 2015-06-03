<div id="language-select">
<?php
    if(sizeof($languages) < 6){
        
        foreach($languages as $key => $value){
            if($key != $currentLang){
                echo CHtml::link(
                        '<img src="images/'.$key.'.gif" title="'.$value.'" style="padding:1px;" width=16 height=11',
                        $this->getOwner()->createMultilanguageReturnUrl($key));
            }
        }
        /*
        $lastElem = end($languages);
        foreach ($languages as $key=>$lang){
            if($key != $currentLang){
                echo CHtml::link(
                        $lang,
                        $this->getOwner()->createMultilanguageReturnUrl($key)
                        );
            }
            else{
                echo '<b>'.$lang.'</b>';
            }
            
            if($lang != $lastElem)
                echo ' | ';
        }*/
    }
else{
    echo Chtml::form();
    foreach ($languages as $key=>$lang){
        echo CHtml::hiddenField(
                $key,
                $this->getOwner()->createMultilanguageReturnUrl($key)
                );
    }
    echo CHtml::dropDownList('language', $currentLang, $languages,
            array(
                'submit'=>'',
                )
            );
    echo CHtml::endForm();
}

?>
</div>