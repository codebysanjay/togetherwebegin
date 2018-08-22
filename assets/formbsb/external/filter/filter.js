$(function() {
  
  transition_timeout = 40;
  
  $('.title_items').click(function() {
    var item = $(this);
    current = $(this).next().find('li');
    $(item).addClass('selected');
    $(this).toggleClass('active');
    current.toggleClass('visible');
    // current.toggleClass('sel');
    
    if ($(this).hasClass('active')) {
      for( i = 0; i <= current.length; i++ ) {
        $(current[i]).css('transition-delay', transition_timeout * i + 'ms');
        // $(current[i]).removeClass('selected');
      }
    }
    else {
      for( i = current.length, j = -1; i >= 0; i--, j++) {
        $(current[i]).css('transition-delay', transition_timeout * j + 'ms');
        // $(current[i]).removeClass('selected');
      }
    }
  
  });

  $('.filt').click(function() {
    if ($('.filter-btns').hasClass('hidden')) {
      $('.filter-btns').removeClass('hidden');
    }
    else {
      $('.filter-btns').addClass('hidden');
    }
  
  });




  $('.search-btn').on('click', function() {
            var district = $(this).val();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>external/getsgpa",
                data: {
                  regno: regno,
                },
                success: function(response)
                {
                    alert("success");
                },
                error: function(){
                    alert("failed");
                },
            });
        });

});