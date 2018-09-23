<?php

    add_filter( 'show_admin_bar' , 'my_function_admin_bar');
    function my_function_admin_bar(){
        return false;
    }


    add_theme_support( 'post-thumbnails' );
    add_action('wp_enqueue_scripts', 'theme_scripts', 'favicon');
    function theme_scripts()
    {
        wp_enqueue_style('styles-theme', get_template_directory_uri() . '/dist/css/style.min.css');
        wp_enqueue_style('fontawesome',  'https://use.fontawesome.com/releases/v5.0.13/css/all.css');
        wp_enqueue_script('scripts-theme', get_template_directory_uri() . '/dist/js/all.js', ['jquery'], '1.0.0', true);
    }

    function my_acf_google_map_api( $api ){
        $api['key'] = 'AIzaSyDNj--p0jczavWMrCOqsw_GBNF29EH8MsQ';
        return $api;
    }
    add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');


    function menu_icons($icon){

        // Store your SVGs in an associative array
        $svgs = array(
            'icon-wine' => "data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/PjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+PHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iNTEycHgiIGhlaWdodD0iNTEycHgiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+PGc+PHBhdGggZD0iTTM1MS45OTQsNDgwaC04MFYzMTguNDY5YzM0LjkzOC0zLjU2Miw2Ny42NTYtMTcuOTA2LDkzLjIxOS00Mi41OTRjNjAuMzEzLTU4LjI5Nyw2NC4zNzUtMjA3LjUsNy4zNzUtMjcwLjU5NEwzNjcuODA3LDBIMTQ0LjE1bC00Ljc2Niw1LjI4MWMtNTYuOTg0LDYzLjA5NC01Mi44OSwyMTIuMzEyLDcuNDIzLDI3MC41OTRjMjUuNTMxLDI0LjY4OCw1OC4yNSwzOS4wMzEsOTMuMTg4LDQyLjU5NFY0ODBoLTgwYy04Ljg0NCwwLTE2LDcuMTU2LTE2LDE2czcuMTU2LDE2LDE2LDE2aDgwaDMyaDgwYzguODQ0LDAsMTYtNy4xNTYsMTYtMTZTMzYwLjgzOCw0ODAsMzUxLjk5NCw0ODB6IE0xNTguNzYsMzJoMTk0LjQ1M2M0MS4wNjMsNTMuNzY2LDM2LjQwNiwxNzUuNzk3LTEwLjI1LDIyMC44NTljLTQ2Ljg0NCw0NS4yNjYtMTI3LjA0Nyw0NS4zMjktMTczLjkwNiwwLjAxNkMxMjIuNCwyMDcuNzk3LDExNy42OTcsODUuNzY2LDE1OC43NiwzMnogTTE4MC4xODIsMjQxLjM3NWMtMjMuMzEzLTIyLjUzMS0zNC41OTQtNjguODI4LTMzLjMxMy0xMTMuMzc1aDIxOC4yNWMxLjMxMiw0NC41NjMtOS45NjksOTAuODQ0LTMzLjI4MSwxMTMuMzU5QzI5My4xMTksMjc4LjgxMiwyMTguOTE2LDI3OC44MTIsMTgwLjE4MiwyNDEuMzc1eiIvPjwvZz48Zz48L2c+PGc+PC9nPjxnPjwvZz48Zz48L2c+PGc+PC9nPjxnPjwvZz48Zz48L2c+PGc+PC9nPjxnPjwvZz48Zz48L2c+PGc+PC9nPjxnPjwvZz48Zz48L2c+PGc+PC9nPjxnPjwvZz48L3N2Zz4=",
            'receita' => "data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA0NTUgNDU1IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA0NTUgNDU1OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjUxMnB4IiBoZWlnaHQ9IjUxMnB4Ij48Zz48cGF0aCBkPSJNMjEwLjQxOCwyNTYuNjM4YzAtMTkuODYxLDIuNjk5LTM5LjUzOSw3Ljk0My01OC40OThjLTI4LjM2NCw0LjM2MS01MC4xNTUsMjguOTMyLTUwLjE1NSw1OC40OThIMjEwLjQxOHoiIGZpbGw9IiNhMGE1YWEiLz48cGF0aCBkPSJNMjQwLjQxOCwyNTYuNjM4aDM1LjE5M2MwLTU3LjQ2NCwzMi4wMTktMTA5LjYxMSw4MS42Ny0xMzYuMTcyYy05LjEwNi04LjY4OS0xOS4wODUtMTYuNDY4LTI5Ljc4MS0yMy4yMSAgIEMyNzMuNTQ5LDEzMi4wODEsMjQwLjQxOCwxOTIuMjM2LDI0MC40MTgsMjU2LjYzOHoiIGZpbGw9IiNhMGE1YWEiLz48cGF0aCBkPSJNMzA1LjYxMSwyNTYuNjM4aDM1LjE5NGMwLTIxLjM1LDcuNjg5LTQyLjAyLDIxLjY1Mi01OC4yMDNjOS4zMzEtMTAuODEzLDIxLjA1MS0xOS4xNTUsMzQuMDY5LTI0LjQ0NiAgIGMtNS4yNTItMTAuNzA0LTExLjQ4NC0yMC44NDEtMTguNTktMzAuMjg5QzMzNC4yNDEsMTYzLjg4NSwzMDUuNjExLDIwNy44NzksMzA1LjYxMSwyNTYuNjM4eiIgZmlsbD0iI2EwYTVhYSIvPjxwYXRoIGQ9Ik0zNzAuODA2LDI1Ni42MzhoNDQuODYxYzAtMTkuMDMtMi44NDgtMzcuNDA2LTguMTIzLTU0LjczNEMzODUuODk2LDIxMC44OSwzNzAuODA2LDIzMi40NTgsMzcwLjgwNiwyNTYuNjM4eiIgZmlsbD0iI2EwYTVhYSIvPjxwYXRoIGQ9Ik0yMjcuMzkyLDEwMi4yNThjMTQuMDQ0LDAsMjcuODg2LDEuODg2LDQxLjI4LDUuNjA4YzguNzU5LTkuNDksMTguMzM4LTE4LjIwOCwyOC42MTgtMjYuMDQyICAgYy0yMS42MjMtOC42NzctNDUuMjExLTEzLjQ2MS02OS44OTgtMTMuNDYxYy0xMDMuODE0LDAtMTg4LjI3NSw4NC40Ni0xODguMjc1LDE4OC4yNzVoMzMuODk1ICAgQzczLjAxMiwxNzEuNTEyLDE0Mi4yNjcsMTAyLjI1OCwyMjcuMzkyLDEwMi4yNTh6IiBmaWxsPSIjYTBhNWFhIi8+PHBhdGggZD0iTTIyOS4zNDksMTY3LjQ5YzMuNDQ1LTcuNzM5LDcuMzQ0LTE1LjI5MSwxMS42OS0yMi42MTFjMi4yMDQtMy43MTIsNC41MjgtNy4zNDUsNi45NDEtMTAuOTE0ICAgYy02Ljc2OS0xLjEzMS0xMy42NDYtMS43MDctMjAuNTg4LTEuNzA3Yy02OC41ODMsMC0xMjQuMzgsNTUuNzk2LTEyNC4zOCwxMjQuMzhoMzUuMTk0YzAtNDkuMTc3LDQwLjAwOS04OS4xODYsODkuMTg2LTg5LjE4NiAgIEMyMjguMDQ0LDE2Ny40NTIsMjI4LjY5NywxNjcuNDc2LDIyOS4zNDksMTY3LjQ5eiIgZmlsbD0iI2EwYTVhYSIvPjxwb2x5Z29uIHBvaW50cz0iMCwyODYuNjM4IDAsMzE2LjYzOCAzOS4yMjUsMzE2LjYzOCA1OS4zMzIsMzg2LjYzOCAzOTQuMTk4LDM4Ni42MzggNDEzLjg5MiwzMTYuNjM4IDQ1NSwzMTYuNjM4IDQ1NSwyODYuNjM4ICAiIGZpbGw9IiNhMGE1YWEiLz48L2c+PGc+PC9nPjxnPjwvZz48Zz48L2c+PGc+PC9nPjxnPjwvZz48Zz48L2c+PGc+PC9nPjxnPjwvZz48Zz48L2c+PGc+PC9nPjxnPjwvZz48Zz48L2c+PGc+PC9nPjxnPjwvZz48Zz48L2c+PC9zdmc+",
            'pastas'  => 'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjUxMnB4IiBoZWlnaHQ9IjUxMnB4Ij48Zz48Zz48cmVjdCB4PSIxOTQuMDM3IiB5PSIyMzkuMzA0IiB3aWR0aD0iMTIzLjkxNSIgaGVpZ2h0PSIzMy4zOTEiIGZpbGw9IiNGRkZGRkYiLz48L2c+PC9nPjxnPjxnPjxwYXRoIGQ9Ik01MTIsMjU2YzAtMjQuMTctMTkuMTIyLTMzLjg1My0zMC41NDUtMzkuNjM5Yy0yLjE0LTEuMDg0LTQuOTk0LTIuNTMtNy4wMzItMy43ODhjMC43ODctMC42MTcsMS42MjMtMS4yNDcsMi4zMTItMS43NjQgICAgYzguMDQ2LTYuMDUzLDI0Ljc4OS0xOC42NDksMTcuNzg2LTQ0LjI2NGMtNi42NTktMjQuMzIzLTI2Ljc1OS0yNy45MTQtMzcuNTU1LTI5Ljg0M2MtNy44MDgtMS4zOTUtOS4yNC0yLjAxNS05LjgzLTMuMjg3ICAgIGMtMC4wMjctMC4wNi0wLjA1LTAuMTExLTAuMDY4LTAuMTU1YzAuNDU0LTEuNTUyLDIuOTczLTUuMDM3LDQuNjY2LTcuMzgxYzYuMjUxLTguNjUxLDE5LjI2LTI2LjY1Miw0LjAxNC00OC40MjcgICAgYy02LjI0OS04LjkyNC0xOS43NjItMTguNTI2LTQ4LjY4Ni0xMy41N2MtNDQuNjYzLDcuNjUyLTExNC4yNzcsNDkuNjk2LTEzOC4xOTIsMTEwLjU2MkgyNDMuMTMgICAgYy0yMy45MTUtNjAuODY2LTkzLjUyOS0xMDIuOTEtMTM4LjE5Mi0xMTAuNTYyYy0yOC45MjEtNC45NTQtNDIuNDM3LDQuNjQ1LTQ4LjY4NywxMy41NzEgICAgYy0xNS4yNDQsMjEuNzc0LTIuMjM2LDM5Ljc3Niw0LjAxNSw0OC40MjZjMS42OTMsMi4zNDQsNC4yMTIsNS44MjksNC42NjYsNy4zODFjLTAuMDE4LDAuMDQzLTAuMDM5LDAuMDk0LTAuMDY3LDAuMTU0ICAgIGMtMC41OTEsMS4yNzMtMi4wMjQsMS44OTMtOS44MzIsMy4yODhjLTEwLjc5NywxLjkyOS0zMC44OTYsNS41Mi0zNy41NTcsMjkuODVjLTYuOTk5LDI1LjYwNyw5Ljc0NCwzOC4yMDMsMTcuNzg5LDQ0LjI1NiAgICBjMC42ODksMC41MTksMS41MjUsMS4xNDgsMi4zMTIsMS43NjRjLTIuMDM4LDEuMjU4LTQuODkzLDIuNzA0LTcuMDMyLDMuNzg4QzE5LjEyMiwyMjIuMTQ2LDAsMjMxLjgzLDAsMjU2ICAgIHMxOS4xMjEsMzMuODUzLDMwLjU0NSwzOS42NGMyLjE0LDEuMDg0LDQuOTk1LDIuNTI5LDcuMDMyLDMuNzg3Yy0wLjc4NiwwLjYxOC0xLjYyMywxLjI0Ny0yLjMxMiwxLjc2NCAgICBjLTguMDQ2LDYuMDUzLTI0Ljc4OSwxOC42NDktMTcuNzg2LDQ0LjI2NWM2LjY1OSwyNC4zMjMsMjYuNzU5LDI3LjkxNCwzNy41NTYsMjkuODQzYzcuODA3LDEuMzk1LDkuMjM5LDIuMDE1LDkuODI5LDMuMjg1ICAgIGMwLjAyNywwLjA2LDAuMDUsMC4xMTIsMC4wNjgsMC4xNTdjLTAuNDU0LDEuNTUyLTIuOTczLDUuMDM3LTQuNjY2LDcuMzgxYy02LjI1MSw4LjY1MS0xOS4yNiwyNi42NTItNC4wMTQsNDguNDI2ICAgIGM1LjA2OSw3LjIzOSwxNC45MiwxNC45MjQsMzMuODk0LDE0LjkyNGM0LjQxOCwwLDkuMzMxLTAuNDE2LDE0Ljc5MS0xLjM1MmM0NC42NjMtNy42NTIsMTE0LjI3Ny00OS42OTYsMTM4LjE5Mi0xMTAuNTYzaDI1LjczOSAgICBjMjMuOTE1LDYwLjg2Nyw5My41MjksMTAyLjkxMSwxMzguMTkyLDExMC41NjNjMjguOTI3LDQuOTU0LDQyLjQzNy00LjY0Niw0OC42ODctMTMuNTcxYzE1LjI0NC0yMS43NzQsMi4yMzYtMzkuNzc2LTQuMDE1LTQ4LjQyNiAgICBjLTEuNjkzLTIuMzQ0LTQuMjEyLTUuODMtNC42NjctNy4zODFjMC4wMTktMC4wNDMsMC4wNC0wLjA5NSwwLjA2OC0wLjE1NGMwLjU5MS0xLjI3MywyLjAyMy0xLjg5Myw5LjgzLTMuMjg4ICAgIGMxMC43OTgtMS45MjksMzAuODk3LTUuNTE4LDM3LjU1OS0yOS44NWM2Ljk5OS0yNS42MDgtOS43NDQtMzguMjA0LTE3Ljc4OS00NC4yNTdjLTAuNjg5LTAuNTE5LTEuNTI2LTEuMTQ4LTIuMzEyLTEuNzY0ICAgIGMyLjAzNy0xLjI1OCw0Ljg5My0yLjcwNCw3LjAzMi0zLjc4N0M0OTIuODc5LDI4OS44NTMsNTEyLDI4MC4xNjgsNTEyLDI1NnogTTQ2Ni4zNjcsMjY1Ljg1ICAgIGMtOS42OTgsNC45MTItMjQuMzU0LDEyLjMzNS0yNi43OTEsMjkuMjNjLTIuNjA0LDE3Ljk4MywxMC4yMDIsMjcuNjE4LDE3LjA4MywzMi43OTVjNi42NzgsNS4wMjQsNi42NzgsNS4wMjQsNS42NTUsOC43NjMgICAgYy0wLjk2NSwzLjUyNi0xLjA5LDMuOTgtMTEuMjIyLDUuNzljLTkuNzg1LDEuNzQ3LTI2LjE2MSw0LjY3My0zNC4yNDksMjIuMTA3Yy04LjU2MywxOC40NjIsMS42OTYsMzIuNjYsNy44MjYsNDEuMTQzICAgIGMxLjY5MywyLjM0NCw0LjUwNCw2LjIzMyw0LjgwOCw3Ljc1Yy0wLjA1NywwLjE4Ny0wLjI1LDAuNzExLTAuODQsMS42MDljLTIuMDk2LDEuMTAzLTEyLjQ4MywzLjAxMi0zMy45NDgtNC43ODMgICAgYy0zOS41OTEtMTQuMzc4LTg1Ljg4LTUxLjI0MS05Ny43NDktOTMuODczbC0zLjQwMS0xMi4yMTloLTc1LjA4bC0zLjQwMSwxMi4yMTljLTExLjg2OCw0Mi42MzItNTguMTU4LDc5LjQ5NC05Ny43NDksOTMuODczICAgIGMtMjEuNDY1LDcuNzk0LTMxLjg1MSw1Ljg4Ny0zMy45NDgsNC43ODNjLTAuNTktMC44OTgtMC43ODQtMS40MjItMC44NC0xLjYwOWMwLjMwNC0xLjUxNywzLjExNS01LjQwNiw0LjgwOC03Ljc1ICAgIGM2LjEzLTguNDgyLDE2LjM5LTIyLjY3OSw3LjgyNS00MS4xNDVjLTguMDg3LTE3LjQzMS0yNC40NjQtMjAuMzU3LTM0LjI0OC0yMi4xMDRjLTEwLjEzMy0xLjgxLTEwLjI1Ny0yLjI2NC0xMS4yMTktNS43ODIgICAgYy0xLjAyNS0zLjc0Ny0xLjAyNS0zLjc0Nyw1LjY1My04Ljc3MWM2Ljg4MS01LjE3NiwxOS42ODgtMTQuODExLDE3LjA4NS0zMi43ODZjLTIuNDM5LTE2LjkwNC0xNy4wOTUtMjQuMzI3LTI2Ljc5My0yOS4yMzkgICAgYy0xMC42MzQtNS4zODctMTIuMjQtNy4wMjMtMTIuMjQtOS44NTJzMS42MDYtNC40NjQsMTIuMjQxLTkuODVjOS42OTgtNC45MTIsMjQuMzU0LTEyLjMzNSwyNi43OTEtMjkuMjI5ICAgIGMyLjYwNC0xNy45ODMtMTAuMjAyLTI3LjYxOC0xNy4wODMtMzIuNzk1Yy02LjY3Ny01LjAyMy02LjY3Ny01LjAyMy01LjY1NS04Ljc2MmMwLjk2NS0zLjUyNywxLjA5LTMuOTgsMTEuMjIzLTUuNzkxICAgIGM5Ljc4NC0xLjc0OSwyNi4xNi00LjY3NSwzNC4yNDgtMjIuMTA3YzguNTYzLTE4LjQ2Mi0xLjY5NS0zMi42Ni03LjgyNi00MS4xNDNjLTEuNjkzLTIuMzQ0LTQuNTA0LTYuMjM0LTQuODA4LTcuNzUxICAgIGMwLjA1Ny0wLjE4NywwLjI0OS0wLjcxMSwwLjg0LTEuNjA5YzIuMDk3LTEuMTA1LDEyLjQ5MS0zLjAxMSwzMy45NSw0Ljc4NGMzOS41OTEsMTQuMzc5LDg1Ljg3OSw1MS4yNDEsOTcuNzQ2LDkzLjg3MSAgICBsMy40MDEsMTIuMjE5aDc1LjA4bDMuNDAxLTEyLjIxOWMxMS44NjctNDIuNjMsNTguMTU1LTc5LjQ5MSw5Ny43NDYtOTMuODcxYzIxLjQ1OS03Ljc5NCwzMS44NTMtNS44ODksMzMuOTUtNC43ODQgICAgYzAuNTkxLDAuODk4LDAuNzg0LDEuNDIxLDAuODQsMS42MDljLTAuMzA0LDEuNTE3LTMuMTE1LDUuNDA2LTQuODA4LDcuNzUxYy02LjEzMSw4LjQ4Mi0xNi4zOSwyMi42OC03LjgyNSw0MS4xNDUgICAgYzguMDg3LDE3LjQzLDI0LjQ2NCwyMC4zNTYsMzQuMjQ3LDIyLjEwNWMxMC4xMzMsMS44MSwxMC4yNTgsMi4yNjQsMTEuMjIyLDUuNzgzYzEuMDIzLDMuNzQ1LDEuMDIzLDMuNzQ1LTUuNjU0LDguNzY5ICAgIGMtNi44ODEsNS4xNzctMTkuNjg4LDE0LjgxMi0xNy4wODUsMzIuNzg2YzIuNDM5LDE2LjkwNCwxNy4wOTUsMjQuMzI3LDI2Ljc5MywyOS4yMzljMTAuNjM0LDUuMzg1LDEyLjI0LDcuMDIxLDEyLjI0LDkuODUgICAgUzQ3Ny4wMDMsMjYwLjQ2NCw0NjYuMzY3LDI2NS44NXoiIGZpbGw9IiNGRkZGRkYiLz48L2c+PC9nPjxnPjwvZz48Zz48L2c+PGc+PC9nPjxnPjwvZz48Zz48L2c+PGc+PC9nPjxnPjwvZz48Zz48L2c+PGc+PC9nPjxnPjwvZz48Zz48L2c+PGc+PC9nPjxnPjwvZz48Zz48L2c+PGc+PC9nPjwvc3ZnPg==',
        );

        // Return the chosen icon's SVG string
        return $svgs[$icon];
    }


    add_action('wp_head', 'add_your_stuff');
    function add_your_stuff() {
        ?>
        <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo("template_url") ?>/dist/img/favicons/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo("template_url") ?>/dist/img/favicons/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo("template_url") ?>/dist/img/favicons/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo("template_url") ?>/dist/img/favicons/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo("template_url") ?>/dist/img/favicons/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo("template_url") ?>/dist/img/favicons/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo("template_url") ?>/dist/img/favicons/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo("template_url") ?>/dist/img/favicons/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo("template_url") ?>/dist/img/favicons/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo("template_url") ?>/dist/img/favicons/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo("template_url") ?>/dist/img/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo("template_url") ?>/dist/img/favicons/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo("template_url") ?>/dist/img/favicons/favicon-16x16.png">
        <link rel="manifest" href="<?php bloginfo("template_url") ?>/dist/img/favicons/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <?php
    }


    function animacaoType()
    {
        $labels = array(
            'name'               => 'Animação',
            'singular_name'      => 'Animação',
            'menu_name'          => 'Animaçoes',
            'name_admin_bar'     => 'Animação',
            'add_new'            => 'Adicionar Novo',
            'add_new_item'       => 'Adicionar novo item',
            'new_item'           => 'Novo Item',
            'edit_item'          => 'Editar Item',
            'view_item'          => 'Ver Item',
            'all_items'          => 'Todos os Itens',
            'search_items'       => 'Procurar Animação',
            'parent_item_colon'  => 'Parent Animação',
            'not_found'          => 'Nenhum item encontrado',
            'not_found_in_trash' => 'Nenhum item encontrado na lixeira'
        );

        $args = array(
            'labels'             => $labels,
            'description'        => 'Todos os itens',
            'public'             => true,
            'show_in_rest'       => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'menu_icon'          => 'dashicons-slides',
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'animacoes' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => true,
            'menu_position'      => null,
            'rest_base'          => 'animacoes',
            'rest_controller_class' => 'WP_REST_Posts_Controller',
            'supports'           => array( 'title', 'editor','thumbnail')
        );

        register_post_type( 'animacao', $args );

        flush_rewrite_rules();
    }
    add_action('init', 'animacaoType');
    
    
    

    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

    register_nav_menus( array(
       'principal' => __('Menu Principal', 'bstwp')
    ));

?>