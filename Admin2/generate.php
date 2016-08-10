<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Generate a 1 time link to register</title>
</head>
<body>
<?php
require "../api/access.php";

echo "<h1>Please wait...</h1>";

if (isset($_GET["e"]) && isset($_GET["n"])) {
    echo "Generating Key...<br>";
    $email = $_GET["e"];
    $name = $_GET["n"];
    $string = '';
    $characters = 'abcdefghijklmnopqrstuvwxyz0123456789';

    for ($i = 0; $i < 64; $i++) {
        $string .= $characters[rand(0, strlen($characters) - 1)];
    }
    require "../api/api.php";
    sqlStatment("INSERT INTO rkeys VALUES ('$string')");
    echo "Key has been Generated <br>";
    echo "<a>www.a.bgscoffee.com/register?key=" . $string . "</a>";




    require '../mail/load.php';

    $mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'mail.bgscoffee.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'register@bgscoffee.com';                 // SMTP username
    $mail->Password = '2#%&GOb-M+Rw';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 25;                                    // TCP port to connect to

    $mail->setFrom('register@bgscoffee.com', 'Daniel Johns');
    $mail->addAddress($email, $name);     // Add a recipient
    // Name is optional
    $mail->addReplyTo('daniel133448@brisbanegrammar.com', 'Information');


    // Optional name
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Please Register your BGS Coffee Admin account';
    $mail->Body = '

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><!-- NAME: 1 COLUMN -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BGS Coffee</title>

    <style type="text/css">
		body,#bodyTable,#bodyCell{
			height:100% !important;
			margin:0;
			padding:0;
			width:100% !important;
		}
		table{
			border-collapse:collapse;
		}
		img,a img{
			border:0;
			outline:none;
			text-decoration:none;
		}
		h1,h2,h3,h4,h5,h6{
			margin:0;
			padding:0;
		}
		p{
			margin:1em 0;
			padding:0;
		}
		a{
			word-wrap:break-word;
		}
		.ReadMsgBody{
			width:100%;
		}
		.ExternalClass{
			width:100%;
		}
		.ExternalClass,.ExternalClass p,.ExternalClass span,.ExternalClass font,.ExternalClass td,.ExternalClass div{
			line-height:100%;
		}
		table,td{
			mso-table-lspace:0pt;
			mso-table-rspace:0pt;
		}
		#outlook a{
			padding:0;
		}
		img{
			-ms-interpolation-mode:bicubic;
		}
		body,table,td,p,a,li,blockquote{
			-ms-text-size-adjust:100%;
			-webkit-text-size-adjust:100%;
		}
		#bodyCell{
			padding:20px;
		}
		.mcnImage{
			vertical-align:bottom;
		}
		.mcnTextContent img{
			height:auto !important;
		}
		body,#bodyTable{
			background-color:#F2F2F2;
		}
		#bodyCell{
			border-top:0;
		}
		#templateContainer{
			border:0;
		}
		h1{
			color:#606060 !important;
			display:block;
			font-family:Helvetica;
			font-size:40px;
			font-style:normal;
			font-weight:bold;
			line-height:125%;
			letter-spacing:-1px;
			margin:0;
			text-align:left;
		}
		h2{
			color:#404040 !important;
			display:block;
			font-family:Helvetica;
			font-size:26px;
			font-style:normal;
			font-weight:bold;
			line-height:125%;
			letter-spacing:-.75px;
			margin:0;
			text-align:left;
		}
		h3{
			color:#606060 !important;
			display:block;
			font-family:Helvetica;
			font-size:18px;
			font-style:normal;
			font-weight:bold;
			line-height:125%;
			letter-spacing:-.5px;
			margin:0;
			text-align:left;
		}
		h4{
			color:#808080 !important;
			display:block;
			font-family:Helvetica;
			font-size:16px;
			font-style:normal;
			font-weight:bold;
			line-height:125%;
			letter-spacing:normal;
			margin:0;
			text-align:left;
		}
		#templatePreheader{
			background-color:#FFFFFF;
			border-top:0;
			border-bottom:0;
		}
		.preheaderContainer .mcnTextContent,.preheaderContainer .mcnTextContent p{
			color:#606060;
			font-family:Helvetica;
			font-size:11px;
			line-height:125%;
			text-align:left;
		}
		.preheaderContainer .mcnTextContent a{
			color:#606060;
			font-weight:normal;
			text-decoration:underline;
		}
		#templateHeader{
			background-color:#FFFFFF;
			border-top:0;
			border-bottom:0;
		}
		.headerContainer .mcnTextContent,.headerContainer .mcnTextContent p{
			color:#606060;
			font-family:Helvetica;
			font-size:15px;
			line-height:150%;
			text-align:left;
		}
		.headerContainer .mcnTextContent a{
			color:#6DC6DD;
			font-weight:normal;
			text-decoration:underline;
		}
		#templateBody{
			background-color:#FFFFFF;
			border-top:0;
			border-bottom:0;
		}
		.bodyContainer .mcnTextContent,.bodyContainer .mcnTextContent p{
			color:#606060;
			font-family:Helvetica;
			font-size:15px;
			line-height:150%;
			text-align:left;
		}
		.bodyContainer .mcnTextContent a{
			color:#6DC6DD;
			font-weight:normal;
			text-decoration:underline;
		}
		#templateFooter{
			background-color:#FFFFFF;
			border-top:0;
			border-bottom:0;
		}
		.footerContainer .mcnTextContent,.footerContainer .mcnTextContent p{
			color:#606060;
			font-family:Helvetica;
			font-size:11px;
			line-height:125%;
			text-align:left;
		}
		.footerContainer .mcnTextContent a{
			color:#606060;
			font-weight:normal;
			text-decoration:underline;
		}
	@media only screen and (max-width: 480px){
		body,table,td,p,a,li,blockquote{
			-webkit-text-size-adjust:none !important;
		}

}	@media only screen and (max-width: 480px){
		body{
			width:100% !important;
			min-width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		td[id=bodyCell]{
			padding:10px !important;
		}

}	@media only screen and (max-width: 480px){
		table[class=mcnTextContentContainer]{
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		.mcnBoxedTextContentContainer{
			max-width:100% !important;
			min-width:100% !important;
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		table[class=mcpreview-image-uploader]{
			width:100% !important;
			display:none !important;
		}

}	@media only screen and (max-width: 480px){
		img[class=mcnImage]{
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		table[class=mcnImageGroupContentContainer]{
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=mcnImageGroupContent]{
			padding:9px !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=mcnImageGroupBlockInner]{
			padding-bottom:0 !important;
			padding-top:0 !important;
		}

}	@media only screen and (max-width: 480px){
		tbody[class=mcnImageGroupBlockOuter]{
			padding-bottom:9px !important;
			padding-top:9px !important;
		}

}	@media only screen and (max-width: 480px){
		table[class=mcnCaptionTopContent],table[class=mcnCaptionBottomContent]{
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		table[class=mcnCaptionLeftTextContentContainer],table[class=mcnCaptionRightTextContentContainer],table[class=mcnCaptionLeftImageContentContainer],table[class=mcnCaptionRightImageContentContainer],table[class=mcnImageCardLeftTextContentContainer],table[class=mcnImageCardRightTextContentContainer]{
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=mcnImageCardLeftImageContent],td[class=mcnImageCardRightImageContent]{
			padding-right:18px !important;
			padding-left:18px !important;
			padding-bottom:0 !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=mcnImageCardBottomImageContent]{
			padding-bottom:9px !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=mcnImageCardTopImageContent]{
			padding-top:18px !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=mcnImageCardLeftImageContent],td[class=mcnImageCardRightImageContent]{
			padding-right:18px !important;
			padding-left:18px !important;
			padding-bottom:0 !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=mcnImageCardBottomImageContent]{
			padding-bottom:9px !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=mcnImageCardTopImageContent]{
			padding-top:18px !important;
		}

}	@media only screen and (max-width: 480px){
		table[class=mcnCaptionLeftContentOuter] td[class=mcnTextContent],table[class=mcnCaptionRightContentOuter] td[class=mcnTextContent]{
			padding-top:9px !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=mcnCaptionBlockInner] table[class=mcnCaptionTopContent]:last-child td[class=mcnTextContent]{
			padding-top:18px !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=mcnBoxedTextContentColumn]{
			padding-left:18px !important;
			padding-right:18px !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=mcnTextContent]{
			padding-right:18px !important;
			padding-left:18px !important;
		}

}	@media only screen and (max-width: 480px){
		table[id=templateContainer],table[id=templatePreheader],table[id=templateHeader],table[id=templateBody],table[id=templateFooter]{
			max-width:600px !important;
			width:100% !important;
		}

}	@media only screen and (max-width: 480px){
		h1{
			font-size:24px !important;
			line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){
		h2{
			font-size:20px !important;
			line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){
		h3{
			font-size:18px !important;
			line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){
		h4{
			font-size:16px !important;
			line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){
		table[class=mcnBoxedTextContentContainer] td[class=mcnTextContent],td[class=mcnBoxedTextContentContainer] td[class=mcnTextContent] p{
			font-size:18px !important;
			line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){
		table[id=templatePreheader]{
			display:block !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=preheaderContainer] td[class=mcnTextContent],td[class=preheaderContainer] td[class=mcnTextContent] p{
			font-size:14px !important;
			line-height:115% !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=headerContainer] td[class=mcnTextContent],td[class=headerContainer] td[class=mcnTextContent] p{
			font-size:18px !important;
			line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=bodyContainer] td[class=mcnTextContent],td[class=bodyContainer] td[class=mcnTextContent] p{
			font-size:18px !important;
			line-height:125% !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=footerContainer] td[class=mcnTextContent],td[class=footerContainer] td[class=mcnTextContent] p{
			font-size:14px !important;
			line-height:115% !important;
		}

}	@media only screen and (max-width: 480px){
		td[class=footerContainer] a[class=utilityLink]{
			display:block !important;
		}

}</style></head>
    <body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" style="margin: 0;padding: 0;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color: #F2F2F2;height: 100% !important;width: 100% !important;">
        <center>
            <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;margin: 0;padding: 0;background-color: #F2F2F2;height: 100% !important;width: 100% !important;">
                <tr>
                    <td align="center" valign="top" id="bodyCell" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;margin: 0;padding: 20px;border-top: 0;height: 100% !important;width: 100% !important;">
                        <!-- BEGIN TEMPLATE // -->
                        <table border="0" cellpadding="0" cellspacing="0" width="600" id="templateContainer" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;border: 0;">
                            <tr>
                                <td align="center" valign="top" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                                    <!-- BEGIN PREHEADER // -->
                                    <table border="0" cellpadding="0" cellspacing="0" width="600" id="templatePreheader" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color: #FFFFFF;border-top: 0;border-bottom: 0;">
                                        <tr>
                                        	<td valign="top" class="preheaderContainer" style="padding-top: 9px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
    <tbody class="mcnTextBlockOuter">
        <tr>
            <td valign="top" class="mcnTextBlockInner" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">

                <table align="left" border="0" cellpadding="0" cellspacing="0" width="366" class="mcnTextContentContainer" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                    <tbody><tr>

                        <td valign="top" class="mcnTextContent" style="padding-top: 9px;padding-left: 18px;padding-bottom: 9px;padding-right: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #606060;font-family: Helvetica;font-size: 11px;line-height: 125%;text-align: left;">

                            You have been authorised to register on the BGSCoffee Program Admin Page.</td>
                    </tr>
                </tbody></table>

                <table align="right" border="0" cellpadding="0" cellspacing="0" width="197" class="mcnTextContentContainer" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                    <tbody>
                      <tr>

                        <td height="37" valign="top" class="mcnTextContent" style="padding-top: 9px;padding-right: 18px;padding-bottom: 9px;padding-left: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #606060;font-family: Helvetica;font-size: 11px;line-height: 125%;text-align: left;">&nbsp;</td>
                    </tr>
                </tbody></table>

            </td>
        </tr>
    </tbody>
</table></td>
                                        </tr>
                                    </table>
                                    <!-- // END PREHEADER -->
                                </td>
                            </tr>
                            <tr>
                                <td align="center" valign="top" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                                    <!-- BEGIN HEADER // -->
                                    <table border="0" cellpadding="0" cellspacing="0" width="600" id="templateHeader" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color: #FFFFFF;border-top: 0;border-bottom: 0;">
                                        <tr>
                                            <td valign="top" class="headerContainer" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnImageBlock" style="min-width: 100%;border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
    <tbody class="mcnImageBlockOuter">
            <tr>
                <td valign="top" style="padding: 9px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;" class="mcnImageBlockInner">&nbsp;</td>
            </tr>
    </tbody>
</table></td>
                                        </tr>
                                    </table>
                                    <!-- // END HEADER -->
                                </td>
                            </tr>
                            <tr>
                                <td align="center" valign="top" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                                    <!-- BEGIN BODY // -->
                                    <table border="0" cellpadding="0" cellspacing="0" width="600" id="templateBody" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;background-color: #FFFFFF;border-top: 0;border-bottom: 0;">
                                        <tr>
                                            <td valign="top" class="bodyContainer" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
    <tbody class="mcnTextBlockOuter">
        <tr>
            <td valign="top" class="mcnTextBlockInner" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">

                <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextContentContainer" style="border-collapse: collapse;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                    <tbody>
                      <tr>

                        <td valign="top" class="mcnTextContent" style="padding-top: 9px;padding-right: 18px;padding-bottom: 9px;padding-left: 18px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #606060;font-family: Helvetica;font-size: 15px;line-height: 150%;text-align: left;">

                            <h1 class="null" style="margin: 0;padding: 0;display: block;font-family: Helvetica;font-size: 40px;font-style: normal;font-weight: bold;line-height: 125%;letter-spacing: -1px;text-align: left;color: #606060 !important;">Hi there '.$name .',
</h1>
&nbsp;

<h3 class="null" style="margin: 0;padding: 0;display: block;font-family: Helvetica;font-size: 18px;font-style: normal;font-weight: bold;line-height: 125%;letter-spacing: -.5px;text-align: left;color: #606060 !important;">You have been authorised to access the BGS Coffee Dashboard.</h3>

<p style="margin: 1em 0;padding: 0;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #606060;font-family: Helvetica;font-size: 15px;line-height: 150%;text-align: left;">This is for being part of the leadership team on it you will find</p>
<ul>
  <li>Reports</li>
  <li>Sales</li>
  <li>Price Editor</li>
  <li>Staff Editor</li>
  <li>Teacher Editor</li>
  <li>Public Website Editor</li>
</ul>

<h3 class="null" style="margin: 0;padding: 0;display: block;font-family: Helvetica;font-size: 18px;font-style: normal;font-weight: bold;line-height: 125%;letter-spacing: -.5px;text-align: left;color: #606060 !important;">Please use the link below to register, it is limited to one account.</h3>
&nbsp;

<h2 class="null" style="margin: 0;padding: 0;display: block;font-family: Helvetica;font-size: 26px;font-style: normal;font-weight: bold;line-height: 125%;letter-spacing: -.75px;text-align: left;color: #404040 !important;"><a href="www.a.bgscoffee.com/register?key=' . $string . '&e='.$email.'&n='.$name.'" style="word-wrap: break-word; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; color: #1C687C; font-weight: normal; font-family: Helvetica; text-align: center;">Click here to Register</a></h2>
<p style="margin: 0;padding: 0;display: block;font-family: Helvetica;font-size: 26px;font-style: normal;font-weight: bold;line-height: 125%;letter-spacing: -.75px;text-align: left;color: #404040 !important;">&nbsp;</p>

<h3 class="null" style="margin: 0;padding: 0;display: block;font-family: Helvetica;font-size: 18px;font-style: normal;font-weight: bold;line-height: 125%;letter-spacing: -.5px;text-align: left;color: #606060 !important;"><em>Thanks,<br />
  Ms Stevenson </em></h3>
<pre>Enterprise&nbsp;Education&nbsp;Program&nbsp;Coordinator</pre></td>
                    </tr>
                </tbody></table>

            </td>
        </tr>
    </tbody>
</table></td>
                                        </tr>
                                    </table>
                                    <!-- // END BODY -->
                                </td>
                            </tr>
                            <tr>
                                <td align="center" valign="top" style="mso-table-lspace: 0pt;mso-table-rspace: 0pt;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;">
                                    <!-- BEGIN FOOTER // -->


                                          </body>
</html>






';
    $mail->AltBody = 'Hello '.$name.',

As a member of the leadship team for the year 11 coffee program you have access to an online tool where you can view reports, as well as configure basic settings.
Please register your account at BGSCoffee using
www.a.bgscoffee.com/register?key=' . $string . '&e='.$email.'&n='.$name;


    if (!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }

}
else {
    die("MISSING EMAIL/NAME");
}
?>
</body>
</html>