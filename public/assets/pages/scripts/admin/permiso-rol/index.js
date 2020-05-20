$('.permiso_rol').on('change',function(){
    var data ={
        permiso_id:$(this).data('permisoid'),
        rol_id:$(this).val(),
        _token:$('input[name=_token').val()
    };
    if($(this).is(':checked')){
        data.estado=1
    }else{
        data.estado=0
    }
    ajaxRequest('/vecas/public/admin/permiso-rol',data);
});
function ajaxRequest(url,data){
    $.ajax({
        url:url,
        type:'POST',
        data:data,
        dataType: 'json',
        success: function(respuesta){
            Vecas.notificaciones(respuesta.respuesta,'Veca´s','success');
        }
    });
}
/*
$(document).ready(function () {
    $('#nestable').nestable().on('change', function () {
            var menu = window.JSON.stringify($('#nestable').nestable('serialize'));
            var route = '/admin/menu/guardar-orden';
            var token = $('input[name=_token]').val();
            $.ajax({
                url: route,
                headers: {'X-CSRF-TOKEN':token},
                type: 'post',
                data:{menu},
                dataType: 'json',
                success:function(response){
                    
                }
            });
            $('#nestable').nestable('expandAll');
        });
    });
*/ 