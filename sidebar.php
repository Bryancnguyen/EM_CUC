<!-- Start: Sidebar -->
    <aside id="sidebar_left" class="nano nano-primary affix">

      <!-- Start: Sidebar Left Content -->
      <div class="sidebar-left-content nano-content">

        <!-- Start: Sidebar Header -->
        <header class="sidebar-header">
            <div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Version
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">Mobile UI 14.2 Current</a></li>
    <li><a href="#">Mobile UI 14.1 Current</a></li>
    <li><a href="#">Mobile UI 14.0 Current</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Mobile UI 13.9 Current</a></li>
  </ul>
      </div>
          <!-- Sidebar Widget - Menu (Slidedown) -->
          <div class="sidebar-widget menu-widget">
            <div class="row text-center mbn">
              <div class="col-xs-4">
                <a href="dashboard.html" class="text-primary" data-toggle="tooltip" data-placement="top" title="Dashboard">
                  <span class="glyphicon glyphicon-home"></span>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="pages_messages.html" class="text-info" data-toggle="tooltip" data-placement="top" title="Messages">
                  <span class="glyphicon glyphicon-inbox"></span>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="pages_profile.html" class="text-alert" data-toggle="tooltip" data-placement="top" title="Tasks">
                  <span class="glyphicon glyphicon-bell"></span>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="pages_timeline.html" class="text-system" data-toggle="tooltip" data-placement="top" title="Activity">
                  <span class="fa fa-desktop"></span>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="pages_profile.html" class="text-danger" data-toggle="tooltip" data-placement="top" title="Settings">
                  <span class="fa fa-gears"></span>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="pages_gallery.html" class="text-warning" data-toggle="tooltip" data-placement="top" title="Cron Jobs">
                  <span class="fa fa-flask"></span>
                </a>
              </div>
            </div>
          </div>
            
          <!-- Sidebar Widget - Search (hidden) -->
          <div class="sidebar-widget search-widget hidden">
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-search"></i>
              </span>
              <input type="text" id="sidebar-search" class="form-control" placeholder="Search...">
            </div>
          </div>

        </header>
        <!-- End: Sidebar Header -->

        <!-- Start: Sidebar Menu -->
        <ul class="nav sidebar-menu">
          <li class="sidebar-label pt20">Controls</li>
          <li>
           <?php wp_nav_menu( array(
    'menu' => 'MenuNAV'
           ) ); ?>
          </li>
          <li>
            <a href="../README/index.html">
              <span class="glyphicon glyphicon-book"></span>
              <span class="sidebar-title">Documentation</span>
            </a>
          </li>
          <li class="active">
            <a href="dashboard.html">
              <span class="glyphicon glyphicon-home"></span>
              <span class="sidebar-title">Dashboard</span>
            </a>
          </li>
          <li class="sidebar-label pt15">Exclusive Tools</li>
          <li>
            <a class="accordion-toggle" href="#">
              <span class="fa fa-columns"></span>
              <span class="sidebar-title">Controls</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
                <a class="accordion-toggle" href="#">
                  <span class="fa fa fa-arrows-h"></span>
                  Sidebars
                  <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                  <li>
                    <a href="layout_sidebar-left-static.html">
                      Left Static </a>
                  </li>
                  <li>
                    <a href="layout_sidebar-left-fixed.html">
                      Left Fixed </a>
                  </li>
                  <li>
                    <a href="layout_sidebar-left-widgets.html">
                      Left Widgets </a>
                  </li>
                  <li>
                    <a href="layout_sidebar-left-minified.html">
                      Left Minified </a>
                  </li>
                  <li>
                    <a href="layout_sidebar-left-light.html">
                      Left White </a>
                  </li>
                  <li>
                    <a href="layout_sidebar-right-static.html">
                      Right Static </a>
                  </li>
                  <li>
                    <a href="layout_sidebar-right-fixed.html">
                      Right Fixed </a>
                  </li>
                  <li>
                    <a href="layout_sidebar-right-menu.html">
                      Right w/Menu </a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="accordion-toggle" href="#">
                  <span class="fa fa-arrows-v"></span>
                  Navbar
                  <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                  <li>
                    <a href="layout_navbar-static.html">
                      Navbar Static </a>
                  </li>
                  <li>
                    <a href="layout_navbar-fixed.html">
                      Navbar Fixed </a>
                  </li>
                  <li>
                    <a href="layout_navbar-menus.html">
                      Navbar Menus </a>
                  </li>
                  <li>
                    <a href="layout_navbar-contextual.html">
                      Contextual Example </a>
                  </li>
                  <li>
                    <a href="layout_navbar-search-alt.html">
                      Search Alt Style </a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="accordion-toggle" href="#">
                  <span class="fa fa-hand-o-up"></span>
                  Topbar
                  <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                  <li>
                    <a href="layout_topbar.html">
                      Default Style </a>
                  </li> 
                  <li>
                    <a href="layout_topbar-menu.html">
                      Default w/Menu </a>
                  </li>  
                  <li>
                    <a href="layout_topbar-alt.html">
                      Alternate Style </a>
                  </li>  
                </ul>
              </li>
              <li>
                <a class="accordion-toggle" href="#">
                  <span class="fa fa-arrows-v"></span>
                  Content Body
                  <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                  <li>
                    <a href="layout_content-blank.html">
                      Blank Starter </a>
                  </li>
                  <li>
                    <a href="layout_content-fixed.html">
                      Fixed Window </a>
                  </li>
                  <li>
                    <a href="layout_content-heading.html">
                      Content Heading </a>
                  </li>
                  <li>
                    <a href="layout_content-tabs.html">
                      Content Tabs </a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="accordion-toggle" href="#">
                  <span class="fa fa-pause"></span>
                  Content Trays
                  <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                  <li>
                    <a href="layout_tray-left.html">
                      Tray Left Static </a>
                  </li> 
                  <li>
                    <a href="layout_tray-left-fixed.html">
                      Tray Left Fixed </a>
                  </li> 
                  <li>
                    <a href="layout_tray-right.html">
                      Tray Right Static </a>
                  </li> 
                  <li>
                    <a href="layout_tray-right-fixed.html">
                      Tray Right Fixed </a>
                  </li> 
                  <li>
                    <a href="layout_tray-both.html">
                      Left + Right Static </a>
                  </li> 
                  <li>
                    <a href="layout_tray-both-fixed.html">
                      Left + Right Fixed </a>
                  </li> 
                </ul>
              </li>
              <li>
                <a class="accordion-toggle" href="#">
                  <span class="fa fa-plus-square-o"></span>
                  Boxed Layout
                  <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                  <li>
                    <a href="layout_boxed.html">
                      Default </a>
                  </li>
                  <li>
                    <a href="layout_boxed-horizontal.html">
                      Horizontal Menu </a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="accordion-toggle" href="#">
                  <span class="fa fa-arrow-circle-o-up"></span>
                  Horizontal Menu
                  <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                  <li>
                    <a href="layout_horizontal-sm.html">
                      Small Size</a>
                  </li>
                  <li>
                    <a href="layout_horizontal-md.html">
                      Medium Size</a>
                  </li>
                  <li>
                    <a href="layout_horizontal-lg.html">
                      Large Size</a>
                  </li>
                  <li>
                    <a href="layout_horizontal-light.html">
                      Light Skin</a>
                  </li>
                  <li>
                    <a href="layout_horizontal-topbar.html">
                      With Topbar</a>
                  </li>
                  <li>
                    <a href="layout_horizontal-topbar-alt.html">
                      With Alt Topbar</a>
                  </li>
                  <li>
                    <a href="layout_horizontal-collapsed.html">
                      Collapsed onLoad</a>
                  </li>
                  <li>
                    <a href="layout_horizontal-boxed.html">
                      In Boxed Layout</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li>
            <a class="accordion-toggle" href="#">
              <span class="glyphicon glyphicon-fire"></span>
              <span class="sidebar-title">Buttons</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
                <a href="admin_plugins-panels.html">
                  <span class="glyphicon glyphicon-book"></span> Sizes </a>
              </li>
              <li>
                <a href="admin_plugins-modals.html">
                  <span class="glyphicon glyphicon-modal-window"></span> States </a>
              </li>
              <li>
                <a href="admin_plugins-dock.html">
                  <span class="glyphicon glyphicon-equalizer"></span> Different Height </a>
              </li>
            </ul>
          </li>
          <li>
            <a class="accordion-toggle menu-open" href="#">
              <span class="glyphicon glyphicon-check"></span>
              <span class="sidebar-title">Drop Downs</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li class="active">
                <a href="admin_forms-elements.html">
                  <span class="glyphicon glyphicon-edit"></span> Default/Label Postion </a>
              </li>
              <li>
                <a href="admin_forms-widgets.html">
                  <span class="glyphicon glyphicon-calendar"></span> States </a>
              </li>
              <li>
                <a href="admin_forms-validation.html">
                  <span class="glyphicon glyphicon-check"></span> Sizes </a>
              </li>
              <li>
                <a href="admin_forms-layouts.html">
                  <span class="fa fa-desktop"></span> Error Handling </a>
              </li>
              <li>
                <a href="admin_forms-wizard.html">
                  <span class="fa fa-clipboard"></span> Etc. </a>
              </li>
            </ul>
          </li>

          <li class="sidebar-label pt20">Systems</li>
          <li>
            <a class="accordion-toggle" href="#">
              <span class="fa fa-diamond"></span>
              <span class="sidebar-title">Widget Packages</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
                <a href="widgets_tile.html">
                  <span class="fa fa-cube"></span> Tile Widgets</a>
              </li>
              <li>
                <a href="widgets_panel.html">
                  <span class="fa fa-desktop"></span> Panel Widgets </a>
              </li>
              <li>
                <a href="widgets_scroller.html">
                  <span class="fa fa-columns"></span> Scroller Widgets </a>
              </li>
              <li>
                <a href="widgets_data.html">
                  <span class="fa fa-dot-circle-o"></span> Admin Widgets </a>
              </li>
            </ul>
          </li>
          <li>
            <a class="accordion-toggle" href="#">
              <span class="glyphicon glyphicon-shopping-cart"></span>
              <span class="sidebar-title">Ecommerce</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
                <a href="ecommerce_dashboard.html">
                  <span class="glyphicon glyphicon-shopping-cart"></span> Dashboard
                  <span class="label label-xs bg-primary">New</span>
                </a>
              </li>
              <li>
                <a href="ecommerce_products.html">
                  <span class="glyphicon glyphicon-tags"></span> Products </a>
              </li>
              <li>
                <a href="ecommerce_orders.html">
                  <span class="fa fa-money"></span> Orders </a>
              </li>
              <li>
                <a href="ecommerce_customers.html">
                  <span class="fa fa-users"></span> Customers </a>
              </li>
              <li>
                <a href="ecommerce_settings.html">
                  <span class="fa fa-gears"></span> Store Settings </a>
              </li>
            </ul>
          </li>
          <li>
            <a href="email_templates.html">
              <span class="fa fa-envelope-o"></span>
              <span class="sidebar-title">Email Templates</span>
            </a>
          </li>

          <!-- sidebar resources -->
          <li class="sidebar-label pt20">Elements</li>
          <li>
            <a class="accordion-toggle" href="#">
              <span class="glyphicon glyphicon-bell"></span>
              <span class="sidebar-title">UI Elements</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
                <a href="ui_alerts.html">
                  <span class="fa fa-warning"></span> Alerts </a>
              </li>
              <li>
                <a href="ui_animations.html">
                  <span class="fa fa-spinner"></span> Animations </a>
              </li>
              <li>
                <a href="ui_buttons.html">
                  <span class="fa fa-plus-square-o"></span> Buttons </a>
              </li>
              <li>
                <a href="ui_typography.html">
                  <span class="fa fa-text-width"></span> Typography </a>
              </li>
              <li>
                <a href="ui_portlets.html">
                  <span class="fa fa-archive"></span> Portlets </a>
              </li>
              <li>
                <a href="ui_progress-bars.html">
                  <span class="fa fa-bars"></span> Progress Bars </a>
              </li>
              <li>
                <a href="ui_tabs.html">
                  <span class="fa fa-toggle-off"></span> Tabs </a>
              </li>
              <li>
                <a href="ui_icons.html">
                  <span class="fa fa-hand-o-right"></span> Icons </a>
              </li>
              <li>
                <a href="ui_grid.html">
                  <span class="fa fa-th-large"></span> Grid </a>
              </li>
            </ul>
          </li>
          <li>
            <a class="accordion-toggle" href="#">
              <span class="glyphicon glyphicon-hdd"></span>
              <span class="sidebar-title">Form Elements</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
                <a href="form_inputs.html">
                  <span class="fa fa-magic"></span> Basic Inputs </a>
              </li>
              <li>
                <a href="form_plugins.html">
                  <span class="fa fa-bell-o"></span> Plugin Inputs
                  <span class="label label-xs bg-primary">New</span>
                </a>
              </li>
              <li>
                <a href="form_editors.html">
                  <span class="fa fa-clipboard"></span> Editors </a>
              </li>
              <li>
                <a href="form_treeview.html">
                  <span class="fa fa-tree"></span> Treeview </a>
              </li>
              <li>
                <a href="form_nestable.html">
                  <span class="fa fa-tasks"></span> Nestable </a>
              </li>
              <li>
                <a href="form_image-tools.html">
                  <span class="fa fa-cloud-upload"></span> Image Tools
                  <span class="label label-xs bg-primary">New</span>
                </a>
              </li>
              <li>
                <a href="form_uploaders.html">
                  <span class="fa fa-cloud-upload"></span> Uploaders </a>
              </li>
              <li>
                <a href="form_notifications.html">
                  <span class="fa fa-bell-o"></span> Notifications </a>
              </li>
              <li>
                <a href="form_content-sliders.html">
                  <span class="fa fa-exchange"></span> Content Sliders </a>
              </li>
            </ul>
          </li>
          <li>
            <a class="accordion-toggle" href="#">
              <span class="glyphicon glyphicon-tower"></span>
              <span class="sidebar-title">Plugins</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
                <a class="accordion-toggle" href="#">
                  <span class="glyphicon glyphicon-globe"></span> Maps
                  <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                  <li>
                    <a href="maps_advanced.html">Admin Maps</a>
                  </li>
                  <li>
                    <a href="maps_basic.html">Basic Maps</a>
                  </li>
                  <li>
                    <a href="maps_vector.html">Vector Maps</a>
                  </li>
                  <li>
                    <a href="maps_full.html">Full Map</a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="accordion-toggle" href="#">
                  <span class="fa fa-area-chart"></span> Charts
                  <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                  <li>
                    <a href="charts_highcharts.html">Highcharts</a>
                  </li>
                  <li>
                    <a href="charts_d3.html">D3 Charts</a>
                  </li>
                  <li>
                    <a href="charts_flot.html">Flot Charts</a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="accordion-toggle" href="#">
                  <span class="fa fa-table"></span> Tables
                  <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                  <li>
                    <a href="tables_basic.html"> Basic Tables</a>
                  </li>
                  <li>
                    <a href="tables_datatables.html"> DataTables </a>
                  </li>
                  <li>
                    <a href="tables_datatables-editor.html"> Editable Tables </a>
                  </li>
                  <li>
                    <a href="tables_footable.html"> FooTables </a>
                  </li>
                  <li>
                    <a href="tables_pricing.html"> Pricing Tables </a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="accordion-toggle" href="#">
                  <span class="fa fa-flask"></span> Misc
                  <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                  <li>
                    <a href="misc_tour.html"> Site Tour</a>
                  </li>
                  <li>
                    <a href="misc_timeout.html"> Session Timeout</a>
                  </li>
                  <li>
                    <a href="misc_nprogress.html"> Page Progress Loader </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li>
            <a class="accordion-toggle" href="#">
              <span class="glyphicon glyphicon-duplicate"></span>
              <span class="sidebar-title">Pages</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
                <a class="accordion-toggle" href="#">
                  <span class="fa fa-gears"></span> Utility
                  <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                  <li>
                    <a href="landing-page/landing1/index.html" target="_blank"> Landing Page </a>
                  </li>
                  <li>
                    <a href="pages_confirmation.html" target="_blank"> Confirmation
                      <span class="label label-xs bg-primary">New</span>
                    </a>
                  </li>
                  <li>
                    <a href="pages_login.html" target="_blank"> Login </a>
                  </li>
                  <li>
                    <a href="pages_login(alt).html" target="_blank"> Login Alt
                      <span class="label label-xs bg-primary">New</span>
                    </a>
                  </li>
                  <li>
                    <a href="pages_register.html" target="_blank"> Register </a>
                  </li>
                  <li>
                    <a href="pages_register(alt).html" target="_blank"> Register Alt
                      <span class="label label-xs bg-primary">New</span>
                    </a>
                  </li>
                  <li>
                    <a href="pages_screenlock.html" target="_blank"> Screenlock </a>
                  </li>
                  <li>
                    <a href="pages_screenlock(alt).html" target="_blank"> Screenlock Alt
                      <span class="label label-xs bg-primary">New</span>
                    </a>
                  </li>
                  <li>
                    <a href="pages_forgotpw.html" target="_blank"> Forgot Password </a>
                  </li>
                  <li>
                    <a href="pages_forgotpw(alt).html" target="_blank"> Forgot Password Alt
                      <span class="label label-xs bg-primary">New</span>
                    </a>
                  </li>
                  <li>
                    <a href="pages_coming-soon.html" target="_blank"> Coming Soon
                    </a>
                  </li>
                  <li>
                    <a href="pages_404.html"> 404 Error </a>
                  </li>
                  <li>
                    <a href="pages_500.html"> 500 Error </a>
                  </li>
                  <li>
                    <a href="pages_404(alt).html"> 404 Error Alt </a>
                  </li>
                  <li>
                    <a href="pages_500(alt).html"> 500 Error Alt </a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="accordion-toggle" href="#">
                  <span class="fa fa-desktop"></span> Basic
                  <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                  <li>
                    <a href="pages_search-results.html">Search Results
                      <span class="label label-xs bg-primary">New</span>
                    </a>
                  </li>
                  <li>
                    <a href="pages_profile.html"> Profile </a>
                  </li>
                  <li>
                    <a href="pages_timeline.html"> Timeline Split </a>
                  </li>
                  <li>
                    <a href="pages_timeline-single.html"> Timeline Single </a>
                  </li>
                  <li>
                    <a href="pages_faq.html"> FAQ Page </a>
                  </li>
                  <li>
                    <a href="pages_calendar.html"> Calendar </a>
                  </li>
                  <li>
                    <a href="pages_messages.html"> Messages </a>
                  </li>
                  <li>
                    <a href="pages_messages(alt).html"> Messages Alt </a>
                  </li>
                  <li>
                    <a href="pages_gallery.html"> Gallery </a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="accordion-toggle" href="#">
                  <span class="fa fa-usd"></span> Misc
                  <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                  <li>
                    <a href="pages_invoice.html"> Printable Invoice </a>
                  </li>
                  <li>
                    <a href="pages_blank.html"> Blank </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>

          <!-- sidebar bullets -->
          <li class="sidebar-label pt20">Projects</li>
          <li class="sidebar-proj">
            <a href="#projectOne">
              <span class="fa fa-dot-circle-o text-primary"></span>
              <span class="sidebar-title">Website Redesign</span>
            </a>
          </li>
          <li class="sidebar-proj">
            <a href="#projectTwo">
              <span class="fa fa-dot-circle-o text-info"></span>
              <span class="sidebar-title">Ecommerce Panel</span>
            </a>
          </li>
          <li class="sidebar-proj">
            <a href="#projectTwo">
              <span class="fa fa-dot-circle-o text-danger"></span>
              <span class="sidebar-title">Adobe Mockup</span>
            </a>
          </li>
          <li class="sidebar-proj">
            <a href="#projectThree">
              <span class="fa fa-dot-circle-o text-warning"></span>
              <span class="sidebar-title">SSD Upgrades</span>
            </a>
          </li>

          <!-- sidebar progress bars -->
          <li class="sidebar-label pt25 pb10">User Stats</li>
          <li class="sidebar-stat">
            <a href="#projectOne" class="fs11">
              <span class="fa fa-inbox text-info"></span>
              <span class="sidebar-title text-muted">Email Storage</span>
              <span class="pull-right mr20 text-muted">35%</span>
              <div class="progress progress-bar-xs mh20 mb10">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 35%">
                  <span class="sr-only">35% Complete</span>
                </div>
              </div>
            </a>
          </li>
          <li class="sidebar-stat">
            <a href="#projectOne" class="fs11">
              <span class="fa fa-dropbox text-warning"></span>
              <span class="sidebar-title text-muted">Bandwidth</span>
              <span class="pull-right mr20 text-muted">58%</span>
              <div class="progress progress-bar-xs mh20">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 58%">
                  <span class="sr-only">58% Complete</span>
                </div>
              </div>
            </a>
          </li>
        </ul>
        <!-- End: Sidebar Menu -->

	      <!-- Start: Sidebar Collapse Button -->
	      <div class="sidebar-toggle-mini">
	        <a href="#">
	          <span class="fa fa-sign-out"></span>
	        </a>
	      </div>
	      <!-- End: Sidebar Collapse Button -->

      </div>
      <!-- End: Sidebar Left Content -->

    </aside>
      <!-- End: Topbar -->
