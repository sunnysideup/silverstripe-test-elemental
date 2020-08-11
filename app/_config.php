<?php

use SilverStripe\Forms\HTMLEditor\HtmlEditorConfig;
use SilverStripe\Forms\HTMLEditor\TinyMCEConfig;

$editor = HtmlEditorConfig::get('cms');
$editor->enablePlugins('charmap');
$editor->addButtonsToLine(1, 'charmap');
$editor->setOption('charmap_append', [
    ['256', 'A - macron'],
    ['274', 'E - macron'],
    ['298', 'I - macron'],
    ['332', 'O - macron'],
    ['362', 'U - macron'],
    ['257', 'a - macron'],
    ['275', 'e - macron'],
    ['299', 'i - macron'],
    ['333', 'o - macron'],
    ['363', 'u - macron'],
]);

TinyMCEConfig::get('cms')
    ->addButtonsToLine(1, 'styleselect')
    ->setOption('importcss_append', true);
