<?php 
// config/app.php
return [
    'env' => getenv('APP_ENV') ?: 'local',
    'app_url' => getenv('APP_URL') ?: 'http://localhost/fourtemperaments/',
    'app_name' => getenv('APP_NAME') ?: 'Four Temperaments',
    'app_logo' => getenv('APP_LOGO') ?: '',
];
