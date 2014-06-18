<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<br/><br/>

<?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
    'type' => 'primary',
    'toggle' => 'radio', // 'checkbox' or 'radio'
    'buttons' => array(
        array('label'=>'Левая кнопочка'),
        array('label'=>'Middle'),
        array('label'=>'Right'),
    ),
)); ?>

<br/><br/>

<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Primary',
    'type'=>'warning', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'size'=>'small', // null, 'large', 'small' or 'mini'
)); ?>
