<footer id="contact">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-12 col-lg-5 ">
                <a href="#"><img src="assets/img/logo.png" alt="logo"
                        class="img-fluid logo-footer" /></a>
                <div class="footer-about">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, nam commodi voluptatibus est autem
                        unde numquam? Accusamus natus odio, delectus modi consectetur molestias. Laborum consequatur
                        placeat autem, ipsum cupiditate architecto eaque fuga exercitationem. Maiores fuga quae
                        quibusdam, recusandae id, distinctio sit, omnis dolores ad totam quas tenetur asperiores
                        voluptatem nostrum.</p>
                </div>

            </div>
            <div class="col-lg-2"></div>
            <div class="col-md-12 col-lg-5 ">
                <div class="address">
                    <h5>Contact</h5>
                    <ul class="address-links">
                        <li class="address1"><i class="fa-solid fa-location-dot"></i>Endeavour Hills Victoria,
                            Australia PO Box: 3802 Australia</li>
                        <li><a href="tel:61488896118"><i class="fa-solid fa-phone"></i>+61 488 896 118</a></li>
                        <li><a href="mailto:help@learnwithfraternity.com"><i
                                    class="fa-solid fa-envelope"></i>help@dissertationwritingservice.com.au</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="copy-right">
        <div class="copy-right-sec text-center mt-5">Copyright <i class="fa-solid fa-copyright"></i>
            2012 - <span id="year"></span> | <a href="#" class="text-white">dissertationwritingservice.com.au</a> All rights reserved.
        </div>
    </div>
</footer>


<script>
    var year = new Date().getFullYear();
    document.getElementById("year").innerHTML = year;

</script>
<script>
    var url = 'https://wati-integration-prod-service.clare.ai/v2/watiWidget.js?9968';
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url;
    var options = {
        "enabled": true,
        "chatButtonSetting": {
            "backgroundColor": "#00e785",
            "ctaText": "Chat with us",
            "borderRadius": "25",
            "marginLeft": "30",
            "marginRight": "20",
            "marginBottom": "20",
            "ctaIconWATI": false,
            "position": "left"
        },
        "brandSetting": {
            "brandName": "marketingassignmenthelp.com.au",
            "brandSubTitle": "undefined",
            "brandImg": "https://www.wati.io/wp-content/uploads/2023/04/Wati-logo.svg",
            "welcomeText": "Hi there!\nHow can I help you?",
            "messageText": "Hello, %0A I have a question.....?",
            "backgroundColor": "#00e785",
            "ctaText": "Chat with us",
            "borderRadius": "25",
            "autoShow": false,
            "phoneNumber": "447918023966"
        }
    };
    s.onload = function () {
        CreateWhatsappChatWidget(options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
</script>
<script>(function (w, d) { w.CollectId = "62286d64bc2315111d709c06"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async = true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>