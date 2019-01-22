<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="content">
    <h1>Product Discount Calculator</h1>
    <label>Product Description: </label>
    <span>
        <?php
        echo $_POST['description'];
        ?>
    </span><br/>
    <label>Price:</label>
    <span>$
    <?php
    echo $_POST['price'];
    ?>
    </span><br/>
    <label>Discount Percent: </label>
    <span>%
    <?php
    echo $_POST['discount_percent'];
    ?>
    </span><br/>
    <label>Discount Amount: </label>
    <span>$
    <?php
    echo $_POST['price']*$_POST['discount_percent']/100;
    ?>
    </span><br/>
    <label>Discount Price: </label>
    <span>$
    <?php
    echo $_POST['price']-$_POST['price']*$_POST['discount_percent']/100;
    ?>
    </span><br/>
</div>
</body>
</html>