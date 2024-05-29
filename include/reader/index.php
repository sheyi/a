<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">

        <link href="https://lf9-cdn-tos.bytecdntp.com/cdn/expire-10-y/normalize/8.0.1/normalize.min.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/popup.css">

<?php
$js_jq='<script src="https://lf9-cdn-tos.bytecdntp.com/cdn/expire-10-y/jquery/3.6.0/jquery.min.js" type="application/javascript"></script>';
$js_jszip='<script src="https://lf3-cdn-tos.bytecdntp.com/cdn/expire-10-y/jszip/3.7.1/jszip.min.js" type="application/javascript"></script>';
echo $js_jq;
echo $js_jszip;
?>

        <script>
            "use strict";

            document.onreadystatechange = function () {
              if (document.readyState == "complete") {
                window.reader = ePubReader("https://epub.higrid.net/book/8166.epub", {
                   restore: true
                 });
              }
            };

        </script>

        <!-- File Storage -->
        <!-- <script src="js/libs/localforage.min.js"></script> -->

        <!-- Full Screen -->
        <script src="https://lf9-cdn-tos.bytecdntp.com/cdn/expire-10-y/screenfull.js/5.2.0/screenfull.min.js" type="application/javascript"></script>

        <!-- Render -->
        <script src="js/epub.min.js"></script>

        <!-- Reader -->
        <script src="js/reader.min.js"></script>

        <!-- Plugins -->
        <!-- <script src="js/plugins/search.js"></script> -->

        <!-- Highlights -->
        <!-- <script src="js/libs/jquery.highlight.js"></script> -->
        <!-- <script src="js/hooks/extensions/highlight.js"></script> -->

    </head>
    <body>
      <div id="sidebar">
        <div id="panels">
          <!-- <input id="searchBox" placeholder="search" type="search"> -->

          <!-- <a id="show-Search" class="show_view icon-search" data-view="Search">Search</a> -->
          <a id="show-Toc" class="show_view icon-list-1 active" data-view="Toc">TOC</a>
          <a id="show-Bookmarks" class="show_view icon-bookmark" data-view="Bookmarks">Bookmarks</a>
          <!-- <a id="show-Notes" class="show_view icon-edit" data-view="Notes">Notes</a> -->

        </div>
        <div id="tocView" class="view">
        </div>
        <div id="searchView" class="view">
          <ul id="searchResults"></ul>
        </div>
        <div id="bookmarksView" class="view">
          <ul id="bookmarks"></ul>
        </div>
        <div id="notesView" class="view">
          <div id="new-note">
            <textarea id="note-text"></textarea>
            <button id="note-anchor">Anchor</button>
          </div>
          <ol id="notes"></ol>
        </div>
      </div>
      <div id="main">

        <div id="titlebar">
          <div id="opener">
            <a id="slider" class="icon-menu">Menu</a>
          </div>
          <div id="metainfo">
            <span id="book-title"></span>
            <span id="title-seperator">&nbsp;&nbsp;–&nbsp;&nbsp;</span>
            <span id="chapter-title"></span>
          </div>
          <div id="title-controls">
            <a id="bookmark" class="icon-bookmark-empty">Bookmark</a>
            <a id="setting" class="icon-cog">Settings</a>
            <a id="fullscreen" class="icon-resize-full">Fullscreen</a>
          </div>
        </div>

        <div id="divider"></div>
        <div id="prev" class="arrow">‹</div>
        <div id="viewer"></div>
        <div id="next" class="arrow">›</div>

        <div id="loader"><img src="img/loader.gif"></div>
      </div>
      <div class="modal md-effect-1" id="settings-modal">
          <div class="md-content">
              <h3>Settings</h3>
              <div>
                  <p>
                    <input type="checkbox" id="sidebarReflow" name="sidebarReflow">更多信息请访问：https://higrid.net
                  </p>
              </div>
              <div class="closer icon-cancel-circled"></div>
          </div>
      </div>
      <div class="overlay"></div>
    </body>
</html>
