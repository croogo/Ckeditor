<?php

/**
 * Hook helper
 */
foreach ((array) Configure::read('Wysiwyg.actions') as $action => $settings) {
    if (is_numeric($action)) {
        $action = $settings;
    }
    $actionE = explode('/', $action);
    Croogo::hookHelper($actionE['0'], 'Ckeditor.Ckeditor');
}
