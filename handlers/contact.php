<?php

require_once __DIR__ . '/form-handler.php';

$rules = array(
    'name'    => array('required' => true, 'label' => 'Name'),
    'email'   => array('required' => true, 'label' => 'Email', 'email' => true),
    'subject' => array('required' => true, 'label' => 'Subject'),
    'message' => array('required' => true, 'label' => 'Message', 'min' => 10),
);

processForm('contact', $rules);
