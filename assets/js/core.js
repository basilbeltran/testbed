$(document)
.ready(
    function() {                                                        //place jQuery actions here    
       var link = "/testbed/index.php/";	    
       
       $("ul.products form")
       .submit(
               function() {                                             // Get the product ID and the quantity 
                var id =  $(this).find('input[name=product_id]').val();
                var qty = $(this).find('input[name=quantity]'  ).val();  //DEBUG alert('ID:' + id + '\n\rQTY:' + qty);
                $.post(
                      link + "cartTest/add_cart_item", 
                      { product_id: id, quantity: qty, ajax: '1' },      //check if the user has JavaScript enabled
                      function(data){
                         if(data === 'true'){
    	                   $.get(
                                link + "cartTest/show_cart", 
                                function(cart){
  		                   $("#cart_content").html(cart);
		               });//GET
    	                 }else{
                             alert("Product does not exist");
                         }	
    	        });//POST
        return false;
        });//SUBMIT
        
 
     $(".empty")
     .live(
          "click", 
          function(){
            $.get(
                 link + "cartTest/empty_cart", 
                 function(){
                   $.get(
                        link + "cartTest/show_cart", 
                        function(cart){
                          $("#cart_content").html(cart);
                        });  //GET SHOW
                 }); //GET EMPTY
       return false;
      }); //LIVE

  
	
	
});  //READY 