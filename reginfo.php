

<?php
$dbname="crm";
$dbhost="localhost";
$dbuser="root";
$password="";
$con=mysql_connect($dbhost,$dbuser,$password);
if(!$con){die("�޷��������ݿ�");}
$db=mysql_select_db($dbname,$con);
$order=$_POST["order"];
$domain=$_POST["domain"];
$hostid=$_POST["hostid"];
$name=$_POST["name"];

$qq=$_POST["qq"];
$email=$_POST["email"];
$cost=$_POST["cost"];
$fromdate=$_POST["fromdate"];
$todate=$_POST["todate"];
$production=$_POST["production"];
$decription=$_POST["decription"];
$sql="INSERT INTO info VALUES('".$order."','".$qq."','".$name."','".$domain."','".$hostid."','".$fromdate."','".$todate."','".$cost."','".$production."','".$decription."')";
$set=mysql_query("SET NAMES gbk");
$result=mysql_query($sql);
if(!$result){die("���ܳɹ�ע����Ϣ".mysql_error());}
else {echo "�Ѿ��ɹ�������Ϣ";}
/*echo $name;
echo $production;
echo $set;*/
?>

