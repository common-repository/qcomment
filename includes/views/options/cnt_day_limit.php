<?php
add_settings_field(
    'qc_cnt_day_limit',
    __( 'Number of days for the limit.', 'qcomment' ),
    'qc_cnt_day_limit_render',
    'qcomment',
    'qcomment_section'
);

function qc_limit_render() {
    echo '<input name="qc_cnt_day_limit" type="text" id="qc_cnt_day_limit" value="' . get_option( 'qc_cnt_day_limit' ) . '" class="regular-text">';
}
