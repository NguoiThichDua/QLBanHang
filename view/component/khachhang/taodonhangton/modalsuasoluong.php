<div class="modal fade" id="suasoluongctht" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-browns text-light">
                <h5 class="modal-title" id="exampleModalLabel">Thay đổi số lượng</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body bg-brown text-light">
                <form action="controller/hangtoncontroller.php?yc=suamonhangcuahangton&mahangton=<?php echo $mahangtonmax;?>" method="post">  
                    <div class="row">
                        <div class="col">
                            <input type="text" id="machitiethangton" min="0" name="mactht" class="form-control d-none" readonly title="Không thể thay đổi giá trị này">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="number" id="soluongmacdinh" min="0" name="" class="form-control" readonly title="Không thể thay đổi giá trị này">
                        </div>
                        =>
                        <div class="col">
                            <input type="number" min="0" name="soluong" class="form-control" title="Không thể để rỗng giá trị này">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                        <button type="submit" class="btn btn-primary">Thay đổi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>