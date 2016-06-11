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


<ul class="nav nav-pills newsflash-horiz<?php echo $params->get('moduleclass_sfx'); ?>" >
	<?php for ($i = 0, $n = count($list); $i < $n; $i ++) : ?>
		<?php $item = $list[$i]; ?>
		<li>
			<?php require JModuleHelper::getLayoutPath('mod_articles_news', '_item'); ?>

			<?php if ($n > 1 && (($i < $n - 1) || $params->get('showLastSeparator'))) : ?>
				<!-- <span class="article-separator">&#160;</span> -->
				<hr>
			<?php endif; ?>
		</li>
	<?php endfor; ?>
</ul>
