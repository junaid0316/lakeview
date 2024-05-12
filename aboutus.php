<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Description of your page">
    <meta property="og:title" content="Your Page Title">
    <meta property="og:description" content="Description of your page">
    <meta property="og:image" content="URL to an image related to your content">
    <meta property="og:url" content="URL of the page">
    <meta property="og:type" content="website">
    <meta name="keywords" content="keyword1, keyword2, keyword3">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <META NAME="robots" CONTENT="noindex,nofollow">
    <title>Document</title>
</head>

<body>

    <?php
    include("./components/navbar.php")
    ?>

    <header class="abthdr">
        <div class="container">
            <div class="abtcntr">
                <h2 class="abth2">Welcome, Homeowner!</h2>
                <p class="abtp">
                    We’ve got you covered. Our mission is to be your trusted lender of choice for all future mortgage
                    transactions.
                </p>
            </div>
        </div>
    </header>

    <section class="abtmain">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7 col-sm-12 mt-4">
                    <div class="wlbx">
                        <h2 class="cntch2 mb-3">Contact Us</h2>
                        <p class="wlp mt-0">
                            Lakeview Loan Servicing, LLC (“Lakeview”) is the fourth largest mortgage loan servicer in
                            the country. What does that mean? We help more than 1.4 million customers per year manage
                            the investment they’ve made in their homes. That means that we’ll be with you throughout the
                            life of your mortgage. We’re always here to answer your questions and make sure you receive
                            a top notch customer service experience. We strive to be your home loan partner for life.
                        </p>
                        <a href="" class="wlbtn">Learn About Refinancing</a>
                        <a href="" class="wlbtn">Learn About Purchasing a Home</a>
                        <h4 class="abh4 mt-sm-4 mt-3">Our Approach</h4>
                        <p class="wlp mt-0">
                            Lakeview owns the servicing rights to your mortgage loan. We’re proud to partner with
                            several Servicing partners to process payments, manage the escrow, and provide customer
                            service for your existing mortgage. If you have any servicing related questions regarding
                            your existing mortgage, you can contact your Servicer directly.
                        </p>
                        <p class="wlp mt-0">
                            Click here for more information about our Servicing partners.
                        </p>
                        <h4 class="abh4">Our Experts</h4>
                        <p class="wlp mt-0">
                            Lakeview’s in-house team of mortgage loan experts is focused on assisting our customers with
                            new home financing. Whether you’re interested in purchasing a new home, or simply want to
                            explore restructuring your current financing, we’re here to help! We might be able to lower
                            your monthly payment, help you to consolidate your other debt, or give you cash out to use
                            however you’d like. Explore the “How We Help”’ menu at the top to learn more about what we
                            do.
                        </p>
                        <h3 class="abh5 text-center blclr">855-294-8564</h3>
                        <a href="" class="wlbtn">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-12 mt-4">
                    <form action="contact.php" method="post" class="frm cntfrm cntf">
                        <h2 class="cntch2">Contact Us</h2>
                        <div class="row">
                            <div class="col-12 mt-4">
                                <input type="text" name="fname" placeholder="First Name *" required>
                            </div>
                            <div class="col-12 mt-4">
                                <input type="text" name="lname" placeholder="Last Name *" required>
                            </div>
                            <div class="col-12 mt-4">
                                <input type="email" name="email" placeholder="Email Address *" required>
                            </div>
                            <div class="col-12 mt-4">
                                <input type="number" name="phone" placeholder="Phone Number *" required>
                            </div>
                            <div class="col-12 col-sm-12 mt-4">
                                <textarea name="msg" id="" rows="4" placeholder="Message *"></textarea>
                            </div>
                            <div class="col">
                                <button name="submit" class="sbbtn">Submit Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php
    include("./components/footer.php")
    ?>

    <a href="#" class="backtotop" id="mybtn">
        <i class="fas fa-chevron-up"></i>
    </a>

    <script>
    var mybutton = document.getElementById("mybtn");
    window.onscroll = function() {
        if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
            mybutton.style.display = "flex";
            mybutton.style.animationName = "top";
        } else {
            mybutton.style.display = "none";
            mybutton.style.animationName = "top1"
        }
    };
    </script>

    <script src="asset/js/bootstrap.min.js"></script>
</body>

</html>