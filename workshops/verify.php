<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Language" content="en-us">
  <meta name="keywords" content="We've received your email">
  <meta name="description" content="Animal Angels Foundation offers on weekends and school holidays">
  <title>Workshop Registration complete at Animal Angels Foundation</title>
  <link rel="stylesheet" type="text/css" href="/ds.css">
  <META HTTP-EQUIV="imagetoolbar" CONTENT="no">
  <script type="text/JavaScript" src="/common/javaScript/refresh.js"></script>
  <script type="text/JavaScript" src="/common/javaScript/rightClick.js"></script>
  <script type="text/Javascript" src="/common/javaScript/dimensions.js"></script>
</head>

<body topmargin="0" leftmargin="0" bottommargin="0" rightmargin="0" onLoad="choosePic()" onResize="dimensions()">
<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="779" id="AutoNumber1" height="100%" background="/images/bg-table.gif">
    <tr>
      <td width="779" valign="top" height="144">
      <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="779" id="AutoNumber2" height="144">
        <tr>
          <td width="779" height="22" valign="top">
            <?
              global $topNav;
              $topNav = "workshop-registration";
              include($_SERVER['DOCUMENT_ROOT'] . "/common/top/menu.php");
            ?>
          </td>
        </tr>
        <tr>
          <td height="122" valign="top" width="779">
            <? include($_SERVER['DOCUMENT_ROOT'] . "/common/top/logo-picFrames.php"); ?>
          </td>
        </tr>
      </table>
      </td>
    </tr>
    <tr>
      <td valign="top">
      <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="779" id="AutoNumber5" height="100%" background="/images/bg-left.gif">
        <tr>
          <td width="185" valign="top">
          <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="184" id="AutoNumber6" height="392" background="/images/inside-left.jpg">
            <tr>
              <td width="100%" valign="top">&nbsp;</td>
            </tr>
            </table>
          </td>
          <td valign="top">
          <div align="center">
            <center>


            <script type="text/javascript">
              document.write("<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#111111\" width=\"90%\" id=\"AutoNumber19\" height=" + tableHeight + ">");
            </script>
              <tr>
                <td valign="top">


                  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="90%" id="AutoNumber10" height="100%">
                    <tr>
                      <td width="100%" height="15"></td>
                    </tr>
                    <tr>
                      <td width="100%" height="42">
                      <h3><img border="0" src="/images/big-bullet.jpg" alt="Big bullet" align="absmiddle" width="20" height="18">&nbsp;&nbsp;Workshop Registration at Animal Angels Foundation</h3>
                      </td>
                    </tr>
                    <tr>
                      <td width="100%" height="5"></td>
                    </tr>
                    <tr>
                    	<td>
                        	<?php
								require_once($_SERVER['DOCUMENT_ROOT'] . '/recaptcha/recaptchalib.php');
								$privatekey = "6LfsHOESAAAAAMLHrBKW2G528lEJML5nU0PUd3v7";
								$resp = recaptcha_check_answer ($privatekey, $_SERVER["REMOTE_ADDR"], $_POST["recaptcha_challenge_field"], $_POST["recaptcha_response_field"]);
								if (!$resp->is_valid) {
									// What happens when the CAPTCHA was entered incorrectly
									echo "<p align='center'>
									<img border='0' src='/images/sad_dog.jpg' alt='Awwww' width='506' height='337' /><br><br><br>
									Sorry, we weren't able to verify that you were human. Please <a href='/workshops/bow-wow.php'>try again</a></p>";
									die();
								} else {
									$name = $_REQUEST['name'];
									$email = $_REQUEST['email'];
									$phone = $_REQUEST['phone'];
									$age = $_REQUEST['age'];
									$location = $_REQUEST['location'];
									$comments = $_REQUEST['comments'];
									$message = "Name: ".$name."\n"."Phone number: ".$phone."\n"."Age: ".$age."\n"."Location: ".$location."\n"."Coments: ".$comments;
									mail("animalangelsindia@gmail.com", "Workshop Inquiry", $message, "From:" . $email);
									echo "Thank you $name. We will get in touch as soon as we have a workshop in the area closest to where you stay.</p>";
								}
							?>
                        </td>
                    </tr>
                    <tr>
                      <td width="100%">
                      <p align="center">
                      <img border="0" src="/images/workshop-birthday.jpg" alt="Animal Angels Foundation workshops at birthdays" vspace="10" width="350" height="239" /></p>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>


            <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="90%" id="AutoNumber19">
            <div align="center">

              <script type="text/Javascript" src="/common/javaScript/calculateHeight.js"></script>

              <?
                for ($i=1; $i<3; $i++)
                {
                  print'<tr><td width="100%">&nbsp;</td></tr>' . "\n";
                }
                if(stristr($_SERVER['SERVER_NAME'], 'animalangelsfoundation') == TRUE)
                {
                  include($_SERVER['DOCUMENT_ROOT'] . "/common/bottom/google-analytics.php");
                }
                include($_SERVER['DOCUMENT_ROOT'] . "/common/bottom/rediffq&a.php");
              ?>

              </div>
            </table>


            </center>
          </div>
          </td>
        </tr>
      </table>
      </td>
    </tr>
    <tr>
      <td width="779" valign="bottom" height="26">
        <? include($_SERVER['DOCUMENT_ROOT'] . "/common/bottom/footer.php"); ?>
      </td>
    </tr>
  </table>
  </center>
</div>
<script type="text/JavaScript" src="/common/javaScript/rollover.js"></script>
</body>

</html>
