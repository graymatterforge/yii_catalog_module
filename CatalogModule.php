<?php

class CatalogModule extends CWebModule
{
	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application

		// import the module-level models and components
		$this->setImport(array(
			'catalog.models.*',
			'catalog.components.*',
		));
		$this->setComponents(array(
            'errorHandler' => array(
                'errorAction' => 'catalog/default/error'),   
        ));
        $this->setParams(array(
            'valute' => 'RUB' ,
            'elementsPerPage' => 3
        ));
	}

	public function beforeControllerAction($controller, $action)
	{
		if(parent::beforeControllerAction($controller, $action))
		{
			// this method is called before any module controller action is performed
			// you may place customized code here
			return true;
		}
		else
			return false;
	}
}
