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


<ul class="unstyled category-module<?php echo $moduleclass_sfx; ?>">
	<?php if ($grouped) : ?>
		<?php foreach ($list as $group_name => $group) : ?>
			
			<li>
				<div id="mod-articles-category-group">
					<h3><?php echo $group_name;?></h3>
				</div>
				
				<?php foreach ($group as $item) : ?>
					
					<div>
						<!-- IMAGE -->
						<img src="<?php  echo json_decode($item->images)->image_intro?>" alt="<?php echo $item->title; ?>"/>
						
						<!-- AUTHOR -->
						<?php if ($params->get('show_author')) : ?>
								<small class="mod-articles-category-writtenby">
									    <i class="fa fa-user"></i>&nbsp;
										 <?php echo $item->displayAuthorName; ?>&nbsp;&nbsp;								&nbsp;
								</small>
						<?php endif;?>

						<!-- DATE -->
						<?php if ($item->displayDate) : ?>
							<small class="mod-articles-category-date">
								<i class="fa fa-clock-o"></i> &nbsp;
								<?php echo $item->displayDate; ?>&nbsp;&nbsp;
							</small>
						<?php endif; ?>

						<!-- TITLE AND HITS -->
						<?php if ($params->get('link_titles') == 1) : ?>
							<a class="mod-articles-category-title <?php echo $item->active; ?>" 
								href="<?php echo $item->link; ?>">
								<h2>
									<?php echo $item->title; ?>

									<?php if ($item->displayHits) : ?>
										<small class=" badge mod-articles-category-hits">
											<?php echo $item->displayHits; ?>
										</small>
									<?php endif; ?>
								</h2>
							</a>
						<?php else : ?>
							<h2>
								<?php echo $item->title; ?>
								<?php if ($item->displayHits) : ?>
									<small class=" badge mod-articles-category-hits">
										<?php echo $item->displayHits; ?>
									</small>
								<?php endif; ?>
							</h2>
						<?php endif; ?>
						
						<!-- CATEGORY -NOT USED IN GROUP CATEGORY -->
						<?php if ($item->displayCategoryTitle) : ?>
							<!-- <span class="mod-articles-category-category">
								<?php echo $item->displayCategoryTitle; ?>
							</span> -->
						<?php endif; ?>


						<!-- INTROTEXT -->
						<?php if ($params->get('show_introtext')) : ?>
							<p class="mod-articles-category-introtext">
								<?php echo $item->displayIntrotext; ?>

								<!-- READ MORE -->
								<?php if ($params->get('show_readmore')) : ?>
									<span class="mod-articles-category-readmore pull-right">
										<a class="mod-articles-category-title <?php echo $item->active; ?>" href="<?php echo $item->link; ?>">
											<?php if ($item->params->get('access-view') == false) : ?>
												<?php echo JText::_('MOD_ARTICLES_CATEGORY_REGISTER_TO_READ_MORE'); ?>
											<?php elseif ($readmore = $item->alternative_readmore) : ?>
												<?php echo $readmore; ?>
												<?php echo JHtml::_('string.truncate', $item->title, $params->get('readmore_limit')); ?>
													<?php if ($params->get('show_readmore_title', 0) != 0) : ?>
														<?php echo JHtml::_('string.truncate', ($this->item->title), $params->get('readmore_limit')); ?>
													<?php endif; ?>
											<?php elseif ($params->get('show_readmore_title', 0) == 0) : ?>
												<?php echo JText::sprintf('MOD_ARTICLES_CATEGORY_READ_MORE_TITLE'); ?>
											<?php else : ?>
												<?php echo JText::_('MOD_ARTICLES_CATEGORY_READ_MORE'); ?>
												<?php echo JHtml::_('string.truncate', ($item->title), $params->get('readmore_limit')); ?>
											<?php endif; ?>
										</a>
									</span>
								<?php endif; ?>
						
							</p>
						<?php endif; ?>
						
						<hr style="clear:both">
					</div>

				<?php endforeach; ?>

			</li>
		<?php endforeach; ?>

	<!-- IF NONE IS SELECTED ON ARTICLE GROUPING -->
	<?php else : ?>
		<?php foreach ($list as $item) : ?>
			<li>
				<div>
					<!-- IMAGE -->
					<img src="<?php  echo json_decode($item->images)->image_intro?>" alt="<?php echo $item->title; ?>"/>
					
					<!-- AUTHOR -->
					<?php if ($params->get('show_author')) : ?>
							<small class="mod-articles-category-writtenby">
								    <i class="icon-user"></i> <?php echo $item->displayAuthorName; ?>
									&nbsp; &nbsp;
							</small>
					<?php endif;?>

					<!-- DATE -->
					<?php if ($item->displayDate) : ?>
						<small class="mod-articles-category-date">
								  <?php echo $item->displayDate; ?>
						</small>
					<?php endif; ?>

					<!-- TITLE AND HITS -->
					<?php if ($params->get('link_titles') == 1) : ?>
						<a class="mod-articles-category-title <?php echo $item->active; ?>" 
							href="<?php echo $item->link; ?>">
							<h2>
								<?php echo $item->title; ?>

								<?php if ($item->displayHits) : ?>
									<small class=" badge mod-articles-category-hits">
										<?php echo $item->displayHits; ?>
									</small>
								<?php endif; ?>
							</h2>
						</a>
					<?php else : ?>
						<h2>
							<?php echo $item->title; ?>
							<?php if ($item->displayHits) : ?>
								<small class=" badge mod-articles-category-hits">
									<?php echo $item->displayHits; ?>
								</small>
							<?php endif; ?>
						</h2>
					<?php endif; ?>
					
					<!-- CATEGORY -NOT USED IN GROUP CATEGORY -->
					<?php if ($item->displayCategoryTitle) : ?>
						<!-- <span class="mod-articles-category-category">
							<?php echo $item->displayCategoryTitle; ?>
						</span> -->
					<?php endif; ?>


					<!-- INTROTEXT -->
					<?php if ($params->get('show_introtext')) : ?>
						<p class="mod-articles-category-introtext">
							<?php echo $item->displayIntrotext; ?>

							<!-- READ MORD -->
							<?php if ($params->get('show_readmore')) : ?>
								<span class="mod-articles-category-readmore pull-right">
									<a class="mod-articles-category-title <?php echo $item->active; ?>" href="<?php echo $item->link; ?>">
										<?php if ($item->params->get('access-view') == false) : ?>
											<?php echo JText::_('MOD_ARTICLES_CATEGORY_REGISTER_TO_READ_MORE'); ?>
										<?php elseif ($readmore = $item->alternative_readmore) : ?>
											<?php echo $readmore; ?>
											<?php echo JHtml::_('string.truncate', $item->title, $params->get('readmore_limit')); ?>
												<?php if ($params->get('show_readmore_title', 0) != 0) : ?>
													<?php echo JHtml::_('string.truncate', ($this->item->title), $params->get('readmore_limit')); ?>
												<?php endif; ?>
										<?php elseif ($params->get('show_readmore_title', 0) == 0) : ?>
											<?php echo JText::sprintf('MOD_ARTICLES_CATEGORY_READ_MORE_TITLE'); ?>
										<?php else : ?>
											<?php echo JText::_('MOD_ARTICLES_CATEGORY_READ_MORE'); ?>
											<?php echo JHtml::_('string.truncate', ($item->title), $params->get('readmore_limit')); ?>
										<?php endif; ?>
									</a>
								</span>
							<?php endif; ?>
					
						</p>
					<?php endif; ?>
					
					<hr style="clear:both">
				</div>
			</li>
		<?php endforeach; ?>
	<?php endif; ?>
</ul>
