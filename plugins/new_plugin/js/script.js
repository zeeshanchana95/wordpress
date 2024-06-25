jQuery(".single_category a").on("click", function(e){
    // e.preventDefault()
    var myCategoryID = jQuery(this).attr("category_id")
    // alert(myCategoryID)

    jQuery.ajax({
        url: ajax_object.ajax_url,
        type: "POST",
        data: {
            action: 'load_products_by_category',
            nonce: ajax-Object.nonce,
            category_id: myCategoryID,
        }

    })
})