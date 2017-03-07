<?php

return [
    'product/([0-9]+)' => 'product/view/$1',
    'new/([0-9]+)' => 'news/view/$1',
    'news/page-([0-9]+)' => 'news/index/$2/$1',
    'news' => 'news/index/$1',
    'category/([0-9]+)/page-([0-9]+)' => 'category/index/$1/$2',
    'category/([0-9]+)' => 'category/index/$1',
    'about' => 'about/index/$1',
    'user/register' => 'user/register/$1',
    'user/login' => 'user/login/$1',
    'user/logout' => 'user/logout/$1',
    'page-([0-9]+)' => 'site/index/$2/$1',
    '' => 'site/index/$2',
];