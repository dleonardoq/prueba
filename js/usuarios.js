$( document ).ready(function(){
    $("#table").load("./listarUsuarios.php");
})

const enviar = (id) =>{

    $("#documentoUsuario").val(id)

}

$("#formInsertar").submit(function(e){

    e.preventDefault()

    $.ajax({

        data:{option:'1'
                ,documento:$("#idocumento").val()
                ,pass:$("#ipassword").val()
                ,nombre: $("#inombre").val()
                ,genero: $("#igenero").val()
                ,fecha: $("#ifecha").val()
                ,telefono: $("#itelefono").val()
                ,eps: $("#ieps").val()
                ,rol: $("#irol").val()
            }
        ,method: "POST"
        ,url: '../Controllers/UsuariosController.php'
        ,success:function(res){

            if(res === '1'){
                Swal.fire({
                    icon: 'success',
                    title: 'Exito',
                    text: 'El usuario se inserto correctamente',
                })
                $("#table").load("./listarUsuarios.php");
                document.getElementById("formInsertar").reset();
            }else{
                Swal.fire({
                    icon: 'error',
                    title: 'error',
                    text: 'Ocurrio un error al insertar el usuario',
                })
            }

        }
        ,error:function(res){
            console.log(res)
        }

    })

})

$("#formEditar").submit(function(e){

    e.preventDefault()

    $.ajax({

        data:{option:'2'
                ,id: $("#documentoUsuario").val()
                ,documento:$("#documento").val()
                ,pass:$("#password").val()
                ,nombre: $("#nombre").val()
                ,genero: $("#genero").val()
                ,fecha: $("#fecha").val()
                ,telefono: $("#telefono").val()
                ,eps: $("#eps").val()
                ,rol: $("#rol").val()
            }
        ,method: "POST"
        ,url: '../Controllers/UsuariosController.php'
        ,success:function(res){

            if(res === '1'){
                Swal.fire({
                    icon: 'success',
                    title: 'Exito',
                    text: 'El usuario se actualizo correctamente',
                })
                $("#table").load("./listarUsuarios.php");
                document.getElementById("formEditar").reset();
            }else{
                Swal.fire({
                    icon: 'error',
                    title: 'error',
                    text: 'Ocurrio un error al actualizar el usuario',
                })
            }

        }
        ,error:function(res){
            console.log(res)
        }

    })
})


const eliminar = (id) =>{

    $.ajax({

        data:{documento: id, option:'3'}
        ,method: "POST"
        ,url: '../Controllers/UsuariosController.php'
        ,success:function(res){

            if(res === '1'){
                Swal.fire({
                    icon: 'success',
                    title: 'Exito',
                    text: 'El usuario se elimino correctamente',
                })
                $("#table").load("./listarUsuarios.php");
            }else{
                Swal.fire({
                    icon: 'error',
                    title: 'error',
                    text: 'Ocurrio un error al eliminar el usuario',
                })
            }

        }
        ,error:function(res){
            console.log(res)
        }

    })

}