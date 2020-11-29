$("#nom").focus(function(){
		var rr =$("#sp").val();
		if (rr==0){	
	$("#sss").html('invalide!');
	$("#sss").css({"color": "red",});
	}
	});
$("#pre").keyup(function(){
		var rr =$("#sp").val();
		if (rr!=''){	
	$("#sss").html('');
	}
	});
$("#etat").keyup(function(){
		var rr =$("#sp").val();
		if (rr!=''){	
	$("#sss").html('');
	}
	});
$("#heur").keyup(function(){
		var rr =$("#sp").val();
		if (rr!=''){	
	$("#sss").html('');
	}
	});

$("#pre").keydown(function(){
	       var rr =$("#sp").val();
		if (rr==0){	
	$("#nom").focus();
	}
	});
$("#etat").keydown(function(){
	       var rr =$("#sp").val();
		if (rr==0){	
	$("#nom").focus();
	}
	});
$("#heur").keydown(function(){
	       var rr =$("#sp").val();
		if (rr==0){	
	$("#nom").focus();
	}
	});
$("#jour").keyup(function(){
var jour=$(this).val();
if(jour<0){$("#m").html('moin de 0!');
	$("#m").css({"color": "red",});}
	else $("#m").html('');
						  });
	$("#jour").keyup(function(){
var jour=$(this).val();
if(jour>31){$("#j").html('plus de 31!');
	$("#j").css({"color": "red",});}
	else $("#j").html('');
							});
	
	
	
	
	