<?php
/**
 * Created by PhpStorm.
 * User: hoa
 * Date: 22/01/2019
 * Time: 15:03
 */
echo '<h1> Result: </h1>';
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $firstOperand = $_POST['operand1'];
    $secondOperand = $_POST['operand2'];
    $operator = $_POST['operator'];
    try{
        switch ($operator){
            case 'Add':
                echo $firstOperand.' + '.$secondOperand.' = '.($firstOperand+$secondOperand);
                break;
            case 'Sub':
                echo $firstOperand.' - '.$secondOperand.' = '.($firstOperand-$secondOperand);
                break;
            case 'Mul':
                echo $firstOperand.' X '.$secondOperand.' = '.($firstOperand*$secondOperand);
                break;
            case 'Div':
                if($secondOperand==0){
                    throw new Exception('Invalid number, you are dividing for 0');
                    break;
                }
                else{
                    echo $firstOperand.' / '.$secondOperand.' = '.($firstOperand/$secondOperand);
                    break;
                }
        }
    }
    catch (Exception $e){
        echo 'Exception: '.$e->getMessage()."\n\n";
    }

}
