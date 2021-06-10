function ajaxBuy(value) {

    $.post('buy.php', { items: value }, function(data) {

        //console.log(data);
        if (data == "unregistered") {

            $("#loginWarning").modal('show');
        } else {



            $('#shopcart').html(data);
        }

    });


}