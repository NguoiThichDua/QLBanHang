<!-- MODEL SỬA CÔNG NỢ ĐƠN HÀNG -->
<div class="modal fade" id="suadonhangdaduyet" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thay đổi công nợ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="controller/donhangcontroller.php?yc=suacongno" method="post">
                    <div class="form-group">
                    <input type="text" name="madonhang" id="madonhangsuacongno" value="" class="form-control rounded-pill d-none" readonly required>
                        <label for="">Công nợ</label>
                        <input type="number" name="congno" value="" min="0" id="congnosua" class="form-control rounded-pill" required title="Giá trị phải lớn hơn 0">
                    </div>
                    <div class="modal-footer">
                        <input type="submit" value="Thay đổi" class="btn btn-danger">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>