<div class="login wrap-signup">
    <div class="row">
        <div class="col-6 d-none d-lg-block bg-signup position-relative">
            <a href="<?= base_url()?>auth/login" class="m-5 position-absolute">
                <img class="img-fluid" src="<?= base_url()?>assets/img/back-link.png" alt="back link ">
            </a>
            <div class="container position-absolute logo-login">
                <div class="row ">
                    <div class="col-4 mx-auto">
                        <a href="<?= base_url()?>">
                            <img class="img-fluid" src="<?= base_url()?>assets/img/logo-forgetpass.png" alt="logo-login">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-none d-xl-block col-xl-1"></div>
        <div class="col-12 col-lg-6 col-xl-4  overflow-hidden">
            <div class="container">
                <div class="row">
                    <div class="col-10 mx-auto mt-5 pt-5">
                        <div class="mt-3 my-5 pt-5 ms-3">
                            <h2 class="fw-bold f-poppins">Forgot password ?</h2>
                        </div>
                        <div class="">
                            <form class="form-login-freedy d-flex align-items-start flex-column" style="height: 100%;" method="POST"
                                    action="<?= base_url(); ?>auth/resetpass">
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
                                <div class="col-12 mb-auto">
                                    <div class="input-group custom-login-input py-1 mb-3">
                                        <div class="input-group-text ps-4">
                                            <!-- <span>
                                                <i class="far fa-envelope fs-5"></i>
                                            </span> -->
                                        </div>
                                        <input type="text" class="form-control f-publicsans" name="email" id="email"
                                            placeholder="Email Address" required>
                                    </div>
                                    <p class="f-poppis fs-6 mt-3">*You will receive an email to change your password</p>
                                </div>
                                <div class="col-12 d-grid gap-2 mt-5">
                                    <button type="submit" class="btn btn-signup f-roboto">Confirm</button>
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