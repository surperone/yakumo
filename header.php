<!DOCTYPE HTML>
<html>
<head>
    <meta charset="<?php $this->options->charset(); ?>" />
	<meta name="viewport" content="width=device-width,user-scalable=no">
    <?php if ($this->is('post')) : ?>
    <meta property="og:type" content="article"/>
    <meta property="article:published_time" content="<?php $this->date('c'); ?>"/>
    <meta property="article:author" content="<?php $this->author(); ?>" />
    <meta property="article:published_first" content="<?php $this->options->title() ?>, <?php $this->permalink() ?>" />
    <meta property="og:title" content="<?php $this->title() ?>" />
    <meta property="og:url" content="<?php $this->permalink() ?>" />
    <?php endif; ?>

    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类「%s」'),
            'search'    =>  _t('搜索「%s」'),
            'tag'       =>  _t('标签「%s」'),
            'author'    =>  _t('作者「%s」')
        ), '', ' '); ?><?php $this->options->title(); ?></title>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/all.min.css'); ?>">
    <style type="text/css">
        @font-face {
            font-family: 'Exo';
            font-style: normal;
            font-weight: 100;
            src: local('Exo Thin'), local('Exo-Thin'), url(<?php $this->options->themeUrl('fonts/Thin.woff'); ?>) format('woff');
        }
        @font-face {
            font-family: 'Exo';
            font-style: normal;
            font-weight: 400;
            src: local('Exo Regular'), local('Exo-Regular'), url(<?php $this->options->themeUrl('fonts/Regular.woff'); ?>) format('woff');
        }
    </style>
    <script type="text/javascript" src="<?php $this->options->themeUrl('js/jquery.js'); ?>"></script>  
    <?php $this->header("generator=&template=&"); ?>
</head>
