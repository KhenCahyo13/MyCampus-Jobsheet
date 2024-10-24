<!-- Content -->
<main>
    <div style="position: relative; height: 100vh;">
        <div class="bg-homebanner2 px-5 py-5" style="height: 25%;">
            <h1 class="my-0 fs-4 text-white text-center">Check Hotel Price</h1>
        </div>
        <div class="px-5 responsive-card-container">
            <div class="row gx-5 gy-4 justify-content-center">
                <div class="col-12 col-lg-5">
                    <div class="bg-white shadow rounded px-4 py-3">
                        <p class="my-0 fs-6" style="font-weight: 500;">Input the data to check your booking price</p>
                        <form id="calculatePriceForm" method="POST" class="mt-4">
                            <div class="d-flex flex-column gap-3">
                                <!-- Floor Input -->
                                <div class="d-flex flex-column gap-1">
                                    <label for="floor" class="fs-7">Floor</label>
                                    <select name="floor" id="floor" class="form-select form-select-sm fs-7">
                                        <option value="">- Select Floor</option>
                                        <?php for ($i = 1; $i <= 30; $i++) { ?>
                                            <option value="<?= $i ?>" <?= isset($_GET['floor']) && $_GET['floor'] == $i ? 'selected' : ''; ?>><?= $i ?></option>
                                        <?php } ?>
                                    </select>
                                    <span class="text-danger fs-8" id="floorError"></span>
                                </div>
                                <!-- Type Input -->
                                <div class="d-flex flex-column gap-1">
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
                                            <option value="<?= $hotelType ?>" <?= isset($_GET['type']) && $_GET['type'] == $hotelType ? 'selected' : ''; ?>>
                                                <?= $hotelType ?>
                                            </option>
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
                                            <option value="<?= $i ?>" <?= isset($_GET['days']) && $_GET['days'] == $i ? 'selected' : ''; ?>>
                                                <?= $i ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                    <span class="text-danger fs-8" id="daysError"></span>
                                </div>
                                <!-- Discount Input -->
                                <div class="d-flex flex-column gap-1">
                                    <label for="discount" class="fs-7">Discount</label>
                                    <select name="discount" id="discount" class="form-select form-select-sm fs-7">
                                        <option value="">- Select Discount</option>
                                        <?php
                                        $discountTypes = array(
                                            "Member",
                                            "Birthday",
                                            "None"
                                        );
                                        foreach ($discountTypes as $discountType) { ?>
                                            <option value="<?= $discountType ?>"><?= $discountType ?></option>
                                        <?php } ?>
                                    </select>
                                    <span class="text-danger fs-8" id="discountError"></span>
                                </div>
                                <button class="btn btn-dark btn-sm fs-7 w-100 mt-3">Check Price</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-lg-7">
                    <div class="bg-white shadow rounded px-4 py-3">
                        <p class="mt-0 mb-4 fs-6" style="font-weight: 500;">Your price info</p>
                        <div class="row gx-5 gy-4">
                            <div class="col-6 col-lg-4">
                                <div class="d-flex flex-column gap-1">
                                    <p class="my-0 text-secondary fs-7" style="font-weight: 500;">Floor</p>
                                    <p class="my-0 fs-7" id="floorResult">-</p>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4">
                                <div class="d-flex flex-column gap-1">
                                    <p class="my-0 text-secondary fs-7" style="font-weight: 500;">Type</p>
                                    <p class="my-0 fs-7" id="typeResult">-</p>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4">
                                <div class="d-flex flex-column gap-1">
                                    <p class="my-0 text-secondary fs-7" style="font-weight: 500;">Day(s)</p>
                                    <p class="my-0 fs-7" id="daysResult">-</p>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4">
                                <div class="d-flex flex-column gap-1">
                                    <p class="my-0 text-secondary fs-7" style="font-weight: 500;">Discount</p>
                                    <p class="my-0 fs-7" id="discountResult">-</p>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4">
                                <div class="d-flex flex-column gap-1">
                                    <p class="my-0 text-secondary fs-7" style="font-weight: 500;">Total Price</p>
                                    <p class="my-0 fs-7" id="totalPriceResult">-</p>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4">
                                <div class="d-flex flex-column gap-1">
                                    <p class="my-0 text-secondary fs-7" style="font-weight: 500;">Total Discount</p>
                                    <p class="my-0 fs-7" id="totalPriceWithDiscountResult">-</p>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex flex-column gap-1">
                            <p class="my-0 text-secondary fs-7" style="font-weight: 500;">Total Payment</p>
                            <p class="my-0 fs-7" id="totalPaymentResult">-</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>