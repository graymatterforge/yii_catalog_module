yii_catalog_module
==================

Module based on nested set behavior,have create,edit,delete sections and elements,with pagination and route comments

Installation:
Copy to the protected/modules/catalog for your project
In main.php (protected/config) need set routes and setup module in modules => array('catalog'...)

main.php routes
'catalog/<id:\d+>'=>'catalog/default/section',
				'catalog/admin/edit_category/<id:\d+>'=>'catalog/admin/edit_category',
				'catalog/admin/delete_category/<id:\d+>'=>'catalog/admin/delete_category',
				'catalog/admin/show_category/<id:\d+>'=>'catalog/admin/show_category',
				'catalog/admin/show_category/<id:\d+>/<page:\d+>'=>'catalog/admin/show_category',
				
all routes commented in controllers

the export tables from data dir (two tables , catalog, catalog_category)
