
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="George Cao and Daniel Zhao">
    <meta name="description" content="Genshin Impact Archive">
    <meta name="keywords" content="Genshin Impact World Map Lore Archive Items">
    <link rel="stylesheet/less" type="text/css" href="../styles/styles.less" />
    <link rel="stylesheet/less" type="text/css" href="../styles/profile.less" />

    <script src="https://cdn.jsdelivr.net/npm/less@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Teyvationary</title>
</head>

<body>

   
    <div class="container rounded bg-white mt-5 mb-5">
        <h1 style="text-align: center; " class="center">ANDY's FAVORITE CHARACTERRRRRETARD</h1>
        <a href="#">
            <img src="https://www.pockettactics.com/wp-content/uploads/2021/02/genshin-impact-klee-3.jpg"
                alt="bookmark" style="border-radius: 50%; height: 50vh; width: 35vw"/>
            <p class="text-center">Klee</p>
        </a>

        <a href="#">
            <img src="https://static.wikia.nocookie.net/gensin-impact/images/2/20/Talent_Tempered_Sword_Charged.gif" alt="this slowpoke moves"  width="250" />                
        </a>


        <form action="?command=addtransaction" method="post" id="form1">
            <div class="text-center">
            <input type="hidden" name="userid" value="<?=$_SESSION["id"]?>">
            <?php $itemname = "Klee" ?>   
                <button type="submit" class="btn btn-primary">Save Klee</button>
            </div>
        </form>

        
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