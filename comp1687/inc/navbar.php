<nav class="uk-navbar-container uk-margin"  uk-navbar>
        <div class="uk-navbar-left">

            <a class="uk-navbar-item uk-logo"  href="/~za1180x/comp1687/index.php"><img src="/~za1180x/comp1687/jobswatchsmall.png" alt="sitelogo"></a>

            <ul class="uk-navbar-nav">
                <li>
                    <a href="/~za1180x/comp1687/index.php">
                        <span class="uk-icon uk-margin-small-right" ></span>
                        <b>Home Page</b>
                    </a>
                </li>
                <li>
                    <a href="/~za1180x/comp1687/about.php">
                        <span class="uk-icon uk-margin-small-right" ></span>
                        <b>About Us</b>
                    </a>
                </li>
                <li>
                    <a href="/~za1180x/comp1687/jobs.php">
                        <span class="uk-icon uk-margin-small-right" ></span>
                        <b>Jobs</b>
                    </a>
                </li>
        </div>

               <div class="uk-navbar-right">
            <ul class="uk-navbar-nav">

                <li <?php  if(!isset($_SESSION['user_id'])) echo " style='display: none';"; ?>>
                    <a href="/~za1180x/comp1687/search.php">
                        <span class="uk-icon uk-margin-small-right" ></span>
                        <b>Search Users</b>
                    </a>
                </li>
                <li <?php  if(!isset($_SESSION['user_id'])) echo " style='display: none';"; ?>>
                    <a href="/~za1180x/comp1687/dashboard.php">
                        <span class="uk-icon uk-margin-small-right" ></span>
                        <b>Profile Page</b>
                    </a>
                </li>
        </div>

    </nav>