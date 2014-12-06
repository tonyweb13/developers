<?php

echo "Available notes R$ 100,00; R$ 50,00; R$ 20,00 e R$ 10,00";

echo CHtml::tag('br');
echo CHtml::tag('br');

echo CHtml::beginForm();
echo CHtml::label('Entry', '', array());
echo CHtml::tag('br');
echo CHtml::tag('br');
echo CHtml::textField('entry');
echo CHtml::tag('br');
echo CHtml::tag('br');
echo CHtml::ajaxSubmitButton('Submit', array('site/result'), array(
    'type' => 'POST',
    'dataType' => 'html',
    'update' => '#result_id',
));
echo CHtml::endForm();

echo CHtml::tag('br');
echo CHtml::tag('br');

echo CHtml::OpenTag('div', array('id' => 'result_id'));
echo CHtml::CloseTag('div');
