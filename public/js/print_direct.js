const $btnImprimir = document.querySelector("#print");

$btnImprimir.addEventListener("click", () => {

    console.log("Esta escuchando!");
    let nombreImpresora = "ImpresoraTermica",
    mensaje = "Hola mundo";
    let impresora = new Impresora();
    impresora.setFontSize(1, 1);
    impresora.write(`Tratando de imprimir en ${nombreImpresora}`);
    impresora.write(mensaje);
    impresora.cut();
    impresora.cutPartial();
    impresora.imprimirEnImpresora(nombreImpresora)
        .then(valor => {
            console.log("Al imprimir: " + valor);
        });
});