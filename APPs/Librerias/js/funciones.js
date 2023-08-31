function cargadatos_EG (datos)
{
    //alert (datos);
    d=datos.split('||');
    //console.log=("entro a cargar datos");
    $('#FraccionU').val(d[0]);
    $('#FechaIniU').val(d[1]);
    $('#DiasU').val(d[3]);
}

function agregardatos (fechaInicio,dias)
{   
    cadena="fechaInicio=" + fechaInicio + "&dias=" + dias;
    //cadena="Usuario=79912241&Periodo=1&fechaInicio=2023-02-04&dias=5";
    //alertify.success("ingreso agregardatos");
    $.ajax({
            type:"POST" ,
            url:"php/AgregarDatos.php",
            data:cadena,
            success:function(r) {
                //alertify.success(r);
                d=r.split('||');
                if (d[0]==0){
                    alertify.success("Agregado con exito :)");
                    $('#tabla').load('Componetes/Fracciones.php');
                }
                else {
                    alertify.error(d[1]);
                }
            }
    });
}

function modificadatos (fechaInicio,dias,fraccion)
{   
    cadena="fechaInicio=" + fechaInicio + "&dias=" + dias+ "&fraccion=" + fraccion;
    //cadena="Usuario=79912241&Periodo=1&fechaInicio=2023-02-04&dias=5";
    //alertify.success("ingreso agregardatos");
    $.ajax({
            type:"POST" ,
            url:"php/ModificaDatos.php",
            data:cadena,
            success:function(r) {
                d=r.split('||');
                if (d[0]==0){
                    alertify.success("Agregado con exito :)");
                    $('#tabla').load('Componetes/Fracciones.php');
                }
                else {
                    alertify.error(d[1]);
                }
            }
    });
}



function ValidarPeriodo2(id)
{
    if(isset($_POST['insert']))
    {
        alertify.success(" ValidarPeriodo");
        //header('Location: Fraccion.php');
    }
    
   /*
    $.ajax({
        type:"POST" ,
        url:"php/ValidarPeriodo.php",
        data:"Periodo="+periodo,
        success:function(r) {
            if (r==1){
                alertify.success("no se puede programar en este periodo ya que tiene periodos anteriores pendientes por solicitar.");
            }
            else 
            {
                alertify.success("puede ingresar a las fracciones");
                
                $.ajax({
                    type:"POST" ,
                    url:"php/SetSession.php",
                    data:"Periodo=" + periodo,
                    success:function(r) {}
                });
                
            }
        }
    });
    */
}

function ValidaIngreso(Usuario, Clave)
{   
    //alertify.success("ingreso "); 
    cadena="Usuario=" + Usuario + "&Clave=" + Clave;
    alertify.success(cadena);
    $.ajax({
        type:"POST" ,
        url:"php/ValidaAutenticacion.php",
        data:cadena,
        success:function(r) {
            if (r=1){
                alertify.success("Ingreso Satisfactorio :)");
            }
            else 
            {
                alertify.success("Fallo el servidor ;( ");
            }
        }
    });
   
}


