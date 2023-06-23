<div class="container-admin-page">

    <div class="menu-top-admin-page">

        <div class="container-img-menu-top">
            <img src="./public/CSS/Assets/logo.svg" alt="">
        </div>

        <div class="info-menu-top-admin-page">
            <div class="container-img-info-menu">
                <img src="./public/CSS/Assets/arrowleftadmin.png" alt="">
            </div>
            <a href="http://localhost/Reshome/index.php" class="text-info-menu-top">Back</a>
        </div>

        <div class="title-menu-top">DASHBOARD ADMIN</div>

    </div>

    <div class="content-admin-page">

        <div class="nav-content-admin-page">

            <div class="container-link-content-page">
                <div class="container-img-link"><img class="img-link-content-page" src="./public/CSS/Assets/logoappartadmin.png" alt=""></div>
                <a href="http://localhost/Reshome/PageAdmin.php" class="text-link-content-page">OVERVIEW</a>
            </div>
            <div class="container-link-content-page">
                <div class="container-img-link"><img class="img-link-content-page" src="./public/CSS/Assets/logoappartadmin.png" alt=""></div>
                <p href="http://localhost/Reshome/PageAppartAdmin.php" class="text-link-content-page">Announce</p>
            </div>
            <div class="container-link-content-page">
                <div class="container-img-link"><img class="img-link-content-page" src="./public/CSS/Assets/logoappartadmin.png" alt=""></div>
                <p class="text-link-content-page">Users</p>
            </div>

            </ul>
        </div>

        <div class="content-form">
            <h1 class="title-form">Add an apartment</h1>

            <form method="POST">
                <div class="all-form-add-appart">
                    <div class="form-left">

                        <div class="field-form-add-appart">
                            <label class="label-field-add-appart" for="name_apartment">Name of the appartment</label><br />
                            <input class="input-field-add-appart" type="text" id="name_apartment">
                        </div>
                        <div class="field-form-add-appart">
                            <label class="label-field-add-appart" for="neighborhood_apartment">Neighborhood</label><br />
                            <input class="input-field-add-appart" type="text" id="neighborhood_apartment">
                        </div>
                        <div class="field-form-add-appart">
                            <label class="label-field-add-appart" for="arrondissement_apartment">Arrondissement</label><br />
                            <input class="input-field-add-appart" type="text" id="arrondissement_apartment">
                        </div>
                        <div class="field-form-add-appart">
                            <label class="label-field-add-appart" for="nb_bedrooms_apartment">Number of bedrooms</label><br />
                            <input class="input-field-add-appart" type="text" id="nb_bedrooms_apartment">
                        </div>
                        <div class="field-form-add-appart">
                            <label class="label-field-add-appart" for="capacity_apartment">Capacity</label><br />
                            <input class="input-field-add-appart" type="text" id="capacity_apartment">
                        </div>

                    </div>

                    <div class="form-right">
                        <div class="form-right-top">

                            <div class="list-field-form-add-appart">
                                <div class="field-form-add-appart">
                                    <label class="label-field-add-appart" for="type_apartment">Type of apartment</label><br />
                                    <input class="input-field-add-appart" type="text" id="type_apartment">
                                </div>
                                <div class="field-form-add-appart">
                                    <label class="label-field-add-appart" for="area_apartment">Area of apartment</label><br />
                                    <input class="input-field-add-appart" type="text" id="area_apartment">
                                </div>
                                <div class="field-form-add-appart">
                                    <label class="label-field-add-appart" for="price_apartment">Price of apartment</label><br />
                                    <input class="input-field-add-appart" type="text" id="price_apartment">
                                </div>
                            </div>

                            <div class="img-form-add-appart">
                                <div class="field-img-form-add-appart">
                                    <label class="label-field-add-appart" for="img_apartment">Images of apartment</label><br />
                                    <input class="input-field-add-appart-i custom-file-input" type="file" id="img_apartment" value="Import image" multiple>
                                </div>
                                <div class="view-img-add-appart"></div>
                            </div>

                        </div>

                        <div class="form-right-bottom">
                            <div class="field-img-form-add-appart-d">
                                <label class="label-field-add-appart" for="description_apartment">Description</label><br />
                                <input class="input-field-add-appart-d" type="text" id="description_apartment">
                            </div>
                        </div>

                    </div>
                </div>

                <div class="container-btn-add-appart">
                    <button class="btn-add-appart" type="submit">add apartment</button>
                </div>

            </form>

        </div>
    </div>

</div>