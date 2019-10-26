<?php 
    require "../../../../model/hangtonclass.php";
    require "../../../../model/khachhangclass.php";

    session_start();
?>

<?php

    if(isset($_REQUEST['thang'])){
        $thang = $_REQUEST['thang'];

        if($thang == ""){
            echo "Không xác định được tháng đã chọn";
        }else{
            $thang = $thang ."-01";

          
            if(isset($_SESSION['khachhang'])){
                $tenkhachhang = $_SESSION['khachhang'];

                # lay ma khach hang
                $khachhang = new khachhangclass(); 
                $makhachhang = $khachhang->LayMotKhachHangBangTen($tenkhachhang);
                $makhach = $makhachhang->makhachhang;

                # tim don hang ton theo ten ma khach
                $hangton = new hangtonclass();
                $thongtintheothang = $hangton->LayHangTonTheoThang($makhach, $thang);
                
                ?>
                    <div class="table-responsive table-hover">
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Ngày tạo</th>
                                    <th scope="col">Tên hàng & số lượng còn</th>
                                    <th>Chức năng</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $stt = 1;
                                foreach ($thongtintheothang as $tt) {
                                    ?>        
                                            <tr>
                                                <td><?php echo $stt++;?></td>
                                                <td><?php echo $tt->ngaytao;?></td>
                                                
                                                <td>
                                                    <?php
                                                        # lay chitiethang ton (tat ca mon hang cua hangton) bang mahangton va cua khach nao
                                                        $thongtinchitiethangton = $hangton->LayTatCaHangTonBangMaKhachHang($makhach, $tt->mahangton);
                                                        foreach ($thongtinchitiethangton as $ctht) {
                                                            echo $ctht->tenhanghoa . " - Còn: " . $ctht->soluong . "<br>";
                                                        }
                                                    ?>
                                                </td>
                                                <td>
                                                    <!-- Huy don hang ton hien tai bang mahangton max -->
                                                    <form action="controller/hangtoncontroller.php?yc=huybocapnhathangton&mahangton=<?php echo $tt->mahangton;?>" method="post">
                                                        <button type="submit" class="btn btn-danger">Hủy cập nhật này</button>
                                                    </form>
                                                </td>
                                            </tr>
                                    <?php   
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                <?php   
            }else{
                echo "Không lấy được thông tin tài khoản";
            }
              
           
        }
    }else{
        echo "Không nhận được yêu cầu (không thể xác định tháng mấy)";
    }
?>