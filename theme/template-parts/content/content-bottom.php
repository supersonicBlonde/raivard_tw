<?php
$page_bottom = get_field('page_bottom');
if ($page_bottom):
?>
    <section class="max-w-[1270px] mx-auto px-8">
        <div class="text-center font-RalewaySemiBold text-[25px] tracking-[20%] mt-[50px]"><?php
                                                                                            echo $page_bottom['line_1'];
                                                                                            ?></div>
    </section>
    <section class="mt-[100px]" id="texte">
        <div class="text-gray/30 text-center"><?php
                                                echo $page_bottom['line_2'];
                                                ?></div>
    </section>
<?php
endif;
?>