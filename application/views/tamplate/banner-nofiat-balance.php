<div class="row" style="margin-top: 5rem;">
    <div class="col-12 d-flex justify-content-center  flex-column">
        <div class="col-12 box-code-freedy px-4 py-3">
            <div class="d-flex flex-row">
                <div class="d-flex flex-column">
                    <div class="copy-uqcode mt-3 mb-2 d-flex flex-row align-items-center">
                        <span class="me-2">Short Code : </span>
                        <input class="me-2" type="text" name="" id="uqcode" value="<?= $_SESSION["ucode"] ?>" readonly>
                        <a class="btn btn-copy me-2" id="btnuq">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5 2.0028C9.82495 2.01194 9.4197 2.05103 9.09202 2.21799C8.71569 2.40973 8.40973 2.71569 8.21799 3.09202C8.05103 3.4197 8.01194 3.82495 8.0028 4.5M19.5 2.0028C20.1751 2.01194 20.5803 2.05103 20.908 2.21799C21.2843 2.40973 21.5903 2.71569 21.782 3.09202C21.949 3.4197 21.9881 3.82494 21.9972 4.49999M21.9972 13.5C21.9881 14.175 21.949 14.5803 21.782 14.908C21.5903 15.2843 21.2843 15.5903 20.908 15.782C20.5803 15.949 20.1751 15.9881 19.5 15.9972M22 7.99999V9.99999M14.0001 2H16M5.2 22H12.8C13.9201 22 14.4802 22 14.908 21.782C15.2843 21.5903 15.5903 21.2843 15.782 20.908C16 20.4802 16 19.9201 16 18.8V11.2C16 10.0799 16 9.51984 15.782 9.09202C15.5903 8.71569 15.2843 8.40973 14.908 8.21799C14.4802 8 13.9201 8 12.8 8H5.2C4.0799 8 3.51984 8 3.09202 8.21799C2.71569 8.40973 2.40973 8.71569 2.21799 9.09202C2 9.51984 2 10.0799 2 11.2V18.8C2 19.9201 2 20.4802 2.21799 20.908C2.40973 21.2843 2.71569 21.5903 3.09202 21.782C3.51984 22 4.07989 22 5.2 22Z" stroke="#B90B0B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                    <div class="d-flex flex-column">
                        <span class="fs-6 my-2">Copy & share your referral link to earn money</span>
                        <div class="copy-refcode d-flex flex-row justify-content-start mb-4">
                            <input class="me-2" type="text" name="" id="refcode" value="<?= base_url() ?>auth/signup?ref=<?= $_SESSION["referral"] ?>" readonly>
                            <a class="btn btn-copy me-2" id="btnref">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.5 2.0028C9.82495 2.01194 9.4197 2.05103 9.09202 2.21799C8.71569 2.40973 8.40973 2.71569 8.21799 3.09202C8.05103 3.4197 8.01194 3.82495 8.0028 4.5M19.5 2.0028C20.1751 2.01194 20.5803 2.05103 20.908 2.21799C21.2843 2.40973 21.5903 2.71569 21.782 3.09202C21.949 3.4197 21.9881 3.82494 21.9972 4.49999M21.9972 13.5C21.9881 14.175 21.949 14.5803 21.782 14.908C21.5903 15.2843 21.2843 15.5903 20.908 15.782C20.5803 15.949 20.1751 15.9881 19.5 15.9972M22 7.99999V9.99999M14.0001 2H16M5.2 22H12.8C13.9201 22 14.4802 22 14.908 21.782C15.2843 21.5903 15.5903 21.2843 15.782 20.908C16 20.4802 16 19.9201 16 18.8V11.2C16 10.0799 16 9.51984 15.782 9.09202C15.5903 8.71569 15.2843 8.40973 14.908 8.21799C14.4802 8 13.9201 8 12.8 8H5.2C4.0799 8 3.51984 8 3.09202 8.21799C2.71569 8.40973 2.40973 8.71569 2.21799 9.09202C2 9.51984 2 10.0799 2 11.2V18.8C2 19.9201 2 20.4802 2.21799 20.908C2.40973 21.2843 2.71569 21.5903 3.09202 21.782C3.51984 22 4.07989 22 5.2 22Z" stroke="#B90B0B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a>
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.2914 10.5586C19.5355 10.3494 19.6575 10.2448 19.7023 10.1203C19.7415 10.011 19.7415 9.89146 19.7023 9.78218C19.6575 9.65768 19.5355 9.55306 19.2914 9.34381L10.8206 2.08319C10.4004 1.72299 10.1903 1.5429 10.0124 1.53848C9.8578 1.53465 9.71012 1.60257 9.61242 1.72245C9.5 1.86038 9.5 2.13712 9.5 2.69059V6.98585C7.36532 7.35931 5.41159 8.44098 3.95971 10.0651C2.37682 11.8357 1.50123 14.1272 1.5 16.5022V17.1142C2.54934 15.8501 3.85951 14.8277 5.34076 14.1171C6.6467 13.4906 8.05842 13.1195 9.5 13.0217V17.2118C9.5 17.7653 9.5 18.0421 9.61242 18.18C9.71012 18.2999 9.8578 18.3678 10.0124 18.364C10.1903 18.3595 10.4004 18.1794 10.8206 17.8192L19.2914 10.5586Z" stroke="#B90B0B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>

                        </div>
                    </div>
                </div>
                <a href="<?= base_url()?>homepage/preview_qr" target="_blank" class="qrcode-download ms-auto mt-3 d-flex flex-column align-items-center ps-3 pb-3">
                    <img class="img-fluid" src="<?= base_url() ?>qr/ref/<?= $_SESSION["ucode"] ?>.png" alt="QR" width="90" height="90">
                    <div>
                        <img class="img-fluid d-block d-sm-none" src="<?=base_url()?>assets/img/btn-qrdw-mobile2.png" alt="dw-qr" width="15" height="auto">
                    </div>
                    <div>
                        <img class="img-fluid d-none d-sm-block" src="<?=base_url()?>assets/img/btn-qrdw2.png" alt="dw-qr" width="90" height="auto">
                    </div>
                </a>
            </div>

        </div>
        <div class="col-12 px-4 py-3">
          <div class="mywallet d-flex flex-column mb-4 align-items-center w-100">
              <div class="d-flex flex-column mx-auto justify-content-center">
                  <div class="saldo-box d-flex flex-row justify-content-center align-items-center mb-3">
                      <span class="balance me-auto">Your Balance :</span>
                  </div>
                  <div class="saldo-box d-flex flex-row justify-content-center align-items-center ">
                      <span class="saldo me-auto">
                          <?= $_SESSION["symbol"] ?>
                          <?= number_format(balance($_SESSION['user_id'], $_SESSION["currency"]), 2) ?>
                      </span>
                  </div>
              </div>
              <div class="d-flex flex-column mx-auto justify-content-center w-100">
                  <div style="height: 2px; width: 100%; background-color: #B90B0B" class="mt-4"></div>
              </div>
          </div>
        </div>
    </div>
</div>   