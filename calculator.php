<?php
    include("nav.php");
?>
<!doctype html>
<html lang="en">
<head>
        <?php include("head.php");?>
        <link rel="stylesheet" href="css/calculator.css">

        <title>Calculator</title>
</head>
<body>
    
    <div class="d-flex justify-content-center">
        <div class="calc my-5">
            <div class="container text-center jumbotron my-1 py-1">
                <h1>CALCULATOR</h1>
            </div>
            <div class="container">
                <div class="row">
                    <div style="width: 50%;" class="">
                        <table style="width: 100%;">
                            <tr class="mx-0">
                                <td colspan="4"><input type="textarea" id="result" class="input text-right" style="width: 100%;"></td>
                            </tr>
                            <tr class="text-center mx-0">
                                <td><button  class="button btn btn-warning" onclick="clr()">C</button></td>
                                <td><button  class="button btn btn-warning" onclick="del()">Del</button></td>
                                <td><button  class="button btn btn-warning" onclick="dis('%')">%</button></td>
                                <td><button  class="button btn btn-warning" onclick="dis('/')">/</button></td>
                            </tr>
                            <tr class="text-center mx-0">
                                <td><button  class="nbutton btn btn-light" onclick="dis('9')">9</button></td>
                                <td><button  class="nbutton btn btn-light" onclick="dis('8')">8</button></td>
                                <td><button  class="nbutton btn btn-light" onclick="dis('7')">7</button></td>
                                <td><button  class="button btn btn-warning" onclick="dis('*')">X</button></td>
                            </tr>
                            <tr class="text-center mx-0">
                                <td><button  class="nbutton btn btn-light" onclick="dis('6')">6</button></td>
                                <td><button  class="nbutton btn btn-light" onclick="dis('5')">5</button></td>
                                <td><button  class="nbutton btn btn-light" onclick="dis('4')">4</button></td>
                                <td><button  class="button btn btn-warning" onclick="dis('+')">+</button></td>
                            </tr>
                            <tr class="text-center mx-0">
                                <td><button  class="nbutton btn btn-light" onclick="dis('3')">3</button></td>
                                <td><button  class="nbutton btn btn-light" onclick="dis('2')">2</button></td>
                                <td><button  class="nbutton btn btn-light" onclick="dis('1')">1</button></td>
                                <td><button  class="button btn btn-warning" onclick="dis('-')">-</button></td>
                            </tr>
                            <tr class="text-center mx-0">
                                <td colspan="2"><button  class="nbutton btn btn-light" onclick="dis('0')">0</button></td>
                                <td><button  class="nbutton btn btn-light" onclick="dis('.')">.</button></td>
                                <td><button  class="equals btn btn-warning" onclick="calculate()">=</button></td>
                            </tr>
                        </table>
                    </div>
                    <div style="width: 50%;" class="jumbotron my-0 mx-0 py-0 px-0">
                        <h2 class="text-center">History</h2>
                        <hr width="90%">
                        <ul id="history">

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="calc.js"></script>
    <?php include("foot.php");?>
</body>
</html>