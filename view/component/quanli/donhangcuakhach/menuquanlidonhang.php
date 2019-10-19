<div class=row>
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center">
        <h3 class="text-danger">QUẢN LÍ ĐƠN HÀNG</h3>
    </div>

    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
        <div class="card mb-3">
            <div class="card-header bg-dark text-light">
                Menu
            </div>
            <div class="card-body bg-secondary">
                <div class="">
                    <div class="">
                        <a href="index.php?page=quanlidonhang&yc=duyetdonhang" class="btn btn-warning w-100">Duyệt đơn hàng chờ</a>
                    </div>

                    <div class="">
                        <a href="index.php?page=quanlidonhang&yc=daduyet" class="btn btn-primary w-100 mt-3">Đơn hàng đã duyệt</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9">
        <?php require "show.php"; ?>
    </div>
</div>