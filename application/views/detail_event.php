<section>
            
            <div class="container" >
            
            <div class="row" id="kotak"><br>
               
                <div class="col-sm-6 col-md-8 col-xs-12 col-md-offset-2">      
                    <div class="thumbnail"> <img src="assets/img/<?= $boo["img"]; ?>" alt="...">
                        <div class="caption">
                           <h1><?= $boo["nama"]; ?></h1>
                        <div>
                          
                           <em><p>By <?= $boo["tempat"]; ?></p></em>
                           <p><i class="fa fa-map-marker"></i> <?= $boo["time"]; ?>                                             <i class="fa fa-clock-o"></i> <?= date("d F Y - h:m", strtotime($boo["time"])); ?></p>
                            <!--
                            <p>< date("d F Y", strtotime($row["time"])); ?></p>
                            <p>< $row["category"]; ?></p>
                            <p>< $row["description"]; ?></p>-->
                           <p>Description : <?= $boo["description"]; ?></p>
                           
                        </div>
                        </div>
                        <?php 
                            $sesi = (isset($_SESSION["id_users"]))?$_SESSION["id_users"]:0;
                            if( $sesi == $boo["id"])
                            {
                        ?>
                       <p><a href="../../si_mahasiswa/includes/crud_handlers/edit.php?id=<?= $boo["id"]; ?>" class="btn btn-primary" name="edit">Edit</a></p>
                        <?php }?>
                    </div>
                    
                </div>
                
            </div>
        </div>
        </section>