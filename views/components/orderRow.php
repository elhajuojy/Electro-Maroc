<tr class=" text-gray-500 border-y-2">
    <td class="py-6 hidden md:block"><?= $id ?></td>
    <td class="py-6 "><?= $customer ?></td>
    <td class="py-6 hidden md:block  "><?= $products ?></td>
    <td class="py-6 "><?= $date ?></td>
    <td class="py-6 ">
        <p class=" flex justify-center rounded-full text-green-700 font-medium">
            <?= $status ?>
        </p>
    </td>    
    <td class="py-6 ">
        <a href="/order-info?id=<?= $action ?>" class="text-blue-500">View </a>
    </td>
</tr>