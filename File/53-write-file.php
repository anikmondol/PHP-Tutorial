<?php

// $file_name = "dummy.txt";
// $content = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque sint animi eos veniam dolorum, sapiente earum temporibus alias eaque tenetur id repellat, velit dolore consequatur corporis totam doloribus? Quas, libero.";
// $file = fopen($file_name, "w");
// fwrite($file, $content);
// fclose($file);

// $file_name = "anik.txt";

// $file_content = "anik is a lower. he is a 24 year old.";

// $file = fopen($file_name, "w");

// fwrite($file, $file_content);

// fclose($file);

// $file_name = "PROGRAM-FILE/dummy.txt";
// $file_content = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque sint animi eos veniam dolorum, sapiente earum temporibus alias eaque tenetur id repellat, velit dolore consequatur corporis totam doloribus? Quas, libero.";
// $file = fopen($file_name, "w");
// fwrite($file, $file_content);
// fclose($file);




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" placeholder="enter file name" name="file_name">
        <br>
        <br>
        <textarea name="content" id=""></textarea>
        <br>
        <br>
        <button name="btn" type="submit">Submit</button>
    </form>
</body>
</html>


<?php

if (isset($_POST['btn'])) {
    echo "<br>";
   

if (true) {
    $file_name = "PROGRAM-FILE/".$_POST['file_name']; 
    $file_content = $_POST["content"];
    $file = fopen($file_name, "w");
    fwrite($file, $file_content);
    fclose($file);
    echo "file created";
}

}



?>