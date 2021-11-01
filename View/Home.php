<?php
ob_start();
?>

    <div class="background">

        <div class="area_parent">
            <div class="title">
                <a>Rappel</a>
            </div>

            <div class="area_child">
                <div class="title">
                    <a>10h00</a>
                </div>
                <div class="content">
                    <a>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras gravida nibh a tellus pretium
                        dictum.
                        Ut sit amet purus dapibus, pulvinar mauris sed, molestie arcu. Proin ac fermentum diam, ut
                        suscipit
                        libero. Nam ut ipsum ut justo dignissim egestas nec nec neque. Curabitur efficitur nec tortor
                        sed
                        imperdiet.

                    </a>
                </div>
            </div>
        </div>


        <div class="area_parent">
            <div class="title">
                <a>Notes</a>
            </div>
            <div class="content">
                    <a class="area_child">faires des trucs pas bien</a>
                    <a class="area_child">faires des trucs vraiments pas bien</a>
            </div>
        </div>

    </div>


<?php
$contenu = ob_get_clean();
$footer = "Menu.php";
require "Layout.php";