<?php
@include('db.php');
$content = '
<h2>Create A New extcron Request</h2>
<p>Note: This service is for <a href="http://www.friendica.com/">Friendica</a> installations only. You must be the administrator of the Friendica service, or have permission to request this service for the Friendica installation. All information will be manually reviewed.</p>


<form method="post" action="doverify.php">

<div style="width:650px;">
<div style="margin:3px;padding:3px;padding-left:20px;background-color:#eee;border:1px dashed #ccc;">
<p><strong>Enter your Friendica profile address:</strong><br /><em>Example: https://example.com/profile/username</em></p>
<input type="text" name="q[profile_uri]" size="60" value="" /> 
<p>&nbsp;</p>
</div>
<div style="margin:3px;padding:3px;padding-left:20px;background-color:#eee;border:1px dashed #ccc;">
<p><strong>Desired Frequency</strong></p>
<select name="q[frequency]"><option>5 Minutes</option><option>10 Minutes</option><option>20 Minutes</option><option>30 Minutes</option><option>60 Minutes</option><option>Cancel Previous Request</option></select>
<p>&nbsp;</p>
</div>
</div>

<input type="submit" name="boo" value="Submit This Information For Review" />
</form>

<p>Note: We will determine your extcron URI from your profile URI.</p>


';
$menu = '
<ul>
	<li><a href="/index.php">Cancel - Return Home</a></li>
</ul>
';

echo output($menu,$content,$layout);
$m->close();
exit();

