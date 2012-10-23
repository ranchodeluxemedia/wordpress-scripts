/*
 * Check for the current environment
 */

if ($_SERVER["HTTP_HOST"] === 'dev.example.me') {
  $db_name = '';
  $db_user = '';
  $password = '';
  $db_host = 'localhost';

} else if ($_SERVER["HTTP_HOST"] === 'local') {
  $db_name = '';
  $db_user = '';
  $password = '';
  $db_host = '';
}
