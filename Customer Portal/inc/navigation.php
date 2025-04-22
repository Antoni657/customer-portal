
</style>
<!-- Main Sidebar Container -->

      <aside class="main-sidebar  elevation-4 sidebar-no-expand  disabled" style="background-color: #032830;">
        <!-- Brand Logo -->
        <a href="<?php echo base_url ?>admin" class="brand-link text-sm pl-2"  style="background-color: #fde047;">
        <img src="<?php echo validate_image($_settings->info('logo'))?>" alt="Store Logo" class="brand-image img-circle elevation-3 bg-transparent" style="width: 2rem;height: 2rem;max-height: unset;object-fit:scale-down;object-position:center center">
        <span class="brand-text font-weight-light px-2" style="color: black;"><?php echo $_settings->info('short_name') ?></span>
        </a>
        <!-- Sidebar -->
        <div class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-transition os-host-scrollbar-horizontal-hidden" >
          <div class="os-resize-observer-host observed">
            <div class="os-resize-observer" style="left: 0px; right: auto;"></div>
          </div>
          <div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;">
            <div class="os-resize-observer"></div>
          </div>
          <div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 646px;"></div>
          <div class="os-padding">
            <div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;">
              <div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">
                <!-- Sidebar user panel (optional) -->
                <div class="clearfix"></div>
                <!-- Sidebar Menu -->
                <nav class="mt-4 ">
                   <ul class="nav nav-pills nav-sidebar flex-column text-sm nav-compact nav-flat nav-child-indent nav-collapse-hide-child" data-widget="treeview" role="menu" data-accordion="false">
                   <style>
                .items {
                    padding-top: 8px;
                    padding-bottom: 8px;
                }
            </style>
                    <li class="nav-item dropdown mt-5 items">
                      <a href="homepage.php" class="nav-link nav-home">
                      <!-- <a href="<?php echo home_url ?>?page=view_invoice" class="nav-link nav-home"> -->

                        <i class="nav-icon fas fa-home"></i>
                        <p>
                          Home
                        </p>
                      </a>
                    </li>
                    <li class="nav-item mt-2 items">
                      <a href="<?php echo home_url ?>?page=invoice_list" class="nav-link nav-invoice_list">
                        <i class="nav-icon fas fa-dollar-sign"></i>
                        <p>
                          Billings
                        </p>
                      </a>
                    </li>

                    

                    <li class="nav-item dropdown items">
                      <a href="<?php echo home_url ?>?page=services" class="nav-link nav-services">
                        <i class="nav-icon fas fa-boxes"></i>
                        <p>
                          Products
                        </p>
                      </a>
                    </li>


                  </ul>
                </nav>
                <!-- /.sidebar-menu -->
              </div>
            </div>
          </div>
          <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden">
            <div class="os-scrollbar-track">
              <div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div>
            </div>
          </div>
          <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden">
            <div class="os-scrollbar-track">
              <div class="os-scrollbar-handle" style="height: 55.017%; transform: translate(0px, 0px);"></div>
            </div>
          </div>
          <div class="os-scrollbar-corner"></div>
        </div>
        <!-- /.sidebar -->
      </aside>
      <script>
        var page;
    $(document).ready(function(){
      page = '<?php echo isset($_GET['page']) ? $_GET['page'] : 'home' ?>';
      page = page.replace(/\//gi,'_');

      if($('.nav-link.nav-'+page).length > 0){
             $('.nav-link.nav-'+page).addClass('active').css({
      'background-color': '#fde047', // Change background color
      'color': '#000000' // Change text color
    });
        if($('.nav-link.nav-'+page).hasClass('tree-item') == true){
            $('.nav-link.nav-'+page).closest('.nav-treeview').siblings('a').addClass('active')
          $('.nav-link.nav-'+page).closest('.nav-treeview').parent().addClass('menu-open')
        }
        if($('.nav-link.nav-'+page).hasClass('nav-is-tree') == true){
          $('.nav-link.nav-'+page).parent().addClass('menu-open')
        }

      }
      
		$('#receive-nav').click(function(){
      $('#uni_modal').on('shown.bs.modal',function(){
        $('#find-transaction [name="tracking_code"]').focus();
      })
			uni_modal("Enter Tracking Number","transaction/find_transaction.php");
		})
    })
  </script>