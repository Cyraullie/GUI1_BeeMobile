<?php
ob_start();

?>
    <script type="module" src="View/JS/Horizontal_Swiper.js" defer></script>

    <div class="background">
        <div class="calendar_button">
            <select id="hive" class="active">
                <option selected>Ruche</option>
                <option>Ruche #1</option>
                <option>Ruche #2</option>
            </select>
        </div>


        <div class="background_calendar">

            <button class="accordion title_day">01/10/2021</button>
            <div class=" panel area_parent">
                <div class="title_note">
                    <a>10h00</a>
                </div>
                <div class="area_child week">

                    <div class="content">
                        <a>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras gravida nibh a
                            tellus pretium
                            dictum.
                            Ut sit amet purus dapibus, pulvinar mauris sed, molestie arcu. Proin ac
                            fermentum diam, ut
                            suscipit
                            libero. Nam ut ipsum ut justo dignissim egestas nec nec neque. Curabitur
                            efficitur nec tortor
                            sed
                            imperdiet.

                        </a>
                    </div>
                </div>

                <div class="title_note">
                    <a>12h00</a>
                </div>
                <div class="area_child week">

                    <div class="content">
                        <a>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras gravida nibh a
                            tellus pretium
                            dictum.
                            Ut sit amet purus dapibus, pulvinar mauris sed, molestie arcu. Proin ac
                            fermentum diam, ut
                            suscipit
                            libero. Nam ut ipsum ut justo dignissim egestas nec nec neque. Curabitur
                            efficitur nec tortor
                            sed
                            imperdiet.

                        </a>
                    </div>
                </div>
            </div>

            <button class="accordion title_day">05/10/2021</button>
            <div class="panel area_parent">
                <div class="title_note">
                    <a>10h00</a>
                </div>
                <div class="area_child week">

                    <div class="content">
                        <a>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras gravida nibh a
                            tellus pretium
                            dictum.
                            Ut sit amet purus dapibus, pulvinar mauris sed, molestie arcu. Proin ac
                            fermentum diam, ut
                            suscipit
                            libero. Nam ut ipsum ut justo dignissim egestas nec nec neque. Curabitur
                            efficitur nec tortor
                            sed
                            imperdiet.

                        </a>
                    </div>
                </div>
            </div>

            <button class="accordion title_day">10/10/2021</button>
            <div class="panel area_parent">
                <div class="title_note">
                    <a>10h00</a>
                </div>
                <div class="area_child week">

                    <div class="content">
                        <a>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras gravida nibh a
                            tellus pretium
                            dictum.
                            Ut sit amet purus dapibus, pulvinar mauris sed, molestie arcu. Proin ac
                            fermentum diam, ut
                            suscipit
                            libero. Nam ut ipsum ut justo dignissim egestas nec nec neque. Curabitur
                            efficitur nec tortor
                            sed
                            imperdiet.

                        </a>
                    </div>
                </div>
            </div>

            <button class="accordion title_day">12/10/2021</button>
            <div class="panel area_parent">
                <div class="title_note">
                    <a>10h00</a>
                </div>
                <div class="area_child week">

                    <div class="content">
                        <a>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras gravida nibh a
                            tellus pretium
                            dictum.
                            Ut sit amet purus dapibus, pulvinar mauris sed, molestie arcu. Proin ac
                            fermentum diam, ut
                            suscipit
                            libero. Nam ut ipsum ut justo dignissim egestas nec nec neque. Curabitur
                            efficitur nec tortor
                            sed
                            imperdiet.

                        </a>
                    </div>
                </div>
            </div>

            <button class="accordion title_day">15/10/2021</button>
            <div class="panel area_parent">
                <div class="title_note">
                    <a>10h00</a>
                </div>
                <div class="area_child week">

                    <div class="content">
                        <a>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras gravida nibh a
                            tellus pretium
                            dictum.
                            Ut sit amet purus dapibus, pulvinar mauris sed, molestie arcu. Proin ac
                            fermentum diam, ut
                            suscipit
                            libero. Nam ut ipsum ut justo dignissim egestas nec nec neque. Curabitur
                            efficitur nec tortor
                            sed
                            imperdiet.

                        </a>
                    </div>
                </div>
            </div>

            <button class="accordion title_day">20/10/2021</button>
            <div class="panel area_parent">
                <div class="title_note">
                    <a>10h00</a>
                </div>
                <div class="area_child week">

                    <div class="content">
                        <a>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras gravida nibh a
                            tellus pretium
                            dictum.
                            Ut sit amet purus dapibus, pulvinar mauris sed, molestie arcu. Proin ac
                            fermentum diam, ut
                            suscipit
                            libero. Nam ut ipsum ut justo dignissim egestas nec nec neque. Curabitur
                            efficitur nec tortor
                            sed
                            imperdiet.

                        </a>
                    </div>
                </div>
            </div>

            <button class="accordion title_day">30/10/2021</button>
            <div class="panel area_parent">
                <div class="title_note">
                    <a>10h00</a>
                </div>
                <div class="area_child week">

                    <div class="content">
                        <a>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras gravida nibh a
                            tellus pretium
                            dictum.
                            Ut sit amet purus dapibus, pulvinar mauris sed, molestie arcu. Proin ac
                            fermentum diam, ut
                            suscipit
                            libero. Nam ut ipsum ut justo dignissim egestas nec nec neque. Curabitur
                            efficitur nec tortor
                            sed
                            imperdiet.

                        </a>
                    </div>
                </div>
            </div>


        </div>
    </div>


<?php
$contenu = ob_get_clean();
$footer = "Menu.php";
require "Layout.php";