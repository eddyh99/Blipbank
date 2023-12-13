<div class="login wrap-signup">
    <div class="row">
        <div class="col-6 d-none d-lg-block bg-signup position-relative">
            <a href="<?= base_url()?>" class="m-5 position-absolute">
                <img class="img-fluid" src="<?= base_url()?>assets/img/back-link.png" alt="back link ">
            </a>
            <div class="container position-absolute logo-login">
                <div class="row ">
                    <div class="col-6 mx-auto ">
                        <a href="<?= base_url()?>">
                            <img class="img-fluid" src="<?= base_url()?>assets/img/logo-login.png" alt="logo-login">
                        </a>
                        <h2 translate="no" class="fw-bold text-black f-poppins mt-5 ms-2">LOG IN</h2>
                        <p class="text-black f-poppins ms-2">
                            If you don’t have an account register <br> you can 
                            <a class="fw-bolder" style="color: #4D47C3;" href="<?= base_url()?>auth/login">Login here !</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-none d-xl-block col-xl-1"></div>
        <div class="col-12 col-lg-6 col-xl-4 overflow-hidden">
            <div class="container">
                <div class="row">
                    <div class="col-10 mx-auto mt-5 pt-5">
                        <div class="mt-3 mb-5">
                            <h2 class="fw-bold f-poppins ms-3">Register</h2>
                        </div>
                        <div class="">
                            <form class="form-login-freedy d-flex align-items-start flex-column" style="height: 100%;" method="POST" action="<?= base_url(); ?>auth/register">
                                <?php if (@isset($_SESSION["failed"])) { ?>
                                    <div class="col-12 alert alert-danger alert-dismissible fade show" role="alert">
                                        <span class="notif-login f-poppins"><?= $_SESSION["failed"] ?></span>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                <?php } ?>
                                <?php if (@isset($_SESSION["success"])) { ?>
                                    <div class="col-12 alert alert-success alert-dismissible fade show" role="alert">
                                        <span class="notif-login f-poppins"><?= @$_SESSION["success"] ?></span>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                <?php } ?>
                                <input type="hidden" id="token" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                <input type="hidden" name="time_location" id="time_location">
                                <input type="hidden" name="referral" value="<?= @$_SESSION["referral"] ?>">
                                <div class="col-12 mb-5 text-center d-block d-lg-none">
                                    <a href="<?= base_url() ?>">
                                        <img class="img-fluid" src="<?= base_url(); ?>assets/img/logo-dark.png" alt="logo login">
                                    </a>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="input-group custom-login-input py-1">
                                        <div class="input-group-text ps-4">
                                        </div>
                                        <input type="email" class="form-control f-publicsans" placeholder="Email Address" id="email" name="email" value="<?php if (@isset($_SESSION['email'])) {
                                            echo $_SESSION['email'];
                                        } ?>" required>
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="input-group custom-login-input py-1">
                                        <div class="input-group-text ps-4">
                                        </div>
                                        <input type="email" class="form-control f-publicsans"  placeholder="Confirm Email Address" id="email" name="confirmemail" value="<?php if (@isset($_SESSION['confirmemail'])) {
                                            echo $_SESSION['confirmemail'];
                                        } ?>" required>
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="input-group custom-login-input py-1">
                                        <div class="input-group-text ps-4">
                                        </div>  
                                        <input type="password" class="form-control f-publicsans" placeholder="Password" name="pass" id="password1" value="" required>
                                        <div class="input-group-text">
                                            <span>
                                                <i class="far fa-eye" id="togglePassword" style="cursor: pointer;color: #FFA3BE;"
                                                    toggle="#password1"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Hidden Validation Password -->
                                <div class="password_info ms-3 py-3 ps-3 pe-5 mb-4" id="password_info">
                                    <p><strong>Password must contain the following:</strong></p>
                                    <ul>
                                        <li class="invalid" id="letter">A lowercase letter</li>
                                        <li class="invalid" id="capital">A capital (uppercase) letter</li>
                                        <li class="invalid" id="number">A number</li>
                                        <li class="invalid" id="length">At least 9 - 35 characters</li>
                                        <li class="invalid" id="special">Contains at least 2 special
                                                    character (^!@#$%^&*\-_=+)</li>
                                    </ul>
                                </div>
                                <!-- END Hidden Validation Password -->
                                <div class="col-12 mb-4">
                                    <div class="input-group custom-login-input py-1">
                                        <div class="input-group-text ps-4">
                                        </div>  
                                        <input type="password" class="form-control f-publicsans" placeholder="Confirm Password" name="confirmpass" id="password2" value="" required>
                                        <div class="input-group-text">
                                            <span>
                                                <i class="far fa-eye" id="togglePassword2" style="cursor: pointer;color: #FFA3BE;"
                                                    toggle="#password2"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <span class="mt-2" id="pswdmatch" style="font-size: 12px; color: red;">Password Do Not Match!</span>
                                </div>
                                <div class="col-12 mb-5">
                                    <div class="input-group custom-login-input py-1">
                                        <div class="input-group-text ps-4">
                                        </div>  
                                        <input type="text" placeholder="Referral (Required)" class="form-control f-publicsans py-2" id="referral" name="referral" value="<?= @$_COOKIE['ref'] ?>" required>
                                        <div class="input-group-text">
                                            <span>
                                                <i class="far fa-question-circle" data-bs-toggle="popover" data-bs-title="Referral Info" data-bs-content="IN ORDER TO CREATE AN ACCOUNT ON BLIP DIGITAL BANK PLATFORM YOU SHOULD HAVE A REFERRAL LINK, SO YOU HAVE TO INVITED BY AN EXISTING MEMBER THROUGH A REFERRAL LINK INVITATION" style="cursor: pointer;color: #FFA3BE;"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="g-recaptcha ms-3" data-sitekey="<?php echo $this->config->item('google_key') ?>"></div>
                                <div class="col-12 my-5 d-grid gap-2">
                                    <button type="submit" class="btn btn-signup">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-none d-xl-block col-xl-1"></div>
    </div>
</div>
