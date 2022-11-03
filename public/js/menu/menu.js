$(document).ready(function(){

$("body").on("click", "#addtocart", async (e) =>
    alert($(e.currentTarget).data("id"))
);

    let urls="api/products";
    let method = "GET";
    let ids;

    init(urls,method,ids);

    $.ajax({
        url: 'api/categories',
        type: 'GET',
        dataType: 'json',
        success: function (data){
            let htt = "";
          $.each (data, function (bb) {
              htt+='<option value="'+data[bb].id+'">'+data[bb].name+'</option>';
          })
          $("#category-id").html(htt);
        }
    });
    
    let divs =  $("<div>",{
        class:"row menu-container",
        id:"cont",
    });

    $('#category-id').on('change', function() {
        ids = $(this).find(":selected").val();
        urls="api/products/selectmenu";
        method = "POST";
        $("#cont").empty();
        init(urls,method,ids);
    });

    // if($('#category-id').val()!=null){
    //     urls="api/products/selectmenu";
    //     method = "POST"
    // }
    
    function init(urls,method,ids){
        $.ajax({
        
            url: urls,
            type: method,
            data:{category_id:$('#category-id').val()},
            dataType: 'json',
            success: function (data){
                var htm = "";
              $.each (data, function (bb) {
    
        htm+='<div class="col-lg-6 menu-item filter-starters">'+
        '<div class="menu-content">'+
        '<a href="#">'+data[bb].name+'</a>'+
        '<span>'+data[bb].price+'</span>'+
        '</div>'+
        '<div class="menu-ingredients">'+data[bb].description+
        '<button type="button" class="btn btn-outline-success btn-sm" style="float:right;" id="addtocart" data-id='+data[bb].id+'>Add To Cart</button></div></div>';
        
    })
    divs.append(htm);
    $("#menu_main").append(divs);
    }
    })
    }
});