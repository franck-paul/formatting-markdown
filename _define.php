<?php
# -- BEGIN LICENSE BLOCK ----------------------------------
# This file is part of googleTools, a plugin for Dotclear 2.
#
# Copyright (c) Olivier Meunier, Franck Paul and contributors
#
# Licensed under the GPL version 2.0 license.
# A copy of this license is available in LICENSE file or at
# http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
# -- END LICENSE BLOCK ------------------------------------

if (!defined('DC_RC_PATH')) { return; }

$this->registerModule(
	/* Name */			"Markdown syntax",
	/* Description*/		"Brings you markdown (extra) syntax for your entries (see http://michelf.com/projects/php-markdown/extra/)",
	/* Author */			"Michel Fortin",
	/* Version */			'1.2',
	/* Permissions */		'usage,contentadmin'
);
?>