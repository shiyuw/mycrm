<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<link href="style2.css" rel="stylesheet" type="text/css"/>
<title>�ͻ���Ϣ</title>
<script language="javascript" type="text/javascript" src="jquery-2.0.0.jsz/jquery-2.0.0.min.js">
</script>
<script language="javascript" type="text/javascript" src="js/show.js">
</script>
</head>
<body>
<?php include("action.php");?>
<!--ҳ��ͷ��-->
<div id="header">
<center><h1>�ͻ���Ϣ</h1></center>
</div>
<!--ҳ������-->
<div id="content2">
	<!--������-->
	<div id="left">
		<div class="table">
			<h3>׷���ͻ�</h3>
			<table border="1" width="600px">
			<tr bgcolor="#CCCCCC"><th width="81">������</th>
			<th width="105">����</th>
			<th width="77">�����ʺ�</th>
			<th width="109">�ͻ�QQ</th>
			</tr>
			<?php  echo marketing($market);?>
			</table>
		</div>
		<div class="table">
		<h3>���ڿͻ�</h3>
		<table width="600" border="1">
 	 		<tr bgcolor="#CCCCCC">
   		 	<th width="81">������</td>
    	 	<th width="105">����</td>
   		 	<th width="77">�����ʺ�</td>
    	 	<th width="109">�ͻ�QQ</td>
 		 	</tr>
			<?php  echo ToDate($out);?>
		</table>

		</div>
	</div>
	<!--������-->
	<div id="right">
		<div id="forms">
		<form id="form2" action="showinfo.php" method="post">
			<div class="input"><label>�����ţ�&nbsp;&nbsp;</label><input type="text" name="order2"/></div>
			<div class="input"><label>������&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="domain2"/></div>
			<div class="input"><label>�����ʺţ�</label><input type="text" name="hostid2"/></div>
			<div class="input"><input type="submit" value="�ύ"/></div>
			<div class="input"><input type="button" id="Button" value="�޸�"/></div>
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
			$selection2=$selection;
			if(!empty($selection)){
			while($selrs=mysql_fetch_array($selection))
				$selresult[]=$selrs;
				if(!empty($selresult)){
					foreach($selresult as $selvalues)
						{	$selhtml.="<p>�����ţ�".$selvalues[0]."</p>".
										"<p>�ͻ�QQ��".$selvalues[1]."</p>".
										"<p>�ͻ��ǳƣ�".$selvalues[2]."</p>".
										"<p>������".$selvalues[3]."</p>".
										"<p>�����ʺţ�".$selvalues[4]."</p>".
										"<p>�������ڣ�".$selvalues[5]."</p>".
										"<p>��ֹ���ڣ�".$selvalues[6]."</p>".
										"<p>�����".$selvalues[7]."</p>".
										"<p>�����Ʒ��".$selvalues[8]."</p>".
										"<p>��ע��".$selvalues[9]."</p>"
										;	
						}
				}
			}
			echo $selhtml;}
			?>
		</div>
		<div id="show2">
		<form id="form3" method="post" action="action.php">
			<?php echo "ok";
				if(!empty($selection)){ 
						 echo "ok";
						 //echo $selection;
						while($selrs2=mysql_fetch_array($selection))
							$selresult2[]=$selrs2;
							echo $selrs2;
							 //echo "ok";
							 print_r($selrs2);
						if(!empty($selresult2)){
						 echo "ok";
						foreach($selresult2 as $selvalues2){
			
			?>
			<div class="input">�����ţ�<input type="text" name="order3" value="<?php echo $selvalues2[0]; ?>"/></div>
			<div class="input">�ͻ�QQ:<input type="text" name="qq3" value="<?php echo $selvalues2[1]; ?>"/></div>
			<div class="input">�ͻ��ǳ�:<input type="text" name="name3" value="<?php echo $selvalues2[2] ;?>"/></div>
			<div class="input">����:<input type="text" name="domain3" value="<?php echo $selvalues2[3]; ?>"/></div>
			<div class="input">�����ʺ�:<input type="text" name="hostid3" value="<?php echo $selvalues2[4]; ?>"/></div>
			<div class="input">��������:<input type="text" name="fromdate3" value="<?php echo $selvalues2[5]; ?>"/></div>
			<div class="input">��ֹ����:<input type="text" name="todate3" value="<?php echo $selvalues2[6]; ?>"/></div>
			<div class="input">������:<input type="text" name="cost3" value="<?php echo $selvalues2[7]; ?>"/></div>
			<div class="input">�����Ʒ:<input type="text" name="production3" value="<?php echo $selvalues2[8]; ?>"/></div>
			��ע��<textarea rows="25" cols="40" name="decription3" value="<?php echo $selvalues2[9]; ?>"></textarea>
			<?php }}}?>
			<div class="input"><input type="submit" value="�޸�"/></div>
		</form>
		</div>
	</div>
</div>

</body>
</html>
