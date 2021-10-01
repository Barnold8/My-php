<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
            <?php 
            
                $files = scandir("../servs");
                foreach ($files as $key => $value) {
                    // $arr[3] will be updated with each value from $arr...
                    echo "<a href='$value'download> $value </a><br/>/";
                    print_r($arr);
                }
                
            
            ?>
        
        <script src="" async defer></script>
    </body>
</html>