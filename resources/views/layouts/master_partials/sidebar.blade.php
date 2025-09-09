<aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">

    <!-- Logo -->
    <div class="logo-sn ms-d-block-lg">
      <a class="pl-0 ml-0 text-center" href="#"> Forex Product </a>
    </div>

    <!-- Navigation -->
    <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
        <!-- Dashboard -->
        <li class="menu-item">
            <a href="{{ url('admin/dashboard') }}" class="">
               <span><i class="material-icons fs-16">dashboard</i>Dashboard </span>
             </a>
        </li>

        <li class="menu-item">
            <a href="{{ route('admin.categories.index') }}" class="">
               <span><i class="material-icons fs-16">category</i>Categories </span>
             </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('admin.books.index') }}" class="">
               <span><i class="material-icons fs-16">books</i>Books </span>
             </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('admin.book-prices.index') }}" class="">
               <span><i class="material-icons fs-16">money</i>Book Prices </span>
             </a>
        </li>

        <li class="menu-item">
            <a href="{{ route('admin.shipping-prices.index') }}" class="">
               <span><i class="material-icons fs-16">message</i>Shipping Prices </span>
             </a>
        </li>
        <!-- /Dashboard -->

        <!-- /Apps -->
    </ul>


  </aside>
