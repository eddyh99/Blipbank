<!-- ======= Hero Section ======= -->
<section id="" class="d-flex align-items-center p-3 pt-md-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="link-back p-0">
                    <a href="<?= base_url() ?>#guide">
                        <img src="<?= base_url() ?>assets/img/back-link.png" alt="">
                    </a>
                </div>
            </div>

            <?php if ($guide == 99) { ?>
                <div class="col-12 my-5 text-center">
                    <h1>Coming soon!</h1>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-6">

                        </div>
                    </div>
                </div>
            <?php } ?>
            
            <!-- Start Wallet -->
            <?php if ($guide == 1) { ?>
                <div class="col-12 my-5 ">
                    <div class="d-flex justify-content-center">
                        <svg width="82" height="106" viewBox="0 0 82 106" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M61.6112 23.0077C45.0688 23.3545 33.5493 13.9603 25.5771 14.1297C17.6048 14.2991 -0.667659 29.1884 0.0188197 70.4083C0.705298 111.628 49.1519 112.488 49.1519 95.9239C90.2067 95.0608 90.9049 22.392 61.6112 23.0077Z" fill="#EFEFEF"/>
                            <path d="M15.1797 80.7259L10.9528 73.5921C10.0195 72.017 10.2001 70.1828 11.356 69.4979L6.64452 72.2895C5.48864 72.9744 5.308 74.8086 6.2413 76.3838L10.4682 83.5175C11.4015 85.0926 13.0971 85.8152 14.253 85.1303L18.9644 82.3386C17.8085 83.0235 16.113 82.301 15.1797 80.7259Z" fill="#B90B0B"/>
                            <path d="M80.9702 46.605C80.9702 49.292 78.792 51.4702 76.105 51.4702C73.418 51.4702 71.2397 49.292 71.2397 46.605C71.2397 43.918 73.418 41.7397 76.105 41.7397C78.792 41.7397 80.9702 43.918 80.9702 46.605ZM73.2836 46.605C73.2836 48.1632 74.5468 49.4264 76.105 49.4264C77.6632 49.4264 78.9264 48.1632 78.9264 46.605C78.9264 45.0468 77.6632 43.7836 76.105 43.7836C74.5468 43.7836 73.2836 45.0468 73.2836 46.605Z" fill="#B90B0B"/>
                            <circle cx="37.5748" cy="4.86525" r="4.86525" fill="#B90B0B"/>
                            <path d="M26.8709 39.4307C24.6015 39.4307 22.7819 41.2707 22.7819 43.5197V72.1432C22.7819 73.2277 23.2127 74.2677 23.9795 75.0346C24.7464 75.8014 25.7864 76.2322 26.8709 76.2322H55.4944C56.5788 76.2322 57.6189 75.8014 58.3858 75.0346C59.1526 74.2677 59.5834 73.2277 59.5834 72.1432V67.4816C60.7897 66.7661 61.628 65.478 61.628 63.965V51.6979C61.628 50.1849 60.7897 48.8968 59.5834 48.1813V43.5197C59.5834 42.4352 59.1526 41.3952 58.3858 40.6283C57.6189 39.8615 56.5788 39.4307 55.4944 39.4307H26.8709ZM26.8709 43.5197H55.4944V47.6088H43.2272C42.1427 47.6088 41.1026 48.0396 40.3358 48.8064C39.5689 49.5733 39.1381 50.6134 39.1381 51.6979V63.965C39.1381 65.0495 39.5689 66.0896 40.3358 66.8564C41.1026 67.6233 42.1427 68.0541 43.2272 68.0541H55.4944V72.1432H26.8709V43.5197ZM43.2272 51.6979H57.5389V63.965H43.2272V51.6979ZM49.3608 54.7647C48.5474 54.7647 47.7674 55.0878 47.1922 55.6629C46.6171 56.238 46.294 57.0181 46.294 57.8314C46.294 58.6448 46.6171 59.4249 47.1922 60C47.7674 60.5751 48.5474 60.8982 49.3608 60.8982C50.1741 60.8982 50.9542 60.5751 51.5293 60C52.1045 59.4249 52.4276 58.6448 52.4276 57.8314C52.4276 57.0181 52.1045 56.238 51.5293 55.6629C50.9542 55.0878 50.1741 54.7647 49.3608 54.7647Z" fill="black"/>
                        </svg>
                    </div>
                    <div class="logo-text wallet text-center">
                        <span class="fw-bolder text-marron-blip f-hahmlet py-3">Wallet</span>
                    </div>
                </div>
                <div class="position-relative mb-0 mb-lg-5">
                    <div class="position-absolute element-banking d-none d-lg-block">
                        <svg width="198" height="287" viewBox="0 0 198 287" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M59.1924 287C76.2036 287 91.9235 280.665 100.429 270.38L191.621 160.12C200.126 149.835 200.126 137.165 191.621 126.88L100.429 16.6199C91.9235 6.3353 76.2036 0 59.1924 0H-123.192C-140.204 0 -155.923 6.3353 -164.429 16.6199L-255.621 126.88C-264.126 137.165 -264.126 149.835 -255.621 160.12L-164.429 270.38C-155.923 280.665 -140.204 287 -123.192 287H59.1924Z" fill="#B90B0B"/>
                        </svg>
                    </div>
                    <div class="position-absolute element-banking right d-none d-lg-block">
                        <svg width="187" height="287" viewBox="0 0 187 287" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M321.192 287C338.204 287 353.923 280.665 362.429 270.38L453.621 160.12C462.126 149.835 462.126 137.165 453.621 126.88L362.429 16.6199C353.923 6.3353 338.204 0 321.192 0H138.808C121.796 0 106.077 6.3353 97.5709 16.6199L6.3792 126.88C-2.1264 137.165 -2.1264 149.835 6.3792 160.12L97.5709 270.38C106.077 280.665 121.796 287 138.808 287H321.192Z" fill="#B90B0B"/>
                        </svg>
                    </div>
                    <div class="container p-r mb-5 pb-5">
                        <div class="row gx-0 features-text">
                            <div class="col-12 col-lg-7 mx-auto ">
                                <div class="content-freedy text-center">
                                    <h3 class="d-inline-block p-r f-hahmlet text-marron-blip">
                                        The Importance of the <span class="text-blue-freedy"> Short Code </span>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-12 col-lg-7 mx-auto text-center mt-4 guide-text">
                                <p>
                                    Your wallet is identified through the ‘’Short Code’’ <br> (you can find it on the homepage of your  wallet ). <br>
                                    You have to use your Short Code in order to top up your wallet and receive incoming transfers.
                                </p>
                                <p >
                                    <span translate="no"> Blip Digital Bank </span> offers the possibility of making bank transfers, directly from your wallet, to any  bank accounts, even not under your name,without any documentation required and anonymously.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-12 mt-3">
                    <div class="accordion" id="accordionFreedy">
                        <div class="accordion-item freedy-accordion-item-reward mb-5">
                            <h2 class="accordion-header m-0" id="pageOne">
                                <button id="btnaccorionOne" class="accordion-button freedy-accordion-button2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    <div class="box-title-accordion2 ms-auto text-center">
                                        <span class="head text-marron-blip f-hahmlet py-3">How to Topup your wallet and receive funds</span>
                                    </div>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="pageOne" data-bs-parent="#accordionFreedy">
                                <div class="accordion-body freedy-accordion-body p-3 p-lg-5">
                                    <?php $this->load->view('auth/landingpage/guide-1-1'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item freedy-accordion-item-reward mb-5">
                            <h2 class="accordion-header m-0" id="pageTwo">
                                <button id="btnaccorionTwo" class="accordion-button freedy-accordion-button2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="box-title-accordion2 ms-auto text-center">
                                        <span class="head text-marron-blip f-hahmlet py-3">How to make a wallet to wallet transfer</span>
                                    </div>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="pageTwo" data-bs-parent="#accordionFreedy">
                                <div class="accordion-body freedy-accordion-body p-3 p-lg-5">
                                    <?php $this->load->view('auth/landingpage/guide-1-2'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item freedy-accordion-item-reward mb-5">
                            <h2 class="accordion-header m-0" id="pageThree">
                                <button id="btnaccorionThree" class="accordion-button freedy-accordion-button2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <div class="box-title-accordion2 ms-auto text-center">
                                        <span class="head text-marron-blip f-hahmlet py-3">How to convert currencies </span>
                                    </div>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="pageThree" data-bs-parent="#accordionFreedy">
                                <div class="accordion-body freedy-accordion-body p-3 p-lg-5">
                                    <?php $this->load->view('auth/landingpage/guide-1-3'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item freedy-accordion-item-reward mb-5">
                            <h2 class="accordion-header m-0" id="pageFour">
                                <button id="btnaccorionFour" class="accordion-button freedy-accordion-button2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <div class="box-title-accordion2 ms-auto text-center">
                                        <span class="head text-marron-blip f-hahmlet py-3 fw-normal">How to withdraw funds and make bank transfers</span>
                                    </div>
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="pageFour" data-bs-parent="#accordionFreedy">
                                <div class="accordion-body freedy-accordion-body p-3 p-lg-5">
                                    <?php $this->load->view('auth/landingpage/guide-1-4'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!-- End Wallet  -->
            
            <!-- Start Capital Exportation -->
            <?php if ($guide == 2) { ?>
                <div class="col-12 my-5">
                    <div class="logo-text text-center features-text">
                        <svg width="142" height="129" viewBox="0 0 142 129" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M127.394 24.8141C127.394 53.0119 142 72.3757 142 85.963C142 99.5503 134.189 128.086 71.6828 128.086C9.17641 128.086 0 89.6971 0 74.7523C0 4.76945 127.394 -25.1242 127.394 24.8141Z" fill="#EFEFEF"/>
                            <path d="M111.829 16.8958C108.458 16.8958 105.714 14.1522 105.714 10.7809C105.714 7.40956 108.458 4.66602 111.829 4.66602C115.2 4.66602 117.944 7.40956 117.944 10.7809C117.944 14.1522 115.2 16.8958 111.829 16.8958ZM111.829 8.74261C110.708 8.74261 109.791 9.65577 109.791 10.7809C109.791 11.906 110.708 12.8192 111.829 12.8192C112.95 12.8192 113.867 11.906 113.867 10.7809C113.867 9.65577 112.95 8.74261 111.829 8.74261Z" fill="#B90B0B"/>
                            <path d="M124.06 93.3616C120.688 93.3616 117.945 90.6181 117.945 87.2467C117.945 83.8754 120.688 81.1318 124.06 81.1318C127.431 81.1318 130.175 83.8754 130.175 87.2467C130.175 90.6181 127.431 93.3616 124.06 93.3616ZM124.06 85.2084C122.939 85.2084 122.021 86.1216 122.021 87.2467C122.021 88.3719 122.939 89.285 124.06 89.285C125.181 89.285 126.098 88.3719 126.098 87.2467C126.098 86.1216 125.181 85.2084 124.06 85.2084Z" fill="#B90B0B"/>
                            <path d="M72.6451 25.0703C64.7308 25.0703 57.1407 28.2142 51.5445 33.8104C45.9483 39.4067 42.8044 46.9967 42.8044 54.911C42.8044 69.9432 53.9947 82.5882 68.915 84.4906V88.4817H65.1849C64.1956 88.4817 63.2469 88.8747 62.5473 89.5742C61.8478 90.2738 61.4548 91.2225 61.4548 92.2118H35.3442V99.672H61.4548C61.4548 100.661 61.8478 101.61 62.5473 102.31C63.2469 103.009 64.1956 103.402 65.1849 103.402H80.1052C81.0945 103.402 82.0433 103.009 82.7428 102.31C83.4423 101.61 83.8353 100.661 83.8353 99.672H109.946V92.2118H83.8353C83.8353 91.2225 83.4423 90.2738 82.7428 89.5742C82.0433 88.8747 81.0945 88.4817 80.1052 88.4817H76.3752V84.4906C91.2955 82.6255 102.486 69.9432 102.486 54.911C102.486 46.9967 99.3418 39.4067 93.7456 33.8104C88.1494 28.2142 80.5593 25.0703 72.6451 25.0703ZM72.6451 32.5305C72.6451 32.5305 75.4053 37.305 77.345 43.7207H67.9452C69.8848 37.305 72.6451 32.5305 72.6451 32.5305ZM64.327 34.1344C63.3199 35.9995 61.7905 39.3938 60.485 43.7207H53.2859C55.8597 39.3938 59.5898 35.9995 64.327 34.1344ZM80.9632 34.1717C85.7004 36.0368 89.4305 39.3938 92.0042 43.7207H84.8051C83.4996 39.3938 81.9703 35.9995 80.9632 34.1717ZM50.6003 51.1809H58.9184C58.7692 52.4118 58.6573 53.6428 58.6573 54.911C58.6573 56.1792 58.7692 57.4101 58.9184 58.6411H50.6003C50.3765 57.4101 50.2646 56.1792 50.2646 54.911C50.2646 53.6428 50.3765 52.4118 50.6003 51.1809ZM66.3785 51.1809H78.9116C79.0608 52.4118 79.1727 53.6428 79.1727 54.911C79.1727 56.1792 79.0608 57.4101 78.9116 58.6411H66.3785C66.2293 57.4101 66.1174 56.1792 66.1174 54.911C66.1174 53.6428 66.2293 52.4118 66.3785 51.1809ZM86.3718 51.1809H94.6899C94.9137 52.4118 95.0256 53.6428 95.0256 54.911C95.0256 56.1792 94.9137 57.4101 94.6899 58.6411H86.3718C86.521 57.4101 86.6329 56.1792 86.6329 54.911C86.6329 53.6428 86.521 52.4118 86.3718 51.1809ZM53.2859 66.1012H60.485C61.7905 70.4281 63.3199 73.8225 64.327 75.6503C59.5898 73.7852 55.8597 70.4281 53.2859 66.1012ZM67.9452 66.1012H77.345C75.4053 72.517 72.6451 77.2915 72.6451 77.2915C72.6451 77.2915 69.8848 72.517 67.9452 66.1012ZM84.8051 66.1012H92.0042C89.4305 70.4281 85.7004 73.8225 80.9632 75.6875C81.9703 73.8225 84.8051 66.1012 84.8051 66.1012Z" fill="#B90B0B"/>
                            <rect x="34.3948" y="90.8555" width="76.5006" height="9.76604" fill="black"/>
                            <rect x="60.4375" y="87.6006" width="24.4151" height="16.2767" rx="2" fill="#0A0A0A"/>
                        </svg>
                        <span class="fw-bolder title-top-header text-marron-blip f-hahmlet">Funds Relocation</span>
                    </div>
                </div>
                <div class="col-12 mb-5 features-text">
                    <div class="col-12 col-lg-8 text-center mb-5 mx-auto">
                        <p class="guide-text">
                            Given the increasingly stringent and restrictive regulations on international bank transfers,
                            <span translate="no"> Blip Digital Bank </span> offers a simple, risk-free and 100% legal solution. <br>
                            The user who wants to send capital abroad will have to open a <span translate="no"> Blip Digital Bank
                            </span> account and will
                            have to carry out the following procedure to remain in the legality and away from tax
                            assessments:
                        </p>
                    </div>
                    <div class="col-12 mb-5">
                        <div class="d-flex flex-column flex-md-row flex-wrap justify-content-center">
                            <div class="col-12 col-md-6 col-lg-4 px-2 py-2">
                                <div class="card freedy-card small text-center">
                                    <div class="card-body">
                                        <h5 class="card-title f-hahmlet text-marron-blip fw-bold pb-3">Step 1</h5>
                                        <p class="card-textblack f-roboto text-gray-blip"><b>Top up wallet</b> (the top up is not a credit transfer and
                                            therefore is not fiscally relevant as it is not comparable to a payment).</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 px-2 py-2">
                                <div class="card freedy-card small text-center">
                                    <div class="card-body">
                                        <h5 class="card-title f-hahmlet text-marron-blip fw-bold pb-3">Step 2</h5>
                                        <p class="card-textblack f-roboto text-gray-blip"><b>Convert</b> the amount to export into the currency of the
                                            destination country (the currency conversion is also not fiscally relevant).</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 px-2 py-2">
                                <div class="card freedy-card small text-center">
                                    <div class="card-body">
                                        <h5 class="card-title f-hahmlet text-marron-blip fw-bold pb-3">Step 3</h5>
                                        <p class="card-textblack f-roboto text-gray-blip"><b>Send</b> the converted amount, via our platform, as a
                                            national transfer (with this procedure the international transfer is
                                            eliminated).</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 text-center mb-5 features-text">
                        <h3 class="text-dark f-hahmlet fw-bold">How we make this service possible?</h3>
                        <div class="col-12 col-md-8 mx-auto my-4">
                            <img src="<?= base_url() ?>assets/img/img-8.svg" alt="img" class="img-fluid">
                        </div>
                        <p class="col-12 col-lg-12 mx-auto guide-text">
                            <span translate="no"> Blip Digital Bank, </span> making use of the licensee company's capitals, partners and offices, in order to respect the laws in force on the matter, will not carry out an international transfer but will send a national transfer from the current account of the country of destination to the current account required by the sender, in the same country, carrying out an internal clearing only afterwards (the internal clearing procedure is 100% legal).
                        </p>
                    </div>
                </div>
            <?php } ?>
            <!-- End Capital Exportation -->

            <!-- Start Easy Trip -->
            <?php if ($guide == 3) { ?>
                <div class="col-12 my-5 features-text">
                    <div class="logo-text text-center">
                        <svg width="120" height="134" viewBox="0 0 120 134" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.2475 119.351C49.6651 119.351 67.8064 133.035 80.5359 133.035C93.2654 133.035 120 125.718 120 67.1573C120 8.59708 84.0343 0 70.033 0C4.46835 0 -23.5381 119.351 23.2475 119.351Z" fill="#EFEFEF"/>
                            <circle cx="109.517" cy="53.6254" r="5.29384" fill="#B90B0B"/>
                            <path d="M19.4522 92.6859C19.4522 95.6096 17.082 97.9798 14.1583 97.9798C11.2346 97.9798 8.8645 95.6096 8.8645 92.6859C8.8645 89.7622 11.2346 87.3921 14.1583 87.3921C17.082 87.3921 19.4522 89.7622 19.4522 92.6859ZM11.5784 92.6859C11.5784 94.1108 12.7335 95.2658 14.1583 95.2658C15.5832 95.2658 16.7382 94.1108 16.7382 92.6859C16.7382 91.2611 15.5832 90.106 14.1583 90.106C12.7335 90.106 11.5784 91.2611 11.5784 92.6859Z" fill="#B90B0B"/>
                            <path d="M58.0017 16.9565L63.4029 11.5553L66.1035 14.2559L60.7023 19.6571L58.0017 16.9565Z" fill="#B90B0B"/>
                            <path d="M42.4722 32.4824L47.8761 27.0785L50.5767 29.7791L45.1728 35.183L42.4722 32.4824Z" fill="#B90B0B"/>
                            <path d="M42.4746 13.582L45.1752 10.8814L50.5791 16.2853L47.8785 18.9859L42.4746 13.582Z" fill="#B90B0B"/>
                            <g clip-path="url(#clip0_235_31738)">
                            <path d="M80.6795 85.1077C77.379 87.0352 74.6348 89.7782 72.7065 93.1513L64.2884 76.9528L49.8628 91.2979L51.1237 100.565L47.2299 104.494L40.6661 92.6694L28.8734 86.1456L32.8043 82.2164L42.0011 83.5138L56.4267 69.0574L28.8734 54.6753L34.1022 49.4487L68.2193 57.3071L82.6449 42.8878C84.7958 40.7008 88.3187 40.7008 90.5067 42.8878C92.6576 45.0748 92.6576 48.6703 90.5067 50.7461L76.0811 65.1654L80.6795 85.1077Z" fill="black"/>
                            </g>
                            <path d="M86.2075 96.1171L100.028 82.4951L104.494 87.8453L86.2075 105.869L75.6206 94.4855L80.0864 90.084L86.2075 96.1171Z" fill="#B90B0B"/>
                            <defs>
                            <clipPath id="clip0_235_31738">
                            <rect width="64.6213" height="64.6213" fill="white" transform="translate(28.8734 39.8726)"/>
                            </clipPath>
                            </defs>
                        </svg>
                        <span class="fw-bold title-top-header f-hahmlet text-marron-blip mt-4">During trips</span>
                    </div>
                </div>
                <div class="col-12 mb-5 text-center  features-text">
                    <h3 class="fw-semibold f-hahmlet">With <span translate="no" class="fw-normal"> Blip Digital Bank </span> your money travels with you.</h3>
                    <p class="guide-text col-12 col-lg-7 mx-auto mt-3">Follow few easy steps to instant convert FIAT currencies and make easy payments from wherever
                        you want
                    </p>
                </div>

                <div class="col-12 mb-5">
                    <div class="d-flex flex-column flex-md-row flex-wrap justify-content-center">
                        <div class="col-12 col-md-6 col-lg-3 text-center px-2 py-2">
                            <h5 class="card-title my-3 text-marron-blip linear fw-bold ">Step 1</h5>
                            <div class="card freedy-card during-trips text-center">
                                <div class="card-body">
                                    <p class="guide-text">
                                        <span class="fw-bolder pb-3">
                                            Top up your wallet by bank transfers
                                        </span>
                                        <br> <br>
                                        in one of the 10 currencies that allows you to receive bank transfers.<br>
                                        You just need to follow the easy procedure that you can find in the
                                        ‘’Deposit/Receive’’ section of your wallet
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 text-center px-2 py-2">
                            <h5 class="card-title my-3 text-marron-blip linear fw-bold">Step 2</h5>
                            <div class="card freedy-card during-trips text-center">
                                <div class="card-body">
                                    <p class="guide-text">
                                        <span class="fw-bolder pb-3">
                                            Select one of the currencies
                                        </span>
                                        <br> <br>
                                        where you have the funds and
                                        Click the button ‘’Swap’’ </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 text-center px-2 py-2">
                            <h5 class="card-title my-3 text-marron-blip linear fw-bold">Step 3</h5>
                            <div class="card freedy-card during-trips text-center">
                                <div class="card-body">
                                    <p class="guide-text">
                                        <span class="fw-bolder pb-3">
                                            Enter the amount
                                        </span>
                                        <br> <br>
                                        choose
                                        one of the 40 currencies that allows you to convert and send and
                                        click ‘’Confirm’’
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 text-center px-2 py-2">
                            <h5 class="card-title my-3 text-marron-blip linear fw-bold">Step 4</h5>
                            <div class="card freedy-card during-trips text-center">
                                <div class="card-body">
                                    <p class="guide-text">
                                        <span class="fw-bolder pb-3">
                                            Congratulations!
                                        </span>
                                        <br> <br>
                                        Now you can make easy and fast payments in the currency of the country you are in
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!-- End Easy Trip -->

            <!-- Start Daily Use -->
            <?php if ($guide == 4) { ?>
                <div class="col-12 my-5">
                    <div class="logo-text text-center">
                        <svg width="138" height="125" viewBox="0 0 138 125" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M123.356 24.0277C123.356 51.3319 137.5 70.0821 137.5 83.2388C137.5 96.3955 129.937 124.027 69.4112 124.027C8.88561 124.027 0 86.8546 0 72.3834C0 4.61831 123.356 -24.328 123.356 24.0277Z" fill="#EFEFEF"/>
                            <path d="M28.6489 100.898L23.5265 94.8905L26.5302 92.3293L31.6526 98.3367L28.6489 100.898Z" fill="#B90B0B"/>
                            <path d="M43.3759 118.171L38.2509 112.16L41.2546 109.599L46.3796 115.61L43.3759 118.171Z" fill="#B90B0B"/>
                            <path d="M23.9032 116.617L21.342 113.613L27.3524 108.489L29.9136 111.492L23.9032 116.617Z" fill="#B90B0B"/>
                            <path d="M101.073 58.918V39.0201C101.073 35.4378 98.1749 32.5069 94.5601 32.5069H80.9475C79.5797 28.7292 75.9974 25.9937 71.7638 25.9937C67.5302 25.9937 63.948 28.7292 62.5802 32.5069H48.9676C45.3853 32.5069 42.4543 35.4378 42.4543 39.0201V84.6126C42.4543 88.2275 45.3853 91.1259 48.9676 91.1259H68.8655C72.9688 95.1641 78.5702 97.6391 84.7903 97.6391C97.3934 97.6391 107.587 87.4459 107.587 74.8428C107.587 68.6227 105.112 63.0213 101.073 58.918ZM71.7638 32.5069C73.555 32.5069 75.0204 33.9723 75.0204 35.7635C75.0204 37.5546 73.555 39.0201 71.7638 39.0201C69.9727 39.0201 68.5072 37.5546 68.5072 35.7635C68.5072 33.9723 69.9727 32.5069 71.7638 32.5069ZM48.9676 84.6126V39.0201H55.4808V45.5333H88.0469V39.0201H94.5601V54.261C91.5966 52.8607 88.3074 52.0465 84.7903 52.0465H55.4808V58.5598H68.8329C66.8789 60.416 65.3809 62.6305 64.2085 65.073H55.4808V71.5862H62.2545C62.0917 72.6609 61.994 73.7356 61.994 74.8428C61.994 78.3599 62.8082 81.6491 64.2085 84.6126H48.9676ZM84.7903 91.1259C75.802 91.1259 68.5072 83.831 68.5072 74.8428C68.5072 65.8546 75.802 58.5598 84.7903 58.5598C93.7785 58.5598 101.073 65.8546 101.073 74.8428C101.073 83.831 93.7785 91.1259 84.7903 91.1259ZM86.4186 75.657L95.7325 81.1606L93.29 85.1337L81.5337 78.0994V61.8164H86.4186V75.657Z" fill="black"/>
                            <path d="M107.587 74.8427C107.587 87.4327 97.3803 97.6389 84.7903 97.6389C72.2003 97.6389 61.994 87.4327 61.994 74.8427C61.994 62.2526 72.2003 52.0464 84.7903 52.0464C97.3803 52.0464 107.587 62.2526 107.587 74.8427ZM68.5268 74.8427C68.5268 83.8247 75.8082 91.1061 84.7903 91.1061C93.7723 91.1061 101.054 83.8247 101.054 74.8427C101.054 65.8606 93.7723 58.5792 84.7903 58.5792C75.8082 58.5792 68.5268 65.8606 68.5268 74.8427Z" fill="#B90B0B"/>
                        </svg>
                        <span class="fw-bold title-top-header f-hahmlet text-marron-blip mt-4">Daily use</span>
                    </div>
                </div>
                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="col-12 col-md-8 features-text">
                            <p class="guide-text">
                                The wallet functions of <span translate="no"> Blip Digital Bank </span> are suitable for all daily
                                payments, even for small
                                amounts; everywhere in the world.
                            </p>
                            <div class="col-12 d-flex flex-column justify-content-center">
                                <div class="content-freedy circle text-start">
                                    <ul class="ps-0 guide-text">
                                        <li class="ali">Low and fixed fees </li>
                                        <li class="ali">Convert currencies for free during any trip</li>
                                        <li class="ali">More convenient, faster and safer than the use of cash and credit cards</li>
                                        <li class="ali">Users will be able to make any payment from his own device </li>
                                        <li class="ali">The balance will be updated in real time </li>
                                        <li class="ali">The remaining balance can be consulted directly through the specific application</li>
                                        <li class="ali">Respect of the privacy and anonymity of each user as no sms email or
                                            paper will be sent</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 d-none d-md-grid">
                            <img src="<?= base_url() ?>assets/img/img-9.svg" alt="icon" class="img-fluid">
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!-- End Daily Use -->

            <!-- Start Buy & Sell FIAT Currencies -->
            <?php if ($guide == 5) { ?>
                <div class="col-12 mt-5"></div>
                <div class="position-relative mt-5 mb-0 mb-lg-5">
                    <!-- <div class="position-absolute element-banking d-none d-lg-block">
                        <svg width="109" height="517" viewBox="0 0 109 517" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M-225 4.99999C-225 2.23856 -222.761 0 -220 0H104C106.761 0 109 2.23858 109 5V512C109 514.761 106.761 517 104 517H-220C-222.761 517 -225 514.761 -225 512V4.99999Z" fill="url(#paint0_linear_104_16354)"/>
                            <defs>
                            <linearGradient id="paint0_linear_104_16354" x1="-225" y1="366.208" x2="132.954" y2="361.83" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#336c74"/>
                        <stop offset="0.444301" stop-color="#578187"/>
                        <stop offset="0.916667" stop-color="#003B43"/>
                            </linearGradient>
                            </defs>
                        </svg>
                    </div>
                    <div class="position-absolute element-banking right d-none d-lg-block">
                        <svg width="109" height="517" viewBox="0 0 109 517" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M-225 4.99999C-225 2.23856 -222.761 0 -220 0H104C106.761 0 109 2.23858 109 5V512C109 514.761 106.761 517 104 517H-220C-222.761 517 -225 514.761 -225 512V4.99999Z" fill="url(#paint0_linear_104_16354)"/>
                            <defs>
                            <linearGradient id="paint0_linear_104_16354" x1="-225" y1="366.208" x2="132.954" y2="361.83" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#003B43"/>
                            <stop offset="0.444301" stop-color="#578187"/>
                            <stop offset="0.916667" stop-color="#336c74"/>
                            </linearGradient>
                            </defs>
                        </svg>
                    </div> -->
                    <div class="container p-r mb-5">
                        <div class="row gx-0">
                            <div class="col-12 col-lg-7 mx-auto ">
                                <div class="content-freedy text-center">
                                    <div>
                                        <svg width="126" height="114" viewBox="0 0 126 114" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M113.039 22.0181C113.039 47.0387 126 64.2207 126 76.277C126 88.3333 119.069 113.654 63.6059 113.654C8.14245 113.654 0 79.5904 0 66.3295C0 4.23205 113.039 -22.2933 113.039 22.0181Z" fill="#EFEFEF"/>
                                            <path d="M99.2286 14.9924C96.2371 14.9924 93.8027 12.558 93.8027 9.56651C93.8027 6.57504 96.2371 4.14062 99.2286 4.14062C102.22 4.14062 104.655 6.57504 104.655 9.56651C104.655 12.558 102.22 14.9924 99.2286 14.9924ZM99.2286 7.75788C98.2339 7.75788 97.42 8.56815 97.42 9.56651C97.42 10.5649 98.2339 11.3751 99.2286 11.3751C100.223 11.3751 101.037 10.5649 101.037 9.56651C101.037 8.56815 100.223 7.75788 99.2286 7.75788Z" fill="#B6A4C1"/>
                                            <path d="M110.081 82.8425C107.09 82.8425 104.655 80.4081 104.655 77.4166C104.655 74.4251 107.09 71.9907 110.081 71.9907C113.073 71.9907 115.507 74.4251 115.507 77.4166C115.507 80.4081 113.073 82.8425 110.081 82.8425ZM110.081 75.608C109.086 75.608 108.273 76.4182 108.273 77.4166C108.273 78.415 109.086 79.2252 110.081 79.2252C111.076 79.2252 111.89 78.415 111.89 77.4166C111.89 76.4182 111.076 75.608 110.081 75.608Z" fill="#B6A4C1"/>
                                            <path d="M100.597 68.4438C100.597 82.3678 89.3351 93.6293 75.4111 93.6293L79.1889 87.3329" stroke="#B90B0B" stroke-width="4.14439" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M28.6387 46.8563C28.6387 32.9324 39.9002 21.6709 53.8241 21.6709L50.0463 27.9673" stroke="#B90B0B" stroke-width="4.14439" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M70.7339 30.4849L85.0532 38.76L99.229 30.5209" stroke="black" stroke-width="4.14439" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M85.0532 53.4051V38.7256" stroke="black" stroke-width="4.14439" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M81.672 22.4265L73.037 27.2115C71.0942 28.2909 69.4751 31.0253 69.4751 33.256V42.3949C69.4751 44.6256 71.0582 47.36 73.037 48.4393L81.672 53.2247C83.507 54.268 86.5292 54.268 88.4002 53.2247L97.0352 48.4393C98.978 47.36 100.597 44.6256 100.597 42.3949V33.256C100.597 31.0253 99.014 28.2909 97.0352 27.2115L88.4002 22.4265C86.5652 21.419 83.543 21.419 81.672 22.4265V22.4265Z" stroke="black" stroke-width="4.14439" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M29.8975 70.0625L44.1812 78.3374L58.3931 70.0985" stroke="black" stroke-width="4.14439" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M44.1812 92.9813V78.3018" stroke="black" stroke-width="4.14439" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M40.8356 62.0041L32.2006 66.7893C30.2578 67.8687 28.6387 70.6028 28.6387 72.8335V81.9726C28.6387 84.2033 30.2218 86.9377 32.2006 88.0171L40.8356 92.8023C42.6706 93.8457 45.6928 93.8457 47.5637 92.8023L56.1987 88.0171C58.1416 86.9377 59.7607 84.2033 59.7607 81.9726V72.8335C59.7607 70.6028 58.1776 67.8687 56.1987 66.7893L47.5637 62.0041C45.6928 60.9967 42.6706 60.9967 40.8356 62.0041V62.0041Z" stroke="black" stroke-width="4.14439" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <h3 class="d-inline-block p-r f-hahmlet text-marron-blip">
                                        Buy and sell crypto using Fiat currencies <span translate="no"> ‘’Trade-Off </span> Platform’’
                                    </h3>
                                </div>
                            </div>
                            <div class="col-12 col-lg-9 mx-auto text-center mt-4 features-text">
                                <p class="guide-text">
                                    <span translate="no"> Blip Digital Bank </span> offers the possibility to buy and sell cryptocurrencies using FIAT, directly from any FIAT balance of your <span translate="no"> Blip Digital Bank </span>  wallet.
                                    <br>
                                    <span translate="no"> Blip Digital Bank </span> also gives the possibility to withdraw
                                    your funds by converting them INTO ANY FIAT CURRENCY; after conversion you can send your funds to any bank account, even if it is not under your name,
                                    thanks to the integrated <span translate="no"> trade-off </span> platform.
                                </p>
                                <p class="guide-text">
                                    On <span translate="no"> Blip Digital Bank, </span> being a trade-off platform,  the ‘’Buy’’ and ‘’Sell’’ orders are just  ‘’LIMIT’’ orders.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-12 mb-5 ">
                    <div class="col-12 text-center mb-5 features-text ">
                        <h3 class="fw-bold text-marron-blip f-hahmlet">How to top up crypto wallet</h3>

                        <p class="mt-3 guide-text">In order to topup your <span translate="no"> Blip Digital Bank </span> crypto wallet follow the procedure below :</p>

                    </div>
                    <div class="d-flex flex-row justify-content-center flex-wrap rounded-5" style="background-color: #B90B0B;">
                        <div class="in-crypto">
                            <span>Step 1</span>
                            <div class="box-crypto">
                                <p class="mb-3">Log in to your <b class="fw-semibold" translate="no"> Blip Digital Bank </b> wallet and select
                                    crypto</p>
                                <img class="my-auto img-fluid" src="<?= base_url() ?>assets/img/img-10.svg" alt="crypto-1">
                            </div>
                        </div>
                        <div class="in-crypto">
                            <span>Step 2</span>
                            <div class="box-crypto">
                                <p class="mb-3">Click top up <br> button</p>
                                <img class="my-auto img-fluid" src="<?= base_url() ?>assets/img/img-11.svg" alt="img">
                            </div>
                        </div>
                        <div class="in-crypto">
                            <span>Step 3</span>
                            <div class="box-crypto">
                                <p class="mb-3">Select the Fiat currency that you want to convert in USDX, enter the
                                    amount and click convert</p>
                            </div>
                        </div>
                        <div class="in-crypto">
                            <span>Step 4</span>
                            <div class="box-crypto">
                                <p class="mb-3">After clicking convert make sure that all data are correct and then click
                                    on the confirm button</p>
                            </div>
                        </div>
                        <div class="in-crypto">
                            <span>Step 5</span>
                            <div class="box-crypto">
                                <p class="mb-3">Congratulations! Now you can start to buy and sell crypto</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 text-center mt-5 features-text">
                        <h3 class="fw-bold f-hahmlet text-marron-blip">How to buy and sell crypto by placing limit order</h3>

                        <p class="mt-3 col-10 mx-auto guide-text">
                            A buy limit order will be executed only at the limit price or a lower price and a sell limit order will be executed only at the limit price or a higher one.The price is guaranteed, but the filling of the order is not. Limit orders will be executed only if the price meets the order qualifications.
                        </p>

                        <div class="box-p-crypto p-4">
                            <p class="f-jakarta col-11 mx-auto">To start trading, enter the price you want to trade at, once you've entered the amount, you
                                can choose to enter the amount of cryptocurrency you want to buy/sell  or the USDX amount
                                you want to spend or receive.</p>
                        </div>

                        <h3 class="fw-bold f-hahmlet text-marron-blip mt-5">How to withdraw your earning</h3>

                        <p class="mt-3 guide-text">
                            In order to withdraw your your funds follow the procedure below :
                        </p>

                    </div>

                    <div class="d-flex flex-row justify-content-center flex-wrap rounded-5" style="background-color: #B90B0B;">
                        <div class="in-crypto">
                            <span>Step 1</span>
                            <div class="box-crypto">
                                <p class="mb-3">From your wallet, in the crypto section, click the button withdraw.</p>
                                <img class="my-auto img-fluid" src="<?= base_url() ?>assets/img/img-12.svg" alt="crypto-1">
                            </div>
                        </div>
                        <div class="in-crypto">
                            <span>Step 2</span>
                            <div class="box-crypto">
                                <p class="mb-3">Enter the USDX amount that you want to convert, choose your favorite FIAT currency and click withdraw </p>
                            </div>
                        </div>
                        <div class="in-crypto">
                            <span>Step 3</span>
                            <div class="box-crypto">
                                <p class="mb-3">After clicking withdraw make sure that all data are correct and then click on confirm</p>
                            </div>
                        </div>
                        <div class="in-crypto">
                            <span>Step 4</span>
                            <div class="box-crypto">
                                <p class="mb-3">Congratulations! Now your balance is available on your Fiat wallet, in the chosen currency </p>
                            </div>
                        </div>
                        <div class="in-crypto">
                            <span>Step 5</span>
                            <div class="box-crypto">
                                <p class="mb-3">Now you can transfer your funds to any bank account, even if it is not under your name, in more than 40 currencies </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 text-center fw-bold">
                    <h3 class="fw-bold">Coming soon</h3>
                </div>
            <?php } ?>
            <!-- End Buy & Sell FIAT Currencies -->

            <?php if ($guide == 11) { ?>
                <div class="col-12 my-5">
                    <div class="logo-text text-center">
                        <svg width="138" height="125" viewBox="0 0 138 125" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M123.356 24.0277C123.356 51.3319 137.5 70.0821 137.5 83.2388C137.5 96.3955 129.937 124.027 69.4112 124.027C8.88561 124.027 0 86.8546 0 72.3834C0 4.61831 123.356 -24.328 123.356 24.0277Z" fill="#EFEFEF"/>
                        <path d="M28.6484 100.898L23.526 94.8905L26.5297 92.3293L31.6521 98.3367L28.6484 100.898Z" fill="#003B43"/>
                        <path d="M43.375 118.171L38.25 112.16L41.2537 109.599L46.3787 115.61L43.375 118.171Z" fill="#003B43"/>
                        <path d="M23.9023 116.617L21.3411 113.613L27.3515 108.489L29.9127 111.492L23.9023 116.617Z" fill="#003B43"/>
                        <path d="M101.073 58.918V39.0201C101.073 35.4378 98.1747 32.5069 94.5599 32.5069H80.9472C79.5795 28.7292 75.9972 25.9937 71.7636 25.9937C67.53 25.9937 63.9477 28.7292 62.58 32.5069H48.9673C45.3851 32.5069 42.4541 35.4378 42.4541 39.0201V84.6126C42.4541 88.2275 45.3851 91.1259 48.9673 91.1259H68.8652C72.9685 95.1641 78.5699 97.6391 84.79 97.6391C97.3931 97.6391 107.586 87.4459 107.586 74.8428C107.586 68.6227 105.111 63.0213 101.073 58.918ZM71.7636 32.5069C73.5547 32.5069 75.0202 33.9723 75.0202 35.7635C75.0202 37.5546 73.5547 39.0201 71.7636 39.0201C69.9725 39.0201 68.507 37.5546 68.507 35.7635C68.507 33.9723 69.9725 32.5069 71.7636 32.5069ZM48.9673 84.6126V39.0201H55.4805V45.5333H88.0466V39.0201H94.5599V54.261C91.5963 52.8607 88.3072 52.0465 84.79 52.0465H55.4805V58.5598H68.8326C66.8787 60.416 65.3806 62.6305 64.2083 65.073H55.4805V71.5862H62.2543C62.0915 72.6609 61.9938 73.7356 61.9938 74.8428C61.9938 78.3599 62.8079 81.6491 64.2083 84.6126H48.9673ZM84.79 91.1259C75.8018 91.1259 68.507 83.831 68.507 74.8428C68.507 65.8546 75.8018 58.5598 84.79 58.5598C93.7783 58.5598 101.073 65.8546 101.073 74.8428C101.073 83.831 93.7783 91.1259 84.79 91.1259ZM86.4183 75.657L95.7322 81.1606L93.2898 85.1337L81.5334 78.0994V61.8164H86.4183V75.657Z" fill="black"/>
                        <path d="M107.587 74.8427C107.587 87.4327 97.3804 97.6389 84.7904 97.6389C72.2004 97.6389 61.9941 87.4327 61.9941 74.8427C61.9941 62.2526 72.2004 52.0464 84.7904 52.0464C97.3804 52.0464 107.587 62.2526 107.587 74.8427ZM68.527 74.8427C68.527 83.8247 75.8084 91.1061 84.7904 91.1061C93.7725 91.1061 101.054 83.8247 101.054 74.8427C101.054 65.8606 93.7725 58.5792 84.7904 58.5792C75.8084 58.5792 68.527 65.8606 68.527 74.8427Z" fill="#003B43"/>
                        </svg>
                        <span class="f-lexend text-blue-freedy">Essential for your trips</span>
                    </div>
                </div>
                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h3 class="text-dark">With SpeedyBank your money travels with you.</h3>
                            <p>
                                With this function integrated into your wallet, you will be able to see all the activities
                                that accept <b translate="no"> ExchangeTailor </b> as a collection and payment system.
                            </p>
                        </div>
                        <div class="col-6 d-none d-md-grid">
                            <img src="<?= base_url() ?>assets/img/img-13.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            <?php } ?>

            <!-- Start Search -->
            <?php if ($guide == 6) { ?>
                <div class="col-12 my-5">
                    <div class="logo-text text-center">
                    <svg width="128" height="116" viewBox="0 0 128 116" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M114.834 22.3676C114.834 47.7853 128 65.2401 128 77.4878C128 89.7355 120.959 115.458 64.6155 115.458C8.27169 115.458 0 80.8538 0 67.3824C0 4.29922 114.834 -22.6472 114.834 22.3676Z" fill="#EFEFEF"/>
                    <path d="M26.6699 93.9272L21.9014 88.3349L24.6976 85.9507L29.4661 91.543L26.6699 93.9272Z" fill="#003B43"/>
                    <path d="M40.3789 110.007L35.608 104.412L38.4042 102.027L43.1751 107.623L40.3789 110.007Z" fill="#003B43"/>
                    <path d="M22.251 108.561L19.8667 105.764L25.4619 100.993L27.8461 103.79L22.251 108.561Z" fill="#003B43"/>
                    <path d="M70.7916 49.1673C69.5128 49.9665 68.298 50.9256 67.1471 52.0446C66.0921 53.1315 65.133 54.3144 64.3657 55.5612H54.6789V50.7658C54.6789 49.8706 55.3822 49.1673 56.2774 49.1673H70.7916ZM93.0425 42.7734H35.4971V23.5916H93.0425V42.7734ZM86.6486 29.9855H41.891V36.3794H86.6486V29.9855ZM45.088 74.743V45.9703H38.694V81.137H66.8913C65.0371 79.2188 63.6304 77.0449 62.6713 74.743H45.088Z" fill="black"/>
                    <path d="M99.4365 85.5807L103.88 81.1369L94.0336 71.2263C95.4403 69.0204 96.2395 66.3669 96.2395 63.5536C96.2395 55.5612 89.8456 49.1672 81.8532 49.1672C73.8607 49.1672 67.4668 55.5612 67.4668 63.5536C67.4668 71.546 73.8607 77.94 81.8532 77.94C84.6345 77.94 87.256 77.1407 89.4619 75.766L99.4365 85.5807Z" fill="#003B43"/>
                    <circle cx="82.0184" cy="63.4983" r="7.9373" fill="#D9D9D9"/>
                    </svg>
                        <span class="f-hahmlet fw-bolder text-blue-freedy">Search</span>
                    </div>
                </div>
                <div class="col-12 mb-5">
                    <div class="row">
                        <div class="col-12 col-md-6 my-auto features-text">
                            <p class="f-jakarta px-5">With this function integrated into your wallet, you will be able to see all the activities
                                that accept <span translate="no"> Blip Digital Bank </span> as a collection and payment system.
                            </p>
                        </div>
                        <div class="col-6 d-none d-md-grid mx-auto">
                            <img src="<?= base_url() ?>assets/img/img-15.svg" alt="img" class="img-fluid">
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!-- End Search -->
            
            <!-- Start Findme -->
            <?php if ($guide == 7) { ?>
                <div class="col-12 my-5">
                    <div class="logo-text text-center">
                        <div class="d-flex justify-content-center align-items-center mx-auto ">
                        <svg width="120" height="156" viewBox="0 0 120 156" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M90.1693 33.6722C65.9591 34.1798 49.1001 20.4312 37.4326 20.6791C25.765 20.927 -0.977133 42.7178 0.027543 103.044C1.03222 163.37 71.9348 164.628 71.9349 140.387C132.019 139.123 133.041 32.7711 90.1693 33.6722Z" fill="#EFEFEF"/>
                        <path d="M22.2161 118.144L16.0299 107.704C14.664 105.399 14.9284 102.714 16.6201 101.712L9.72474 105.797C8.03309 106.8 7.76872 109.484 9.13463 111.789L15.3208 122.23C16.6867 124.535 19.1682 125.592 20.8599 124.59L27.7552 120.504C26.0635 121.507 23.582 120.449 22.2161 118.144Z" fill="#003B43"/>
                        <path d="M118.502 68.2073C118.502 72.1398 115.314 75.3277 111.381 75.3277C107.449 75.3277 104.261 72.1398 104.261 68.2073C104.261 64.2748 107.449 61.0869 111.381 61.0869C115.314 61.0869 118.502 64.2748 118.502 68.2073ZM107.252 68.2073C107.252 70.4878 109.101 72.3365 111.381 72.3365C113.662 72.3365 115.51 70.4878 115.51 68.2073C115.51 65.9268 113.662 64.0781 111.381 64.0781C109.101 64.0781 107.252 65.9268 107.252 68.2073Z" fill="#003B43"/>
                        <circle cx="54.9915" cy="7.12039" r="7.12039" fill="#003B43"/>
                        <path d="M83.1409 70.2101H36.1204V64.3325H83.1409V70.2101ZM70.4748 93.7203H65.5083V98.6869C63.6568 101.479 62.5695 104.8 62.5695 108.414C62.5695 109.413 62.687 110.383 62.834 111.353H36.1204V93.7203H33.1816V87.8428L36.1204 73.1489H83.1409L86.0797 87.8428V91.8101C84.2283 91.1636 82.2593 90.7816 80.2022 90.7816C76.5875 90.7816 73.2666 91.8689 70.4748 93.7203ZM59.6307 93.7203H41.998V105.475H59.6307V93.7203ZM80.0846 87.8428L78.3213 79.0264H40.94L39.1768 87.8428H80.0846Z" fill="black"/>
                        <path d="M83.1412 96.6592V105.476H91.9575V111.353H83.1412V120.169H77.2636V111.353H68.4473V105.476H77.2636V96.6592H83.1412Z" fill="#003B43"/>
                        </svg>

                        </div>
                        <span class="f-hahmlet fw-bolder text-blue-freedy mt-3">Find me</span>
                    </div>
                </div>
                <div class="col-12 mb-5">
                    <div class="row features-text d-flex align-items-start">
                        <div class="col-12 col-md-6 text-md-start">
                            <p class="f-jakarta"><span translate="no"> Blip Digital Bank </span> allows you to increase the visibility of your business
                                by including it in the
                                search section that will be in every single wallet of all the users.
                                <br>
                                In this way your company will be easily accessible and traceable by all users who use
                                <span translate="no"> Blip Digital Bank </span> for daily payments.
                            </p>
                            <h6 class="fw-bolder f-hahmlet mt-5 " style="color: #003B43;">
                                START TO APPLY NOW FOR FIND ME SERVICE
                            </h6>
                            <form id="form-input-unique-code" action="<?=base_url()?>link/getref" method="post" class="w-100 my-3">
                                <input 
                                    type="hidden" 
                                    id="token"
                                    name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                    value="<?php echo $this->security->get_csrf_hash(); ?>" 
                                    class="input-unique-code"    
                                >   
                                <div class="row d-flex flex-column flex-md-row justify-content-center align-items-center justify-content-lg-start">
                                    <div class="col-12 col-md-9 col-lg-7 col-xl-5">
                                        <input type="text" name="ucode" maxlength="8" class="input-unique-code" placeholder="Enter your Unique Code">
                                    </div>
                                    <div class="col-12 col-md-3 col-lg-2">
                                        <button type="submit" class="btn-unique-code d-flex justify-content-center align-items-center btn my-3">
                                            <span class="mx-3">
                                                Next
                                            </span>
                                            <div class="circle-btn-unique-code flex justify-content-center">
                                                <i class="ri-arrow-right-line fs-4"></i>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <h6 class="fw-bolder f-hahmlet my-5" style="color: #1D003F;">
                                How to register to FIND ME service :
                            </h6>
                            
                            <div class="col-12 d-flex flex-column justify-content-center">
                                <div class="content-freedy line text-start d-flex flex-row">
                                
                                </div>
                            </div>
                        </div>
                            
                        <div class="col-6 d-none d-md-block mx-auto">
                            <img src="<?= base_url() ?>assets/img/img-17.svg" alt="img" class="img-fluid">
                        </div>
                        
                        <div class="d-none d-md-block col-12 col-lg-10 features-text mt-4">
                            <p class="f-jakarta">
                                Enter your unique code in order to validate your account, then click next and fill out all the fields that you find on the next pages, make sure to have ready an image of your business logo of and prepare the google maps link your business location
                            </p>

                            <p class="f-jakarta">
                                If you encounter problems while applying, contact our support service :
                            </p>

                            <p class="fw-semibold f-jakarta text-decoration-underline">
                                    contact@BlipDigitalBank.com
                            </p>
                        </div>
                    </div>
                </div>
                
            <?php } ?>
            <!-- End Findme -->
            
            <!-- Start Collection & Payment -->
            <?php if ($guide == 8) { ?>
                <div class="col-12 my-5">
                    <div class="logo-text text-center features-text">
                        <svg width="123" height="123" viewBox="0 0 123 123" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M92.19 13.3726C68.5603 13.8133 52.1057 1.87552 40.7179 2.09077C29.3302 2.30602 5.53991 9.29651 6.5205 61.6774C7.50108 114.058 39.8125 121.141 52.338 120.909C110.982 119.812 134.034 12.5902 92.19 13.3726Z" fill="#EFEFEF"/>
                            <path d="M22.5723 11.6475L27.4042 6.81557L29.8201 9.23151L24.9882 14.0634L22.5723 11.6475Z" fill="#B6A4C1"/>
                            <path d="M8.67712 25.5371L13.5114 20.7028L15.9274 23.1187L11.0931 27.9531L8.67712 25.5371Z" fill="#B6A4C1"/>
                            <path d="M8.68201 8.62891L11.098 6.21296L15.9323 11.0473L13.5163 13.4632L8.68201 8.62891Z" fill="#B6A4C1"/>
                            <path d="M113.533 52.7637C110.707 52.7637 108.408 50.4643 108.408 47.6387C108.408 44.8131 110.707 42.5137 113.533 42.5137C116.359 42.5137 118.658 44.8131 118.658 47.6387C118.658 50.4643 116.359 52.7637 113.533 52.7637ZM113.533 45.9303C112.593 45.9303 111.825 46.6957 111.825 47.6387C111.825 48.5817 112.593 49.347 113.533 49.347C114.473 49.347 115.241 48.5817 115.241 47.6387C115.241 46.6957 114.473 45.9303 113.533 45.9303Z" fill="#B6A4C1"/>
                            <path d="M96.5208 38.4375H26.4792C24.5932 38.4375 23.0625 36.9068 23.0625 35.0208V26.4792C23.0625 24.5932 24.5932 23.0625 26.4792 23.0625H96.5208C98.4068 23.0625 99.9375 24.5932 99.9375 26.4792V35.0208C99.9375 36.9068 98.4068 38.4375 96.5208 38.4375Z" fill="#B90B0B"/>
                            <path d="M92.25 69.1875C88.0031 69.1875 84.5625 65.7469 84.5625 61.5C84.5625 57.2531 88.0031 53.8125 92.25 53.8125C96.4969 53.8125 99.9375 57.2531 99.9375 61.5C99.9375 65.7469 96.4969 69.1875 92.25 69.1875Z" fill="#B90B0B"/>
                            <path d="M92.25 99.9375C88.0031 99.9375 84.5625 96.4969 84.5625 92.25C84.5625 88.0031 88.0031 84.5625 92.25 84.5625C96.4969 84.5625 99.9375 88.0031 99.9375 92.25C99.9375 96.4969 96.4969 99.9375 92.25 99.9375Z" fill="#B90B0B"/>
                            <path d="M30.75 35.0208V26.4792C30.75 24.5932 32.2807 23.0625 34.1667 23.0625H26.4792C24.5932 23.0625 23.0625 24.5932 23.0625 26.4792V35.0208C23.0625 36.9068 24.5932 38.4375 26.4792 38.4375H34.1667C32.2807 38.4375 30.75 36.9068 30.75 35.0208Z" fill="#D5DBE1"/>
                            <path d="M92.25 61.5C92.25 58.6608 93.8046 56.211 96.0938 54.8785C94.9594 54.2191 93.6577 53.8125 92.25 53.8125C88.0031 53.8125 84.5625 57.2531 84.5625 61.5C84.5625 65.7469 88.0031 69.1875 92.25 69.1875C93.6577 69.1875 94.9594 68.7809 96.0938 68.1215C93.8046 66.789 92.25 64.3393 92.25 61.5Z" fill="#B90B0B"/>
                            <path d="M92.25 92.25C92.25 89.4108 93.8046 86.961 96.0938 85.6285C94.9594 84.9691 93.6577 84.5625 92.25 84.5625C88.0031 84.5625 84.5625 88.0031 84.5625 92.25C84.5625 96.4969 88.0031 99.9375 92.25 99.9375C93.6577 99.9375 94.9594 99.5309 96.0938 98.8715C93.8046 97.539 92.25 95.0893 92.25 92.25Z" fill="#B90B0B"/>
                            <path d="M96.5224 41H26.4808C23.1837 41 20.5016 38.3179 20.5016 35.0208V26.4792C20.5016 23.1821 23.1837 20.5 26.4808 20.5H96.5224C99.8195 20.5 102.502 23.1821 102.502 26.4792V35.0208C102.502 38.3179 99.8195 41 96.5224 41ZM26.4808 25.625C26.0093 25.625 25.6266 26.0077 25.6266 26.4792V35.0208C25.6266 35.4923 26.0093 35.875 26.4808 35.875H96.5224C96.9939 35.875 97.3766 35.4923 97.3766 35.0208V26.4792C97.3766 26.0077 96.9939 25.625 96.5224 25.625H26.4808Z" fill="black"/>
                            <path d="M23.0625 54.667H72.6042V59.792H23.0625V54.667Z" fill="black"/>
                            <path d="M23.0625 64.916H72.6042V70.041H23.0625V64.916Z" fill="black"/>
                            <path d="M23.0625 85.417H72.6042V90.542H23.0625V85.417Z" fill="black"/>
                            <path d="M23.0625 95.667H72.6042V100.792H23.0625V95.667Z" fill="black"/>
                            <path d="M92.2515 71.75C86.6003 71.75 82.0015 67.1512 82.0015 61.5C82.0015 55.8488 86.6003 51.25 92.2515 51.25C97.9026 51.25 102.501 55.8488 102.501 61.5C102.501 67.1512 97.9026 71.75 92.2515 71.75ZM92.2515 56.375C89.4259 56.375 87.1265 58.6744 87.1265 61.5C87.1265 64.3256 89.4259 66.625 92.2515 66.625C95.0771 66.625 97.3765 64.3256 97.3765 61.5C97.3765 58.6744 95.0771 56.375 92.2515 56.375Z" fill="black"/>
                            <path d="M92.2515 102.5C86.6003 102.5 82.0015 97.9012 82.0015 92.25C82.0015 86.5988 86.6003 82 92.2515 82C97.9026 82 102.501 86.5988 102.501 92.25C102.501 97.9012 97.9026 102.5 92.2515 102.5ZM92.2515 87.125C89.4259 87.125 87.1265 89.4244 87.1265 92.25C87.1265 95.0756 89.4259 97.375 92.2515 97.375C95.0771 97.375 97.3765 95.0756 97.3765 92.25C97.3765 89.4244 95.0771 87.125 92.2515 87.125Z" fill="black"/>
                        </svg>
                        <span class="f-hahmlet title-top-header fw-bolder text-marron-blip mt-4">Collections and Payments</span>
                    </div>
                </div>
                <div class="col-12 mb-5">
                    <div class="content-freedy">
                        <div class="row features-text mx-auto">
                            <div class="col-12 col-md-7">
                                <p class="guide-text">
                                    <span translate="no"> Blip Digital Bank </span> offers your company, a multi-currency collection
                                    and payment system that
                                    can
                                    be easily integrated into your e-commerce :
                                </p>
                                <div class="col-12 d-flex flex-column justify-content-center">
                                    <div class="content-freedy circle text-start d-flex flex-row">
                                        <ul class="ps-0 f-jakarta">
                                            <li class="ali text-black">Integration is free of charge</li>
                                            <li class="ali text-black">No monthly and no annual fees</li>
                                            <li class="ali text-black">Collections in real time from users of the <span translate="no"> Blip Digital Bank </span> circuit
                                            </li>
                                            <li class="ali text-black">Cheaper than credit cards</li>
                                            <li class="ali text-black">Reception and sending of national and international bank transfers at the lowest rates on the market</li>
                                            <li class="ali text-black">100% secure and free custody of funds</li>
                                            <li class="ali text-black">Possibility of converting instantly to and from other currencies.</li>
                                            <li class="ali text-black">Eliminates the problem of tedious changes compared to the use of
                                                cash</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                            <div class="col-5 d-none d-md-block ">
                                <img src="<?= base_url() ?>assets/img/img-13.svg" alt="img" class="img-fluid">
                            </div>
                            <div class="col-12 features-text">
                                <h4 class="text-dark f-jakarta">Request the service by contacting : </h4>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!-- End Collection & Payment -->
        </div>
    </div>
</section><!-- End Hero -->


<!-- Notifikasi -->
<?php if (@isset($_SESSION["success"])) { ?>
<div class="alert alert-success alert-dismissible" id="success-alert" style="display: grid; position: fixed; top: 10px; z-index: 99999; padding: 1rem;
left: 0;
right: 0;
max-width: 300px;
margin: 0 auto;">
    <?= $_SESSION["success"]; ?>
</div>
<?php } ?>

<?php if (@isset($_SESSION["failed"])) { ?>
<div class="alert alert-danger alert-dismissible" id="danger-alert" style="display: grid; position: fixed; top: 10px; z-index: 99999; padding: 1rem;
left: 0;
right: 0;
max-width: 300px;
margin: 0 auto;">
    <?= $_SESSION["failed"]; ?>
</div>
<?php } ?>