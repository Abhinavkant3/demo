<?php
/* @var $this BrandsController */
/* @var $model Brands */

$this->breadcrumbs=array(
	'Brands'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Brands', 'url'=>array('index')),
	array('label'=>'Manage Brands', 'url'=>array('admin')),
);
?>

<h1>Create Brands</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'brands-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'brand_id',
		'brand_name',
		array(
            // 'name' => 'posts',
            'header' => 'Items Count',
            'value' => 'count($data->items)',
        ),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>