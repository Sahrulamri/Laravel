<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home" class="align-text-bottom"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/posts') ? 'active' : '' }}" href="/dashboard/posts">
            <span data-feather="file-text" class="align-text-bottom"></span>
            My Posts
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/posts/create') ? 'active' : '' }}" href="/dashboard/posts/create">
            <span data-feather="file-plus" class="align-text-bottom"></span>
            Create New Post
          </a>
        </li>

      </ul>
      @can('admin')
          
      
      <h4 class="sidebar-heading d-flex ustify-content-between align-item-center px-3 mt-4 mb-1 text-muted">
        <span>Administrator</span>
      </h4>

      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/categories') ? 'active' : '' }}" href="/dashboard/categories">
            <span data-feather="grid" class="align-text-bottom"></span>
            Post Categories
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/categories/create') ? 'active' : '' }}" href="/dashboard/categories/create">
            <span data-feather="plus-square" class="align-text-bottom"></span>
            Create New Category
          </a>
        </li>
      </ul>
      @endcan
    </div>
  </nav>
