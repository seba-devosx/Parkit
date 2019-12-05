<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <script src="../../assets/js/jquery-3.4.1.js"></script>
  <script src="../../assets/plugins/push.js-master/push.js"></script>
  <script src="../../assets/plugins/push.js-master/serviceWorker.js"></script>
  <link rel="stylesheet" type="text/css" href="styles.css">
  </head>
  <body>
  <div id="navbar"><span>Push.js Tutorial</span></div>
  <div id="wrapper">

      <button id="notify-button">Notify Me!!</button>
      <button id="clear-button">Clear All!</button>
      <button id="check-button">Check Permission</button>
  </div>
  
  <script>
      $("#notify-button").click(function(){
        Push.create("Hello world!",{
            body: "This is example of Push.js Tutorial",
            icon: '/Logo_small.png',
            timeout: 2000,
            onClick: function () {
                window.focus();
                this.close();
            }
        });
      });

      $("#clear-button").click(function(){ 
           Push.clear();
      });

      $("#check-button").click(function(){ 
            console.log(Push.Permission.has());
      });

  </script>
  </body>
</html>