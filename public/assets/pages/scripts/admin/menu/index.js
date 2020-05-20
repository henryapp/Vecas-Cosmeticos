$(document).ready(function () {
    $('#nestable').nestable().on('change', function () {
        const data = {
            menu: window.JSON.stringify($('#nestable').nestable('serialize')),
            _token: $('input[name=_token]').val()
        };
        $.ajax({
            //"{{ url('/familiars/storeajax') }}";
            url: '/vecas/public/admin/menu/guardar-orden',
            type: 'POST',
            dataType: 'JSON',
            data: data,
            success: function (respuesta) {
            }
        });
    });
    $('.eliminar-menu').on('click', function(event){
        event.preventDefault();
        const url=$(this).attr('href');
        Swal.fire({
            title: 'Esta usted seguro de eliminar?',
            text: "No podrás revertir esto!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, elimínalo!'
        }).then((result) => {
            if (result.value) {
              Swal.fire(
                'Deleted!',
                'Su menu ha sido eliminado.',
                'success',
                
              )
              window.location.href= url;
            }
          })
    })
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