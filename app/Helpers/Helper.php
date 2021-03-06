<?php

namespace App\Helpers;
use Illuminate\Support\Str;

class Helper
{
    public static function category($categories, $parent_id = 0, $char = '')
    {
        $html = '';

        foreach ($categories as $key => $category) {
            if ($category->parent_id == $parent_id) {
                $html .= '
                    <tr>
                        <td>'. $category->id .'</td>
                        <td>'. $char . $category->name .'</td>
                        <td>'. self::active($category->active) .'</td>
                        <td>'. $category->created_at .'</td>
                        <td>'. $category->updated_at .'</td>
                        <td class="text-right">
                            <a href="/admin/category/edit/'. $category->id .'" class="btn btn-warning btn-sm">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm"
                                onclick="return confirm(\'Are you sure?\')" href="./category/delete/' . $category->id .' ">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                            </a>
                        </td>
                    </tr>
                ';

                unset($categories[$key]);

                $html .= self::category($categories, $category->id, $char .'&emsp;|--');
                
            }
        }
        return $html;
    }
    public static function active($active = 0){
        return $active == 0 ? '<span class="btn btn-xs btn-danger">Active</span>' : '<span class="btn btn-xs btn-success">Active</span>';
    }
}