<?php
ob_start();
//TODO ajouter des acordions https://getbootstrap.com/docs/5.0/components/accordion/
?>

    <script type="module" src="View/JS/Horizontal_Swiper.js" defer></script>

    <div class="background">
        <div class="calendar_button">
            <a id="day" href="?action=AgendaDay" class="inactive">Jour</a>
            <a id="week" href="?action=AgendaWeek" class="active">Semaine</a>
            <a id="month" href="?action=AgendaMonth" class="inactive">Mois</a>
        </div>

        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->

                <?php for ($x = 0; $x <= 3; $x++): ?>
                <?php $i = $x * 7; ?>

                <div class="swiper-slide">

                    <h1 class="title"><?= date("d/m/y", strtotime("monday this week + {$i} day")) . " - " . date("d/m/y", strtotime("sunday this week + {$i} day")) ?></h1>
                    <div class="background_calendar">


                        <div class="title_day">
                            <a>Lundi</a>
                        </div>
                        <div class="area_parent">
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

                        <div class="title_day">
                            <a>Mardi</a>
                        </div>
                        <div class="area_parent">
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

                        <div class="title_day">
                            <a>Mercredi</a>
                        </div>
                        <div class="area_parent">
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

                        <div class="title_day">
                            <a>Jeudi</a>
                        </div>
                        <div class="area_parent">
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

                        <div class="title_day">
                            <a>Vendredi</a>
                        </div>
                        <div class="area_parent">
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

                        <div class="title_day">
                            <a>Samedi</a>
                        </div>
                        <div class="area_parent">
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

                        <div class="title_day">
                            <a>Dimanche</a>
                        </div>
                        <div class="area_parent">
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

                <?php endfor; ?>
            </div>
        </div>
    </div>


    <?php
    $contenu = ob_get_clean();
    $footer = "Menu.php";
    require "Layout.php";