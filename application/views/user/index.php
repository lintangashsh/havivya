<body class="w-full h-full" id="up">
    <!-- TETIMONI FLOATING ICON -->
    <a href="#testimoni" class="fixed flex items-center z-50 lg:bottom-24 bottom-40 right-0 lg:mr-8 lg:mb-8 mr-4 mb-4 hover:scale-110 animate-bounce duration-300" :class="{'block': !scrolledFromTop, 'hidden': scrolledFromTop, 'bottom-20': !scrolledFromTop, 'bottom-40': scrolledFromTop}" data-aos="fade-down">
        <div class="mr-5 px-5 py-4 rounded-xl items-center font-montserrat font-semibold text-white bg-amber-700 hidden lg:block">
            Cemana menurut kelen?
        </div>
        <img src=" <?= base_url('/assets/img/chat.png') ?> " alt="" class="w-16 md:w-16 lg:w-20">
    </a>

    <div class="h-24 bg-amber-800">
    </div>

    <!-- IMAGE SLIDER -->
    <div class="max-w-full max-h-full m-auto">
        <div id="default-carousel" class="relative mb-4 h-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="overflow-hidden relative h-56 sm:h-64 xl:h-screen 2xl:h-screen">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="<?= base_url('assets/img/bg1.jpg') ?>" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" style="filter: blur(3px); -webkit-filter: blur(3px);">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="<?= base_url('assets/img/bg2.jpg') ?>" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" style="filter: blur(3px); -webkit-filter: blur(3px);">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="<?= base_url('assets/img/bg3.jpg') ?>" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" style="filter: blur(3px); -webkit-filter: blur(3px);">
                </div>
            </div>
            <!-- LOGO DITENGAH SLIDER -->
            <div class="flex flex-col absolute left-1/2 lg:top-1/3 top-1/2 z-30">
                <img src="<?= base_url('assets/img/logo.png') ?>" class="w-60 h-60 lg:block hidden -translate-x-1/2 -translate-y-1/2">
                <img src="<?= base_url('assets/img/font_white.png') ?>" class="block -translate-x-1/2 -translate-y-1/2">
            </div>
            <!-- Slider indicators -->
            <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                    <span class="hidden">Previous</span>
                </span>
            </button>
            <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    <span class="hidden">Next</span>
                </span>
            </button>
        </div>

    </div>

    <!-- NARASI TENTANG KAMI -->
    <div class="px-10 lg:px-20">
        <h1 class="font-montserrat my-10 lg:my-20 text-xl lg:text-4xl text-center font-bold">Rumah Kue Havivya</h1>

        <div class="grid lg:grid-cols-2 grid-cols-1 gap-2 w-full items-center">
            <div data-aos="fade-down">
                <img src=" <?= base_url('assets/img/kue3.jpg') ?> " class="lg:w-1/2 w-3/4 m-auto rounded-2xl">
            </div>

            <div class="flex flex-col font-montserrat text-justify justify-between text-sm lg:text-base mt-4 lg:mt-0" data-aos="fade-down">
                <div>
                    Kami adalah sebuah bisnis kecil yang bergerak dibidang kuliner. Bisnis kami telah mengeluarkan beberapa produk makanan seperti kue kering, kue basah dan masih banyak lagi. Anda dapat melihat seluruh produk kami pada website ini. Untuk selengkapnya anda dapat melihat pada bagian Tentang. SELAMAT MENCOBA!
                </div>

                <br>

                <br>

                <a href=" <?= base_url('user/tentang') ?> ">
                    <button class="bg-amber-800 hover:bg-amber-700 text-white w-full rounded-lg font-montserrat font-bold py-4 duration-300">
                        Tentang Kami
                    </button>
                </a>
            </div>

        </div>

        <!-- PRODUK TERLARIS -->
        <h1 class="font-montserrat mt-10 mb-5 lg:mt-20 lg:mb-20 text-xl lg:text-4xl text-center font-bold">Produk Favorit</h1>

        <div class="w-full">
            <div class="grid lg:grid-cols-4 grid-cols-1 gap-x-2 gap-y-4 text-center">

                <?php
                $delay = 0;
                $sql = "SELECT * FROM `tb_produk` WHERE `favorite` = ? ";
                $produk  = $this->db->query($sql, array(1))->result();
                ?>

                <?php foreach ($produk as $pdk) : ?>
                    <!-- Produk 1 -->
                    <div class="max-w-sm bg-white rounded-lg shadow-md" data-aos-delay="<?= $delay; ?>" data-aos="fade-right">
                        <a href="#">
                            <div class="w-full h-96 m-auto">
                                <img class="rounded-lg w-full h-full m-auto" src=" <?= base_url('assets/img/produk/') . $pdk->product_image ?> " />
                            </div>
                        </a>
                        <div class="px-5 py-5">
                            <a href="#">
                                <h5 class="mb-3 text-xl font-semibold font-montserrat tracking-tight text-gray-900"><?= $pdk->product_name ?></h5>
                            </a>

                            <div class="flex justify-between items-center mt-4 mb-5">
                                <span class="text-2xl font-bold text-gray-900">Rp. <?= number_format($pdk->price, 0, ',', '.')  ?></span>
                                <?= anchor('user/detail_produk/' . $pdk->id, '<button class="text-white bg-amber-800 hover:bg-amber-700 focus:ring-4 focus:outline-none focus:ring-amber-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center duration-300">Lihat Detail</button>') ?>
                            </div>
                        </div>
                    </div>
                    <?php $delay += 100; ?>

                <?php endforeach ?>

            </div>

        </div>

        <!-- REVIEW -->
        <div id="testimoni"></div>
        <h1 class="font-montserrat mt-10 mb-5 lg:mt-20 lg:mb-10 text-xl lg:text-4xl text-center font-bold">Cemana Menurut Kelen?</h1>

        <div class="grid lg:grid-cols-4 grid-cols-1 gap-x-2 gap-y-4">

            <?php
            $delay = 0;
            $sql = "SELECT * FROM `tb_review` WHERE `favorite` = ? ";
            $review  = $this->db->query($sql, array(1))->result();
            ?>

            <?php foreach ($review as $rv) : ?>

                <div class="card" data-aos-delay="<?= $delay; ?>" data-aos="fade-right">
                    <div class="card-header mx-4 mt-4">
                        <a blur-shadow-image="true">
                            <img class="w-auto rounded-lg h-72 m-auto" src="<?= base_url('assets/img/testimoni/') . $rv->image_review ?>" />
                        </a>
                    </div>
                    <div class="card-body">
                        <p class="mb-3">
                            <?= $rv->review ?>
                        </p>
                    </div>
                    <div class="card-footer">
                        <div class="flex">
                            <a class="avatar">
                                <img src="<?= base_url('assets/img/profil/') . $rv->image_profile ?>" alt="avatar" class="avatar" />
                            </a>
                            <div class="ml-3">
                                <span class="text-blue-gray-700 mb-0 font-bold"><?= $rv->name ?></span>
                                <p class="mb-0 text-xs">Diposting pada <?= date('d F Y', $rv->posting_time) ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $delay += 100; ?>
            <?php endforeach ?>

        </div>

        <a href="<?= base_url('user/testimoni') ?>" class="w-full">
            <button class="bg-amber-800 py-4 text-white font-montserrat w-full hover:bg-amber-700 rounded-xl mt-6 shadow-xl duration-300">Lebih banyak lagi</button>
        </a>

    </div>