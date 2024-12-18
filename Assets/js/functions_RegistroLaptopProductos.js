var tableProductos;
document.addEventListener('DOMContentLoaded', function(){

    tableProductos = $('#tableProductos').dataTable( {
        "aProcessing":true,
        "aServerSide":true,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        },
        "ajax":{
            "url": " "+base_url+"/laptopProducto/getProductos",
            "dataSrc":""
        },
        "columns": [
    {"data": "idproductolap"},
    {"data": "codigo"},
    {"data": "nombre_producto"},
    {"data": "especificaciones"},
    {"data": "color"},
    {
        "data": "imagen",
        "render": function(data, type, row) {
            // Mostrar la imagen en lugar del nombre del archivo
            return '<img src="uploads/' + data + '" alt="Imagen Producto" style="width: 80px; height: auto;">';
        }
    },
    {"data": "precio"},
    {"data": "categoria"},
    {"data": "fecha_registro"},
    {"data": "status"},
    {"data": "options"}
],

        'dom': 'lBfrtip',
        'buttons': [
            {
                "extend": "copyHtml5",
                "text": "<i class='far fa-copy'></i> Copiar",
                "titleAttr":"Copiar",
                "className": "btn btn-secondary"
            },{
                "extend": "excelHtml5",
                "text": "<i class='fas fa-file-excel'></i> Excel",
                "titleAttr":"Esportar a Excel",
                "className": "btn btn-success"
            },{
                "extend": "pdfHtml5",
                "text": "<i class='fas fa-file-pdf'></i> PDF",
                "titleAttr":"Esportar a PDF",
                "className": "btn btn-danger"
            },{
                "extend": "csvHtml5",
                "text": "<i class='fas fa-file-csv'></i> CSV",
                "titleAttr":"Esportar a CSV",
                "className": "btn btn-info"
            }
        ],
        "resonsieve":"true",
        "bDestroy": true,
        "iDisplayLength": 5,
        "order":[[0,"desc"]]  
    });

    var formProducto = document.querySelector("#formProducto");
    formProducto.onsubmit = function(e) {
        e.preventDefault();
        var intCodigo = document.querySelector('#txtCodigo').value;
        var strColor = document.querySelector('#txtColor').value;
        var fileImagen = document.querySelector('#txtImagen').value;
        var strNombre = document.querySelector('#txtNombre').value;
        var strEspecificacion = document.querySelector('#txtEspecificacion').value;
        var floatPrecio = document.querySelector('#txtPrecio').value;
        var strCategoria = document.querySelector('#txtCategoria').value;
        var strFecha = document.querySelector('#txtFecha').value;


        if(intCodigo == '' || strColor == ''|| fileImagen== '' || strNombre == '' || strEspecificacion == '' || floatPrecio == '' || strCategoria == '' || strFecha == '')
        {
            swal("Atención", "Todos los campos son obligatorios." , "error");
            return false;
        }

        let elementsValid = document.getElementsByClassName("valid");
        for (let i = 0; i < elementsValid.length; i++) { 
            if(elementsValid[i].classList.contains('is-invalid')) { 
                swal("Atención", "Por favor verifique los campos en rojo." , "error");
                return false;
            } 
        } 

        var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        var ajaxUrl = base_url+'/laptopProducto/setProducto'; 
        var formData = new FormData(formProducto);
        request.open("POST",ajaxUrl,true);
        request.send(formData);
        request.onreadystatechange = function(){
            if(request.readyState == 4 && request.status == 200){
                var objData = JSON.parse(request.responseText);
                if(objData.status)
                {
                    $('#modalFormProducto').modal("hide");
                    formProducto.reset();
                    swal("Producto", objData.msg ,"success");
                    tableProductos.api().ajax.reload();
                }else{
                    swal("Error", objData.msg , "error");
                }
            }
        }

    }
}, false);





function fntViewProducto(idproductolap){
    var idproducto = idproductolap;
    var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
    var ajaxUrl = base_url+'/laptopProducto/getProducto/'+idproducto;
    request.open("GET",ajaxUrl,true);
    request.send();
    request.onreadystatechange = function(){
        if(request.readyState == 4 && request.status == 200){
            var objData = JSON.parse(request.responseText);

            if (objData.status) {
                var estadoProducto = objData.data.status == 1 ? 
                '<span class="badge badge-success">Activo</span>' : 
                '<span class="badge badge-danger">Inactivo</span>';
                
            
                document.querySelector("#celCodigo").innerHTML = objData.data.codigo;
                document.querySelector("#celNombre").innerHTML = objData.data.nombre_producto;
                document.querySelector("#celEspecificacion").innerHTML = objData.data.especificaciones;
                document.querySelector("#celColor").innerHTML = objData.data.color;
                document.querySelector("#celImagen").innerHTML = `<img src="${base_url}/uploads/${objData.data.imagen}" alt="Imagen Producto" width="50">`;
                document.querySelector("#celPrecio").innerHTML = objData.data.precio;
                document.querySelector("#celCategoria").innerHTML = objData.data.categoria;
                document.querySelector("#celFechaRegistro").innerHTML = objData.data.fechaRegistro; 
                document.querySelector("#celEstado").innerHTML = estadoProducto;
                $('#modalViewProducto').modal('show');
            }else{
                swal("Error", objData.msg , "error");
            }
        }
    }
}
//SSSSSSSSSSS

function fntEditProducto(idproductolap){
    document.querySelector('#titleModal').innerHTML ="Actualizar Producto";
    document.querySelector('.modal-header').classList.replace("headerRegister", "headerUpdate");
    document.querySelector('#btnActionForm').classList.replace("btn-primary", "btn-info");
    document.querySelector('#btnText').innerHTML ="Actualizar";

    var idproducto =idproductolap;
    var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
    var ajaxUrl = base_url+'/laptopProducto/getProducto/'+idproducto;
    request.open("GET",ajaxUrl,true);
    request.send();
    request.onreadystatechange = function(){

        if(request.readyState == 4 && request.status == 200){
            var objData = JSON.parse(request.responseText);

            if(objData.status)
            {
                
                document.querySelector("#idProducto").value = objData.data.idproductolap;
                document.querySelector("#txtCodigo").value = objData.data.codigo;
                document.querySelector("#txtColor").value = objData.data.color;
                document.querySelector("#txtNombre").value = objData.data.nombre_producto;
                document.querySelector("#txtEspecificacion").value = objData.data.especificaciones;
                document.querySelector("#txtPrecio").value = objData.data.precio;
                document.querySelector("#txtCategoria").value = objData.data.categoria;
                document.querySelector("#txtFecha").value = objData.data.fechaRegistro;
                document.querySelector("#txtImagen").value = objData.data.imagen;

                if(objData.data.status == 1){
                    document.querySelector("#listStatus").value = 1;
                }else{
                    document.querySelector("#listStatus").value = 2;
                }
                $('#listStatus').selectpicker('render');
            }
        }
    
        $('#modalFormProducto').modal('show');
    }
}

function fntDelProducto(idproductolap){

    var idProducto = idproductolap;
    swal({
        title: "Eliminar Producto",
        text: "¿Realmente quiere eliminar el Producto?",
        type: "warning",
        showCancelButton: true,
        confirmButtonText: "Si, eliminar!",
        cancelButtonText: "No, cancelar!",
        closeOnConfirm: false,
        closeOnCancel: true
    }, function(isConfirm) {
        
        if (isConfirm) 
        {
            var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            var ajaxUrl = base_url+'/laptopProducto/delProducto';
            var strData = "idProducto="+idProducto;
            request.open("POST",ajaxUrl,true);
            request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            request.send(strData);
            request.onreadystatechange = function(){
                if(request.readyState == 4 && request.status == 200){
                    var objData = JSON.parse(request.responseText);
                    if(objData.status)
                    {
                        swal("Eliminar!", objData.msg , "success");
                        tableProductos.api().ajax.reload(function(){
                            $('#modalFormUsuario').modal('hide');
                        });
                    }else{
                        swal("Atención!", objData.msg , "error");
                    }
                }
            }
        }

    });

}


function openModal()
{
    document.querySelector('#idProducto').value ="";
    document.querySelector('.modal-header').classList.replace("headerUpdate", "headerRegister");
    document.querySelector('#btnActionForm').classList.replace("btn-info", "btn-primary");
    document.querySelector('#btnText').innerHTML ="Guardar";
    document.querySelector('#titleModal').innerHTML = "Nuevo Producto";
    document.querySelector("#formProducto").reset();
    $('#modalFormProducto').modal('show');
}