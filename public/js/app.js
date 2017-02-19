$('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});
$(document).ready(function() {
$(".btn-pref .btn").click(function () {
    $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
    // $(".tab").addClass("active"); // instead of this do the below 
    $(this).removeClass("btn-default").addClass("btn-primary");   
});
$('#avatar').on("click",function() {$('#avatarchose').trigger('click');});
});
$(document).on('click', '#close-preview', function(){ 
    $('.image-preview').popover('hide');
    // Hover befor close the preview    
});

$(function() {
    // Create the close button
    var closebtn = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview',
        style: 'font-size: initial;',
    });
    closebtn.attr("class","close pull-right");

    // Clear event
    $('.image-preview-clear').click(function(){
        $('.image-preview').attr("data-content","").popover('hide');
        $('.image-preview-filename').val("");
        $('.image-preview-clear').hide();
        $('.image-preview-input input:file').val("");
        $(".image-preview-input-title").text("Browse"); 
    }); 
    // Create the preview image
    $(".image-preview-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".image-preview-input-title").text("Change");
            $(".image-preview-clear").show();
            $(".image-preview-filename").val(file.name);
        }        
        reader.readAsDataURL(file);
    });  
});


/**************VOTES***************/
$('.voteUp').on('click', function(e){
    e.preventDefault();
    $.ajax({
        method: "GET",
        url: $(this).data('url'),
        data: {id: $(this).data('id'), type: $(this).data('type') }
    }).done(function(){
        $(this).addClass('active');
        $('.voteDown').removeClass('active')
    });
    return false;
});
$('.voteDown').on('click', function(e){
    e.preventDefault();
    $.ajax({
        method:"GET",
        url: $(this).data('url'),
       data: {id: $(this).data('id'), type: $(this).data('type') }
      }).done(function(){
        $(this).addClass('active');
        $('.voteUp').removeClass('active')        
    });
    return false;
});

$('.comm_text').on('focus', function(e){
    $(this).attr('rows', 2);
    $('.comm_btns').removeClass('hide');
});

/*$('.comm_text').on('focusout', function(e){
    $(this).attr('rows', 1);
    $('.comm_btns').addClass('hide');
}); */

//search form
      //close on escape key
      $(document).keyup(function(e) {
          if(e.which === 27){
              closeSearch();
          }
      });

      function closeSearch() {
          $('.search-field').val('');
          $('.search-field').hide();
          $('#search-nav').removeClass('active');
          $('#search-nav button[type="reset"]').hide();
      }

      function openSearch() {
          $('#search-nav').addClass('active');
          $('.search-field').show();
          $('#search-nav button[type="reset"]').show();
      }

      // Show Search if form is not active or input search empty
      $('#search-nav button[type="submit"]').click(function(event) {
          if(!$( "#search-nav" ).hasClass( "active" ) || $('.search-field').val() === '') {
              event.preventDefault();
              openSearch();
          }
      });

      //close form
      $('#search-nav button[type="reset"]').click(function(event) {
          //event.preventDefault();
          closeSearch();
      });