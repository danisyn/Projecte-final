<?php include('../base.php')?>

<?php

session_start();
 

    if(isset($_POST['submit']))
    {

$path = '/etc/liquidsoap/music/'.$_SESSION["username"].'/'; //file to place within the server
$valid_formats1 = array("mp3", "ogg", "flac"); //list of file extention to be accepted
if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
    {
        $file1 = $_FILES['file1']['name']; //input file name in this code is file1
        $size = $_FILES['file1']['size'];

        if(strlen($file1))
            {
                list($txt, $ext) = explode(".", $file1);
                if(in_array($ext,$valid_formats1))
                {
                        $actual_image_name = $txt.".".$ext;
                        $tmp = $_FILES['file1']['tmp_name'];
                        if(move_uploaded_file($tmp, $path.$actual_image_name))
                            {
                            shell_exec('find /etc/liquidsoap/music/'.$_SESSION["username"].' -name *.mp3 > /etc/liquidsoap/'.$_SESSION["username"].'.pls');
                            $salida = shell_exec("cat /etc/liquidsoap/".$_SESSION["username"].".pls | awk -F'/' "."'{print".' $NF'."}'");

                            $del = "delete from ".$_SESSION["username"];
                            mysqli_query($conn,$del) or die("Algo ha ido mal en la consulta 0");

                            $lines = explode("\n", $salida);
                            foreach($lines as $line) {
                                $sql = "insert into ".$_SESSION["username"]." (name) values ('$line')";
                                $resultado = mysqli_query($conn,$sql) or die("Algo ha ido mal en la consulta 1");
                            }

                                $sql = "delete from ".$_SESSION["username"]." where name = ''";
                                $resultado = mysqli_query($conn,$sql) or die("Algo ha ido mal en la consulta 1");

                            header("Location: upload_song.php");
                            }
                        else
                            echo "failed";              
                    }
        }
    }
}




?>