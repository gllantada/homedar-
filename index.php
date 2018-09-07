<!DOCTYPE html>
<html style="background-color:#f5f5f5;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Customizable-Background--Overlay.css">
    <link rel="stylesheet" href="assets/css/footer-ultimate.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Text-Input.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/Rounded-Button.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Team-Grid.css">
    <link rel="stylesheet" href="assets/css/textarea-1.css">

</head>
<?php
session_start();
// $_SESSION["wasSend"]=FALSE;
if (isset($_SESSION["wasSend"])) {

  if($_SESSION["wasSend"]==="enviado"){
    var_dump ($_SESSION["wasSend"]);
    // die();
echo "
  <script type='text/javascript'>
    alert('Recibimos tu mensaje en brebe te vamos a estar contactando...');
  </script>
  ";
  session_destroy();

}elseif($_SESSION["wasSend"]=="error"){
    echo"
    <script type='text/javascript'>
    alert('Ups... Tuvimos un problema por favor intenta nuevamente.');

    </script>

    ";

    session_destroy();
}
  // code...
}
?>

<body>
    <div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean fixed-top shadow-sm " style="color:rgb(0,0,0);">
            <div class="container"><a class="navbar-brand" href="#"><img src="assets/img/Group%201.png"></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse text-center " id="navcol-1">
                    <ul class="nav navbar-nav ml-auto xs-text-center md-text-center" style="font-size:15px;min-width:700px; ">
                        <li class="nav-item " role="presentation"><a class="nav-link" href="#nosotros" style="font-family:Montserrat, sans-serif;">Nosotros&nbsp;</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#pacientes" style="font-family:Montserrat, sans-serif;">Pacientes&nbsp;</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#profesionales" style="font-family:Montserrat, sans-serif;">Profesionales</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#impacto" style="font-family:Montserrat, sans-serif;">Proyecto social</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#contacto" style="font-family:Montserrat, sans-serif;">Contacto</a></li>
                    </ul>
            </div>
    </div>
    </nav>
    <div style="background-image:url(&quot;assets/img/HomeBanner.jpg&quot;);background-position:center;background-size:cover;/*background-repeat:no-repeat;*/margin-top:97px;height:500px;font-family:Montserrat, sans-serif;">
        <div class="d-flex justify-content-center align-items-center" style="min-height:initial;position:absolute;left:0;margin-top:157px;"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 offset-0">
                    <h1 style="width:inherit;padding-top:136px;"><strong>Queremos una salud más justa para todos</strong></h1><form id="contactos"   action="#contacto"><button class="add" ><strong><a class="nav-link" style="text-decoration:none;color:white;"href="#contacto">¡CONOCENOS!</a></strong></button></form></div>
                <div class="col offset-xl-0"></div>
            </div>
        </div>
    </div>
    </div>
    <div>
        <div class="container"id="nosotros" style="padding-top:80px">
            <div class="row">
                <div class="col-md-6 col-lg-7 offset-lg-0" style="margin-top:38px;min-height:7px;height:335px;">
                    <h1 style="font-size:36px;font-family:Montserrat, sans-serif;margin-top:31px;"><strong>Quiénes somos&nbsp;</strong></h1>
                    <p style="margin-top:32px;font-family:Montserrat, sans-serif;font-size:14px;">Dar+ es una red de especialistas de ortodoncia con propósito social, que busca generar un cambio en el sistema de salud odontológico actual… Pero, ¿cómo lo hacemos?<br></p>
                    <h5 style="font-family:Montserrat, sans-serif;margin-top:35px;font-size:18px;"><strong>Cambiando un poco las reglas del juego… :)</strong></h5>
                </div>
                <div class="col-md-6 col-lg-5 offset-sm-0 align-self-center" style="margin:0px;margin-top:-33px;"><img class="img-fluid" src="assets/img/Hand.png"></div>
            </div>
        </div>
    </div>
    <div class="article-list" style="background-color:rgb(245,245,245);">
        <div class="container" id="pacientes"style="padding-top:80px">
            <div class="intro"></div>
            <div class="row articles">
                <div class="col" style="height:81px;">
                    <h1 style="margin-top:46px;font-family:Montserrat, sans-serif;font-size:28px;"><strong>1. Dar+ para los pacientes</strong></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="article-list" style="background-color:rgb(245,245,245);">
        <div class="container">
            <div class="intro"></div>
            <div class="row justify-content-center align-content-center articles">
                <div class="col-sm-6 col-md-4 item"><a href="#"></a><img src="assets/img/Group%20224.png" style="height:113px;">
                    <h3 class="name" style="margin-bottom:19px;margin-top:39px;font-family:Montserrat, sans-serif;">SIN COSTO INICIAL</h3><img src="assets/img/left-arrow.png" style="margin-top:-9px;">
                    <p class="description" style="font-family:Raleway, sans-serif;color:rgb(0,0,0);">Bonificando los materiales básicos necesarios para el inicio del tratamiento y cobrando al costo los materiales estéticos. </p><a href="#" class="action"></a></div>
                <div class="col-sm-6 col-md-4 item"><a href="#"></a><img src="assets/img/XMLID_1_.png">
                    <h3 class="name" style="font-family:Montserrat, sans-serif;">SIN DEMORAS</h3><img src="assets/img/left-arrow.png" style="margin-top:2px;">
                    <p class="description" style="font-family:Raleway, sans-serif;color:rgb(0,0,0);">Comprometiendo a los pacientes y a los profesionales a respetar los tiempos, tanto del paciente como del profesional. </p>
                </div>
                <div class="col-sm-6 col-md-4 item"><a href="#"></a><img src="assets/img/Group%20225.png">
                    <h3 class="name" style="margin-top:26px;font-family:Montserrat, sans-serif;">SIN CAMBIOS DE PROFESIONAL</h3><img src="assets/img/left-arrow.png" style="margin-top:4px;">
                    <p class="description" style="margin-top:13px;margin-bottom:0px;font-family:Raleway, sans-serif;color:rgb(0,0,0);">Apoyando la independencia del profesional con una agenda de pacientes, gestión de turnos, materiales y respaldo tecnológico. </p><a href="#" class="action"></a></div>
            </div>
        </div>
    </div>
    <div class="article-list" style="background-color:rgb(245,245,245);">
        <div class="container">
            <div class="intro"></div>
        </div>
    </div>
    <div class="article-list" style="background-color:rgb(245,245,245);"></div>
    <div class="article-list" style="background-color:#75e981;background-image:url(&quot;assets/img/Path%2097.png&quot;);">
        <div class="container">
            <div class="intro"></div>
            <div class="row articles" style="padding-bottom:20px;">
                <div class="col">
                    <h1 class="text-center" style="margin-top:46px;font-family:Montserrat, sans-serif;font-size:27px;color:rgb(255,255,255);">Utilizamos los recursos de manera eficiente<br>y transparente.</h1>
                    <h1 class="text-center" style="margin-top:23px;font-family:Montserrat, sans-serif;font-size:27px;color:rgb(255,255,255);"><img src="assets/img/chevron-arrow-up.png"></h1>
                </div>
            </div>
        </div>
    </div>
    <div></div>
    <div></div>
    <div class="article-list" style="background-color:rgb(245,245,245);">
        <div class="container">
            <div class="intro"></div>
            <div class="row justify-content-center align-content-center align-content-md-center articles">
                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-2 align-content-md-center item"><a href="#"></a><img src="assets/img/health-medicine_first-aid-box.png" style="height:88px;">
                    <h3 class="name" style="margin-bottom:19px;margin-top:39px;font-family:Montserrat, sans-serif;">MATERIALES</h3>
                    <p class="description" style="font-family:Montserrat, sans-serif;color:rgb(56,213,174);font-size:40px;margin-top:-18px;"><strong>$300</strong></p><a href="#" class="action"></a></div>
                <div class="col-sm-1 align-self-center">
                    <h3 class="text-center name" style="margin-top:-35px;font-family:Raleway, sans-serif;font-size:63px;color:rgb(56,213,174);">+</h3>
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-2 item"><a href="#"></a><img src="assets/img/Group%20232.png">
                    <h3 class="name" style="font-family:Montserrat, sans-serif;margin:27px;margin-right:21px;margin-left:-9px;">PROFESIONAL</h3>
                    <p class="description" style="font-family:Montserrat, sans-serif;color:rgb(56,213,174);font-size:40px;margin-top:-26px;"><strong>$300</strong></p>
                </div>
                <div class="col-sm-1 align-self-center">
                    <h3 class="text-center name" style="margin-top:-35px;font-family:Raleway, sans-serif;font-size:63px;color:rgb(56,213,174);">+</h3>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-3 col-xl-2 item"><a href="#"></a><img src="assets/img/Group%20236.png" style="height:102px;">
                    <h3 class="name" style="margin-top:24px;font-family:Montserrat, sans-serif;">CONSULTORIO</h3>
                    <p class="description" style="margin-top:-5px;margin-bottom:0px;font-family:Montserrat, sans-serif;color:#38D5AE;font-size:40px;"><strong>$300</strong></p><a href="#" class="action"></a></div>
                <div class="col-xl-1 justify-content-center align-items-center align-content-center align-self-center mx-auto mx-sm-auto mx-md-auto mx-lg-auto mx-xl-auto" style="padding:-34px;">
                    <h3 class="text-center name" style="margin-top:-35px;font-family:Raleway, sans-serif;font-size:63px;color:rgb(56,213,174);">=</h3>
                </div>
                <div class="col my-auto" style="font-family:Montserrat, sans-serif;">
                    <h3 class="text-center name" style="margin-top:2px;font-family:Montserrat, sans-serif;"><strong>VALOR FIJO DEL TURNO</strong></h3>
                </div>
            </div>
        </div>
    </div>
    <div class="article-list" style="background-color:rgb(255,255,255);">
        <div class="container" id="profesionales"style="padding-top:80px">
            <div class="intro"></div>
            <div class="row articles">
                <div class="col">
                    <h1 style="margin-top:46px;font-family:Montserrat, sans-serif;font-size:28px;"><strong>1. Dar+ para los profesionales</strong></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="article-list" style="background-color:rgb(255,255,255);">
        <div class="container">
            <div class="intro"></div>
            <div class="row justify-content-center articles">
                <div class="col-sm-6 col-md-4 item" style="height:373px;"><a href="#"></a><img src="assets/img/Group%20237.png" style="height:100px;">
                    <h3 class="name" style="margin-bottom:19px;margin-top:39px;font-family:Montserrat, sans-serif;">SIN BUROCRACIA</h3><img src="assets/img/left-arrow.png" style="margin-top:-9px;">
                    <p class="description" style="font-family:Raleway, sans-serif;color:rgb(0,0,0);margin-top:24px;">Se eliminan los plazos de espera para cobrar honorarios de atención. </p><a href="#" class="action"></a></div>
                <div class="col-sm-6 col-md-4 item"><a href="#"></a><img src="assets/img/finance-shopping_cash.png" style="height:108px;">
                    <h3 class="name" style="font-family:Montserrat, sans-serif;margin-top:38px;">PAGO DIRECTO</h3><img src="assets/img/left-arrow.png" style="margin-top:2px;">
                    <p class="description" style="font-family:Raleway, sans-serif;color:rgb(0,0,0);">Sin papeleo para que el profesional solo se preocupe por atender a los pacientes.</p>
                </div>
                <div class="col-sm-6 col-md-4 item"><a href="#"></a><img src="assets/img/Group%20231.png" style="height:103px;">
                    <h3 class="name" style="margin-top:42px;font-family:Montserrat, sans-serif;">ESPECIALIZACIÓN</h3><img src="assets/img/left-arrow.png" style="margin-top:4px;">
                    <p class="description" style="margin-top:13px;margin-bottom:0px;font-family:Raleway, sans-serif;color:rgb(0,0,0);">Trabajamos únicamente con pacientes que buscan tratamientos de ortodoncia. </p><a href="#" class="action"></a></div>
            </div>
        </div>
    </div>
    <div class="article-list" style="background-color:#75e981;background-image:url(&quot;assets/img/Path%2097.png&quot;);">
        <div class="container">
            <div class="intro"></div>
            <div class="row articles" style="padding-bottom:20px;">
                <div class="col">
                    <h1 class="text-center" style="margin-top:46px;font-family:Montserrat, sans-serif;font-size:27px;color:rgb(255,255,255);margin-bottom:-7px;">Apoyamos al profesional y lo ayudamos <br>a que todo sea más fácil.</h1>
                    <h1 class="text-center" style="margin-top:23px;"><img src="assets/img/chevron-arrow-up.png"></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="article-list" style="background-color:rgb(245,245,245);">
        <div class="container">
            <div class="intro"></div>
            <div class="row justify-content-center align-content-center align-content-md-center articles" style="padding-bottom:2px;">
                <div class="col-sm-4 col-md-4 col-lg-2 col-xl-2 offset-sm-1 offset-md-1 offset-lg-0 align-content-md-center item" style="padding-top:51px;"><a href="#"></a><img src="assets/img/Group%20238.png">
                    <h3 class="name" style="margin-bottom:19px;margin-top:39px;font-family:Raleway, sans-serif;font-size:14px;">Llenando agendas <br>según disponibilidad</h3><a href="#" class="action"></a></div>
                <div class="col-sm-1 col-md-1 col-lg-1 align-self-center">
                    <h3 class="text-center name " style="margin-top:-35px;font-family:Raleway, sans-serif;font-size:63px;color:rgb(56,213,174);">+</h3>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-2 col-xl-2 item"><a href="#"></a><img src="assets/img/Group%20109.png">
                    <h3 class="name" style="margin-bottom:19px;margin-top:39px;font-family:Raleway, sans-serif;font-size:14px;">Confirmando turnos<br>para evitar ausencias&nbsp;</h3>
                </div>
                <div class="col-sm-1 col-md-1 col-lg-1 offset-md-0 align-self-center">
                    <h3 class="text-center name mas" style="margin-top:-35px;font-family:Raleway, sans-serif;font-size:63px;color:rgb(56,213,174);">+</h3>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-2 col-xl-2 offset-sm-0 offset-md-0 item"><a href="#"></a><img src="assets/img/health-medicine_first-aid-box-1.png" style="height:102px;">
                    <h3 class="name" style="margin-top:33px;font-family:Raleway, sans-serif;font-size:14px;">Abasteciendo de insumos necesarios <br>(no descartables)</h3><a href="#" class="action"></a></div>
                <div class="col-sm-1 col-md-1 col-lg-1 align-self-center">
                    <h3 class="text-center name" style="margin-top:-35px;font-family:Raleway, sans-serif;font-size:63px;color:rgb(56,213,174);">+</h3>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-2 col-xl-2 item"><a href="#"></a><img src="assets/img/technology_monitor-mac.png" style="height:102px;">
                    <h3 class="name" style="margin-top:33px;font-size:14px;font-family:Raleway, sans-serif;">Instalando software de monitoreo de pacientes</h3><a href="#" class="action"></a></div>
            </div>
        </div>
    </div>
    <div class="align-content-center">
        <div class="container"id="impacto"style="padding-top:80px">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="align-content-center" style="font-family:Montserrat, sans-serif;margin-top:65px;"><strong>Programas de impacto social</strong></h1>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-top:48px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h4 style="font-family:Montserrat, sans-serif;margin-top:19px;"><strong>Jornadas SOLIDARIAS</strong><br></h4>
                      <div class="col-lg-6 align-self-center"><img class="img-fluid img1" src="assets/img/ProyectoSocial_1.jpg"></div>
                    <p style="font-family:Raleway, sans-serif;margin-top:27px;font-size:14px;">Brindamos servicios odontológicos de primera necesidad a chicos en hogares y fundaciones.<br>Queremos ser los responsables de seguir contagiando la sonrisa. Por esta razón, combinamos el lucro con la responsabilidad social y cada fin de semana organizamos jornadas solidarias, en las que odontólogos que pertenecen a nuestra red brindan su tiempo para ayudar a las comunidades con menos recursos.</p>
                </div>
                <div class="col-lg-6 align-self-center"><img class="img-fluid img2" src="assets/img/ProyectoSocial_1.jpg"></div>
            </div>
        </div>
    </div>
    <div style="margin-top:48px;">
        <div class="container">
            <div class="row">
                <div class="col align-self-center"><img class="img-fluid img2" src="assets/img/ProyectoSocial_2.jpg"></div>
                <div class="col-lg-6" style="margin-top:40px;">
                    <h4 style="font-family:Montserrat, sans-serif;margin-top:1px;"><strong>Programa de BECAS DE POSGRADO</strong><br></h4>
                    <div class="col align-self-center"><img class="img-fluid img1" src="assets/img/ProyectoSocial_2.jpg"></div>

                    <p style="font-family:Raleway, sans-serif;margin-top:27px;font-size:14px;">La idea es apoyar el desarrollo de la carrera de los profesionales y, a la vez, fomentar su participación en los eventos solidarios organizados por Dar+ Sonrisas, parte de la misión de la empresa.<br>
La beca consiste en el pago del 50% de la cuota mensual del posgrado de ortodoncia. Este beneficio está dirigido a aquellos alumnos de la especialidad con vocación y experiencia solidaria que deseen realizar un bien a la comunidad.
&nbsp;</p>
                </div>
            </div>
        </div>
    </div>
    <div class="team-grid" style="padding-top:80px" style="background-color:#f5f5f5;margin-top:52px;">
        <div class="container"id="equipo" style="padding-top:80px">
            <div class="intro">
                <h2 class="text-center" style="font-family:Montserrat, sans-serif;">Integrantes de Dar+ </h2>
                <p class="text-center" style="font-family:Raleway, sans-serif;font-size:14px;">Somos un equipo totalmente multidisciplinario, con puntos de vista muy diferentes. La diversidad de opiniones hace rico este proyecto, así como la creencia compartida de que todo puede mejorar…</p>
            </div>
            <div class="row people">
                <div class="col-md-4 col-lg-4 item">
                    <div class="box" style="background-image:url(assets/img/francisco.png)">
                        <div class="cover">
                            <h4 class="name">Francisco Llantada</h4>
                            <p class="title">Ingeniero-MBA</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 item">
                    <div class="box" style="background-image:url(assets/img/sebastian.png)">
                        <div class="cover">
                            <h4 class="name">Sebastian Corral</h4>
                            <p class="title">Odontólogo</p>
                            <div class="social"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 item">
                    <div class="box" style="background-image:url(assets/img/carolina.png)">
                        <div class="cover">
                            <h4 class="name">Carolina Coronel</h4>
                            <p class="title">Diseñadora UX-UI</p>
                            <div class="social"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 offset-md-2 offset-lg-2 item">
                    <div class="box" style="background-image:url(assets/img/gonzalo.png)">
                        <div class="cover">
                            <h4 class="name">Gonzalo Llantada</h4>
                            <p class="title">Programador</p>
                            <div class="social"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 item">
                    <div class="box" style="background-image:url(assets/img/javier.png)">
                        <div class="cover">
                            <h4 class="name">Javier Llantada</h4>
                            <p class="title">ABOGADO</p>
                            <div class="social"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=""style="padding-top:82px"id="contacto">

    </div>
    <div class="register-photo" style="height:573px;padding-top:0px;padding-bottom:83px;">
        <div style="background-image:url(&quot;assets/img/Path%2097.png&quot;);height:573px;background-position:center;background-size:cover;background-repeat:no-repeat;">
            <div class="d-flex justify-content-center align-items-center" style="height:inherit;min-height:initial;position:absolute;left:0;/*background-color:rgba(30,41,99,0.53);*/margin-top:-2px;width:100%;">

                <form name="contacto"onsubmit="return validarFormulario()" id="contacto"method="post" action="contacto.php">
                    <h2 class="text-center" style="font-family:Montserrat, sans-serif;color:rgb(0,0,0);"><strong>Contactanos</strong></h2><div class="group">
    <input  id="name"type="text" name="first_name">
    <span class="highlight"></span>
    <span class="bar"></span>
    <label>Nombre y apellido</label>
</div>


<div class="group">
    <input type="text"id="email" name="email" >
    <span class="highlight"></span>
    <span class="bar"></span>
    <label>Email</label>
</div>


<div class="group">
    <input type="text" id="cel" name="telephone" >
    <span class="highlight"></span>
    <span class="bar"></span>
    <label>Teléfono</label>
</div>


<div class="group">
    <input type="text" id="comments" name="comments">
    <span class="highlight"></span>
    <span class="bar"></span>
    <label>Dejanos tu mensaje...</label>
</div>



                    <div class="form-group"><input id="enviar" class="btn btn-primary btn-block"value="QUIERO SUMARME" type="submit" style="font-family:Montserrat, sans-serif;"></button></div>
                </form>
            </div>
        </div>

    </div>
    <div class="footer-clean">
        <footer style="margin-top:-9px;">
            <div class="container">
                <div class="row justify-content-center" style="margin-top:23px;">
                    <div class="col-sm-12 col-md-3 align-self-center " style="padding-bottom:49px;"><img class="img-fluid footer-logo" src="assets/img/Group%201.png" style="padding:-18px;height:73px;">
                    </div>
                    <div class=" horizonte">
                      <hr>

                    </div>


                    <div class="col-sm-12 col-md-3 align-self-center item-srv" style="margin-bottom:29px;"><img class="img-fluid footer-logo" src="assets/img/Image%2014.png" style="padding:-18px;height:111px;"></div>
                    <div class="horizonte">
<hr>
                    </div>
                    <div class="col-sm-12 col-md-3 text-center justify-content-center align-items-center align-content-center align-self-center item-srv text-center" style="margin-bottom:28px;">
                        <h3 class="text-center" style="color:rgb(0,0,0);font-family:Montserrat, sans-serif;">Trabajá con nosotros</h3>
                        <h3 class="text-center" style="color:rgb(0,0,0);font-family:Raleway, sans-serif;font-size:14px;">Envianos tu CV y sumate al equipo de Dar+ Sonrisas</h3>
                        <button class="btn btn-primary btn-block adjuntar" type="submit" style="font-family:Montserrat, sans-serif;background-color:#38D5AE;border-color:#38D5AE;border-radius:100px;max-width:250px;margin:auto">ENVIAR CV</button>
                        <a
                            class="justify-content-center align-items-center align-content-center" href="contact.html" style="color:rgb(0,0,0);background-color:rgba(255,0,0,0);font-family:Raleway, sans-serif;font-size:12px;"></a>
                            <ul>
                                <li></li>
                                <li><a href="https://ultimatecomputers.ro/shop/index.php?route=information/information&amp;information_id=6"></a></li>
                                <li><a href="https://ultimatecomputers.ro/shop/index.php?route=information/information&amp;information_id=3"></a></li>
                                <li><a href="https://ultimatecomputers.ro/shop/index.php?route=information/information&amp;information_id=5"></a></li>
                            </ul>
                    </div>
                    <div class=" horizonte">
<hr>
                    </div>
                    <div class="col-sm-12 col-md-3  item-srv" style="height:116px;">
                        <h3 class="text-center" style="color:rgb(0,0,0);font-family:Montserrat, sans-serif;font-size:16px;">Contacto</h3>
                        <h3 class="text-center" style="color:rgb(0,0,0);font-family:Raleway, sans-serif;font-size:14px;"><strong>&nbsp; &nbsp;</strong><i class="fa fa-envelope despre-noi"></i><strong> &nbsp;info@darmas.com.ar</strong></h3>
                        <h3 class="text-center" style="color:rgb(0,0,0);font-family:Raleway, sans-serif;font-size:14px;"><strong>&nbsp; &nbsp;</strong><i class="fa fa-phone despre-noi"></i><strong>&nbsp; &nbsp; &nbsp;(011) 4328-7406</strong></h3>
                        <ul>
                            <li class="justify-content-center despre-noi" style="color:rgb(0,0,0);font-family:Raleway, sans-serif;"></li>
                        </ul>
                        <ul></ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Contact-FormModal-Contact-Form-with-Google-Map.js"></script>
    <script src="assets/js/Material-Inputs.js"></script>
    <script src="assets/js/Validar-Form.js"></script>
</body>

</html>
