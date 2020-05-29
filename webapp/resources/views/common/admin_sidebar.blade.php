<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">

      <li class="header">MAIN NAVIGATION</li> 

      <li class="treeview">
        <a href="{{ url('edit-profile') }}">
          <i class="fa fa-arrow-circle-right"></i> <span>Edit Profile</span> <i class="fa fa-angle-left pull-right"></i>
        </a> 
      </li> 

      @if(Auth::user()->is_admin == 1)
        <!-- <li>
          <a href="{{ url('chat') }}" target="_blank">
            <i class="fa fa-arrow-circle-right"></i> <span>Chat</span>
          </a>
        </li> -->

        <li class="treeview">
          <a href="#">
            <i class="fa fa-arrow-circle-right"></i> <span>Manage Ads</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('add-ad') }}"><i class="fa fa-circle-o"></i> Add new ad</a></li>
            <li><a href="{{ url('view-ads') }}"><i class="fa fa-circle-o"></i> View ads</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-arrow-circle-right"></i> <span>Manage Home Slider</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('add-slider') }}"><i class="fa fa-circle-o"></i> Add new slider image</a></li>
            <li><a href="{{ url('view-sliders') }}"><i class="fa fa-circle-o"></i> View slider images</a></li>
          </ul>
        </li> 

        <li class="treeview">
          <a href="#">
            <i class="fa fa-arrow-circle-right"></i> <span>Manage Association</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('add-new-association') }}"><i class="fa fa-circle-o"></i> Add new association</a></li>
            <li><a href="{{ url('view-associations') }}"><i class="fa fa-circle-o"></i> View Associactions</a></li>
            <li><a href="{{ url('add-new-association-member') }}"><i class="fa fa-circle-o"></i> Membership Requests</a></li>
            <li><a href="{{ url('add-new-association-member') }}"><i class="fa fa-circle-o"></i> Add new association member</a></li>
            <li><a href="{{ url('view-association-members') }}"><i class="fa fa-circle-o"></i> View association members</a></li>
            
          </ul>
        </li> 
        <li class="treeview">
          <a href="{{ url('view-meta-tag') }}">
            <i class="fa fa-arrow-circle-right"></i> <span>Manage Seo</span> <i class="fa fa-angle-left pull-right"></i>
          </a> 
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-arrow-circle-right"></i> <span>Manage News</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('add-news') }}"><i class="fa fa-circle-o"></i> Add news</a></li>
            <li><a href="{{ url('view-our-news') }}"><i class="fa fa-circle-o"></i> View Our news</a></li>

            <li><a href="{{ url('view-all-news') }}"><i class="fa fa-circle-o"></i> View all news</a></li>
          </ul>
        </li> 

        <li class="treeview">
          <a href="#">
            <i class="fa fa-arrow-circle-right"></i> <span>Manage Blogs</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('add-blog') }}"><i class="fa fa-circle-o"></i> Add blog</a></li>
            <li><a href="{{ url('view-our-blogs') }}"><i class="fa fa-circle-o"></i> View Our blogs</a></li>

            <li><a href="{{ url('view-all-blogs') }}"><i class="fa fa-circle-o"></i> View all blogs</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-arrow-circle-right"></i> <span>Manage Jewellery Settings</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('add-jewellery-category') }}"><i class="fa fa-circle-o"></i> Add jewellery category</a></li>
            <li><a href="{{ url('view-jewellery-category') }}"><i class="fa fa-circle-o"></i> View jewellery category</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-arrow-circle-right"></i> <span>Manage News/Blog Settings</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('add-news-blog-category') }}"><i class="fa fa-circle-o"></i> Add News/Blog category</a></li>
            <li><a href="{{ url('view-news-blog-category') }}"><i class="fa fa-circle-o"></i> View News/Blogcategory</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-arrow-circle-right"></i> <span>Manage Catalogue</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('add-catalogue-product') }}"><i class="fa fa-circle-o"></i> Add products</a></li>
            <li><a href="{{ url('view-catalogue-products') }}"><i class="fa fa-circle-o"></i> View catalogue</a></li>
            <li><a href="{{ url('view-qutation-list') }}"><i class="fa fa-circle-o"></i> View Qutation</a></li> 
          </ul>
        </li> 

        <li>
          <a href="{{ url('admin-view-orders') }}">
            <i class="fa fa-arrow-circle-right"></i> <span>All Orders</span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-arrow-circle-right"></i> <span>Site Setting</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('edit-footer') }}"><i class="fa fa-circle-o"></i>Edit Footer Content</a></li>
            <li><a href="{{ url('edit-social') }}"><i class="fa fa-circle-o"></i>Edit Social Links</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-arrow-circle-right"></i> <span>Manage Rate</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu"> 
            <li><a href="{{ url('add-rate') }}"><i class="fa fa-circle-o"></i>Add Rate</a></li>
            <li><a href="{{ url('view-rate') }}"><i class="fa fa-circle-o"></i>View Rate</a></li> 
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-arrow-circle-right"></i> <span>Manage CreditScore</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('add-blacklist') }}"><i class="fa fa-circle-o"></i> Add to creditscore</a></li>
            <li><a href="{{ url('view-blacklist') }}"><i class="fa fa-circle-o"></i> View creditscore</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-arrow-circle-right"></i> <span>Manage Directory</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('add-directory') }}"><i class="fa fa-circle-o"></i> Add to directory</a></li>
            <li><a href="{{ url('view-directory') }}"><i class="fa fa-circle-o"></i> View directory</a></li>
            <li><a href="{{ url('approve-now') }}"><i class="fa fa-circle-o"></i> Request Approve</a></li> 
            <li><a href="{{ url('view-qutation-directory-list') }}"><i class="fa fa-circle-o"></i> View Qutation</a></li> 
          </ul>
        </li>  
        <li class="treeview">
          <a href="#">
            <i class="fa fa-arrow-circle-right"></i> <span>Manage Jobs</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('add-job') }}"><i class="fa fa-circle-o"></i> Add new job</a></li>
            <li><a href="{{ url('view-jobs') }}"><i class="fa fa-circle-o"></i> View jobs</a></li>
            <li><a href="{{ url('view-all-jobs') }}"><i class="fa fa-circle-o"></i> View all jobs</a></li> 
          </ul>
        </li>  
        <li class="treeview">
          <a href="#">
            <i class="fa fa-arrow-circle-right"></i> <span>Manage Shop</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('add-shop-product') }}"><i class="fa fa-circle-o"></i> Add new product</a></li>
            <li><a href="{{ url('view-shop-products') }}"><i class="fa fa-circle-o"></i> View shop product</a></li>
          </ul>
        </li>  
      @elseif(Auth::user()->is_admin == 0)

      @if(Auth::user()->is_approved == 1)
          <!-- <li>
            <a href="{{ url('chat') }}" target="_blank">
              <i class="fa fa-arrow-circle-right"></i> <span>Chat</span>
            </a>
          </li> -->
          @if(Auth::user()->has_website != 2) 
            <li class="treeview">
              <a href="#">
                <i class="fa fa-arrow-circle-right"></i> <span>Manage your Website</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                @if(Auth::user()->has_website == 0)
                  <li><a href="{{ url('apply-for-website') }}"><i class="fa fa-circle-o"></i> Apply for Website</a></li>
                @else
                  <li><a href="{{ url('update-website-details') }}"><i class="fa fa-circle-o"></i> Website Details</a></li>
                  <li><a href="{{ url('view-website-contact-enquiry') }}"><i class="fa fa-circle-o"></i> Website Contact Enquiry</a></li>
                @endif
              </ul>
            </li> 
          @endif

          <li class="treeview">
            <a href="#">
              <i class="fa fa-arrow-circle-right"></i> <span>Manage CreditScore</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ url('add-blacklist') }}"><i class="fa fa-circle-o"></i> Add to creditscore</a></li>
              <li><a href="{{ url('view-blacklist') }}"><i class="fa fa-circle-o"></i> View creditscore</a></li>
            </ul>
          </li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-arrow-circle-right"></i> <span>Manage Catalogue</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ url('add-catalogue-product') }}"><i class="fa fa-circle-o"></i> Add products</a></li>
              <li><a href="{{ url('view-vendor-catalogue-products') }}"><i class="fa fa-circle-o"></i> View catalogue</a></li>
              <!-- <li><a href="{{ url('view-qutation-list') }}"><i class="fa fa-circle-o"></i> View Qutation</a></li> --> 
            </ul>
          </li>

          <li>
            <a href="{{ url('view-orders') }}">
              <i class="fa fa-arrow-circle-right"></i> <span>All Orders</span>
            </a>
          </li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-arrow-circle-right"></i> <span>Manage Jobs</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ url('add-job') }}"><i class="fa fa-circle-o"></i> Add new job</a></li>
              <li><a href="{{ url('view-jobs') }}"><i class="fa fa-circle-o"></i> View jobs</a></li>
            </ul>
          </li> 

          <li class="treeview">
            <a href="#">
              <i class="fa fa-arrow-circle-right"></i> <span>Manage Shop</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ url('add-shop-product') }}"><i class="fa fa-circle-o"></i> Add new product</a></li>
              <li><a href="{{ url('view-shop-products') }}"><i class="fa fa-circle-o"></i> View shop product</a></li>
            </ul>
          </li>
      @endif
        <!-- <li>
          <a href="{{ url('my-orders') }}">
            <i class="fa fa-arrow-circle-right"></i> <span>My Orders</span>
          </a>
        </li> -->

       <!--  <li>
          <a href="{{ url('my-job-applications') }}">
            <i class="fa fa-arrow-circle-right"></i> <span>My Job Applications</span>
          </a>
        </li> -->
        <li>
          <a href="{{ url('join-association') }}">
            <i class="fa fa-arrow-circle-right"></i> <span>Join an Association</span>
          </a>
        </li>
        @if(Auth::user()->is_approved == 0)
          <li>
            <a href="{{ url('become-a-vendor') }}">
              <i class="fa fa-arrow-circle-right"></i> <span>Become a Vendor</span>
            </a>
          </li> 
        @else
          <li>
            <a href="{{ url('edit-vendor-directory') }}">
              <i class="fa fa-arrow-circle-right"></i> <span>Edit Vendor</span>
            </a>
          </li> 
        @endif 
        <li class="treeview">
          <a href="#">
            <i class="fa fa-arrow-circle-right"></i> <span>Manage News</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('add-news') }}"><i class="fa fa-circle-o"></i> Add news</a></li>
            <li><a href="{{ url('view-our-news') }}"><i class="fa fa-circle-o"></i> View News</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-arrow-circle-right"></i> <span>Manage Blogs</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('add-blog') }}"><i class="fa fa-circle-o"></i> Add blog</a></li>
            <li><a href="{{ url('view-our-blogs') }}"><i class="fa fa-circle-o"></i> View Blogs</a></li>

          </ul>
        </li>
      @endif
      <!-- <li class="active treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
          <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
        </ul>
      </li>


      <li>
        <a href="pages/widgets.html">
          <i class="fa fa-th"></i> <span>Widgets</span> <small class="label pull-right bg-green">new</small>
        </a>
      </li> -->
      <li>
        <a href="{{ url('/') }}">
          <i class="fa fa-arrow-circle-right"></i> <span>Go To Sonamandi</span>
        </a>
      </li> 
      
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
