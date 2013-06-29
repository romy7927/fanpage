<!--?php require 'facebook.php'; $facebook = new Facebook(array( 'appId' =--> '533510140049494',
'secret' =&gt; '64e3381be7e59a9c15b9e0229f11370c',
'cookie' =&gt; true
));$signed_request = $facebook-&gt;getSignedRequest();
$like_status = $signed_request["page"]["liked"];
?&gt;

YOUR PAGE TITLE HERE
&nbsp;

<!--?php if ($like_status) { ?-->
FAN CONTENT GOES HERE
<!--?php } else { ?-->
NON-FAN CONTENT GOES HERE
<!--?php } ?-->
