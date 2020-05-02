$(document).ready(function () {
    $('#nestable').nestable().on('change', function () {
        const data = {
            menu: window.JSON.stringify($('#nestable').nestable('serialize')),
            _token: $('input[name=_token]').val()
        };
        $.ajax({
            url: '/admin/menu/guardar-orden',
            type: 'POST',
            dataType: 'JSON',
            data: data,
            success: function (respuesta) {
            }
        });
    });
    $('#nestable').nestable('expandAll');
});
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