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
    <td class="py-6  text-green-700 font-medium flex justify-center items-center gap-2">
        <div class="circle rounded-full w-2 h-2  bg-gray-200"></div>
        <?= $delivery ?>
    </td>
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