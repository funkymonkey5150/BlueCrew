<?php include('assets/include/head.php');?>
    
    <link rel="stylesheet" href="assets/css/sawhold.css">  
    <script src="assets/js/jquery.mask.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.phone_us').mask('(000) 000-0000');
        });
    </script>
    <title>Contact Us</title>
</head>
<body>
<?php include('assets/include/nav.php');?>
    <img src="assets/img/bluerect.jpg" alt="blue rectangle" class="blueR">
    <div class="container">
        <div class="row short-row"> 
            <div class="col-sm">
                <h1 class="display-3"><strong>Drop us a line<span class="design-dots">.....</span></strong></h1>
                <div class="greenLine4"></div>
                <br>
            </div>
        </div>
        <p class="lead-2"><strong>​Reach out anytime. We love to chat!</strong></p>
        <p>Contact us to chat or to set up a free consultation.<br>
        What amazing projects are you working on?<br>
        Share your aspirations with us and we will happily sit down together to hear more
        about it and to talk about how Blue Ivy can support your initiative.</p>
    </div>
    <div class="container">
        <form class="needs-validation" action="contactform.php" method="post" novalidate>
            <p><span class="required">*</span>Indicates a Required Field</p>
            <div class="form-group">
                <label for="Name">Name<span class="required">*</span></label>
                <input type="text" class="form-control" name="name" placeholder="Your Name..." required>
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Please enter your name.</div>
            </div>
            <div class="form-group">
                <label for="Company">Company</label>
                <input type="text" class="form-control" name="company-name" placeholder="Company Name...">
            </div>
            <div class="form-group">
                <label for="Phone-number">Phone Number<span class="required">*</span></label>
                <input type="text" class="form-control" id="phone_us" name="phone-number" placeholder="Phone Number..." required>
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Please enter your phone number.</div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address<span class="required">*</span></label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Your Email..." aria-describedby="emailHelp" required>
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Please enter your email address.</div>
            </div>
            <div class="form-group">
                <label for="Team-size">Team Size</label>
                <input type="text" class="form-control" name="team-size" placeholder="Team Size...">
            </div>
            <div class="form-group">
                <label for="Message">What's Happening in Your World?</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
        </form>
        <br>
    </div>

    

<?php include('assets/include/foot.php');?>

</body>
</html>