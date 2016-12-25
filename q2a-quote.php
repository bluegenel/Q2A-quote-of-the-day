<?php

class q2a_quote {

    function allow_template($template) {
        $allow = false;

        switch ($template) {
            case 'account':
            case'activity':
            case'admin':
            case'ask' :
            case'categories' :
            case'custom' :
            case'favorites':
            case'feedback' :
            case'hot' :
            case'ip' :
            case'login':
            case'message':
            case'qa' :
            case'question':
            case'questions':
            case'register' :
            case'search' :
            case'tag' :
            case'tags' :
            case'unanswered':
            case'updates' :
            case'user' :
            case'users' :
                $allow = true;
                break;
        }

        return $allow;
    }

    function allow_region($region) {
        return true;
    }

    function output_widget($region, $place, $themeobject, $template, $request, $qa_content) {
        $themeobject->output('<div align="center">');
        echo "<script type='text/javascript' src='https://www.brainyquote.com/link/quotebr.js'></script>";
        $themeobject->output('</div>');
    }

}

