<?php
class database{
private $host='';
private $dbuser='';
private $dbname='';
private $password='';
private $con='';
function __construct($host,$dbuser,$dbname,$password){
	$this->host=$host;
	$this->dbuser=$dbuser;
	$this->dbname=$dbname;
	$this->password=$password;
}
function Connection(){//���ݿ����ӷ���
$con=mysql_connect($this->host,$this->dbuser,$this->password);
mysql_select_db($this->dbname,$con);
return $con;
}
function CommonSelection($order,$domain,$hostid){//������ͨ��ѯ�ķ���
$sql="SELECT * FROM info WHERE domain like '%" .$domain."%'AND `order` like '%".$order."%'AND hostid like '%".$hostid."%'";
$set=@mysql_query("SET NAMES gbk");
$result=mysql_query($sql);
return $result;
}
function OutDeadtime(){
//$date=date("Y-m-d");
$sql="SELECT `order`,`domain`,`hostid`,`qq` FROM info GROUP BY `todate` HAVING datediff(`todate`,curdate())<0";
$set=@mysql_query("SET NAMES gbk");
$result=mysql_query($sql);
return $result;
}
function Marketing(){
$sql="SELECT `order`,`domain`,`hostid`,`qq` FROM info GROUP BY `fromdate` HAVING datediff(curdate(),`fromdate`)<70 AND datediff(curdate(),`fromdate`)>=60";
$set=@mysql_query("SET NAMES gbk");
$result=mysql_query($sql);
return $result;
}
function Close(){
if($con){
mysql_close($con);
return "���ݿ��Ѿ��ر�";
}
else{return "���ݿ����Ӳ������޷��ر�";}
}
function Update($array){
	$html='';
	if(!empty($array)){
	$values=$array;
	$sql="UPDATE `info` SET `qq`='".$values[1]."',`name`='".$values[2]."',`domain`='".$values[3]."',`hostid`='".$values[4]."',`fromdate`='".$values[5]."',`todate`='".$values[6]."',`cost`='".$values[7]."',`production`='".$values[8]."',`decription`='".$values[9]."' WHERE `order` like '".$values[0]."'";
	$set=@mysql_query("SET NAMES gbk");
	$result=mysql_query($sql);
	if($result){$html.="�޸ĳɹ�";}
	else{$html.="�޸�ʧ��";}
	}
	return $html;
}
}
?>
