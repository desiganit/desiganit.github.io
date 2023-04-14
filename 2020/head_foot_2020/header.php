<header>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand text-primary font-weight-bold" href="../index.php"><img src="../img/z.png" height="40">
                <span style="font-variant-caps: small-caps;"> Desi Ganit </span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item <?php if($page_name == 'index'){echo 'active';} ?>">
                        <a class="nav-link" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item <?php if($page_name == 'gate'){echo 'active';} ?>">
                        <a class="nav-link" href="../gate.php">GATE</a>
                    </li>
                    <li class="nav-item <?php if($page_name == 'net'){echo 'active';} ?>">
                        <a class="nav-link" href="net.php">CSIR-NET</a>
                    </li>
                    <li class="nav-item <?php if($page_name == 'query'){echo 'active';} ?>">
                        <a class="nav-link" href="../query.php">Query</a>
                    </li>
                    <li class="nav-item <?php if($page_name == 'daily_boost'){echo 'active';} ?>">
                        <a class="nav-link" href="../daily_boost.php">Daily Boost</a>
                    </li>
                    <!-- <li class="nav-item <?php if($page_name == 'latest_news'){echo 'active';} ?>">
                        <a class="nav-link" href="../latest_news.php">Latest News</a>
                    </li> -->
                    <li class="nav-item <?php if($page_name == 'contact_us'){echo 'active';} ?>">
                        <a class="nav-link" href="../contact_us.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navigation -->
</header>