$("#form_ingreso").submit(function(e){

    e.preventDefault();

    $.ajax({

        data:{documento: $("#documento").val(), pass: $("#password").val()}
        ,method: "POST"
        ,url: './src/Controllers/IngresoController.php'
        ,success:function(res){

            if(res === '1'){
                window.location.href= "./src/views/"
            }else{
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Usuario o contraseña incorrectas',
                })
            }
        }
        ,error:function(res){
            console.log(res)
        }

    })

})