<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="user-profile treeview">
          <a href="{{route('admin.index')}}">
			<img src="../../../images/user5-128x128.jpg" alt="user">
            <span>{{Auth::user()->name}}</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
		  <ul class="treeview-menu">
            <li><a href="javascript:void()"><i class="fa fa-user mr-5"></i>My Profile </a></li>
			<li><a href="javascript:void()"><i class="fa fa-money mr-5"></i>My Balance</a></li>
			<li><a href="javascript:void()"><i class="fa fa-envelope-open mr-5"></i>Inbox</a></li>
			<li><a href="javascript:void()"><i class="fa fa-cog mr-5"></i>Account Setting</a></li>
			<li>
                <a href="{{route('logout')}}" onclick="event.preventDefault();
                this.closest('form').submit();"><i class="fa fa-power-off"></i> Logout x</a>
            </li>
          </ul>
        </li>
        <li class="header nav-small-cap">PERSONAL</li>
        <li>
          <a href="../../index.html">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-shopping-cart"></i>
            <span>e-Commerce</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			<li><a href="../ecommerce/products.html"><i class="fa fa-circle-thin"></i>Products</a></li>
            <li><a href="../ecommerce/orders.html"><i class="fa fa-circle-thin"></i>Product Orders</a></li>
            <li><a href="../ecommerce/product-details.html"><i class="fa fa-circle-thin"></i>Product Details</a></li>
			<li><a href="../ecommerce/product-edit.html"><i class="fa fa-circle-thin"></i>Product Edit</a></li>
            <li><a href="../ecommerce/cart.html"><i class="fa fa-circle-thin"></i>Product Cart</a></li>
            <li><a href="../ecommerce/checkout.html"><i class="fa fa-circle-thin"></i>Product Checkout</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i>
            <span>App</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../app/app-chat.html"><i class="fa fa-circle-thin"></i>Chat app</a></li>
            <li><a href="../app/app-contact.html"><i class="fa fa-circle-thin"></i>Contact / Employee</a></li>
            <li><a href="../app/app-ticket.html"><i class="fa fa-circle-thin"></i>Support Ticket</a></li>
			<li><a href="../app/calendar.html"><i class="fa fa-circle-thin"></i>Calendar</a></li>
            <li><a href="../app/profile.html"><i class="fa fa-circle-thin"></i>Profile</a></li>
            <li><a href="../app/userlist-grid.html"><i class="fa fa-circle-thin"></i>Userlist Grid</a></li>
			<li><a href="../app/userlist.html"><i class="fa fa-circle-thin"></i>Userlist</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../mailbox/mailbox.html"><i class="fa fa-circle-thin"></i>Inbox</a></li>
            <li><a href="../mailbox/compose.html"><i class="fa fa-circle-thin"></i>Compose</a></li>
            <li><a href="../mailbox/read-mail.html"><i class="fa fa-circle-thin"></i>Read</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>UI Elements</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../UI/badges.html"><i class="fa fa-circle-thin"></i>Badges</a></li>
            <li><a href="../UI/border-utilities.html"><i class="fa fa-circle-thin"></i>Border</a></li>
            <li><a href="../UI/buttons.html"><i class="fa fa-circle-thin"></i>Buttons</a></li>
            <li><a href="../UI/bootstrap-switch.html"><i class="fa fa-circle-thin"></i>Bootstrap Switch</a></li>
            <li><a href="../UI/cards.html"><i class="fa fa-circle-thin"></i>User Card</a></li>
            <li><a href="../UI/color-utilities.html"><i class="fa fa-circle-thin"></i>Color</a></li>
            <li><a href="../UI/date-paginator.html"><i class="fa fa-circle-thin"></i>Date Paginator</a></li>
            <li><a href="../UI/dropdown.html"><i class="fa fa-circle-thin"></i>Dropdown</a></li>
            <li><a href="../UI/dropdown-grid.html"><i class="fa fa-circle-thin"></i>Dropdown Grid</a></li>
            <li><a href="../UI/general.html"><i class="fa fa-circle-thin"></i>General</a></li>
            <li><a href="../UI/icons.html"><i class="fa fa-circle-thin"></i>Icons</a></li>
            <li><a href="../UI/media-advanced.html"><i class="fa fa-circle-thin"></i>Advanced Medias</a></li>
			<li><a href="../UI/modals.html"><i class="fa fa-circle-thin"></i>Modals</a></li>
			<li><a href="../UI/nestable.html"><i class="fa fa-circle-thin"></i>Nestable</a></li>
            <li><a href="../UI/notification.html"><i class="fa fa-circle-thin"></i>Notification</a></li>
            <li><a href="../UI/portlet-draggable.html"><i class="fa fa-circle-thin"></i>Draggable Portlets</a></li>
            <li><a href="../UI/ribbons.html"><i class="fa fa-circle-thin"></i>Ribbons</a></li>
            <li><a href="../UI/sliders.html"><i class="fa fa-circle-thin"></i>Sliders</a></li>
            <li><a href="../UI/sweatalert.html"><i class="fa fa-circle-thin"></i>Sweet Alert</a></li>
            <li><a href="../UI/tab.html"><i class="fa fa-circle-thin"></i>Tabs</a></li>
            <li><a href="../UI/timeline.html"><i class="fa fa-circle-thin"></i>Timeline</a></li>
            <li><a href="../UI/timeline-horizontal.html"><i class="fa fa-circle-thin"></i>Horizontal Timeline</a></li>
          </ul>
        </li>
        <li class="header nav-small-cap">FORMS, TABLE & LAYOUTS</li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-bars"></i>
            <span>Widgets</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../widgets/blog.html"><i class="fa fa-circle-thin"></i>Blog</a></li>
            <li><a href="../widgets/chart.html"><i class="fa fa-circle-thin"></i>Chart</a></li>
            <li><a href="../widgets/list.html"><i class="fa fa-circle-thin"></i>List</a></li>
            <li><a href="../widgets/social.html"><i class="fa fa-circle-thin"></i>Social</a></li>
            <li><a href="../widgets/statistic.html"><i class="fa fa-circle-thin"></i>Statistic</a></li>
            <li><a href="../widgets/weather.html"><i class="fa fa-circle-thin"></i>Weather</a></li>
            <li><a href="../widgets/widgets.html"><i class="fa fa-circle-thin"></i>Widgets</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Layout Options</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../layout/boxed.html"><i class="fa fa-circle-thin"></i>Boxed</a></li>
            <li><a href="../layout/fixed.html"><i class="fa fa-circle-thin"></i>Fixed</a></li>
            <li><a href="../layout/collapsed-sidebar.html"><i class="fa fa-circle-thin"></i>Collapsed Sidebar</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-square-o"></i>
            <span>Box</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../box/advanced.html"><i class="fa fa-circle-thin"></i>Advanced</a></li>
            <li><a href="../box/basic.html"><i class="fa fa-circle-thin"></i>Basic</a></li>
            <li><a href="../box/color.html"><i class="fa fa-circle-thin"></i>Color</a></li>
			<li><a href="../box/group.html"><i class="fa fa-circle-thin"></i>Group</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Charts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../charts/chartjs.html"><i class="fa fa-circle-thin"></i>ChartJS</a></li>
            <li><a href="../charts/flot.html"><i class="fa fa-circle-thin"></i>Flot</a></li>
            <li><a href="../charts/inline.html"><i class="fa fa-circle-thin"></i>Inline charts</a></li>
            <li><a href="../charts/morris.html"><i class="fa fa-circle-thin"></i>Morris</a></li>
            <li><a href="../charts/peity.html"><i class="fa fa-circle-thin"></i>Peity</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../forms/advanced.html"><i class="fa fa-circle-thin"></i>Advanced Elements</a></li>
            <li><a href="../forms/code-editor.html"><i class="fa fa-circle-thin"></i>Code Editor</a></li>
            <li><a href="../forms/editor-markdown.html"><i class="fa fa-circle-thin"></i>Markdown</a></li>
            <li><a href="../forms/editors.html"><i class="fa fa-circle-thin"></i>Editors</a></li>
            <li><a href="../forms/form-validation.html"><i class="fa fa-circle-thin"></i>Form Validation</a></li>
            <li><a href="../forms/form-wizard.html"><i class="fa fa-circle-thin"></i>Form Wizard</a></li>
            <li><a href="../forms/general.html"><i class="fa fa-circle-thin"></i>General Elements</a></li>
            <li><a href="../forms/mask.html"><i class="fa fa-circle-thin"></i>Formatter</a></li>
            <li><a href="../forms/xeditable.html"><i class="fa fa-circle-thin"></i>Xeditable Editor</a></li>
          </ul>
        </li>
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="simple.html"><i class="fa fa-circle-thin"></i>Simple tables</a></li>
            <li class="active"><a href="data.html"><i class="fa fa-circle-thin"></i>Data tables</a></li>
            <li><a href="editable-tables.html"><i class="fa fa-circle-thin"></i>Editable Tables</a></li>
            <li><a href="table-color.html"><i class="fa fa-circle-thin"></i>Table Color</a></li>
          </ul>
        </li>
		<li>
          <a href="../email/index.html">
            <i class="fa fa-envelope-open-o"></i> <span>Emails</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>
		<li class="header nav-small-cap">EXTRA COMPONENTS</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-map"></i> <span>Map</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../map/map-google.html"><i class="fa fa-circle-thin"></i>Google Map</a></li>
            <li><a href="../map/map-vector.html"><i class="fa fa-circle-thin"></i>Vector Map</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-plug"></i> <span>Extension</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../extension/fullscreen.html"><i class="fa fa-circle-thin"></i>Fullscreen</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-file"></i> <span>Sample Pages</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../samplepage/blank.html"><i class="fa fa-circle-thin"></i>Blank</a></li>
            <li><a href="../samplepage/coming-soon.html"><i class="fa fa-circle-thin"></i>Coming Soon</a></li>
            <li><a href="../samplepage/custom-scroll.html"><i class="fa fa-circle-thin"></i>Custom Scrolls</a></li>
			<li><a href="../samplepage/faq.html"><i class="fa fa-circle-thin"></i>FAQ</a></li>
			<li><a href="../samplepage/gallery.html"><i class="fa fa-circle-thin"></i>Gallery</a></li>
			<li><a href="../samplepage/invoice.html"><i class="fa fa-circle-thin"></i>Invoice</a></li>
			<li><a href="../samplepage/lightbox.html"><i class="fa fa-circle-thin"></i>Lightbox Popup</a></li>
			<li><a href="../samplepage/pace.html"><i class="fa fa-circle-thin"></i>Pace</a></li>
			<li><a href="../samplepage/pricing.html"><i class="fa fa-circle-thin"></i>Pricing</a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-thin"></i>Authentication
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="../samplepage/login.html"><i class="fa fa-circle"></i>Login</a></li>
                <li><a href="../samplepage/register.html"><i class="fa fa-circle"></i>Register</a></li>
                <li><a href="../samplepage/lockscreen.html"><i class="fa fa-circle"></i>Lockscreen</a></li>
                <li><a href="../samplepage/user-pass.html"><i class="fa fa-circle"></i>Recover password</a></li>
              </ul>
            </li>
			<li class="treeview">
              <a href="#"><i class="fa fa-circle-thin"></i>Error Pages
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="../samplepage/404.html"><i class="fa fa-circle"></i>404</a></li>
                <li><a href="../samplepage/500.html"><i class="fa fa-circle"></i>500</a></li>
                <li><a href="../samplepage/maintenance.html"><i class="fa fa-circle"></i>Maintenance</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Level One</a></li>
            <li class="treeview">
              <a href="#">Level One
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#">Level Two</a></li>
                <li class="treeview">
                  <a href="#">Level Two
                    <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#">Level Three</a></li>
                    <li><a href="#">Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#">Level One</a></li>
          </ul>
        </li>

      </ul>
    </section>
  </aside>
