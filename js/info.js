$(function(){
	$("#form1 :submit").hide();
	$("#form1 :button").click(function(){
		var o;//������
		var co=false;//�����ź˶Խ��
		var d;//����
		var cd=false;//�����˶Խ��
		var h;//�����ʺ�
		var ch=false;//�����ʺź˶Խ��
		var e;//�ʼ��ʺ�
		var ce=false;//�ʼ��˶Խ��
		var fd;//����ʱ��
		var cfd=false;//����ʱ��˶Խ��
		var td;//��ֹ����
		var ctd=false;//��ֹ���ں˶Խ��
		//�����ź˶Թ���
		o=$("#order :text").val();
	
		if(!o)
		{
			$("#order :nth-child(2)").toggleClass("guide2");
			}else{
				co=chkorder(o);
				if(!co){$("#order :nth-child(2)").toggleClass("guide2");}
				else{co=true;}
				}
		//�����˶Թ���
		d=$("#domain :text").val();
	
		if(!d)
		{
			$("#domain :nth-child(2)").toggleClass("guide2");
			}else{
				cd=chkdomain(d);
				if(!cd){$("#domain :nth-child(2)").toggleClass("guide2");}
				else{cd=true;}
				}
		//�����ʺź˶Թ���
			h=$("#hostid :text").val();
		if(!h)
		{
			$("#hostid :nth-child(2)").toggleClass("guide2");
			}else{
				ch=chkhost(h);
				if(!ch){$("#domain :nth-child(2)").toggleClass("guide2");}
				else{ch=true;}
				}
		//�����ʼ��˶Թ���
		e=$("#email :text").val();
		if(e){
			ce=chkem(e);
			if(!ce)
			$("#email :nth-child(2)").toggleClass("guide2");
			else{ce=true;}
			}
		//���ں˶Թ���
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
	//�˶Զ����ŵ�chorder
	function chkorder(order){
		if(/^\d{10}$/.test(order)){return true;}
		else {
		return false;}
		}
	//�����˶�chkdomain
	function chkdomain(domain){
		if(/^\w+\.\w{2,}$/.test(domain)){return true;}
		else {return false;}
		}
	//�����ʺź˶�chkhost
	function chkhost(hostid){
		if(/^[a-zA-Z]+$/.test(hostid)){return true;}
		else{return false;}
		}
	//�ʼ��˶�chkem
	function chkem(email){
		if(/^\w+@\w+\.\w+$/.test(email)){return true;}
		else {return false;}
		}
	//���ں˶�chkdate
	function chkdate(date){
		if(/^\d{4}-\d{1,2}-\d{1,2}$/.test(date)){return true;}
		else {return false;}
		
		}

})