<?php
/**
* @package		Alter Glossary
* @copyright	Copyright (C) 2009-2013 AlterBrains.com. All rights reserved.

* @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*/

defined('_JEXEC') or die('Restricted access'); 

$columns 	= $this->params->get('show_category_columns', 1);
$span 		= ($columns > 1) ? ' span'. (12 / $columns) : '';
?>

	
<?php if (empty($this->items)) : ?>
	<?php if ($this->state->get('terms_loaded')) : ?>
		<p><?php echo $this->state->get('filter.search') ? JText::_('COM_AGLOSSARY_NO_TERMS_SEARCH') : JText::_('COM_AGLOSSARY_NO_TERMS'); ?></p>
	<?php endif; ?>	
	<?php return;?>
<?php else : ?>
	<div class="glossary-terms">
		<div class="row-fluid">
			<?php foreach ($this->items as $i => &$item) : 
			
				$class = 'term'.$span;
				
				// Featured highlight
				if ($item->featured) {
					$class .= ' featured';
					
					// Small custom fix for Gantry
					if (JFactory::getApplication()->getTemplate() == 'gantry') {
						$class .= ' rt-block box1';
					} else {
						$class .= ' well';
					}
				}
				
				// New row?
				if ($columns > 1 && $i && (($i+1) % $columns == 1)) {
					echo '</div>';
					echo '<hr/>';
					echo '<div class="row-fluid">';
				}
			
			?>
			<div<?php echo $class ? ' class="'.$class.'"' : null;?>>
				<?php if ($item->featured) : ?>
				<span class="label label-warning pull-right"><?php echo JText::_('JFEATURED'); ?></span>
				<?php endif; ?>
				<h3><?php /*<a href="<?php echo $item->link; ?>">*/?><?php echo $this->escape($item->title); ?><?php echo $item->abbr ? ' ('.$item->abbr.')' : null; ?><?php /*</a>*/?></h3>
				<?php if ($this->params->get('show_category_term_desc') != 'hide' || $item->images->get('intro_image')) : ?>
				<div class="term-description">
					<?php if ($item->images->get('intro_image')) : 
						// Prepare style, stupid bootstrap ignores evident things :(
						if ($item->images->get('intro_float') == 'left') {
							$style = ' style="margin:0 10px 10px 0"';
						} else if ($item->images->get('intro_float') == 'right') {
							$style = ' style="margin:0 0 10px 10px"';
						} else {
							$style = '';
						}
						?>
						<a href="<?php echo $item->link; ?>"><img class="intro-img img-polaroid" src="<?php echo JUri::base(true).'/', $item->images->get('intro_image'); ?>" alt="<?php echo $this->escape($item->images->get('intro_alt', $item->title)); ?>"<?php echo $item->images->get('intro_caption') ? ' title="'.$this->escape($item->images->get('intro_caption')).'"' : null; ?><?php echo ($item->images->get('intro_float') != 'none') ? ' align="'.$item->images->get('intro_float').'"' : ''; ?><?php echo $style; ?> /></a>
					<?php endif; ?>
					
					<?php if ($this->params->get('show_category_term_desc') != 'hide') : ?>
					<?php echo $item->text; ?>
					<div class="clearfix"></div>
					<?php endif; ?>
				</div>
				<?php endif; ?>
				
				<?php if ($this->params->get('show_category_term_related') && $item->related) : ?>
				<p class="category-related-terms">
					<em><span><?php echo JText::_('COM_AGLOSSARY_RELATED_TERMS_CATEGORY'); ?></span>
						<?php foreach($item->related as $key => &$related) : ?>
						<a href="<?php echo $related->link; ?>"><?php echo $this->escape($related->title); ?></a><?php echo isset($item->related[$key + 1]) ? ',' : null; ?>
						<?php endforeach; ?>
					</em>
				</p>
				<?php endif; ?>
				
				<?php if ($this->params->get('show_category_term_tags') && $item->tags->itemTags) : ?>
					<?php $item->tagLayout = new JLayoutFile('joomla.content.tags'); ?>
					<p class="category-term-tags"><?php echo $item->tagLayout->render($item->tags->itemTags); ?></p>
				<?php endif; ?>

				<?php if ($this->params->get('show_category_term_links') && $item->links) : ?>
				<div class="category-term-links">
					<h5><?php echo JText::_('COM_AGLOSSARY_TERM_LINKS'); ?></h5>
					<ul><?php foreach($item->links as &$link) :?>
						<li><a href="<?php echo $link->link; ?>"<?php echo ($link->target != '_self') ? ' target="'.$link->target.'"' : null; ?>><?php echo $this->escape($link->text); ?></a></li>
						<?php endforeach; ?>
					</ul>
				</div>
				<?php endif; ?>

				<?php if ($this->params->get('show_category_term_readmore') && $item->fulltext && ($this->params->get('show_category_term_desc') == 'introtext' || $this->params->get('show_category_term_desc') == 'hide')) : ?>
				<a class="readmore btn btn-small" href="<?php echo $item->link; ?>"><?php echo JText::_('COM_AGLOSSARY_READMORE');?></a>
				<div class="clearfix"></div>
				<?php endif; ?>
				
				<?php if (!$item->featured && $columns < 2) : ?>
				<hr/>
				<?php endif; ?>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
<?php endif; ?>

<?php if ($this->params->get('show_pagination')) : ?>
<div class="pagination">
	<?php if ($this->params->get('show_pagination_results')) : ?>
	<p class="pull-right"><?php echo $this->pagination->getPagesCounter(); ?></p>
	<?php endif; ?>
	<?php echo $this->pagination->getPagesLinks(); ?>
</div>
<?php endif; ?>

<?php if ($this->params->get('show_pagination_limit')) : ?>
<div class="display-limit pull-right">
	<?php echo JText::_('JGLOBAL_DISPLAY_NUM'); ?>&#160;
	<?php echo $this->pagination->getLimitBox(); ?>
</div>
<div class="clr clearfix"></div>
<?php endif; ?>
