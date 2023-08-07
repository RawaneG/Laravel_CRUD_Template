<?php

namespace App\Models;

class Listing
{
    public static function all()
    {
        return [
            'heading' => 'Latest Jobs',
            'lists' =>
            [
                [
                    'id' => 1,
                    'title' => 'Job 1',
                    'description' => "Description 1"
                ],
                [
                    'id' => 2,
                    'title' => 'Job 2',
                    'description' => "Description 2"
                ],
                [
                    'id' => 3,
                    'title' => 'Job 3',
                    'description' => "Description 3"
                ]
            ]
        ];
    }

    public static function find($id)
    {
        $lists = self::all();
        foreach ($lists as $list) {
            $list['id'] === $id ? $list : null;
        }
    }
}
