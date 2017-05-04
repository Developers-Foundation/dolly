<footer class="footer">
    <div class="container">

        <div class="row text-center footercolor" style="margin-bottom: 50px; margin-top: 25px">
            <div class="col-md-2 col-md-offset-2">
                <a class="footercolor" href="/about">About</a>
            </div>
            <div class="col-md-2">
                <a class="footercolor" href="/donate">Donate</a>
            </div>
            <div class="col-md-2">
                <a class="footercolor" href="/contact" target="_blank">Contact Us</a>
            </div>
            <div class="col-md-2">
                <a class="footercolor" href="https://www.facebook.com/DollyChildrenFoundation/" target="_blank">Facebook</a>
            </div>
        </div>
        <div class="copyright footercolor text-center" style="margin-bottom: 25px">
            <p class="copyright">Copyright © 2017 <a class="footercolor" href="https://developers.foundation/">Developers' Foundation</a> Made with love ♥</p>
        </div>
    </div>
</footer>


<!--  End Modal -->

</body>

<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/main.js" type="text/javascript"></script>
<script src="https://js.stripe.com/v3/"></script>
<script src="//maps.google.com/maps/api/js?key=AIzaSyDB4HGFp5gVXh06rxNL7R9ypYZMI9261Pc&callback=loadedGmap" async defer></script>
<?php
if (isset($page) && $page == "donate")
    echo "<script type=\"text/javascript\" src=\"./assets/js/stripe3.js\"></script>";
?>

</html>
