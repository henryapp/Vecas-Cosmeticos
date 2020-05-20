  
$(document).ready(function () {
    Vecas.validacionGeneral('form-general');
    $('#nombre_per').on('change',function(){
        $('#slug').val($(this).val().toLowerCase().replace(/ /g, '-'))
    })
});