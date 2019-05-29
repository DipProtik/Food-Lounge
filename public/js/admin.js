
$('.success-message,.error-message').delay(3000).fadeOut(800);

if ($(window).width() < 1280) {
  $("#openNav").click(function(){
    $(".navigation").animate({
      left:"0"
    },300);
    $(this).fadeOut(1);
    $('#closeNav').fadeIn(100);
  })
  $("#closeNav,#admin-main").click(function(){
    $(".navigation").animate({
      left:"-260"
    },300);
    $('#closeNav').fadeOut(1);
    $('#openNav').fadeIn(100);
  })
}



$('.statusUpdate').change(function() {
  $(this).closest('form').submit();
});



$('.has_tree').click(function(){
  $(this).find('.subul').slideToggle(250);
  $(this).find('.fa-angle-down').toggleClass('clicked');
  $(this).siblings('.has_tree').find('.subul').slideUp(250);
  $(this).siblings('.has_tree').find('.fa-angle-down').removeClass('clicked');
  
});



// Adding New Dish Category
$('#addCat').click(function(){
	$('#catagory-form').fadeIn(300);
});


$('.close-form').click(function(){
	$(this).parent().parent().fadeOut(300);
});



// Adding New Dish
$('#add-dish').click(function(){
  $('#add-dish-form').fadeIn(300);
});



// Editing A Dish
$('.editDish').on('click', function(){
  var id = $(this).attr('data-id');

  var form = $('#edit-dish-form');

  $.ajax({
    method:"POST",
    url:editDish,
    data:{id:id,_token:token}
  })


  .done(function(done){
    form.find('.name-heading').html(done['name']);
    form.find('.name').val(done['name']);
    form.find('.price').val(done['price']);
    form.find('.details').val(done['details']);

    form.find('.dish_id').val(id);

    form.fadeIn(300);
    
  })
});



// Close Dish Details Window
$('.viewDishDetails .details-close').on('click', function(){
  $('.viewDishDetails').fadeIn(300);
})



// Add dish to Most Loveddish list
$('.addLovedDish').on('click', function(){
  $('#add-loved-dish-form').fadeIn(300);
});



// Add dish to Chef Special list
$('.addChefDish').on('click', function(){
  $('#add-chef-dish-form').fadeIn(300);
});



// Delete Review
$('.deleteReview').on('click', function(){
  var id = $(this).attr("data-id");
  var review = $(this).parent().parent();
   $.ajax({
     method:"POST",
     url:deleteReview,
     data:{review_id:id,_token:token}
    })
   .done(function(done){
      review.fadeOut(800);
  })

});




// Add dish to Chef Special list
$('.addNewMember').on('click', function(){
  $('#add-member-form').fadeIn(300);
})

// Add dish to Chef Special list
$('.editMember').on('click', function(){
  $('#edit-member-form').fadeIn(300);

  var id = $(this).attr("data-id");

  $.ajax({
    method:"POST",
    url:editTeamMember,
    data:{team_id:id,_token:token}
  })
  .done(function(done){
      $('#edit-member-form').find('.name').val(done['name']);
      $('#edit-member-form').find('.designation').val(done['designation']);
      $('#edit-member-form').find('.photo').val(done['photo']);
      $('#edit-member-form').find('.member_id').val(done['member_id']);
  })

})




// Edit Photo From the Gallery
$('.editPhoto').click(function(){
	$('#photo-edit-form').fadeIn(300);

  var id = $(this).attr("data-id");

  $.ajax({
    method:"POST",
    url:editPhoto,
    data:{photo_id:id,_token:token}
  })
  .done(function(done){
      $('#photo-edit-form').find('.caption').val(done['caption']);
      $('#photo-edit-form').find('.id').val(done['id']);
  })
});






// Add New Photo to the Gallery
$('#addPhoto').click(function(){
	$('#add-photo-form').fadeIn(300);
});







// Edit Dish Category
$('.edit-cat').click(function(){

  var id = $(this).attr('data-id');
  var form = $('#edit-catagory-form');

  $.ajax({
    method:"POST",
    url:editDishCategory,
    data:{id:id,_token:token}
  })

  .done(function(done){
    form.find('.name').val(done['name']);
    form.find('.id').val(id);

    form.fadeIn(300);
  })
});


 $('#resDate').datepicker({
     language: 'en'

 });

// $('#datepicker').datepicker({
//     language: 'en',
//     minDate: new Date()
// });




// Display Individual Message
$('.message-header').on('click', function(){
  var id = $(this).attr('data-id');

  var message = $('#DisplayMessage');

  $.ajax({
    method:"POST",
    url:messageURL,
    data:{id:id,_token:token}
  })
  .done(function(done){
    message.find('.m-name').html(done['name']);
    message.find('.m-btn-name').html(done['name']);
    message.find('.m-email').html(done['email']);
    message.find('.m-date').html(done['date']);
    message.find('.mail-text').html(done['message']);
    message.find('.mail-link').attr('href','mailto:'+done['email']);
  })
});


// Print Invoice
function printDiv(divID) {
    var divElements = document.getElementById(divID).innerHTML;
    var oldPage = document.body.innerHTML;
    document.body.innerHTML = 
      "<html><head><title></title></head><body>" + 
      divElements + "</body>";
    window.print();
    document.body.innerHTML = oldPage;
}


$('.fa-times').on('click', function(){
  return confirm("Are you sure ?");
});
