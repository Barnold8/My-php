
<html>

    <head>

    <style></style>


<?php
    

    function MyPow($num,$exponent){

        $start_num = 0;
        $start_num += $num;

        while($exponent > 1){
            
            $exponent--;
            $start_num *= $num;
            
        }


        return $start_num;

    }

    $string = "Hello world";
    $int = 1;
    $float = 1.245;
    $char = 'a';
    $double = 1.245875474839;
    $bool = true;
    $br = "<br/>";
    $array = array('First' => 1,
        'Second' => 2,
        'Third' => 3    
);

$data_string =  "$br$br String: $string $br Char: $char $br Int: $int $br Float: $float $br  Double: $double $br Bool: $bool $br Array: $array $br";

    
?>


 
<title><?php echo MyPow(5,2);?></title>
</head>

<body>

   <b> DataTypes </b>

    <?php echo $data_string?>


</body>



</html>