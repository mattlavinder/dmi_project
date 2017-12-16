<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        <h1 class="h1 text-center">Enter Pickup Info</h1>
        <?php

        ?>
        <form method="get" action="<?=base_url()?>order/shop">
            <div class="form-group row">
                <label for="phoneInput" class="col-sm-3 col-form-label">Phone Number</label>
                <div class="col-sm-9">
                    <input type="text" name="phone_number" class="form-control" id="phoneInput" required placeholder="e.g. 123-456-7890">
                </div>
            </div>
            <div class="form-group row">
                <label for="pickupTime" class="col-sm-3 col-form-label">Pickup Time</label>
                <div class="col-sm-9">
                    <input type="time" name="pickup_time" class="form-control" id="pickupTime" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-1">
                    <button type="submit" class="btn btn-primary">Next</button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-3"></div>
</div>