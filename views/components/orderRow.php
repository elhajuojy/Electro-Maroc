<tr class=" text-gray-500 border-y-2">
    <td class="py-6 hidden md:block"><?= $id ?></td>
    <td class="py-6 "><?= $customer ?></td>
    <td class="py-6 hidden md:block  "><?= $products ?></td>
    <td class="py-6 "><?= $date ?></td>
    <td class="py-6 ">
        <p class="border-2 flex justify-center rounded-full text-green-700 font-medium">
            <?= $status ?>
        </p>
    </td>
    <td class="py-6 "><?= $delivery ?></td>
    <td class="py-6 "><?= $total ?></td>
    <td class="py-6 ">
        <a href="" class="text-blue-500"><?= $action ?></a>
    </td>
</tr>
<!-- 
'id' => 1,
'customer' => 'Mohamed',
'products' => 'Laptop Asus',
'date' => '12 Aug 2021',
'status' => 'Pending',
'delivery' => 'PickUp',
'total' => '1200 DH',
'action' => 'View'
 -->