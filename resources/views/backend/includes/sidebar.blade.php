<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <span class="align-middle">AdminKit</span>
        </a>
        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>
            <li class="sidebar-item active">
                 <a class="sidebar-link" href="index.html"> <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span></a>
            </li>
            <li class="sidebar-header">
                Tools & Components
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('admin.category.index') }}">
               <i class="align-middle" data-feather="square"></i> <span class="align-middle">Categories</span> </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('admin.tag.index') }}">
                   <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Tags</span>
                </a>
            </li>
            <li class="menu">
                <a class="sidebar-link dropdown-btn">
                    <i class="fa-solid fa-indent fa-lg allign-middle"></i> <span class="align-middle">Post <i class="fa-solid fa-chevron-down"></i></span>
                </a>

                <div class="dropdown-container">
                    <a href="{{ route('admin.post.index') }}"> <i class="fa-solid fa-list"></i> List </a>
                    <a href="#"> <i class="fa-solid fa-circle-plus"></i> Add</a>
                    <a href="#"> <i class="fa-solid fa-pen-to-square"></i> Update</a>
                  </div>

           </li>
            <li class="menu">
                <a class="sidebar-link dropdown-btn">
                    <i class="fa-solid fa-indent fa-lg allign-middle"></i> <span class="align-middle">Slug <i class="fa-solid fa-chevron-down"></i></span>
                </a>

                <div class="dropdown-container">
                    <a href="{{ route('admin.post.index') }}"> <i class="fa-solid fa-list"></i> List </a>
                    <a href="#"> <i class="fa-solid fa-circle-plus"></i> Add</a>
                    <a href="#"> <i class="fa-solid fa-pen-to-square"></i> Update</a>
                  </div>

           </li>
        </ul>

    </div>
</nav>
