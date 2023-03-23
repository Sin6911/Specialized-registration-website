<!-- day la nguoi dan duong trong trang web -->
<?php
$routes = [
  '/' => [
    'controller' => 'HomeController',
    'action' => 'index'
  ],
  'about' => [
    'controller' => 'HomeController',
    'action' => 'about'
  ],
  'dangky' => [
    'controller' => 'NganhHocController',
    'action' => 'index',
   // 'middleware' => 'auth'
  ],
  'danhsach' => [
    'controller' => 'NganhHocController',
    //'middleware' => 'auth',
    'action' => 'getDanhSachs'
    
  ],
  'edit' => [
    'controller' => 'NganhHocController',
    'action' => 'edit',
    //'middleware' => 'auth'
  ],
  'add' => [
    'controller' => 'NganhHocController',
    'action' => 'add',
    //'middleware' => 'auth'
  ],
  'delete' => [
    'controller' => 'NganhHocController',
    'action' => 'delete',
    //'middleware' => 'auth'
  ],
  'update' => [
    'controller' => 'NganhHocController',
    'action' => 'update',
    //'middleware' => 'auth'
  ],
  'login' => [

    'controller' => 'AccountController',
    'action' => 'login'

  ],
  'register' => [

    'controller' => 'AccountController',
    'action' => 'register'

  ],
  'logout' => [

    'controller' => 'AccountController',
    'action' => 'logout'
  ]
];
?>