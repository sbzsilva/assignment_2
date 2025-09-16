<!DOCTYPE html>
<html>
<head>
    <title>Dynamic Content Calculator</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input[type="number"] { width: 100px; padding: 8px; }
        button { padding: 10px 15px; background-color: #4CAF50; color: white; border: none; cursor: pointer; }
        button:hover { background-color: #45a049; }
        .result { margin-top: 20px; background-color: #f0f0f0; padding: 15px; border-radius: 5px; }
    </style>
</head>
<body>
    <h1>Dynamic Content Calculator</h1>
    <p>Calculate the result of: ((√(c³) / a) * 10) + b</p>
    
    <form method="post">
        <div class="form-group">
            <label for="a">Value for a:</label>
            <input type="number" id="a" name="a" value="<?php echo isset($_POST['a']) ? $_POST['a'] : '1'; ?>" required>
        </div>
        
        <div class="form-group">
            <label for="b">Value for b:</label>
            <input type="number" id="b" name="b" value="<?php echo isset($_POST['b']) ? $_POST['b'] : '1'; ?>" required>
        </div>
        
        <div class="form-group">
            <label for="c">Value for c:</label>
            <input type="number" id="c" name="c" value="<?php echo isset($_POST['c']) ? $_POST['c'] : '1'; ?>" required>
        </div>
        
        <button type="submit">Calculate</button>
    </form>
    
    <?php
    if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        
        // Call the Python script with the parameters
        $command = escapeshellcmd("/var/www/html/calculate.py") . " " . escapeshellarg($a) . " " . escapeshellarg($b) . " " . escapeshellarg($c);
        $output = shell_exec($command);
        
        echo '<div class="result-container">';
        echo $output;
        echo '</div>';
    }
    ?>
</body>
</html>