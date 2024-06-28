// script.js
jQuery(document).ready(function($){
    $(".single_category a").on("click", function(e){
        e.preventDefault();
        var mycategoryID = $(this).attr("category_id");
        // alert(myCategoryID)
    
        $.ajax({
            url: ajax_object.ajax_url,
            type: "POST", 
            data: { 
                action: 'load_products_by_category',
                nonce: ajax_object.nonce,
                category_id: mycategoryID,
            },
            success: function(response){
                console.log(response);
                $('#products-container').html(response.data);
                $(".products-main").css("display", "block");
                $(".categories").css("display", "none");
            }
        });
    });


    $('#back-button').on('click', function(){
        $(".products-main").css("display", "none");
        $(".categories").css("display", "block");
    });
});
