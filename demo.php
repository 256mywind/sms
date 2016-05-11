<?php
include "TopSdk.php";
date_default_timezone_set('Asia/Shanghai');

$appkey = '23354528';
$secret = 'e740ca6ca069ee03bf2f53ac767306d6'; 
$c = new TopClient;
$c->appkey = $appkey;
$c->secretKey = $secret;
$c->format  = 'json';
$req = new AlibabaAliqinFcSmsNumSendRequest;
$req->setExtend("123456");
$req->setSmsType("normal");
$req->setSmsFreeSignName("注册验证");
$req->setSmsParam("{\"code\":\"1234\",\"product\":\"阿里健\"}");
$req->setRecNum("13808172540");
$req->setSmsTemplateCode("SMS_8295464");
$resp = $c->execute($req);
print_r($resp);
/**
 * 
https://api.alidayu.com/doc2/apiDetail?spm=a3142.7791109.1.19.deHdVv&apiId=25450

App Key: 23354528 
App Secret: e740ca6ca069ee03bf2f53ac767306d6

SDK：
短信用于测试的签名和模板暂不可用，先选用以下系统自带模板
签名：注册验证||身份验证||登录验证||阿里健

模板名称: 身份验证验证码
模板ID: SMS_8295464
*模板内容:
验证码${code}，您正在进行${product}身份验证，打死不要告诉别人哦！

模板名称: 修改密码验证码
模板ID: SMS_8295458
*模板内容:
验证码${code}，您正在尝试修改${product}登录密码，请妥善保管账户信息。
 */