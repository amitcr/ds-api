<?php 
// config/app.php
return [
    'env' => getenv('APP_ENV') ?? 'local',
    'app_logo' => getenv('APP_LOGO') ?? '',
    'stats_sheet_id' => getenv('STATS_SHEET_ID') ?? '',
    'direct_codes' => getenv('DIRECT_CODES') ?? [],
    'mailjet_mini_list_id' => getenv('MAILJET_MINI_LIST_ID') ?? [],
];
