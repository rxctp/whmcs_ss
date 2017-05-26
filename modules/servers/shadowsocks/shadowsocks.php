<?php

define('DSN', 'mysql:host=localhost;dbname=vpn');
define('DB_USER', 'root');
define('DB_PASS', '123456');
define('DB_NAME', 'vpn');
//判断是否 WHMCS 访问
if(!defined("WHMCS")){
  die("This file cannot be accessed directly");
}

function shadowsocks_ConfigOptions(){
  return array(
    '连接端口' => array(
      'Type' => 'text',
      'Description' => 'API 通讯端口'
    ),
    '流量限制' => array(
      'Type' => 'text',
      'Description' => '在 Configoptions 中 traffic 为空时则会启用此处设定'
    ),
    '计费单位' => array(
      'Type' => 'dropdown',
      'Options' => 'MB,GB',
      'Description' => '可选按照 MB 或 GB 作为流量计费单位'
    ),
    '节点列表' => array(
      'Type' => 'textarea',
      'Description' => '格式为：物理地域 | 网协地址 | 别名地址 | 加密方式'
    )
  );
}

function shadowsocks_CreateAccount($params){
  $pid = $params['serviceid'];
  $port = $params['configoption1'];
  $serverip = $params['serverip'];
  $serveraccesshash = $params['serveraccesshash'];
  if(!empty($params['customfields']['password'])){
    $mysql = new PDO(DSN,DB_USER,DB_PASS);
    $adminuser = $mysql->query("SELECT username FROM `tbladmins`")->fetch();
    $adminuser = $adminuser['username'];
    $values["password2"] = $params["customfields"]['password'];
    $results = localAPI("encryptpassword",$values,$adminuser);
    $table = "tblhosting";
    $update = array("password"=>$results['password']);
    $where = array("id"=>$params["serviceid"]);
    update_query($table,$update,$where);
    $password = $params["customfields"]['password'];
  }else{
    $password = $params['password'];
  }
  if(!empty($params['configoptions']['traffic'])){
    $traffic = $params['configoptions']['traffic'];
  }else{
    $traffic = $params['configoption2'];
  }
  if($params['configoption3'] == "GB"){
    $traffic = $traffic * 1024;
  }
  $command = array(
    'action' => 'create',
    'pid' => $pid,
    'password' => $password,
    'traffic' => $traffic
  );
  $curl_create = curl_init();
  curl_setopt($curl_create, CURLOPT_URL, "http://".$serverip.':'.$port.'/shadowsocksapi.php');
  curl_setopt($curl_create, CURLOPT_POST, 1);
  curl_setopt($curl_create, CURLOPT_TIMEOUT, 20);
  curl_setopt($curl_create, CURLOPT_FRESH_CONNECT, 1);
  curl_setopt($curl_create, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($curl_create, CURLOPT_SSL_VERIFYHOST, false);
  curl_setopt($curl_create, CURLOPT_HEADER, 0);
  curl_setopt($curl_create, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curl_create, CURLOPT_POSTFIELDS, $command);
  curl_setopt($curl_create, CURLOPT_USERAGENT, $serveraccesshash);
  $create_data = curl_exec($curl_create);
  curl_close($curl_create);
  $create_data = json_decode($create_data, true);
  if($create_data['status'] != "Error"){
    insert_query("mod_weektraffic",array(
      'id' => $pid,
      'port' => $create_data['result'],
      'last_time' => time()
    ));
    $result = 'success';
  }else{
    $result = $create_data['result'];
  }
  return $result;
  // print_r($data);die();
}

function shadowsocks_SuspendAccount($params){
  $pid = $params['serviceid'];
  $port = $params['configoption1'];
  $serverip = $params['serverip'];
  $serveraccesshash = $params['serveraccesshash'];
  $command = array(
    'action' => 'suspend',
    'pid' => $pid
  );
  $curl_suspend = curl_init();
  curl_setopt($curl_suspend, CURLOPT_URL, "http://".$serverip.':'.$port.'/shadowsocksapi.php');
  curl_setopt($curl_suspend, CURLOPT_POST, 1);
  curl_setopt($curl_suspend, CURLOPT_TIMEOUT, 20);
  curl_setopt($curl_suspend, CURLOPT_FRESH_CONNECT, 1);
  curl_setopt($curl_suspend, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($curl_suspend, CURLOPT_SSL_VERIFYHOST, false);
  curl_setopt($curl_suspend, CURLOPT_HEADER, 0);
  curl_setopt($curl_suspend, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curl_suspend, CURLOPT_POSTFIELDS, $command);
  curl_setopt($curl_suspend, CURLOPT_USERAGENT, $serveraccesshash);
  $suspend_data = curl_exec($curl_suspend);
  curl_close($curl_suspend);
  $suspend_data = json_decode($suspend_data, true);
  if($suspend_data['status'] == "Success"){
    $result = 'success';
  }else{
    $result = $suspend_data['result'];
  }
  return $result;
  // print_r($data);die();
}

function shadowsocks_UnsuspendAccount($params){
  $pid = $params['serviceid'];
  $port = $params['configoption1'];
  $serverip = $params['serverip'];
  $serveraccesshash = $params['serveraccesshash'];
  if(!empty($params['customfields']['password'])){
    $mysql = new PDO(DSN,DB_USER,DB_PASS);
    $adminuser = $mysql->query("SELECT username FROM `tbladmins`")->fetch();
    $adminuser = $adminuser['username'];
    $values["password2"] = $params["customfields"]['password'];
    $results = localAPI("encryptpassword",$values,$adminuser);
    $table = "tblhosting";
    $update = array("password"=>$results['password']);
    $where = array("id"=>$params["serviceid"]);
    update_query($table,$update,$where);
    $password = $params["customfields"]['password'];
  }else{
    $password = $params['password'];
  }
  $command = array(
    'action' => 'unsuspend',
    'pid' => $pid,
    'password' => $password,
  );
  $curl_unspend = curl_init();
  curl_setopt($curl_unspend, CURLOPT_URL, "http://".$serverip.':'.$port.'/shadowsocksapi.php');
  curl_setopt($curl_unspend, CURLOPT_POST, 1);
  curl_setopt($curl_unspend, CURLOPT_TIMEOUT, 20);
  curl_setopt($curl_unspend, CURLOPT_FRESH_CONNECT, 1);
  curl_setopt($curl_unspend, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($curl_unspend, CURLOPT_SSL_VERIFYHOST, false);
  curl_setopt($curl_unspend, CURLOPT_HEADER, 0);
  curl_setopt($curl_unspend, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curl_unspend, CURLOPT_POSTFIELDS, $command);
  curl_setopt($curl_unspend, CURLOPT_USERAGENT, $serveraccesshash);
  $unspend_data = curl_exec($curl_unspend);
  curl_close($curl_unspend);
  $unspend_data = json_decode($unspend_data, true);
  if($unspend_data['status'] == "Success"){
    $result = 'success';
  }else{
    $result = $unspend_data['result'];
  }
  return $result;
  // print_r($data);die();
}

function shadowsocks_TerminateAccount($params){
  $pid = $params['serviceid'];
  $port = $params['configoption1'];
  $serverip = $params['serverip'];
  $serveraccesshash = $params['serveraccesshash'];
  $command = array(
    'action' => 'terminate',
    'pid' => $pid
  );
  $curl_terminate = curl_init();
  curl_setopt($curl_terminate, CURLOPT_URL, "http://".$serverip.':'.$port.'/shadowsocksapi.php');
  curl_setopt($curl_terminate, CURLOPT_POST, 1);
  curl_setopt($curl_terminate, CURLOPT_TIMEOUT, 20);
  curl_setopt($curl_terminate, CURLOPT_FRESH_CONNECT, 1);
  curl_setopt($curl_terminate, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($curl_terminate, CURLOPT_SSL_VERIFYHOST, false);
  curl_setopt($curl_terminate, CURLOPT_HEADER, 0);
  curl_setopt($curl_terminate, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curl_terminate, CURLOPT_POSTFIELDS, $command);
  curl_setopt($curl_terminate, CURLOPT_USERAGENT, $serveraccesshash);
  $terminate_data = curl_exec($curl_terminate);
  curl_close($curl_terminate);
  $terminate_data = json_decode($terminate_data, true);
  if($terminate_data['status'] == "Success"){
    $result = 'success';
  }else{
    $result = $terminate_data['result'];
  }
  return $result;
  // print_r($data);die();
}

function shadowsocks_ChangePackage($params){
  $pid = $params['serviceid'];
  $port = $params['configoption1'];
  $serverip = $params['serverip'];
  $serveraccesshash = $params['serveraccesshash'];
  if(!empty($params['configoptions']['traffic'])){
    $traffic = $params['configoptions']['traffic'];
  }else{
    $traffic = $params['configoption2'];
  }
  if($params['configoption3'] == "GB"){
    $traffic = $traffic * 1024;
  }
  $command = array(
    'action' => 'changepackage',
    'pid' => $pid,
    'traffic' => $traffic
  );
  $curl_changepackage = curl_init();
  curl_setopt($curl_changepackage, CURLOPT_URL, "http://".$serverip.':'.$port.'/shadowsocksapi.php');
  curl_setopt($curl_changepackage, CURLOPT_POST, 1);
  curl_setopt($curl_changepackage, CURLOPT_TIMEOUT, 20);
  curl_setopt($curl_changepackage, CURLOPT_FRESH_CONNECT, 1);
  curl_setopt($curl_changepackage, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($curl_changepackage, CURLOPT_SSL_VERIFYHOST, false);
  curl_setopt($curl_changepackage, CURLOPT_HEADER, 0);
  curl_setopt($curl_changepackage, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curl_changepackage, CURLOPT_POSTFIELDS, $command);
  curl_setopt($curl_changepackage, CURLOPT_USERAGENT, $serveraccesshash);
  $changepackage_data = curl_exec($curl_changepackage);
  curl_close($curl_changepackage);
  $changepackage_data = json_decode($changepackage_data, true);
  if($changepackage_data['status'] == "Success"){
    $result = 'success';
  }else{
    $result = $changepackage_data['result'];
  }
  return $result;
  // print_r($data);die();
}

function shadowsocks_ChangePassword($params){
  $pid = $params['serviceid'];
  $port = $params['configoption1'];
  $serverip = $params['serverip'];
  $serveraccesshash = $params['serveraccesshash'];
  $password = $params['password'];
  $command = array(
    'action' => 'changepassword',
    'pid' => $pid,
    'password' => $password,
  );
  $curl_changepassword = curl_init();
  curl_setopt($curl_changepassword, CURLOPT_URL, "http://".$serverip.':'.$port.'/shadowsocksapi.php');
  curl_setopt($curl_changepassword, CURLOPT_POST, 1);
  curl_setopt($curl_changepassword, CURLOPT_TIMEOUT, 20);
  curl_setopt($curl_changepassword, CURLOPT_FRESH_CONNECT, 1);
  curl_setopt($curl_changepassword, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($curl_changepassword, CURLOPT_SSL_VERIFYHOST, false);
  curl_setopt($curl_changepassword, CURLOPT_HEADER, 0);
  curl_setopt($curl_changepassword, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curl_changepassword, CURLOPT_POSTFIELDS, $command);
  curl_setopt($curl_changepassword, CURLOPT_USERAGENT, $serveraccesshash);
  $changepassword_data = curl_exec($curl_changepassword);
  curl_close($curl_changepassword);
  $changepassword_data = json_decode($changepassword_data, true);
  if($changepassword_data['status'] == "Success"){
    $result = 'success';
  }else{
    $result = $changepassword_data['result'];
  }
  return $result;
  // print_r($data);die();
}

function shadowsocks_reset($params){
  $pid = $params['serviceid'];
  $port = $params['configoption1'];
  $serverip = $params['serverip'];
  $serveraccesshash = $params['serveraccesshash'];
  $command = array(
    'action' => 'reset',
    'pid' => $pid
  );
  $curl_reset = curl_init();
  curl_setopt($curl_reset, CURLOPT_URL, "http://".$serverip.':'.$port.'/shadowsocksapi.php');
  curl_setopt($curl_reset, CURLOPT_POST, 1);
  curl_setopt($curl_reset, CURLOPT_TIMEOUT, 20);
  curl_setopt($curl_reset, CURLOPT_FRESH_CONNECT, 1);
  curl_setopt($curl_reset, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($curl_reset, CURLOPT_SSL_VERIFYHOST, false);
  curl_setopt($curl_reset, CURLOPT_HEADER, 0);
  curl_setopt($curl_reset, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curl_reset, CURLOPT_POSTFIELDS, $command);
  curl_setopt($curl_reset, CURLOPT_USERAGENT, $serveraccesshash);
  $reset_data = curl_exec($curl_reset);
  curl_close($curl_reset);
  $reset_data = json_decode($reset_data, true);
  if($reset_data['status'] == "Success"){
    $result = 'success';
  }else{
    $result = $reset_data['result'];
  }
  return $result;
  // print_r($data);die();
}

function shadowsocks_ClientArea($params){
  $pid = $params['serviceid'];
  $port = $params['configoption1'];
  $node = explode("|",$params['configoption4']);
  $serverip = $params['serverip'];
  $password = $params['password'];
  $serveraccesshash = $params['serveraccesshash'];
  $command = array(
    'action' => 'query',
    'pid' => $pid
  );
  $curl_query = curl_init();
  curl_setopt($curl_query, CURLOPT_URL, "http://".$serverip.':'.$port.'/shadowsocksapi.php');
  curl_setopt($curl_query, CURLOPT_POST, 1);
  curl_setopt($curl_query, CURLOPT_TIMEOUT, 20);
  curl_setopt($curl_query, CURLOPT_FRESH_CONNECT, 1);
  curl_setopt($curl_query, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($curl_query, CURLOPT_SSL_VERIFYHOST, false);
  curl_setopt($curl_query, CURLOPT_HEADER, 0);
  curl_setopt($curl_query, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curl_query, CURLOPT_POSTFIELDS, $command);
  curl_setopt($curl_query, CURLOPT_USERAGENT, $serveraccesshash);
  $query_data = curl_exec($curl_query);
  curl_close($query_data);
  $query_data = json_decode($query_data, true);
  if(!empty($params['configoptions']['traffic'])){
    $traffic = $params['configoptions']['traffic'];
  }else{
    $traffic = $params['configoption2'];
  }
  if($params['configoption3'] == "GB"){
    $traffic = $traffic * 1024;
  }
  $traffic_upload = $query_data['upload'] / 1024;
  $traffic_upload = round($traffic_upload, 2);
  $traffic_download = $query_data['download'] / 1024;
  $traffic_download = round($traffic_download, 2);
  $traffic_free = ($traffic * 1048576 - ($traffic_upload + $traffic_download)) / 1024;
  $traffic_free = round($traffic_free, 2);
  $traffic = $traffic * 1024;
  $last_time = date('H', $query_data['last_time']);
  if($last_time <= "5"){
    $times = "凌晨";
  }elseif($last_time <= "9"){
    $times = "早上";
  }elseif($last_time <= "14"){
    $times = "中午";
  }elseif($last_time <= "18"){
    $times = "下午";
  }elseif($last_time <= "22"){
    $times = "晚上";
  }else{
    $times = "深夜";
  }
  $last_year = date('Y', $query_data['last_time']);
  $last_month = date('m', $query_data['last_time']);
  $last_day = date('d', $query_data['last_time']);
  $last_time = date('H:i', $query_data['last_time']);

  $node_list = '';
  $x=0;$count=count($node)-1;
  while($x <= $count){
    $name = $node[$x];$x++;
    $ipaddr = $node[$x];$x++;
    $cname = $node[$x];$x++;
    $method = $node[$x];$x++;
    $ssqrcode = base64_encode($method.':'.$password.'@'.$ipaddr.':'.$query_data['port']);
    $node_list .= "<tr>
      <td style=\"padding:10px 15px;border-right:1px solid #e9e9e9;border-bottom:1px solid #e9e9e9\">
        {$name}
      </td>
      <td style=\"padding:10px 15px;border-right:1px solid #e9e9e9;border-bottom:1px solid #e9e9e9\">
        {$ipaddr}
      </td>
      <td style=\"padding:10px 15px;border-right:1px solid #e9e9e9;border-bottom:1px solid #e9e9e9\">
        {$cname}
      </td>
      <td style=\"padding:10px 15px;border-right:1px solid #e9e9e9;border-bottom:1px solid #e9e9e9;text-transform:uppercase\">
        {$method}
      </td>
      <td style=\"padding:10px 15px;border-bottom:1px solid #e9e9e9\">
        <a name=\"qrcode\" data-title=\"{$name}\" data-qrcode=\"{$ssqrcode}\" href=\"javascript:;\" style=\"color:#00afd1;text-decoration:none\">查看二维码图片</a>
      </td>
    </tr>";
  }

  $result = array(
    'tabOverviewReplacementTemplate' => 'clientarea',
    'templateVariables' => array(
      'traffic' => $traffic,
      'traffic_upload' => $traffic_upload,
      'traffic_download' => $traffic_download,
      'traffic_free' => $traffic_free,
      'last_year' => $last_year,
      'last_month' => $last_month,
      'last_day' => $last_day,
      'last_time' => $last_time,
      'times' => $times,
      'port' => $query_data['port'],
      'node_list' => $node_list,
      'password' => $password
    ),
  );
  return $result;
}

function shadowsocks_AdminCustomButtonArray(){
  return array(
    '重置' => 'reset'
  );
}
