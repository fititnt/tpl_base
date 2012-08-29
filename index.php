<?php

/**
 * @package    Base.Template
 * @author     Emerson Rocha Luiz <emerson@webdesign.eng.br>
 * @copyright  Copyright (C) 2005 - 2012 Webdesign Assessoria em Tecnologia da Informacao. All rights reserved.
 * @license    GNU General Public License version 3. See license.txt
 *
 */
defined('_JEXEC') or die;

if($this->countModules('before')) : ?>
<jdoc:include type="modules" name="before" style="none" />
<?php endif; ?>
<jdoc:include type="message" />
<jdoc:include type="component" />
<?php if($this->countModules('after')) : ?>
<jdoc:include type="modules" name="after" style="none" />
<?php endif; ?>
<?php if($this->countModules('debug')) : ?>
<jdoc:include type="modules" name="debug" style="none" />
<?php endif; ?>
