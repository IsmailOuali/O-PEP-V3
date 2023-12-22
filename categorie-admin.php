
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <title>Categorie Panel</title>
</head>

<body>
    <div>

        <form action="controller/categorie.php" method="post">
            <div class="pt-20 flex justify-center items-center sm:col-span-2">
                <div class="w-3/5  sm:col-span-2">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category
                        Name</label>
                    <input type="text" name="Categoryname" id="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Type Category name" required="">
                    <input type="submit" name="Addcategory" value="Ajouter une categorie"
                        class="w-3/5 mt-5 text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                        value="Ajouter une categorie">
                </div>
        </form>
    </div>
    <tr>
        <div class="flex justify-center items-center pt-10">
            <table>

                <thead>

                    <th scope="col" class="px-6 py-3">
                        Category name
                    </th>
                </thead>
    </tr>

        <tbody>

            <tr
                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   
                </td>
                <td class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                    |
                    <a href>Supprimer</a>
                    |   
                </td>
                <?php
    ?>
        </tr>
    </tbody>
    </table>
    </div>

</body>

</html>