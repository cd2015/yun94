<?php

function delete_form($routeParams, $title = 'Delete Business')
{
    $form = Form::open(['method' => 'DELETE', 'route' => $routeParams, 'class' => 'form-inline']);
    $form .= '<div class="form-group">';
    $form .= Form::submit($title, ["class" => "btn btn-danger"]);
    $form .= '</div>';
    return $form . Form::close();
}
