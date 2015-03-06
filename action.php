
<?php
include("actionlib.php");
$dbname="crm";
$dbhost="localhost";
$dbuser="root";
$password="";
$database=new database($dbhost,$dbuser,$dbname,$password);
$con=$database->Connection();
if(!$con){die("无法正常连接数据库");}
$out=$database->OutDeadtime();
$market=$database->Marketing();

function ToDate($out){//输出过期的客户信息
$html='';
if(!empty($out)&&isset($out)){
while($rs=@mysql_fetch_array($out))
$result[]=$rs;
	if(!empty($result)){
		foreach($result as $values)
	//foreach($values as $value)
			{
				$html.="<tr bgcolor='#FF0000'><td width='81'>".$values[0]."</td>
				<td width='105'>".$values[1]."</td>
				<td width='77'>".$values[2]."</td>
				<td width='109'>".$values[3]."</td>
				</tr>";
			}
	}
}
return $html;

}
function marketing($market){//追销函数
$html='';
if(!empty($market)&&isset($market)){
while($rs=mysql_fetch_array($market))
$result[]=$rs;
	if(!empty($result)){
		foreach($result as $values)
	//foreach($values as $value)
		{
			$html.="<tr bgcolor='#00FF00'><td width='81'>".$values[0]."</td>
			<td width='105'>".$values[1]."</td>
			<td width='77'>".$values[2]."</td>
			<td width='109'>".$values[3]."</td>
			</tr>";
		}
	}
}
return $html;
}

?>
