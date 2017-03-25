<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $authorAvatar = new Typecho_Widget_Helper_Form_Element_Text('authorAvatar', NULL, NULL, _t('头像地址'), _t(''));
    $form->addInput($authorAvatar);

    $weibo = new Typecho_Widget_Helper_Form_Element_Text('weibo', NULL, NULL, _t('微博'), _t(''));
    $form->addInput($weibo);

    $zhihu = new Typecho_Widget_Helper_Form_Element_Text('zhihu', NULL, NULL, _t('知乎'), _t(''));
    $form->addInput($zhihu);

    $douban = new Typecho_Widget_Helper_Form_Element_Text('douban', NULL, NULL, _t('豆瓣'), _t(''));
    $form->addInput($douban);

    $github = new Typecho_Widget_Helper_Form_Element_Text('github', NULL, NULL, _t('GitHub'), _t(''));
    $form->addInput($github);

    $facebook = new Typecho_Widget_Helper_Form_Element_Text('facebook', NULL, NULL, _t('Facebook'), _t(''));
    $form->addInput($facebook);

    $twitter = new Typecho_Widget_Helper_Form_Element_Text('twitter', NULL, NULL, _t('Twitter'), _t(''));
    $form->addInput($twitter);
}

