<?php
add_settings_field(
    'qc_pay',
    __( 'Comments to buy', 'qcomment' ),
    'qc_pay_render',
    'qcomment',
    'qcomment_section'
);

function qc_pay_render() {
	$qc_pay = trim(get_option( 'qc_pay' )) ? get_option( 'qc_pay' ) : 3;
    echo '<input name="qc_pay" type="text" id="qc_pay" value="' . $qc_pay
        . '" class="regular-text">';
}