
<div id="" style="height:900px; width: 100%; padding-top: 50px; position: relative;">
	<div class="title" align="center" style="height: 100px;"> 
   <H1> Present your test</H1>
   <div align="center">
     <span> with knowledge </span>
   </div>
 </div>
 <div class="qestionTitle" style="height:100px; width: 100%; margin-top:0px; ">
  <p style="padding-left: 14px">
    <h1>Local Access Network (LAN).</h1>
  </p>
  </div>
<div class="questionDescr" style="height:400px; width: 100%; padding-left: 8%; " >
  <div style="width:90%; height:150px; padding-rigth:10%; ">
    <p class="numberCuestion">1.</p>
    <p class="titleCuestion">Please indicates the network address in this ip: 192.168.10.78/24 and
      in a text file elaborate the subnetting table for this red (Include the Default Gateway.)<br>
      <h5 align="right"><i>When you have finish please select your .pdf file of your computer and upload to the evaluation.</i></h5>
    </p>
  </div>

  <div style="height: 250px; width:90%; padding-top:0px; " >
    <div style="width: 100%; height: 300px;align:center; padding-top: 50px; ">      
      <form action="" method="post">
        <font face="Verdana, Arial, Helvetica, sans-serif" size="4"> 
          <p>
            <input name=1 onClick="Engine(1, this.value)" type=radio value=a>
            <?php
            $a=[1,2,3];      
            $answer_1=".First Answer";                      
            $answer_2=".Second Answer";                      
            $answer_3=".Third Answer";                      
            printf( $a[0].$answer_1);             
            ?>
          </p>             
          <p> 
            <input name=1 onClick="Engine(1, this.value)" type=radio value=b>
            <?php
            printf( $a[1].$answer_2);             
            ?>
          </p>             
          <p> 
            <input name="1" onClick="Engine(1, this.value)" type="radio" value="c"/>
            <?php
            printf( $a[2].$answer_3);
            ?>              
          </p>   
        </font> 
        <br>         
        <input name="Resulta" onClick="Nivel()" type="button" value="Results"/>
        <input type="button" name="repose" value="Correct Answers" onClick="<?php echo"<script>alert('Archivo subido')</script>"; ?>"/>                
        <input type="reset" value="Clear results" name="reset"/>
      </form> 
    </div>
</div>
</div>
    <div class="answerSection" style=" padding-left:10%; height:50px; width: 100%; margin-top:0px;" >
      <div style="height: 50px; padding-left: 50px; width: 100%; ">
        <form enctype="multipart/form-data" action="<?php echo base_url('index.php/welcome/accion'); ?>" method="post">
          <input name="uploadedfile" type="file">
          <input type="submit" value="Subir archivo" name="opcion" name="subir">
        </form>   
      </div>
    </div>

  <div id="myDIV" style="width: 100%; height: 100px; padding-top: 20px; padding-left: 80px; padding-right: 60px;">
    <button class="btn active">1</button>
    <?php
    for ($i=2; $i <=20; $i++) {  
      ?>
      <button class='btn'>
        <?php echo $i;?></button>
        <?php }?>
      </div>
</div> 
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script>
        posicionarMenu();

        $(window).scroll(function() {    
          posicionarMenu();
        });

        function posicionarMenu() {
          var altura_del_header = $('.header').outerHeight(true);
          var altura_del_menu = $('.menu').outerHeight(true);

          if ($(window).scrollTop() >= altura_del_header){
            $('.menu').addClass('fixed');
            $('.wrapper').css('margin-top', (altura_del_menu) + 'px');
          } else {
            $('.menu').removeClass('fixed');
            $('.wrapper').css('margin-top', '0');
          }
        }

      </script>
      <script type="text/javascript">

var resp = new Array; //LAS RESPUESTAS ENUMERADAS
var error = new Array; // CONTEO DE LOS ERRORES DENTRO DE LAS RESPUESTAS
var score = 0; //RESULTADOS "PUNTOS EN RESPUESTA"

//INDICAR CUAL ES EL RESULTADO DE CADA UNA DE LAS PREGUNTAS 
//QUE SE MOSTRARAN EN PANTALLAS
resp[1] = "a";

function MachineResult(question, repose) 
{
   if (repose != resp[question]) //si la respuesta ingresada es difereente que la respuesta correcta 
	 { //entonces sera un error los cuales se iran contando y acumulando en un array 
   if (!error[question])
     {error[question] = -1;}
 }
 else {

  if (!error[question]) {
    error[question] = -1;
    score++;
    alert("Right! Your score is : " + score );
  }

}
}

function Nivel () { // despues de contar las respuestas correctas se realizara una comparacion 

  if (score >= 9 && score < 10) {
    alert(score + "/10 " + "Okay, try to get over it");
  }
  if (score >= 7 && score < 8) {
    alert(score + "/10 " + "Good, but you can do better");
  }
  if (score >= 5 && score < 6) {
    alert(score + "/10 " + "Approved by miracle. Do not trust");
  }
  if (score >= 3 && score < 4) {
    alert(score + "/10 " + "Insufficient. You must study more");
  }
        if (score < 2) { //por medio del resultado es lo que mostrara en una nueva linea 
          alert("Your score is: "+ score 
            +"\nThe maximum score you could get is 10" 
            +"\nYou have to review your lessons again" 
            +"\nYour percentage of correct answers is less than 10%");
        }
      }

    </script>
    <script type="text/javascript">
      var header = document.getElementById("myDIV");
      var btns = header.getElementsByClassName("btn");
      for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
          var current = document.getElementsByClassName("active");
          current[0].className = current[0].className.replace(" active", "");
          this.className += " active";
        });
      }
    </script>
  </body>
  <footer id=" footer" style="position: static">

