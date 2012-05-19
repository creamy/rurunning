<?php

@include('db.php');

$content = '<h2>extcron Cron Job Service</h2>
<p>If you have submitted a previous request and wish to make a change, simply use the &quot;Create New Request&quot; form.</p>
<p>To cancel service for a previous request, use the &quot;Create New Request&quot; form and select &quot;Cancel Previous Request&quot; in the &quot;Frequency&quot; drop-down options.</p>

';
$menu = '
<ul>
	<li><a href="/newaccount.php">Create New Request</a></li>
</ul>
';

echo output($menu,$content,$layout);
$m->close();
exit();


