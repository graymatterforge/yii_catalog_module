yii_catalog_module admin part only
==================

Module based on nested set behavior.
No rules for access (you can add it by auth module and check isGuest or RBAC rules)
This module have only catalog/admin , create element,edit element,delete element,create category,edit category,delete category,show category(show elements in category). Supports show elements for ancestors category,sub category etc. (its by nested set behavior in ext dir module).

For add field for element, add field in database,add in model,add in view.
Some settings stored in CatalogModule.php
like valute for example
$this->setParams(array(
            'valute' => 'RUB'  
        ));
        

Installation:
Copy to the protected/modules/catalog for your project
Import tables from module/catalog/data

In main.php (protected/config) need set routes and setup module in modules => array('catalog'...)

main.php routes
'catalog/<id:\d+>'=>'catalog/default/section',
				'catalog/admin/edit_category/<id:\d+>'=>'catalog/admin/edit_category',
				'catalog/admin/edit_element/<id:\d+>'=>'catalog/admin/edit_element',
				'catalog/admin/delete_category/<id:\d+>'=>'catalog/admin/delete_category',
				'catalog/admin/show_category/<id:\d+>'=>'catalog/admin/show_category',
				'catalog/admin/show_category/<id:\d+>/<page:\d+>'=>'catalog/admin/show_category',
				
all routes commented in controllers




