<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nosotros</title>
    <link rel="stylesheet" href="ibras.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
</head>

<body>

    
    <div class="login-popup">
        <div class="form-popup" id="popupForm_registration">
          <form action="/action_page.php" class="form-container">

            <img onclick="closeForm_registration()" src="close_small_icon.jpeg" height="32" width="32" style="margin-left: 325px; margin-top: 1px;">

            <img class="bimage" src="Burguer.png">
            <p style="font-family: mountain;float: right;">Registro de Usuario</p>
            
            <label for="username">
            <p style="text-align: left; margin-top: 5px; margin-bottom: 5px;">Nombre y apellido:</p>
            </label>
            <input type="text" id="email" placeholder="username" name="username" required>

            <label for="email">
            <p style="text-align: left; margin-top: 5px; margin-bottom: 5px;">Correo:</p>
            </label>
            <input type="password" id="psw" placeholder="Email" name="email" required>

            <label for="psw">
            <p style="text-align: left; margin-top: 5px; margin-bottom: 5px;">Contrasena:</p>
            </label>
            <input type="password" id="psw" placeholder="Password" name="password" required>

            <label for="psw">
            <p style="text-align: left; margin-top: 5px; margin-bottom: 5px;">Repetir Contrasena:</p>
            </label>
            <input type="text" id="email" placeholder="Confirm Password" name="repeat_password" required>

            <label for="address">
            <p style="text-align: left; margin-top: 5px; margin-bottom: 5px;" >Direccion:</p>
            </label>
            
            <input type="text" style="line-height: 60px;" id="email" placeholder="Address" name="address" required>
            
            <input type="button" class="btn cancel" onclick="closeForm_registration()" style="float: right;" value="Cargar">
            
          </form>
        </div>
      </div>




      <script>
        function openForm_registration() {
            document.getElementById("popupForm_login").style.display = "none";
            document.getElementById("popupForm_registration").style.display = "block";
        }
        
        function closeForm_registration() {
          document.getElementById("popupForm_registration").style.display="none";
        }
      </script>


<div class="login-popup">
    <div class="form-popup1 modal-content animate form-container" id="popupForm_login">
      <form action="/action_page.php" class="form-container">
        <img onclick="closeForm_login()" src="close_small_icon.jpeg" height="20" width="20" style="margin-left: 305px; margin-top: 1px;">

        <img style="float: left; margin-top: -20px;" class="bimage" src="Burguer.png">
        <h3 style="font-family: mountain;float: right;margin-top: -20px;">Iniciar Sesion</h3>
  
        
        
        <label for="username">
        <p style="text-align: left; margin-top: 45px; margin-bottom: 5px;">Usuario:</p>
        </label>
        <input type="text" id="email" placeholder="username" name="username" required>



        <label for="psw">
        <p style="text-align: left; margin-top: 5px; margin-bottom: 5px;">Contrasena:</p>
        </label>
        <input type="password" id="psw" placeholder="Password" name="password" required>

        
       
        
        <input type="button" id="page_redirect" class="btn cancel"  style="float: right;" value="Entrar">
        
      </form>
    </div>
  </div>




  <script>
    function openForm_login() {
        document.getElementById("popupForm_registration").style.display = "none";
            document.getElementById("popupForm_login").style.display = "block";
    }

    function closeForm_login() {
        document.getElementById("popupForm_login").style.display = "none";
    }
    document.getElementById("page_redirect").onclick = function() {
        location.href = "./dashboard.html#";
        };
</script>


    <div class="wrapper">
        
        <div style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ),url(hamburguesa4.jpg) no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;">

        <div class="container1">
       
            <header>
                <nav id="desktopnav">
                    <img src="5.png">
                    <a class="active" href="./website.html">INCIO</a>
                    <a  href="./sobrenosotros.html">SOBRE NOSOTROS</a>
                    <a href="./Menu.html">MENU</a>
                    <a href="http://sxs7592.uta.cloud/">BLOG</a>
                    <a href="./contacto.html#">CONTACTO</a>
                    <a href="#" onclick="openForm_registration()">REGISTRO</a>
                    <a href="#" onclick="openForm_login()">INICIAR SESION</a>
                </nav>

                <nav id="mobilenav">
                    <a href="javascript:void(0);" style="float: left; padding-top: 5%;" class="icon" onclick="shownav()">
                        <i class="fa fa-bars"></i>
                 <div id="navlinks">
                    <a class="active" href="./website.html">INCIO</a>
                    <a  href="./sobrenosotros.html">SOBRE NOSOTROS</a>
                    <a href="./Menu.html">MENU</a>
                    <a href="http://sxs7592.uta.cloud/">BLOG</a>
                    <a href="./contacto.html#">CONTACTO</a>
                    <a href="#" onclick="openForm_registration()">REGISTRO</a>
                    <a href="#" onclick="openForm_login()">INICIAR SESION</a>
                 </div>
                
                    
                    </a>            
                 </nav>
            </header>
    </div>

    <script>
        function shownav(){
            var x = document.getElementById("navlinks");
              if (x.style.display === "block") {
               x.style.display = "none";
              } else {
               x.style.display = "block";
            }
        }   
        </script>


    <div id="con2_sobre" style="height: 40vh;" class="container2">
        <p><font color="white">LAS MEJORES DE LA CIUDAD</font></p>
        <h1 style="font-size: 50px;"><font color="white">Sobre nuestras Hamburguesas</font></h1>
    </div>

        </div>

    <div id="sobre_con3" style="margin-top: 30px;" class="container3">
        <img height="400px" width="400px" src="hamburguesa1.jpg" hspace="20">
        <img height="400px" width="400px" src="hamburguesa2.jpg" hspace="20">
    </div>

    <div style="padding: 7% 10%; margin-top: 20px;" class="container4">
        <h2><font color="white">Somos Ibra</font></h2>
        <p style="float:none"><font color="white">Al comenzar el dia, cada mañana estamos más que preparándonos para dar lo mejor de
            nosotros mismos.
            Porque cada uno de nuestros clientes nos inspira a trabajar en pro del mejor servicio, las mejores entregas
            y, sobre todo, las mejores Hamburguesas..
        </font></p>
        <p style="float:left; width: 50%; font-size: small;text-align: left; margin-top: 4%;"><font color="white">Los orígenes se remontan
            al 10 de junio de
            1960, cuando Ibrahim Mata compraron la pizzería DomiPizza's, con una inversión inicial de 950 dólares. El
            local estaba situado en Lecheria, y la idea de Ibrahim era vender Hamburguesas a domicilio a las personas de
            las residencias cercanas. Aquella experiencia no marchaba como tenían previsto.</font></p>

        <p style="float:right; width: 50%; font-size: small; text-align: left; margin-top: 4%;"><font color="white">A pesar de todo, Ibrahim
            se mantuvo al frente del restaurante y tomó decisiones importantes para su futuro,
            como reducir la carta de productos y establecer un reparto a domicilio gratuito. Después de adquirir dos
            restaurantes más en Barcelona, en 1965 renombró sus tres locales como Ibra's Burger Grill.</font></p>
         
    </div>

    <div id="alignment" style="height: 10vh;">
        <button class="button" style="margin-right: 10px;">VER MENU HOY</button>
        <button class="buttongreen">PEDIR AHORA</button>
    </div>

    <div style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ),url(hamburguesa1.jpg) no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;">
    <div class="container1" style="height: 500px;">
       

    <div class="container2">
        <img style="margin-top: 50px;" class="bimage" src="Burguer.png">
        <h2><font color="white">Lo que dicen los clientes</font></h2>

        <table id="tabledis" style="margin-left: 10%;">
            <tr>
                <td style="float: left;">
                    <h3 style="font-size: small; align-content: left; font-family: Open Sans;"><font color="white">Las Mejores Hamburguesas</font></h3>
                    <p style="text-align: left; font-size:x-small; float: none;"><font color="white">Me gustan sus Hamburguesas, siempre seran mi
                        lugar de encuetros y buenos recuerdas acompañados de
                        la mejor Hamburguesa</font></p>
                        
                </td>
                <td>
                    <h3 style="font-family: Open Sans;font-size: small;align-content: left;"><font color="white">Que Hamburguesa mas Increible</font></h3>
                    <p style="text-align: left; font-size:x-small;font-family: Open Sans;"><font color="white">Voy con mi familia a compertir de la buena comida y servicio que prestan, los recomiendo a mis
                        amigos, los felicito</font></p>
                </td>

                <td style="float: right;">
                    <h3 style="font-size: small;font-family: Open Sans;align-content: left;"><font color="white">La mejor hamburguesa de la ciudad</font></h3>
                    <p style="text-align: left; font-size:x-small; float: none;"><font color="white">Soy amante de la buena hamburguesa y puedo decir que me gusta lo bien que la preparan, el
                        hambiente es como y muy familiar, cada ves que tengo la oportunidad de darme un gusto lo visito
                        porque se que sere bien atendido y comere una excelente hamburguesa</font></p>
                </td>

            </tr>

            <tr>
                <td style="padding-right: 20%;"> 
                    <img height="35" width="35" src="prof_pic.jpg" style="border-radius: 50%;">
                </td>
                <td style="padding-right: 20%;"> 
                    <img height="35" width="35" src="prof_pic.jpg" style="border-radius: 50%;">
                </td>
                <td style="padding-right: 40%;"> 
                    <img height="35" width="35" src="prof_pic.jpg" style="border-radius: 50%;">
                </td>
            </tr>
            <tr>
                <td>
                    <p style="font-size: xx-small; text-align: left;"><font color="white"><span style="color:red">Daiane Smith</span>,Cliente</font></p>
                </td>
                <td>
                    <p style="font-size: xx-small; text-align: left;"><font color="white"><span style="color:red">Michael Williams</span>,Cliente</font></p>
                </td>

                <td>
                    <p style="font-size: xx-small; text-align: left;"><font color="white"><span style="color:red">Shawn Gaines</span>,Cliente</font></p>
                </td>
            </tr>
        </table>

        <input class="form-radio" type="radio">
        <input class="form-radio" type="radio">
        <input class="form-radio" type="radio">
        <input class="form-radio" type="radio">

    </div>

    </div>
    </div>


        <div id="sobre_text_heigh" style="background-color: black; height: 5vh;">
            <h2 id="sobre_text" style="text-align: center;margin-left: 20%;margin-right: 20%;"><font color="white">Nos esforzamos por brindar un buen servicio para su disfrute.</font></h2>
        </div>
   

     <div style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ),url(hamburguesa3.jpg) no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;">

    

        <div id="footer_sobre" class="container3" style="margin-top: 170px; height: 70vh;">
            <footer>
                <img id="footerimg" src="5.png">
                <p>
                    <font color="green"><u>Habla a:</u></font>
                </p>
                <p><font color="white">Av. Intercomunal, sector la Mora, calle 8</font></p>
                <p>
                    <font color="green"><u>Telefono:</u></font>
                </p>
                <p><font color="white">+58 251 261 00 01</font></p>
                <p>
                    <font color="green"><u>Correo:</u></font>
                </p>
                <p><font color="white">yourmail@gmail.com</font></p>


                <table style="width:10%" align="center">
                    <thead class=".adjust_margin">
                    <tr>
                        <th width="5px">
                            <img hspace="10" class="one" src="pinterest_small_icon.png" alt="pinterest" width="50" height="50">
                        </th>
                        <th width="5px">
                            <img hspace="10" class="one" src="facebook_small_icon.png" alt="facebook" width="50" height="50">
                        </th>
                        <th width="5px">
                            <img hspace="10" class="one" src="twitter_small_icon.png" alt="twitter" width="50" height="50">
                        </th>
                        <th width="5px">
                            <img hspace="10" class="one" src="linkedin_small_icon.png" alt="linkedin" width="50" height="50">
                        </th>
                        
                    </tr>
    
                </thead>
                    
    
                </table>
                
                <p><font color="white">Copyright @ 2020 Todos los derechos reservados | Este sitio esta hecho con por DiazApps</font></p>

            </footer>

        </div>
    

    </div>

    </div>



</body>

</html>