let data = [
    {
        img: "stolas-1.jpg",
        id: 'stolas',
        autor_nombre: "Maria",
        descripcion: "Con mucho cariño para la comunidad",
    },
    {
        img: "stolas-2.jpg",
        id: 'stolas',
        autor_nombre: "Fernanda",
        descripcion: "Con mucho cariño para la comunidad",
    },
    {
        img: "stolas-3.jpg",
        id: 'stolas',
        autor_nombre: "Carlos",
        descripcion: "Con mucho cariño para la comunidad",
    },
    {
        img: "stolas-4.jpg",
        id: 'stolas',
        autor_nombre: "Ximena",
        descripcion: "Con mucho cariño para la comunidad",
    },
    {
        img: "loona-1.jpg",
        id: 'loona',
        autor_nombre: "Dimitry",
        descripcion: "Con mucho cariño para la comunidad",
    },
    {
        img: "loona-2.jpg",
        id: 'loona',
        autor_nombre: "Sofia",
        descripcion: "Con mucho cariño para la comunidad",
    },
    {
        img: "loona-3.jpg",
        id: 'loona',
        autor_nombre: "Angelo",
        descripcion: "Con mucho cariño para la comunidad",
    },
    {
        img: "loona-4.jpg",
        id: 'loona',
        autor_nombre: "Erick",
        descripcion: "Con mucho cariño para la comunidad",
    },
    {
        img: "blitzo-1.jpg",
        id: 'blitz',
        autor_nombre: "Nathaly",
        descripcion: "Con mucho cariño para la comunidad",
    },
    {
        img: "blitzo-2.jpg",
        id: 'blitz',
        autor_nombre: "Angela",
        descripcion: "Con mucho cariño para la comunidad",
    },
    {
        img: "blitzo-3.jpg",
        id: 'blitz',
        autor_nombre: "Alejandra",
        descripcion: "Con mucho cariño para la comunidad",
    },
    {
        img: "blitzo-4.jpg",
        id: 'blitz',
        autor_nombre: "Hugo",
        descripcion: "Con mucho cariño para la comunidad",
    }
    
];

data.forEach(autor => {
    plantilla(autor)
});


function plantilla(autor){
    let $galeria = document.getElementById("galerias");

    $galeria.insertAdjacentHTML("beforeend",`
        <div class="content-img">
            <img class="img" src="images/${autor.img}" alt="asd">
            <div class="galeria-autor">
                <p class="galeria-nombre">${autor.autor_nombre}</p>
                <p class="galeria-descripcion">${autor.descripcion}</p>
            </div>
        </div>
    `)

}

window.document.addEventListener("DOMContentLoaded", () => {
    let galerias_HTML = document.getElementById('galerias')
    let $items = document.querySelectorAll('.cat-item')

    $items.forEach(cat => {
        cat.addEventListener('click', ()=>{
            galerias_HTML.innerHTML = ''

            let nombre_categoria = cat.id
            data.forEach(autor => {
                if(autor.id == nombre_categoria){
                    plantilla(autor)

                }
            });
        })
    })

});
