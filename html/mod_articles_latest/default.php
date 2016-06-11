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
?>


<!-- FOR STYLE SEE ../g5_aylo2/scss/aylo2-joomla/_core.scss -->


<div class="latestnews<?php echo $moduleclass_sfx; ?>">


<?php foreach ($list as $item) :  ?>


	<div class="">
		<div>
			<img src="<?php  echo json_decode($item->images)->image_intro?>" alt="<?php echo $item->title; ?>"/>
		</div>

		<div class="title">
			<h4 itemscope itemtype="http://schema.org/Article">
				<!-- TITLE -->
				<a href="<?php echo $item->link; ?>" itemprop="url">
					<span itemprop="name">
						<?php echo $item->title; ?>
					</span>
				</a>
			</h4>

			<!-- CATEGORY AND DATE	 -->
			<small class="text-uppercase label">
				<?php echo $item->category_title; ?>&nbsp;&nbsp;
			</small>
			<span>  </span>
			<small class="datetime"> 
				<i class="fa fa-clock-o"></i>&nbsp;&nbsp;
				<?php echo $item->created; ?>
			</small>

		</div>	


	</div>
	<hr style="clear:both;">
<?php endforeach; ?>
</div>
