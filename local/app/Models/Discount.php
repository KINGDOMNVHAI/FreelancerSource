<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    //Khai báo tên table
    protected $table = 'discount';

    // Khai báo primary key
    // Trong Laravel có categories::find() nghĩa là tìm theo primary key
    protected $primaryKey = 'id_product';

    // Bỏ updated_at
    public $timestamps = false;

    protected $fillable = [
        'id_discount', 'id_product', 'price_discount',
        'type_discount', 'start_date', 'end_date', 'enable_discount',
    ];
}

// Parse discount price
// DecimalFormatSymbols symbols = new DecimalFormatSymbols();
// symbols.setGroupingSeparator(',');
// symbols.setDecimalSeparator('.');
// String pattern = "#,##0.0#";
// DecimalFormat decimalFormat = new DecimalFormat(pattern, symbols);
// decimalFormat.setParseBigDecimal(true);

// BigDecimal bdDiscount = BigDecimal.ZERO;
// try {
//     bdDiscount = (BigDecimal) decimalFormat.parse(discountPrice);
// } catch (ParseException e) {
//     e.printStackTrace();
// }
//
// context.setVariable(Constant.PARAM_CART_LIST, lstCart);
// context.setVariable(Constant.PARAM_DELIVERY_FEE, deliveryFee);
// context.setVariable(Constant.PARAM_DISCOUNT_PRICE, bdDiscount);
// context.setVariable(Constant.PARAM_TOTAL_PRICE, totalPrice.add(deliveryFee).subtract(bdDiscount));
// context.setVariable(Constant.PARAM_SYMBOL, symbol);
