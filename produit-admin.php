<?php
include 'config.php';

if (@$_POST['Addproduct']) {
    $Pname = $_POST['name'];
    $Origin = $_POST['origine'];
    $Taille = $_POST['taille'];
    $Temperature = $_POST['temperature'];
    $Prix = $_POST['prix'];
    $img = $_POST['avatar'];

    $Select = $_POST['select'];

    $sql = "INSERT into plante (nom, origine, taille, Température, prix, id_cat, img) values('$Pname', '$Origin', '$Taille', '$Temperature', $Prix, '$Select', '$img')";
    $req = mysqli_query($conn, $sql);

    header('Location: produit-admin.php');

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Produits panel</title>
</head>

<body>
    <div class="countainer pt-10 flex flex-col items-center justify-center">
        <form action="#" method="post">
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="sm:col-span-2">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Plante
                        Name</label>
                    <input type="text" name="name" id="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Type product name" required="">
                </div>
                <div class="w-full">
                    <label for="brand"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Taille(cm)</label>
                    <input type="text" name="taille" id="brand"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Product brand" required="">
                </div>
                <div class="w-full">
                    <label for="brand"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Origin</label>
                    <input type="text" name="origine" id="brand"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Origin" required="">
                </div>
                <div class="w-full">
                    <label for="brand"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Temperature(°C)</label>
                    <input type="text" name="temperature" id="brand"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Product brand" required="">
                </div>
                <div class="w-full">
                    <label for="price"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                    <input type="number" name="prix" id="price"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="$2999" required="">
                </div>
                <div>
                    <label for="category"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                    <select name="select" id="category"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected="">Select category</option>
                        <?php
                        $sqlCtg = "SELECT * from categorie";
                        $reqCtg = mysqli_query($conn, $sqlCtg);
                        while ($row = mysqli_fetch_row($reqCtg)) {
                            ?>
                            <option value="<?php echo $row['0'] ?>">
                                <?php echo $row['1'] ?>
                            </option>
                            <?php
                        }

                        ?>
                        <div>
                            <label for="avatar"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">Choose
                                a picture:</label>

                            <input class="mt-2" type="file" id="avatar" name="avatar"
                                accept="image/png, image/jpeg, image/jfif" />
                        </div>
                    </select>
                </div>
            </div>
            <div class="btn m-5">
                <input type="submit" name="Addproduct" value="Ajouter un produit"
                    class="w-3/5 text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                    value="Ajouter un produit">
            </div>
        </form>


        <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-10">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Plante name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            origine
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Taille(cm)
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Temperature (°C)
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Category
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $sqlshow = 'SELECT * from plante JOIN categorie where plante.id_cat = categorie.id';
                    $reqshow = mysqli_query($conn, $sqlshow);


                    while ($result = mysqli_fetch_row($reqshow)) {

                        ?>
                        <tr
                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <?php echo $result['1'] ?>
                            </th>
                            <td class="px-6 py-4">
                                <?php echo $result['2'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $result['3'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $result['4'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $result['5'] ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $result['8'] ?>
                            </td>

                            <td class="px-6 py-4">
                                |
                                <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                    href="sup.php?id=<?php echo $result['0'] ?>">supprimer</a>
                                |
                            </td>
                        </tr>

                    <?php }


                    ?>
                </tbody>
            </table>
        </div>

    </div>

</body>

</html>