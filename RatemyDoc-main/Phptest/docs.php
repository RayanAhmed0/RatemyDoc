<!DOCTYPE html>
<html>

<head>
    <title>ratemydoc</title>
</head>

<body>
    <h1>test</h1>
    <?php
    $connect = mysqli_connect('localhost', 'root', '', 'test2');
    
    $query = 'SELECT id ,name FROM docs';
    
    $result = mysqli_query($connect, $query);
    echo mysqli_num_rows($result);
    
    while ($record = mysqli_fetch_assoc($result)) {
        echo '<pre>';
        print_r($record);
        echo '<pre>';
        
    }
    ?>
</body>

</html>