
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="boostrap4/css/bootstrap4.6.css">
  <link rel="stylesheet" href="css/estilos.css">
</head>  
    <body class="bg-secondary">

  
    <form class="formulario bg-light" id="formulario" >

      <div class="col-md-12 row">

                  <div class="col-lg-9">
                  <h4 class="text-left ml-4">Encuesta - Capacitación a Centros de Contacto</h3>
                  </div>

                  <div class="col-lg-3">
                        <img src="../img/logo.png" width="35%" >
                  </div>


        </div><hr>

        <div class="alert alert-primary" role="alert" id="resultado">
           <small id="resultados">  Bienvenido a la encuesta del curso. Favor de completar todos los campos.</small> 
        </div>

            <div class="col-md-12 row">

                  <div class="col-md-3">
                      <div class="form-group">

                            <label class="custom-control text-dark" >Nombre  </label>
                            <input id="nombre" type="text" class="form-control "  required >
                    </div>
                  </div>
                  <div class="col-md-3">
                      <div class="form-group">

                            <label class="custom-control text-dark" >Apellido Paterno  </label>
                            <input id="paterno" type="text" class="form-control "  required>
                    </div>
                  </div>

                  <div class="col-md-3">
                      <div class="form-group">

                            <label class="custom-control text-dark" >Apellido Materno  </label>
                            <input id="materno" type="text" class="form-control "  required>
                    </div>
                  </div>

                  <div class="col-md-3">
                      <div class="form-group">

                                  <label class="custom-control text-dark" ># Empleado SAP  </label>
                                  <input id="sap" type="number" size="5" class="form-control "  required >
                    </div>
                  </div>

            </div>

            <div class="col-md-12 row">

                <div class="col-md-6">
                            <div class="form-group">

                                  <label class="custom-control text-dark" >Nombre del curso </label>
                                  <input id="evento" type="text" class="form-control "  required >
                          </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">

                                  <label class="custom-control text-dark" >Número de clase: </label>
                                  <input id="clase" type="number" size="5" class="form-control "  required >
                          </div>
                        </div>
                        </div>
                

            </div>

            <div class="col-md-12 ">

                        <div class="form-group pt-4">

                            <label class="custom-control text-dark" >1. ¿Tu instructor te entregó de manera oportuna el cuaderno de trabajo?</label>
                            <input type="radio" name="preg1" value="s" required>Sí<br>
                            <input type="radio" name="preg1" value="n">No<br>

                        </div>

                        <div class="form-group pt-4">

                            <label class="custom-control text-dark" >2. ¿Tu instructor te ha orientado cuando presentas dudas respecto al contenido del curso? </label>
                            <input type="radio" name="preg2" value="siempre" required>Siempre<br>
                            <input type="radio" name="preg2" value="casi siempre">Casi siempre<br>
                            <input type="radio" name="preg2" value="a veces">A veces<br>
                            <input type="radio" name="preg2" value="nunca">Nunca<br>
                        </div>

                        <div class="form-group pt-4">

                            <label class="custom-control text-dark" >3. ¿Tu instructor se dirige con un lenguaje cordial y respetuoso? </label>
                            <input type="radio" name="preg3" value="siempre" required>Siempre<br>
                            <input type="radio" name="preg3" value="casi siempre">Casi siempre<br>
                            <input type="radio" name="preg3" value="a veces">A veces<br>
                            <input type="radio" name="preg3" value="nunca">Nunca<br>
                        </div>

                        <div class="form-group pt-4">

                            <label class="custom-control text-dark" >4. ¿El equipo de reclutamiento te explicó de manera general funciones de tu campaña, esquema de pagos y prestaciones? </label>
                            <input type="radio" name="preg4" value="siempre" required>Siempre<br>
                            <input type="radio" name="preg4" value="casi siempre">Casi siempre<br>
                            <input type="radio" name="preg4" value="a veces">A veces<br>
                            <input type="radio" name="preg4" value="nunca">Nunca<br>
                        </div>

                        <div class="form-group pt-4">

                            <label class="custom-control text-dark" >5. ¿Tu instrucor te explicó las funciones generales de tu campaña? </label>
                            <input type="radio" name="preg5" value="s" required>Sí<br>
                            <input type="radio" name="preg5" value="n">No<br>
                        </div>

                        <div class="form-group pt-4">

                            <label class="custom-control text-dark" >6. ¿El equipo de cómputo se encuentra n las condiciones necesarias para practicar los procedimientos revisados? </label>
                            <input type="radio" name="preg6" value="s" required>Sí<br>
                            <input type="radio" name="preg6" value="n">No<br>
                        </div>

                        <div class="form-group pt-4">

                            <label class="custom-control text-dark" >7. ¿Tu instructor te guía a cumplir los acuerdos de capacitación? </label>
                            <input type="radio" name="preg7" value="siempre" required>Siempre<br>
                            <input type="radio" name="preg7" value="casi siempre">Casi siempre<br>
                            <input type="radio" name="preg7" value="a veces">A veces<br>
                            <input type="radio" name="preg7" value="nunca">Nunca<br>
                        </div>

                        <div class="form-group pt-4">

                            <label class="custom-control text-dark" >8. ¿Tu instructor verifica la comprensión de los temas revisados? </label>
                            <input type="radio" name="preg8" value="siempre" required>Siempre<br>
                            <input type="radio" name="preg8" value="casi siempre">Casi siempre<br>
                            <input type="radio" name="preg8" value="a veces">A veces<br>
                            <input type="radio" name="preg8" value="nunca">Nunca<br>
                        </div>

                      <div class="form-group pt-4">
                        <center>
                            <button type="submit" class="btn btn-primary mb-4">Enviar respuestas</button>
                        </center>  
                      </div>
            </div>           

   

      </form>

      <script src="boostrap4/js/bootstrap.js"></script>
      <script src="boostrap4/js/jquery-3.5.1.js"></script>

      <script>
      $(function(){

      
      $("#formulario").on("submit", function(e){

                            e.preventDefault();

                            let nombre = document.getElementById('nombre').value 
                       
                            let paterno = document.getElementById('paterno').value 
                            
                            let materno = document.getElementById('materno').value 

                            let correo = document.getElementById('correo').value 

                            let evento = document.getElementById('evento').value 

                            let clase = document.getElementById('clase').value   

                            let sap = document.getElementById('sap').value   

                            let preg1 = document.querySelector('input[name="preg1"]:checked').value  

                            let preg2 = document.querySelector('input[name="preg2"]:checked').value    

                            let preg3 = document.querySelector('input[name="preg3"]:checked').value   

                            let preg4 = document.querySelector('input[name="preg4"]:checked').value   
                            
                            let preg5 = document.querySelector('input[name="preg4"]:checked').value   
                          
                            let preg6 = document.querySelector('input[name="preg4"]:checked').value   

                            let preg7 = document.querySelector('input[name="preg4"]:checked').value   

                            let preg8 = document.querySelector('input[name="preg4"]:checked').value   


                            
                            var parametros = {  

                                "nomb" : nombre, 
                                    

                                };

                                $.ajax({
                                            data:  parametros, //datos que se envian a traves de ajax
                                            url:   'encuestaInsert.php', //archivo que recibe la peticion
                                            type:  'post', //método de envio
                                            beforeSend: function () {
                                                
                                              $("#resultado").html("Espere por favor .....");
                                              $("#resultados").show(400);

                                            },
                                            success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve mostramos alerta y ocultamos alerta
                                                
                                                    $("#resultado").html(response);
                                                    $("#resultados").show(300);

                                                    
                                                    setTimeout(function(){

                                                      $("#resultados").hide(300); 
                                                    
                                                    },5000);
                                                    $("#formulario")[0].reset();

                                            }
                                            
                                      });
                              
                  });
              });


      </script>

 
    </body>
</html>