<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<link href="style2.css" rel="stylesheet" type="text/css"/>
<title>客户信息</title>
<script language="javascript" type="text/javascript" src="jquery-2.0.0.jsz/jquery-2.0.0.min.js">
</script>
<script language="javascript" type="text/javascript" src="js/show.js">
</script>
</head>
<body>
<?php include("action.php");?>
<!--页面头部-->
<div id="header">
<center><h1>客户信息</h1></center>
</div>
<!--页面内容-->
<div id="content2">
	<!--左内容-->
	<div id="left">
		<div class="table">
			<h3>追销客户</h3>
			<table border="1" width="600px">
			<tr bgcolor="#CCCCCC"><th width="81">订单号</th>
			<th width="105">域名</th>
			<th width="77">主机帐号</th>
			<th width="109">客户QQ</th>
			</tr>
			<?php  echo marketing($market);?>
			</table>
		</div>
		<div class="table">
		<h3>到期客户</h3>
		<table width="600" border="1">
 	 		<tr bgcolor="#CCCCCC">
   		 	<th width="81">订单号</td>
    	 	<th width="105">域名</td>
   		 	<th width="77">主机帐号</td>
    	 	<th width="109">客户QQ</td>
 		 	</tr>
			<?php  echo ToDate($out);?>
		</table>

		</div>
	</div>
	<!--右内容-->
	<div id="right">
		<div id="forms">
		<form id="form2" action="showinfo.php" method="post">
			<div class="input"><label>订单号：&nbsp;&nbsp;</label><input type="text" name="order2"/></div>
			<div class="input"><label>域名：&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="domain2"/></div>
			<div class="input"><label>主机帐号：</label><input type="text" name="hostid2"/></div>
			<div class="input"><input type="submit" value="提交"/></div>
			<div class="input"><input type="button" id="Button" value="修改"/></div>
		</form>
		</div>
		<div id="show">
			<?php
			@$order=$_POST['order2'];
			@$domain=$_POST['domain2'];
			@$hostid=$_POST['hostid2'];
			$selhtml='';
			if(!empty($order)||!empty($domain)||!empty($hostid)){
			$selection=$database->CommonSelection($order,$domain,$hostid);
			
			if(!empty($selection)){
			while($selrs=mysql_fetch_array($selection))
				$selresult[]=$selrs;
				if(!empty($selresult)){
					foreach($selresult as $selvalues)
						{	$selhtml.="<p>订单号：".$selvalues[0]."</p>".
										"<p>客户QQ：".$selvalues[1]."</p>".
										"<p>客户昵称：".$selvalues[2]."</p>".
										"<p>域名：".$selvalues[3]."</p>".
										"<p>主机帐号：".$selvalues[4]."</p>".
										"<p>购买日期：".$selvalues[5]."</p>".
										"<p>截止日期：".$selvalues[6]."</p>".
										"<p>付款金额：".$selvalues[7]."</p>".
										"<p>购买产品：".$selvalues[8]."</p>".
										"<p>备注：".$selvalues[9]."</p>"
										;	
						}
				}
			}
			echo $selhtml;}
			?>
		</div>
		<div id="show2">
		<form id="form3" method="post" action="update.php">
			<?php 
			if(!empty($order)||!empty($domain)||!empty($hostid)){
			$selection2=$database->CommonSelection($order,$domain,$hostid);
				if(!empty($selection2)){ 
						
						 
						while($selrs2=mysql_fetch_array($selection2))
							$selresult2[]=$selrs2;
							
						if(!empty($selresult2)){
						
						foreach($selresult2 as $selvalues2){
			
			?>
			<div class="input">订单号：<?php echo $selvalues2[0]; ?><input type="hidden"name="order3" value="<?php echo $selvalues2[0]; ?>">
			</div>
			<div class="input">客户QQ:<input type="text" name="qq3" value="<?php echo $selvalues2[1]; ?>"/></div>
			<div class="input">客户昵称:<input type="text" name="name3" value="<?php echo $selvalues2[2] ;?>"/></div>
			<div class="input">域名:<input type="text" name="domain3" value="<?php echo $selvalues2[3]; ?>"/></div>
			<div class="input">主机帐号:<input type="text" name="hostid3" value="<?php echo $selvalues2[4]; ?>"/></div>
			<div class="input">购买日期:<input type="text" name="fromdate3" value="<?php echo $selvalues2[5]; ?>"/></div>
			<div class="input">截止日期:<input type="text" name="todate3" value="<?php echo $selvalues2[6]; ?>"/></div>
			<div class="input">付款金额:<input type="text" name="cost3" value="<?php echo $selvalues2[7]; ?>"/></div>
			<div class="input">购买产品:<input type="text" name="production3" value="<?php echo $selvalues2[8]; ?>"/></div>
			备注：<textarea rows="25" cols="40" name="decription3" value="<?php echo $selvalues2[9]; ?>"></textarea>
			<div class="input"><input type="submit" value="确定"/></div>
			<?php }}}}?>
			
		</form>
		
		</div>
	</div>
</div>

</body>
</html>
