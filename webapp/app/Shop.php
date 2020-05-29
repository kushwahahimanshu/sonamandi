<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $table = 'shop_new';
    protected $fillable=['title','price','product_name','product_style_no','product_width','product_height','product_length','metal_name','metal_purity','metal_weight','diamond_total_no','diamond_total_wt','diamond_clarity','diamond_color','diamond_shape','diamond_setting','gemstone_total_no','gemstone_type','gemstone_color','gemstone_shape','gemstone_weight','gemstone_setting','price_breakup_metal','price_breakup_diamond','price_breakup_gemstone','price_breakup_making','price_breakup_gst','price_breakup_discount','price_breakup_scheme','price_breakup_total'];
}
