<!DOCTYPE html>
<head>
  <title>Chef Burger</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/styles.css">
</head>

  <body data-barba="wrapper">
  <?php include('includes/welcome-menu.php') ?>
    
    <section id="contact-section">
        <div class="restaurant-image">
          <img src="https://images.unsplash.com/photo-1428515613728-6b4607e44363?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=3150&q=80">
        </div>
        <div class="contact">
            <div class="text">
                <h1>contact</h1>
                <a href="#">234 Main Street
                New York, New York 11747</a>
                <p>General Inquiries:<a href="">info@antonsnyc.com</a></p>
                <p>Join Our Team:<a href="">info@antonsnyc.com</a></p>
                <p>Follow: <a href="#">info@antonsnyc.com</a></p>
            </div>
            <div class="form">
                <form>
                    <div class="name">
                        <input type="text" name="name" placeholder="Name">
                    </div>
                    <div class="email">
                        <input type="text" name="email" placeholder="Email">
                    </div>
                    <div class="phone">
                        <input type="text" name="phone" placeholder="Phone Number">
                    </div>
                    <div class="drop-down
                    ">
                        <input 
                        id="myDropdown" type="text" name="drop-down" placeholder="What are you getting in touch about?">
                    </div>
                    <div class="text-area
                    ">
                        <textarea type="text-area" name="text-area" placeholder="Your Message">
                        </textarea>
                    </div>
                    <div class="btn">
                      <a>
                        SEND
                      </a>
                    </div>
                </form>
            </div>
        </div>
    </section>

    

    

    <script src="/js/dist/vendors~FirstComp.js"></script>
    <script src="/js/dist/FirstComp.js"></script>
    <script src="/js/dist/main.js"></script>
  </body>

</html>