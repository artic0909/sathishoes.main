<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="sathis shoes, brand, audience, product variety, key selling points, comfort, durability, style, Nike, Adidas, Campus, stylish, low price" />

    <meta
        name="description"
        content="Welcome to Sathi Shoes - your go-to destination for high-quality footwear for men, women, and kids. Explore our latest collection of casual, sports, and formal shoes designed for comfort, durability, and style. Shop online now for the best in footwear fashion at unbeatable prices." />

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/contact-us.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    <link rel="stylesheet" href="{{ asset('responsive/contact-us-responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,900;1,900&family=Source+Sans+Pro:wght@400;600;700;900&display=swap"
        rel="stylesheet" />


    <!-- icon -->
    <link rel="icon" href="images/logoS.png" type="image/png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>Get In Touch</title>
</head>

<body>



    <div class="contact_us_2">
        <div class="responsive-container-block big-container">
            <div class="blueBG" style="background: url('{{ asset('images/get3.png') }}');">
            </div>
            <div class="responsive-container-block container">
                <form class="form-box">
                    <div class="container-block form-wrapper">
                        <p class="text-blk contactus-head" style="color: black;">
                            Get in Touch
                        </p>
                        <p class="text-blk contactus-subhead" style="color: rgb(141, 139, 139);">
                            Nunc erat cursus tellus gravida.
                        </p>
                        <div class="responsive-container-block">
                            <div class="responsive-cell-block wk-ipadp-6 wk-tab-12 wk-mobile-12 wk-desk-6" id="i10mt">
                                <p class="text-blk input-title">
                                    FIRST NAME
                                </p>
                                <input class="input" id="ijowk" name="FirstName" placeholder="Please enter first name...">
                            </div>
                            <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
                                <p class="text-blk input-title">
                                    LAST NAME
                                </p>
                                <input class="input" id="indfi" name="Last Name" placeholder="Please enter last name...">
                            </div>
                            <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
                                <p class="text-blk input-title">
                                    EMAIL
                                </p>
                                <input class="input" id="ipmgh" name="Email" placeholder="Please enter email...">
                            </div>
                            <div class="responsive-cell-block wk-desk-6 wk-ipadp-6 wk-tab-12 wk-mobile-12">
                                <p class="text-blk input-title">
                                    PHONE NUMBER
                                </p>
                                <input class="input" id="imgis" name="PhoneNumber" placeholder="Please enter phone number...">
                            </div>
                            <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i634i">
                                <p class="text-blk input-title">
                                    WHAT DO YOU HAVE IN MIND
                                </p>
                                <textarea class="textinput" id="i5vyy" placeholder="Please enter query..."></textarea>
                            </div>
                        </div>
                        <button class="submit-btn btn-black hvr-sweep-to-right">
                            S u b m i t
                        </button>
                    </div>
                    <div class="social-media-links">
                        <a href="#" id="ix94i-2">
                            <img class="link-img" src="{{asset('images/instagram.png')}}">
                        </a>
                        <a href="#">
                            <img class="link-img" src="{{asset('images/facebook.png')}}">
                        </a>
                        <a href="#">
                            <img class="link-img" src="{{asset('images/youtube.png')}}">
                        </a>
                        <a href="#" id="izldf-2">
                            <img class="link-img" src="{{asset('images/linkedin.png')}}">
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- floating btn -->
    <a href="/" class="floating-btn-div">
        <button class="floating-btn">
            <i class="fa fa-home" aria-hidden="true"></i>
        </button>
    </a>


</body>

</html>