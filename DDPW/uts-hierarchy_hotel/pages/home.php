<!-- Content -->
<main>
    <div class="slider">
        <div class="slides">
            <div class="slide">
                <div class="bg-homebanner1" style="height: 75vh;">
                    <div class="container py-5 h-100">
                        <div class="row align-items-center h-100">
                            <div class="col-12 col-lg-5">
                                <div class="d-flex flex-column justify-content-center gap-2">
                                    <h1 class="fs-3 my-0 text-white">Welcome to Hierarchy Hotel <?= $_SESSION['username'] ?></h1>
                                    <p class="fs-6 my-0 text-white">Experience luxurious stays with exclusive offers and personalized service. Book now and create unforgettable memories!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide">
                <div class="bg-homebanner2" style="height: 75vh;">
                    <div class="container py-5 h-100">
                        <div class="row gy-4 gx-5 align-items-center h-100">
                            <div class="col-12 col-lg-6">
                                <div class="d-flex flex-column gap-4">
                                    <p class="my-0 fs-4 text-white">Discover exclusive offers and enjoy a premium stay experience at Hierarchy Hotel. Login now to access personalized services and more!</p>
                                    <a href="?page=login" class="btn btn-sm btn-dark fs-7 px-5" style="width: fit-content;">Login</a>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="bg-white rounded px-3 py-2">
                                    <p class="mt-0 mb-3 fs-6" style="font-weight: 500;">Check Your Booking Price</p>
                                    <div class="d-flex flex-column flex-lg-row gap-3">
                                        <!-- Floor Input -->
                                        <div class="d-flex flex-column gap-1 w-100">
                                            <label for="floor" class="fs-7">Floor</label>
                                            <select name="floor" id="floor" class="form-select form-select-sm fs-7">
                                                <option value="">- Select Floor</option>
                                                <?php for ($i = 1; $i <= 30; $i++) { ?>
                                                    <option value="<?= $i ?>"><?= $i ?></option>
                                                <?php } ?>
                                            </select>
                                            <span class="text-danger fs-8" id="floorError"></span>
                                        </div>
                                        <!-- Type Input -->
                                        <div class="d-flex flex-column gap-1 w-100">
                                            <label for="type" class="fs-7">Type</label>
                                            <select name="type" id="type" class="form-select form-select-sm fs-7">
                                                <option value="">- Select Type</option>
                                                <?php
                                                $hotelTypes = array(
                                                    "Standard",
                                                    "Superior",
                                                    "Deluxe"
                                                );
                                                foreach ($hotelTypes as $hotelType) { ?>
                                                    <option value="<?= $hotelType ?>"><?= $hotelType ?></option>
                                                <?php } ?>
                                            </select>
                                            <span class="text-danger fs-8" id="typeError"></span>
                                        </div>
                                        <!-- Day Input -->
                                        <div class="d-flex flex-column gap-1 w-100">
                                            <label for="days" class="fs-7">Day's</label>
                                            <select name="days" id="days" class="form-select form-select-sm fs-7">
                                                <option value="">- Select Total Days</option>
                                                <?php for ($i = 1; $i <= 30; $i++) { ?>
                                                    <option value="<?= $i ?>"><?= $i ?></option>
                                                <?php } ?>
                                            </select>
                                            <span class="text-danger fs-8" id="daysError"></span>
                                        </div>
                                    </div>
                                    <button class="btn btn-dark btn-sm fs-7 w-100 mt-3" id="homeCheckPriceBtn">Check Price</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="controls">
            <span class="prev">&lt;</span>
            <span class="next">&gt;</span>
        </div>
    </div>
    <div class="container mt-5 mb-5">
        <div class="d-flex flex-column gap-2">
            <h1 class="my-0 fs-4">Hierarchy Hotel Profile</h1>
            <p class="my-0 fs-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure eaque atque, facilis id nulla architecto rem, adipisci tenetur officia autem distinctio veritatis quod placeat? Voluptatum nam voluptates blanditiis maxime magnam.
            Magnam sunt atque itaque est eligendi maiores, nulla vero quas doloribus optio qui vel facere nisi doloremque cum eum, possimus accusamus esse, natus at consectetur sed consequatur culpa reiciendis. Ut.
            Harum veniam, ullam, ipsa fuga unde magni omnis similique quae eaque amet molestias autem laborum nostrum sapiente ratione ea temporibus! Voluptatibus earum maiores fugit doloremque, minus nemo neque? Corrupti, magnam?
            Quidem eos laudantium animi nisi atque? Ab mollitia consectetur, architecto ratione error itaque soluta beatae delectus libero, quasi neque illo expedita at! Magni ab accusamus debitis consectetur distinctio aliquid eum.
            Soluta consectetur tempora fugiat beatae voluptatum aliquam non culpa vel porro, saepe eos? Consectetur necessitatibus laboriosam neque voluptatem, rem, iure ipsa pariatur, sint ipsam ratione harum? Maiores possimus laboriosam sapiente?
            Sed ab cupiditate nostrum commodi est? Fugiat illo aperiam commodi nobis quod magnam dolore, beatae vero animi voluptatum velit accusantium harum consectetur officiis non quidem placeat vitae aut. Esse, itaque.
            Dolorem veniam, pariatur dolor at tenetur minus vero ex non voluptatibus nisi iusto impedit, nam commodi architecto. Est atque et accusantium quisquam mollitia minima repellat amet necessitatibus? Sit, itaque at.
            Ipsam dolor quasi ducimus ea ipsa architecto quibusdam aperiam illo harum, omnis saepe hic veniam magnam aliquid ratione aliquam velit fuga facere nulla natus itaque explicabo non numquam dolore. Delectus.
            Voluptas harum, officia quam, autem, architecto porro aliquam dolore sed rerum deleniti hic. A suscipit praesentium magnam temporibus rerum, delectus iure dignissimos necessitatibus. Esse quibusdam veniam, harum est sint corporis.
            Voluptates nesciunt vero beatae debitis fugit, incidunt vel illo porro delectus facere iure quisquam dolorem autem nihil. Nulla laudantium obcaecati aperiam temporibus, culpa non quis corporis delectus amet quaerat similique.</p>
        </div>
    </div>
</main>