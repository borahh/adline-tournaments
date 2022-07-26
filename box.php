// Sidebar - before Metaboxs - 
add_action( 'submitpost_box', 'callback__submitpost_box' );
function callback__submitpost_box( $post ) {
    if( $post->post_type == 'tournament' ) {
    
    // Ticket
    $key_ticket = 'adlt_tournament_ticket';
    $ticket = get_post_meta($post->ID, $key_ticket, true);
	?>
	<div style="display:flex; flex-direction: row; gap: 20px; align-items:center; margin-bottom: 20px; padding: 15px;color: #fff;background: rebeccapurple;clear: both; border-radius: 0.475rem;">
		<span class="svg-icon svg-icon-muted svg-icon-2hx"><svg width="36px" height="36px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path opacity="0.3" d="M5 8.04999L11.8 11.95V19.85L5 15.85V8.04999Z" fill="currentColor"/>
            <path d="M20.1 6.65L12.3 2.15C12 1.95 11.6 1.95 11.3 2.15L3.5 6.65C3.2 6.85 3 7.15 3 7.45V16.45C3 16.75 3.2 17.15 3.5 17.25L11.3 21.75C11.5 21.85 11.6 21.85 11.8 21.85C12 21.85 12.1 21.85 12.3 21.75L20.1 17.25C20.4 17.05 20.6 16.75 20.6 16.45V7.45C20.6 7.15 20.4 6.75 20.1 6.65ZM5 15.85V7.95L11.8 4.05L18.6 7.95L11.8 11.95V19.85L5 15.85Z" fill="currentColor"/>
            </svg>
        </span>
        
        <?php if($ticket) { ?>
            <div></div>
        <?php } else { ?>
        <span style="font-size: 16px;">Ticket Information</span>
        <?php } ?>
	</div>
	<div style="display:flex; flex-direction: row; gap: 20px; align-items:center; margin-bottom: 20px; padding: 15px;color: #fff;background: #F1416C;clear: both; border-radius: 0.475rem;">
    <span class="svg-icon svg-icon-muted svg-icon-2hx">
        <svg xmlns="http://www.w3.org/2000/svg" width="36px" height="36px" viewBox="0 0 24 24">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor"/>
                <rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"/>
                <rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"/>
                <rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"/>
            </g>
        </svg>
    </span>
    <span style="font-size: 16px;">Entry Form</span>
	</div>
	<?php
    }
}
