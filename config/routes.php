<?php

use blrw\Router;

Router::add('^admin/?$', ['controller' => 'Main', 'action' => 'index', 'admin_prefix' => 'admin']);

Router::add('^admin/(?P<controllers>[a-z-]+)/?(?P<action>[a-z-]+)/?$', ['admin_prefix' => 'admin']);

Router::add('^$', ['controller' => 'Main', 'action' => 'index']);

Router::add('^(?P<controllers>[a-z-]+)/(?P<action>[a-z-]+)/?$');
