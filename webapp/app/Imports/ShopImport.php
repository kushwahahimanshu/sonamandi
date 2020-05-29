<?php

namespace App\Imports;

use App\Shop;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ShopImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Shop([
            'title'=>$row['title'],
            'price'=>$row['price'],
            'product_name'=>$row['product_name'],
            'product_style_no'=>$row['product_style_no'],
            'product_width'=>$row['product_width'],
            'product_height'=>$row['product_height'],
            'product_length'=>$row['product_length'],
            'metal_name'=>$row['metal_name'],
            'metal_purity'=>$row['metal_purity'],
            'metal_weight'=>$row['metal_weight'],
            'diamond_total_no'=>$row['diamond_total_no'],
            'diamond_total_wt'=>$row['diamond_total_wt'],
            'diamond_clarity'=>$row['diamond_clarity'],
            'diamond_color'=>$row['diamond_color'],
            'diamond_shape'=>$row['diamond_shape'],
            'diamond_setting'=>$row['diamond_setting'],
            'gemstone_total_no'=>$row['gemstone_total_no'],
            'gemstone_color'=>$row['gemstone_color'],
            'gemstone_shape'=>$row['gemstone_shape'],
            'gemstone_weight'=>$row['gemstone_weight'],
            'gemstone_setting'=>$row['gemstone_setting'],
            'price_breakup_metal'=>$row['price_breakup_metal'],
            'price_breakup_diamond'=>$row['price_breakup_diamond'],
            'price_breakup_gemstone'=>$row['price_breakup_gemstone'],
            'price_breakup_making'=>$row['price_breakup_making'],
            'price_breakup_gst'=>$row['price_breakup_gst'],
            'price_breakup_discount'=>$row['price_breakup_discount'],
            'price_breakup_scheme'=>$row['price_breakup_scheme'],
            'price_breakup_total'=>$row['price_breakup_total'],
       
        ]);
    }
}
