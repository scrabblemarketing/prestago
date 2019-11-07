$(document).ready(function(){
    

    $('.box-req').on('click',function(){


        const datos = {
            titulo : $(this).find('h3')[0].innerText,
            imagen : $(this).find('img')[0].src,
            info: $(this).find('.datos-req')[0]
        }
        console.log(datos.info)
        Swal.fire({
            title: `<h3>${datos.titulo}</h3>`,
            html:
              `<img src="${datos.imagen}" class="img-fluid img-info"/>
                
              `,
            showCloseButton: true,
            focusConfirm: false,
            confirmButtonText:
              '<i class="fa fa-thumbs-up"></i> Excelente!'
          })
    })
})