  $(window).load(function(){

    $("#genresOpen").click(function() {
        $("#genres").slideToggle('slow');
        return false;
    });

    $(".viewDetails").click(function() {
      var bookID = $(this).attr('id');


      $.getJSON("ebook/get/" + bookID, function(json) {
        $("#bookDetailsTitle").html(json.title);
        $("#bookDetailsDesc").html(json.description);
        $("#bookDetailsGenre").html(json.genre);
        $("#bookDetailsPublisher").html(json.publisher);
        $("#bookDetailsPublishDate").html($.datepicker.formatDate('dd M yy', new Date(json.publish_date)));
        $("#bookDetailsUploadDate").html($.datepicker.formatDate('dd M yy', new Date(json.created_at)));
      });

        $(".bookDetails").animate({width:'toggle'},350);
        return false;
    });
    
    $(document).click(function(){
        $(".bookDetails").hide();
    });
    
    $(".bookDetails").click(function(e){
        e.stopPropagation();
    });
    


    $('#content').isotope({
      itemSelector: '.box',
      animationEngine : 'jquery',
      masonry: {
        columnWidth: 110,
        gutterWidth: 10
      }
    });


     $(window).scroll(function(){
      var h = $('#wrap').height();
      var y = $(window).scrollTop();
      if( y > (h*.001) ){
       $("#footer").fadeIn("slow");
      } else {
       $('#footer').fadeOut('slow');
      }
     });


    var userMenu = 'hidden';
    $("#userDetails").click(function(){
      if(userMenu == 'hidden'){
        $('.sub_menu').show();
        userMenu = 'showen';
      }else{
        $('.sub_menu').hide();
        userMenu = 'hidden';
      }

    });

  $('.sub_menu').mouseleave(function(){
    $(this).hide();
      userMenu = 'hidden';
  });


  });