<?php

function displaySearch() {
    echo '
    <form id="searchForm">
        <input type="hidden" name="page" value="search">
        <input type="text" name="q" id="search" placeholder="Search posts">
        <button type="submit" id="searchButton"></button>
    </form>';
}

?>