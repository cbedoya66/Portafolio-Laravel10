//metodos que necesita el componente
const mostrarOcultarMenu = () => {
    let menuVisible = false;

    const responsive = document.querySelector(".responsive");

    /*
    $(document).on('click', '#button', (e)=>{

    })
 */
    if (menuVisible) {
        responsive.style.display = block;
        //menuVisible = false;
    } else {
        responsive.style.display = none;
        // menuVisible = true;
    }
};
const seleccionar = () => {
    //oculto el menu una vez que selecciono una opcion
    const responsive = document.getElementById(".");
    responsive.style.display = none;
    // menuVisible = false;
};
