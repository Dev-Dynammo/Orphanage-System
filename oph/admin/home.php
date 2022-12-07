<h1 class="text-light">Welcome to <?php echo $_settings->info('name') ?></h1>

<button class="btn btn-outline-primary"><a href="http://localhost/Project/" style="color:white">Go back to Orphanage Website</a></button> <br><br>
<button class="btn btn-outline-primary"><a href="https://docs.google.com/forms/d/16KAr969nYo-bnF9EIOVzCfHmk1zvrh6ZfAtl7oWMDmA/edit#responses" style="color:white">View Non-monetary donation form</a></button>
<hr class="border-light">



<div class="row">
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box bg-light shadow">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-building"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Partnered Companies</span>
            <span class="info-box-number text-right">
                <?php 
                    echo $conn->query("SELECT * FROM `company_list` where status =1")->num_rows;
                ?>
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box bg-light shadow">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-user-friends"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Clients</span>
            <span class="info-box-number text-right">
                <?php 
                    echo $conn->query("SELECT * FROM `users` where `type` =2")->num_rows;
                ?>
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
</div>