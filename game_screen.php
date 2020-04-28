
<?php include 'loggedin.php';?>


<?php 

	session_start();
	if (isset($_SESSION['username'])){
		echo "Welcome Back, ".$_SESSION['username'] ; 
	}
	 ?> 


<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="game_screen.css">
    <title>Gemstones</title>
  </head>
  <body>
    <h1 class="page-title">Gemstones Card Game</h1>
    <div id ="jnk1">
      <span id ="pnts">Points: 00</span>
      <span id="tm">Time | <label id="hours">00</label>:<label id="mins">00</label>:<label id="secs">00</label></span>
      <script>
        var hoursL = document.getElementById("hours");
        var minsL = document.getElementById("mins");
        var secsL = document.getElementById("secs");
        var totalsecs = 0;
        var totalmins = 0; 
        setInterval(timer, 1000);
        
        function convert(times){
            var string = times + "";
            if(string.length < 2) {
              return "0" + string;
            }
            else {
              return string;
            }   
        }

        function timer(){
          ++totalsecs;
          secsL.innerHTML = convert(totalsecs%60);
            
          if (totalsecs == 59) {
            ++totalmins; 
            minsL.innerHTML =convert(totalmins%60);
          }
        }
      </script>
    </div>
    <br>
    <div class="game-container">
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
          </div>

          <div class="flip-card-back">
            <h1>card1</h1> 
          </div>
        </div>
      </div>

      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
          </div>

          <div class="flip-card-back">
            <h1>card2</h1> 
          </div>
        </div>
      </div>

      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
          </div>

          <div class="flip-card-back">
            <h1>card3</h1> 
          </div>
        </div>
      </div>

      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
          </div>

          <div class="flip-card-back">
            <h1>card1</h1> 
          </div>
        </div>
      </div>

      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
          </div>

          <div class="flip-card-back">
            <h1>card2</h1> 
          </div>
        </div>
      </div>

      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
          </div>

          <div class="flip-card-back">
            <h1>card3</h1> 
          </div>
        </div>
      </div>

      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
          </div>

          <div class="flip-card-back">
            <h1>card1</h1> 
          </div>
        </div>
      </div>

      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
          </div>

          <div class="flip-card-back">
            <h1>card1</h1> 
          </div>
        </div>
      </div>
    </div>
    <div id="tempLink"><a href="score_page.html">To Score</a></div>

    <script type="text/javascript">
      // setup card toggle and scoring logic
      var current_card = null;

      function flipCard(card) {
        console.log("flip");

        card.classList.toggle('flipped');
        if (card.classList.contains("flipped")) {
          if (current_card != null) {
            var match = false;
            // check equality of card type

            // check not the same card

            if (match) {
              // calculate points
              var new_points = (100 * 1/seconds_since_card_select) - (current_time_secs - secs_since_game_start);

              points = points + new_points;

              if (all_cards_matched) {
                // do POST request to .php page for database to receive latest game score and time played

                // send the play6er to the Score page automatically after timer.
              }
            }
          } else {
            // set current_card to selected card

            // set timestamp of select
          }
        }
        
      }

      function flipCardDelegate(card) {
        return function() {
          flipCard(card);
        }
      }

      // setup cards with flip toggle
      var cards = document.getElementsByClassName("flip-card-inner");
      var i;
      for (i = 0; i < cards.length; i++) {
        console.log(i);
        var card = cards[i];
        card.addEventListener('click', flipCardDelegate(card), false);
      }
    </script>
  </body>
</html>
