<?php


echo form_open();
$data = array(
    'name'          => 'firstname',
    'id'            => 'firstname',
    'value'         => '',
    'class'         => 'inputField'

);
echo form_input($data, '', 'required');