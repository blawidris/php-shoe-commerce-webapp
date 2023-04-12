<li>
    <a href="#">
        <?= $item['name'] ?>
        <span class="middle">x <?= $item['quantity'] ?></span>
        <span class="last">$<?= $item['quantity'] * $item['price'] ?></span>
    </a>
</li>