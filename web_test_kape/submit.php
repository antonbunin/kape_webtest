<?php
function checkForm($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if(isset($_POST['submit'])){
    $title = "Form has been submitted!";
    $content = '<div class="divTable">
                        <div class="divTableRow">
                            <div class="divTableCell" style="width: 150px;">Name:</div>
                            <div class="divTableCell">'.checkForm($_POST['name']).'</div>
                        </div>
                        <div class="divTableRow">
                            <div class="divTableCell">Email:</div>
                            <div class="divTableCell">'.checkForm($_POST['email']).'</div>
                        </div>
                        <div class="divTableRow">
                            <div class="divTableCell">Message:</div>
                            <div class="divTableCell">'.nl2br(checkForm($_POST['msg'])).'</div>
                        </div>
                    </div>';
} else {
    $title = "This is a form handling page";
    $content = "<h3>No form has been submitted!</h3>";
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Kape | Computer Support</title>
<link href="includes/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="heading">
        <div class="heading-title main-top">Computer Support</div>
    </div>
    <div class="main-top">
        <div class="main-title">
            Support for Windows Products
        </div>
        <div class="main-location">
        Home > Support > <span class="current-location">Fix Windows</span>
        </div>
        <div class="main-title main-title_sub">
            How To Fix Windows
        </div>
    </div>
    <div class="wrapper">
    <div class="container">
        <div class="right-col">
        <div class="right_content" id="right_side_column">
            <h3>Repair Windows</h3>
            Rating: <img src="images/star.gif"><img src="images/star.gif"><img src="images/star.gif"><img src="images/star.gif"><img src="images/star.gif">
            <br>Downloads in January: 361,927
            <br>Download Size: 6MB
            <br><br>
            <img src="images/screenshot.png" width="100%">
            <br>
            <h4>Windows Operating Systems:</h4>

            Compatible with Windows XP, Vista, Windows 7 (32 and 64 bit), Windows 8 & 8.1 (32 and 64 bit).

            <h4>Minimum Requirements:</h4>

            Internet connection. 20 MB free hard disk space. Logged on as administrator

            <br><br>
            <img src="images/W-Vista.gif">&nbsp;&nbsp;<img src="images/W-10.gif">&nbsp;&nbsp;<img src="images/W-8.gif">&nbsp;&nbsp;<img src="images/W-7.gif">
        </div>
        <div class="right_content" style="background-color: #fff"></div>
        </div>
        <div class="content">
            <div class="content-blue-title"><?php echo $title; ?></div>
            <div class="in-content">
                <?php echo $content; ?>
            </div>
        </div>
    </div>
    </div>
</body>
</html>