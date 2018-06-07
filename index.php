<?php
header("Content-Type:text/html;charset=utf-8");
require_once("./functions.php");
$flag = sendMail('908923972@qq.com','古美峰发送邮件',
    '<a href="http://zhongzijidi.net/" style="color: aquamarine">（密）种子搜索网站</a><br/>');
if($flag){
    echo "发送邮件成功！";
}else{
    echo "发送邮件失败！";
}
?>