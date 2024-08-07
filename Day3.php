<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

body{
    display:flex;
    justify-content:center;
    margin-top:100px;
}

label{
    font-weight:bolder;
    font-size:20px;
    font-family: sans serif;
}

form{
    width:400px;
    height:255px;
    background:grey;
    padding:30px;
    border-radius:20px;
    position:absolute;
    z-index: 1;
}

.but{
    margin-left:40px;

}
.but button{
    width:80px;
    height:50px;
    background-color:black;
    color:white;
    border:none;
    margin-left:300px;
    border-radius:10px;
    font-size:15px;
}
.but button:active{
    background-color:green;
}

.re input{
    margin-left:53px;
}

input{
    height:30px;
    margin-bottom:10px;
    border-radius:10px;
    padding:5px;
    font-size:18px;
}

select{
    position:absolute;
    width: 100px;
    height:50px;
    background-color:black;
    color:white;
    border:none;
    border-radius:10px;
}
p{
    font-size:30px;
    margin-top:235px;
    background-color:red;
    padding:20px;
    border-radius:20px;
    z-index: 2;
    position:absolute;
}
h3{
    z-index:2;
    margin-top:350px;
}

</style>


</head>
<body>

<form  method="GET">
<div>
     <label for="number">Number one</label>
     <input type="number" name="num1"  required>
</div>

<div>
     <label for="number">Number two</label>
     <input type="number" name="num2" required>
</div>

<div>
    <select name="operator">
    
    <option value=" ">None</option> 
    <option value="Add">Add (+)</option>
    <option value="Subtract">Subtract (-)</option>
    <option value="Multiply">Multiply ( * )</option>
    <option value="Divide">Divide ( / )</option>

    </select>
</div>

<div class="but">
    <button name="calculate" value="submit" type="submit">   Calculate    </submit>
</div>
     </form>
    

    <?php

if(isset($_GET['calculate'])) {

    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $operator = $_GET['operator'];

    switch($operator){
        case 'None': echo"<h3>Error! : You need to choose an operator</h3>"; break;
        
        case 'Add' : $result = $num1 + $num2;  echo " <P>The Answer is : <strong>$result </strong></p>"; break;

        case 'Subtract' : $result = $num1 - $num2; echo " <P>The Answer is : <strong>$result<strong> </p>"; break;
        
        case 'Multiply' : $result = $num1 * $num2; echo " <P>The Answer is : <strong>$result </strong></p>"; break;
        
        case 'Divide' : $result = $num1 / $num2; echo " <P>The Answer is : <strong>$result </strong></p>"; break;
    
        
    } 
}else{
    echo "<h3>ERROR! : No Data Passed!<h3>";
}  

    ?>



</body>
</html>