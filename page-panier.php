<?php
include 'config.php';
session_start();
$idpanier = $_SESSION['panier'];



$sql = "SELECT * from plante_panier JOIN plante JOIN categorie where plante_panier.id_plante = plante.id AND plante.id_cat = categorie.id AND plante_panier.id_panier = $idpanier";
$req = mysqli_query($conn, $sql);



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"> </script>

    <title>Panier</title>
</head>

<body>

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
    <section>
        <div class="mt-20 ml-10 w-4/5 text-base	 text-green-700 flex uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <table class="w-4/5 text-base text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-base	 text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">

                    <tr>
                        <th>Nom</th>
                        <th>categorie</th>
                        <th>prix</th>
                        <th>quantite</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * from plante_panier JOIN plante JOIN categorie where plante_panier.id_plante = plante.id AND plante.id_cat = categorie.id AND plante_panier.id_panier = $idpanier AND status = 0";
                    $req = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($req)) {


                        ?>

                        <tr>
                            <td>
                                <?php echo $row['6'] ?>
                            </td>
                            <td>
                                <?php echo $row['14'] ?>
                            </td>
                            <td>$
                                <?php echo $row['10'] ?>
                            </td>
                            <td>
                                <?php echo $row['3'] ?>
                            </td>
                            <td>
                                <a
                                    href="sup-panier.php?id=<?php echo $row['0'] ?>">Supprimer</a>
                                <a
                                    href="commande.php?id=<?php echo $row['0']?>">|| Commander</a>
                            </td>
                        </tr>
                    <?php }
                    ?>
                </tbody>
            </table>

        </div>

    </section>

</body>

</html>