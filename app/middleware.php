<?php

use Slim\App;

return function(App $app) {
  $setting->getContainer()->get('settings');

  $app->addErrorMiddleware(
    $setting['displayErrorDetails'],
    $setting['logErrorDetails'],
    $setting['logErrors'],
  );
};