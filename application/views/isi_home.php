<br><br><br>
<section class="thumb" >
    <div class="container" >
        <?php foreach ($event->result() as $key => $value) {
            ?>
            <div class="row" id="kotak"><br>
                <div class="col-sm-6 col-md-4 col-xs-12">
                    <div class="thumbnail"> <img style="width:360px;height:191px" src="<?= base_url("_upload/".$value->img) ?>" />
                        <div class="caption">
                            <input type="hidden" >
                            <input type="hidden" >
                            <h3><?= $value->name ?></h3>
                            <p><i class="fa fa-map-marker"></i> <?= $value->location ?></p>
                            <!--
                            <p>< date("d F Y", strtotime($row["time"])); ?></p>
                            <p>< $row["category"]; ?></p>
                            <p>< $row["description"]; ?></p>-->

                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>


    </div>
</section>
