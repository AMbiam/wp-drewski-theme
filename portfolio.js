    function clearWindow(){
        $('#search_menu').addClass('hide');
        $('#pages').addClass('hide');
        $('#posts').addClass('hide');
        $('#page_navigation').addClass('hide');
        $('#close-button').addClass('hide');
        $('#horizontal-close-button').addClass('hide');
    }
    function renderView(){
        $('#vertical-logo').removeClass('hide');
        $('#horizontal-logo').removeClass('hide');
        $('#wp_content').removeClass('hide');
        $('#view').removeClass('hide');
    }
    function hideNavigation() {
        //$('#navigation').addClass('hide');
        //$('#navigation').removeClass('col-xs-12');
        
        //$('#nav_bar').removeClass('hide');

        $('#search_menu').addClass('hide');
        $('#pages').addClass('hide');
        $('#posts').addClass('hide');
        $('#page_navigation').addClass('hide');

        $('#close-button').addClass('hide');
        $('#horizontal-close-button').addClass('hide');
        $('#vertical-logo').removeClass('hide');
        $('#horizontal-logo').removeClass('hide');
        $('#wp_content').removeClass('hide');

        $('#view').removeClass('hide');
    }

   function expandNavigation() {
        //$('#navigation').removeClass('col-xs-1');
        //$('#navigation').removeClass('hide');
        //$('#view').addClass('hide');
        //$('#nav_bar').addClass('hide');
        $('#vertical-logo').addClass('hide');
        $('#horizontal-logo').addClass('hide');
        $('#wp_content').addClass('hide');
       /*$('#page_navigation').removeClass('hide');*/
       $('#close-button').removeClass('hide');
       $('#horizontal-close-button').removeClass('hide');
   }; 

   function showSearch(){
        //$('#search_menu').removeClass('hide');
   }
   function showPages(){
        $('#pages').removeClass('hide');
   }

   function showPosts(){
        $('#posts').removeClass('hide');
   }
   function showPageList(){
        $('#page_navigation').removeClass('hide');
   }
$(document).ready(function(){
  /*
    JQuery Functions go here.
  */
});

