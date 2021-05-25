<!doctype html>
<html lang="en">
  <head>
  <?php $this->load->helper('traducere')?>
    <meta charset="utf-8">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  </head>
  <body>
<main>
      <br>
          <div class="d-flex justify-content-center" >
          <?php if($_SESSION["isLogged"]){?>
          <p class="fs-1">
          <script>  
                    var d = new Date();  
                    var time = d.getHours();  
                    if (time<10)  
                    {  
                    document.write("<b><?php echo traducere('Buna dimineaata,', "Good morning,")?> </b>");  
                    }  
                    else if (time>=10 && time<17)  
                    {  
                    document.write("<b><?php echo traducere('Buna ziua,', "Good afternoon,")?> </b>");  
                    }  
                    else  
                    {  
                    document.write("<b><?php echo traducere('Buna seara, ', "Good evening,")?> </b>");  
                    }  
          </script>  
          <?=$_SESSION["username"]?>!</p>
          <?php }else{?> 
              <p class="fs-1">
                <script>  
                    var d = new Date();  
                    var time = d.getHours();  
                    if (time<10)  
                    {  
                    document.write("<b><?php echo traducere('Buna dimineaata!', "Good morning!")?></b>");  
                    }  
                    else if (time>=10 && time<13)  
                    {  
                    document.write("<b><?php echo traducere('Buna ziua!', "Good afternoon!")?></b>");  
                    }  
                    else  
                    {  
                    document.write("<b><?php echo traducere('Buna seara! ', "Good evening!")?></b>");  
                    }  
            </script> </p>
            <?php }?> 
          </div>
          <div class="d-flex justify-content-center" >
          <p class="fs-2"><?php echo traducere('Ma bucur ca esti aici si sper sa ai o experineta placuta! ', "I'm glad you're here and I hope you have a pleasant experience!")?></p>
          </div>
      </br>
      
  <div class="container marketing ">
    <div class="row">
      <div class="col-lg-4 center" >
      <img src="uploads/jacheta1.png" class="rounded-circle"  width="180" height="180">
        <h2><?php echo traducere('Jachete ', "Jackets ")?></h2>
        <p><a class="btn btn-secondary" href="products"><?php echo traducere('Vezi alte produse', "View other products")?> </a></p>
      </div>

      <div class="col-lg-4 center">
      <img src="uploads/blugi.png" class="rounded-circle" width="180" height="180" >
        <h2><?php echo traducere('Blugi', "Jeans")?></h2>
        <p><a class="btn btn-secondary" href="products"><?php echo traducere('Vezi alte produse', "View other products")?></a></p>
      </div>

      <div class="col-lg-4 center">
      <img src="uploads/tricou.png" class="rounded-circle" width="180" height="180">
        <h2><?php echo traducere('Tricouri', "T-shirts")?></h2>
        <p><a class="btn btn-secondary" href="products"> <?php echo traducere('Vezi alte produse', "View other products")?> </a></p>
      </div>

    </div>
<br>
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading"> <?php echo traducere('Esti gata pentru vara?', "Are you ready for summer? ")?> <span class="text-muted">Perfect!</span></h2>
        <p class="lead"> <?php echo traducere('Aici vei gasi tricourile perfecte pentru tine si buzunarul tau.', "Here you will find the perfect t-shirts for you and your pocket.")?></p>
      </div>
      <div class="col-md-5">
      <img src="uploads/tricou.png"  width="400" height="400">      
      </div>
    </div>
<br>
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading"><?php echo traducere('Ce să faci în zilele mai reci?', "What to do on colder days?  ")?> <span class="text-muted"><?php echo traducere('ASTEAPTA, avem solutia.', "WAIT, we have the solution.")?></span></h2>
        <p class="lead"><?php echo traducere('Aici vei gasi jachete in cazul in care afara va fi rece.', "You will find jackets in case the summer will be cold.")?></p>
      </div>
      <div class="col-md-5 order-md-1">
      <img src="uploads/jacheta1.png"  width="400" height="400">     
      </div>
    </div>
<br>
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading"><?php echo traducere('Simti nevoia sa fii elegant?', "Do you fell the need to be elegant? ")?> <span class="text-muted"><?php echo traducere('ASTEAPTA, avem solutia.', "WAIT, we have the solution.")?></span></h2>
        <p class="lead"><?php echo traducere('Aici veti găsi camasiile perfecte pentru acest motiv. Și ... Să nu uităm, sunt și la un preț redus!', "Here you will find the perfect shirts for this reason. And..Let's not forget, they are also at a reduced price!")?>
      </div>
      <div class="col-md-5">
      <img src="uploads/camasa.png"  width="400" height="400">     
      </div>
    </div>
<br>
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading"><?php echo traducere('Uite aici!', "Look here! ")?><span class="text-muted"><?php echo traducere('Cea mai interesanta parte!', "The most intersting part! ")?></span></h2>
        <p class="lead"><?php echo traducere('Aveți articole de îmbrăcăminte pe care nu le mai folosiți? Le puteți vinde!', "You have items of clothing that you no longer use? You can sell them! ")?></p>  
        <input type="button" value="<?php echo traducere('Adauga produsul', "Add your item ")?>" onclick="window.location='add_item'" />
      </div>
      <div class="col-md-5 order-md-1">
      <img src="uploads/sale.png"  width="400" height="400">     
      </div>
    </div>
    </hr class="featurette-divider">
  </div>
            
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

<footer class="bg-light text-center text-black">
  <div class="container p-4 pb-0">
  <div class="text-center p-4" ></div>
  <section class="mb-4">
    <br>
      <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998;" href="https://www.facebook.com/iscu.paula/">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
</svg></a>
      <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac;"href="https://www.instagram.com/paulaiscu/"role="button">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg></a>
      <a class="btn btn-primary btn-floating m-1"style="background-color: #0082ca;"href="https://www.linkedin.com/in/paula-iscu-098b711a4/"role="button"
        ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
  <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
</svg></a> 
<a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998;" href="mailto:iscu.paula@gmail.com"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
</svg></a></br>
<br>
<p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-forward" viewBox="0 0 16 16">
  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zm10.762.135a.5.5 0 0 1 .708 0l2.5 2.5a.5.5 0 0 1 0 .708l-2.5 2.5a.5.5 0 0 1-.708-.708L14.293 4H9.5a.5.5 0 0 1 0-1h4.793l-1.647-1.646a.5.5 0 0 1 0-.708z"/>
</svg> 0755239872 </p> 
<p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
  <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
</svg> Bacau, Narciselor 33 </p>

    </section>
  </div>
  <div class="text-center p-3">
  </div>
  
</footer>
</main>
</body>
</html>
