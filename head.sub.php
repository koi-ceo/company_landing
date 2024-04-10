<?php
/**
 * Created by PhpStorm.
 * User: holic
 * Date: 2024-04-10
 */

if (!defined('_KOI_')) exit; // 개별 페이지 접근 불가

$koi['title'] = strip_tags("코이");
$koi_head_title = strip_tags("코이");
$koi['description'] = "";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $koi['title'] ?></title>
    <link rel="stylesheet" href="/css/bulma.min.css">
    <link rel="stylesheet" href="/css/common.css">
</head>
<body>

<section class="section">
    <div class="container is-fluid">
        <div class="columns is-vcentered">
            <div class="column is-6">
                <h1 class="title is-1"><a href="/"><?= $koi['title'] ?></a></h1>
            </div>
            <div class="column is-6">
                <nav class="navbar is-spaced" role="navigation" aria-label="main navigation">
                    <div class="navbar-menu navbar-end">
                        <div class="navbar-end">
                            <a class="navbar-item" href="/about.php">회사소개</a>
                            <a class="navbar-item" href="/product.php">제품소개</a>
                            <a class="navbar-item" href="/result.php">검색결과</a>
                            <a class="navbar-item" href="/contact.php">문의하기</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>