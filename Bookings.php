<!DOCTYPE html>
<?php 
include "config.php";
session_start();

if((!isset ($_SESSION['username']) == true) and (!isset ($_SESSION['password']) == true))
{
  unset($_SESSION['username']);
  unset($_SESSION['password']);
  header('location:login.php');
  }
 
$logado = $_SESSION['username'];
$_SESSION['id_user'];
?>
<html lang="en">

<head>
  

    <title> GER GARAGE </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/slider.css" type="text/css" media="screen" />
    <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    </body>
    <!----- Scroll top --------->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>

    <!-----End  Scroll top --------->

    <script type="text/javascript">
        $(window).load(function () {
            $('#slider').nivoSlider();
        });
    </script>
    <style type="text/css">
        < !-- .style1 {
            color: #CCCCCC;
            font-weight: bold;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
        }

        -->
    </style>
</head>

<body>
<link href="/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="/css/slider.css" type="text/css" media="screen" />
    <style type="text/css">
        < !-- .style1 {
            color: #CCCCCC;
            font-weight: bold;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 22px;
        }

        -->
    </style>
    <script type="text/javascript" src="/js/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="/js/jquery.nivo.slider.js"></script>
    <script type="text/javascript" src="/js/move-top.js"></script>
    <script type="text/javascript" src="/js/easing.js"></script>
    <script type="text/javascript">
        $(window).load(function () {
            $('#slider').nivoSlider();
        });
    </script>
    <script>
        var dateToday = new Date();
        $(function () {
            $("#calendario").datepicker({
                showButtonPanel: true,
                showOn: "button",
                numberOfMonths: 2,
                minDate: dateToday,

            });

        });

        /* $(function DisableSunday(date) {

             var day = date.getDay();
            if (day == 0) {

            return [false] ;

            } else {

            return [true] ;
            }

           });*/
    </script>




    <!----- presentation menu --------->
    <div class="header">
        <div class="header_top">
            <div class="wrap">
                <div class="logo">
                    <a href="/index.html"><img src="img/logo.png" alt="" /></a>
                </div>
                <div class="logo2">
                    <p align="center"><a href="/index.html" class="style1"> GER GARAGE </a> </p>
                </div>
                <div class="dail">
                    <h4>Call us Now!</h4>
                    <p><img src="/images/mobile.png">+353 89 974 1520</p>
                </div>
                <div class="clear"></div>
            </div>
        </div>

        <div class="header-bottom">
            <div class="wrap">
                <div class="menu">
                    <ul>
                        <li><a href="Index.html">Home</a></li>
                        <li><a href="aboutus.html">About Us</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="contactus.html">Contact us</a></li>
                        <li class="active"><a href="#">Bookings</a></li>
						<li><a href="adminpage.php">Administrator</a></li>
                        <div class="clear"></div>
                    </ul>
                </div>
                <div class="social-icons">
                    <ul>
                        <li><a class="facebook" href="#" target="_blank"> </a></li>
                        <li><a class="twitter" href="#" target="_blank"></a></li>
                        <li><a class="googleplus" href="#" target="_blank"></a></li>
                        <li></li>
                        <li></li>
                        <div class="clear"></div>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <!----- end presentation menu --------->


    <!------MAIN PAGE ---------->

    <main class="margin-top-6 horizontal-center">
        <div class="wrap">
            <div class="main">
                <div class="content">
                <?php
                echo "Welcome ";
                echo $_SESSION['username'];
                ?>
                    <h4>Booking Service</h4>
                    <br>
                    <div class="content_top">
                        <div class="section group">
                            <div class="container">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td colspan="1">
                                                <form class="well form-horizontal" action="Check_booking.php"
                                                    method="POST">
                                                    <fieldset>

                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">Service
                                                                Required</label>
                                                            <div class="col-md-8 inputGroupContainer">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"
                                                                        style="max-width: 100%;"><i
                                                                            class="glyphicon glyphicon-list"></i></span>
                                                                    <select name="serviceRequired"
                                                                        class="selectpicker form-control">
                                                                        <option></option>
                                                                        <?php

                                                                        $result_niveis_acessos = 0;
                                                                        $resultado_niveis_acesso = 0;
                                                                        $row_niveis_acessos = 0;


                                                                        $result_niveis_acessos = "SELECT * FROM type_service";
						                                                $resultado_niveis_acesso = mysqli_query($con, $result_niveis_acessos);
                                                                        while($row_niveis_acessos = mysqli_fetch_assoc($resultado_niveis_acesso)){ ?>
                                                                        <option
                                                                            value="<?php echo $row_niveis_acessos['id_type_service']; ?>">
                                                                            <?php echo $row_niveis_acessos['description']; ?>
                                                                        </option> <?php
                                                                       }
                                                                     ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">Booking Date</label>
                                                            <div class="col-md-8 inputGroupContainer">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon"
                                                                        style="max-width: 100%;"><i
                                                                            class="glyphicon glyphicon-list"></i></span>
                                                                    <select name="bookingDate"
                                                                        class="selectpicker form-control">
                                                                        <option></option>
                                                                        <?php

                                                                        $result_niveis_acessos = 0;
                                                                        $resultado_niveis_acesso = 0;
                                                                        $row_niveis_acessos = 0;


                                                                        $result_niveis_acessos = "SELECT * FROM serv_date";
						                                                $resultado_niveis_acesso = mysqli_query($con, $result_niveis_acessos);
                                                                        while($row_niveis_acessos = mysqli_fetch_assoc($resultado_niveis_acesso)){ ?>
                                                                        <option
                                                                            value="<?php echo $row_niveis_acessos['date_format']; ?>">
                                                                            <?php echo $row_niveis_acessos['Date_service']; ?>
                                                                        </option> <?php
                                                                       }
                                                                     ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                       
                            <div class="form-group">
                                <label class="col-md-4 control-label">Booking Time</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon" style="max-width: 100%;"><i
                                                class="glyphicon glyphicon-list"></i></span>
                                        <select name="time" id="time" class="selectpicker form-control">
                                            <option></option>
                                            <?php

                                                                        $result_time = 0;
                                                                        $resultado_time = 0;
                                                                        $row_time = 0;


                                                                        $result_time = "SELECT * FROM possible_time";
						                                                $resultado_time = mysqli_query($con, $result_time);
                                                                        while($row_time = mysqli_fetch_assoc($resultado_time)){ ?>
                                            <option value="<?php echo $row_time['Hour']; ?>">
                                                <?php echo $row_time['Hour']; ?>
                                            </option> <?php
                                                                       }
                                                                     ?>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-4 control-label">Vehicle Type</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon" style="max-width: 100%;"><i
                                                class="glyphicon glyphicon-list"></i></span>


                                        <select name="vehicleType" class="selectpicker form-control">
                                            <option></option>
                                            <?php
                                                                        $result_niveis_acessos = 0;
                                                                        $resultado_niveis_acesso = 0;
                                                                        $row_niveis_acessos = 0;
                            
                                                                        $result_niveis_acessos = "SELECT * FROM type_vehicle";
						                                                $resultado_niveis_acesso = mysqli_query($con, $result_niveis_acessos);
                                                                        while($row_niveis_acessos = mysqli_fetch_assoc($resultado_niveis_acesso)){ ?>
                                            <option value="<?php echo $row_niveis_acessos['id_type_vehicle']; ?>">
                                                <?php echo $row_niveis_acessos['description']; ?>
                                            </option> <?php
                                                                        }
                                                                     ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class=" form-group">
                                <label class="col-md-4 control-label">Vehicle
                                    Engine</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon" style="max-width: 100%;"><i
                                                class="glyphicon glyphicon-list"></i></span>
                                        <select name="vehicleEngine" class="selectpicker form-control">
                                            <option> </option>

                                            <?php
                                                                                        $result_niveis_acessos = 0;
                                                                                        $resultado_niveis_acesso = 0;
                                                                                        $row_niveis_acessos = 0;
                                            
                                                                                        $result_niveis_acessos = "SELECT * FROM vehicle_engine";
                                                                                        $resultado_niveis_acesso = mysqli_query($con, $result_niveis_acessos);
                                                                                        while($row_niveis_acessos = mysqli_fetch_assoc($resultado_niveis_acesso)){ ?>
                                            <option value="<?php echo $row_niveis_acessos['id_vehicle_engine']; ?>">
                                                <?php echo $row_niveis_acessos['description']; ?>
                                            </option> <?php
                                                                                        }
                                                                                    ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Vehicle
                                    Make</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon" style="max-width: 100%;"><i
                                                class="glyphicon glyphicon-list"></i></span>
                                        <select name="makeVehicle" class="selectpicker form-control">
                                            <option> </option>
                                            <?php
                                                                                        $result_niveis_acessos = 0;
                                                                                        $resultado_niveis_acesso = 0;
                                                                                        $row_niveis_acessos = 0;
                                            
                                                                                        $result_niveis_acessos = "SELECT * FROM make_vehicle";
                                                                                        $resultado_niveis_acesso = mysqli_query($con, $result_niveis_acessos);
                                                                                        while($row_niveis_acessos = mysqli_fetch_assoc($resultado_niveis_acesso)){ ?>
                                            <option value="<?php echo $row_niveis_acessos['id_make_vehicle']; ?>">
                                                <?php echo $row_niveis_acessos['description']; ?>
                                            </option> <?php
                                                                                        }
                                                                                    ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Liscence
                                    Number</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i
                                                class="glyphicon glyphicon-list"></i></span><input id="liscenceNumber"
                                            name="liscenceNumber" placeholder="Liscence Number" class="form-control"
                                            required="true" value="" type="text"></div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Expire
                                    Date</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i
                                                class="glyphicon glyphicon-list"></i></span><input id="liscenceDate"
                                            name="liscenceDate" placeholder="Liscence Date" class="form-control"
                                            required="true" value="" type="date"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Comments</label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i
                                                class=""></i></span><input id="comments" name="comments"
                                            placeholder="Write you comment here." style="height:200px"
                                            class="form-control" required="true" value="" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="submit" class="button button-icon button-icon-demo" value="Submit" name="submt"
                        id="submit">

                    </fieldset>
                    </form>
                    </td>
                    </tr>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
                    <div class="col-sm-12">
                    <h4>Last Bookings</h4>
        <?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		
		//Getting page number
		$pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);		
		$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
		
		//how many per page
		$qnt_result_pg = 1;
		
		//calc index 
		$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
		
		$result_usuarios = "SELECT * FROM booking LIMIT $inicio, $qnt_result_pg";
		$resultado_usuarios = mysqli_query($con, $result_usuarios);
		while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
            echo "Booking Ref: " . $row_usuario['id_booking'] . "<br>";
			echo "Booking Date: " . $row_usuario['date_booking'] . " (yyyy-mm-dd)<br>";
			echo "Status Booking: Collected<br><hr>";
		}
		
		//count users
		$result_pg = "SELECT COUNT(id_user) AS num_result FROM users";
		$resultado_pg = mysqli_query($con, $result_pg);
		$row_pg = mysqli_fetch_assoc($resultado_pg);

		//echo $row_pg['num_result'];
		//Quantidade de pagina 
		$quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
		
		//Limitar os link antes depois
		$max_links = 2;
		echo "<a href='listar.php?pagina=1'>First</a> ";
		
		for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
			if($pag_ant >= 1){
				echo "<a href='listar.php?pagina=$pag_ant'>$pag_ant</a> ";
			}
		}
			
		echo "$pagina ";
		
		for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
			if($pag_dep <= $quantidade_pg){
				echo "<a href='listar.php?pagina=$pag_dep'>$pag_dep</a> ";
			}
		}
		
		echo "<a href='listar.php?pagina=$quantidade_pg'>Last</a>";
        ?>
        </div>
        <div class="col-auto mr-auto"></div>
        <div class="col-auto">
         <input type="submit" class="button button-icon button-icon-demo" value="Logout" onclick="location.href='logout.php'" name="submit"
                        id="submit">
        </div>
    </main>
    <!----- end MAIN CONTENT--------->

    <!---- footer---->

    <div class="footer">
        <hr>
        <div class="wrap">
            <div class="footer_grides">
                <div class="row">

                    <div class="col-sm">
                        <h3>Social Media</h3>
                        <div class="social_icons">
                            <ul>
                                <li><a href="#" class="facebook">
                                        <span class="icon"> &nbsp;</span> <span
                                            class="inner"><strong>Facebook</strong></span></a></li>
                                <li><a href="#" class="twitter">
                                        <span class="icon"> &nbsp;</span> <span
                                            class="inner"><strong>Twitter</strong></span></a></li>
                                <li><a href="#" class="rss">
                                        <span class="icon"> &nbsp;</span> <span
                                            class="inner"><strong>LINKEDIN</strong></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm">
                        <h3>Menu</h3>
                        <ul>
                        <li ><a href="Index.html">Home</a></li>
                        <li><a href="aboutus.html">About Us</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="contactus.html">Contact us</a></li>
                        <li class="active"><a href="#">Bookings</a></li>
						<li><a href="adminpage.php">Administrator</a></li>
                        </ul>
                    </div>
                    <div class="col-sm">
                        <h3>Where we are</h3>
                        <ul>
                            <li>302, South Circular Road</li>
                            <li>Dublin 08</li>
                            <li>Liesten - Ireland</li>
                            <li><span>E-mail :</span> contact@gergarage.ie</li>
                            <li><span>Mobile :</span> +353 0899 741 520</li>
                            <li><span>Phone :</span> (1) 335 225 91</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------------ scroll Top ------------>
    <script type="text/javascript">
        $(document).ready(function () {
			/*
			var defaults = {
	  			containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
	 		};
			*/

            $().UItoTop({ easingType: 'easeOutQuart' });

        });
    </script>
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>
    <!------------ End scroll Top ------------>
</body>

</html>