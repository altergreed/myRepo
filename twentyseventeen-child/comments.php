<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div class="comments">

    <?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
    <div class="comment-title">
        <?php
			$comments_number = get_comments_number();
			if ( '1' === $comments_number ) {
				/* translators: %s: post title */
				printf( _x( 'Комментарии (1)', 'comments title', 'twentyseventeen' ));
			} else {
				printf(
					/* translators: 1: number of comments, 2: post title */
					_nx(
						'Комментарии (%1$s)',
						'Комментарии (%1$s)',
						$comments_number,
						'comments title',
						'twentyseventeen'
					),
					number_format_i18n( $comments_number ),
					get_the_title()
				);
			}
			?>
    </div>

    <div class="comment-list">
        <?php
				wp_list_comments(
					array(
						'avatar_size' => 50,
						'style'       => 'div',
						'short_ping'  => true,
						'reply_text'  => '<i class="fas fa-reply"></i>',
					)
				);
			?>
    </div>

    <?php

    $pagi=get_the_comments_pagination(array(
                'screen_reader_text' => '1',
				'prev_text' => ('') . '<span class="screen-reader-text">' . __( 'Previous', 'twentyseventeen' ) . '</span>',
				'next_text' => '<span class="screen-reader-text">' . __( 'Next', 'twentyseventeen' ) . '</span>' .(''),
			));
    $pagi = preg_replace('~<h2.*?h2>~', '', $pagi);
    echo $pagi;

//		the_comments_pagination(
//			array(
//                'screen_reader_text' => '1',
//				'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous', 'twentyseventeen' ) . '</span>',
//				'next_text' => '<span class="screen-reader-text">' . __( 'Next', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
//			)
//		);

	endif; // Check for have_comments().

	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
		?>

    <p class="no-comments"><?php _e( 'Комментарии закрыты.', 'twentyseventeen' ); ?></p>
    <?php
	endif;
?>
    <?php
	comment_form(
        array(
            'fields' => array(
                'author' => '<p class="comment-form-author">'.'<label for="author">'.__( 'Name' ).($req ? '<span class="required">*</span>' : '').'</label>'.'<input id="author" name="author" type="text" value="'.esc_attr($commenter['comment_author']).'" size="30"'.$aria_req.$html_req.'/></p>',
                'email'  => '<p class="comment-form-email"><label for="email">' . __( 'Email' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .'<input id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" aria-describedby="email-notes"' . $aria_req . $html_req  . ' /></p>',),
            'comment_field'=>'<div class="media mt-3">'.get_avatar( $user_identity, 50, '', '', array('class'=>'d-flex mr-2 rounded')).'<div class="media-body"><div class="form-group"><textarea id="comment" name="comment" class="form-control" aria-required="true" placeholder="Новый комментарий"></textarea></div></div></div>',
            'logged_in_as' => '<div class="logged-in-as">' . sprintf( __( 'Вы вошли как <a href="%1$s">%2$s</a> <a href="%3$s" class="right" title="Выйти из аккаунта"><i class="fas fa-sign-out-alt"></i></a>' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</div>',
            'submit_button' => '<input name="%1$s" type="submit" id="%2$s" class="btn-submit" value="Отправить" />',
            'title_reply_before'=>'<div class="comment-title">',
            'title_reply_after'=>'</div>',
        )
    );

	?>
</div><!-- #comments -->
