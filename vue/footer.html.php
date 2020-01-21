<footer>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <?php if(!isset($_GET['action']) || $_GET['action'] == "defaut"  ) {
                        echo '<span class="copyright">GRETA Bretagne</span>';
                    }else{
                        echo '<span class="copyright">GRETA ' . $ville . "</span>";
                    }
                    ?>
                    
                </div>
                <div class="col-md-4">
                    <span class="copyright">
                        Brevet de technicien supérieur
                    </span>
                </div>
                <div class="col-md-4">
                    <span class="copyright">
                        Services Informatiques aux Organisations <?= "</br>" ?> option SLAM
                    </span>
                </div>
            </div>
        </div>
    </section>
    </footer>