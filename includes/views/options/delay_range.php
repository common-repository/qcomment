<?php
add_settings_field(
    'qc_delay_range',
    __( 'Delay between works (min.).', 'qcomment' ),
    'qc_delay_range_render',
    'qcomment',
    'qcomment_section'
);

function qc_delay_range_render() {
    echo '<input name="qc_delay_from" type="text" id="qc_delay_from" value="' . get_option( 'qc_delay_from' )
        . '"> - ';
    echo '<input name="qc_delay_to" type="text" id="qc_delay_to" value="' . get_option( 'qc_delay_to' )
        . '">';
}