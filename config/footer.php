<footer id="footer" class="footer position-relative">

    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-3 col-md-6 footer-about">
                <a href="../home/index" class="logo d-flex align-items-center me-auto">
                    <img src="../assets/img/logo.png" alt="">
                </a>
                <div class="footer-contact pt-3">
                    <p><?php echo $lang['address'] ?></p>
                    <p class="mt-3"><strong><?php echo $lang['phone'] ?> : </strong> <span>053-949219</span></p>
                    <p><strong><?php echo $lang['email'] ?> :</strong> <span>communication.nurse@gmail.com</span></p>
                </div>
                <div class="social-links d-flex mt-4">
                    <a href="https://twitter.com/nursecmu"><i class="bi bi-twitter-x"></i></a>
                    <a href="https://www.facebook.com/nursecmu"><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href="https://www.linkedin.com/company/facultyofnursingchiangmaiuniversity"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4><?php echo $lang['menu'] ?></h4>
                <ul>
                    <li><a href="../home/?lang=<?php echo $_SESSION['lang']; ?>" class="active"><?php echo $lang['home'] ?></a></li>
                    <li><a href="../team/?lang=<?php echo $_SESSION['lang']; ?>"><?php echo $lang['team'] ?></a></li>
                    <li><a href="../status/?lang=<?php echo $_SESSION['lang']; ?>"><?php echo $lang['check_status'] ?></a></li>
                    <li><a href="../service/ccfn-form-online-social?lang=<?php echo $_SESSION['lang']; ?>">Online Media Relations</a></li>
                    <li><a href="../service/ccfn-form-online-production?lang=<?php echo $_SESSION['lang']; ?>">Media Production Design</a></li>
            </div>
        </div>
    </div>

    <div class="container copyright text-center mt-4">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Corporate Communications Faculty of Nursing CMU</strong><span>All Rights Reserved</span></p>

    </div>

</footer>