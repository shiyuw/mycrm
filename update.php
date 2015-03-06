	<?php include("action.php");
			@$order0=$_POST['order3'];
			@$decription0=$_POST['decription3'];
			@$qq0=$_POST['qq3'];
			@$domain0=$_POST['domain3'];
			@$cost0=$_POST['cost3'];
			@$production0=$_POST['production3'];
			@$fromdate0=$_POST['fromdate3'];
			@$todate0=$_POST['todate3'];
			@$name0=$_POST['name3'];
			@$hostid0=$_POST['hostid3'];
			if(!empty($decription0)||!empty($qq0)||!empty($domain0)||!empty($cost0)||!empty($prodution0)||!empty($fromdate0)||!empty($todate0)||!		empty($name0)||!empty($hostid0)){
			$array=array($order0,$qq0,$name0,$domain0,$hostid0,$fromdate0,$todate0,$cost0,$production0,$decription0);
			$update=$database->Update($array);
			echo $update;
			//echo $production0;
}       
		?>