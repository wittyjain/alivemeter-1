<section>
  <div class="banner_o" style="border:solid 0px red;">
    <center>
      <ul class="health_slider">
        <?php if(isset($_SESSION['UserID'])) { ?>
               
                <li><img src="images/header/banner01.png" height="351" width="1000"  > </a></li>
                <li> <img src="images/header/banner02.png" height="351" width="1000"> </li>
               <li> <img src="images/header/banner03.png" height="351" width="1000"> </li>
                <li> <img src="images/header/banner04.png" height="351" width="1000"> </li>
                <li> <img src="images/header/banner05.png" height="351" width="1000"> </li>
                <!--<li> <img src="images/header/banner06.png" height="351" width="1000"> </li>-->
               <li> <img src="images/header/banner07.png" height="351" width="1000"> </li>
                <li> <img src="images/header/banner08.png" height="351" width="1000"> </li>
                <li> <img src="images/header/banner09.png" height="351" width="1178"> </li>
                <li> <img src="images/header/banner10.png" height="351" width="1178"> </li>
        <?php } else { ?>
        	 <li> <a href="<?php echo $strHostName;?>/page.php?dir=registration/sign_up"><img src="images/header/banner01.png" height="351" width="1000" alt="Eat right Get Staeted to meet your own personal nutritionist"  title="Eat right Get Staeted to meet your own personal nutritionist"> </a></li>
                <li> <a href="<?php echo $strHostName;?>/page.php?dir=registration/sign_up"><img src="images/header/banner02.png" height="351" width="1000" alt="The doctor is in. 
Always. - Register Now to consult with top specialists" title="The doctor is in. Always.  - Register Now to consult with top specialists"></a></li>
               <li><a href="<?php echo $strHostName;?>/page.php?dir=registration/sign_up"> <img src="images/header/banner03.png" height="351" width="1000" alt="Update your health graph. - Maintain, track and access  your medical records here. Register Now for FREE" title="Update your health graph. - Maintain, track and access your medical records here. Register Now for FREE"></a></li>
                <li> <a href="<?php echo $strHostName;?>/page.php?dir=registration/sign_up"><img src="images/header/banner04.png" height="351" width="1000" alt="Savor every calorie. - Keep count and achieve your calorie goals. Register Now for FREE" title="Savor every calorie. - Keep count and achieve your calorie goals. Register Now for FREE"> </a></li>
                <li><a href="<?php echo $strHostName;?>/page.php?dir=registration/sign_up"> <img src="images/header/banner05.png" height="351" width="1000" alt="Put yummy in your diet. - Get tasty, customized diet plans. Get Started" title="Put yummy in your diet. - Get tasty, customized diet plans. Get Started"> </a></li>
                <!--<li><a href="<?php echo $strHostName;?>/page.php?dir=registration/sign_up"> <img src="images/header/banner06.png" height="351" width="1000"></a></li>-->
               <li> <a href="<?php echo $strHostName;?>/page.php?dir=registration/sign_up"><img src="images/header/banner07.png" height="351" width="1000" alt="Because 2nd opinions count - Consult with the best of medical practioners here. Register Now for FREE" title="Because 2nd opinions count - Consult with the best of medical practioners here. Register Now for FREE"> </a></li>
                <li><a href="<?php echo $strHostName;?>/page.php?dir=registration/sign_up"> <img src="images/header/banner08.png" height="351" width="1000" alt="Beat the queue at the doctors. - Connect with doctors in your vicinity here. Get Started" title="Beat the queue at the doctors. - Connect with doctors in your vicinity here. Get Started"></a></li>
                <li> <a href="<?php echo $strHostName;?>/page.php?dir=registration/sign_up"><img src="images/header/banner09.png" height="351" width="1178" alt="Hurry! Sign up now and enjoy premium membership benefits up to 31st January 2015" title="Hurry! Sign up now and enjoy premium membership benefits up to 31st January 2015"> </a></li>
                <li><img src="images/header/banner10.png" height="351" width="1178" alt="The Alivemeter App - for a snarter, healthier you!" title="The Alivemeter App - for a snarter, healthier you!"></li>
                

       <?php } ?> 
      </ul>
    </center>
  </div>
</section>
