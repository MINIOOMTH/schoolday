<div class="">
    <div class="">
        <img src="https://my-first-project-j5s1.onrender.com/images/IMG_8810.PNG" class="card-img" alt="">
        <div class=""></div>
    </div>
    <div class="container">
        <div class="row mt-3">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="radius radius-1x1">
                            <img src="https://my-first-project-j5s1.onrender.com/images/IMG_8811.PNG" class="w-100 rounded" alt="">
                        </div>
                        <hr class="w-50 mx-auto">
                        <div class="d-grid gap-2">
                            <?PHP for ($i=1; $i <= $count_menu_left; $i++) { ?>
                                <a href="" class="btn btn-outline-primary btn-lg"><?PHP echo $data['menu_left'][$i]; ?></a>
                                <?PHP } ?>
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card mb-2">
                    <div class="card-body">
                        <p class="h3">ข่าวโรงเรียน</p>
                        มึงอยากใส่อะไรก็ใส่มึงอยากใส่อะไรก็ใส่มึงอยากใส่อะไรก็ใส่มึงอยากใส่อะไรก็ใส่มึงอยากใส่อะไรก็ใส่มึงอยากใส่อะไรก็ใส่มึงอยากใส่อะไรก็ใส่มึงอยากใส่อะไรก็ใส่มึงอยากใส่อะไรก็ใส่มึงอยากใส่อะไรก็ใส่มึงอยากใส่อะไรก็ใส่มึงอยากใส่อะไรก็ใส่มึงอยากใส่อะไรก็ใส่มึงอยากใส่อะไรก็ใส่มึงอยากใส่อะไรก็ใส่มึงอยากใส่อะไรก็ใส่มึงอยากใส่อะไรก็ใส่มึงอยากใส่อะไรก็ใส่มึงอยากใส่อะไรก็ใส่มึงอยากใส่อะไรก็ใส่มึงอยากใส่อะไรก็ใส่มึงอยากใส่อะไรก็ใส่มึงอยากใส่อะไรก็ใส่มึงอยากใส่อะไรก็ใส่มึงอยากใส่อะไรก็ใส่
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="clearfix">
                            <img src="https://my-first-project-j5s1.onrender.com/images/IMG_8804.PNG" class="col-md-6 float-md-end mb-3 ms-md-3" alt="...">

                            <p>
                            ใส่หน้ามึงอะใส่หน้ามึงอะใส่หน้ามึงอะใส่หน้ามึงอะใส่หน้ามึงอะใส่หน้ามึงอะใส่หน้ามึงอะใส่หน้ามึงอะใส่หน้ามึงอะใส่หน้ามึงอะใส่หน้ามึงอะ
                            </p>

                            <p>
                            ใส่หน้ามึงอะใส่หน้ามึงอะใส่หน้ามึงอะใส่หน้ามึงอะใส่หน้ามึงอะใส่หน้ามึงอะใส่หน้ามึงอะใส่หน้ามึงอะใส่หน้ามึงอะใส่หน้ามึงอะใส่หน้ามึงอะ
                            ใส่หน้ามึงอะใส่หน้ามึงอะใส่หน้ามึงอะใส่หน้ามึงอะ
                            </p>

                            <p>
                            ใส่หน้ามึงอะใส่หน้ามึงอะใส่หน้ามึงอะใส่หน้ามึงอะใส่หน้ามึงอะใส่หน้ามึงอะใส่หน้ามึงอะใส่หน้ามึงอะใส่หน้ามึงอะใส่หน้ามึงอะใส่หน้ามึงอะใส่หน้ามึงอะใส่หน้ามึงอะ
                            ใส่หน้ามึงอะใส่หน้ามึงอะใส่หน้ามึงอะใส่หน้ามึงอะใส่หน้ามึงอะใส่หน้ามึงอะใส่หน้ามึงอะใส่หน้ามึงอะใส่หน้ามึงอะ
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <?PHP 
                        $adif = "Adif.mp4";
                        if (file_exists($adif)) { ?>
                        <video width="100%" height="auto" controls loop>
                            <source src="<?PHP echo $adif; ?>" type="video/mp4">
                        </video>
                        <?PHP } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>