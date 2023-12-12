<div class="d-flex justify-content-center">
    <div class="col-12 col-lg-8 col-xl-6">
        <div class="container" style="margin-bottom: 8rem;">
            <div class="app-container py-5">
                <?php $this->load->view("tamplate/banner-nofiat-balance"); ?>
                <?php if (@isset($_SESSION["failed"])) { ?>
                    <div class="col-12 alert alert-danger alert-dismissible fade show" role="alert">
                        <span class="notif-login f-poppins"><?= $_SESSION["failed"] ?></span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php } ?>
                <div class="d-flex flex-column mx-auto justify-content-center w-100 mb-4">
                    <a class="d-flex justify-content-center" href="<?= base_url() ?>homepage">
                        <svg width="274" height="67" viewBox="0 0 274 67" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="1" y="0.5" width="271.562" height="65.033" rx="7.5" stroke="#B90B0B"/>
                            <path d="M123.646 41H120.305L120.326 38.8623H123.646C124.612 38.8623 125.422 38.651 126.073 38.2285C126.732 37.806 127.226 37.2008 127.556 36.4131C127.892 35.6253 128.061 34.6872 128.061 33.5986V32.75C128.061 31.9049 127.964 31.1566 127.771 30.5049C127.584 29.8532 127.305 29.3053 126.933 28.8613C126.567 28.4173 126.116 28.0807 125.579 27.8516C125.049 27.6224 124.437 27.5078 123.742 27.5078H120.24V25.3594H123.742C124.781 25.3594 125.729 25.5348 126.589 25.8857C127.448 26.2295 128.189 26.7272 128.812 27.3789C129.443 28.0306 129.926 28.8112 130.263 29.7207C130.599 30.6302 130.768 31.6471 130.768 32.7715V33.5986C130.768 34.723 130.599 35.7399 130.263 36.6494C129.926 37.5589 129.443 38.3395 128.812 38.9912C128.182 39.6357 127.43 40.1335 126.557 40.4844C125.69 40.8281 124.72 41 123.646 41ZM121.798 25.3594V41H119.102V25.3594H121.798ZM139.77 38.6689V33.126C139.77 32.7106 139.694 32.3525 139.544 32.0518C139.394 31.751 139.164 31.5182 138.856 31.3535C138.556 31.1888 138.176 31.1064 137.718 31.1064C137.295 31.1064 136.93 31.1781 136.622 31.3213C136.314 31.4645 136.074 31.6579 135.902 31.9014C135.73 32.1449 135.645 32.4206 135.645 32.7285H133.066C133.066 32.2702 133.177 31.8262 133.399 31.3965C133.621 30.9668 133.944 30.5837 134.366 30.2471C134.789 29.9105 135.294 29.6455 135.881 29.4521C136.468 29.2588 137.127 29.1621 137.857 29.1621C138.731 29.1621 139.505 29.3089 140.178 29.6025C140.858 29.8962 141.392 30.3402 141.778 30.9346C142.172 31.5218 142.369 32.2594 142.369 33.1475V38.3145C142.369 38.8444 142.405 39.3206 142.477 39.7432C142.555 40.1585 142.666 40.5202 142.81 40.8281V41H140.156C140.035 40.7207 139.938 40.3662 139.866 39.9365C139.802 39.4997 139.77 39.0771 139.77 38.6689ZM140.146 33.9316L140.167 35.5322H138.309C137.829 35.5322 137.406 35.5788 137.041 35.6719C136.676 35.7578 136.371 35.8867 136.128 36.0586C135.884 36.2305 135.702 36.4382 135.58 36.6816C135.458 36.9251 135.397 37.2008 135.397 37.5088C135.397 37.8167 135.469 38.0996 135.612 38.3574C135.756 38.6081 135.963 38.805 136.235 38.9482C136.515 39.0915 136.851 39.1631 137.245 39.1631C137.775 39.1631 138.237 39.0557 138.631 38.8408C139.032 38.6188 139.347 38.3503 139.576 38.0352C139.805 37.7129 139.927 37.4085 139.941 37.1221L140.779 38.2715C140.693 38.5651 140.547 38.8802 140.339 39.2168C140.131 39.5534 139.859 39.8757 139.522 40.1836C139.193 40.4844 138.796 40.7314 138.33 40.9248C137.872 41.1182 137.342 41.2148 136.74 41.2148C135.981 41.2148 135.304 41.0645 134.71 40.7637C134.116 40.4557 133.65 40.0439 133.313 39.5283C132.977 39.0055 132.809 38.4147 132.809 37.7559C132.809 37.14 132.923 36.5957 133.152 36.123C133.389 35.6432 133.732 35.2422 134.184 34.9199C134.642 34.5977 135.201 34.3542 135.859 34.1895C136.518 34.0176 137.27 33.9316 138.115 33.9316H140.146ZM151.597 37.8525C151.597 37.5947 151.532 37.362 151.403 37.1543C151.274 36.9395 151.027 36.7461 150.662 36.5742C150.304 36.4023 149.774 36.2448 149.072 36.1016C148.456 35.9655 147.891 35.8044 147.375 35.6182C146.867 35.4248 146.43 35.1921 146.064 34.9199C145.699 34.6478 145.416 34.3255 145.216 33.9531C145.015 33.5807 144.915 33.151 144.915 32.6641C144.915 32.1914 145.019 31.7438 145.227 31.3213C145.434 30.8988 145.731 30.5264 146.118 30.2041C146.505 29.8818 146.974 29.6276 147.525 29.4414C148.084 29.2552 148.707 29.1621 149.395 29.1621C150.368 29.1621 151.203 29.3268 151.897 29.6562C152.599 29.9785 153.136 30.4189 153.509 30.9775C153.881 31.529 154.067 32.152 154.067 32.8467H151.479C151.479 32.5387 151.4 32.2523 151.242 31.9873C151.092 31.7152 150.863 31.4967 150.555 31.332C150.247 31.1602 149.86 31.0742 149.395 31.0742C148.951 31.0742 148.582 31.1458 148.288 31.2891C148.002 31.4251 147.787 31.6042 147.644 31.8262C147.507 32.0482 147.439 32.2917 147.439 32.5566C147.439 32.75 147.475 32.9255 147.547 33.083C147.626 33.2334 147.755 33.373 147.934 33.502C148.113 33.6237 148.356 33.7383 148.664 33.8457C148.979 33.9531 149.373 34.057 149.846 34.1572C150.734 34.3434 151.496 34.5833 152.134 34.877C152.778 35.1634 153.272 35.5358 153.616 35.9941C153.96 36.4453 154.132 37.0182 154.132 37.7129C154.132 38.2285 154.021 38.7012 153.799 39.1309C153.584 39.5534 153.269 39.9222 152.854 40.2373C152.438 40.5452 151.94 40.7852 151.36 40.957C150.787 41.1289 150.143 41.2148 149.427 41.2148C148.374 41.2148 147.482 41.0286 146.752 40.6562C146.021 40.2767 145.466 39.7933 145.087 39.2061C144.715 38.6117 144.528 37.9958 144.528 37.3584H147.031C147.06 37.8382 147.192 38.2214 147.429 38.5078C147.672 38.7871 147.973 38.9912 148.331 39.1201C148.696 39.2419 149.072 39.3027 149.459 39.3027C149.924 39.3027 150.315 39.2419 150.63 39.1201C150.945 38.9912 151.185 38.8193 151.35 38.6045C151.514 38.3825 151.597 38.1318 151.597 37.8525ZM158.955 24.5V41H156.377V24.5H158.955ZM158.504 34.7588L157.666 34.748C157.673 33.946 157.784 33.2048 157.999 32.5244C158.221 31.8441 158.529 31.2533 158.923 30.752C159.324 30.2435 159.804 29.8532 160.362 29.5811C160.921 29.3018 161.54 29.1621 162.221 29.1621C162.794 29.1621 163.309 29.2409 163.768 29.3984C164.233 29.556 164.634 29.8102 164.971 30.1611C165.307 30.5049 165.562 30.9561 165.733 31.5146C165.912 32.0661 166.002 32.7393 166.002 33.5342V41H163.402V33.5127C163.402 32.9541 163.32 32.5101 163.155 32.1807C162.998 31.8512 162.765 31.6149 162.457 31.4717C162.149 31.3213 161.773 31.2461 161.329 31.2461C160.864 31.2461 160.452 31.3392 160.094 31.5254C159.743 31.7116 159.449 31.9658 159.213 32.2881C158.977 32.6104 158.798 32.9827 158.676 33.4053C158.561 33.8278 158.504 34.279 158.504 34.7588ZM168.634 24.5H171.223V38.5186L170.976 41H168.634V24.5ZM178.807 35.0811V35.3066C178.807 36.166 178.71 36.9574 178.517 37.6807C178.33 38.3968 178.044 39.0199 177.657 39.5498C177.278 40.0798 176.805 40.4915 176.239 40.7852C175.681 41.0716 175.033 41.2148 174.295 41.2148C173.572 41.2148 172.941 41.0788 172.404 40.8066C171.867 40.5345 171.416 40.1478 171.051 39.6465C170.693 39.1452 170.403 38.5472 170.181 37.8525C169.959 37.1579 169.801 36.3916 169.708 35.5537V34.834C169.801 33.9889 169.959 33.2227 170.181 32.5352C170.403 31.8405 170.693 31.2425 171.051 30.7412C171.416 30.2327 171.864 29.8424 172.394 29.5703C172.931 29.2982 173.557 29.1621 174.273 29.1621C175.018 29.1621 175.674 29.3053 176.239 29.5918C176.812 29.8783 177.288 30.2865 177.668 30.8164C178.048 31.3392 178.33 31.9622 178.517 32.6855C178.71 33.4089 178.807 34.2074 178.807 35.0811ZM176.218 35.3066V35.0811C176.218 34.5583 176.175 34.0677 176.089 33.6094C176.003 33.1439 175.86 32.7357 175.659 32.3848C175.466 32.0339 175.201 31.7581 174.864 31.5576C174.535 31.3499 174.123 31.2461 173.629 31.2461C173.171 31.2461 172.777 31.3249 172.447 31.4824C172.118 31.64 171.842 31.8548 171.62 32.127C171.398 32.3991 171.223 32.7142 171.094 33.0723C170.972 33.4303 170.89 33.8171 170.847 34.2324V36.1768C170.911 36.7139 171.047 37.208 171.255 37.6592C171.47 38.1032 171.771 38.4613 172.157 38.7334C172.544 38.9984 173.042 39.1309 173.65 39.1309C174.13 39.1309 174.535 39.0342 174.864 38.8408C175.194 38.6475 175.455 38.3789 175.648 38.0352C175.849 37.6842 175.992 37.276 176.078 36.8105C176.171 36.3451 176.218 35.8438 176.218 35.3066ZM180.504 35.3174V35.0703C180.504 34.2324 180.626 33.4554 180.869 32.7393C181.113 32.016 181.464 31.3893 181.922 30.8594C182.387 30.3223 182.953 29.9069 183.619 29.6133C184.292 29.3125 185.051 29.1621 185.896 29.1621C186.749 29.1621 187.508 29.3125 188.174 29.6133C188.847 29.9069 189.416 30.3223 189.882 30.8594C190.347 31.3893 190.702 32.016 190.945 32.7393C191.189 33.4554 191.311 34.2324 191.311 35.0703V35.3174C191.311 36.1553 191.189 36.9323 190.945 37.6484C190.702 38.3646 190.347 38.9912 189.882 39.5283C189.416 40.0583 188.851 40.4736 188.185 40.7744C187.519 41.068 186.763 41.2148 185.918 41.2148C185.066 41.2148 184.303 41.068 183.63 40.7744C182.964 40.4736 182.398 40.0583 181.933 39.5283C181.467 38.9912 181.113 38.3646 180.869 37.6484C180.626 36.9323 180.504 36.1553 180.504 35.3174ZM183.093 35.0703V35.3174C183.093 35.8402 183.146 36.3343 183.254 36.7998C183.361 37.2653 183.53 37.6735 183.759 38.0244C183.988 38.3753 184.282 38.651 184.64 38.8516C184.998 39.0521 185.424 39.1523 185.918 39.1523C186.398 39.1523 186.813 39.0521 187.164 38.8516C187.522 38.651 187.816 38.3753 188.045 38.0244C188.274 37.6735 188.442 37.2653 188.55 36.7998C188.664 36.3343 188.722 35.8402 188.722 35.3174V35.0703C188.722 34.5547 188.664 34.0677 188.55 33.6094C188.442 33.1439 188.271 32.7321 188.034 32.374C187.805 32.016 187.511 31.7367 187.153 31.5361C186.802 31.3285 186.383 31.2246 185.896 31.2246C185.41 31.2246 184.987 31.3285 184.629 31.5361C184.278 31.7367 183.988 32.016 183.759 32.374C183.53 32.7321 183.361 33.1439 183.254 33.6094C183.146 34.0677 183.093 34.5547 183.093 35.0703ZM200.033 38.6689V33.126C200.033 32.7106 199.958 32.3525 199.808 32.0518C199.657 31.751 199.428 31.5182 199.12 31.3535C198.819 31.1888 198.44 31.1064 197.981 31.1064C197.559 31.1064 197.194 31.1781 196.886 31.3213C196.578 31.4645 196.338 31.6579 196.166 31.9014C195.994 32.1449 195.908 32.4206 195.908 32.7285H193.33C193.33 32.2702 193.441 31.8262 193.663 31.3965C193.885 30.9668 194.207 30.5837 194.63 30.2471C195.052 29.9105 195.557 29.6455 196.145 29.4521C196.732 29.2588 197.391 29.1621 198.121 29.1621C198.995 29.1621 199.768 29.3089 200.441 29.6025C201.122 29.8962 201.655 30.3402 202.042 30.9346C202.436 31.5218 202.633 32.2594 202.633 33.1475V38.3145C202.633 38.8444 202.669 39.3206 202.74 39.7432C202.819 40.1585 202.93 40.5202 203.073 40.8281V41H200.42C200.298 40.7207 200.201 40.3662 200.13 39.9365C200.065 39.4997 200.033 39.0771 200.033 38.6689ZM200.409 33.9316L200.431 35.5322H198.572C198.092 35.5322 197.67 35.5788 197.305 35.6719C196.939 35.7578 196.635 35.8867 196.392 36.0586C196.148 36.2305 195.965 36.4382 195.844 36.6816C195.722 36.9251 195.661 37.2008 195.661 37.5088C195.661 37.8167 195.733 38.0996 195.876 38.3574C196.019 38.6081 196.227 38.805 196.499 38.9482C196.778 39.0915 197.115 39.1631 197.509 39.1631C198.039 39.1631 198.501 39.0557 198.895 38.8408C199.296 38.6188 199.611 38.3503 199.84 38.0352C200.069 37.7129 200.191 37.4085 200.205 37.1221L201.043 38.2715C200.957 38.5651 200.81 38.8802 200.603 39.2168C200.395 39.5534 200.123 39.8757 199.786 40.1836C199.457 40.4844 199.059 40.7314 198.594 40.9248C198.135 41.1182 197.605 41.2148 197.004 41.2148C196.245 41.2148 195.568 41.0645 194.974 40.7637C194.379 40.4557 193.914 40.0439 193.577 39.5283C193.241 39.0055 193.072 38.4147 193.072 37.7559C193.072 37.14 193.187 36.5957 193.416 36.123C193.652 35.6432 193.996 35.2422 194.447 34.9199C194.906 34.5977 195.464 34.3542 196.123 34.1895C196.782 34.0176 197.534 33.9316 198.379 33.9316H200.409ZM207.939 31.5898V41H205.351V29.377H207.821L207.939 31.5898ZM211.495 29.3018L211.474 31.708C211.316 31.6794 211.144 31.6579 210.958 31.6436C210.779 31.6292 210.6 31.6221 210.421 31.6221C209.977 31.6221 209.587 31.6865 209.25 31.8154C208.913 31.9372 208.631 32.1162 208.401 32.3525C208.179 32.5817 208.007 32.861 207.886 33.1904C207.764 33.5199 207.692 33.8887 207.671 34.2969L207.08 34.3398C207.08 33.6094 207.152 32.9326 207.295 32.3096C207.438 31.6865 207.653 31.1387 207.939 30.666C208.233 30.1934 208.598 29.8245 209.035 29.5596C209.479 29.2946 209.991 29.1621 210.571 29.1621C210.729 29.1621 210.897 29.1764 211.076 29.2051C211.262 29.2337 211.402 29.266 211.495 29.3018ZM219.992 38.5938V24.5H222.592V41H220.239L219.992 38.5938ZM212.43 35.3174V35.0918C212.43 34.2109 212.534 33.4089 212.741 32.6855C212.949 31.9551 213.25 31.3285 213.644 30.8057C214.037 30.2757 214.517 29.8711 215.083 29.5918C215.649 29.3053 216.286 29.1621 216.995 29.1621C217.697 29.1621 218.313 29.2982 218.843 29.5703C219.373 29.8424 219.824 30.2327 220.196 30.7412C220.569 31.2425 220.866 31.8441 221.088 32.5459C221.31 33.2406 221.467 34.014 221.561 34.8662V35.5859C221.467 36.4167 221.31 37.1758 221.088 37.8633C220.866 38.5508 220.569 39.1452 220.196 39.6465C219.824 40.1478 219.369 40.5345 218.832 40.8066C218.302 41.0788 217.683 41.2148 216.974 41.2148C216.272 41.2148 215.638 41.068 215.072 40.7744C214.514 40.4808 214.037 40.069 213.644 39.5391C213.25 39.0091 212.949 38.3861 212.741 37.6699C212.534 36.9466 212.43 36.1624 212.43 35.3174ZM215.019 35.0918V35.3174C215.019 35.8473 215.065 36.3415 215.158 36.7998C215.258 37.2581 215.412 37.6628 215.62 38.0137C215.828 38.3574 216.096 38.6296 216.426 38.8301C216.762 39.0234 217.163 39.1201 217.629 39.1201C218.216 39.1201 218.7 38.9912 219.079 38.7334C219.459 38.4756 219.756 38.1283 219.971 37.6914C220.193 37.2474 220.343 36.7533 220.422 36.209V34.2646C220.379 33.8421 220.289 33.4482 220.153 33.083C220.024 32.7178 219.849 32.3991 219.627 32.127C219.405 31.8477 219.129 31.6328 218.8 31.4824C218.478 31.3249 218.094 31.2461 217.65 31.2461C217.178 31.2461 216.777 31.3464 216.447 31.5469C216.118 31.7474 215.846 32.0231 215.631 32.374C215.423 32.7249 215.269 33.1331 215.169 33.5986C215.069 34.0641 215.019 34.5618 215.019 35.0918Z" fill="#B90B0B"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M68.5813 35.9026C69.603 35.9026 70.4312 36.7309 70.4312 37.7526V48.8526C70.4312 49.8744 69.603 50.7026 68.5813 50.7026H55.6313C54.6095 50.7026 53.7812 49.8744 53.7812 48.8526V37.7526C53.7812 36.7309 54.6095 35.9026 55.6313 35.9026H68.5813ZM88.9313 26.6526C89.953 26.6526 90.7812 27.4809 90.7812 28.5026V48.8526C90.7812 49.8744 89.953 50.7026 88.9313 50.7026H75.9813C74.9595 50.7026 74.1313 49.8744 74.1313 48.8526V28.5026C74.1313 27.4809 74.9595 26.6526 75.9813 26.6526H88.9313ZM68.5813 13.7026C69.603 13.7026 70.4312 14.5309 70.4312 15.5526V30.3526C70.4312 31.3744 69.603 32.2026 68.5813 32.2026H55.6313C54.6095 32.2026 53.7812 31.3744 53.7812 30.3526V15.5526C53.7812 14.5309 54.6095 13.7026 55.6313 13.7026H68.5813ZM88.9313 13.7026C89.953 13.7026 90.7812 14.5309 90.7812 15.5526V21.1026C90.7812 22.1244 89.953 22.9526 88.9313 22.9526H75.9813C74.9595 22.9526 74.1313 22.1244 74.1313 21.1026V15.5526C74.1313 14.5309 74.9595 13.7026 75.9813 13.7026H88.9313Z" fill="#B90B0B"/>
                        </svg>
                    </a>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-12 menus-list-app mb-4">
                        <div class="col-12 text-center">
                            <div class="row">
                                <div class="col-6">
                                    <a href="<?= base_url() ?>receive"
                                        class="d-flex flex-column justify-content-center align-items-center py-2 my-3 menus-blue">
                                            <svg width="48" height="48" viewBox="0 0 48 48" fill=""
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M37.2868 3.84376C35.7428 3.84745 34.4893 5.05525 34.4893 6.52125V19.7813H40.3855C41.7755 19.7813 42.7491 19.3648 43.3715 18.7659C43.994 18.1669 44.4268 17.23 44.4268 15.8925V10.75C44.4268 8.85804 43.6246 7.13007 42.3242 5.85937C41.0388 4.62451 39.2487 3.86312 37.2868 3.84376ZM31.1768 6.52125C31.1768 3.272 33.9386 0.65625 37.2939 0.65625H37.3091L37.3091 0.656317C40.1562 0.681451 42.7778 1.78811 44.6704 3.6093L44.6785 3.61707L44.6785 3.6171C46.5557 5.44852 47.7393 7.96892 47.7393 10.75V15.8925C47.7393 17.9125 47.0678 19.7169 45.7138 21.0198C44.3598 22.3227 42.4846 22.9688 40.3855 22.9688H32.833C31.9183 22.9688 31.1768 22.2552 31.1768 21.375V6.52125Z"
                                                    fill="" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M2.59526 3.69725C4.37249 1.71688 7.09827 0.65625 10.7498 0.65625H37.2498C38.1646 0.65625 38.9061 1.3698 38.9061 2.25C38.9061 3.1302 38.1646 3.84375 37.2498 3.84375C35.7354 3.84375 34.4894 5.0427 34.4894 6.5V42.625C34.4894 45.6887 30.8534 47.4198 28.3126 45.6046L28.3074 45.6009L24.5137 42.8684C24.3233 42.7274 24.0189 42.7356 23.8239 42.9232L20.114 46.4932C18.6059 47.9444 16.1438 47.9444 14.6357 46.4932L14.6322 46.4898L10.97 42.9445C10.9696 42.9441 10.9703 42.9448 10.97 42.9445C10.7508 42.7345 10.4355 42.7243 10.2198 42.88L6.44992 45.5954C6.44844 45.5964 6.44696 45.5975 6.44548 45.5986C3.88781 47.458 0.260254 45.6923 0.260254 42.625V10.75C0.260254 8.19391 0.857238 5.63393 2.59526 3.69725ZM31.8432 3.84375H10.7498C7.7764 3.84375 6.08552 4.685 5.10233 5.78056C4.07994 6.91982 3.57275 8.60984 3.57275 10.75V42.625C3.57275 43.0835 4.09255 43.3149 4.44964 43.0546L4.45728 43.0491L8.23233 40.33C9.78295 39.2109 11.9414 39.3715 13.3122 40.6905L13.3158 40.6939L16.978 44.2393C16.9783 44.2396 16.9777 44.239 16.978 44.2393C17.1926 44.4447 17.5575 44.4453 17.7717 44.2393L21.4816 40.6693C22.8296 39.3722 24.992 39.2084 26.5235 40.3344L30.2872 43.0454C30.2878 43.0458 30.2884 43.0462 30.289 43.0467C30.6631 43.3118 31.1769 43.0456 31.1769 42.625V6.5C31.1769 5.54468 31.4175 4.64152 31.8432 3.84375Z"
                                                    fill="" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M9.09375 17.125C9.09375 16.2448 9.83528 15.5312 10.75 15.5312H24C24.9147 15.5312 25.6562 16.2448 25.6562 17.125C25.6562 18.0052 24.9147 18.7188 24 18.7188H10.75C9.83528 18.7188 9.09375 18.0052 9.09375 17.125Z"
                                                    fill="" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M10.75 25.625C10.75 24.7448 11.4915 24.0312 12.4062 24.0312H22.3438C23.2585 24.0312 24 24.7448 24 25.625C24 26.5052 23.2585 27.2188 22.3438 27.2188H12.4062C11.4915 27.2188 10.75 26.5052 10.75 25.625Z"
                                                    fill="" />
                                            </svg>
                                        <span>Deposit/Receive Funds</span>
                                    </a>
                                    <a href="<?= base_url() ?>bank"
                                        class="d-flex flex-column justify-content-center align-items-center py-2 my-3 menus-blue special">
                                            <svg width="39" height="36" viewBox="0 0 39 36" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M4.875 31.5H34.125M9.75 27V15M16.25 27V15M22.75 27V15M29.25 27V15M32.5 10.5L20.189 3.39749C19.939 3.25329 19.8141 3.18119 19.68 3.15307C19.5615 3.12822 19.4385 3.12822 19.32 3.15307C19.1859 3.18119 19.061 3.25329 18.811 3.39749L6.5 10.5H32.5Z"
                                                    stroke="" stroke-width="2.7" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        <span>Send to Bank</span>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="<?= base_url() ?>wallet"
                                        class="d-flex flex-column justify-content-center align-items-center py-2 my-3 menus-blue special">
                                            <svg
                                                width="64" height="63" viewBox="0 0 64 63" fill=""
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8.37502 17.0625V16.5C8.37502 13.6716 8.37502 12.2574 9.2537 11.3787C10.1324 10.5 11.5466 10.5 14.375 10.5L52 10.5C52.4714 10.5 52.7071 10.5 52.8536 10.6464C53 10.7929 53 11.0286 53 11.5V17.625C53 20.4534 53 21.8676 52.1213 22.7463C51.2426 23.625 49.8284 23.625 47 23.625L39.875 23.625M8.37502 17.0625V17.625C8.37502 20.4534 8.37502 21.8676 9.2537 22.7463C10.1324 23.625 11.5466 23.625 14.375 23.625L53.625 23.625C54.5678 23.625 55.0392 23.625 55.3321 23.9179C55.625 24.2108 55.625 24.6822 55.625 25.625L55.625 34.125M8.37502 17.0625L8.37502 51.125C8.37502 53.0106 8.37502 53.9534 8.96081 54.5392C9.54659 55.125 10.4894 55.125 12.375 55.125L53.625 55.125C54.5678 55.125 55.0392 55.125 55.3321 54.8321C55.625 54.5392 55.625 54.0678 55.625 53.125L55.625 44.625M55.625 44.625H41.875C40.9322 44.625 40.4608 44.625 40.1679 44.3321C39.875 44.0392 39.875 43.5678 39.875 42.625V36.125C39.875 35.1822 39.875 34.7108 40.1679 34.4179C40.4608 34.125 40.9322 34.125 41.875 34.125H55.625M55.625 44.625L55.625 34.125"
                                                    stroke="" stroke-width="3" />
                                            </svg>
                                        <span>Wallet to Wallet</span>
                                    </a>
                                    <a href="<?= base_url() ?>swap"
                                        class="d-flex flex-column justify-content-center align-items-center py-2 my-3 menus-blue">
                                            <svg width="58" height="57" viewBox="0 0 58 57" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M38.3665 55.8201C37.7301 55.8201 37.1408 55.4707 36.8344 54.9349C36.5279 54.3991 36.528 53.7234 36.858 53.1876L39.333 49.1106C39.828 48.2719 40.9123 48.0157 41.7609 48.5049C42.6095 48.9941 42.8688 50.0657 42.3738 50.9044L41.7373 51.9528C48.2431 50.4385 53.1225 44.6608 53.1225 37.7649C53.1225 36.8097 53.9239 36.0176 54.8904 36.0176C55.8568 36.0176 56.6583 36.8097 56.6583 37.7649C56.6347 47.7127 48.4317 55.8201 38.3665 55.8201Z"
                                                    fill="" />
                                                <path
                                                    d="M3.00812 20.8747C2.04167 20.8747 1.24023 20.0826 1.24023 19.1275C1.24023 9.17963 9.44321 1.07227 19.5084 1.07227C20.1448 1.07227 20.7341 1.42173 21.0405 1.95756C21.347 2.4934 21.347 3.16901 21.017 3.70484L18.5419 7.78182C18.0469 8.62051 16.9626 8.8768 16.114 8.38757C15.2654 7.89833 15.0062 6.82674 15.5012 5.98805L16.1376 4.93965C9.63179 6.45396 4.75243 12.2315 4.75243 19.1275C4.77601 20.0826 3.97456 20.8747 3.00812 20.8747Z"
                                                    fill="" />
                                                <path
                                                    d="M21.088 52.3955C12.0836 52.3955 4.77637 45.1502 4.77637 36.274C4.77637 27.3978 12.1072 20.1523 21.088 20.1523C21.5123 20.1523 21.8895 20.1757 22.3138 20.199C30.3046 20.8047 36.7633 27.1881 37.3526 35.0392C37.3761 35.5517 37.3997 35.9012 37.3997 36.274C37.4233 45.1502 30.0925 52.3955 21.088 52.3955ZM21.088 23.6237C14.0401 23.6237 8.31213 29.2849 8.31213 36.2507C8.31213 43.2165 14.0401 48.8776 21.088 48.8776C28.136 48.8776 33.8875 43.2165 33.8875 36.2507C33.8875 35.9478 33.8639 35.6449 33.8404 35.3421C33.3689 29.0984 28.301 24.1128 22.0781 23.6469C21.7716 23.6469 21.4416 23.6237 21.088 23.6237Z"
                                                    fill="" />
                                                <path
                                                    d="M36.7873 36.9027H35.6322C34.7129 36.9027 33.9351 36.2038 33.8644 35.2952C33.3929 29.1215 28.3486 24.1359 22.102 23.67C21.1827 23.6001 20.4756 22.8313 20.4756 21.9227V20.7812C20.4756 11.8817 27.8064 4.65967 36.8108 4.65967C45.8152 4.65967 53.1225 11.905 53.1225 20.7812C53.1225 29.6573 45.7681 36.9027 36.7873 36.9027ZM23.9878 20.3852C30.635 21.5733 35.9622 26.8151 37.1644 33.4081C44.0474 33.1985 49.5632 27.6072 49.5632 20.7812C49.5632 13.8154 43.8352 8.15422 36.7873 8.15422C29.8572 8.13093 24.1999 13.5824 23.9878 20.3852Z"
                                                    fill="" />
                                                <path
                                                    d="M20.4161 44.108V28.6534H21.4062V44.108H20.4161ZM23.2716 33.5977C23.2152 33.0704 22.9778 32.6599 22.5592 32.3661C22.1447 32.0723 21.6054 31.9254 20.9413 31.9254C20.4745 31.9254 20.074 31.9959 19.74 32.1367C19.4059 32.2776 19.1504 32.4687 18.9733 32.7102C18.7962 32.9517 18.7056 33.2274 18.7016 33.5373C18.7016 33.7949 18.76 34.0182 18.8767 34.2074C18.9974 34.3965 19.1604 34.5575 19.3657 34.6903C19.5709 34.8191 19.7983 34.9278 20.0479 35.0163C20.2974 35.1049 20.5489 35.1793 20.8025 35.2397L21.9616 35.5295C22.4284 35.6381 22.8772 35.785 23.3078 35.9702C23.7425 36.1553 24.1308 36.3887 24.4729 36.6705C24.819 36.9522 25.0927 37.2923 25.2939 37.6907C25.4952 38.0891 25.5958 38.556 25.5958 39.0913C25.5958 39.8157 25.4107 40.4536 25.0404 41.005C24.6701 41.5523 24.1349 41.9809 23.4346 42.2908C22.7383 42.5967 21.8952 42.7496 20.9051 42.7496C19.9432 42.7496 19.1081 42.6007 18.3998 42.3029C17.6955 42.0051 17.1441 41.5704 16.7456 40.9989C16.3512 40.4274 16.1379 39.7312 16.1057 38.9102H18.3092C18.3414 39.3408 18.4742 39.699 18.7077 39.9847C18.9411 40.2705 19.2449 40.4838 19.6192 40.6246C19.9975 40.7655 20.4201 40.8359 20.887 40.8359C21.374 40.8359 21.8006 40.7635 22.1668 40.6186C22.5371 40.4697 22.8269 40.2644 23.0361 40.0028C23.2454 39.7372 23.3521 39.4273 23.3561 39.0732C23.3521 38.7512 23.2575 38.4856 23.0724 38.2763C22.8872 38.063 22.6276 37.8859 22.2936 37.745C21.9636 37.6001 21.5772 37.4714 21.1345 37.3587L19.7279 36.9964C18.7097 36.7348 17.9047 36.3384 17.3131 35.8072C16.7255 35.2719 16.4317 34.5616 16.4317 33.6761C16.4317 32.9477 16.6289 32.3098 17.0233 31.7624C17.4218 31.2151 17.9631 30.7905 18.6473 30.4886C19.3315 30.1828 20.1062 30.0298 20.9715 30.0298C21.8489 30.0298 22.6176 30.1828 23.2776 30.4886C23.9417 30.7905 24.4629 31.2111 24.8412 31.7504C25.2195 32.2856 25.4147 32.9014 25.4268 33.5977H23.2716Z"
                                                    fill="" />
                                                <path
                                                    d="M40.6168 17.4911L40.0312 18.777H32.0202L32.4971 17.4911H40.6168ZM39.5 19.9844L38.8782 21.2884H32.0202L32.4971 19.9844H39.5ZM42.1381 14.201L41.2929 16C41.0997 15.8471 40.8804 15.6982 40.6349 15.5533C40.3894 15.4084 40.1177 15.2876 39.8199 15.1911C39.5221 15.0945 39.1961 15.0462 38.8419 15.0462C38.2423 15.0462 37.713 15.2051 37.2542 15.5231C36.7954 15.837 36.4352 16.3159 36.1736 16.9599C35.916 17.5998 35.7872 18.4107 35.7872 19.3928C35.7872 20.3748 35.916 21.1857 36.1736 21.8256C36.4352 22.4656 36.7954 22.9405 37.2542 23.2504C37.713 23.5603 38.2423 23.7152 38.8419 23.7152C39.1961 23.7152 39.5221 23.6689 39.8199 23.5763C40.1177 23.4838 40.3854 23.3671 40.6228 23.2262C40.8643 23.0853 41.0716 22.9445 41.2446 22.8036L42.1019 24.6026C41.6712 24.9769 41.1742 25.2586 40.6108 25.4478C40.0513 25.637 39.4617 25.7315 38.8419 25.7315C37.8116 25.7315 36.898 25.48 36.1012 24.9769C35.3083 24.4698 34.6865 23.7434 34.2358 22.7976C33.785 21.8478 33.5596 20.7128 33.5596 19.3928C33.5596 18.0687 33.785 16.9317 34.2358 15.9819C34.6865 15.0321 35.3083 14.3036 36.1012 13.7965C36.898 13.2854 37.8116 13.0298 38.8419 13.0298C39.4859 13.0298 40.0835 13.1325 40.6349 13.3377C41.1903 13.5389 41.6914 13.8267 42.1381 14.201Z"
                                                    fill="" />
                                            </svg>
                                        <span>Swap</span>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <a href="<?= base_url() ?>history"
                                        class="d-flex flex-column justify-content-center align-items-center py-2 my-3 menus-blue">
                                            <svg width="28" height="29" viewBox="0 0 28 29" fill=""
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M2.625 14.5C2.625 12.7334 4.06675 11.2917 5.83333 11.2917C7.59992 11.2917 9.04167 12.7334 9.04167 14.5C9.04167 16.2666 7.59991 17.7083 5.83333 17.7083C4.06675 17.7083 2.625 16.2666 2.625 14.5ZM5.83333 13.0417C5.03325 13.0417 4.375 13.6999 4.375 14.5C4.375 15.3001 5.03325 15.9583 5.83333 15.9583C6.63342 15.9583 7.29167 15.3001 7.29167 14.5C7.29167 13.6999 6.63342 13.0417 5.83333 13.0417Z"
                                                    fill="" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M18.9585 14.5C18.9585 12.7334 20.4002 11.2917 22.1668 11.2917C23.9334 11.2917 25.3752 12.7334 25.3752 14.5C25.3752 16.2666 23.9334 17.7083 22.1668 17.7083C20.4002 17.7083 18.9585 16.2666 18.9585 14.5ZM22.1668 13.0417C21.3667 13.0417 20.7085 13.6999 20.7085 14.5C20.7085 15.3001 21.3667 15.9583 22.1668 15.9583C22.9669 15.9583 23.6252 15.3001 23.6252 14.5C23.6252 13.6999 22.9669 13.0417 22.1668 13.0417Z"
                                                    fill="" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M10.7915 14.5C10.7915 12.7334 12.2333 11.2917 13.9998 11.2917C15.7664 11.2917 17.2082 12.7334 17.2082 14.5C17.2082 16.2666 15.7664 17.7083 13.9998 17.7083C12.2333 17.7083 10.7915 16.2666 10.7915 14.5ZM13.9998 13.0417C13.1998 13.0417 12.5415 13.6999 12.5415 14.5C12.5415 15.3001 13.1998 15.9583 13.9998 15.9583C14.7999 15.9583 15.4582 15.3001 15.4582 14.5C15.4582 13.6999 14.7999 13.0417 13.9998 13.0417Z"
                                                    fill="" />
                                            </svg>
                                        </svg>
                                        <span>History</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>