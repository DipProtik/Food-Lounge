

$('.addToCart').click(function(){
  var dishId =$(this).val();

  var $this = $(this);


	$.ajax({
    method:'POST',
    url:postAddress,
    data:{dishId:dishId,_token:token}
  })
  .done(function(msg){
    $('#cartQty').text(msg['cartQty']);


    $this.css({"background" : "green"});
    $this.text("Added To Cart");

    setInterval(function () {
      $this.css({"background" : "#ff5353"});
      $this.text("Add To Cart");
    },1000);


  });
})


/*Updating Cart Quantity*/

$('.qtyInput').change(function() {
  $(this).closest('form').submit();
});



var $qtyForm = $('.qtyForm');
$qtyForm.submit( function(e){
    var dishQty = $(this).find('.qtyInput').val(); 
    var dishId = $(this).find('.dishId').val();
    var dishTotalPrice = $(this).parent().siblings('.dishTotalPrice');
    var dishPrice = $(this).parent().siblings('.dishPrice').text();
    $.ajax({
        method:"POST",
        url:updateCart,
        data:{dishId:dishId,dishQty:dishQty,_token:token}
     })
     .done(function(done){
        $('#cartQty').text(done['cartQty']);
        $('.cartTotal').text(done['cartTotal']);
        $('.cartSubTotal').text(done['cartTotal']);
        dishTotalPrice.text(dishPrice * dishQty);
     });
    e.preventDefault();
});



/*Remove Dish From Cart*/

$(".deleteDish").click(function(){
  var dishRowId = $(this).siblings('.dishRowId').text();
  var parent = $(this).parent().parent();

  $.ajax({
    method:"POST",
    url:deleteFromCart,
    data:{dishId:dishRowId,_token:token}
  })
  .done(function(done){
        $('#cartQty').text(done['cartQty']);
        $('.cartTotal').text(done['cartTotal']);
        $('.cartSubTotal').text(done['cartTotal']);
        parent.fadeOut(200);
        
        if(done['cartQty'] <= 0){
          window.location.href = "menu";
        }
  });
});


$('.addToCart').click(function(){
     $('.light').slideUp(300);
     $('.light').slideDown(300);

    });