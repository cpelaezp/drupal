<?php

require_once DRUPAL_ROOT . '/includes/file.inc';

function insertlog($filename, $data){
    $islog = true;
    
    if ($islog){
        dblog_save_write($filename, $data);
    }
}

function dblog_save_write($filename, $data){
    $filepath = drupal_get_path('module', 'companyinfo') . '/log/';
    file_prepare_directory($filepath, FILE_CREATE_DIRECTORY | FILE_MODIFY_PERMISSIONS);
    
    $data = format_date(time(), 'custom', 'Y-m-d H:i:s') . ' - ' . $data . '\n';
    
    $fp = fopen($filepath . '/' . $filename, 'a');
    fwrite($fp, $data);
    fclose($fp);
}