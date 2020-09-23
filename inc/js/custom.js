$(document).ready(function(){
    $('#add_to_cart_coaching').on('click', function(){
        var dataID = $(this).data('id'),        
            dataUser = $(this).data('user'),
            prodQTY = $('#c_prod-'+dataID+' #c_prod_qty').val()

            alert(prodQTY)

        var form = {
            action: 'save_to_cart',
            prodID: dataID,
            userID: dataUser,
            prodQty: prodQTY
        }

        $.post(ccb_plgn_ajax.ajax_url, form, function(response){
            alert(response.status)
        })
    })
   
})