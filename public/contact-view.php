<html>
<head>
<title>Contact Us Form</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<section id="nav">
      <div>
        <a href="Home.vue"><img id="logo" src="@/assets/images/logo.png" alt="Wikimedia Logo"></a>
      </div>
      
      <div class="nav">

        <li @click="goToHome">HOME</li>
        <li @click="goToAbout">ABOUT</li>
        <li @click="goToPortfolios">PORTFOLIOS</li>
        <li @click="goToContact">CONTACT</li>

        <!-- <li><a href="Home.vue">HOME</a></li>
        <li><a href="About.vue">ABOUT</a></li>
        <li><a href="Portfolios.vue">PORTFOLIOS</a></li>
        <li><a href="Contact.vue">CONTACT</a></li> -->
      </div>

      <div class="subNav">
        <li><button><a href="Register.vue">SIGN IN/UP</a></button></li>
        <li><button><a href="Donation.vue">Donation</a></button></li>
      </div>

      <router-view></router-view>
    </section>


<section class="container">

    <div class="heading">
        <h1>DON'T HESITATE TO CONTACT US!</h1>
        <p>If you have any questions or would like to send us any files related to the campaign you joined, please don't hesitate to contact us!</p>
    </div>

    <div class="form-container">

        <form name="frmContact" id="" frmContact"" method="post"
            action="" enctype="multipart/form-data"
            onsubmit="return validateContactForm()">

            <div class="input-row">
                <label style="padding-top: 20px;">Name</label> <span
                    id="userName-info" class="info"></span><br /> <input
                    type="text" class="input-field" name="userName"
                    id="userName" />
            </div>
            <div class="input-row">
                <label>Email</label> <span id="userEmail-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="userEmail" id="userEmail" />
            </div>
            <div class="input-row">
                <label>Subject</label> <span id="subject-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="subject" id="subject" />
            </div>
            <div class="input-row">
                <label>Message</label> <span id="userMessage-info"
                    class="info"></span><br />
                <textarea name="content" id="content"
                    class="input-field" cols="60" rows="6"></textarea>
            </div>
            <div class="submitButton">
                <h6>THANK YOU FOR VISITING OUR WEBSITE, WE'LL GET BACK TO YOU IN 2-3 BUSINESS DAYS.</h6>
                <input type="submit" name="send" class="btn-submit"
                    value="SEND" />

                <div id="statusMessage"> 
                        <?php
                        if (! empty($message)) {
                            ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                        }
                        ?>
                    </div>
            </div>
        </form>
    </div>

    </section>

    
    <script src="main.js" type="text/javascript"></script>
</body>
</html>