<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Responsive Sticky Navbar</title>
      <script src="app.js"></script>
      <link rel="stylesheet" href="style.css">
      <script src="https://kit.fontawesome.com/c9c8078380.js" crossorigin="anonymous"></script>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
   </head>
   
   <body>
     <script>
       function fun(){
         if(document.getElementById('small').classList=='small'){
      document.getElementById('small').classList.add('show');}
      else{
        document.getElementById('small').classList.remove('show');
      }
      
}
     </script>
            <nav>
               <div class="menu-icon" >
                  <i class="fa fa-bars fa-2x" onclick="fun()"></i>
               </div>
               <div class="menu">
               <ul>
                 <li><a class="text-monospace" href="#">HOME</a></li>
                 <li><a class="text-monospace" href="#">MENU</a></li>
                 <li><a class="text-monospace" href="#">EVENTS</a></li>
                 <li><a class="text-monospace" href="#">GALERIE</a></li></ul>
                 <ul class="right"><li class="cadre"><a class="text-monospace" href="#">ONLIE RESERVATION</a></li>
                  </ul>
                  </div>
               

            </nav>
            
            <br><br><br><br><br><br><br>
            <div class="container">
            <div class="row justify-content-center">
            <img src="logo.png"width="275" height="275">
                </div>
                </div>
                <br><br>
              
            <div class="container" ><p class="text-monospace cadre1" style="color: #fff;">
                            +66 666 6666 66 </p>
                            <p class="text-monospace" style="color: #fff;"> BOOKATABLE@ORLANDO.COM  <br> <br>
                            6425E, ARKANSAS <br> UNITED STATES 
                           </p>
                           <br><br>
            <div class="num">
            <a href="#" class="con1"><i class="fa fa-facebook fa-2x one"></i></a>
              <a href="#" class="con"><i class="fa fa-instagram fa-2x"></i></a>
                </div>
                </div>
            
           
         <div class="small" id="small">
               <ul>
                 <li><a class="text-monospace" href="#">HOME</a></li>
                 <li><a class="text-monospace" href="#">MENU</a></li>
                 <li><a class="text-monospace" href="#">EVENTS</a></li>
                 <li><a class="text-monospace" href="#">GALERIE</a></li>
                 <li><a class="text-monospace" href="#">ONLIE RESERVATION</a></li>
                </ul>
               </div>

        
  </body>
</html>