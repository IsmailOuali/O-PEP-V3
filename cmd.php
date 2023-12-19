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

    <nav id="header" class="w-full top-0">
        <div class="bg-lime-600 w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-6 py-3">

            <label for="menu-toggle" class="cursor-pointer md:hidden block">
                <svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                    viewBox="0 0 20 20">
                    <title>menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </label>


            <div class="order-1 md:order-2">
                <a class="flex items-center tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl "
                    href="#">
                    <img src="images/les-plantes.png" class="w-10 h-10 p-2" alt="">
                    O'PEP
                </a>
            </div>

            <div class="order-2 md:order-3 flex items-center" id="nav-content">

                <div tabsindex="0" class="group relative inline-block p-5">
                    <p class="rounded-full text-black px-8 py-2 focus:outline-none">
                        Panier
                    </p>
                </div>
            </div>
    </nav>
    <section>
        <div class="w-4/5 text-base	 text-gray-700 flex uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <table class="w-4/5 text-base text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-base	 text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">

                    <tr>
                        <th>Nom</th>
                        <th>categorie</th>
                        <th>prix</th>
                        <th>quantite</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * from plante_panier JOIN plante JOIN categorie where plante_panier.id_plante = plante.id AND plante.id_cat = categorie.id AND plante_panier.id_panier = $idpanier AND status = 1";
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
                            
                        </tr>
                    <?php }
                    ?>
                </tbody>
            </table>

        </div>

    </section>

</body>

</html>