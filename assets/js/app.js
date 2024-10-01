const imagen1 = document.getElementById('imagen1');
const imagen2 = document.getElementById('imagen2');
const imagen3 = document.getElementById('imagen3');
const texto1 = document.getElementById('texto1');
const cargarImagen = (entradas, observador) => {
    entradas.forEach((entrada) => {
        if (entrada.isIntersecting) {
            entrada.target.classList.add('visible');
            console.log(`Imagen ${entrada.target.id} visible`); // Para verificar
        } else {
            entrada.target.classList.remove('visible');
        }
    });
};

const observador = new IntersectionObserver(cargarImagen, {
    root: null,
    rootMargin: '0px',
    threshold: 0.1
});

observador.observe(imagen1);
observador.observe(imagen2);
observador.observe(imagen3);
observador.observe(texto1);
