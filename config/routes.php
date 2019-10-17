<?php

use school145\Router;

// Общие правила
Router::add('^post/(?P<alias>[a-z0-9-]+)/?$', ['controller' => 'Post', 'action' => 'view']);
Router::add('^category/(?P<alias>[a-z0-9-]+)/?$', ['controller' => 'Category', 'action' => 'view']);
Router::add('^menu/schooladm?$', ['controller' => 'Schooladm', 'action' => 'view']);
Router::add('^menu/info?$', ['controller' => 'Info', 'action' => 'view']);
Router::add('^menu/teachers?$', ['controller' => 'Teachers', 'action' => 'view']);
Router::add('^menu/history?$', ['controller' => 'History', 'action' => 'view']);
Router::add('^menu/gallery?$', ['controller' => 'Gallery', 'action' => 'view']);
Router::add('^menu/forum?$', ['controller' => 'Forum', 'action' => 'view']);
Router::add('^menu/structure?$', ['controller' => 'Structure', 'action' => 'view']);
Router::add('^menu/canteen?$', ['controller' => 'Canteen', 'action' => 'view']);
Router::add('^menu/catering?$', ['controller' => 'Catering', 'action' => 'view']);
Router::add('^menu/laws?$', ['controller' => 'Laws', 'action' => 'view']);
Router::add('^menu/constitutional?$', ['controller' => 'Constitutional', 'action' => 'view']);
Router::add('^menu/orders?$', ['controller' => 'Orders', 'action' => 'view']);
Router::add('^menu/artdocs?$', ['controller' => 'Artdocs', 'action' => 'view']);
Router::add('^menu/admission?$', ['controller' => 'Admission', 'action' => 'view']);
Router::add('^menu/standarts?$', ['controller' => 'Standarts', 'action' => 'view']);
Router::add('^menu/generalbegin?$', ['controller' => 'Generalbegin', 'action' => 'view']);
Router::add('^menu/generalmain?$', ['controller' => 'Generalmain', 'action' => 'view']);
Router::add('^menu/generalmiddle?$', ['controller' => 'Generalmiddle', 'action' => 'view']);
Router::add('^menu/curriculum?$', ['controller' => 'Curriculum', 'action' => 'view']);
Router::add('^menu/callschedule?$', ['controller' => 'Callschedule', 'action' => 'view']);
Router::add('^menu/lessonschedule?$', ['controller' => 'Lessonschedule', 'action' => 'view']);

// Правила по умолчанию для административной части
Router::add('^admin$', ['controller' => 'Main', 'action' => 'index', 'prefix' => 'admin']);
Router::add('^admin/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['prefix' => 'admin']);

// Правила по умолчанию для клиентской части
Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');

