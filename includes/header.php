<!-- Top Navigation Bar -->
<nav class="navbar sticky-top navbar-expand-sm navbar_coca_cola main-colour">
    <div class="container">
        <!-- Brand -->
        <div class="logo">
            <a class="navbar-brand" href="javascript:showHome()">
                <h1>1</h1>
                <h1>oca</h1>
                <h2>Cola</h2>
                <h3>Journey</h3>
                <p>Refreshing the world, one story at a time</p>
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"><i class="fas fa-bars" style="color: white"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="javascript:showHome()"><i class="fa-solid fa-house"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title="About" data-toggle="popover" data-placement="bottom" data-trigger="hover" data-content="3d app 2023">About</a>
                </li>

                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">Drinks</a>
                    <div class="dropdown-menu dropdown-menu-right main-colour">
                        <a class="dropdown-item" href="javascript:showModel('coke')" >Coca Cola</a>
                        <a class="dropdown-item" href="javascript:showModel('sprite')">Sprite</a>
                        <a class="dropdown-item" href="javascript:showModel('pepper')">Dr Pepper</a>
                        <a class="dropdown-item" href="javascript:showModel('fanta')">Fanta</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">Extras</a>
                    <div class="dropdown-menu dropdown-menu-right main-colour">
                        <a class="dropdown-item" href="javascript:showDeeperUnderstanding()">Deeper </br>Understanding</a>
                        <a class="dropdown-item" href="javascript:showVerge3d()">Verge3D App</a>
                        <a class="dropdown-item" target="_blank" href="https://github.com/mjallad10/3dapp"><i class="fa-brands fa-github-square"></i> Git</a>
                        <a class="dropdown-item" target="_blank" href="#"><i class="fa-brands fa-github-square"></i> Models</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>