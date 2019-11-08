$(document).ready(function(){


    // formulario
    //botones de suma y resta
    $('.contador').on('click',function(e){
        e.preventDefault()
        const input = this.querySelector('input');
        let valor = parseInt(input.value)
        

        if(e.target.classList.contains('c-suma')){
            if(valor < 100000){
                valor+=5000;
                input.value=valor;
            }
        }else if(e.target.classList.contains('c-resta')){
            if(valor > 20000){
                valor-=5000;
                input.value=valor;
            }
        }

    })


    //Confirmar el formulario
    $('.form-prestamo').on('submit',e=>{

        


    })





    /****************************/
    

    $('.box-req').on('click',function(){


        const datos = {
            titulo : $(this).find('h3')[0].innerText,
            imagen : $(this).find('img')[0].src,
            info: $(this).find('.datos-req')[0].innerHTML
        }
        console.log(datos.info)
        Swal.fire({
            title: `<h3>${datos.titulo}</h3>`,
            html:
              `<img src="${datos.imagen}" class="img-fluid img-info"/>
                <div>${datos.info}</div>
                <a href="http://localhost/pages/prestago/solicitud.php" class="btn btn-solicitud">Solicitar</a>
              `,
            showCloseButton: true,
            showConfirmButton: false,
            customClass:{
                container:'pop-info'
            }
          })
    })
})