<html>
    <head>
     
    <title> SIGN IN </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <body>
  
        <style>
         body{
             background-image:url('Hospitally.jpg');
             background-size: 800px 800px;
             background-repeat:no-repeat;       
         }

         .hospitallyText{
             position:relative;
             top:2%;
             left:55%;
             font-size:25px;
             color:#2B3856;
         }

         .signInText{
             position:relative;
             top:-2%;
             left:55%;
             font-size:25px;
             color:darkgray;
         }

         .welcomeTo{
            position:relative;
             top:-2%;
             left:59%;
             font-size:38px;
         }

         .weMade{
             position:relative;
             top:0%;
             left:59%;
             font-size:16px;
             color:orange;
         }

         .input-box{
             position:relative;
             top:6%;
             left:49%;
             margin: 31px auto;
             width:80%; 
             border-bottom: 1px solid #fff;
             padding-top: 10px;
             padding-bottom: 5px;
            

         }

         .input-box input{
             font-size:18px;
             width:440px;
             border:none;
             outline:none;
          
         }

         .input-box2{
             position:relative;
             top:3%;
             left:49%;
             margin: 31px auto;
             width:80%; 
             border-bottom: 1px solid #fff;
             padding-top: 10px;
             padding-bottom: 5px;
         }

         .input-box2 input{
             font-size:18px;
             width:440px;
             border:none;
             outline:none;
          
         }


         .input-box3{
             position:relative;
             top:1%;
             left:49%;
             margin: 31px auto;
             width:80%; 
             border-bottom: 1px solid #fff;
             padding-top: 10px;
             padding-bottom: 5px;
         }

         .input-box3 input{
             font-size:18px;
             width:440px;
             border:none;
             outline:none;
          
         }
         

         .firstLine{
         position:relative;
         top:3%;
         left:23%;
         }
         .secondLine{
         position:relative;
         top:0%;
         left:23%;
         }
         .thirdLine{
         position:relative;
         top:-2%;
         left:23%;
         }

         .fa{
             position:absolute;
             right:-350px;
             font-size:25px;
             cursor:pointer;

         }

         .eye{
             position:absolute;
         }

         .button1{
         position:relative;
         top:-1%;
         left:60%;
         background-color:limegreen;
         border-radius:5px;
         border-color:limegreen;
         width:400px;
         color:white;
         padding: 15px 32px;
        text-align:center;
        text-decoration:none;
        display:inline-block;
        font-size:16px;
        margin:4px 2px;
        cursor:pointer;
      
      }

        .forgot{
            position:relative;
            top:1%;
            left:70%;
        }

        .dontHave{
            position:relative;
            top:-1%;
            left:59%;
            color:gray;
        }
            </style>
        
            <div class="hospitallyText">
            <h2>Hospitally</h2>
            </div>
        
        <div class="signInText">
        <p><b> sign in</b></p>
        </div>

        <div class="welcomeTo">
       <span style="color:orange;"> welcome to </span>
       <span style="color:#2B3856;"> Khonshu </span><br>
       <span style="color:#2B3856;"> Hospital </span>
       <span style="color:orange;"> portal </span>
        </div>

        <div class="weMade">
        <p> we made your hospital data files not pain in the ass! </p>
        </div>
       
        <div class="dontHave">
        <p> don't have an account? click here to <a style="color:black; text-decoration:none;"href="register.php"><b>sign up </b></a></p>
        </div>

        <div class="input-box">
        <input type="text" placeholder="/username">
        </div>

        <div class="firstLine">
       <hr style="width:450px;">
      </div>

      <div class="input-box2">
        <input type="password" placeholder="/password">
        </div>

        <div class="secondLine">
       <hr style="width:450px;">
      </div>

      <div class="input-box3">
        <input type="text" placeholder="/birthdate">
        </div>

        <div class="thirdLine">
       <hr style="width:450px;">
      </div>

      <button class ="button1">sign in </button>
 
      <div class="forgot">
      <p style="color:gray;"><a href="">Forgot password? </a></p>
     </div>

</body>
</head>
</html>