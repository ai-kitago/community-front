<div class="col-coupon col-pc-4 col-sp-12">
    <div class="coupon">
        <label class="coupon-trigger" for="modal-coupon-<?php echo $key; ?>">
            <i class="fa fa-ticket" aria-hidden="true"></i>
            <span class="coupon-title"><?php echo $val['title']; ?></span>
        </label>
    </div>
    <div class="modal">
        <input id="modal-coupon-<?php echo $key; ?>" class="checkbox" type="checkbox">
        <div class="modal-overlay">
            <label for="modal-coupon-<?php echo $key; ?>" class="o-close"></label>
            <div class="modal-wrap">
                <!-- <label for="modal-trigger" class="close">&#10006;</label> -->
                <h2><?php echo $val['title']; ?></h2>
                <p><?php echo $val['content']; ?></p>
            </div>
        </div>
    </div>
</div>