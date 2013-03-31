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

    var $container = $('#content')

    $container.isotope({
      itemSelector: '.box',
      animationEngine : 'jquery',
      masonry: {
        columnWidth: 110,
        gutterWidth: 10
      },
      getSortData : {
        whatshot : function ( $elem ) {
          return $elem.find('.whatshot').text();
        },
        latest : function ( $elem ) {
          return $elem.find('.latest').text();
        }
      }

    });

    $('#sort-by .sortable a').click(function(){
      var sortName = $(this).attr('href').slice(1);
      $(this).parent('li').parent('ul').find('li').attr('id', '');
      $(this).parent('li').attr("id","active");
      $container.isotope({ sortBy : sortName });
      return false;
    });

    $('.filters a').click(function(){
      var selector = $(this).attr('data-filter');
      $container.isotope({ filter: selector });
      return false;
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

  $(".vote_up").click(function(){  
   //get the id  
   the_id = $(this).attr('id');  
   thisBtn = $(this);
     
   //the main ajax request  
    $.ajax({  
     type: "POST",  
     data: "id="+ the_id,  
     url: "ebook/upvote/",  
     success: function(msg)  
     {  
      $('.vote_count' + the_id).html(msg);
      thisBtn.parent().find(".up").attr("src","img/arrowactive.png");
     }  
    });  
   });  
  $(".vote_down").click(function(){  
   //get the id  
   the_id = $(this).attr('id');
   thisBtn = $(this);
     
   //the main ajax request  
    $.ajax({  
     type: "POST",  
     data: "id="+ the_id,  
     url: "ebook/downvote/",  
     success: function(msg)  
     {  
      $('.vote_count' + the_id).html(msg);
      thisBtn.parent().find(".up").attr("src","img/arrowactive.png");
     }  
    });  
   });  

  });