    <div class="row">
        <div class="col-lg-2">
            <h4 class="my-4">Categories</h4>
            <div class="list-group" id="categories">
                <a href="<?=base_url()?>order/shop/<?=$order_id?>" class="list-group-item active">All</a>
                <?php foreach ($categories as $category): ?>
                <a href="<?=base_url()?>order/shop/<?=$order_id?>?category=<?=$category['id']?>" class="list-group-item"><?=$category['name']?></a>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="col-lg-8">
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
                            <a href="<?=base_url()?>order/add_item_to_order/<?=$order_id?>/<?=$item['id']?>"
                               class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="col-lg-2">
            <h4 class="my-h4">Cart</h4>
            <div class="">
                <table class="table table-striped table-hover table-bordered table-sm">
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($order_items as $order_item): ?>
                        <tr>
                            <td><?=$order_item['name']?></td>
                            <td><?=$order_item['cost']?></td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
