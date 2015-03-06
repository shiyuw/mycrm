// JavaScript Document
$(function(){
		   $("#Button").hide();
		   $("#show2").hide();
		   var showinfo=$("#show").text();
		   
		   if(showinfo){$("#Button").show();
		   }
		   $("#Button").click(function(){
									   $("#show2").show();
									   })
		   })