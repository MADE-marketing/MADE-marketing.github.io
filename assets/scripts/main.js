AOS.init();


const datos = [
    {
        nombre: "Camila Rodríguez",
        imagen: "assets/img/perfil_1.png"
    },
    {
        nombre: "Valeria Martínez",
        imagen: "assets/img/perfil_2.png"
    },
    {
        nombre: "Lucía Fernández",
        imagen: "assets/img/perfil_3.png"
    },
    {
        nombre: "Sofía Morales",
        imagen: "assets/img/perfil_4.png"
    },
    {
        nombre: "Gabriela Ramírez",
        imagen: "assets/img/perfil_5.png"
    },
    {
        nombre: "Ana López",
        imagen: "assets/img/perfil_6.png"
    },
    {
        nombre: "Isabel Torres",
        imagen: "assets/img/perfil_7.png"
    },
    {
        nombre: "Mariana Gómez",
        imagen: "assets/img/perfil_8.png"
    },
    {
        nombre: "Fernanda Sánchez",
        imagen: "assets/img/perfil_9.png"
    },
    {
        nombre: "Laura Pérez",
        imagen: "assets/img/perfil_10.png"
    }
];

let index = 0;

function cambiarContenido() {
    index = (index + 1) % datos.length; // Para que vuelva al principio cuando llegue al final

    // Actualiza el contenido del primer div
    document.getElementById("imagen_1").src = datos[index].imagen;
    document.getElementById("texto_1").innerHTML = `${datos[index].nombre}: <b class="p_compro">&nbspCOMPRÓ</b>`;

    // Actualiza el contenido del segundo div
    const siguienteIndex = (index + 1) % datos.length;
    document.getElementById("imagen_2").src = datos[siguienteIndex].imagen;
    document.getElementById("texto_2").innerHTML = `${datos[siguienteIndex].nombre}: <b class="p_compro">&nbspCOMPRÓ</b>`;
}

// Cambia el contenido cada 6 segundos (6000 milisegundos)
setInterval(cambiarContenido, 6000);
