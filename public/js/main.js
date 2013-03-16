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
        $("#bookDetailsPublishDate").html(json.publish_date);
        $("#bookDetailsUploadDate").html(json.created_at);
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
    
    $('#content').masonry({
      itemSelector: '.box',
      gutterWidth: 30,
      isAnimated: true
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