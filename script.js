$(document).ready(function(){
	$(".btn_query1").hide();
	$(".btn_query2").hide();
	
	$(".first1").hide();
	$(".first2").hide();
	
	$("#t_h3").hide();
	$("#b_h3").hide();

	$("#tutorial").click(function(){
		$("#t_h3").show(1000);	
		$(".first1").show(2000);	
		$(".btn_query1").show(2000);
	});	

	$("#blog").click(function(){
		$("#b_h3").show(1000);
		$(".first2").show(2000);
		$(".btn_query2").show(2000);
	});

	
});