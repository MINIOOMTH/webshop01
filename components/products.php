<?php

$curl = curl_init();

curl_setopt_array(
    $curl,
    array(
        CURLOPT_URL => 'https://api_app_premium.byshop.me/api/product',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
    )
);

$response = curl_exec($curl);
curl_close($curl);
$load_packz = json_decode($response);

?>
<div class="row row-cols-1 row-cols-md-3 g-4">
    <?php foreach ($load_packz as $data) { ?>
        <div class="col">
            <div class="card h-100">
                <img src="<?= $data->img ?>" class="card-img-top ratio ratio-1x1" alt="...">
                <div class="card-body">
                    <h5 class="card-title">
                        <?= $data->name ?>
                    </h5>
                    <p class="card-text">
                    <p>ราคา :
                        <?= $data->price ?>
                    </p>
                    <p>จำนวนสินค้า :
                        <?= $data->stock ?>
                    </p>
                    <p>สถานะ :
                        <?= $data->status ?>
                    </p>
                    </p>
                </div>
                <div class="mx-auto ms-2 mb-2 d-flex">
                    <!-- <a href="" class="btn btn-primary">View</a> -->
                    <button class="btn btn-primary" target="_blank" data-bs-toggle="modal"
                        data-bs-target="#info<?= $data->id ?>">เพิ่มเติม</button>
                </div>
                <div class="modal fade" id="info<?= $data->id; ?>" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="card-header">
                                <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i
                                        class="fa fa-times"></i></button> -->
                                <h5 class="modal-title"><i class="fa fa-info-circle fa-lg"></i>&nbsp;รายละเอียดสินค้า :
                                    <br>&nbsp;
                                    <?= $data->name; ?>
                                </h5>
                            </div>
                            <div class="modal-body">
                                <center>
                                    <img class="ez pulse animated fadeInUp card-img-top" src="<?= $data->img; ?>"
                                        style="width:50%" alt="<?= $data->name; ?>">
                                </center>
                                <hr>
                                <p class="text-muted">
                                    <?= $data->product_info; ?>
                                </p>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php } ?>
</div>