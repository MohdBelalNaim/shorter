<?php
if(isset($_GET['url'])){
    //getting the longer url
    $longUrl=$_GET['url'];
    //generating a file name that will be used as the shortened url
    $filename=rand(00000,99999);
    mkdir($filename);
    $newUrl=fopen($filename.'/'."index.php","w");
    if(fwrite($newUrl,"<?php header('location:http://$longUrl');?>")){
        fclose($newUrl);
        echo "
        <div class='w3-col-12  w3-round w3-border w3-border-green w3-center w3-animate-bottom'>
            <div class='w3-green w3-padding-16  w3-center'>Here's your smaller URL</div>
            <div class='w3-padding-16  w3-center'>$filename</div>
            <div class='w3-padding-16 w3-margin-top w3-center' onclick='location.reload();'>Get another ></div>
        </div>
        ";
    }
    else{
        echo "dikkat hai";
    }
}
?>