<?php
//加载依赖
require_once 'configuration.php';
define('DSN', 'mysql:host=localhost;dbname=vpn');
define('DB_USER', 'root');
define('DB_PASS', '123456');
define('DB_NAME', 'vpn');
//获取端口号i
function shadowsocks_port(){
try{
 $pdo=new PDO(DSN,DB_USER,DB_PASS);
}catch(PDOException $e){
 return '数据库连接失败'.$e->getMessage();
} 
 $mysql = new PDO(DSN,DB_USER,DB_PASS);
  if(!$mysql){
    $result = array(
      'status' => 'Error',
      'result' => 'Unable to connect to database.'
    );
  }else{
    $port = $mysql->query("SELECT port FROM user order by port desc limit 1");
 $port = $port->fetch();
   $port = $port['port'] + 1;
    if($port > 65535){
      $result = "Error";
    }else{
      $result = $port;
    }
  }
  return $result;
}

//新建账户，传入密码和流量值(MB)
function shadowsocks_create($pid,$passwd,$traffic){
  if(empty($pid)){
    $result = array(
      'status' => 'Error',
      'result' => 'Undefined product id value.'
    );
  }elseif(empty($passwd)){
    $result = array(
      'status' => 'Error',
      'result' => 'Undefined password value.'
    );
  }elseif(0){
    $result = array(
      'status' => 'Error',
      'result' => 'Undefined traffic value.'
    );
  }else{
    if(shadowsocks_port() != "Error"){
$mysql = new PDO(DSN,DB_USER,DB_PASS);      
if(!$mysql){
        $result = array(
          'status' => 'Error',
          'result' => 'Unable to connect to database.'
        );
      }else{
$pid =3001;
 $check = $mysql->query("SELECT * FROM user WHERE port='".$pid."'")->fetch();
return $check;       
 $check = mysql_fetch_assoc($check);
        if($check != ""){
          $result = array(
            'status' => 'Error',
            'result' => 'Account already exists.'
          );
        }else{
$traffic = 1;
          $traffic = $traffic * 1048576; //按照 GB 为流量单位
          $create = mysql_query("INSERT INTO user(pid,passwd,port,transfer_enable) VALUES ('".$pid."','".$passwd."','".$port."','".$traffic."')");
          if(!$create){
            $result = array(
              'status' => 'Error',
              'result' => 'MySQL query failed.'
            );
          }else{
            $result = array(
              'status' => 'Success',
              'result' => $port
            );
          }
        }
      }
    }else{
      $result = array(
        'status' => 'Error',
        'result' => 'Port exceeds the maximum value.'
      );
    }
  }
$file = 'log.txt';
$content = json_encode($content);
file_put_contents($file, $content,FILE_APPEND);
  return $result;
}

//暂停账户，传入端口号
function shadowsocks_suspend($pid){
  if(empty($pid)){
    $result = array(
      'status' => 'Error',
      'result' => 'Undefined product id value.'
    );
  }else{
    $mysql =  mysql_connect(DB_HOST, DB_USER, DB_PASS);
    if(!$mysql){
      $result = array(
        'status' => 'Error',
        'result' => 'Unable to connect to database.'
      );
    }else{
      mysql_select_db(DB_NAME, $mysql);
      $check = mysql_query("SELECT * FROM user WHERE pid='".$pid."'");
      $check = mysql_fetch_assoc($check);
      if($check == ""){
        $result = array(
          'status' => 'Error',
          'result' => 'No data found.'
        );
      }else{
        $passwd = md5(time().rand(0,100));
        $suspend = mysql_query("UPDATE user SET passwd='".$passwd."' WHERE pid='".$pid."'");
        if(!$suspend){
          $result = array(
            'status' => 'Error',
            'result' => 'MySQL query failed.'
          );
        }else{
          $result = array(
            'status' => 'Success',
            'result' => 'Account successfully suspend.'
          );
        }
      }
    }
  }
  return $result;
}

//解除暂停，传入密码和端口号
function shadowsocks_unsuspend($pid,$passwd){
  if(empty($pid)){
    $result = array(
      'status' => 'Error',
      'result' => 'Undefined product id value.'
    );
  }elseif(empty($passwd)){
    $result = array(
      'status' => 'Error',
      'result' => 'Undefined password value.'
    );
  }else{
    $mysql =  mysql_connect(DB_HOST, DB_USER, DB_PASS);
    if(!$mysql){
      $result = array(
        'status' => 'Error',
        'result' => 'Unable to connect to database.'
      );
    }else{
      mysql_select_db(DB_NAME, $mysql);
      $check = mysql_query("SELECT * FROM user WHERE pid='".$pid."'");
      $check = mysql_fetch_assoc($check);
      if($check == ""){
        $result = array(
          'status' => 'Error',
          'result' => 'No data found.'
        );
      }else{
        $unsuspend = mysql_query("UPDATE user SET passwd='".$passwd."' WHERE pid='".$pid."'");
        if(!$unsuspend){
          $result = array(
            'status' => 'Error',
            'result' => 'MySQL query failed.'
          );
        }else{
          $result = array(
            'status' => 'Success',
            'result' => 'Account successfully unsuspend.'
          );
        }
      }
    }
  }
  return $result;
}

//终止账户，传入端口号
function shadowsocks_terminate($pid){
  if(empty($pid)){
    $result = array(
      'status' => 'Error',
      'result' => 'Undefined product id value.'
    );
  }else{
    $mysql =  mysql_connect(DB_HOST, DB_USER, DB_PASS);
    if(!$mysql){
      $result = array(
        'status' => 'Error',
        'result' => 'Unable to connect to database.'
      );
    }else{
      mysql_select_db(DB_NAME, $mysql);
      $check = mysql_query("SELECT * FROM user WHERE pid='".$pid."'");
      $check = mysql_fetch_assoc($check);
      if($check == ""){
        $result = array(
          'status' => 'Error',
          'result' => 'No data found.'
        );
      }else{
        $terminate = mysql_query("DELETE FROM user WHERE pid='".$pid."'");
        if(!$terminate){
          $result = array(
            'status' => 'Error',
            'result' => 'MySQL query failed.'
          );
        }else{
          $result = array(
            'status' => 'Success',
            'result' => 'Account successfully terminated.'
          );
        }
      }
    }
  }
  return $result;
}

//修改套餐，传入流量值和端口号(MB)
function shadowsocks_changepackage($pid,$traffic){
  if(empty($pid)){
    $result = array(
      'status' => 'Error',
      'result' => 'Undefined product id value.'
    );
  }elseif(empty($traffic)){
    $result = array(
      'status' => 'Error',
      'result' => 'Undefined traffic value.'
    );
  }else{
    $mysql =  mysql_connect(DB_HOST, DB_USER, DB_PASS);
    if(!$mysql){
      $result = array(
        'status' => 'Error',
        'result' => 'Unable to connect to database.'
      );
    }else{
      $traffic = $traffic * 1048576;
      mysql_select_db(DB_NAME, $mysql);
      $check = mysql_query("SELECT * FROM user WHERE pid='".$pid."'");
      $check = mysql_fetch_assoc($check);
      if($check == ""){
        $result = array(
          'status' => 'Error',
          'result' => 'No data found.'
        );
      }else{
        $changepackage = mysql_query("UPDATE user SET transfer_enable='".$traffic."' WHERE pid='".$pid."'");
        if(!$changepackage){
          $result = array(
            'status' => 'Error',
            'result' => 'MySQL query failed.'
          );
        }else{
          $result = array(
            'status' => 'Success',
            'result' => 'Account successfully modified.'
          );
        }
      }
    }
  }
  return $result;
}

//更改密码，传入密码和端口号
function shadowsocks_changepassword($pid,$passwd){
  if(empty($pid)){
    $result = array(
      'status' => 'Error',
      'result' => 'Undefined product id value.'
    );
  }elseif(empty($passwd)){
    $result = array(
      'status' => 'Error',
      'result' => 'Undefined password value.'
    );
  }else{
    $mysql =  mysql_connect(DB_HOST, DB_USER, DB_PASS);
    if(!$mysql){
      $result = array(
        'status' => 'Error',
        'result' => 'Unable to connect to database.'
      );
    }else{
      mysql_select_db(DB_NAME, $mysql);
      $check = mysql_query("SELECT * FROM user WHERE pid='".$pid."'");
      $check = mysql_fetch_assoc($check);
      if($check == ""){
        $result = array(
          'status' => 'Error',
          'result' => 'No data found.'
        );
      }else{
        $changepassword = mysql_query("UPDATE user SET passwd='".$passwd."' WHERE pid='".$pid."'");
        if(!$changepassword){
          $result = array(
            'status' => 'Error',
            'result' => 'MySQL query failed.'
          );
        }else{
          $result = array(
            'status' => 'Success',
            'result' => 'Password reset complete.'
          );
        }
      }
    }
  }
  return $result;
}

//重置流量，传入端口号
function shadowsocks_reset($pid){
  if(empty($pid)){
    $result = array(
      'status' => 'Error',
      'result' => 'Undefined product id value.'
    );
  }else{
    $mysql =  mysql_connect(DB_HOST, DB_USER, DB_PASS);
    if(!$mysql){
      $result = array(
        'status' => 'Error',
        'result' => 'Unable to connect to database.'
      );
    }else{
      mysql_select_db(DB_NAME, $mysql);
      $check = mysql_query("SELECT * FROM user WHERE pid='".$pid."'");
      $check = mysql_fetch_array($check);
      if($check == ""){
        $result = array(
          'status' => 'Error',
          'result' => 'No data found.'
        );
      }else{
        $reset = mysql_query("UPDATE user SET u='0',d='0' WHERE pid='".$pid."'");
        if(!$reset){
          $result = array(
            'status' => 'Error',
            'result' => 'MySQL query failed.'
          );
        }else{
          $result = array(
            'status' => 'Success',
            'result' => 'Account Reset success.'
          );
        }
      }
    }
  }
  return $result;
}

//查询账户，传入端口号
function shadowsocks_query($pid){
  if(empty($pid)){
    $result = array(
      'status' => 'Error',
      'result' => 'Undefined product id value.'
    );
  }else{
    $mysql =  mysql_connect(DB_HOST, DB_USER, DB_PASS);
    if(!$mysql){
      $result = array(
        'status' => 'Error',
        'result' => 'Unable to connect to database.'
      );
    }else{
      mysql_select_db(DB_NAME, $mysql);
      $query = mysql_query("SELECT * FROM user WHERE pid='".$pid."'");
      $query = mysql_fetch_assoc($query);
      if($query == ""){
        $result = array(
          'status' => 'Error',
          'result' => 'No data found.'
        );
      }else{
        $result = array(
          'port' => $query['port'],
          'upload' => $query['u'],
          'download' => $query['d'],
          'last_time' => $query['t']
        );
      }
    }
  }
  return $result;
}
