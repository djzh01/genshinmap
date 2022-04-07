<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="George Cao and Daniel Zhao">
    <meta name="description" content="Genshin Impact Archive">
    <meta name="keywords" content="Genshin Impact World Map Lore Archive Items">
    <link rel="stylesheet/less" type="text/css" href="styles/styles.less" />
    <link rel="stylesheet/less" type="text/css" href="styles/profile.less" />

    <script src="https://cdn.jsdelivr.net/npm/less@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Teyvationary</title>
</head>

<body>

    <div class="pos-f-t">
        <nav style="z-index: 1;" class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler ml-1" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand ml-1" href="teyvat.php">TEYVAT MAP</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav w-100">
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Teyvat
                        </a>
                        <ul id="teyvatDropdown" class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="teyvat.html">
                                    <img src="images/Elements/Anemo.png" alt="Anemo Symbol">
                                    Mondstadt
                                    <img src="images/RegionIcons/Mondstadt.png" alt="Mondstadt">
                                </a></li>
                            <li><a class="dropdown-item" href="teyvat.html">
                                    <img src="images/Elements/Geo.png" alt="Geo Symbol">
                                    Liyue
                                    <img src="images/RegionIcons/Liyue.png" alt="Liyue">
                                </a></li>
                            <li><a class="dropdown-item" href="teyvat.html">
                                    <img src="images/Elements/Electro.png" alt="Electro Symbol">
                                    Inazuma
                                    <img src="images/RegionIcons/Inazuma.png" alt="Inazuma">
                                </a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="enkanomiya.html">Enkanomiya</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Three Realms Gateway</a>
                    </li>
                    <li id="profile" class="nav-item">
                        <a class="nav-link" href="profile.html">
                            <div class="d-flex align-items-center">
                                <span>
                                    My Page
                                </span>
                                <img class="rounded-circle"
                                    src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"
                                    alt="Profile Picture">
                            </div>
                        </a>
                    </li>
                </ul>
            </div>

        </nav>

    </div>

    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" width="150px"
                        src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"
                        alt="Profile picture">
                    <span class="font-weight-bold">
                        <?=$_SESSION["username"]?>
                    </span>
                    <span>
                        <label>Change Username</label><input type="text" name="username" class="form-control" value=""
                            placeholder="username">
                    </span>
                </div>
            </div>
            <div class="col-md-8">
                <h1 class="text-center">BOOKMARKS</h1>
                <hr>
                <ul class="bookmarks">

                    <li>
                        <a href="#">
                            <img src="https://cdn.mos.cms.futurecdn.net/rWa8PJZ7LFjyHqKHEASV5.jpg" alt="bookmark">
                            <p class="text-center">Yae Miko</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://progameguides.com/wp-content/uploads/2021/07/Genshin-Impact-Character-Raiden-Shogun-1-768x803.jpg"
                                alt="bookmark">
                            <p class="text-center">Raiden Shogun</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://www.pockettactics.com/wp-content/uploads/2021/02/genshin-impact-klee-3.jpg"
                                alt="bookmark">
                            <p class="text-center">Klee</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://www.pockettactics.com/wp-content/uploads/2021/02/genshin-impact-klee-3.jpg"
                                alt="bookmark">
                            <p class="text-center">Klee</p>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <img src="https://www.pockettactics.com/wp-content/uploads/2021/02/genshin-impact-klee-3.jpg"
                                alt="bookmark">
                            <p class="text-center">Klee</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="https://www.pockettactics.com/wp-content/uploads/2021/02/genshin-impact-klee-3.jpg"
                                alt="bookmark">
                            <p class="text-center">Klee</p>
                        </a>
                    </li>

                </ul>
            </div>
            <!-- <form action="updateProfile.php" method="post" class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label>First Name</label>
                            <input type="text" class="form-control" name="fname" placeholder="first name"
                                value="">
                        </div>
                        <div class="col-md-6"><label>Last Name</label><input type="text" name="lname"
                                class="form-control" value="" placeholder="last name">
                        </div>
                    </div>
                </div>
            </form> -->
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>