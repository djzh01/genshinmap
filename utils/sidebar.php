<?php
spl_autoload_register(function ($classname) {
    include "classes/$classname.php";
});
$db = new Database();

?>

<div id="mySidebar" class="sidebar bg-dark">
    <a href="javascript:void(0)" class="row" onclick="closeNav()">&times;</a>
    <div class="accordion accordion-flush" id="accordionExample">
        <div class="accordion-item bg-dark">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button bg-dark bg-gradient collapsed text-white text-uppercase fw-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Characters
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body p-0">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-dark">
                            <div id="overlay" onclick="off()">
                                <br>
                                <iframe src="./Characters.php?name=Diluc Ragnvindr" onload="this.width=window.innerWidth*0.8;this.height=window.innerHeight*0.8;" class="mt-5"></iframe>
                            </div>
                            <button class="btn btn-outline text-white w-100" onclick="on()" id="entity" type="submit" name="name" value="Diluc">Diluc Ragnvindr</button>
                        </li>
                        <li class="list-group-item bg-dark">
                            <div id="overlay2" onclick="off2()">
                                <br>
                                <iframe src="./Characters.php?name=Jean Gunnhildr" onload="this.width=window.innerWidth*0.8;this.height=window.innerHeight*0.8;" class="mt-5"></iframe>
                            </div>
                            <button class="btn btn-outline text-white w-100" onclick="on2()" id="entity2" type="submit" name="name" value="Diluc">Jean Gunnhildr</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-item bg-dark">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button bg-dark bg-gradient collapsed text-white text-uppercase fw-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    Enemies
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body p-0">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-dark">
                            <div id="overlay3" onclick="off3()">
                                <br>
                                <iframe src="./Enemies.php?name=Ruin Guard" onload="this.width=window.innerWidth*0.8;this.height=window.innerHeight*0.8;" class="mt-5"></iframe>
                            </div>
                            <button class="btn btn-outline text-white w-100" onclick="on3()" id="entity3" type="submit" name="name" value="Ruin Guard">Ruin Guard</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-item bg-dark">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button bg-dark bg-gradient collapsed text-white text-uppercase fw-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                    Items
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-dark">
                            <div id="overlay4" onclick="off4()">
                                <br>
                                <iframe src="./Items.php?name=Skyward Blade" onload="this.width=window.innerWidth*0.8;this.height=window.innerHeight*0.8;" class="mt-5"></iframe>
                            </div>
                            <button class="btn btn-outline text-white w-100" onclick="on4()" id="entity3" type="submit" name="name" value="Ruin Guard">Skyward Blade</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>