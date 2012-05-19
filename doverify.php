<?php
@include('db.php');

$q=$_REQUEST['q'];
$s=$_SERVER;
$ip=$_SERVER['REMOTE_ADDR'];

$check_uri = escapeshellarg($q['profile_uri']);

$try = $c->tries;

$t=`HEAD $check_uri`;

$ok=false;
if (strstr($t,'200 OK')) $ok=true;

$save = array('ok'=>$ok,'q'=>$q,'s'=>$s,'t'=>$t,'ip'=>$ip);
$try->save($save);

if ($ok) {
	$content = '
<h2>OK Success</h2>
<p>Your request has been queued and will be reviewed and processed as soon as possible. Thank you.</p>
';
	$menu = '
<ul>
	<li><a href="/index.php">Return Home</a></li>
	<li><a href="http://www.friendica.com/">Visit Friendica on the WWW</a></li>
</ul>
';

} else {
	$content = '
<h2>OOpS!</h2>
<p>We could not process your request. Your profile URI does not appear to be correct. If you require assistance, please <a href="https://www.uzimac.com/profile/waitman">Contact Technical Support.</a></p>
';
	$menu = '
<ul>
	<li><a href="/index.php">Cancel - Return Home</a></li>
	<li><a href="/newaccount.php">Try Again</a></li>
	<li><a href="https://www.uzimac.com/profile/waitman">Contact Technical Support</a></li>
</ul>
';
}

echo output($menu,$content,$layout);
$m->close();
exit();

