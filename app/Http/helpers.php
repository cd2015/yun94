<?php

function slugify($str)
{
    $search = array('Ș', 'Ț', 'ş', 'ţ', 'Ş', 'Ţ', 'ș', 'ț', 'î', 'â', 'ă', 'Î', 'Â', 'Ă', 'ë', 'Ë');
    $replace = array('s', 't', 's', 't', 's', 't', 's', 't', 'i', 'a', 'a', 'i', 'a', 'a', 'e', 'E');
    $str = str_ireplace($search, $replace, strtolower(trim($str)));
    $str = preg_replace('/[^\w\d\-\ ]/', '', $str);
    $str = str_replace(' ', '-', $str);
    return preg_replace('/\-{2,}/', '-', $str);
}

function delete_form($routeParams, $title = 'Delete Business')
{
    $form = Form::open(['method' => 'DELETE', 'route' => $routeParams, 'class' => 'form-inline']);
    $form .= '<div class="form-group">';
    $form .= Form::submit($title, ["class" => "btn btn-danger"]);
    $form .= '</div>';
    return $form . Form::close();
}
