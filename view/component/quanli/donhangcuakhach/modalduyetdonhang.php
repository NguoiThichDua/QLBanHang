<!-- Modal -->
<div class="modal fade" id="duyetdonhang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Xác nhận đơn hàng</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="controller/donhangcontroller.php?yc=xacnhandonhang" method="post" class="w-100"> 
                    <div class="form-group">
                        <!-- từ js truyền qua -->
                        <input type="text" name="madonhangcho" id="madonhangchothem" class="form-control d-none rounded-pill" required title="Không được để trống ô này">
                    </div>   
                    <div class="form-group">
                        <label for="" class="text-dark">Số lô - NXS: (<span class="need">*</span>)</label>
                        <input type="date" name="solo_nsx" class="form-control rounded-pill" required title="Không được để trống ô này">
                    </div> 
                    
                    <div class="form-group">
                        <label for="" class="text-dark">Mã bill: (<span class="need">*</span>)</label>
                        <input type="text" name="mabill" aria-label="" class="form-control rounded-pill" required title="Không được để trống ô này">
                    </div>

                    <div class="form-group">
                        <label for="" class="text-dark">Công nợ: (<span class="need">*</span>)</label>
                        <input type="number" name="congno" aria-label="" class="form-control rounded-pill" required title="Không được để trống ô này">
                    </div>

                    <div class="form-group">
                        <?php
                            $donhangcho = new donhangchoclass();
                        ?>
                    </div>

                    <div class="form-group">
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-secondary mr-3" data-dismiss="modal">Hủy</button>
                            <input type="submit" value="Xác nhận" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>