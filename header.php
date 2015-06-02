<!DOCTYPE html>
<html lang="en">
<head>
 <title>Powell's Books</title>
 <!-- Favicon -->
 <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
 <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
 <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
 <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
 <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
 <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
 <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
 <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
 <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
 <link rel="icon" type="image/png" sizes="192x192"  href="img/favicon/android-icon-192x192.png">
 <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
 <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
 <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
 <link rel="manifest" href="img/favicon/manifest.json">
 <meta name="msapplication-TileColor" content="#ffffff">
 <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
 <meta name="theme-color" content="#ffffff">
 <!-- ************** Favicon end -->

 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

 <!-- Index Navi and Responsive Css -->
 <link href="css/index.css" rel="stylesheet">
 <link href="css/responsive.css" rel="stylesheet">
 <link href="css/shoppingCart.css" rel="stylesheet">
 <link href="css/category.css" rel="stylesheet">
 <link href="css/about.css" rel="stylesheet">
 <link href="css/contact.css" rel="stylesheet">
 

 <!--Start of Zopim Live Chat Script-->
 <script type="text/javascript">
  window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
    d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
      _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
      $.src="//v2.zopim.com/?32ygD8lj8HK90bsB4QmYi4f5ZCIuHb8X";z.t=+new Date;$.
      type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
  }

</script>


<!--End of Zopim Live Chat Script-->
</head>

<body onLoad="MM_preloadImages('img/logos/facebook_white.png','img/logos/twitter_white.png','img/logos/yotube_white.png','img/logos/instagram_white.png')">

  <div class="container">
   <div id="wrapper">
    <header>
      <div class="header">
        <a href="index.php"><img id="powell_logo" src="img/logos/logo.png" alt="Powell's books logo"></a> 
        <div id="sns_logos"> 
          <div class="sign">
            <a href="" class="my_popup2_open" title="sign in">Sign in</a>
            <a href="">/</a>
            <a href="" class="my_popup_open">Sign up </a>

            <!-- Sign up Content -->
            <div id="my_popup" class="sign_up">
              <header>   
                <h3 class="sign_up_title">Sign Up  <a class="my_popup_close close_button">x</a> </h3>  
              </header>
              <img class="powell_logo_sign" src="img/logos/logo_black.png" alt="Powell's books logo" width="130" height="130">               
              <form action="#">
                <table class="sign_table">
                  <tr>
                   <td><input class="sign_input" name="uemail" type="text" placeholder="userID@email.com*"  id="uemail" size="35" maxlength="50"></td>
                 </tr>
                 <tr>
                   <td><input class="sign_input" name="ufname" type="text" placeholder="First Name*"  id="ufname" size="35" maxlength="50"></td>
                 </tr>
                 <tr>
                  <td> <input class="sign_input" name="ulname" type="text" placeholder="Last Name*"  id="ulname" size="35" maxlength="50"></td>
                </tr>
                <tr>
                 <td> <input class="sign_input" name="upass" type="password" placeholder="Password*"  id="upass" size="35" maxlength="50"></td>
               </tr>
               <tr>                
                <td><button class="sign_up_button" name="Submit">SIGN UP</button>
                  <button type="reset" class="sign_up_button" name="Reset">RESET</button></td>                  
                </tr>                 
              </table>
            </form>
          </div> <!--end of my_popup-->  

          <div id="my_popup2" class="sign_in">
            <header>   
              <h3 class="sign_up_title">Sign In <a class="my_popup2_close close_button">x</a></h3>  
            </header>
            <img id="powell_for_sign" src="img/logos/logo_black.png" alt="Powell's books logo" width="130">                  
            <form action="#">
              <table class="sign_table">
                <tr>
                 <td><input class="sign_input" name="uemail" type="text" placeholder="userID@email.com*"  id="uemail" size="35" maxlength="50"></td>
               </tr>                     
               <tr>
                 <td> <input class="sign_input" name="upass" type="password" placeholder="Password*"  id="upass" size="35" maxlength="50"></td>
               </tr>
               <tr>                
                <td><button class="sign_up_button" name="Submit">SIGN IN</button>
                  <button type="reset" class="sign_up_button" name="Reset">RESET</button></td>                  
                </tr>                 
              </table>
            </form>
          </div> <!--end of my_popup2-->  
        </div> <!-- end of sing-->
        <div class="search">
          <form method="get" action="http://www.google.com">
            <input class="textfield gsa-search-field ui-autocomplete-input" type="text" placeholder="Search in Google" name="q" value="" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
            <button type="submit" aria-label="Left Align">
             <i class="icon-search"></i>
           </button>
         </form>
       </div>             
       <a href="https://www.facebook.com/powellsbooks?ref=mf" target="_blank"><img src="img/logos/facebook.png" alt="Facebook Icon" id="Image1" onMouseOver="MM_swapImage('Image1','','img/logos/facebook_white.png',1)" onMouseOut="MM_swapImgRestore()"></a>
       <a href="https://twitter.com/Powells" target="_blank"><img src="img/logos/twitter.png" alt="Titter Icon" id="Image2" onMouseOver="MM_swapImage('Image2','','img/logos/twitter_white.png',1)" onMouseOut="MM_swapImgRestore()"></a>
       <a href="#"><img src="img/logos/youtube.png" alt="Youtube Icon" id="Image3" onMouseOver="MM_swapImage('Image3','','img/logos/yotube_white.png',1)" onMouseOut="MM_swapImgRestore()"></a>
       <a href="https://instagram.com/powellsbooks/" target="_blank"><img src="img/logos/instagram.png" alt="Instagram Icon" id="Image4" onMouseOver="MM_swapImage('Image4','','img/logos/instagram_white.png',1)" onMouseOut="MM_swapImgRestore()"></a>


     </div><!-- End of sns_logos -->
   </div><!-- End of header -->
 </header>

 <!-- Static navbar -->
 <div class="navbar navbar-default" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>    
  </div>
  <div class="navbar-collapse collapse">
    <!-- Left nav -->
    <ul class="nav navbar-nav">
      <li><a href="index.php">HOME</a></li>
      <li><a href="about.php">ABOUT US</a></li>
      <li><a href="contact.php">CONTACT US</a></li>
      <li><a href="category.php">BOOK CATEGORY</a>
        <ul class="dropdown-menu">
          <li><a href="cooking.php">COOKING</a></li>
          <li><a href="fiction.php">FICTION</a></li>
          <li><a href="romance.php">ROMANCE</a></li>
          <!-- <li class="divider"></li>
          <li class="dropdown-header">Nav header</li> -->
          <li><a href="mystery.php">MYSTERY</a></li>
          <li><a href="horror.php">HORROR</a>
          <!--   <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">A long sub menu</a>
              </li>
              <li><a href="#">Another link</a></li>
              <li><a href="#">One more link</a></li>
            </ul> -->
          </li>
        </ul>
      </li>
      <li><a href="faq.php">FAQ</a></li>   
      <li id="cart_float">
        <button id="cart_list" class="cart_button"><img src="img/logos/mycart.png" alt="My Cart">MY CART</button>   
        <div id="sidebar" class="sidebar">
          <h2 id="cart_title">Your Cart</h2>
          <!--Add a Div with the class "simpleCart_items" to show your shopping cart area.-->
          <div class="simpleCart_items" >
          </div>
          <div  class="check_out">
            <a href="#" class="simpleCart_empty"><button class="sign_up_button">Empty</button></a>
            <a href="#" class="simpleCart_checkout"><button class="sign_up_button">Checkout</button></a>
          </div>
          <!--Here's the Links to Checkout and Empty Cart-->  
        </div>
      </li>         
    </ul>    
  </div><!--/.nav-collapse -->
</div>