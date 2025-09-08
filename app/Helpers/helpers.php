<?php
use App\Models\OptionsModel;
use App\Models\PostsModel;

if (!function_exists('dd')) {
    function dd(...$vars) {
        foreach ($vars as $v) {
            echo "<pre>";
            var_dump($v);
            echo "</pre>";
        }
        die(1);
    }
}

if (!function_exists('pr')) {
    function pr(...$vars) {
        foreach ($vars as $v) {
            echo "<pre>";
            var_dump($v);
            echo "</pre>";
        }
        die(1);
    }
}


if(!function_exists('get_personal_report_global_price')){
    function get_personal_report_global_price(){
        $settings = get_mytemp_settings();
        if(empty($settings))
            return;

        return $settings['assessment_price'];
    }
}

// Get Assessment Self Questions Page Link
if(!function_exists('get_assessment_self_page_link')){
    function get_assessment_self_page_link(){
        $page_id = get_assessment_self_page_id();
        if(empty($page_id))
            return;

        $post = PostsModel::find($page_id);
        if(empty($post))
            return;

        return $post->guid;
    }
}

// Get Assessment Self Questions Page ID
if(!function_exists('get_assessment_self_page_id')){
    function get_assessment_self_page_id(){
        $settings = get_mytemp_settings();
        if(empty($settings))
            return;

        return $settings['mytemp_questions'];
    }
}


// Get Assessment Self Questions Page Link
if(!function_exists('get_assessment_needs_page_link')){
    function get_assessment_needs_page_link(){
        $page_id = get_assessment_needs_page_id();
        if(empty($page_id))
            return;

        $post = PostsModel::find($page_id);
        if(empty($post))
            return;

        return $post->guid;
    }
}

// Get Assessment Needs Choices Page ID
if(!function_exists('get_assessment_needs_page_id')){
    function get_assessment_needs_page_id(){
        $settings = get_mytemp_settings();
        if(empty($settings))
            return;

        return $settings['mytemp_needassessment'];
    }
}

// Get Assessment Payment Page Link
if(!function_exists('get_assessment_payment_page_link')){
    function get_assessment_payment_page_link(){
        $page_id = get_assessment_payment_page_id();
        if(empty($page_id))
            return;

        $post = PostsModel::find($page_id);
        if(empty($post))
            return;

        return $post->guid;
    }
}

// Get Assessment Payment Page ID
if(!function_exists('get_assessment_payment_page_id')){
    function get_assessment_payment_page_id(){
        $settings = get_mytemp_settings();
        if(empty($settings))
            return;

        return $settings['mytemp_payment_page'];
    }
}

if(!function_exists('get_mytemp_settings')){
    function get_mytemp_settings(){
        $settings = OptionsModel::where('option_name', 'mytemp_settings')->first();
        return unserialize($settings->option_value);
    }
}