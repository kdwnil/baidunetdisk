<?php
$from_url=$_GET["fr"];
require('./config.php');    
echo '<br><center><div class="col-md-12" role="main"><form action="'.$from_url.'" method="get"><div class="input-group"><textarea class="form-control col-md-12" rows="4" placeholder="您的bduss..." name="bduss"></textarea><span class="input-group-btn"></div><br><button class="btn btn-default" type="submit">点击登录</button></span></div></form></div></center><br><br><div class="col-md-12" role="main"><div class="panel panel-primary"><div class="panel-heading"><h3 class="panel-title">说明</h3></div><div class="panel-body">bduss获取方式:<br>简云<a href="https://bduss.tbsign.cn/index.php/home/site/getbduss?u='.urlencode($siteurl.''.str_replace("index.php","",$_SERVER['PHP_SELF'])).'&uid=1&token='.$token.'">https://bduss.tbsign.cn</a><br>imyfan贴吧云签<a href="https://tool.imyfan.com">https://tool.imyfan.com</a><br><br></div></div>';