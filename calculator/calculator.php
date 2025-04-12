<html>
<head>

    <title>Calculator</title>
    <link rel="stylesheet" href="calculator.css">
</head>
<body>
    <div class="calculator">
        <input type="text" id="display" disabled>
        <div class="buttons">
            <button class="wide" onclick="clearDisplay()">C</button>

            <button onclick="backspace()">⌫</button>
            <button onclick="appendOperator('/')">/</button>

            <button onclick="appendChar('7')">7</button>
            <button onclick="appendChar('8')">8</button>
            <button onclick="appendChar('9')">9</button>
            <button onclick="appendOperator('*')">×</button>

            <button onclick="appendChar('4')">4</button>
            <button onclick="appendChar('5')">5</button>
            <button onclick="appendChar('6')">6</button>
            <button onclick="appendOperator('-')">−</button>

            <button onclick="appendChar('1')">1</button>
            <button onclick="appendChar('2')">2</button>
            <button onclick="appendChar('3')">3</button>
            <button onclick="appendOperator('+')">+</button>

            <button onclick="sign()">%</button>	
            <button onclick="appendChar('0')">0</button>
            <button onclick="appendChar('.')">.</button>
            <button class="equal" onclick="calculate()">=</button>
        </div>
    </div>
    <script src="calculator.js"></script>
</body>
</html>