<?php defined('C5_EXECUTE') or die(_("Access Denied.")); ?>
<body id="body" class="<?php global $u;$u = new User();echo $u->getUserName().' ';if ($c->isEditMode()) { echo "userInEditMode "; } global $cp; echo ($cp->canWrite()) ? 'userLoggedIn' : 'userNotLoggedIn'; ?>">
