<?php
if(isset($_POST['submit'])){
    $file = $_FILES['imagem'];

    $fileName = $_FILES['imagem']['name'];
    $fileTmpname = $_FILES['imagem']['tmp_name'];
    $fileSize = $_FILES['imagem']['size'];
    $fileError = $_FILES['imagem']['error'];
    $fileType = $_FILES['imagem']['type'];

    $imagemExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allower = array('jpg', 'jpeg', 'png', 'pdf');

    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 1000000){
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = 'envio/'.$fileNameNew;
                move_uploaded_file($fileTmpname, $fileDestination);
                header("Location: index.php");
            }else{
                echo " Seu arquivo é muito grande!"
            }
        }else{
            echo "Existe algum erro no envio do seu arquivo!";
        }
    }else{
        echo "Você não pode enviar esse tipo de arquivo!";
    }

}

?>