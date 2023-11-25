jQuery(function( $ ){
   
   jQuery(".entry-comments").remove();
   var page_id = 1;
   jQuery(document).ready(function(){
      fetch_comments(page_id);
   })
   $( '<button class="load-more-comments" >Load More Comments</button>' ).insertAfter( "#load_comnt" );
   
   $('.load-more-comments').click(function(){
      page_id = page_id + 1;
      fetch_comments(page_id);
   })
});

function fetch_comments(page_id){
   jQuery.ajax({
      url: ajax.url,
      type: 'POST',
      data: {'action': 'ajaxify_comments', 'page_id': page_id},
      dataType: 'html',
      beforeSend: function(){
         jQuery("#load_comnt").append('<div class="spinner"><i class="fa fa-spinner fa-spin" style="font-size:24px"></i> Loading Comments</div>');
      },
      success: function(response) {
         jQuery("#load_comnt").append(response);
         jQuery(".spinner").remove();
         jQuery(".comment-reply-link").each(function() {
            var comment_id = jQuery(this).data("commentid");
            jQuery(this).attr("href", "#comment-" + comment_id);
          });
      },
      error: function(error) {
         //console.log(error);
      }
   });
   
}