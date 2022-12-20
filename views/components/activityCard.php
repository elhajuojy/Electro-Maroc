<div class="top-sales-card card w-44 border-2 rounded p-2 cursor-pointer  ">
    <div class="top-card flex gap-3  justify-center items-center">
        <div class="top-card-icon p-2 bg-blue-300 rounded-full w-10 grid justify-center">
            <span class="text-white"><i class="<?=$icon?>"></i></span>
        </div>
        <div class="top-card-text">
            <h3 class="font-bold opacity-60"><?=$title?></h3>
        </div>
    </div>
    <div class="card-price">
        <h3 class="text-2xl font-bold opacity-80 mt-2"><?=$value?></h3>
    </div>
    <div class="card-grow">
        <span class="opacity-70 font-semibold"> <?=$grow?> </span><span class="text-green-500"><i class="fa-solid fa-arrow-up"></i></span>
    </div>
</div>