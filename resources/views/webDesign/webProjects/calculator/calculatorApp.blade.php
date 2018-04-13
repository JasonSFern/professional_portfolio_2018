<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/calculator.css">

        <title>The Calculator!!! ]>☉_☉]></title>

    </head>

    <body>

      <div id="calculator" class="gloss calculator">

<div class="logo"><img src="img/abi.png"></div>

        <!--Calculator display  -->
        <div class="top-display">
          <div id="funkDisplay" class="funkDisplay">.</div>
          <div id="display" class="display">0</div>
          <div id="memDisplay" class="memDisplay"></div>
        </div>

        <!-- Buttons -->
        <div class="calc-body">

          <div class="alignc">
            <button id="squared" data-ops="squared" class="ops ops-btn">x²</button>
            <button class="num" data-num="7">7</button>
            <button class="num" data-num="4">4</button>
            <button class="num" data-num="1">1</button>
            <button id="clear" data-num="">AC</button>
          </div>

          <div class="alignc">
            <button id="sqrRoot" data-ops="sqrRoot" class="ops ops-btn">√</button>
            <button class="num" data-num="8">8</button>
            <button class="num" data-num="5">5</button>
            <button class="num" data-num="2">2</button>
            <button class="num" data-num="0">0</button>
          </div>

          <div class="alignc">
            <button id="percent" data-ops="percent" class="ops ops-btn">%</button>
            <button class="num" data-num="9">9</button>
            <button class="num" data-num="6">6</button>
            <button class="num" data-num="3">3</button>
            <button id="decimal" class="num" data-num=".">.</button>
          </div>

          <div class="alignc">
            <button id="÷" data-ops="divide" class="ops ops-btn">÷</button>
            <button id="x" data-ops="times" class="ops ops-btn">x</button>
            <button id="-" data-ops="minus" class="ops ops-btn">-</button>
            <button id="+" data-ops="plus" class="ops ops-btn">+</button>
            <button id="equals" class="equals ops-btn" data-result="">=</button>
          </div>

        </div>
      </div>

     <script type="text/javascript" src="/js/calculator.js"></script>


    </body>

</html>
