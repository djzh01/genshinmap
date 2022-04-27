<nav style="z-index: 10;" class="navbar navbar-expand-lg navbar-dark bg-dark bg-gradient">
    <button class="navbar-toggler ml-1" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand ml-1" href="./teyvat.php">TEYVAT MAP</a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav w-100">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Teyvat
                </a>
                <ul id="teyvatDropdown" class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="teyvat.php">
                            <img src="images/Elements/Anemo.png" alt="Anemo Symbol">
                            Mondstadt
                            <img src="images/RegionIcons/Mondstadt.png" alt="Mondstadt">
                        </a></li>
                    <li><a class="dropdown-item" href="teyvat.php">
                            <img src="images/Elements/Geo.png" alt="Geo Symbol">
                            Liyue
                            <img src="images/RegionIcons/Liyue.png" alt="Liyue">
                        </a></li>
                    <li><a class="dropdown-item" href="teyvat.php">
                            <img src="images/Elements/Electro.png" alt="Electro Symbol">
                            Inazuma
                            <img src="images/RegionIcons/Inazuma.png" alt="Inazuma">
                        </a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="enkanomiya.php">Enkanomiya</a>
            </li>
            <?php
            if (isset($_SESSION["email"])) {
                echo "<li id='logout'><a class='nav-link' href='logout.php'>Logout</a></li>";
            }
            ?>
            <li id="profile" class="nav-item" style="<?php echo isset($_SESSION["email"]) ? "" : "margin-left: auto;"
                                                        ?>">
                <a class="nav-link" href="profile.php">
                    <div class="d-flex align-items-center">
                        <span>
                            My Profile
                        </span>
                        <img class="rounded-circle" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg" alt="Profile picture">
                    </div>
                </a>
            </li>
        </ul>
    </div>

</nav>