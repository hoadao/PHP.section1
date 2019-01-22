<?php
/**
 * Created by PhpStorm.
 * User: hoa
 * Date: 22/01/2019
 * Time: 14:12
 */
?>
<html>
    <head>
        <title>Product Discount Calculator</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <div id="content">
            <h1>Calculator</h1>
            <form method="post" action="result.php">
                <div id="data">
                    <label>First Operand:</label>
                    <input type="text" name="operand1"/><br/>
                    <label>Operator:</label>
                    <select name="operator">
                        <option>Add</option>
                        <option>Sub</option>
                        <option>Mul</option>
                        <option>Div</option>
                    </select>
                    <br/>
                    <label>Second operand:</label>
                    <input type="text" name="operand2"/><br/>
                </div>
                <div id="buttons">
                    <label>&nbsp;</label>
                    <input type="submit" value="Calculate"/>
                </div>
            </form>
        </div>
    </body>
</html>