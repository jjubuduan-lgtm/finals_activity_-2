<!DOCTYPE html>
<html>
<head>
    <title>My PHP Activities</title>
    <style>
        :root {
            --bg-color: #000000;
            --card-bg: #111111;
            --text-color: #eaeaea;
            --accent-color: #1da1f2; /* Twitter blue accent */
        }

        body {
            font-family: "Segoe UI", Arial, sans-serif;
            margin: 0;
            background-color: var(--bg-color);
            color: var(--text-color);
            line-height: 1.6;
        }

        header {
            background: var(--card-bg);
            color: var(--accent-color);
            padding: 20px;
            font-size: 1.6em;
            font-weight: bold;
            border-bottom: 1px solid #333;
            text-align: left;
            animation: fadeInDown 0.8s ease;
        }

        h2 {
            color: var(--accent-color);
            margin: 30px 0 15px 0;
            border-left: 4px solid var(--accent-color);
            padding-left: 10px;
            font-weight: 600;
            animation: fadeInLeft 0.8s ease;
        }

        .output {
            background: var(--card-bg);
            border: 1px solid #333;
            padding: 15px;
            margin: 15px 0;
            border-radius: 8px;
            box-shadow: 0 0 8px rgba(255,255,255,0.05);
            animation: fadeInUp 0.8s ease;
        }

        .notes {
            background: #1a1a1a;
            border-left: 4px solid var(--accent-color);
            padding: 12px;
            margin: 15px 0;
            border-radius: 5px;
            font-size: 0.95em;
            animation: fadeIn 1s ease;
        }

        footer {
            background: var(--card-bg);
            color: #888;
            text-align: left;
            padding: 15px 20px;
            margin-top: 30px;
            font-size: 0.85em;
            border-top: 1px solid #333;
        }

        /* Animations */
        @keyframes fadeIn {
            from {opacity: 0;}
            to {opacity: 1;}
        }
        @keyframes fadeInDown {
            from {opacity: 0; transform: translateY(-20px);}
            to {opacity: 1; transform: translateY(0);}
        }
        @keyframes fadeInLeft {
            from {opacity: 0; transform: translateX(-20px);}
            to {opacity: 1; transform: translateX(0);}
        }
        @keyframes fadeInUp {
            from {opacity: 0; transform: translateY(20px);}
            to {opacity: 1; transform: translateY(0);}
        }
    </style>
</head>
<body>

<header>My PHP Activities</header>

<h2>Activity 1: Basic Output</h2>
<div class="output">
<?php
echo "Name: Joey Ann Ramos <br>";
print "Course: BSIT";
?>
</div>

<div class="notes">
1. The symbol used to end a PHP statement is a semicolon.<br>
2. The faster one is <code>echo</code> because it simply outputs text.
</div>

<h2>Activity 2: Multiple Outputs</h2>
<div class="output">
<?php
echo "Welcome to my PHP mini project!<br>";
echo "I'm Owi and this is my first PHP project.<br>";
echo "I love learning and expanding my wisdom.";
?>
</div>

<h2>Activity 3: Declaring Variables</h2>
<div class="output">
<?php
$name = "Joey Ann Ramos";
$age = 18;
$course = "BSIT";

echo "Name: " . $name . "<br>";
echo "Age: " . $age . "<br>";
echo "Course: " . $course;
?>
</div>

<h2>Activity 4: Variable Rules</h2>
<div class="output">
<?php
$name = "Ana";   
$age = 18;       
echo $age;     
?> 
</div>

<h2>Activity 5: Arithmetic Operators</h2>
<div class="output">
<?php
$a = 10;
$b = 3;

echo "Addition: " . ($a + $b) . "<br>";
echo "Subtraction: " . ($a - $b) . "<br>";
echo "Multiplication: " . ($a * $b) . "<br>";
echo "Division: " . ($a / $b);
?>
</div>

<h2>Activity 6: Assignment Operators</h2>
<div class="output">
<?php
$x = 5;
$x += 3;
echo $x;
?>
</div>

<h2>Activity 7: Comparison Operators</h2>
<div class="output">
<?php
$a = 10;
$b = 5;

var_dump($a > $b);
echo "<br>";
var_dump($a == $b);
?>
</div>

<h2>Mini Project: Calculator</h2>
<div class="output">
<?php
$num1 = 8;
$num2 = 4;

echo "Sum: " . ($num1 + $num2) . "<br>";
echo "Difference: " . ($num1 - $num2) . "<br>";
echo "Product: " . ($num1 * $num2) . "<br>";
echo "Division: " . ($num1 / $num2);
?>
</div>

<footer>&copy; 2026 My PHP Activities</footer>

</body>
</html>
