<?php

require_once __DIR__ . '/form-handler.php';

$rules = array(
    'name'    => array('required' => true, 'label' => 'Name'),
    'phone'   => array('required' => true, 'label' => 'Phone', 'pattern' => '/^[\d\s\+\-\(\)]{7,20}$/'),
    'email'   => array('required' => false, 'label' => 'Email', 'email' => true),
    'reason'  => array('required' => true, 'label' => 'Reason for Contact'),
    'vehicle' => array('required' => false, 'label' => 'Vehicle'),
    'message' => array('required' => true, 'label' => 'Message', 'min' => 10),
);

processForm('enquiry', $rules);
