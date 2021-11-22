<html >

<head>
    <style>
        .error{color:#FF0000;}
    </style>
</head>

<body>
    <?php
    $namaErr=$_POST["nama"];
    $emailErr=$_POST["email"];
    $websiteErr=$_POST["website"];
    $comment=$_POST["comment"];
    $genderErr=$_POST["gender"];
    
    ?>

    <table border="1" align="center">
        <tr>
            <td colspan="2" align="center"><b>
                Data yang Anda Isi</b>
            </td>
        </tr>
        <tr>
            <td>Nama :</td>
            <td><?php echo $namaErr;?></td>
        </tr>

        <tr>
            <td>E-mail :</td>
            <td><?php echo $emailErr;?></td>
        </tr>

        <tr>
            <td>Website :</td>
            <td><?php echo $websiteErr;?></td>
        </tr>

        <tr>
            <td>Komentar :</td>
            <td><?php echo $comment;?></td>
        </tr>

        <tr>
            <td>Gender :</td>
            <td><?php echo $genderErr;?></td>
        </tr>
    
</body>
</html>