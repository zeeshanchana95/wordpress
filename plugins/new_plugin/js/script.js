// script.js
jQuery(document).ready(function($){
    $(".single_category a").on("click", function(e){
        e.preventDefault();
        var myCategoryID = $(this).attr("category-id"); // Changed to data attribute
        // alert(myCategoryID)
    
        $.ajax({
            url: ajax_object.ajax_url,
            type: "POST", 
            data: {
                action: 'load_products_by_category',
                nonce: ajax_object.nonce,
                category_id: myCategoryID,
            },
            success: function(response){
                // console.log(response);
                // $('#products_container').html(response.data);
                //  $(".products-main").css("display", "block");
                //  $(".categories").css("display", "none");
            }
        });
    });
});
