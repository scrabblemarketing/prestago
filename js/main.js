$(document).ready(function(){


    // formulario
    //botones de suma y resta
    $('.contador').on('click',function(e){
        e.preventDefault()
        const input = this.querySelector('input');
        let valor = parseInt(input.value)
        

        if(e.target.classList.contains('c-suma')){
            if(valor < 500000){
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

    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        autoplay:true,
        responsive:{
            0:{
                items:1
            }
        },
        dots:true,
        dotsEach:3
    })




    async function distritos(){
        let conn = await fetch('includes/data/distritos.json');

        let respuesta = await conn.json();

        return respuesta;
    }


   
        distritos()
            .then(res=>{
                let resultados = Object.values(res);
                let revision=[];
                resultados.forEach(bloque =>{
                    bloque.forEach(distrito =>{
                        
                        if(distrito.etiqueta_ubigeo.indexOf(', Lima') > 0){

                            revision.push(bloque)
                        }
                    })
                    
                })
                const distritos = revision[0];
                

                const selec = document.querySelector('#ubicacion');
                distritos.forEach(distrito =>{
                    const opcion = document.createElement('option');
                    opcion.value=distrito.codigo_ubigeo;
                    opcion.innerText = distrito.nombre_ubigeo;

                    selec.appendChild(opcion)
                })
            })
   
   

    /* Paginancion*/

    $('#next').on('click',()=>{
        $('#page-1').addClass("animated fadeOutLeft")
        $('#page-1').removeClass("act-page")
        $('#page-2').addClass("act-page animated fadeInRight")
    })



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

