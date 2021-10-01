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
        <form action="testing.php" method="get">

            <label> Your city: </label>
            <input type="text" name="city"/>
            <br/>
            <label> Your age: </label>
            <input type="text" name="age"/>
            <br/>
            <label> Your name: </label>
            <input type="text" name="name"/>
            <br/>
            <label> Your height: </label>
            <input type="text" name="height"/>
            <br/>
            <input type="submit" value="Submit"/>


            <?php 

                if(isset($_GET) && array_key_exists('state',$_GET)){

                    $state = $_GET ['state'];
                    if(isset($state) && !empty($state)){

                        echo "You are: " . $name. "<br/>";
                        echo "You are " . $age . "years old <br/>";
                        echo "You live in" . $city . "<br/>";
                        echo "and your height is " . $height . "ft <br>";
                    }

                }
                else{

                    echo "<br/>FATAL ERROR";

                }
            
            ?>


        </form>
        <script src="" async defer></script>
    </body>
</html>