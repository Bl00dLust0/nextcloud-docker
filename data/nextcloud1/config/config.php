<?php
$CONFIG = array (
  'htaccess.RewriteBase' => '/',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'upgrade.disable-web' => true,
  'instanceid' => 'oc7odg1bwrh4',
  'passwordsalt' => 'EECL2QJRU8kv6sIQyqOooeu1QVMwnH',
  'secret' => 'vMCCYDlVW2y7GQB8oGhYdmKLv5M9P++QOiTaeSuXJDGitGc6',
  'trusted_domains' => 
  array (
    0 => 'nextcloud1.anantgadaili.com.np',
  ),

  'objectstore' =>
  array (
    'class' => 'OC\\Files\\ObjectStore\\S3',
    'arguments' =>
    array (
      'bucket' => 'nextcloud-c1.anant',
      'autocreate' => true,
      'key' => '7FYGMHBSFEW8P9K8YJZD',
      'secret' => 'Ogr7Uv9i0c=mPWssE1bw60mflj9d1BNsOYkp=X/m',
      'hostname' => 's3-np1.datahub.com.np',
      'trashbin_retention_obligation' => 'auto, 0',
      'port' => 443,
      'use_ssl' => true,
      'region' => 'us-east1',
      'use_path_style' => true,
    ),
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'mysql',
  'version' => '31.0.7.1',
  'overwrite.cli.url' => 'http://nextcloud1.anantgadaili.com.np',
  'dbname' => 'nextcloud1',
  'dbhost' => 'mysql',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => 'nc1_user',
  'dbpassword' => 'nc1_pass',
  'installed' => true,
);
