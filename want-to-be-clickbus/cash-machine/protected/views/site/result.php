<?php

echo CHtml::OpenTag('div', array('id' => 'result_id'));
echo CHtml::label('Result: ', '', array());
echo $output;
echo CHtml::tag('br');
echo CHtml::CloseTag('div');
