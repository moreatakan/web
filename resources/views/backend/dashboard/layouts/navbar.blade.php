<div class="offcanvas-lg offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
    <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3">
        <ul class="nav flex-column">
            <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="#">
                <svg class="bi"><use xlink:href="#house-fill"/></svg>
                Dashboard
            </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('/dashboard/slider*') ? 'active' : '' }}" href="/dashboard/slider">
                    <svg class="bi"><use xlink:href="#file-earmark"/></svg>
                    Slide Banner
                </a>
            </li>

            <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('/dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
                <svg class="bi"><use xlink:href="#file-earmark"/></svg>
                Posts
            </a>
            </li>
            
            

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <svg class="bi"><use xlink:href="#file-earmark"/></svg>
                Perizinan
                </a>
                <ul class="dropdown-menu">
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('/dashboard/izin*') ? 'active' : '' }}" href="/dashboard/izin">
                            Jenis Izin
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('/dashboard/izin*') ? 'active' : '' }}" href="/dashboard/categoryizin">
                            Category Izin
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('/dashboard/sp*') ? 'active' : '' }}" href="/dashboard/sp">
                            Standar Pelayanan
                        </a>
                    </li>
                </ul>
            </li>

            
            
        </ul>


        <hr class="my-3">

        <ul class="nav flex-column mb-auto">
    
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