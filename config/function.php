<?php
//加载依赖
require_once 'configuration.php';
define('DSN', 'mysql:host=localhost;dbname=vpn');
define('DB_USER', 'root');
define('DB_PASS', '123456');
define('DB_NAME', 'vpn');

//获取端口号
function shadowsocks_port(){
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
        $port = shadowsocks_port();
        $mysql = new PDO(DSN,DB_USER,DB_PASS);
        $check = $mysql->query("SELECT * FROM user WHERE port='".$pid."'")->fetch();
       if($check != false){
          $result = array(
            'status' => 'Error',
            'result' => 'Account already exists.'
          );
        }else{
          $traffic = 512;
          $traffic = $traffic * 1048576; //按照 GB 为流量单位
          $create = $mysql->exec("INSERT INTO user(pid,passwd,port,transfer_enable) VALUES ('".$pid."','".$passwd."','".$port."','".$traffic."')");
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
 $data = [
      'action' => 'create',
      'pid'=>$pid,
      'password'=>$passwd
  ];
 //$uri = 'http://104.197.233.113/shadowsocksapi.php';
  //curlPost($uri,$data);
   
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
    $mysql =  new PDO(DSN,DB_USER,DB_PASS);
    if(!$mysql){
      $result = array(
        'status' => 'Error',
        'result' => 'Unable to connect to database.'
      );
    }else{
      $check = $mysql->query("SELECT * FROM user WHERE port='".$pid."'")->fetch();
      if($check == false){
        $result = array(
          'status' => 'Error',
          'result' => 'No data found.'
        );
      }else{
        $passwd = md5(time().rand(0,100));
        $suspend = $mysql->exec("UPDATE user SET passwd='".$passwd."' WHERE port='".$pid."'");
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
    $mysql =  new PDO(DSN,DB_USER,DB_PASS);
    if(!$mysql){
      $result = array(
        'status' => 'Error',
        'result' => 'Unable to connect to database.'
      );
    }else{
      $check = $mysql->query("SELECT * FROM user WHERE port='".$pid."'")->fetch();
      if($check == false){
        $result = array(
          'status' => 'Error',
          'result' => 'No data found.'
        );
      }else{
        $unsuspend = $mysql->exec("UPDATE user SET passwd='".$passwd."' WHERE port='".$pid."'");
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
    $mysql =  new PDO(DSN,DB_USER,DB_PASS);
    if(!$mysql){
      $result = array(
        'status' => 'Error',
        'result' => 'Unable to connect to database.'
      );
    }else{
      $check = $mysql->query("SELECT * FROM user WHERE port='".$pid."'")->fetch();
      if($check == false){
        $result = array(
          'status' => 'Error',
          'result' => 'No data found.'
        );
      }else{
        $terminate = $mysql->exec("DELETE FROM user WHERE port='".$pid."'");
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
    $mysql =  new PDO(DSN,DB_USER,DB_PASS);
    if(!$mysql){
      $result = array(
        'status' => 'Error',
        'result' => 'Unable to connect to database.'
      );
    }else{
      $traffic = $traffic * 1048576;
      $check = $mysql->query("SELECT * FROM user WHERE port='".$pid."'")->fetch();
      if($check == false){
        $result = array(
          'status' => 'Error',
          'result' => 'No data found.'
        );
      }else{
        $changepackage = $mysql->exec("UPDATE user SET transfer_enable='".$traffic."' WHERE port='".$pid."'");
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
    $mysql =  new PDO(DSN,DB_USER,DB_PASS);
    if(!$mysql){
      $result = array(
        'status' => 'Error',
        'result' => 'Unable to connect to database.'
      );
    }else{
      $check = $mysql->query("SELECT * FROM user WHERE port='".$pid."'")->fetch();

      if($check == false){
        $result = array(
          'status' => 'Error',
          'result' => 'No data found.'
        );
      }else{
        $changepassword = $mysql->exec("UPDATE user SET passwd='".$passwd."' WHERE port='".$pid."'");
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
    $mysql =  new PDO(DSN,DB_USER,DB_PASS);
    if(!$mysql){
      $result = array(
        'status' => 'Error',
        'result' => 'Unable to connect to database.'
      );
    }else{
      $check = $mysql->query("SELECT * FROM user WHERE port='".$pid."'")->fetch();
      if($check == false){
        $result = array(
          'status' => 'Error',
          'result' => 'No data found.'
        );
      }else{
        $reset = $mysql->exec("UPDATE user SET u='0',d='0' WHERE port='".$pid."'");
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
    $mysql =  new PDO(DSN,DB_USER,DB_PASS);
    if(!$mysql){
      $result = array(
        'status' => 'Error',
        'result' => 'Unable to connect to database.'
      );
    }else{
      $query = $mysql->query("SELECT * FROM user WHERE pid='".$pid."'")->fetch();
      if($query == false){
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
function curlPost($uri, $data)
{
    $ch     = curl_init();
    curl_setopt($ch, CURLOPT_URL, $uri);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    $return = curl_exec($ch);

    curl_close($ch);
    return $return;
}

