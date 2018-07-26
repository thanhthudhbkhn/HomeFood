<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'trứng rán',
                'description' => 'Là món ăn làm từ trứng gà bằng phương pháp chiên nhanh qua chảo dầu, trứng đánh lên cho tròng đỏ và tròng trắng lẫn vào với nhau rồi đổ vào chảo chiên. Cách chế biến khá đơn giản và thuận tiện, dễ làm. Trứng rán ăn kèm với bánh mì và sữa là đồ ăn sáng phổ biến tại nhiều gia đình trên thế giới cũng như tại các cửa hàng, quán ăn phục vụ cho bữa ăn sáng.'
            ],
            [
                'name' => 'thịt viên rán',
                'description' => 'Những viên thịt được chiên lên vàng ruộm với vẻ bề ngoài thật hấp dẫn, mới nhìn là đã thấy “đói bụng” ngay! Thử ngay món thịt viên chiên này bạn nhé!'
            ],
            [
                'name' => 'canh măng',
                'description' => 'Bát canh măng là thứ không thể thiếu trong mâm cơm ngày lễ, tết, hay bữa giỗ, được coi là món ăn truyền thống của người miền Bắc Việt Nam. '
            ],
            [
                'name' => 'canh chua',
                'description' => 'Canh chua là tên gọi của những món ăn nhiều nước và có vị chua do được nấu bằng các nguyên liệu phối trộn với gia vị tạo chua. Canh chua thường được dùng ở những vùng nóng như miền Nam, miền Trung, hoặc những lúc nóng nực của mùa hè miền Bắc Việt Nam, món canh chua này cũng đặc biệt phổ biến trong nghệ thuật ẩm thực Hà Nội.<br>
                Nnguyên liệu chính để nấu canh chua là loại rau củ quả, các loại thịt hay thủy sản (cá, tôm, cua, ốc, hến, trai, sò) khác nhau, trong đó thường dùng một gia vị chua để tạo vị chua thơm ngon cho nước canh. Rất phổ biến các món canh chua sử dụng nguyên liệu chính là một loại thủy sản, hải sản, do chất tạo chua có tác dụng khử mùi vị tanh của nguyên liệu này. Cũng không hiếm khi canh chua chỉ là một bát nước luộc rau cho thêm chút nước cốt chanh, chút lá me hay vài quả sấu xanh. '
            ],
            [
                'name' => 'thịt gà rán',
                'description' => 'Gà rán là một món ăn được chế biến từ Gà, có rất nhiều loại gà rán, điển hình như cánh gà rán, đùi gà rán,... Nguyên liệu chính để làm món gà rán là bột mì, gà và bột chiên, gà rán đã có từ lâu đời và được nhiều người ưa chuộng, đặc biệt là trẻ em yêu thích.'
            ]
        ];
        DB::table('categories')->insert($data);
    }
}
