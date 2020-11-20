
<div class="table-responsive">
    <table class="table table-striped table-bordered">
        <tr>
            <th>SN</th>
            <th>Reward Name</th>
            <th>Achieve Date</th>
            <th>Paid Date</th>
            <th>Delivery Detail</th>
        </tr>
        <?php
        $sn = 1;
        foreach ($rewards as $e) { ?>
            <tr>
                <td><?php echo $sn++; ?></td>
                <td><?php echo $this->db_model->select('reward_name', 'reward_setting', array('id' => $e['reward_id'])); ?></td>
                <td><?php echo $e['date']; ?></td>
                <td><?php echo $e['paid_date']; ?></td>
                <td><?php echo $e['tid']; ?></td>
            </tr>
        <?php } ?>
    </table>
</div>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>
</div>
