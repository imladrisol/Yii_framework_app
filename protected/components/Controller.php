<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
        
        public function __construct($id, $module = null) {
            parent::__construct($id, $module);
            
            if(isset($_POST['language'])){
                $lang = $_POST['language'];
                $multilangReturnUrl = $_POST[$lang];
                $this->redirect($multilangReturnUrl);
            }
            if(isset($_GET['language'])){
                Yii::app()->language = $_GET['language'];
                Yii::app()->user->setState('language', $_GET['language']);
                $coockie = new CHttpCookie('language', $_GET['language']);
                $coockie->expire = time()+(60*60*24*365);
                Yii::app()->request->cookies['language'] = $coockie;
            }
            elseif (Yii::app()->user->hasState('language')) {
                Yii::app()->language = Yii::app()->user->getState('language');
                
            }
            elseif (isset(Yii::app()->request->cookies['language'])) {
                Yii::app()->language = Yii::app()->request->cookies['language']->value;
                        
                        
           }
            
        }
        
        public function createMultilanguageReturnUrl($lang='en'){
            if(count($_GET)>0){
                $arr = $_GET;
                $arr['language'] = $lang;
            }
            else{
                $arr = array('language'=>$lang);
                
            }
            return $this->createUrl('',$arr);
        }
}