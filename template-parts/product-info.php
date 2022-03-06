<table class="product-main-info">
    <?php if(isset($san_xuat_tai)): ?>
        <tr>
            <td>
                Sản xuất tại:
            </td>
            <td>
                <?= $san_xuat_tai ?>
            </td>
        </tr>
    <?php endif; ?>

    <?php if(isset($luu_y)): ?>
        <tr>
            <td>
                Lưu ý:
            </td>
            <td>
                <?= $luu_y ?>
            </td>
        </tr>
    <?php endif; ?>

    <?php if(isset($thanh_phan)): ?>
        <tr>
            <td>
                Thành phần:
            </td>
            <td>
                <?= $thanh_phan ?>
            </td>
        </tr>
    <?php endif; ?>

    <?php if(isset($huong_dan_su_dung)): ?>
        <tr>
            <td>
                Hướng dẫn sử dụng:
            </td>
            <td>
                <?= $huong_dan_su_dung ?>
            </td>
        </tr>
    <?php endif; ?>

    <?php if(isset($huong_dan_bao_quan)): ?>
        <tr>
            <td>
                Hướng dẫn bảo quản:
            </td>
            <td>
                <?= $huong_dan_bao_quan ?>
            </td>
        </tr>
    <?php endif; ?>

    <?php if(isset($han_su_dung)): ?>
        <tr>
            <td>
                Hạn sử dụng:
            </td>
            <td>
                <?= $han_su_dung ?>
            </td>
        </tr>
    <?php endif; ?>
</table>