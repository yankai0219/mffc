<?php
use NoahBuscher\Macaw\Macaw;

Macaw::get('fuck', function() {
    echo '成功!';
});
//Macaw::get('index', function() {
//    echo '成功!';
//});
Macaw::get('index', 'HomeController@home');

Macaw::$error_callback = function() {

      throw new Exception("路由无匹配项 404 Not Found");

};
Macaw::dispatch();
