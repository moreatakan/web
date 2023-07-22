<div class="offcanvas-lg offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
    <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
        <ul class="nav flex-column">
            <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="#">
                <svg class="bi"><use xlink:href="#house-fill"/></svg>
                Dashboard
            </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('backend/dashboard/slider/slider') ? 'active' : '' }}" href="/dashboard/slider">
                    <svg class="bi"><use xlink:href="#file-earmark"/></svg>
                    Slide Banner
                </a>
            </li>
            <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="/post">
                <svg class="bi"><use xlink:href="#file-earmark"/></svg>
                Posts
            </a>
            </li>
            
            
        </ul>


        <hr class="my-3">

        <ul class="nav flex-column mb-auto">
            <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="#">
                <svg class="bi"><use xlink:href="#gear-wide-connected"/></svg>
                Settings
            </a>
            </li>
            <li class="nav-item">
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="nav-link d-flex align-items-center gap-2">
                        <svg class="bi"><use xlink:href="#door-closed"/></svg>Log out
                    </button>
                </form>
                
                
            </li>
        </ul>
    </div>
</div>