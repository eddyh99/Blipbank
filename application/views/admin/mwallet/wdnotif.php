<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="col-12 col-md-6 card mb-5 mt-3 text-center mx-auto">
                <div class="card-body">
                    <div class="col-12 my-5">
                        <img src="<?= base_url() ?>assets/img/logoblip.svg" alt="" style="width: 100px;">
                        <span class="mt-3" style="display: block;">Your transfer successed</span>
                    </div>
                    <a href="<?= base_url() ?>admin/mwallet?cur=<?= $_SESSION['currency']?>"
                        class="btn btn-freedy-red px-4 py-2 shadow-none mb-5">Back</a>
                </div>
            </div>
        </div>
    </main>
</div>