<?php

global $data;

if (isset($data['landingpage_blocks']['enabled']['block_social_header']))

{

@$layout = $data['social_blocks_header']['enabled'];

if (count($layout) > 1)

{

?>

<!--Start Social Elements-->

<aside id="section_social_header" class="social_elements section_social_header">

    <ul>

		<?php do_action('justlanded_header_social_elements_start'); ?>

        <?php

        if ($layout):

			$layout = apply_filters ( 'justlanded_header_social_elements', $layout);

            foreach ($layout as $key=>$value) {

                if ($key != "placebo") {

                    if (isset($data['social_'.$key]))

                    {

                        if (isset($data['social_'.$key])) {

                            $opt = $data['social_'.$key];

                            //echo '        <li><a href="'.$opt.'" class="'.$key.'" title="'.$value.'" target="_blank"><span>'.$value.'</span></a></li>' . "\n";

                        }

                    }

                }

            }

        endif;

        ?>

		<?php do_action('justlanded_header_social_elements_end'); ?>

		<li>Call us: 610-584-3266</li>
		<li>&nbsp;&nbsp;Email:info@ecogreenlawncare.com</a></li>
		<li><a href="https://www.facebook.com/ecogreenorganiclawncare" target="_blank"><img src="https://ecogreenlawncare.com/wp-content/uploads/2017/02/facebook-icon.png" alt="EcoGreen Facebook page" /></a></li>
    </ul>

</aside><!--End Social Elements-->

<?php

}

}

?>