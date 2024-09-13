<?php
highlight_file(__FILE__);
if(isset($_GET['jiangsir']))
{
  $url=$_GET['jiangsir'];
  if(preg_match('/bash|nc|wget|ping|ls|cat|more|less|phpinfo|base64|echo|php|python|mv|cp|la|\-|\*|\"|\>|\<|\%|\$/i',$url))
  {
    echo "nonononoononono";
  }
  else
  {
    echo "jiangsir will say go back home ....";
    exec($url);
  }
} 