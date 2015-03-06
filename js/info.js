$(function(){
	$("#form1 :submit").hide();
	$("#form1 :button").click(function(){
		var o;//订单号
		var co=false;//订单号核对结果
		var d;//域名
		var cd=false;//域名核对结果
		var h;//主机帐号
		var ch=false;//主机帐号核对结果
		var e;//邮件帐号
		var ce=false;//邮件核对结果
		var fd;//购买时间
		var cfd=false;//购买时间核对结果
		var td;//截止日期
		var ctd=false;//截止日期核对结果
		//订单号核对过程
		o=$("#order :text").val();
	
		if(!o)
		{
			$("#order :nth-child(2)").toggleClass("guide2");
			}else{
				co=chkorder(o);
				if(!co){$("#order :nth-child(2)").toggleClass("guide2");}
				else{co=true;}
				}
		//域名核对过程
		d=$("#domain :text").val();
	
		if(!d)
		{
			$("#domain :nth-child(2)").toggleClass("guide2");
			}else{
				cd=chkdomain(d);
				if(!cd){$("#domain :nth-child(2)").toggleClass("guide2");}
				else{cd=true;}
				}
		//主机帐号核对过程
			h=$("#hostid :text").val();
		if(!h)
		{
			$("#hostid :nth-child(2)").toggleClass("guide2");
			}else{
				ch=chkhost(h);
				if(!ch){$("#domain :nth-child(2)").toggleClass("guide2");}
				else{ch=true;}
				}
		//电子邮件核对过程
		e=$("#email :text").val();
		if(e){
			ce=chkem(e);
			if(!ce)
			$("#email :nth-child(2)").toggleClass("guide2");
			else{ce=true;}
			}
		//日期核对过程
		fd=$("#fromdate :text").val();
		if(fd){
			cfd=chkdate(fd);
			if(!cfd)
			$("#fromdate :nth-child(2)").toggleClass("guide2");
			else{cfd=true;}
			}
		td=$("#todate :text").val();
		if(td){
			ctd=chkdate(td);
			if(!ctd)
			$("#todate :nth-child(2)").toggleClass("guide2");
			else{ctd=true;}
			}
		if(co&&ch&&cd&&ctd&&cfd){
			$("#form1 :button").hide();
			$("#form1 :submit").show();
			}
		//$("#order").append("<h6>"+co+cd+ch+cfd+ctd+"</h6>");
		
	})
	//核对订单号的chorder
	function chkorder(order){
		if(/^\d{10}$/.test(order)){return true;}
		else {
		return false;}
		}
	//域名核对chkdomain
	function chkdomain(domain){
		if(/^\w+\.\w{2,}$/.test(domain)){return true;}
		else {return false;}
		}
	//主机帐号核对chkhost
	function chkhost(hostid){
		if(/^[a-zA-Z]+$/.test(hostid)){return true;}
		else{return false;}
		}
	//邮件核对chkem
	function chkem(email){
		if(/^\w+@\w+\.\w+$/.test(email)){return true;}
		else {return false;}
		}
	//日期核对chkdate
	function chkdate(date){
		if(/^\d{4}-\d{1,2}-\d{1,2}$/.test(date)){return true;}
		else {return false;}
		
		}

})