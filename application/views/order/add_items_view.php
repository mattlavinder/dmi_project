    <div class="row">
        <div class="col-lg-2">
            <h4 class="my-4">Categories</h4>
            <div class="list-group" id="categories">
                <a href="<?=base_url()?>order/shop/<?=$order_id?>" class="list-group-item active">All</a>
                <?php foreach ($categories as $category): ?>
                <a href="<?=base_url('order/shop')?>/<?=$order_id?>?category=<?=$category['id']?>"
                   class="list-group-item"><?=$category['name']?></a>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="row">
                <?php foreach ($items as $item): ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="http://placehold.it/700x700" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <p><?=$item['name']?></p>
                            </h4>
                            <h5>$<?=$item['cost']?></h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                            <a href="<?=base_url('order/add_item')?>/<?=$order_id?>/<?=$item['id']?>"
                               class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="col-lg-3">
            <h4 class="my-h4">Cart</h4>
            <div class="">
                <ul class="list-group">
                    <?php foreach ($order_items as $order_item): ?>
                    <li class="list-group-item">
                        <?=$order_item['name']?>
                        <span>$<?=$order_item['cost']?></span>
                        <button type="button" class="close" aria-label="Close">
                            <a href="<?=base_url('order/remove_item')?>/<?=$order_id?>/<?=$order_item['id']?>"
                               style="text-decoration: none">
                                <span aria-hidden="true">&times;</span>
                            </a>
                        </button>
                    </li>
                    <?php endforeach;?>
                </ul>
                <table class="table table-sm">
                    <tr>
                        <td>Subtotal:</td>
                        <td class="text-right">
                            <?php
                                $subtotal = 0.00;
                                foreach ($order_items as $order_item) {
                                    $subtotal += $order_item['cost'];
                                }
                                echo '$'.number_format($subtotal, 2);
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Tax:</td>
                        <td class="text-right"><?php
                            $tax = number_format(($subtotal * 0.10), 2);
                            echo "$".$tax;
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Total:</td>
                        <td class="text-right">
                            <?php
                                $total = number_format(($subtotal + $tax), 2);
                                echo "$".$total;
                            ?>
                        </td>
                    </tr>
                </table>
                <a href="" class="btn btn-success <?php if (count($order_items) == 0):?>disabled<?php endif;?>">Next</a>
            </div>
        </div>
    </div>
