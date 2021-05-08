class RegistrarEtiqueta extends HTMLElement {

    constructor() {
        super();
        console.log("Bien Hecho Campeon!!! , Etiqueta Registrada Correctamente");
    }

}

export function registrarEtiqueta (tagName) {
    customElements.define(tagName,RegistrarEtiqueta);
}