<?php
// include 'config.php';
// $sqlstore = "SELECT * from plante JOIN categorie where plante.id_cat = categorie.id";
// $resultstore = mysqli_query($conn, $sqlstore);
// session_start();
// if ($_SESSION['status'] != 'client') {
//     header('Location: index.php');
// }


// $i = 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>O-PEP store</title>
    <meta name="description" content="Free open source Tailwind CSS Store template">
    <meta name="keywords"
        content="tailwind,tailwindcss,tailwind css,css,starter template,free template,store template, shop layout, minimal, monochrome, minimalistic, theme, nordic">

    <script src="https://cdn.tailwindcss.com"> </script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Loopple/loopple-public-assets@main/riva-dashboard-tailwind/riva-dashboard.css">



    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">
    <style>
        #category {
            color: black;
        }

        .filter {
            width: 100%;
            display: flex;
            flex-direction: column;
        }

        .filter form {
            width: 45%;
        }

        .selectclass {
            display: flex;
            flex-direction: column;
        }

        .selectclass input {
            width: 13%;
        }
    </style>


</head>

<body class=" text-gray-600">

    <!--Nav-->
    <nav id="header" class="w-full z-30 top-0 py-1">
        <div class="bg-lime-600 w-full rounded-3xl container mx-auto flex flex-wrap items-center justify-between mt-0 px-6 py-3">

            <label for="menu-toggle" class="cursor-pointer md:hidden block">
                <svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                    viewBox="0 0 20 20">
                    <title>menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </label>
            <input class="hidden" type="checkbox" id="menu-toggle" />


            <div class="order-1 md:order-2">
                <a class="flex items-center tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl "
                    href="#">
                    <img src="images/les-plantes.png" class="w-10 h-10 p-2" alt="">
                    O'PEP
                </a>
            </div>

            <div class="order-2 md:order-3 flex items-center" id="nav-content">

                <a class="inline-block no-underline hover:text-black" href="#">
                    <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24">
                        <circle fill="none" cx="12" cy="7" r="3" />
                        <path   
                            d="M12 2C9.243 2 7 4.243 7 7s2.243 5 5 5 5-2.243 5-5S14.757 2 12 2zM12 10c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3S13.654 10 12 10zM21 21v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h2v-1c0-2.757 2.243-5 5-5h4c2.757 0 5 2.243 5 5v1H21z" />
                    </svg>
                </a>


                <div tabsindex="0" class="group relative inline-block p-5">
                    <a href="page-panier.php"
                        class="border-gray-950 border-solid  border-2 rounded-full   text-black px-8 py-2 focus:outline-none">
                        Panier
                    </a>
                </div>
            </div>
    </nav>

    <section class=" py-8">

        <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">
                <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">

                    <div class="filter" id="store-nav-content">

                        <form action="" method="post">
                            <div class="p-5">
                                <input
                                    class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    type="text" name="searchinput" placeholder="Entrer un nom">
                                <input
                                    class="text-white bg-green-700 mt-1 hover:bg-green-800 rounded-full text-sm px-5 py-2.5 text-center"
                                    type="submit" name="Search" value="Search">
                            </div>
                            <div class="selectclass p-5">
                                <a class="inline-block no-underline hover:text-black" href="#">
                                    <select name="select" id="category"
                                        class="border border-gray-300 text text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                            <option value="">
                                            </option>
  
                                    </select>
                                </a>

                                <input
                                    class="text-white bg-green-700 mt-1 hover:bg-green-800 rounded-full text-sm px-5 py-2.5 text-center"
                                    type="submit" value="filter" name="filter">
                            </div>
                        </form>
                        <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl "
                            href="#">
                            Store
                        </a>

                    </div>
                </div>

            <?php


            if (@$_POST['filter']) {
                $catid = $_POST['select'];
                $sqlshowcat = "SELECT * from plante where id_cat = $catid";
                $reqshowcat = mysqli_query($conn, $sqlshowcat);
                if (!$reqshowcat) {
                    die('Error');
                }

                while ($showcat = mysqli_fetch_assoc($reqshowcat)) {
                    ?>
                    <div class="w-3/5 md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                        <a href="#">
                            <img class="w-full hover:grow hover:shadow-lg" src="images/<?php echo $showcat['img'] ?>">
                            <div class="pt-3 flex items-center justify-between">
                                <p class="">
                                    <?php echo $showcat['nom'] ?>
                                </p>
                                <p class="pt-1 text-gray-900">$
                                    <?php echo $showcat['Prix'] ?>
                                </p>
                                <a href="panier.php?id=<?php echo $rowstore['0'] ?>"
                                class="w-3/5 text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center">Ajouter
                                au panier</a>
                        </a>
                    </div>
                    <?php
                }


            }
            else if (@$_POST['Search']) {
                $input = $_POST['searchinput'];
                $sql = "SELECT * from plante where nom like '%$input%'";
                $reqsearch = mysqli_query($conn, $sql);
                if (!$reqsearch) {
                    die;
                }
                while ($result = mysqli_fetch_row($reqsearch)) {
                    ?>
                    <div class="w-40 md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                        <a href="#">
                            <img class="w-full hover:grow hover:shadow-lg" src="images/<?php echo $result['7'] ?>">
                            <div class="pt-3 flex items-center justify-between">
                                <p class="">
                                    <?php echo $result['1'] ?>
                                </p>
                            </div>
                            <p class="pt-1 text-gray-900">$
                                <?php echo $result['5'] ?>
                            </p>
                            <a href="panier.php?id=<?php echo $result[0] ?>"
                                class="w-3/5 text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center">Ajouter
                                au panier</a>
                        </a>
                    </div>
                    
                    <div class="w-40 md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                        <a href="#">
                            <img class="w-full hover:grow hover:shadow-lg" src="images/<?php echo $rowstore['7'] ?>">
                            <div class="pt-3 flex items-center justify-between">
                                <p class="">
                                    <?php echo $rowstore['1'] ?>
                                </p>
                                <p>
                                    <?php echo $rowstore['9'] ?>
                                </p>
                            </div>
                            <p class="pt-1 text-gray-900">$
                                <?php echo $rowstore['5'] ?>
                            </p>
                            <a href="panier.php?id=<?php echo $rowstore['0'] ?>"
                                class="w-3/5 text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center">Ajouter
                                au panier</a>




                        </a>
                    </div>
                    <?php
                }
                $i += 1;
            }
            ?>

        </div>

    </section>




</body>

</html>