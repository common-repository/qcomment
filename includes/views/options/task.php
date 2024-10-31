<?php
add_settings_field(
    'qc_task',
    __( 'Task for authors', 'qcomment' ),
    'qc_task_render',
    'qcomment',
    'qcomment_section'
);

function qc_task_render() {
	$task = trim(get_option( 'qc_task' ))? get_option( 'qc_task' ) : 'Оставьте свой комментарий.';
    echo '<textarea name="qc_task" id="qc_task" class="large-text code" rows="5">' . $task . '</textarea>';
}