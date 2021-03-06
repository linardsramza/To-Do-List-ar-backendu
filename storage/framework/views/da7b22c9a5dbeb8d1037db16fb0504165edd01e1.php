<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <style>
        html {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        body {
            height: 100%;
            margin: 0;
            padding: 0;
            background-image: url("/contactimg.jpg");
            background-attachment: fixed;
            background-size: 100% 100%;
        }
        #all {
            min-height: 100%;
            position: relative;
        }
        #footer {
            height: 40px;
            width: 100%;
            position: absolute;
            left: 0px;
            bottom: 0px;
        }
    #myBtn {
    display: none; /* Hidden by default */
    position: fixed; /* Fixed/sticky position */
    bottom: 20px; /* Place the button at the bottom of the page */
    right: 30px; /* Place the button 30px from the right */
    z-index: 99; /* Make sure it does not overlap */
    border: none; /* Remove borders */
    outline: none; /* Remove outline */
    background-color: red; /* Set a background color */
    color: white; /* Text color */
    cursor: pointer; /* Add a mouse pointer on hover */
    padding: 15px; /* Some padding */
    border-radius: 10px; /* Rounded corners */
    font-size: 18px; /* Increase font size */
}

#myBtn:hover {
    background-color: #555; /* Add a dark-grey background on hover */
}



.futeris {
    display: inline-block;
    margin: 0 16px;
    color: white;
}

    </style>
    <title>statiska lapa</title>
  </head>
  <body>
      <div id="all">
          <div id="header">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
        <a class="navbar-brand" href="/">This site doesn't make sense</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
           
            <!-- <li class="nav-item">
                <a class="nav-link" href="#">about</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">services</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="/contact">contact</a>
              </li>
            
            </li>
      
          </ul>
          
        </div>
    </div>
      </nav>
    </div>




<div id="body">
<div class="container">
    <div style="padding: 50px; padding-top: 100px; text-align: right; float: right;">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/gqOEoUR5RHg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
    
    <div style="height: 500px">
    <form style="padding-top: 100px" method="POST">
        <?php echo e(csrf_field()); ?>

            First name:<br>
            <input type="text" name="firstname" placeholder="First name" style="width: 240px"><br>
            Last name:<br>
            <input type="text" name="lastname" placeholder="Last name" style="width: 240px"><br>
         
                E-mail:<br>
                <input type="email" name="email" placeholder="E-mail" style="width: 240px"><br>
           
                Text:<br>
                <textarea type="text" name="text" placeholder="Text area" style="height: 100px; width: 240px"></textarea><br>
                <button type="submit" class="btn btn-primary" style="margin: 10px; margin-left: 0px">Send</button>
                <button type="submit" class="btn btn-warning" style="margin: 10px; margin-left: 0px">Clear</button>


        </form>
    </div>


        </div>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
      <div id="footer">
      <footer style="background-color: black">
            <nav>
                <ul style="margin-bottom: 0px; padding-top: 10px">
                    <li class="futeris" style="padding-left: 55px">
                        <p>&copy; <?php echo @date("Y"); ?> Copyright</p>
                    </li>
                    <li class="futeris"  style="padding-left: 805px">
                        <p>Developed by Linards Ramza</p>
                    </li>
                </ul>
            </nav>
        </footer>
        
    </div>
</div>
       <script>
        window.onscroll = function() {scrollFunction()};
        
        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("myBtn").style.display = "block";
            } else {
                document.getElementById("myBtn").style.display = "none";
            }
        }
        
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
        </script>
        
            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
        
        </body>
        </html>