<?php
/**
 * @package   Gantry 5 Theme
 * @author    szoupi http://szoupi.com
 * @copyright Copyright (C) 2015 - 2016 szoupi
 * @copyright Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license   GNU/GPLv2 and later
 *
 * http://www.gnu.org/licenses/gpl-2.0.html
 */

defined('_JEXEC') or die;
$item_heading = $params->get('item_heading', 'h4');
$images = json_decode($item->images);
?>


<!-- FOR STYLE SEE ../g5_aylo2/scss/aylo2-joomla/_core.scss -->


<!-- IMAGE -->
<?php  if (isset($images->image_intro) and !empty($images->image_intro)) : ?>
   <div class="img-intro">
	   <img class = "newsflash-image"
	      <?php if ($images->image_intro_caption):
	         echo 'class="caption"'.' title="' .htmlspecialchars($images->image_intro_caption) .'"';
	      endif; ?>
	      src="<?php echo htmlspecialchars($images->image_intro); ?>" alt="<?php echo htmlspecialchars($images->image_intro_alt); ?>"/>
   </div>
<?php endif; ?>


<div>
	<div class="newsflash-content">
		
		<div>
			<!-- TITLE -->
			<?php if ($params->get('item_title')) : ?>
				
				<<?php echo $item_heading; ?> class="newsflash-title<?php echo $params->get('moduleclass_sfx'); ?>">

					<?php if ($params->get('link_titles') == 1) : ?>
						<a class="mod-articles-category-title <?php echo $item->active; ?>" 
							href="<?php echo $item->link; ?>">		
							<?php echo $item->title; ?>
						</a>
					<?php else : ?>
						<?php echo $item->title; ?>
					<?php endif; ?>

				</<?php echo $item_heading; ?>>

			<?php endif; ?>
		</div>

		<!-- DATE -->
		<small class="mod-articles-category-date">
			<i class="fa fa-clock-o"></i> &nbsp;
			<?php echo $item->displayDate; ?>&nbsp;&nbsp;
		</small>

		<!-- INTROTEXT -->
		<div class="newsflash-introtext">
			<!-- OPTION IS MISSING IN CONTROL PANEL -->
			<?php if (!$params->get('intro_only')) : ?>
				<?php echo $item->afterDisplayTitle; ?>
			<?php endif; ?>

			<?php echo $item->beforeDisplayContent; ?>
			
			
			<!-- INTROTEXT -->
			<?php echo $item->introtext; ?>

			<!-- READ MORE -->
			<?php if (isset($item->link) && $item->readmore != 0 && $params->get('readmore')) : ?>
				<?php echo '<a class="readmore btn btn-primary" href="' . $item->link . '">' . $item->linkText . '</a>'; ?>
			<?php endif; ?>
		</div>
	</div>
</div>
