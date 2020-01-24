// create an excellent attachment page in WordPress.
<?php get_header(); ?>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<div class="container">
<div class="row">
<div class="col-lg-6" >
<?php echo wp_get_attachment_image( get_the_ID(), 'medium' ); ?>
</div>
<div class="col-lg-6">
<div class="panel panel-primary" >
<div class="panel-heading" ><strong><i class="fa fa-info-circle fa-lg"></i> Attachment information</strong></div>
<div class="panel-body" style="background-color: #fff;">
<ul class="fa-ul" style="text-align: left;">
<li><i class="fa-li fa fa-arrow-right"></i><strong>Title </strong>: <?php the_title(); ?></li>
<li><i class="fa-li fa fa-arrow-right"></i><strong>Author name</strong> : <?php the_author(); ?></li>
<li><i class="fa-li fa fa-arrow-right"></i><strong>Post name</strong> : <a href="<?php echo get_permalink($post->post_parent); ?>"><?php
echo empty( $post->post_parent ) ? get_the_title( $post->ID ) : get_the_title( $post->post_parent );
?></a></li>
</ul>
  </div>  </div>  
<p>Select your image size and download</p>
<p class='resolutions'> Downloads: 
<?php
            $images = array();
            $image_sizes = get_intermediate_image_sizes();
            array_unshift( $image_sizes, 'full' );
            foreach( $image_sizes as $image_size ) {
            $image = wp_get_attachment_image_src( get_the_ID(), $image_size );
            $name = $image_size . ' (' . $image[1] . 'x' . $image[2] . ')';
            $images[] = '<a href="' . $image[0] . '">' . $name . '</a>';
          }
       echo implode( ' | ', $images );
   ?>
</p>
</div>
</div></div>
<?php get_footer(); ?>
