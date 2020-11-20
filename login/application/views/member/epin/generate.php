
<?php echo form_open() ?>
<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-5">
        <label>e-PIN Amount*</label>
        <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-usd"></span></span>
            <input type="text" class="form-control" value="<?php echo set_value('amount') ?>"
                   placeholder="For free e-pin enter 0" name="amount">
        </div>
    </div>
    <div class="col-sm-5">
        <label>User ID (Whom to issue)*</label>
        <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" value="<?php echo set_value('userid') ?>" class="form-control" placeholder="1001"
                   name="userid">
        </div>
    </div>
    <div class="col-sm-1"></div>
</div>
<div>&nbsp;</div>
<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-5">
        <label>Number of e-PINs*</label>
        <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-arrow-right"></span></span>
            <input type="number" value="<?php echo set_value('number') ?>" placeholder="Maximum 999 epin at a time"
                   class="form-control" name="number">
        </div>
    </div>
    <div class="col-sm-5">
        <div>&nbsp;</div>
        <input type="submit" class="btn btn-danger" onclick="this.value='Please Wait..'" value="Generate e-PINs">
    </div>
    <div class="col-sm-1"></div>
</div>
<?php echo form_close() ?>
