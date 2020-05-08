$(document).ready(function () {
    $("#tabla-data").on('submit', '.form-eliminar', function () {
        event.preventDefault();
        const form = $(this);
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
          if (result.value) {
              ajaxRequest(form)
            Swal.fire(
              'Deleted!',
              'Your file has been deleted.',
              'success'
            )
          }
        })
    });

  function ajaxRequest(form) {
      $.ajax({
          url: form.attr('action'),
          type: 'POST',
          data: form.serialize(),
          success: function (respuesta) {
              if (respuesta.mensaje == "ok") {
                  form.parents('tr').remove();
                  Vecas.notificaciones('El registro fue eliminado correctamente', 'Veca´s', 'success');
              } else {
                  Vecas.notificaciones('El registro no pudo ser eliminado, hay recursos usandolo', 'Veca´s', 'error');
              }
          },
          error: function () {
          }
      });
  }

  
});

