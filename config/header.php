<?php
require_once '../oauth/session.php'
?>
<?php include_once('lang.php') ?>
<header id="header" class="header d-flex align-items-center fixed-top">
    <!-- Header content using $_SESSION variables for language display -->
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
        <a href="../home/index?lang=<?php echo $_SESSION['lang']; ?>" class="logo d-flex align-items-center me-auto">
            <img src="../assets/img/logo.png" alt="">
        </a>
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="../home/?lang=<?php echo $_SESSION['lang']; ?>" class="active"><?php echo $lang['home'] ?></a></li>
                <li><a href="../team/?lang=<?php echo $_SESSION['lang']; ?>"><?php echo $lang['team'] ?></a></li>
                <li><a href="../status/?lang=<?php echo $_SESSION['lang']; ?>"><?php echo $lang['check_status'] ?></a></li>

                <li class="dropdown">
                    <a href="../home/index?lang=<?php echo $_SESSION['lang']; ?>"><span><?php echo $lang['services'] ?></span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="../service/ccfn-form-online-social?lang=<?php echo $_SESSION['lang']; ?>"><?php echo $lang['about1'] ?></a></li>
                        <li><a href="../service/ccfn-form-online-production?lang=<?php echo $_SESSION['lang']; ?>"><?php echo $lang['about2'] ?></a></li>
                    </ul>
                </li>
                <li><a href="../ci-details/details?lang=<?php echo $_SESSION['lang']; ?>"><?php echo $lang['ci'] ?></a></li>
                <li class="dropdown">
                    <a href=""><span><?php
                                        if ($_SESSION['lang'] == 'th') {
                                            echo '<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                            <mask id="circleFlagsTh0">
                                <circle cx="256" cy="256" r="256" fill="#fff" />
                            </mask>
                            <g mask="url(#circleFlagsTh0)">
                                <path fill="#d80027" d="M0 0h512v89l-79.2 163.7L512 423v89H0v-89l82.7-169.6L0 89z" />
                                <path fill="#eee" d="M0 89h512v78l-42.6 91.2L512 345v78H0v-78l40-92.5L0 167z" />
                                <path fill="#0052b4" d="M0 167h512v178H0z" />
                            </g>
                        </svg> ไทย';
                                        } elseif ($_SESSION['lang'] == 'en') {
                                            echo '<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 512 512">
                            <mask id="circleFlagsUs0">
                                <circle cx="256" cy="256" r="256" fill="#fff" />
                            </mask>
                            <g mask="url(#circleFlagsUs0)">
                                <path fill="#eee" d="M256 0h256v64l-32 32l32 32v64l-32 32l32 32v64l-32 32l32 32v64l-256 32L0 448v-64l32-32l-32-32v-64z" />
                                <path fill="#d80027" d="M224 64h288v64H224Zm0 128h288v64H256ZM0 320h512v64H0Zm0 128h512v64H0Z" />
                                <path fill="#0052b4" d="M0 0h256v256H0Z" />
                                <path fill="#eee" d="m187 243l57-41h-70l57 41l-22-67zm-81 0l57-41H93l57 41l-22-67zm-81 0l57-41H12l57 41l-22-67zm162-81l57-41h-70l57 41l-22-67zm-81 0l57-41H93l57 41l-22-67zm-81 0l57-41H12l57 41l-22-67Zm162-82l57-41h-70l57 41l-22-67Zm-81 0l57-41H93l57 41l-22-67zm-81 0l57-41H12l57 41l-22-67Z" />
                            </g>
                        </svg> English';
                                        } else {
                                            echo $_SESSION['lang'];
                                        }
                                        ?>
                        </span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="?lang=th"><?php echo $lang['lang_th'] ?></a></li>
                        <li><a href="?lang=en"><?php echo $lang['lang_en'] ?></a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="javascript:void(0);" class="d-flex align-items-center text-decoration-none text-dark">
                        <div class="avatar avatar-online">
                            <img src="https://mis.nurse.cmu.ac.th/mis/images/person2/<?php echo $images; ?>" width="45px" alt class="w-px-40 h-auto rounded-circle" class="me-1" />
                        </div>
                        <i class="bi bi-chevron-down toggle-dropdown ms-1"></i>
                    </a>
                    <ul class="dropdown-menu shadow p-3 border-0">
                        <li><a class="dropdown-item py-2 px-3"><?php echo $fname_th . ' ' . $lname_th; ?></a></li>
                        <li><a href="../oauth/singout" class="dropdown-item py-2 px-3"><?php echo $lang['logout']; ?></a></li>
                    </ul>
                </li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>
</header>