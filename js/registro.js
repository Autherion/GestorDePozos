var pozoActual = '0';

function enviarPozo(pozo) {
    $("#form").removeClass('d-none');
    
    let pozoElegido = document.getElementById(pozo);

    pozoActual = pozoElegido.name;
}

document.getElementById('submit').addEventListener("click", () => {
    if (pozoActual != '0'){
        let psiBtn = String(document.getElementById('psiInput').value);
        $.ajax({
            type: 'POST',
            url: 'php/insertarDatos.php',
            data: {pozo: pozoActual, psi: psiBtn},
            success: function(response) {
                alert("El Registro para el Pozo " + pozoActual + " ha sido completado!")
            }
        });
    }  
})