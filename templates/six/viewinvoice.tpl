<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="{$charset}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{$companyname} - {$pagetitle}</title>

    <link href="{$WEB_ROOT}/templates/{$template}/css/all.min.css" rel="stylesheet">
    <link href="{$WEB_ROOT}/templates/{$template}/css/invoice.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{$WEB_ROOT}/templates/static/css/viewinvoice.css">
    <link rel="shortcut icon" href="favicon.png">
    <style>
      .success-tips {
        width: 200px;
        margin-left: 198px;
        font-size: 12px;
        padding-top: 10px;
      }
      .tips .promise {
        margin-top: 10px;
        font-size: 12px;
      }
      .alipay {
        width: 182px;
        margin-left: 210px;
      }
      .alipay .title {
        text-align: center;
        font-size: 12px;
        margin: 0;
      }
      .alipay .amount{
        font-size: 26px;
        font-weight: 700;
        color: #f60;
      }
      .alipay .alipay-code {
        position: relative;
        background: #fff;
        border: 1px solid #d3d3d3;
        padding: 6px;
      }
      .alipay .alipay-code .amount-img {
        width: 100%;
      }
      /*.alipay .alipay-code .intro-img {
        display: none;
        width: 204px;
        position: absolute;
        top: -40px;
        left: 182px;
      }*/
      .alipay .alipay-code .tips {
        position: relative;
        padding-left: 40px;
        padding-top: 10px;
      }
      .alipay .alipay-code .tips .scan {
        position: absolute;
        left: 20px;
        top: 12px;
      }
      .alipay .alipay-code .tips p {
        font-size: 12px;
        margin-bottom: 0;
      }
    </style>
</head>
<body>

    <div class="container-fluid invoice-container">

        {if $invalidInvoiceIdRequested}

            {include file="$template/includes/panel.tpl" type="danger" headerTitle=$LANG.error bodyContent=$LANG.invoiceserror bodyTextCenter=true}

        {else}

            <div class="row header">
                <div class="col-sm-5 title">
                    {if $logo}
                        <h1>影梭</h1>
                    {else}
                        <h2>{$companyname}</h2>
                    {/if}
                    <h1>{$pagetitle}</h1>
                    <div class="invoice-status">
                        {if $status eq "Draft"}
                            <span class="draft">{$LANG.invoicesdraft}</span>
                        {elseif $status eq "Unpaid"}
                            <span class="unpaid">{$LANG.invoicesunpaid}</span>
                        {elseif $status eq "Paid"}
                            <span class="paid">{$LANG.invoicespaid}</span>
                        {elseif $status eq "Refunded"}
                            <span class="refunded">{$LANG.invoicesrefunded}</span>
                        {elseif $status eq "Cancelled"}
                            <span class="cancelled">{$LANG.invoicescancelled}</span>
                        {elseif $status eq "Collections"}
                            <span class="collections">{$LANG.invoicescollections}</span>
                        {/if}
                    </div>


                </div>
                <div class="col-sm-7 text-center">
                    {if $status eq "Unpaid" || $status eq "Draft"}

                        <div class="payment-btn-container" align="center">
                          <div class="alipay">
                            <p class="title">扫一扫付款（元）</p>
                            <p class="amount">{$balance}</p>
                            <div class="alipay-code">
                            {if $balance eq "¥18.00 CNY"}
                              <img class="amount-img" src="/assets/img/alipay/18.jpg" />
                            {elseif $balance eq "¥9.90 CNY"}
                              <img class="amount-img" src="/assets/img/alipay/9.9.jpg" />
                            {elseif $balance eq "¥48.00 CNY"}
                              <img class="amount-img" src="/assets/img/alipay/48.jpg" />
                            {elseif $balance eq "¥88.00 CNY"}
                              <img class="amount-img" src="/assets/img/alipay/88.jpg" />
                            {elseif $balance eq "¥128.00 CNY"}
                              <img class="amount-img" src="/assets/img/alipay/128.jpg" />
                            {elseif $balance eq "¥188.00 CNY"}
                              <img class="amount-img" src="/assets/img/alipay/188.jpg" />
                            {elseif $balance}
                              <img class="amount-img" src="/assets/img/alipay/default.jpg" />
                            {/if}
                              <!-- <img class="intro-img" src="/assets/img/alipay/intro.png" /> -->
                              <div class="tips">
                                <img class="scan" src="/assets/img/alipay/scan.png" />
                                <p>打开手机支付宝</p>
                                <p>扫一扫继续付款</p>
                              </div>
                            </div>
                          </div>
                          <div class="success-tips">
                            <span>如遇问题，请点击：</span>
                            <a target="_blank" href="/submitticket.php">提交工单</a>
                          </div>
                        </div>
                    {/if}

                </div>
            </div>

            {if $paymentSuccess}
                {include file="$template/includes/panel.tpl" type="success" headerTitle=$LANG.success bodyContent=$LANG.invoicepaymentsuccessconfirmation bodyTextCenter=true}
            {elseif $pendingReview}
                {include file="$template/includes/panel.tpl" type="info" headerTitle=$LANG.success bodyContent=$LANG.invoicepaymentpendingreview bodyTextCenter=true}
            {elseif $paymentFailed}
                {include file="$template/includes/panel.tpl" type="danger" headerTitle=$LANG.error bodyContent=$LANG.invoicepaymentfailedconfirmation bodyTextCenter=true}
            {elseif $offlineReview}
                {include file="$template/includes/panel.tpl" type="info" headerTitle=$LANG.success bodyContent=$LANG.invoiceofflinepaid bodyTextCenter=true}
            {/if}

            <!-- <div class="row">
                <div class="col-sm-6 pull-sm-right text-right-sm">
                    <strong>{$LANG.invoicespayto}:</strong>
                    <address class="small-text">
                        {$payto}
                    </address>
                </div>
                <div class="col-sm-6">
                    <strong>{$LANG.invoicesinvoicedto}:</strong>
                    <address class="small-text">
                        {if $clientsdetails.companyname}{$clientsdetails.companyname}<br />{/if}
                        {$clientsdetails.firstname} {$clientsdetails.lastname}<br />
                        {$clientsdetails.address1}, {$clientsdetails.address2}<br />
                        {$clientsdetails.city}, {$clientsdetails.state}, {$clientsdetails.postcode}<br />
                        {$clientsdetails.country}
                        {if $customfields}
                        <br /><br />
                        {foreach from=$customfields item=customfield}
                        {$customfield.fieldname}: {$customfield.value}<br />
                        {/foreach}
                        {/if}
                    </address>
                </div>
            </div> -->

            <div class="row order-content">
                <div class="col-sm-6">
                    <h2 class="apply-type">{$LANG.paymentmethod}:</h2><br>
                    <span class="small-text">
                        {if $status eq "Unpaid" && $allowchangegateway}
                            <form method="post" action="{$smarty.server.PHP_SELF}?id={$invoiceid}" class="form-inline">
                                {$gatewaydropdown}
                            </form>
                        {else}
                            {$paymentmethod}
                        {/if}
                    </span>
                    <br /><br />
                </div>
                <div class="col-sm-6 text-right-sm">
                    <strong>{$LANG.invoicesdatecreated}:</strong><br>
                    <span class="small-text">
                        {$date}<br><br>
                    </span><br>
                    <strong>{$LANG.invoicesdatedue}:</strong><br>
                    <span class="small-text">
                        {$datedue}<br><br>
                    </span>
                </div>
            </div>

            <br />

            {if $manualapplycredit}
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>{$LANG.invoiceaddcreditapply}</strong></h3>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="{$smarty.server.PHP_SELF}?id={$invoiceid}">
                            <input type="hidden" name="applycredit" value="true" />
                            {$LANG.invoiceaddcreditdesc1} <strong>{$totalcredit}</strong>. {$LANG.invoiceaddcreditdesc2}. {$LANG.invoiceaddcreditamount}:
                            <div class="row">
                                <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4">
                                    <div class="input-group">
                                        <input type="text" name="creditamount" value="{$creditamount}" class="form-control" />
                                        <span class="input-group-btn">
                                            <input type="submit" value="{$LANG.invoiceaddcreditapply}" class="btn btn-success" />
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            {/if}

            {if $notes}
                {include file="$template/includes/panel.tpl" type="info" headerTitle=$LANG.invoicesnotes bodyContent=$notes}
            {/if}

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>{$LANG.invoicelineitems}</strong></h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <td><strong>{$LANG.invoicesdescription}</strong></td>
                                    <td width="20%" class="text-center"><strong>{$LANG.invoicesamount}</strong></td>
                                </tr>
                            </thead>
                            <tbody>

                                {foreach from=$invoiceitems item=item}
                                    <tr>
                                        <td>{$item.description}{if $item.taxed eq "true"} *{/if}</td>
                                        <td class="text-center">{$item.amount}</td>
                                    </tr>
                                {/foreach}
                                <tr>
                                    <td class="total-row text-right"><strong>{$LANG.invoicessubtotal}</strong></td>
                                    <td class="total-row text-center">{$subtotal}</td>
                                </tr>
                                {if $taxrate}
                                    <tr>
                                        <td class="total-row text-right"><strong>{$taxrate}% {$taxname}</strong></td>
                                        <td class="total-row text-center">{$tax}</td>
                                    </tr>
                                {/if}
                                {if $taxrate2}
                                    <tr>
                                        <td class="total-row text-right"><strong>{$taxrate2}% {$taxname2}</strong></td>
                                        <td class="total-row text-center">{$tax2}</td>
                                    </tr>
                                {/if}
                                <tr>
                                    <td class="total-row text-right"><strong>{$LANG.invoicescredit}</strong></td>
                                    <td class="total-row text-center">{$credit}</td>
                                </tr>
                                <tr>
                                    <td class="total-row text-right"><strong>{$LANG.invoicestotal}</strong></td>
                                    <td class="total-row text-center">{$total}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            {if $taxrate}
                <p>* {$LANG.invoicestaxindicator}</p>
            {/if}

            <div class="transactions-container small-text">
                <div class="table-responsive">
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <td class="text-center"><strong>{$LANG.invoicestransdate}</strong></td>
                                <td class="text-center"><strong>{$LANG.invoicestransgateway}</strong></td>
                                <td class="text-center"><strong>{$LANG.invoicestransid}</strong></td>
                                <td class="text-center"><strong>{$LANG.invoicestransamount}</strong></td>
                            </tr>
                        </thead>
                        <tbody>
                            {foreach from=$transactions item=transaction}
                                <tr>
                                    <td class="text-center">{$transaction.date}</td>
                                    <td class="text-center">{$transaction.gateway}</td>
                                    <td class="text-center">{$transaction.transid}</td>
                                    <td class="text-center">{$transaction.amount}</td>
                                </tr>
                            {foreachelse}
                                <tr>
                                    <td class="text-center" colspan="4">{$LANG.invoicestransnonefound}</td>
                                </tr>
                            {/foreach}
                            <tr>
                                <td class="text-right" colspan="3"><strong>{$LANG.invoicesbalance}</strong></td>
                                <td class="text-center">{$balance}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- <div class="pull-right btn-group btn-group-sm hidden-print">
                <a href="javascript:window.print()" class="btn btn-default"><i class="fa fa-print"></i> {$LANG.print}</a>
                <a href="dl.php?type=i&amp;id={$invoiceid}" class="btn btn-default"><i class="fa fa-download"></i> {$LANG.invoicesdownload}</a>
            </div> -->

        {/if}

    </div>

    <p class="text-center hidden-print"><a href="clientarea.php">{$LANG.invoicesbacktoclientarea}</a></a></p>

</body>
</html>
