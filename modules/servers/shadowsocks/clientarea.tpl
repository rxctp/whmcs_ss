<script src="https://www.gourdata.com/theme/javascript/layer/layer.js"></script>
<link rel="stylesheet" type="text/css" href="{$WEB_ROOT}/templates/{$template}/css/style.css">

<div class="alert alert-warning" role="alert" style="margin-bottom: 10px;">
    <p>将我们优质的服务介绍给您身边的朋友，您还可以立即获得高达 20% 的现金返还，<a href="/affiliates.php">立即加入推介计划</a></p>
</div>
<div class="alert alert-danger" role="alert">
    <p> * 刷新页面可以获取最新的数据，但并非必要的情况下请勿频繁刷新 </p>
</div>



<div class="plugin" style="font-size:12px;text-align:center">
  <!-- <div style="position: relative; overflow: auto; text-align: right; margin:-10px 0 15px 0; font-size: 10px; color: #999;">
    * 刷新页面可以获取最新的数据，但并非必要的情况下请勿频繁刷新
  </div> -->
  <script>
  jQuery(document).ready(function($) {
      $("a[name='qrcode']").on('click',function() {
        str = $(this).attr('data-qrcode');
        str = 'ss://' + str;
        layer.open({
          type: 1,
          title: $(this).attr('data-title'),
          shade: [0.8, '#000'],
          skin: 'layui-layer-demo',
          closeBtn: 1,
          shift: 2,
          shadeClose: true,
          content: '<img style="width: 100%; height: 100%;" src="https://www.gourdata.com/qr?' + str + '"/><div style="position: relative; overflow: auto; text-align: center; margin-bottom: 10px; font-size: 12px;">请使用 Shadowsocks 客户端进行扫描</div>'
        });
      });
  });
  </script>


  <div class="row row-main">
    <div class="col-md-8">
      <div class="card">
        <h4>产品信息</h4>
        <div class="content">
          <table class="table table-condensed">
            <tbody>
              <tr>
                <th>
                  <i class="fa fa-list-alt"></i> 产品/服务
                </th>
                <td>
                   ***** VPN服务 - 进阶版
                </td>
                <th>
                  <i class="fa fa-money"></i> 付款方式
                </th>
                <td>
                  ***** 支付宝
                </td>
              </tr>
              <tr>
                <th>
                  <i class="fa fa-calendar-check-o"></i> 注册日期
                </th>
                <td>
                  ***** 2017-05-10
                </td>
                <th>
                  <i class="fa fa-spinner"></i> 下次付款日期
                </th>
                <td>
                  ***** 2018-05-10 账单周期 (年付)
                </td>
              </tr>
              <tr>
                <th>
                  <i class="fa fa-usd"></i> 首次付款金额
                </th>
                <td>
                  ***** ￥64.50元
                </td>
                <th>
                  <i class="fa fa-usd"></i> 续约价格
                </th>
                <td>
                  ***** ￥129.00元
                </td>
              </tr>
              <tr>
                <th>
                  <i class="fa fa-clock-o"></i> 创建时间
                </th>
                <td>
                  ***** 2017-05-10 11:21:39
                </td>
                <th>
                  <i class="fa fa-eye"></i> 上次使用
                </th>
                <td>
                  {$last_year} <span style="color:#BBB;">年</span> {$last_month} <span style="color:#BBB;">月</span> {$last_day} <span style="color:#BBB;">日</span>, <span style="color:#BBB;">{$times}</span> {$last_time} <span style="color:#BBB;">分</span>
                </td>
              </tr>
              <tr>
                <th>
                  <i class="fa fa-check-square-o"></i> 状态
                </th>
                <td>
                  ***** 有效的
                </td>
                <th>
                  
                </th>
                <td>
                  
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="alert alert-danger" role="alert">
        <p>请勿将我们的服务器信息通过QQ群等聊天工具分享，这会给我们线路的稳定性会带来负面影响，请注意保密您的账号信息，切勿透露给任何第三方用户使用。</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <h4>5分钟快速使用教程</h4>
        <div class="content">
          <ol>
            <li>
              <p>从页面左侧“客户端下载”列表中选择对应的客户端下载并安装，或进入 <a href="" target="_blank">下载中心</a> 找到所有支持的客户端。</p>
            </li>
            <li>
              <p>通过下面的配置教程进行软件配置，或进入 <a href="" target="_blank">软件配置教程</a> 找到对应的配置教程。</p>
              <ul class="list">
                <li><a target="_blank" href="/">windows客户端使用教程</a></li>
                <li><a target="_blank" href="/">mac osx客户端使用教程</a></li>
                <li><a target="_blank" href="/">android客户端使用教程</a></li>
                <li><a target="_blank" href="/">ios客户端使用教程</a></li>
                <li><a target="_blank" href="/">surge使用教程</a></li>
                <li><a target="_blank" href="/">PSV/PS4/PS3使用教程</a></li>
              </ul>
            </li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <div class="row row-main">
    <div class="col-md-8">
      <div class="card">
        <h4>线路信息</h4>
        <div class="content">
          <table class="table table-condensed">
            <tbody>
                            <tr>
                <th width="150">
                  <i class="fa fa-tag"></i> 端口号
                </th>
                <td>
                  {$port}
                </td>
              </tr>
              <tr>
                <th>
                  <i class="fa fa-key"></i> 加密方式
                </th>
                <td>
                  rc4-md5
                </td>
              </tr>
              <tr>
                <th>
                  <i class="fa fa-cloud-upload"></i> 已消耗的上传流量
                </th>
                <td>
                  {$traffic_upload}  Kilobyte (KB)
                </td>
              </tr>
              <tr>
                <th>
                  <i class="fa fa-cloud-download"></i> 已消耗的下载流量
                </th>
                <td> 
                  {$traffic_download}  Kilobyte (KB)
                </td>
              </tr>
              <tr>
                <th>
                  <i class="fa fa-lock"></i> VPN连接密码
                </th>
                <td>
                  <a class="passwd">123456</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card">
        <h4>服务器地址</h4>
        <div class="content">
          <table class="table table-condensed table-striped">
            <thead>
              <tr>
                <td style="padding:8px 10px;background-color:#fcfcfc;border:1px solid #e9e9e9">
                  物理地域
                </td>
                <td style="padding:8px 10px;background-color:#fcfcfc;border:1px solid #e9e9e9">
                  网协地址
                </td>
                <td style="padding:8px 10px;background-color:#fcfcfc;border:1px solid #e9e9e9">
                  别名地址
                </td>
                <td style="padding:8px 10px;background-color:#fcfcfc;border:1px solid #e9e9e9">
                  加密方式
                </td>
                <td style="padding:8px 10px;background-color:#fcfcfc;border:1px solid #e9e9e9">
                  扫一扫 <span style="color:red">( New )</span>
                </td>
              </tr>
            </thead>
            <tbody style="border:1px solid #e9e9e9">
                  {$node_list}
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <h4>配置样例</h4>
        <div class="content client-demo">
          
          <div class="form-horizontal">
            <div class="form-group">
              <label class="col-sm-4 control-label">服务器IP</label>
              <div class="col-sm-8">
                <input type="text" readonly="" class="form-control input-sm" placeholder="***.ssfvpn.com">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-4 control-label">服务器端口</label>
              <div class="col-sm-8">
                <input type="text" readonly="" class="form-control input-sm" placeholder="14728">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-4 control-label">密码</label>
              <div class="col-sm-8">
                <input type="password" readonly="" class="form-control input-sm" placeholder="******">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-4 control-label">加密</label>
              <div class="col-sm-8">
                <input type="text" readonly="" class="form-control input-sm" placeholder="rc4-md5">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-4 control-label">备注</label>
              <div class="col-sm-8">
                <input type="text" readonly="" class="form-control input-sm" placeholder="某某某线路">
              </div>
            </div>
          </div>

        </div>
      </div>
      
      <div class="card">
        <h4>流量报表</h4>
        <div class="content">
          <div class="text-muted">总流量：{$traffic} MB / 月</div>
          <p>剩余流量： {$traffic_free}  MB</p>
          <div class="progress progress-striped progress-sm">
              <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                  <span class="sr-only">0% Complete</span>
              </div>
          </div>
          <!--p>上传流量 (0 MB)</p>
          <div class="progress progress-striped progress-sm">
              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                  <span class="sr-only">0% Complete (warning)</span>
              </div>
          </div>
          <p>下载流量 (0 MB)</p>
          <div class="progress progress-striped progress-sm">
              <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                  <span class="sr-only">0% Complete (danger)</span>
              </div>
          </div-->

        </div>
      </div>
    </div>
  </div>

<!--   <table style="width:100%;border:1px solid #e9e9e9;border-bottom:0;border-collapse:separate;border-spacing:0;border-radius:5px;color:#999;font-size:12px;margin-bottom:5px;">
  <tbody>
  <tr>
  	<td style="text-align:center;padding:8px 10px;background-color:#fcfcfc;border-bottom:1px solid #e9e9e9">
  		端口
  	</td>
  	<td style="text-align:center;padding:8px 10px;background-color:#fcfcfc;border-bottom:1px solid #e9e9e9">
  		已消耗的上传流量
  	</td>
  	<td style="text-align:center;padding:8px 10px;background-color:#fcfcfc;border-bottom:1px solid #e9e9e9">
  		已消耗的下载流量
  	</td>
  </tr>
  <tr>
  	<td style="text-align:center;padding:10px 15px;border-right:1px solid #e9e9e9;border-bottom:1px solid #e9e9e9">
  		{$port}
  	</td>
  	<td style="text-align:center;padding:10px 15px;border-right:1px solid #e9e9e9;border-bottom:1px solid #e9e9e9">
  		{$traffic_upload} <span style="color:#BBB;">Kilobyte (KB)</span>
  	</td>
  	<td style="text-align:center;padding:10px 15px;border-bottom:1px solid #e9e9e9">
  		{$traffic_download} <span style="color:#BBB;">Kilobyte (KB)</span>
  	</td>
  </tr>
  </tbody>
  </table>

  <table style="width:100%;border:1px solid #e9e9e9;border-bottom:0;border-collapse:separate;border-spacing:0;border-radius:5px;color:#999;font-size:12px;margin-bottom:5px;">
  <tbody>
  <tr>
    <td style="text-align:center;padding:8px 10px;background-color:#fcfcfc;border-bottom:1px solid #e9e9e9">
      每月流量
    </td>
  	<td style="text-align:center;padding:8px 10px;background-color:#fcfcfc;border-bottom:1px solid #e9e9e9">
  		剩余流量
  	</td>
  	<td style="text-align:center;padding:8px 10px;background-color:#fcfcfc;border-bottom:1px solid #e9e9e9">
  		最后连接
  	</td>
  </tr>
  <tr>
    <td style="text-align:center;padding:10px 15px;border-right:1px solid #e9e9e9;border-bottom:1px solid #e9e9e9">
      {$traffic} <span style="color:#BBB;">Megabyte (MB)</span>
    </td>
  	<td style="text-align:center;padding:10px 15px;border-right:1px solid #e9e9e9;border-bottom:1px solid #e9e9e9">
  		{$traffic_free} <span style="color:#BBB;">Megabyte (MB)</span>
  	</td>
  	<td style="text-align:center;padding:10px 15px;border-bottom:1px solid #e9e9e9">
  		{$last_year} <span style="color:#BBB;">年</span> {$last_month} <span style="color:#BBB;">月</span> {$last_day} <span style="color:#BBB;">日</span>, <span style="color:#BBB;">{$times}</span> {$last_time} <span style="color:#BBB;">分</span>
  	</td>
  </tr>
  </tbody>
  </table>

	<table style="width:100%;border:1px solid #e9e9e9;border-bottom:0;border-collapse:separate;border-spacing:0;border-radius:5px;color:#999">
	<tbody>
	<tr>
		<td style="padding:8px 10px;background-color:#fcfcfc;border-bottom:1px solid #e9e9e9">
			物理地域
		</td>
		<td style="padding:8px 10px;background-color:#fcfcfc;border-bottom:1px solid #e9e9e9">
			网协地址
		</td>
		<td style="padding:8px 10px;background-color:#fcfcfc;border-bottom:1px solid #e9e9e9">
			别名地址
		</td>
		<td style="padding:8px 10px;background-color:#fcfcfc;border-bottom:1px solid #e9e9e9">
			加密方式
		</td>
		<td style="padding:8px 10px;background-color:#fcfcfc;border-bottom:1px solid #e9e9e9">
			扫一扫 <span style="color:red">( New )</span>
		</td>
	</tr>
{$node_list}
	</tbody>
	</table>
	<p style="color:#999;border-color:#E9E9E9;padding:10px;border-radius:4px;margin:5px 0;border:1px solid #eee;font-size:12px">
		注意：由于网协地址可能会发生变化，在无 DNS 污染的环境下建议使用别名地址连接。
	</p> -->



</div>

<div class="alert alert-warning" role="alert" style="margin-bottom: 10px;">
    <p>注意：由于网协地址可能会发生变化，在无 DNS 污染的环境下建议使用别名地址连接。</p>
</div>
