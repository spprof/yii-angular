<?php
/* @var $this PagesController */
/* @var $model Pages */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pages-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'label'); ?>
		<?php echo $form->textArea($model,'label',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'label'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'text'); ?>
		<?php echo $form->textArea($model,'text',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'text'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alias'); ?>
		<?php echo $form->textArea($model,'alias',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'alias'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mode'); ?>
		<?php echo $form->textField($model,'mode'); ?>
		<?php echo $form->error($model,'mode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'layout'); ?>
		<?php echo $form->textArea($model,'layout',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'layout'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'aliasfull'); ?>
		<?php echo $form->textArea($model,'aliasfull',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'aliasfull'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'url'); ?>
		<?php echo $form->textArea($model,'url',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'url'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->