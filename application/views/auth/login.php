<div class="login wrap-signup">
    <div class="row">
        <div class="col-6 d-none d-lg-block bg-signup">
            <a href="<?= base_url()?>" class="m-5 position-absolute ">
                <img class="img-fluid" src="<?= base_url()?>assets/img/back-link.png" alt="back link ">
            </a>
            <div class="container position-relative logo-login">
                <div class="row ">
                    <div class="col-6 mx-auto ">
                        <a href="<?= base_url()?>">
                            <img class="img-fluid" src="<?= base_url()?>assets/img/logo-login.png" alt="logo-login">
                        </a>
                        <h2 translate="no" class="fw-bold text-black f-poppins mt-5 ms-2">LOG IN</h2>
                        <p class="text-black f-poppins ms-2">
                            If you don’t have an account register <br> you can <a class="fw-bolder" style="color: #4D47C3;" href="<?= base_url()?>auth/signup">Register here !</a>
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
                        <div class="mt-3 mb-5 ms-3">
                            <h2 class="fw-bold f-poppins">Log in</h2>
                        </div>
                        <div class="">
                            <form class="form-login-freedy d-flex align-items-start flex-column" style="height: 100%;" method="POST"
                                action="<?= base_url(); ?>auth/auth_login">
                                <input type="hidden" id="token" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                    value="<?php echo $this->security->get_csrf_hash(); ?>">

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
                                <div class="col-12 mb-5 text-center d-block d-lg-none">
                                    <a href="<?= base_url() ?>">
                                        <img class="img-fluid" src="<?= base_url(); ?>assets/img/logoblip.png" alt="logo">
                                    </a>
                                </div>
                                <div class="col-12 mb-5">
                                    <div class="input-group custom-login-input py-1">
                                        <div class="input-group-text ps-4">
                                            <!-- <span>
                                                <i class="far fa-envelope fs-5"></i>
                                            </span> -->
                                        </div>
                                        <input type="email" class="form-control f-publicsans" id="email" name="email"
                                            placeholder="Enter email" required>
                                    </div>
                                </div>
                                <div class="col-12 mb-2">
                                    <!-- <label for="password" class="form-label f-publicsans">Password</label> -->
                                    <div class="input-group custom-login-input py-1">
                                        <div class="input-group-text ps-4">
                                            <!-- <span>
                                                <i class="fas fa-lock fs-5"></i>
                                            </span> -->
                                        </div>
                                        <input type="password" name="password" class="form-control f-publicsans" id="password"
                                            placeholder="Password" required>
                                        <div class="input-group-text">
                                            <span>
                                                <i class="far fa-eye" id="togglePassword" style="cursor: pointer;color: #FFA3BE;"
                                                    toggle="#password"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mb-5">
                                    <div class="d-flex justify-content-end">
                                        <a href="<?= base_url(); ?>auth/forget_pass" class="f-poppins" style="color: #B0B0B0;">
                                            Forgot password?
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 d-grid gap-2 mt-auto mb-3">
                                    <button type="submit" class="btn btn-signup">Log in</button>
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