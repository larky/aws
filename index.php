
<html>
<body>
<BR><BR><BR>
<center><h3>THECLOUDGOESWILD.COM</H3>
<BR>
<BR>
<iframe src="https://player.vimeo.com/video/141984798" width="500" height="281" frameborder="0"></iframe>
<BR><BR>


<img src="https://s3-ap-southeast-2.amazonaws.com/thecloudgoeswild.com/images/aws_logo.png">
<BR><BR>
NEW SCRIPT 7/04/2016
<?php
$url = "http://169.254.169.254/latest/meta-data/instance-id";
$instance_id = file_get_contents($url);
echo "Instance ID:<b>" . $instance_id .	"</b><br>";
$url = "http://169.254.169.254/latest/meta-data/placement/availability-zone";
$zone =	file_get_contents($url);
echo "AZ: <b>" . $zone ."</b><br><BR>";
?>
</center>
</body>
</html>
