$(document).ready(function(){
  
$("#nom").change(function(){
 
        var r = $(this).val();
        var data = 'motclef=' + r;
            $.ajax({
                type : "POST",
                url : "result.php",
                data : data,
                success : function(s){
                
					$("#sp").val(s);	
					$("#sp").css({"color": "blue",});
								
				}
				
            });
        
    });

});