<?php
require "header.php";

  if (isset($_SESSION['userId'])) {
            header("location: index.php");}
?>

<!--header end-->

<main>
<div class="content"><!--content start-->
  <!--login -signup forms-->

<center>
    <div class="login-signup" >
      <div  id="scroll-top-login"></div>
        <h1><a href="#top-login"id="login-frm-btn" class="dimgray">Login</a>/<a href="#topLogin" id="signup-frm-btn">Register</a></h1>
<?php 
  if (isset($_GET['error'])) {
    if ($_GET['error'] == "emptyfields") {
          }
  }
 ?>
<!-- login form start-->

        <div class="login form-group">

          <form class="loginForm" style="display:block;"  action="includes/login.inc.php" method="post">
            <label for="username">Username:</label>
            <input type="text" class="username " name="mailuid" placeholder="please enter your name">
            <label for="passswor">Password:</label>
            <input type="password" class="password " name="pwd"  placeholder="please enter your password" >
          
            <br/>
            <button type="submit" class="btn gray" name="login-submit">Login</button>

          </form>
            

        </div> 
        <!-- login form end-->


<!--SignUp form start-->
        <form class="" action="includes/signup.inc.php" method="post">
      <div class="signup">
            <center>

  <label for="name">Your username</label>
        <input type="text" class=" "  name="uid" placeholder="please enter your name"   >

        <label for="email">E-mail:</label>
        <input type="email" class=" "  name="mail" placeholder="ex.example@ex.com" >
   
                <label for="pwd">Your password:</label>
        <input type="password"  class=" " name="pwd" placeholder="please enter your password" >
        <label for="pwd">confrim password:</label>
        <input type="password"  class=" " name="pwd-repeat" placeholder="your passwor again"  >
       <br/>
        <button type="submit" class="btn gray" name="signup-submit" value="register" #>Register</button> 


    </center>
       </div>
     </form>
     <!--SignUp form end-->

   </div>
</center>

    <!--login -signup forms-->


  <!--offers start-->

  <div class="offers-container row position-inherit ">

  <div   class="offers border-right col-md-4 col-lg-4 col-sm-12 col-12">


       <label><h2>Free Estimate</h2></label>
       <img class="float-left"  src="https://lh3.googleusercontent.com/yAoYeS24qzvucQCvBr_Paa_U0K63Vw9UwlrqSWjU0rO5EY_cyajwaSEopHgXaP2gGiVn5Z93lBj3DpQ8rkHxihi7jRHS_LNN0Mqf3ujO09SIuKFruy5a4T46yBlaNXHJb7hpg4nhCyCYT4pnGdybEIpxLvoH8gF_X1v1by_k9qg6y4tEMT3UrwaWt49Xg6MCTBqqJ5myPv5GFyhA-9UBEKM-wxKSXZzy-m6PiozZBtFp6ro2-NiQuZT_DBog7L6RSWVP6SQQufRLgI3xM9BnZncoVAe4baP772-gOtnLdef1K5w2uKQYr3oENS5fEoKs5mf6u_4kGTZVum0XrI0GFyXq7zicNlngfnAhu2-EAUALVqyxGhcJyoeMcA2Z_HSemmyKzzbfw1tVs5yVXP4vplzXJTZoIOD4MjHzCcL9a0pdIqv9fW9eGFmKN2nuWJfMklLyLOMfPOB7Jkv_slOyz4VTDk8K8YtcR4dSiL6EpMV9tbU0b3NL7XGtUWunQREWkfDndjoC0QOlB70y2hPm9L17ZVx_66P8vpyGrgG2xKFWjLPnfWwznwDOcUog_XZ4unIzgV1McKaU1GovUnsJDy_gx6eHlTjzrsqvyK31F3Z_xrnoCdO0kIaRhvrc-Y0=s80-no"/>
       <p>
         On the other hand, we denounce with righteous indignation and dislike men who are
       </p>
  </div>
    <div class="offers border-right col-md-4 col-lg-4 col-sm-12 col-12">
      <label>
          <h2>
        Best Quality
            </h2>
      </label>
          <img class="float-left"  src="https://lh3.googleusercontent.com/5bNn5eTfZHglXONij0LdUF4EgRrNDNYRmKFme26JIt9lKC_k0q2-uwM_8sGdP1jagGPpzjpkak249aRQrAMvaNEs6R76SyHVkBQ99njm_qm8G6opGr-rdwXGPag85mB6oV40-47R7SoVGrrGXrbr7m8RTcsUg0t7BIRVBnPGcUQbiR7kflnPb27dENMO5UCvUm-eMXC6-fP6Q46pq97HKVlsnBH8NrDccVh8i50CikeYxYaCHqHgNlTFtvoFhBXgzX4jr_i7YtW-pvPpEJ2w4PuOMd_v08uKwM2ItFlP0xOe3oGyC_j1xQ9F1gVvYlW3LsG2jV4Kh77WB4c3MvZun_b5sBGTHJ1G3nv0JLke4PaABB2w36l4EcpHorQg7zUim_9eLhyx8cxYW-UAkHSERSXmBl2BHf1AowZKrX00zwSa7gTUnlV2ugJd1FONxbR2hkzET6sb42F9VmNZWIQPSkuqYlNWGZNp5n43vR2pxnIfDgQZZStbmK9-h6W16AlgNcrRwjy3ddiAqQ5LsoV9Gxdl-UVTku_nj6E2YKp5r6gkGgtXoeyajat5i5yuAZ-_XeHSu-lwaPaYsPlWlTLy2pvdEm7ipCT4Pcc45jyTDUiS7mus02pOhOhcJCxC3Hc=s64-no" />
            <p>
            On the other hand, we denounce with righteous indignation and dislike men who are
            </p>
    </div>
    <div class="offers  col-md-4 col-lg-4 col-sm-12 col-12">
            <label>
              <h2>
              Low Cost
              </h2>
            </label>
              <img class="float-left"   src="https://lh3.googleusercontent.com/JIapKa1dU3scS3ITF24KXGvAJ8HB30KsFZG56gDk8NqkYehk_xrE3499sU_-3kAXTJIzdoygNiMWJ1D1hvplFf7Bv9c4jca87Kkprdsq7XZHVFSkqTJswBL0xw6QAMkTdtpOvc7jsfPRbCbUKRzveost_mmTxgjAubyLwfmtWLvOgN8GTN_GiKH_kj4uOPTaZZCINDT8dEP31HV-j2HrKb2uu11TuSSdfwSScPwTbBG5pK-Z_XcjtTrvytWtHuX3Ci2S4Zk1131q-mFwBkFNaxe6oX_rhy9Ky_7pHTaPGyvLQmXuz5g5VuAunHNDUWXJrTbpyRqtPPA3k9x1flp1dhJRY-g_BU5iMkwkbu8teOIsdIrfkD6MYtiDNP6X1bgVM1tXIKpLLOi0sS4gokoKhjfhrJfbizWsaUWlaoKMAB3etidUAJS9RLZ9opUnEkBnlNavFTSheN9Hnrsum68KAQBXBi8quWo2dYqP_LsaTdXXxj5lOciET3H0_LpY5EhOnRhpZZN5v1Agv1Ik0-IGUMHuc7R3N_YLTYirYB--Wr6oJDXKeyeoJ8fI9SwsS3uDz8ZNhyZo7WZbEf5Ulp5UN5wqF3ibOfcCQuy6k_BXaUoaEIuGLtBQ9q7tNtWo4_0=s64-no" />
            <p>
            On the other hand, we denounce with righteous indignation and dislike men who are
            </p>
          </div>
        </div><!--offers end-->


          </div><!--content end-->


      </div><!--warpper end-->

</main>





<?php
require "footer.php";
?>
