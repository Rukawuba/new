
<?php
 //initialize session
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, "https://www.youtube.com/watch?v=8D05ZSmWTrQ");
 curl_exec($ch);
 curl_close($ch);
?>
