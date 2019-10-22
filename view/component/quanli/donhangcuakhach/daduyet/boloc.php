<div class="card mb-3">
    <div class="card-header bg-dark text-light">
        Lọc / Tìm kiếm
    </div>
    <div class="card-body bg-secondary">
        <p>
            <a class="btn btn-success" data-toggle="collapse" href="#loccongno" role="button" aria-expanded="false" aria-controls="collapseExample">
                Lọc theo công nợ
            </a>
            <a class="btn btn-danger" data-toggle="collapse" href="#lochangton" role="button" aria-expanded="false" aria-controls="collapseExample">
                Lọc theo hàng tồn
            </a>
        </p>
        <div class="collapse" id="loccongno">
            <div class="card card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Nhập tên: </label>
                                <input type="text" class="form-control rounded-pill" id="tenkhachhangtim" onkeyup="TimTenKhachHang()">
                            </div>
                            <div class="col-md-6">
                                <label for="">Nhập số điện thoại: </label>
                                <input type="text" class="form-control rounded-pill" id="sodienthoaikhachhangtim" onkeyup="TimTenKhachHang()">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Ngày bắt đầu: </label>
                                <input type="date" class="form-control rounded-pill" id="ngaybatdautim" onkeyup="TimTenKhachHang()">
                            </div>
                            <div class="col-md-6">
                                <label for="">Ngày kết thúc tìm: </label>
                                <input type="date" class="form-control rounded-pill" id="ngayketthuctim" onkeyup="TimTenKhachHang()">
                            </div>
                        </div>
                    </div>
                    
                </form>
                <button class="btn btn-success col-3" onclick="TimTenKhachHang()">Lọc theo ngày</button>
            </div>
        </div>

        <p>
            
        </p>
        <div class="collapse" id="lochangton">
            <div class="card card-body">
                Lọc theo hàng tồn ở đây
            </div>
        </div>
    </div>
</div>