<div class="card-header text-center text-white" style=" background-color: #facc15;" >
<h1 class="text-center py-4 ">Welcome to <?php echo $_settings->info('name') ?></h1>
</div>
<hr>
<div class="row">
    <div class="col-12 col-sm-6 col-md-3">
    <a href="<?php echo base_url ?>admin/?page=maintenance/services" class="info-box bg-light shadow">
        
            <span class="info-box-icon elevation-1" style="background-color: #3498db ; color: white;"><i class="fas fa-boxes"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Products</span>
            <span class="info-box-number text-right">
                <?php 
                    echo $conn->query("SELECT * FROM `services_list` where `status` = 1")->num_rows;
                ?>
            </span>
            </div>
            <!-- /.info-box-content -->
</a>
        
        <!-- /.info-box -->
    </div>
    <div class="col-12 col-sm-6 col-md-3">
    <a href="<?php echo base_url ?>admin/?page=client" class="info-box bg-light shadow">
            <span class="info-box-icon  elevation-1" style="background-color: #ffa500; color: white;"><i class="fas fa-user-friends"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Customer</span>
            <span class="info-box-number text-right">
                <?php 
                    echo $conn->query("SELECT * FROM `client_list` where `status` = 1")->num_rows;
                ?>
            </span>
            </div>
            <!-- /.info-box-content -->
</a>
        <!-- /.info-box -->
    </div>
    <div class="col-12 col-sm-6 col-md-3">
    <a href="<?php echo base_url ?>admin/?page=invoice" class="info-box bg-light shadow">
            <span class="info-box-icon  elevation-1" style="background-color: #008080; color: white;"><i class="fas fa-dollar-sign" ></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Billing</span>
            <span class="info-box-number text-right">
                <?php 
                    echo $conn->query("SELECT * FROM `invoice_list`")->num_rows;
                ?>
            </span>
            </div>
            <!-- /.info-box-content -->
</a>
        <!-- /.info-box -->
    </div>
    <?php if($_settings->userdata('type') == 1): ?>
    <div class="col-12 col-sm-6 col-md-3">
    <a href="<?php echo base_url ?>admin/?page=user/list" class="info-box bg-light shadow">
            <span class="info-box-icon elevation-1" style="background-color: #808080; color: white;"><i class="fas fa-user-circle" ></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Users</span>
            <span class="info-box-number text-right">
                <?php 
                    echo $conn->query("SELECT * FROM `users` where id != 1 ")->num_rows;
                ?>
            </span>
            </div>
            <!-- /.info-box-content -->
    </a>
        <!-- /.info-box -->
    </div>
    <?php endif; ?>
</div>