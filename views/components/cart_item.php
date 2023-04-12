<tr>
    <td>
        <div class="media">
            <div class="d-flex">
                <img src="<?= $item['image'] ?>" alt="" width="40">
            </div>
            <div class="media-body">
                <p><?= $item['name'] ?></p>
            </div>
        </div>
    </td>
    <td>
        <h5>$<?= $item['price'] ?></h5>
    </td>
    <td>
        <div class="product_count">
            <input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">
            <button class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
            <button class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
        </div>
    </td>
    <td>
        <h5>$<?= $item['quantity'] * $item['price']?></h5>
    </td>
</tr>