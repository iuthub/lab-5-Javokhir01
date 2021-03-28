
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>Buy Your Way to a Better Education!</title>
    <link href="http://www.cs.washington.edu/education/courses/cse190m/09sp/labs/4-buyagrade/buyagrade.css" type="text/css" rel="stylesheet" />
</head>

<body>
<?php


$studentName = isset($_POST["name"]) ? $_POST["name"] : "";
$studentSection = isset($_POST["section"]) ? $_POST["section"] : "";
$studentCredit = isset($_POST["creditCard"]) ? $_POST["creditCard"] : "";
$studentType = isset($_POST["type"]) ? $_POST["type"] : "";

if(empty($_POST["name"]) ||  empty($_POST["section"])|| empty($_POST["creditCard"]) || empty( $_POST["type"]))
{
    ?>
    <h1> Sorry </h1>
    <p> You didnt fill out the form completely. <a href="D:/IP_LAB/lab-5-Javokhir01/webpage/buyagrade.html">Try again?</a></p>


    <?php
}
else {
    ?>



    <h1>Thanks, sucker!</h1>

    <p>Your information has been recorded.</p>

    <dl>
        <dt>Name</dt>
        <dd> <?= $_POST["name"]?> </dd>

        <dt>Section</dt>
        <dd><?= $_POST["section"]?></dd>

        <dt>Credit Card</dt>
        <dd><?= $_POST["creditCard"]?>  (  <?=$_POST["type"]?>)</dd>
    </dl>

    <?php


    file_put_contents("suckers.txt","\n".$studentName.";",FILE_APPEND );
    file_put_contents("suckers.txt",$studentSection.";",FILE_APPEND );
    file_put_contents("suckers.txt",$studentCredit.";",FILE_APPEND );
    file_put_contents("suckers.txt",$studentType.";",FILE_APPEND );

    ?>

    <p> Here Are All the suckers who have submitted here </p>
    <pre>
        <?php
        $txtData = file("suckers.txt" );
        foreach ($txtData as $sucker) {
            print_r($sucker);
        }
        ?>
    </pre>

    <?php
}
?>




</body>
</html>
