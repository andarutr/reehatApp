<?php
namespace App\Helpers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ServiceHelper
{
    public static function get_data($table, $orderBy)
    {
        $data = DB::table($table)
                    ->orderBy('id', $orderBy)
                    ->get();

        return $data;
    } 
    
    public static function get_detail($table, $param)
    {
        $data = DB::table($table)->find($param);

        return $data;
    }

    public static function get_where($table, $col, $con)
    {
        $data = DB::table($table)
                    ->where($col, $con)
                    ->first();

        return $data;
    }

    public static function get_paginate($table, $orderBy, $paginate)
    {
        $data = DB::table($table)
                    ->orderBy('id', $orderBy)
                    ->paginate($paginate);

        return $data;
    }

    public static function get_paginate_where($table, $orderBy, $col, $con, $paginate)
    {
        $data = DB::table($table)
                    ->orderBy('id', $orderBy)
                    ->where($col, $con)
                    ->paginate($paginate);

        return $data;
    }

    public static function get_limit($table, $orderBy, $limit)
    {
        $data = DB::table($table)
                    ->orderBy('id', $orderBy)
                    ->limit($limit)
                    ->get();

        return $data;
    }

    public static function count_data($table)
    {
        $data = DB::table($table)->count();

        return $data;
    }

    public static function count_where_data($table, $col, $con)
	{
        $data = DB::table($table)
                    ->where($col, $con)
                    ->count();
		return $data;
	}

    public static function store_data($table, $data)
    {
        $store = DB::table($table)->insert($data);
        return $store;
    }

    public static function update_data($table, $col, $con, $data)
    {
        $update_where = DB::table($table)
                            ->where($col, $con)
                            ->update($data);
        
        return $update_where;
    }

    public static function destroy_data($table, $param)
    {   
        $destroy = DB::table($table)
                        ->whereId($param)
                        ->delete();

        return $destroy;
    }

    public static function upload_img(Request $req, $img, $path)
    {
        $file = $req->file($img);
        $file->move($path, $file->getClientOriginalName());
    }

}