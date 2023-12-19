
<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"> </script>


    <title>Admin panel</title>
</head>

<body>

    <script defer src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />

    <!-- page -->
    <main class="min-h-screen w-full bg-[#4ABB29]-100 text-gray-700" x-data="layout">
        <!-- header page -->

        
        <header class="flex w-full items-center justify-between border-b-2 border-gray-200 bg-[#4ABB29] p-2">
            <!-- logo -->
            <div class="flex items-center space-x-2">
                <button type="button" class="text-3xl" @click="asideOpen = !asideOpen"><i
                        class="bx bx-menu"></i></button>
                <div>Logo</div>
            </div>

            <!-- button profile -->
            <div>
                <button type="button" @click="profileOpen = !profileOpen" @click.outside="profileOpen = false"
                    class="h-9 w-9 overflow-hidden rounded-full">
                    <img src="https://plchldr.co/i/40x40?bg=111111" alt="plchldr.co" />
                </button>
            </div>
        </header>

        <div class="flex">
            <!-- aside -->
            <aside class="bg-[#4ABB29] flex w-72 flex-col space-y-2 border-r-2 border-gray-200  p-2" style="height: 90.5vh"
                x-show="asideOpen">
                <a href="#"
                    class="flex items-center space-x-1 rounded-md px-2 py-3 hover:bg-gray-100 hover:text-blue-600">
                    <span class="text-2xl"><i class="bx bx-home"></i></span>
                    <span>Dashboard</span>
                </a>

                <a href="produit-admin.php"
                    class="flex items-center space-x-1 rounded-md px-2 py-3 hover:bg-gray-100 hover:text-blue-600">
                    <span class="text-2xl"><i class="bx bx-shopping-bag"></i></span>
                    <span>Produits</span>
                </a>

                <a href="categorie-admin.php"
                    class="flex items-center space-x-1 rounded-md px-2 py-3 hover:bg-gray-100 hover:text-blue-600">
                    <span class="text-2xl"><i class="bx bx-heart"></i></span>
                    <span>Categories</span>
                </a>

                <a href="#"
                    class="flex items-center space-x-1 rounded-md px-2 py-3 hover:bg-gray-100 hover:text-blue-600">
                    <span class="text-2xl"><i class="bx bx-user"></i></span>
                    <span>Utilisateurs</span>
                </a>
            </aside>

            <!-- main content page -->
            <div class="w-full text-center bg-[#79B068]">
                <?php
                $sqlcount = "SELECT COUNT(*) as total FROM users";
                $reqcount = mysqli_query($conn, $sqlcount);

                $total = mysqli_fetch_assoc($reqcount);
                ?>
                <div class="nbrclient block antialiased font-sans text-2xl leading-normal font-normal text-blue-gray-600">
                    <p>Nombre de client:</p><br>
                    <p class="text-2xl">
                        <?php echo $total['total'] ?>
                    </p>

                </div>
                <div class="nbrplantes text-2xl">

                    <?php
                    $sqlcountp = "SELECT COUNT(*) as totalp FROM plante";
                    $reqcountp = mysqli_query($conn, $sqlcountp);

                    $totalp = mysqli_fetch_assoc($reqcountp);

                    ?>
                    <p>Nombre de plantes:</p><br>
                    <p>
                        <?php echo $totalp['totalp'] ?>
                    </p>

                </div>






            </div>
        </div>
    </main>

    <script>
        document.addEventListener("alpine:init", () => {
            Alpine.data("layout", () => ({
                profileOpen: false,
                asideOpen: true,
            }));
        });
    </script>

</body>

</html>