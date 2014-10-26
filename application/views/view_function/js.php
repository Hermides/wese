<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.10.0/js/jquery.dataTables.js"></script>
<script>
    $(document).ready(function() {
        
        $(".messages").hide();
        //queremos que esta variable sea global
        var fileExtension = "";
        //función que observa los cambios del campo file y obtiene información
        $(':file').change(function()
        {
            //obtenemos un array con los datos del archivo
            var file = $("#imagen")[0].files[0];
            //obtenemos el nombre del archivo
            var fileName = file.name;
            //obtenemos la extensión del archivo
            fileExtension = fileName.substring(fileName.lastIndexOf('.') + 1);
            //obtenemos el tamaño del archivo
            var fileSize = file.size;
            //obtenemos el tipo de archivo image/png ejemplo
            var fileType = file.type;
            //mensaje con la información del archivo
            showMessage("<span class='info'>Archivo para subir: " + fileName + ", peso total: " + fileSize + " bytes.</span>");
        });

        //al enviar el formulario
        $(':button').click(function() {
            //información del formulario
            var formData = new FormData($(".formulario")[0]);
            var message = "";
            //hacemos la petición ajax  
            $.ajax({
                url: 'upload.php',
                type: 'POST',
                // Form data
                //datos del formulario
                data: formData,
                //necesario para subir archivos via ajax
                cache: false,
                contentType: false,
                processData: false,
                //mientras enviamos el archivo
                beforeSend: function() {
                    message = $("<span class='before'>Subiendo la imagen, por favor espere...</span>");
                    showMessage(message)
                },
                //una vez finalizado correctamente
                success: function(data) {
                    message = $("<span class='success'>La imagen ha subido correctamente.</span>");
                    showMessage(message);
                    if (isImage(fileExtension))
                    {
                        $(".showImage").html("<img src='files/" + data + "' />");
                    }
                },
                //si ha ocurrido un error
                error: function() {
                    message = $("<span class='error'>Ha ocurrido un error.</span>");
                    showMessage(message);
                }
            });
        });
    })

    //como la utilizamos demasiadas veces, creamos una función para 
    //evitar repetición de código
    function showMessage(message) {
        $(".messages").html("").show();
        $(".messages").html(message);
    }

    //comprobamos si el archivo a subir es una imagen
    //para visualizarla una vez haya subido
    function isImage(extension)
    {
        switch (extension.toLowerCase())
        {
            case 'jpg':
            case 'gif':
            case 'png':
            case 'jpeg':
                return true;
                break;
            default:
                return false;
                break;
        }
    }
    
      $('#clave').keyup(function(e) {
     var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
     var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
     var enoughRegex = new RegExp("(?=.{6,}).*", "g");
     if (false == enoughRegex.test($(this).val())) {
             $('#passstrength').html('<p class="text-danger">Muy debil!</p>');
     } else if (strongRegex.test($(this).val())) {
             $('#passstrength').className = 'ok';
             $('#passstrength').html('<p class="text-success">Fuerte!</p>');
     } else if (mediumRegex.test($(this).val())) {
             $('#passstrength').className = 'alert';
             $('#passstrength').html('<p class="text-warning">Media!</p>');
     } else {
             $('#passstrength').className = 'error';
             $('#passstrength').html('<p class="text-danger">Débil!</p>');
     }
     return true;
});
</script>