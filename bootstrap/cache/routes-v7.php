<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/livewire.js' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ST4h0D6IJYD96As4',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/livewire.min.js.map' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::n04lV8lTrVMC44fX',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/upload-file' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.upload-file',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WbNHRuYkoYdLmHNv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home-page',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/example-page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pGxeJEdAw5U94E30',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/example-auth' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mHf9rRizbWThdJ9O',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/example-frontend' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rAco3zDPMzrGwKB4',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/login_handler' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.login_handler',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/forgot-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.forgot-password',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/send-password-reset-link' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.send-password-reset-link',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reset-password-handler' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.reset-password-handler',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/logout_handler' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.logout_handler',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.profile',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/change-profile-picture' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.change-profile-picture',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/change-logo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.change-logo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/change-favicon' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.change-favicon',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/manage-categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.manage-categories.cats-subcats-list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/manage-categories/add-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.manage-categories.add-category',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/manage-categories/store-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.manage-categories.store-category',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/manage-categories/edit-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.manage-categories.edit-category',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/manage-categories/update-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.manage-categories.update-category',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/manage-categories/add-subcategory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.manage-categories.add-subcategory',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/manage-categories/store-subcategory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.manage-categories.store-subcategory',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/manage-categories/edit-subcategory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.manage-categories.edit-subcategory',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/manage-categories/update-subcategory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.manage-categories.update-subcategory',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/client' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZjvAGQnMD9OYLs2K',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'seller.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/login-handler' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'seller.login-handler',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'seller.register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'seller.create',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/register-success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'seller.register-success',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/forgot-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'seller.forgot-password',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/send-password-reset-link' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'seller.send-password-reset-link',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/reset-password-handler' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'seller.reset-password-handler',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'seller.home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'seller.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'seller.profile',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/change-profile-picture' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'seller.change-profile-picture',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/shop-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'seller.shop-settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/shop-setup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'seller.shop-setup',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/product/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'seller.product.all-products',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/product/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'seller.product.add-product',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/product/get-product-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'seller.product.get-product-category',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/product/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'seller.product.create-product',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/product/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'seller.product.edit-product',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/product/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'seller.product.update-product',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/product/upload-images' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'seller.product.upload-images',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/product/get-product-images' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'seller.product.get-product-images',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/product/delete-product-image' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'seller.product.delete-product-image',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/product/delete-product' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'seller.product.delete-product',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/livewire/preview\\-file/([^/]++)(*:39)|/admin/password/reset/([^/]++)(*:76)|/seller/(?|account/verify/([^/]++)(*:117)|password/reset/([^/]++)(*:148)))/?$}sDu',
    ),
    3 => 
    array (
      39 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.preview-file',
          ),
          1 => 
          array (
            0 => 'filename',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      76 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.reset-password',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      117 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'seller.verify',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      148 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'seller.reset-password',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/update',
      'action' => 
      array (
        'uses' => 'Livewire\\Mechanisms\\HandleRequests\\HandleRequests@handleUpdate',
        'controller' => 'Livewire\\Mechanisms\\HandleRequests\\HandleRequests@handleUpdate',
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'livewire.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ST4h0D6IJYD96As4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.js',
      'action' => 
      array (
        'uses' => 'Livewire\\Mechanisms\\FrontendAssets\\FrontendAssets@returnJavaScriptAsFile',
        'controller' => 'Livewire\\Mechanisms\\FrontendAssets\\FrontendAssets@returnJavaScriptAsFile',
        'as' => 'generated::ST4h0D6IJYD96As4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::n04lV8lTrVMC44fX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.min.js.map',
      'action' => 
      array (
        'uses' => 'Livewire\\Mechanisms\\FrontendAssets\\FrontendAssets@maps',
        'controller' => 'Livewire\\Mechanisms\\FrontendAssets\\FrontendAssets@maps',
        'as' => 'generated::n04lV8lTrVMC44fX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.upload-file' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/upload-file',
      'action' => 
      array (
        'uses' => 'Livewire\\Features\\SupportFileUploads\\FileUploadController@handle',
        'controller' => 'Livewire\\Features\\SupportFileUploads\\FileUploadController@handle',
        'as' => 'livewire.upload-file',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.preview-file' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/preview-file/{filename}',
      'action' => 
      array (
        'uses' => 'Livewire\\Features\\SupportFileUploads\\FilePreviewController@handle',
        'controller' => 'Livewire\\Features\\SupportFileUploads\\FilePreviewController@handle',
        'as' => 'livewire.preview-file',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WbNHRuYkoYdLmHNv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007400000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::WbNHRuYkoYdLmHNv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'home-page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontEndController@homePage',
        'controller' => 'App\\Http\\Controllers\\FrontEndController@homePage',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'home-page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pGxeJEdAw5U94E30' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'example-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::pGxeJEdAw5U94E30',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'example-page',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mHf9rRizbWThdJ9O' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'example-auth',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::mHf9rRizbWThdJ9O',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'example-auth',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rAco3zDPMzrGwKB4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'example-frontend',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::rAco3zDPMzrGwKB4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'example-frontend',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:admin',
          2 => 'PreventBackHistory',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'as' => 'admin.login',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'back.pages.admin.auth.login',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.login_handler' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/login_handler',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:admin',
          2 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@loginHandler',
        'controller' => 'App\\Http\\Controllers\\AdminController@loginHandler',
        'as' => 'admin.login_handler',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.forgot-password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:admin',
          2 => 'PreventBackHistory',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'as' => 'admin.forgot-password',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'back.pages.admin.auth.forgot-password',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.send-password-reset-link' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/send-password-reset-link',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:admin',
          2 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@sendPasswordResetLink',
        'controller' => 'App\\Http\\Controllers\\AdminController@sendPasswordResetLink',
        'as' => 'admin.send-password-reset-link',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.reset-password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:admin',
          2 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@resetPassword',
        'controller' => 'App\\Http\\Controllers\\AdminController@resetPassword',
        'as' => 'admin.reset-password',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.reset-password-handler' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/reset-password-handler',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:admin',
          2 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@resetPasswordHandler',
        'controller' => 'App\\Http\\Controllers\\AdminController@resetPasswordHandler',
        'as' => 'admin.reset-password-handler',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'PreventBackHistory',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'as' => 'admin.home',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'back.pages.admin.home',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.logout_handler' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/logout_handler',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@logoutHandler',
        'controller' => 'App\\Http\\Controllers\\AdminController@logoutHandler',
        'as' => 'admin.logout_handler',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@profileView',
        'controller' => 'App\\Http\\Controllers\\AdminController@profileView',
        'as' => 'admin.profile',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.change-profile-picture' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/change-profile-picture',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@changeProfilePicture',
        'controller' => 'App\\Http\\Controllers\\AdminController@changeProfilePicture',
        'as' => 'admin.change-profile-picture',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'PreventBackHistory',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'as' => 'admin.settings',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'back.pages.settings',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.change-logo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/change-logo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@changeLogo',
        'controller' => 'App\\Http\\Controllers\\AdminController@changeLogo',
        'as' => 'admin.change-logo',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.change-favicon' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/change-favicon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@changeFavicon',
        'controller' => 'App\\Http\\Controllers\\AdminController@changeFavicon',
        'as' => 'admin.change-favicon',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.manage-categories.cats-subcats-list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/manage-categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoriesController@catSubcatList',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoriesController@catSubcatList',
        'as' => 'admin.manage-categories.cats-subcats-list',
        'namespace' => NULL,
        'prefix' => 'admin/manage-categories',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.manage-categories.add-category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/manage-categories/add-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoriesController@addCategory',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoriesController@addCategory',
        'as' => 'admin.manage-categories.add-category',
        'namespace' => NULL,
        'prefix' => 'admin/manage-categories',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.manage-categories.store-category' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/manage-categories/store-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoriesController@storeCategory',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoriesController@storeCategory',
        'as' => 'admin.manage-categories.store-category',
        'namespace' => NULL,
        'prefix' => 'admin/manage-categories',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.manage-categories.edit-category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/manage-categories/edit-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoriesController@editCategory',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoriesController@editCategory',
        'as' => 'admin.manage-categories.edit-category',
        'namespace' => NULL,
        'prefix' => 'admin/manage-categories',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.manage-categories.update-category' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/manage-categories/update-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoriesController@updateCategory',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoriesController@updateCategory',
        'as' => 'admin.manage-categories.update-category',
        'namespace' => NULL,
        'prefix' => 'admin/manage-categories',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.manage-categories.add-subcategory' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/manage-categories/add-subcategory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoriesController@addSubCategory',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoriesController@addSubCategory',
        'as' => 'admin.manage-categories.add-subcategory',
        'namespace' => NULL,
        'prefix' => 'admin/manage-categories',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.manage-categories.store-subcategory' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/manage-categories/store-subcategory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoriesController@storeSubCategory',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoriesController@storeSubCategory',
        'as' => 'admin.manage-categories.store-subcategory',
        'namespace' => NULL,
        'prefix' => 'admin/manage-categories',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.manage-categories.edit-subcategory' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/manage-categories/edit-subcategory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoriesController@editSubCategory',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoriesController@editSubCategory',
        'as' => 'admin.manage-categories.edit-subcategory',
        'namespace' => NULL,
        'prefix' => 'admin/manage-categories',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.manage-categories.update-subcategory' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/manage-categories/update-subcategory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoriesController@updateSubCategory',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoriesController@updateSubCategory',
        'as' => 'admin.manage-categories.update-subcategory',
        'namespace' => NULL,
        'prefix' => 'admin/manage-categories',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZjvAGQnMD9OYLs2K' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:42:"function(){
    return \'hello client\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007460000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ZjvAGQnMD9OYLs2K',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'seller.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:seller',
          2 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\SellerController@login',
        'controller' => 'App\\Http\\Controllers\\Seller\\SellerController@login',
        'as' => 'seller.login',
        'namespace' => NULL,
        'prefix' => '/seller',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'seller.login-handler' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'seller/login-handler',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:seller',
          2 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\SellerController@loginHandler',
        'controller' => 'App\\Http\\Controllers\\Seller\\SellerController@loginHandler',
        'as' => 'seller.login-handler',
        'namespace' => NULL,
        'prefix' => '/seller',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'seller.register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:seller',
          2 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\SellerController@register',
        'controller' => 'App\\Http\\Controllers\\Seller\\SellerController@register',
        'as' => 'seller.register',
        'namespace' => NULL,
        'prefix' => '/seller',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'seller.create' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'seller/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:seller',
          2 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\SellerController@createSeller',
        'controller' => 'App\\Http\\Controllers\\Seller\\SellerController@createSeller',
        'as' => 'seller.create',
        'namespace' => NULL,
        'prefix' => '/seller',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'seller.verify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/account/verify/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:seller',
          2 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\SellerController@verifyAccount',
        'controller' => 'App\\Http\\Controllers\\Seller\\SellerController@verifyAccount',
        'as' => 'seller.verify',
        'namespace' => NULL,
        'prefix' => '/seller',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'seller.register-success' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/register-success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:seller',
          2 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\SellerController@registerSuccess',
        'controller' => 'App\\Http\\Controllers\\Seller\\SellerController@registerSuccess',
        'as' => 'seller.register-success',
        'namespace' => NULL,
        'prefix' => '/seller',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'seller.forgot-password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:seller',
          2 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\SellerController@forgotPassword',
        'controller' => 'App\\Http\\Controllers\\Seller\\SellerController@forgotPassword',
        'as' => 'seller.forgot-password',
        'namespace' => NULL,
        'prefix' => '/seller',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'seller.send-password-reset-link' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'seller/send-password-reset-link',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:seller',
          2 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\SellerController@sendPasswordResetLink',
        'controller' => 'App\\Http\\Controllers\\Seller\\SellerController@sendPasswordResetLink',
        'as' => 'seller.send-password-reset-link',
        'namespace' => NULL,
        'prefix' => '/seller',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'seller.reset-password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:seller',
          2 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\SellerController@showResetForm',
        'controller' => 'App\\Http\\Controllers\\Seller\\SellerController@showResetForm',
        'as' => 'seller.reset-password',
        'namespace' => NULL,
        'prefix' => '/seller',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'seller.reset-password-handler' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'seller/reset-password-handler',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:seller',
          2 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\SellerController@resetPasswordHandler',
        'controller' => 'App\\Http\\Controllers\\Seller\\SellerController@resetPasswordHandler',
        'as' => 'seller.reset-password-handler',
        'namespace' => NULL,
        'prefix' => '/seller',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'seller.home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:seller',
          2 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\SellerController@home',
        'controller' => 'App\\Http\\Controllers\\Seller\\SellerController@home',
        'as' => 'seller.home',
        'namespace' => NULL,
        'prefix' => '/seller',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'seller.logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'seller/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:seller',
          2 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\SellerController@logoutHandler',
        'controller' => 'App\\Http\\Controllers\\Seller\\SellerController@logoutHandler',
        'as' => 'seller.logout',
        'namespace' => NULL,
        'prefix' => '/seller',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'seller.profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:seller',
          2 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\SellerController@profileView',
        'controller' => 'App\\Http\\Controllers\\Seller\\SellerController@profileView',
        'as' => 'seller.profile',
        'namespace' => NULL,
        'prefix' => '/seller',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'seller.change-profile-picture' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'seller/change-profile-picture',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:seller',
          2 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\SellerController@changeProfilePicture',
        'controller' => 'App\\Http\\Controllers\\Seller\\SellerController@changeProfilePicture',
        'as' => 'seller.change-profile-picture',
        'namespace' => NULL,
        'prefix' => '/seller',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'seller.shop-settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/shop-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:seller',
          2 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\SellerController@shopSettings',
        'controller' => 'App\\Http\\Controllers\\Seller\\SellerController@shopSettings',
        'as' => 'seller.shop-settings',
        'namespace' => NULL,
        'prefix' => '/seller',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'seller.shop-setup' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'seller/shop-setup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:seller',
          2 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\SellerController@shopSetup',
        'controller' => 'App\\Http\\Controllers\\Seller\\SellerController@shopSetup',
        'as' => 'seller.shop-setup',
        'namespace' => NULL,
        'prefix' => '/seller',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'seller.product.all-products' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/product/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:seller',
          2 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\ProductController@allProducts',
        'controller' => 'App\\Http\\Controllers\\Seller\\ProductController@allProducts',
        'as' => 'seller.product.all-products',
        'namespace' => NULL,
        'prefix' => 'seller/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'seller.product.add-product' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/product/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:seller',
          2 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\ProductController@addProduct',
        'controller' => 'App\\Http\\Controllers\\Seller\\ProductController@addProduct',
        'as' => 'seller.product.add-product',
        'namespace' => NULL,
        'prefix' => 'seller/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'seller.product.get-product-category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/product/get-product-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:seller',
          2 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\ProductController@getProductCategory',
        'controller' => 'App\\Http\\Controllers\\Seller\\ProductController@getProductCategory',
        'as' => 'seller.product.get-product-category',
        'namespace' => NULL,
        'prefix' => 'seller/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'seller.product.create-product' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'seller/product/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:seller',
          2 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\ProductController@createProduct',
        'controller' => 'App\\Http\\Controllers\\Seller\\ProductController@createProduct',
        'as' => 'seller.product.create-product',
        'namespace' => NULL,
        'prefix' => 'seller/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'seller.product.edit-product' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/product/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:seller',
          2 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\ProductController@editProduct',
        'controller' => 'App\\Http\\Controllers\\Seller\\ProductController@editProduct',
        'as' => 'seller.product.edit-product',
        'namespace' => NULL,
        'prefix' => 'seller/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'seller.product.update-product' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'seller/product/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:seller',
          2 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\ProductController@updateProduct',
        'controller' => 'App\\Http\\Controllers\\Seller\\ProductController@updateProduct',
        'as' => 'seller.product.update-product',
        'namespace' => NULL,
        'prefix' => 'seller/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'seller.product.upload-images' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'seller/product/upload-images',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:seller',
          2 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\ProductController@uploadProductImages',
        'controller' => 'App\\Http\\Controllers\\Seller\\ProductController@uploadProductImages',
        'as' => 'seller.product.upload-images',
        'namespace' => NULL,
        'prefix' => 'seller/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'seller.product.get-product-images' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/product/get-product-images',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:seller',
          2 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\ProductController@getProductImages',
        'controller' => 'App\\Http\\Controllers\\Seller\\ProductController@getProductImages',
        'as' => 'seller.product.get-product-images',
        'namespace' => NULL,
        'prefix' => 'seller/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'seller.product.delete-product-image' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'seller/product/delete-product-image',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:seller',
          2 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\ProductController@deleteProductImage',
        'controller' => 'App\\Http\\Controllers\\Seller\\ProductController@deleteProductImage',
        'as' => 'seller.product.delete-product-image',
        'namespace' => NULL,
        'prefix' => 'seller/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'seller.product.delete-product' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'seller/product/delete-product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:seller',
          2 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\ProductController@deleteProduct',
        'controller' => 'App\\Http\\Controllers\\Seller\\ProductController@deleteProduct',
        'as' => 'seller.product.delete-product',
        'namespace' => NULL,
        'prefix' => 'seller/product',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
