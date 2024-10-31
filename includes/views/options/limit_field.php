<?php
add_settings_field(
    'qc_limit',
    __( 'Максимальное количество работ за к-во дней.', 'qcomment' ),
    'qc_limit_render',
    'qcomment',
    'qcomment_section'
);

function qc_limit_render() {
    echo '<input name="qc_limit" type="text" id="qc_limit" value="' . get_option( 'qc_limit' ) . '" class="regular-text">';
}
