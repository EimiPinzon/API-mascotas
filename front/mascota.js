
function agregar(nombre){

    

    let nombre1=document.getElementById("nombre").value;

    console.log(nombre);
}

function editar(nombre){


    console.log(nombre);


    /* datosEditar={
        "nombre":nombre,
    } */

    /* $.ajax({
        url:"http://localhost/API-mascotas/back/public/nuevo?"+id,
        type:"post",
        data:datosEditar
    }) */

}

function eliminar(id){


    fetch("http://localhost/API-mascotas/back/public/eliminar/"+id,{
        method: 'DELETE',
    })
            .then(function (result) {

                if (result.ok) {
                    return result.json();
                }
            })
            .then(function (data) {
                console.log(data)
            })
    
}

function infoMascota(id){
    fetch("http://localhost/API-mascotas/back/public/info/"+id,)

    
            .then(function (result) {

                if (result.ok) {
                    return result.json();
                }
            })
            .then(function (data) {
                console.log(data)

                for(var i in data){

                    document.getElementById("idModal").value =data[i].id.toString();
                    document.getElementById("nombreModal").value =data[i].nombre.toString();
                    document.getElementById("statusModal").value =data[i].status.toString();
                    document.getElementById("categoriaModal").value =data[i].categoria.toString();
                    document.getElementById("tagModal").value =data[i].tag.toString();

                }
                
            })

}

function actualizarMascota(){
    
    
    idAct=document.getElementById("idModal").value;
    nombreAct=document.getElementById("nombreModal").value;
    statusAct=document.getElementById("statusModal").value;
    categoriaAct=document.getElementById("categoriaModal").value;

    console.log(idAct);

    const data1 = {nombre:nombreAct,status:statusAct,categoria:categoriaAct};

    fetch("http://localhost/API-mascotas/back/public/editar/"+idAct, {
        method: 'PUT',
        body: JSON.stringify(data1),
        headers: {
            'Content-Type': 'application/json',
        }
        
        }) .then(function (result) {

            if (result.ok) {
                return result.json();

            }
        })
        .then(function (data) {

            console.log(data)
        })


}


function guardo(){

    alert(si)

    location.reload()
}
