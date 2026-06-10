<?php

require_once __DIR__ . '/../config/app.php';

function processForm($type, $rules)
{
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header('Location: ' . site_url('contact.php'));
        exit;
    }

    $errors = array();

    foreach ($rules as $field => $rule) {
        $value = isset($_POST[$field]) ? trim($_POST[$field]) : '';

        if (!empty($rule['required']) && $value === '') {
            $errors[] = (isset($rule['label']) ? $rule['label'] : $field) . ' is required.';
            continue;
        }

        if ($value === '') {
            continue;
        }

        if (!empty($rule['email']) && !filter_var($value, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Please enter a valid email address.';
        }

        if (!empty($rule['pattern']) && !preg_match($rule['pattern'], $value)) {
            $errors[] = (isset($rule['label']) ? $rule['label'] : $field) . ' format is invalid.';
        }

        if (!empty($rule['min']) && strlen($value) < $rule['min']) {
            $errors[] = (isset($rule['label']) ? $rule['label'] : $field) . ' must be at least ' . $rule['min'] . ' characters.';
        }
    }

    if (!empty($errors)) {
        $error = urlencode(implode(' ', $errors));
        header('Location: ' . site_url('contact.php?error=' . $error));
        exit;
    }

    $storageDir = __DIR__ . '/../storage/submissions';
    if (!is_dir($storageDir)) {
        mkdir($storageDir, 0755, true);
    }

    $entry = array(
        'type'      => $type,
        'timestamp' => date('c'),
        'data'      => array_intersect_key($_POST, $rules),
        'ip'        => isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : 'unknown',
    );

    $filename = $storageDir . '/' . $type . '_' . date('Ymd_His') . '_' . bin2hex(random_bytes(4)) . '.json';
    file_put_contents($filename, json_encode($entry, JSON_PRETTY_PRINT));

    header('Location: ' . site_url('contact.php?success=1'));
    exit;
}
