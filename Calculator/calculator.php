<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="script1.css">
    <title>Calculator</title>
</head>

<body>
<img onclick="mode()" class="mode" id="mode" src="/portfolio/img/moon.png" alt="">
<header>
        <h1>Hari om Projects</h1>
    </header>
    <nav id="nav">
        <a id="home">Home</a>
        <a id="about">About</a>
        <a id="calclu">Calculator</a>
        <a id="search">Searching</a>
        <a id="Count_word">Count Word</a>
        <a id="DJ">DJ</a>
        <a id="portfolio">Portfolio</a>
        <a id="login" class="Login">Login</a>
        <a id="signup" class="SignUp">SignUp</a>
    </nav>
    <div class="container">
        <h1>Calculator</h1>
        <div class="calculator">
            <input type="text" name="screen" id="screen">
            <table>
                <tr>
                    <td><button>(</button></td>
                    <td><button>)</button></td>
                    <td><button style="background-color: #C8C5BF;" >C</button></td>
                    <td><button style="background-color: red;">+</button></td>
                </tr>
                <tr>
                    <td><button>7</button></td>
                    <td><button>8</button></td>
                    <td><button>9</button></td>
                    <td><button style="background-color: #93EB2E;">X</button></td>
                </tr>
                <tr>
                    <td><button>4</button></td>
                    <td><button>5</button></td>
                    <td><button>6</button></td>
                    <td><button style="background-color: #2EEAEB;">-</button></td>
                </tr>
                <tr>
                    <td><button>1</button></td>
                    <td><button>2</button></td>
                    <td><button>3</button></td>
                    <td><button style="background-color: #2E9AEB;">%</button></td>
                </tr>
                <tr>
                    <td><button>.</button></td>
                    <td><button>0</button></td>
                    <td><button>/</button></td>
                    <td><button style="background-color: #67AB67;">=</button></td>
                </tr>
            </table>
        </div>
    </div>
 <footer>
        <a href="#">FAQ</a>
        <a href="#">Contact us</a>
        <a href="#">Email</a>
        <a href="#">Tweet</a>
        <a href="#">&copy;2022 |hari om</a>
    </footer>
</body>
<script src="/portfolio/index.js"></script>
</html>