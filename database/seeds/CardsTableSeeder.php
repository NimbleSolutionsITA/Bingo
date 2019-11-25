<?php

use Illuminate\Database\Seeder;

class CardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cards')->insert([
            [
                "row1" => json_encode(array(7, 50, 68, 70, 84)),
                "row2" => json_encode(array(8, 15, 38, 52, 69)),
                "row3" => json_encode(array(17, 39, 47, 57, 89)),
            ],
            [
                "row1" => json_encode(array(24, 32, 51, 69, 85)),
                "row2" => json_encode(array(8, 13, 25, 53, 75)),
                "row3" => json_encode(array(29, 37, 49, 55, 76)),
            ],
            [
                "row1" => json_encode(array(1, 12, 40, 50, 70)),
                "row2" => json_encode(array(29, 37, 45, 77, 87)),
                "row3" => json_encode(array(9, 14, 48, 56, 63)),
            ],
            [
                "row1" => json_encode(array(4, 27, 49, 52, 70)),
                "row2" => json_encode(array(16, 28, 56, 78, 84)),
                "row3" => json_encode(array(5, 32, 58, 66, 90)),
            ],
            [
                "row1" => json_encode(array(6, 18, 34, 61, 77)),
                "row2" => json_encode(array(29, 35, 58, 68, 82)),
                "row3" => json_encode(array(9, 19, 49, 59, 87)),
            ],
            [
                "row1" => json_encode(array(1, 23, 30, 44, 86)),
                "row2" => json_encode(array(13, 28, 55, 72, 89)),
                "row3" => json_encode(array(9, 19, 32, 67, 73)),
            ],
            [
                "row1" => json_encode(array(4, 11, 56, 68, 85)),
                "row2" => json_encode(array(8, 14, 25, 31, 41)),
                "row3" => json_encode(array(16, 29, 45, 59, 78)),
            ],
            [
                "row1" => json_encode(array(31, 48, 51, 69, 81)),
                "row2" => json_encode(array(9, 24, 58, 73, 88)),
                "row3" => json_encode(array(13, 26, 35, 74, 89)),
            ],
            [
                "row1" => json_encode(array(10, 38, 53, 61, 80)),
                "row2" => json_encode(array(6, 11, 27, 57, 88)),
                "row3" => json_encode(array(8, 13, 44, 58, 69)),
            ],
            [
                "row1" => json_encode(array(19, 28, 42, 59, 70)),
                "row2" => json_encode(array(3, 31, 66, 76, 87)),
                "row3" => json_encode(array(7, 29, 37, 77, 89)),
            ],
            [
                "row1" => json_encode(array(14, 27, 31, 45, 78)),
                "row2" => json_encode(array(3, 19, 39, 62, 82)),
                "row3" => json_encode(array(8, 29, 58, 66, 90)),
            ],
            [
                "row1" => json_encode(array(6, 45, 54, 64, 78)),
                "row2" => json_encode(array(13, 24, 57, 66, 86)),
                "row3" => json_encode(array(9, 28, 32, 48, 87)),
            ],
            [
                "row1" => json_encode(array(30, 47, 50, 60, 79)),
                "row2" => json_encode(array(23, 37, 54, 68, 82)),
                "row3" => json_encode(array(3, 11, 28, 57, 69)),
            ],
            [
                "row1" => json_encode(array(9, 20, 30, 46, 74)),
                "row2" => json_encode(array(13, 38, 55, 78, 87)),
                "row3" => json_encode(array(16, 27, 47, 62, 90)),
            ],
            [
                "row1" => json_encode(array(4, 17, 26, 47, 60)),
                "row2" => json_encode(array(5, 19, 30, 55, 67)),
                "row3" => json_encode(array(27, 49, 68, 72, 90)),
            ],
            [
                "row1" => json_encode(array(3, 11, 37, 43, 70)),
                "row2" => json_encode(array(25, 48, 58, 78, 86)),
                "row3" => json_encode(array(6, 13, 26, 62, 90)),
            ],
            [
                "row1" => json_encode(array(12, 24, 61, 78, 88)),
                "row2" => json_encode(array(2, 26, 32, 42, 52)),
                "row3" => json_encode(array(6, 28, 48, 54, 62)),
            ],
            [
                "row1" => json_encode(array(22, 35, 57, 69, 87)),
                "row2" => json_encode(array(16, 36, 47, 59, 77)),
                "row3" => json_encode(array(1, 19, 27, 78, 90)),
            ],
            [
                "row1" => json_encode(array(6, 52, 61, 75, 87)),
                "row2" => json_encode(array(18, 39, 49, 57, 65)),
                "row3" => json_encode(array(25, 58, 69, 79, 90)),
            ],
            [
                "row1" => json_encode(array(3, 19, 40, 55, 72)),
                "row2" => json_encode(array(44, 59, 60, 74, 88)),
                "row3" => json_encode(array(4, 22, 68, 76, 90)),
            ],
            [
                "row1" => json_encode(array(4, 29, 34, 47, 82)),
                "row2" => json_encode(array(15, 36, 49, 73, 87)),
                "row3" => json_encode(array(6, 37, 57, 67, 75)),
            ],
            [
                "row1" => json_encode(array(12, 22, 55, 73, 81)),
                "row2" => json_encode(array(19, 29, 56, 79, 88)),
                "row3" => json_encode(array(2, 31, 44, 63, 89)),
            ],
            [
                "row1" => json_encode(array(20, 33, 60, 73, 85)),
                "row2" => json_encode(array(9, 11, 22, 36, 56)),
                "row3" => json_encode(array(12, 24, 41, 64, 78)),
            ],
            [
                "row1" => json_encode(array(9, 25, 46, 66, 76)),
                "row2" => json_encode(array(16, 28, 48, 50, 82)),
                "row3" => json_encode(array(35, 53, 68, 79, 90)),
            ],
            [
                "row1" => json_encode(array(9, 12, 33, 53, 62)),
                "row2" => json_encode(array(35, 42, 59, 63, 83)),
                "row3" => json_encode(array(16, 26, 36, 47, 65)),
            ],
            [
                "row1" => json_encode(array(36, 47, 66, 71, 81)),
                "row2" => json_encode(array(16, 22, 50, 72, 84)),
                "row3" => json_encode(array(9, 17, 48, 67, 78)),
            ],
            [
                "row1" => json_encode(array(1, 16, 25, 36, 60)),
                "row2" => json_encode(array(45, 50, 65, 78, 88)),
                "row3" => json_encode(array(8, 37, 59, 67, 89)),
            ],
            [
                "row1" => json_encode(array(18, 34, 41, 63, 70)),
                "row2" => json_encode(array(21, 49, 55, 74, 88)),
                "row3" => json_encode(array(8, 27, 35, 58, 67)),
            ],
            [
                "row1" => json_encode(array(7, 49, 59, 76, 85)),
                "row2" => json_encode(array(15, 25, 30, 65, 77)),
                "row3" => json_encode(array(9, 27, 34, 67, 88)),
            ],
            [
                "row1" => json_encode(array(9, 24, 32, 54, 68)),
                "row2" => json_encode(array(11, 34, 57, 79, 85)),
                "row3" => json_encode(array(15, 28, 35, 47, 87)),
            ],
            [
                "row1" => json_encode(array(23, 38, 43, 63, 70)),
                "row2" => json_encode(array(15, 27, 39, 51, 88)),
                "row3" => json_encode(array(9, 18, 49, 55, 68)),
            ],
            [
                "row1" => json_encode(array(12, 39, 45, 60, 86)),
                "row2" => json_encode(array(1, 26, 52, 61, 72)),
                "row3" => json_encode(array(15, 27, 53, 64, 76)),
            ],
            [
                "row1" => json_encode(array(12, 29, 35, 65, 73)),
                "row2" => json_encode(array(1, 14, 48, 56, 80)),
                "row3" => json_encode(array(5, 18, 59, 74, 87)),
            ],
            [
                "row1" => json_encode(array(7, 35, 42, 51, 68)),
                "row2" => json_encode(array(22, 46, 57, 74, 86)),
                "row3" => json_encode(array(19, 37, 47, 69, 79)),
            ],
            [
                "row1" => json_encode(array(6, 36, 46, 54, 86)),
                "row2" => json_encode(array(10, 24, 39, 65, 88)),
                "row3" => json_encode(array(16, 28, 55, 67, 90)),
            ],
            [
                "row1" => json_encode(array(1, 12, 31, 56, 66)),
                "row2" => json_encode(array(4, 13, 46, 79, 84)),
                "row3" => json_encode(array(28, 39, 59, 67, 89)),
            ],
            [
                "row1" => json_encode(array(9, 20, 39, 53, 80)),
                "row2" => json_encode(array(13, 49, 61, 71, 87)),
                "row3" => json_encode(array(21, 55, 68, 78, 90)),
            ],
            [
                "row1" => json_encode(array(9, 24, 34, 43, 88)),
                "row2" => json_encode(array(38, 46, 50, 67, 71)),
                "row3" => json_encode(array(13, 25, 56, 77, 90)),
            ],
            [
                "row1" => json_encode(array(16, 20, 51, 65, 74)),
                "row2" => json_encode(array(3, 21, 30, 58, 87)),
                "row3" => json_encode(array(8, 28, 32, 78, 90)),
            ],
            [
                "row1" => json_encode(array(2, 26, 34, 49, 69)),
                "row2" => json_encode(array(5, 13, 39, 71, 85)),
                "row3" => json_encode(array(18, 28, 58, 77, 89)),
            ],
            [
                "row1" => json_encode(array(22, 30, 47, 51, 68)),
                "row2" => json_encode(array(4, 19, 28, 59, 89)),
                "row3" => json_encode(array(6, 29, 37, 49, 79)),
            ],
            [
                "row1" => json_encode(array(3, 11, 35, 47, 61)),
                "row2" => json_encode(array(6, 18, 21, 78, 84)),
                "row3" => json_encode(array(36, 48, 51, 64, 88)),
            ],
            [
                "row1" => json_encode(array(7, 14, 40, 67, 81)),
                "row2" => json_encode(array(23, 37, 56, 69, 84)),
                "row3" => json_encode(array(9, 16, 49, 57, 70)),
            ],
            [
                "row1" => json_encode(array(20, 48, 56, 67, 78)),
                "row2" => json_encode(array(15, 39, 49, 68, 87)),
                "row3" => json_encode(array(4, 18, 25, 58, 88)),
            ],
            [
                "row1" => json_encode(array(32, 42, 63, 70, 86)),
                "row2" => json_encode(array(9, 17, 26, 59, 64)),
                "row3" => json_encode(array(18, 34, 49, 78, 90)),
            ],
            [
                "row1" => json_encode(array(8, 15, 25, 73, 84)),
                "row2" => json_encode(array(28, 42, 54, 64, 79)),
                "row3" => json_encode(array(9, 19, 33, 59, 86)),
            ],
            [
                "row1" => json_encode(array(18, 49, 55, 62, 85)),
                "row2" => json_encode(array(5, 22, 36, 65, 70)),
                "row3" => json_encode(array(19, 29, 58, 73, 86)),
            ],
            [
                "row1" => json_encode(array(20, 39, 52, 69, 83)),
                "row2" => json_encode(array(5, 19, 24, 74, 84)),
                "row3" => json_encode(array(9, 29, 49, 55, 87)),
            ],
            [
                "row1" => json_encode(array(17, 29, 48, 61, 70)),
                "row2" => json_encode(array(49, 53, 62, 74, 83)),
                "row3" => json_encode(array(3, 19, 34, 59, 90)),
            ],
            [
                "row1" => json_encode(array(3, 31, 55, 69, 80)),
                "row2" => json_encode(array(24, 35, 48, 59, 78)),
                "row3" => json_encode(array(6, 13, 37, 49, 81)),
            ],
            [
                "row1" => json_encode(array(1, 20, 51, 69, 75)),
                "row2" => json_encode(array(15, 35, 40, 58, 85)),
                "row3" => json_encode(array(8, 24, 37, 46, 88)),
            ],
            [
                "row1" => json_encode(array(9, 44, 63, 74, 82)),
                "row2" => json_encode(array(13, 36, 48, 55, 69)),
                "row3" => json_encode(array(19, 49, 56, 77, 89)),
            ],
            [
                "row1" => json_encode(array(2, 28, 58, 62, 80)),
                "row2" => json_encode(array(12, 37, 49, 66, 71)),
                "row3" => json_encode(array(14, 59, 67, 77, 89)),
            ],
            [
                "row1" => json_encode(array(9, 12, 24, 32, 54)),
                "row2" => json_encode(array(28, 39, 40, 64, 74)),
                "row3" => json_encode(array(17, 46, 65, 79, 85)),
            ],
            [
                "row1" => json_encode(array(26, 30, 49, 72, 83)),
                "row2" => json_encode(array(10, 36, 53, 65, 75)),
                "row3" => json_encode(array(6, 38, 59, 77, 87)),
            ],
            [
                "row1" => json_encode(array(5, 25, 30, 67, 82)),
                "row2" => json_encode(array(9, 12, 37, 40, 77)),
                "row3" => json_encode(array(14, 28, 55, 79, 84)),
            ],
            [
                "row1" => json_encode(array(22, 42, 68, 76, 82)),
                "row2" => json_encode(array(6, 12, 31, 53, 89)),
                "row3" => json_encode(array(38, 44, 54, 78, 90)),
            ],
            [
                "row1" => json_encode(array(2, 15, 39, 43, 77)),
                "row2" => json_encode(array(5, 18, 23, 51, 82)),
                "row3" => json_encode(array(27, 52, 61, 79, 83)),
            ],
            [
                "row1" => json_encode(array(22, 43, 50, 76, 86)),
                "row2" => json_encode(array(9, 10, 47, 59, 64)),
                "row3" => json_encode(array(19, 25, 39, 49, 67)),
            ],
            [
                "row1" => json_encode(array(3, 12, 53, 77, 83)),
                "row2" => json_encode(array(6, 13, 30, 69, 87)),
                "row3" => json_encode(array(17, 26, 47, 58, 90)),
            ],
            [
                "row1" => json_encode(array(19, 26, 35, 42, 77)),
                "row2" => json_encode(array(3, 28, 48, 59, 87)),
                "row3" => json_encode(array(7, 39, 49, 68, 88)),
            ],
            [
                "row1" => json_encode(array(8, 28, 38, 69, 73)),
                "row2" => json_encode(array(29, 49, 51, 76, 86)),
                "row3" => json_encode(array(9, 14, 57, 79, 88)),
            ],
            [
                "row1" => json_encode(array(17, 24, 31, 49, 59)),
                "row2" => json_encode(array(28, 35, 62, 74, 89)),
                "row3" => json_encode(array(5, 29, 67, 78, 90)),
            ],
            [
                "row1" => json_encode(array(19, 35, 58, 67, 87)),
                "row2" => json_encode(array(2, 23, 36, 41, 89)),
                "row3" => json_encode(array(6, 27, 47, 69, 73)),
            ],
            [
                "row1" => json_encode(array(6, 15, 32, 65, 75)),
                "row2" => json_encode(array(26, 44, 56, 68, 83)),
                "row3" => json_encode(array(8, 16, 35, 58, 78)),
            ],
            [
                "row1" => json_encode(array(5, 18, 34, 46, 61)),
                "row2" => json_encode(array(19, 23, 56, 65, 72)),
                "row3" => json_encode(array(28, 36, 59, 75, 90)),
            ],
            [
                "row1" => json_encode(array(29, 30, 40, 54, 83)),
                "row2" => json_encode(array(5, 39, 64, 73, 89)),
                "row3" => json_encode(array(12, 45, 55, 78, 90)),
            ],
            [
                "row1" => json_encode(array(8, 42, 58, 78, 81)),
                "row2" => json_encode(array(10, 24, 45, 79, 88)),
                "row3" => json_encode(array(15, 28, 46, 67, 90)),
            ],
            [
                "row1" => json_encode(array(1, 25, 53, 71, 85)),
                "row2" => json_encode(array(32, 59, 60, 75, 86)),
                "row3" => json_encode(array(29, 34, 42, 69, 78)),
            ],
            [
                "row1" => json_encode(array(5, 15, 28, 41, 57)),
                "row2" => json_encode(array(6, 31, 59, 60, 73)),
                "row3" => json_encode(array(19, 37, 47, 79, 82)),
            ],
            [
                "row1" => json_encode(array(2, 30, 42, 74, 83)),
                "row2" => json_encode(array(9, 18, 46, 52, 67)),
                "row3" => json_encode(array(27, 38, 69, 78, 90)),
            ],
            [
                "row1" => json_encode(array(11, 20, 37, 56, 60)),
                "row2" => json_encode(array(19, 25, 39, 49, 87)),
                "row3" => json_encode(array(6, 58, 66, 72, 88)),
            ],
            [
                "row1" => json_encode(array(26, 48, 51, 72, 80)),
                "row2" => json_encode(array(8, 39, 55, 65, 73)),
                "row3" => json_encode(array(16, 28, 49, 58, 89)),
            ],
            [
                "row1" => json_encode(array(17, 21, 59, 77, 80)),
                "row2" => json_encode(array(22, 41, 65, 79, 89)),
                "row3" => json_encode(array(4, 28, 31, 48, 66)),
            ],
            [
                "row1" => json_encode(array(1, 38, 48, 57, 67)),
                "row2" => json_encode(array(19, 24, 39, 78, 84)),
                "row3" => json_encode(array(9, 29, 49, 68, 89)),
            ],
            [
                "row1" => json_encode(array(8, 22, 30, 64, 72)),
                "row2" => json_encode(array(24, 37, 56, 73, 87)),
                "row3" => json_encode(array(13, 38, 47, 57, 88)),
            ],
            [
                "row1" => json_encode(array(7, 21, 44, 54, 65)),
                "row2" => json_encode(array(16, 45, 57, 78, 84)),
                "row3" => json_encode(array(25, 38, 46, 59, 69)),
            ],
            [
                "row1" => json_encode(array(17, 37, 41, 56, 76)),
                "row2" => json_encode(array(8, 25, 42, 64, 86)),
                "row3" => json_encode(array(9, 43, 57, 65, 88)),
            ],
            [
                "row1" => json_encode(array(4, 10, 40, 65, 82)),
                "row2" => json_encode(array(18, 47, 53, 71, 87)),
                "row3" => json_encode(array(5, 25, 67, 73, 89)),
            ],
            [
                "row1" => json_encode(array(28, 36, 66, 70, 87)),
                "row2" => json_encode(array(2, 17, 29, 59, 74)),
                "row3" => json_encode(array(3, 18, 49, 75, 88)),
            ],
            [
                "row1" => json_encode(array(12, 27, 39, 46, 71)),
                "row2" => json_encode(array(4, 19, 59, 75, 80)),
                "row3" => json_encode(array(9, 29, 47, 77, 84)),
            ],
            [
                "row1" => json_encode(array(9, 23, 42, 53, 84)),
                "row2" => json_encode(array(28, 39, 54, 61, 72)),
                "row3" => json_encode(array(15, 56, 62, 77, 89)),
            ],
            [
                "row1" => json_encode(array(16, 31, 49, 50, 65)),
                "row2" => json_encode(array(5, 18, 23, 74, 83)),
                "row3" => json_encode(array(9, 19, 34, 67, 90)),
            ],
            [
                "row1" => json_encode(array(6, 16, 22, 40, 50)),
                "row2" => json_encode(array(18, 25, 30, 66, 75)),
                "row3" => json_encode(array(8, 36, 45, 59, 83)),
            ],
            [
                "row1" => json_encode(array(2, 18, 41, 57, 73)),
                "row2" => json_encode(array(20, 32, 44, 76, 84)),
                "row3" => json_encode(array(6, 29, 37, 45, 69)),
            ],
            [
                "row1" => json_encode(array(9, 21, 36, 57, 86)),
                "row2" => json_encode(array(19, 24, 44, 59, 87)),
                "row3" => json_encode(array(27, 37, 47, 69, 77)),
            ],
            [
                "row1" => json_encode(array(8, 23, 36, 44, 60)),
                "row2" => json_encode(array(11, 25, 59, 75, 84)),
                "row3" => json_encode(array(29, 45, 66, 77, 85)),
            ],
            [
                "row1" => json_encode(array(33, 45, 52, 79, 86)),
                "row2" => json_encode(array(11, 21, 34, 48, 55)),
                "row3" => json_encode(array(2, 14, 23, 66, 88)),
            ],
            [
                "row1" => json_encode(array(17, 36, 40, 76, 84)),
                "row2" => json_encode(array(8, 27, 46, 64, 87)),
                "row3" => json_encode(array(37, 47, 55, 66, 90)),
            ],
            [
                "row1" => json_encode(array(3, 11, 42, 77, 85)),
                "row2" => json_encode(array(17, 27, 38, 59, 67)),
                "row3" => json_encode(array(5, 19, 49, 79, 89)),
            ],
            [
                "row1" => json_encode(array(1, 22, 32, 42, 65)),
                "row2" => json_encode(array(5, 39, 47, 78, 87)),
                "row3" => json_encode(array(6, 15, 50, 67, 79)),
            ],
            [
                "row1" => json_encode(array(6, 36, 52, 77, 88)),
                "row2" => json_encode(array(19, 26, 48, 55, 89)),
                "row3" => json_encode(array(27, 37, 58, 60, 90)),
            ],
            [
                "row1" => json_encode(array(2, 13, 34, 69, 70)),
                "row2" => json_encode(array(9, 16, 45, 59, 73)),
                "row3" => json_encode(array(20, 35, 46, 74, 80)),
            ],
            [
                "row1" => json_encode(array(3, 15, 20, 34, 48)),
                "row2" => json_encode(array(6, 29, 56, 60, 87)),
                "row3" => json_encode(array(16, 37, 49, 64, 79)),
            ],
            [
                "row1" => json_encode(array(39, 47, 52, 74, 84)),
                "row2" => json_encode(array(10, 58, 69, 77, 85)),
                "row3" => json_encode(array(8, 18, 21, 49, 78)),
            ],
            [
                "row1" => json_encode(array(3, 27, 37, 74, 87)),
                "row2" => json_encode(array(13, 28, 38, 57, 61)),
                "row3" => json_encode(array(9, 15, 45, 63, 90)),
            ],
            [
                "row1" => json_encode(array(2, 24, 43, 53, 73)),
                "row2" => json_encode(array(9, 15, 27, 78, 84)),
                "row3" => json_encode(array(17, 37, 56, 68, 85)),
            ],
            [
                "row1" => json_encode(array(7, 21, 31, 62, 83)),
                "row2" => json_encode(array(15, 46, 53, 63, 78)),
                "row3" => json_encode(array(8, 16, 38, 69, 85)),
            ],
            [
                "row1" => json_encode(array(31, 49, 55, 67, 82)),
                "row2" => json_encode(array(8, 19, 29, 33, 58)),
                "row3" => json_encode(array(37, 59, 68, 74, 85)),
            ],
            [
                "row1" => json_encode(array(2, 15, 21, 49, 57)),
                "row2" => json_encode(array(4, 23, 36, 75, 84)),
                "row3" => json_encode(array(6, 24, 68, 76, 87)),
            ],
            [
                "row1" => json_encode(array(34, 46, 57, 78, 86)),
                "row2" => json_encode(array(1, 19, 20, 39, 79)),
                "row3" => json_encode(array(5, 26, 47, 59, 62)),
            ],
            [
                "row1" => json_encode(array(7, 19, 31, 58, 72)),
                "row2" => json_encode(array(25, 36, 42, 69, 77)),
                "row3" => json_encode(array(27, 39, 49, 59, 85)),
            ],
            [
                "row1" => json_encode(array(23, 33, 40, 69, 74)),
                "row2" => json_encode(array(3, 18, 39, 48, 86)),
                "row3" => json_encode(array(9, 19, 24, 54, 77)),
            ],
            [
                "row1" => json_encode(array(15, 38, 45, 54, 68)),
                "row2" => json_encode(array(7, 25, 49, 79, 83)),
                "row3" => json_encode(array(27, 39, 59, 69, 86)),
            ],
            [
                "row1" => json_encode(array(2, 21, 52, 67, 83)),
                "row2" => json_encode(array(14, 25, 33, 45, 78)),
                "row3" => json_encode(array(26, 37, 48, 57, 69)),
            ],
            [
                "row1" => json_encode(array(8, 27, 48, 76, 88)),
                "row2" => json_encode(array(15, 29, 49, 52, 60)),
                "row3" => json_encode(array(19, 38, 53, 65, 90)),
            ],
            [
                "row1" => json_encode(array(7, 28, 43, 66, 73)),
                "row2" => json_encode(array(15, 30, 53, 78, 80)),
                "row3" => json_encode(array(18, 32, 54, 79, 81)),
            ],
            [
                "row1" => json_encode(array(8, 13, 40, 66, 81)),
                "row2" => json_encode(array(19, 33, 47, 75, 86)),
                "row3" => json_encode(array(26, 35, 49, 50, 77)),
            ],
            [
                "row1" => json_encode(array(7, 29, 38, 50, 87)),
                "row2" => json_encode(array(8, 11, 40, 52, 89)),
                "row3" => json_encode(array(13, 48, 56, 65, 73)),
            ],
            [
                "row1" => json_encode(array(14, 20, 49, 50, 84)),
                "row2" => json_encode(array(5, 24, 32, 58, 70)),
                "row3" => json_encode(array(19, 36, 69, 76, 89)),
            ],
            [
                "row1" => json_encode(array(10, 20, 41, 66, 78)),
                "row2" => json_encode(array(4, 25, 36, 46, 85)),
                "row3" => json_encode(array(8, 16, 27, 57, 86)),
            ],
            [
                "row1" => json_encode(array(2, 25, 38, 75, 87)),
                "row2" => json_encode(array(15, 39, 52, 68, 77)),
                "row3" => json_encode(array(7, 19, 29, 41, 69)),
            ],
            [
                "row1" => json_encode(array(15, 26, 46, 52, 69)),
                "row2" => json_encode(array(16, 27, 55, 75, 84)),
                "row3" => json_encode(array(8, 17, 38, 76, 86)),
            ],
            [
                "row1" => json_encode(array(14, 37, 57, 61, 74)),
                "row2" => json_encode(array(3, 29, 44, 64, 79)),
                "row3" => json_encode(array(8, 17, 39, 47, 90)),
            ],
            [
                "row1" => json_encode(array(10, 48, 58, 63, 85)),
                "row2" => json_encode(array(22, 33, 67, 77, 88)),
                "row3" => json_encode(array(6, 13, 23, 38, 90)),
            ],
            [
                "row1" => json_encode(array(7, 17, 49, 54, 85)),
                "row2" => json_encode(array(26, 32, 68, 79, 87)),
                "row3" => json_encode(array(9, 19, 27, 37, 56)),
            ],
            [
                "row1" => json_encode(array(1, 14, 29, 47, 78)),
                "row2" => json_encode(array(32, 49, 51, 64, 89)),
                "row3" => json_encode(array(9, 16, 36, 53, 69)),
            ],
            [
                "row1" => json_encode(array(27, 30, 47, 50, 74)),
                "row2" => json_encode(array(4, 13, 54, 65, 76)),
                "row3" => json_encode(array(8, 14, 37, 59, 88)),
            ],
            [
                "row1" => json_encode(array(6, 12, 41, 66, 75)),
                "row2" => json_encode(array(24, 50, 69, 76, 83)),
                "row3" => json_encode(array(30, 44, 52, 79, 89)),
            ],
            [
                "row1" => json_encode(array(16, 27, 42, 67, 78)),
                "row2" => json_encode(array(4, 29, 52, 68, 84)),
                "row3" => json_encode(array(17, 32, 48, 58, 88)),
            ],
            [
                "row1" => json_encode(array(20, 30, 41, 68, 83)),
                "row2" => json_encode(array(4, 12, 28, 47, 71)),
                "row3" => json_encode(array(9, 15, 35, 50, 74)),
            ],
            [
                "row1" => json_encode(array(1, 28, 32, 42, 69)),
                "row2" => json_encode(array(18, 37, 58, 71, 84)),
                "row3" => json_encode(array(4, 29, 49, 79, 86)),
            ],
            [
                "row1" => json_encode(array(13, 20, 52, 64, 72)),
                "row2" => json_encode(array(15, 38, 48, 73, 80)),
                "row3" => json_encode(array(9, 24, 66, 77, 88)),
            ],
            [
                "row1" => json_encode(array(3, 22, 51, 63, 75)),
                "row2" => json_encode(array(10, 27, 52, 68, 80)),
                "row3" => json_encode(array(17, 33, 41, 77, 85)),
            ],
            [
                "row1" => json_encode(array(6, 23, 38, 45, 78)),
                "row2" => json_encode(array(8, 14, 53, 60, 84)),
                "row3" => json_encode(array(19, 29, 48, 55, 65)),
            ],
            [
                "row1" => json_encode(array(3, 23, 55, 68, 82)),
                "row2" => json_encode(array(16, 45, 56, 79, 85)),
                "row3" => json_encode(array(4, 27, 39, 59, 89)),
            ],
            [
                "row1" => json_encode(array(7, 11, 22, 40, 78)),
                "row2" => json_encode(array(9, 29, 44, 56, 83)),
                "row3" => json_encode(array(18, 30, 47, 66, 85)),
            ],
            [
                "row1" => json_encode(array(1, 48, 53, 68, 72)),
                "row2" => json_encode(array(15, 35, 56, 77, 86)),
                "row3" => json_encode(array(7, 17, 26, 37, 79)),
            ],
            [
                "row1" => json_encode(array(1, 12, 20, 33, 63)),
                "row2" => json_encode(array(6, 18, 27, 54, 86)),
                "row3" => json_encode(array(19, 28, 39, 40, 75)),
            ],
            [
                "row1" => json_encode(array(2, 15, 31, 50, 85)),
                "row2" => json_encode(array(9, 34, 47, 52, 74)),
                "row3" => json_encode(array(25, 37, 49, 53, 65)),
            ],
            [
                "row1" => json_encode(array(42, 56, 61, 73, 88)),
                "row2" => json_encode(array(8, 18, 32, 59, 65)),
                "row3" => json_encode(array(9, 22, 46, 75, 89)),
            ],
            [
                "row1" => json_encode(array(14, 25, 34, 52, 68)),
                "row2" => json_encode(array(17, 29, 35, 74, 84)),
                "row3" => json_encode(array(5, 38, 42, 59, 79)),
            ],
            [
                "row1" => json_encode(array(16, 33, 41, 57, 61)),
                "row2" => json_encode(array(6, 17, 24, 38, 77)),
                "row3" => json_encode(array(28, 45, 58, 62, 83)),
            ],
            [
                "row1" => json_encode(array(1, 11, 41, 59, 77)),
                "row2" => json_encode(array(8, 25, 49, 61, 86)),
                "row3" => json_encode(array(15, 29, 32, 66, 88)),
            ],
            [
                "row1" => json_encode(array(4, 22, 47, 53, 68)),
                "row2" => json_encode(array(13, 27, 38, 78, 87)),
                "row3" => json_encode(array(14, 29, 39, 58, 69)),
            ],
            [
                "row1" => json_encode(array(8, 23, 31, 44, 65)),
                "row2" => json_encode(array(28, 33, 49, 68, 78)),
                "row3" => json_encode(array(10, 29, 37, 51, 90)),
            ],
            [
                "row1" => json_encode(array(3, 27, 34, 51, 76)),
                "row2" => json_encode(array(7, 10, 36, 42, 59)),
                "row3" => json_encode(array(14, 29, 37, 48, 80)),
            ],
            [
                "row1" => json_encode(array(1, 34, 64, 72, 88)),
                "row2" => json_encode(array(4, 27, 39, 43, 75)),
                "row3" => json_encode(array(16, 58, 68, 76, 90)),
            ],
            [
                "row1" => json_encode(array(7, 21, 59, 62, 73)),
                "row2" => json_encode(array(8, 12, 29, 35, 75)),
                "row3" => json_encode(array(14, 37, 48, 78, 81)),
            ],
            [
                "row1" => json_encode(array(8, 34, 48, 63, 81)),
                "row2" => json_encode(array(13, 21, 39, 77, 89)),
                "row3" => json_encode(array(17, 23, 59, 69, 79)),
            ],
            [
                "row1" => json_encode(array(1, 35, 48, 65, 85)),
                "row2" => json_encode(array(3, 22, 56, 66, 76)),
                "row3" => json_encode(array(4, 25, 37, 78, 86)),
            ],
            [
                "row1" => json_encode(array(18, 41, 51, 66, 87)),
                "row2" => json_encode(array(32, 43, 59, 68, 74)),
                "row3" => json_encode(array(7, 21, 38, 47, 88)),
            ],
            [
                "row1" => json_encode(array(2, 26, 32, 51, 73)),
                "row2" => json_encode(array(47, 52, 62, 75, 89)),
                "row3" => json_encode(array(29, 36, 48, 56, 90)),
            ],
            [
                "row1" => json_encode(array(17, 20, 45, 52, 70)),
                "row2" => json_encode(array(4, 24, 30, 59, 86)),
                "row3" => json_encode(array(6, 29, 39, 46, 72)),
            ],
            [
                "row1" => json_encode(array(23, 31, 66, 70, 87)),
                "row2" => json_encode(array(15, 37, 47, 53, 78)),
                "row3" => json_encode(array(16, 24, 49, 54, 79)),
            ],
            [
                "row1" => json_encode(array(2, 36, 43, 55, 73)),
                "row2" => json_encode(array(5, 11, 59, 66, 87)),
                "row3" => json_encode(array(9, 12, 39, 45, 69)),
            ],
            [
                "row1" => json_encode(array(1, 17, 40, 66, 74)),
                "row2" => json_encode(array(2, 19, 58, 69, 80)),
                "row3" => json_encode(array(8, 21, 33, 79, 83)),
            ],
            [
                "row1" => json_encode(array(23, 30, 40, 53, 82)),
                "row2" => json_encode(array(17, 25, 39, 41, 65)),
                "row3" => json_encode(array(9, 45, 68, 76, 83)),
            ],
            [
                "row1" => json_encode(array(11, 20, 36, 56, 61)),
                "row2" => json_encode(array(28, 43, 58, 72, 89)),
                "row3" => json_encode(array(6, 39, 59, 68, 77)),
            ],
            [
                "row1" => json_encode(array(6, 21, 35, 41, 81)),
                "row2" => json_encode(array(22, 49, 67, 72, 85)),
                "row3" => json_encode(array(12, 28, 39, 51, 86)),
            ],
            [
                "row1" => json_encode(array(39, 40, 58, 68, 70)),
                "row2" => json_encode(array(5, 14, 27, 48, 72)),
                "row3" => json_encode(array(17, 59, 69, 75, 88)),
            ],
            [
                "row1" => json_encode(array(1, 27, 31, 63, 72)),
                "row2" => json_encode(array(7, 37, 55, 68, 87)),
                "row3" => json_encode(array(14, 45, 69, 76, 90)),
            ],
            [
                "row1" => json_encode(array(2, 34, 48, 54, 85)),
                "row2" => json_encode(array(15, 29, 57, 66, 72)),
                "row3" => json_encode(array(9, 37, 49, 67, 73)),
            ],
            [
                "row1" => json_encode(array(8, 16, 30, 57, 83)),
                "row2" => json_encode(array(18, 28, 32, 43, 77)),
                "row3" => json_encode(array(29, 38, 58, 65, 87)),
            ],
            [
                "row1" => json_encode(array(5, 18, 20, 62, 81)),
                "row2" => json_encode(array(24, 32, 46, 56, 72)),
                "row3" => json_encode(array(48, 58, 69, 73, 86)),
            ],
            [
                "row1" => json_encode(array(7, 18, 28, 48, 53)),
                "row2" => json_encode(array(19, 59, 68, 72, 89)),
                "row3" => json_encode(array(9, 39, 49, 75, 90)),
            ],
            [
                "row1" => json_encode(array(31, 44, 50, 69, 88)),
                "row2" => json_encode(array(3, 29, 36, 46, 59)),
                "row3" => json_encode(array(6, 13, 49, 76, 89)),
            ],
            [
                "row1" => json_encode(array(8, 46, 59, 60, 74)),
                "row2" => json_encode(array(18, 20, 61, 79, 85)),
                "row3" => json_encode(array(25, 35, 48, 65, 88)),
            ],
            [
                "row1" => json_encode(array(9, 16, 21, 42, 88)),
                "row2" => json_encode(array(29, 34, 50, 65, 71)),
                "row3" => json_encode(array(19, 55, 69, 77, 89)),
            ],
            [
                "row1" => json_encode(array(18, 23, 45, 57, 84)),
                "row2" => json_encode(array(24, 49, 62, 70, 89)),
                "row3" => json_encode(array(28, 32, 59, 66, 78)),
            ],
            [
                "row1" => json_encode(array(3, 12, 40, 56, 76)),
                "row2" => json_encode(array(14, 24, 37, 57, 85)),
                "row3" => json_encode(array(7, 19, 29, 48, 66)),
            ],
            [
                "row1" => json_encode(array(25, 38, 46, 62, 70)),
                "row2" => json_encode(array(9, 11, 47, 68, 85)),
                "row3" => json_encode(array(12, 26, 39, 49, 76)),
            ],
            [
                "row1" => json_encode(array(29, 31, 43, 73, 81)),
                "row2" => json_encode(array(39, 48, 58, 67, 84)),
                "row3" => json_encode(array(9, 59, 68, 74, 85)),
            ],
            [
                "row1" => json_encode(array(20, 56, 61, 75, 85)),
                "row2" => json_encode(array(8, 12, 32, 76, 88)),
                "row3" => json_encode(array(26, 36, 41, 63, 77)),
            ],
            [
                "row1" => json_encode(array(22, 43, 63, 79, 83)),
                "row2" => json_encode(array(3, 27, 55, 66, 88)),
                "row3" => json_encode(array(9, 11, 48, 58, 68)),
            ],
            [
                "row1" => json_encode(array(8, 22, 47, 71, 83)),
                "row2" => json_encode(array(15, 31, 52, 65, 79)),
                "row3" => json_encode(array(26, 34, 55, 69, 90)),
            ],
            [
                "row1" => json_encode(array(1, 25, 46, 54, 87)),
                "row2" => json_encode(array(6, 13, 28, 61, 75)),
                "row3" => json_encode(array(17, 30, 59, 63, 89)),
            ],
            [
                "row1" => json_encode(array(8, 35, 58, 68, 86)),
                "row2" => json_encode(array(21, 37, 44, 59, 71)),
                "row3" => json_encode(array(15, 38, 48, 77, 89)),
            ],
            [
                "row1" => json_encode(array(15, 31, 68, 76, 88)),
                "row2" => json_encode(array(6, 29, 46, 51, 79)),
                "row3" => json_encode(array(9, 16, 35, 49, 55)),
            ],
            [
                "row1" => json_encode(array(7, 39, 67, 70, 84)),
                "row2" => json_encode(array(22, 46, 58, 68, 78)),
                "row3" => json_encode(array(9, 19, 25, 79, 87)),
            ],
            [
                "row1" => json_encode(array(4, 26, 37, 55, 60)),
                "row2" => json_encode(array(42, 57, 64, 74, 83)),
                "row3" => json_encode(array(8, 17, 49, 68, 85)),
            ],
            [
                "row1" => json_encode(array(6, 25, 35, 59, 77)),
                "row2" => json_encode(array(17, 28, 46, 64, 83)),
                "row3" => json_encode(array(7, 18, 39, 68, 89)),
            ],
            [
                "row1" => json_encode(array(4, 44, 56, 63, 86)),
                "row2" => json_encode(array(8, 28, 38, 68, 71)),
                "row3" => json_encode(array(13, 39, 47, 73, 88)),
            ],
            [
                "row1" => json_encode(array(10, 41, 57, 72, 84)),
                "row2" => json_encode(array(3, 26, 36, 43, 62)),
                "row3" => json_encode(array(6, 16, 38, 45, 90)),
            ],
            [
                "row1" => json_encode(array(6, 38, 42, 56, 88)),
                "row2" => json_encode(array(17, 28, 43, 62, 75)),
                "row3" => json_encode(array(8, 18, 49, 59, 65)),
            ],
            [
                "row1" => json_encode(array(9, 47, 54, 65, 81)),
                "row2" => json_encode(array(17, 49, 69, 71, 87)),
                "row3" => json_encode(array(24, 35, 56, 79, 89)),
            ],
            [
                "row1" => json_encode(array(24, 35, 55, 75, 85)),
                "row2" => json_encode(array(15, 38, 42, 66, 76)),
                "row3" => json_encode(array(2, 17, 57, 77, 86)),
            ],
            [
                "row1" => json_encode(array(7, 10, 36, 46, 67)),
                "row2" => json_encode(array(17, 20, 69, 78, 82)),
                "row3" => json_encode(array(8, 28, 50, 79, 89)),
            ],
            [
                "row1" => json_encode(array(9, 24, 35, 65, 87)),
                "row2" => json_encode(array(11, 36, 44, 52, 77)),
                "row3" => json_encode(array(28, 39, 67, 78, 90)),
            ],
            [
                "row1" => json_encode(array(13, 29, 39, 53, 87)),
                "row2" => json_encode(array(7, 19, 45, 60, 78)),
                "row3" => json_encode(array(9, 48, 57, 66, 90)),
            ],
            [
                "row1" => json_encode(array(1, 18, 32, 48, 84)),
                "row2" => json_encode(array(6, 23, 56, 74, 89)),
                "row3" => json_encode(array(9, 26, 36, 58, 67)),
            ],
            [
                "row1" => json_encode(array(7, 30, 44, 50, 66)),
                "row2" => json_encode(array(17, 26, 35, 49, 85)),
                "row3" => json_encode(array(29, 39, 51, 78, 89)),
            ],
            [
                "row1" => json_encode(array(2, 24, 46, 67, 81)),
                "row2" => json_encode(array(8, 10, 28, 58, 86)),
                "row3" => json_encode(array(18, 31, 47, 77, 89)),
            ],
            [
                "row1" => json_encode(array(3, 15, 26, 47, 57)),
                "row2" => json_encode(array(16, 39, 64, 70, 82)),
                "row3" => json_encode(array(4, 18, 59, 67, 84)),
            ],
            [
                "row1" => json_encode(array(13, 24, 37, 79, 84)),
                "row2" => json_encode(array(5, 25, 56, 66, 88)),
                "row3" => json_encode(array(15, 27, 48, 59, 67)),
            ],
            [
                "row1" => json_encode(array(23, 38, 44, 50, 66)),
                "row2" => json_encode(array(5, 12, 45, 51, 82)),
                "row3" => json_encode(array(16, 46, 55, 77, 87)),
            ],
            [
                "row1" => json_encode(array(15, 36, 48, 69, 75)),
                "row2" => json_encode(array(16, 24, 38, 51, 85)),
                "row3" => json_encode(array(27, 49, 57, 76, 90)),
            ],
            [
                "row1" => json_encode(array(9, 19, 41, 59, 83)),
                "row2" => json_encode(array(25, 37, 45, 63, 89)),
                "row3" => json_encode(array(27, 38, 47, 65, 74)),
            ],
            [
                "row1" => json_encode(array(32, 44, 53, 64, 74)),
                "row2" => json_encode(array(5, 34, 45, 55, 79)),
                "row3" => json_encode(array(9, 15, 25, 35, 87)),
            ],
            [
                "row1" => json_encode(array(4, 10, 35, 47, 75)),
                "row2" => json_encode(array(6, 12, 39, 60, 87)),
                "row3" => json_encode(array(15, 27, 54, 67, 90)),
            ],
            [
                "row1" => json_encode(array(28, 38, 58, 60, 86)),
                "row2" => json_encode(array(6, 18, 44, 62, 89)),
                "row3" => json_encode(array(9, 29, 47, 59, 75)),
            ],
            [
                "row1" => json_encode(array(29, 31, 49, 61, 82)),
                "row2" => json_encode(array(4, 18, 35, 72, 89)),
                "row3" => json_encode(array(5, 39, 56, 68, 75)),
            ],
            [
                "row1" => json_encode(array(3, 20, 56, 63, 77)),
                "row2" => json_encode(array(4, 10, 22, 69, 81)),
                "row3" => json_encode(array(12, 25, 34, 40, 89)),
            ],
            [
                "row1" => json_encode(array(1, 29, 49, 63, 81)),
                "row2" => json_encode(array(5, 31, 69, 78, 87)),
                "row3" => json_encode(array(7, 19, 32, 54, 89)),
            ],
            [
                "row1" => json_encode(array(15, 24, 31, 47, 82)),
                "row2" => json_encode(array(2, 32, 51, 61, 73)),
                "row3" => json_encode(array(9, 17, 27, 39, 90)),
            ],
            [
                "row1" => json_encode(array(21, 35, 47, 71, 84)),
                "row2" => json_encode(array(7, 17, 24, 58, 73)),
                "row3" => json_encode(array(9, 18, 36, 78, 90)),
            ],
            [
                "row1" => json_encode(array(22, 30, 40, 68, 87)),
                "row2" => json_encode(array(18, 34, 49, 51, 88)),
                "row3" => json_encode(array(1, 29, 58, 69, 79)),
            ],
            [
                "row1" => json_encode(array(21, 43, 60, 75, 80)),
                "row2" => json_encode(array(7, 26, 39, 56, 78)),
                "row3" => json_encode(array(18, 46, 58, 64, 79)),
            ],
            [
                "row1" => json_encode(array(26, 35, 53, 66, 76)),
                "row2" => json_encode(array(7, 11, 42, 59, 83)),
                "row3" => json_encode(array(16, 27, 48, 67, 87)),
            ],
            [
                "row1" => json_encode(array(15, 22, 32, 76, 84)),
                "row2" => json_encode(array(8, 24, 57, 78, 85)),
                "row3" => json_encode(array(19, 43, 59, 66, 90)),
            ],
            [
                "row1" => json_encode(array(16, 24, 49, 52, 77)),
                "row2" => json_encode(array(1, 18, 38, 57, 86)),
                "row3" => json_encode(array(9, 39, 59, 60, 87)),
            ],
            [
                "row1" => json_encode(array(15, 26, 31, 47, 74)),
                "row2" => json_encode(array(3, 39, 54, 76, 88)),
                "row3" => json_encode(array(6, 19, 49, 56, 65)),
            ],
            [
                "row1" => json_encode(array(14, 35, 48, 75, 82)),
                "row2" => json_encode(array(27, 56, 64, 79, 87)),
                "row3" => json_encode(array(9, 17, 37, 58, 89)),
            ],
            [
                "row1" => json_encode(array(8, 19, 52, 78, 88)),
                "row2" => json_encode(array(23, 34, 41, 69, 79)),
                "row3" => json_encode(array(9, 27, 39, 49, 57)),
            ],
            [
                "row1" => json_encode(array(17, 29, 48, 54, 68)),
                "row2" => json_encode(array(9, 58, 69, 76, 83)),
                "row3" => json_encode(array(18, 36, 59, 77, 89)),
            ],
            [
                "row1" => json_encode(array(23, 37, 45, 62, 70)),
                "row2" => json_encode(array(9, 18, 38, 46, 55)),
                "row3" => json_encode(array(19, 48, 58, 68, 75)),
            ],
            [
                "row1" => json_encode(array(9, 17, 46, 62, 86)),
                "row2" => json_encode(array(38, 58, 64, 73, 88)),
                "row3" => json_encode(array(19, 27, 39, 65, 78)),
            ],
            [
                "row1" => json_encode(array(20, 47, 63, 78, 87)),
                "row2" => json_encode(array(14, 23, 33, 56, 88)),
                "row3" => json_encode(array(2, 35, 67, 79, 90)),
            ],
            [
                "row1" => json_encode(array(16, 25, 55, 61, 80)),
                "row2" => json_encode(array(3, 30, 56, 65, 83)),
                "row3" => json_encode(array(18, 35, 41, 69, 75)),
            ],
            [
                "row1" => json_encode(array(2, 13, 49, 55, 67)),
                "row2" => json_encode(array(7, 15, 33, 77, 80)),
                "row3" => json_encode(array(19, 29, 68, 79, 82)),
            ],
            [
                "row1" => json_encode(array(19, 28, 38, 64, 71)),
                "row2" => json_encode(array(8, 39, 59, 74, 87)),
                "row3" => json_encode(array(9, 44, 67, 77, 88)),
            ],
            [
                "row1" => json_encode(array(38, 43, 59, 66, 77)),
                "row2" => json_encode(array(11, 22, 44, 68, 84)),
                "row3" => json_encode(array(9, 24, 69, 78, 88)),
            ],
            [
                "row1" => json_encode(array(15, 27, 40, 53, 61)),
                "row2" => json_encode(array(2, 18, 45, 58, 75)),
                "row3" => json_encode(array(5, 28, 37, 79, 87)),
            ],
            [
                "row1" => json_encode(array(9, 14, 51, 66, 84)),
                "row2" => json_encode(array(25, 32, 40, 67, 78)),
                "row3" => json_encode(array(19, 27, 33, 41, 58)),
            ],
            [
                "row1" => json_encode(array(12, 26, 38, 50, 65)),
                "row2" => json_encode(array(9, 14, 39, 45, 82)),
                "row3" => json_encode(array(15, 28, 53, 75, 89)),
            ],
            [
                "row1" => json_encode(array(4, 14, 30, 59, 65)),
                "row2" => json_encode(array(7, 15, 25, 49, 88)),
                "row3" => json_encode(array(29, 39, 69, 74, 90)),
            ],
            [
                "row1" => json_encode(array(13, 49, 50, 66, 79)),
                "row2" => json_encode(array(15, 26, 37, 67, 80)),
                "row3" => json_encode(array(5, 19, 39, 52, 86)),
            ],
            [
                "row1" => json_encode(array(2, 15, 24, 34, 60)),
                "row2" => json_encode(array(3, 25, 54, 68, 87)),
                "row3" => json_encode(array(26, 38, 49, 74, 89)),
            ],
            [
                "row1" => json_encode(array(4, 16, 27, 69, 79)),
                "row2" => json_encode(array(17, 29, 39, 42, 50)),
                "row3" => json_encode(array(6, 18, 49, 52, 82)),
            ],
            [
                "row1" => json_encode(array(11, 24, 37, 67, 88)),
                "row2" => json_encode(array(4, 13, 28, 69, 79)),
                "row3" => json_encode(array(9, 39, 47, 53, 90)),
            ],
            [
                "row1" => json_encode(array(5, 15, 37, 42, 81)),
                "row2" => json_encode(array(19, 22, 51, 65, 76)),
                "row3" => json_encode(array(8, 48, 56, 68, 86)),
            ],
            [
                "row1" => json_encode(array(9, 48, 58, 69, 75)),
                "row2" => json_encode(array(19, 25, 30, 77, 82)),
                "row3" => json_encode(array(27, 36, 49, 59, 85)),
            ],
            [
                "row1" => json_encode(array(18, 25, 53, 62, 84)),
                "row2" => json_encode(array(5, 27, 35, 47, 75)),
                "row3" => json_encode(array(19, 49, 69, 79, 89)),
            ],
            [
                "row1" => json_encode(array(19, 39, 42, 55, 80)),
                "row2" => json_encode(array(8, 43, 60, 73, 83)),
                "row3" => json_encode(array(25, 46, 57, 75, 90)),
            ],
            [
                "row1" => json_encode(array(33, 47, 56, 68, 70)),
                "row2" => json_encode(array(9, 34, 69, 78, 80)),
                "row3" => json_encode(array(14, 22, 39, 59, 89)),
            ],
            [
                "row1" => json_encode(array(18, 30, 50, 72, 85)),
                "row2" => json_encode(array(23, 32, 66, 75, 88)),
                "row3" => json_encode(array(2, 29, 49, 56, 77)),
            ],
            [
                "row1" => json_encode(array(9, 24, 32, 55, 72)),
                "row2" => json_encode(array(16, 27, 34, 68, 87)),
                "row3" => json_encode(array(19, 29, 37, 57, 89)),
            ],
            [
                "row1" => json_encode(array(5, 38, 43, 59, 70)),
                "row2" => json_encode(array(11, 21, 69, 75, 89)),
                "row3" => json_encode(array(8, 15, 27, 49, 76)),
            ],
            [
                "row1" => json_encode(array(2, 13, 68, 74, 83)),
                "row2" => json_encode(array(19, 30, 49, 69, 76)),
                "row3" => json_encode(array(5, 23, 52, 79, 90)),
            ],
            [
                "row1" => json_encode(array(28, 36, 54, 74, 86)),
                "row2" => json_encode(array(9, 48, 65, 78, 88)),
                "row3" => json_encode(array(15, 49, 59, 69, 89)),
            ],
            [
                "row1" => json_encode(array(5, 10, 49, 67, 79)),
                "row2" => json_encode(array(7, 18, 20, 55, 68)),
                "row3" => json_encode(array(9, 19, 28, 58, 84)),
            ],
            [
                "row1" => json_encode(array(5, 28, 39, 50, 78)),
                "row2" => json_encode(array(8, 14, 48, 51, 60)),
                "row3" => json_encode(array(9, 16, 53, 67, 81)),
            ],
            [
                "row1" => json_encode(array(39, 46, 58, 72, 87)),
                "row2" => json_encode(array(4, 17, 25, 77, 88)),
                "row3" => json_encode(array(8, 27, 47, 67, 90)),
            ],
            [
                "row1" => json_encode(array(8, 18, 69, 75, 86)),
                "row2" => json_encode(array(19, 26, 32, 42, 58)),
                "row3" => json_encode(array(29, 36, 45, 76, 87)),
            ],
            [
                "row1" => json_encode(array(22, 31, 46, 74, 80)),
                "row2" => json_encode(array(27, 37, 49, 65, 81)),
                "row3" => json_encode(array(7, 16, 51, 68, 76)),
            ],
            [
                "row1" => json_encode(array(2, 52, 62, 73, 83)),
                "row2" => json_encode(array(6, 35, 43, 56, 68)),
                "row3" => json_encode(array(11, 28, 36, 59, 87)),
            ],
            [
                "row1" => json_encode(array(2, 27, 57, 64, 79)),
                "row2" => json_encode(array(16, 30, 45, 58, 84)),
                "row3" => json_encode(array(6, 19, 29, 33, 85)),
            ],
            [
                "row1" => json_encode(array(33, 41, 62, 72, 80)),
                "row2" => json_encode(array(2, 23, 34, 63, 82)),
                "row3" => json_encode(array(29, 35, 43, 64, 74)),
            ],
            [
                "row1" => json_encode(array(9, 19, 41, 56, 85)),
                "row2" => json_encode(array(25, 32, 47, 64, 75)),
                "row3" => json_encode(array(27, 36, 48, 68, 86)),
            ],
            [
                "row1" => json_encode(array(16, 36, 47, 71, 87)),
                "row2" => json_encode(array(2, 29, 49, 52, 64)),
                "row3" => json_encode(array(7, 17, 39, 56, 69)),
            ],
            [
                "row1" => json_encode(array(1, 13, 25, 40, 88)),
                "row2" => json_encode(array(17, 28, 54, 62, 73)),
                "row3" => json_encode(array(2, 19, 68, 77, 89)),
            ],
            [
                "row1" => json_encode(array(10, 22, 35, 48, 59)),
                "row2" => json_encode(array(8, 11, 49, 73, 81)),
                "row3" => json_encode(array(9, 13, 23, 69, 84)),
            ],
            [
                "row1" => json_encode(array(7, 30, 44, 53, 67)),
                "row2" => json_encode(array(13, 21, 33, 56, 81)),
                "row3" => json_encode(array(16, 22, 36, 58, 86)),
            ],
            [
                "row1" => json_encode(array(1, 27, 34, 48, 55)),
                "row2" => json_encode(array(4, 36, 58, 61, 81)),
                "row3" => json_encode(array(5, 13, 37, 62, 87)),
            ],
            [
                "row1" => json_encode(array(12, 32, 44, 67, 87)),
                "row2" => json_encode(array(6, 22, 35, 54, 73)),
                "row3" => json_encode(array(8, 14, 23, 57, 69)),
            ],
            [
                "row1" => json_encode(array(9, 39, 61, 78, 87)),
                "row2" => json_encode(array(18, 52, 62, 79, 89)),
                "row3" => json_encode(array(25, 43, 55, 64, 90)),
            ],
            [
                "row1" => json_encode(array(2, 24, 56, 77, 84)),
                "row2" => json_encode(array(19, 32, 57, 63, 88)),
                "row3" => json_encode(array(6, 29, 33, 44, 59)),
            ],
            [
                "row1" => json_encode(array(5, 28, 30, 43, 87)),
                "row2" => json_encode(array(31, 46, 63, 77, 88)),
                "row3" => json_encode(array(6, 38, 57, 68, 78)),
            ],
            [
                "row1" => json_encode(array(13, 21, 51, 65, 70)),
                "row2" => json_encode(array(8, 46, 52, 74, 82)),
                "row3" => json_encode(array(14, 25, 32, 77, 83)),
            ],
            [
                "row1" => json_encode(array(7, 18, 20, 60, 86)),
                "row2" => json_encode(array(21, 31, 48, 54, 77)),
                "row3" => json_encode(array(23, 37, 55, 68, 89)),
            ],
            [
                "row1" => json_encode(array(8, 14, 41, 79, 83)),
                "row2" => json_encode(array(29, 34, 49, 50, 63)),
                "row3" => json_encode(array(19, 37, 55, 66, 86)),
            ],
            [
                "row1" => json_encode(array(2, 18, 37, 47, 74)),
                "row2" => json_encode(array(7, 22, 51, 64, 81)),
                "row3" => json_encode(array(19, 28, 38, 52, 67)),
            ],
            [
                "row1" => json_encode(array(34, 49, 53, 61, 70)),
                "row2" => json_encode(array(1, 18, 66, 73, 83)),
                "row3" => json_encode(array(4, 19, 22, 36, 77)),
            ],
            [
                "row1" => json_encode(array(1, 13, 24, 33, 71)),
                "row2" => json_encode(array(6, 27, 38, 57, 74)),
                "row3" => json_encode(array(14, 41, 64, 79, 85)),
            ],
            [
                "row1" => json_encode(array(21, 40, 62, 77, 86)),
                "row2" => json_encode(array(10, 39, 44, 54, 65)),
                "row3" => json_encode(array(8, 13, 23, 69, 90)),
            ],
            [
                "row1" => json_encode(array(22, 39, 43, 74, 86)),
                "row2" => json_encode(array(14, 25, 53, 63, 89)),
                "row3" => json_encode(array(18, 28, 48, 58, 69)),
            ],
            [
                "row1" => json_encode(array(8, 22, 34, 52, 86)),
                "row2" => json_encode(array(17, 27, 35, 40, 71)),
                "row3" => json_encode(array(18, 41, 57, 61, 78)),
            ],
            [
                "row1" => json_encode(array(31, 42, 51, 65, 73)),
                "row2" => json_encode(array(9, 17, 23, 45, 76)),
                "row3" => json_encode(array(25, 39, 57, 78, 80)),
            ],
            [
                "row1" => json_encode(array(11, 25, 41, 53, 80)),
                "row2" => json_encode(array(3, 19, 29, 58, 67)),
                "row3" => json_encode(array(38, 46, 59, 70, 82)),
            ],
            [
                "row1" => json_encode(array(5, 15, 21, 39, 87)),
                "row2" => json_encode(array(19, 43, 55, 65, 73)),
                "row3" => json_encode(array(7, 22, 66, 76, 90)),
            ],
            [
                "row1" => json_encode(array(10, 25, 54, 71, 80)),
                "row2" => json_encode(array(27, 41, 57, 69, 72)),
                "row3" => json_encode(array(7, 18, 36, 42, 76)),
            ],
            [
                "row1" => json_encode(array(2, 18, 45, 56, 68)),
                "row2" => json_encode(array(7, 47, 58, 72, 83)),
                "row3" => json_encode(array(29, 30, 69, 78, 84)),
            ],
            [
                "row1" => json_encode(array(3, 19, 24, 39, 47)),
                "row2" => json_encode(array(48, 52, 69, 74, 88)),
                "row3" => json_encode(array(5, 29, 57, 79, 90)),
            ],
            [
                "row1" => json_encode(array(7, 27, 50, 63, 76)),
                "row2" => json_encode(array(38, 51, 66, 77, 83)),
                "row3" => json_encode(array(8, 14, 41, 57, 79)),
            ],
            [
                "row1" => json_encode(array(27, 33, 42, 71, 86)),
                "row2" => json_encode(array(10, 45, 50, 60, 78)),
                "row3" => json_encode(array(2, 12, 36, 48, 67)),
            ],
            [
                "row1" => json_encode(array(6, 13, 37, 77, 82)),
                "row2" => json_encode(array(8, 29, 38, 57, 79)),
                "row3" => json_encode(array(17, 41, 59, 64, 83)),
            ],
            [
                "row1" => json_encode(array(26, 42, 54, 64, 73)),
                "row2" => json_encode(array(9, 27, 34, 55, 87)),
                "row3" => json_encode(array(13, 56, 66, 78, 89)),
            ],
            [
                "row1" => json_encode(array(28, 36, 59, 70, 81)),
                "row2" => json_encode(array(5, 19, 39, 40, 72)),
                "row3" => json_encode(array(6, 29, 47, 62, 88)),
            ],
            [
                "row1" => json_encode(array(28, 44, 63, 71, 83)),
                "row2" => json_encode(array(1, 15, 58, 64, 86)),
                "row3" => json_encode(array(8, 18, 39, 49, 72)),
            ],
            [
                "row1" => json_encode(array(1, 21, 35, 62, 76)),
                "row2" => json_encode(array(19, 26, 49, 53, 86)),
                "row3" => json_encode(array(3, 38, 57, 68, 78)),
            ],
            [
                "row1" => json_encode(array(22, 48, 59, 75, 86)),
                "row2" => json_encode(array(4, 17, 30, 49, 63)),
                "row3" => json_encode(array(27, 34, 66, 77, 88)),
            ],
            [
                "row1" => json_encode(array(11, 27, 41, 64, 73)),
                "row2" => json_encode(array(5, 48, 51, 78, 84)),
                "row3" => json_encode(array(6, 12, 52, 69, 86)),
            ],
            [
                "row1" => json_encode(array(20, 45, 51, 60, 76)),
                "row2" => json_encode(array(9, 13, 27, 56, 85)),
                "row3" => json_encode(array(14, 32, 48, 57, 68)),
            ],
            [
                "row1" => json_encode(array(2, 38, 55, 70, 82)),
                "row2" => json_encode(array(24, 43, 57, 60, 73)),
                "row3" => json_encode(array(3, 59, 64, 75, 84)),
            ],
            [
                "row1" => json_encode(array(14, 32, 54, 61, 82)),
                "row2" => json_encode(array(8, 23, 42, 69, 87)),
                "row3" => json_encode(array(24, 47, 59, 77, 88)),
            ],
            [
                "row1" => json_encode(array(31, 47, 56, 74, 85)),
                "row2" => json_encode(array(10, 22, 39, 49, 76)),
                "row3" => json_encode(array(1, 29, 59, 67, 90)),
            ],
            [
                "row1" => json_encode(array(5, 13, 49, 57, 61)),
                "row2" => json_encode(array(18, 29, 59, 67, 80)),
                "row3" => json_encode(array(6, 19, 37, 68, 90)),
            ],
            [
                "row1" => json_encode(array(33, 56, 65, 72, 80)),
                "row2" => json_encode(array(9, 47, 59, 67, 85)),
                "row3" => json_encode(array(12, 26, 39, 68, 87)),
            ],
            [
                "row1" => json_encode(array(14, 31, 53, 62, 72)),
                "row2" => json_encode(array(34, 46, 55, 67, 76)),
                "row3" => json_encode(array(7, 37, 47, 69, 90)),
            ],
            [
                "row1" => json_encode(array(15, 34, 41, 54, 73)),
                "row2" => json_encode(array(3, 19, 44, 56, 86)),
                "row3" => json_encode(array(5, 26, 37, 68, 76)),
            ],
            [
                "row1" => json_encode(array(1, 26, 40, 52, 77)),
                "row2" => json_encode(array(8, 17, 56, 69, 82)),
                "row3" => json_encode(array(28, 39, 41, 57, 88)),
            ],
            [
                "row1" => json_encode(array(7, 21, 63, 78, 86)),
                "row2" => json_encode(array(11, 28, 38, 46, 56)),
                "row3" => json_encode(array(8, 16, 47, 66, 90)),
            ],
            [
                "row1" => json_encode(array(14, 30, 50, 67, 85)),
                "row2" => json_encode(array(8, 24, 31, 47, 57)),
                "row3" => json_encode(array(15, 36, 48, 69, 89)),
            ],
            [
                "row1" => json_encode(array(6, 13, 24, 43, 53)),
                "row2" => json_encode(array(14, 37, 69, 70, 84)),
                "row3" => json_encode(array(17, 29, 57, 76, 87)),
            ],
            [
                "row1" => json_encode(array(4, 28, 67, 78, 84)),
                "row2" => json_encode(array(5, 15, 55, 68, 89)),
                "row3" => json_encode(array(9, 18, 31, 41, 59)),
            ],
            [
                "row1" => json_encode(array(13, 22, 69, 75, 85)),
                "row2" => json_encode(array(17, 38, 47, 58, 79)),
                "row3" => json_encode(array(4, 27, 39, 48, 59)),
            ],
            [
                "row1" => json_encode(array(2, 26, 30, 68, 85)),
                "row2" => json_encode(array(6, 13, 31, 51, 88)),
                "row3" => json_encode(array(19, 27, 38, 59, 89)),
            ],
            [
                "row1" => json_encode(array(16, 20, 64, 71, 87)),
                "row2" => json_encode(array(2, 43, 54, 68, 74)),
                "row3" => json_encode(array(17, 35, 44, 55, 77)),
            ],
            [
                "row1" => json_encode(array(2, 18, 25, 48, 71)),
                "row2" => json_encode(array(26, 32, 51, 66, 79)),
                "row3" => json_encode(array(8, 37, 49, 57, 84)),
            ],
            [
                "row1" => json_encode(array(1, 14, 20, 56, 84)),
                "row2" => json_encode(array(29, 35, 58, 68, 70)),
                "row3" => json_encode(array(9, 15, 38, 43, 86)),
            ],
            [
                "row1" => json_encode(array(16, 20, 36, 63, 79)),
                "row2" => json_encode(array(6, 38, 49, 58, 85)),
                "row3" => json_encode(array(17, 29, 59, 67, 86)),
            ],
            [
                "row1" => json_encode(array(18, 56, 62, 79, 83)),
                "row2" => json_encode(array(19, 39, 41, 59, 88)),
                "row3" => json_encode(array(3, 26, 44, 67, 90)),
            ],
            [
                "row1" => json_encode(array(12, 29, 54, 65, 83)),
                "row2" => json_encode(array(7, 16, 42, 71, 85)),
                "row3" => json_encode(array(8, 17, 30, 48, 56)),
            ],
            [
                "row1" => json_encode(array(19, 40, 60, 72, 88)),
                "row2" => json_encode(array(27, 39, 47, 65, 89)),
                "row3" => json_encode(array(9, 49, 54, 69, 73)),
            ],
            [
                "row1" => json_encode(array(5, 19, 51, 71, 86)),
                "row2" => json_encode(array(25, 37, 41, 64, 77)),
                "row3" => json_encode(array(28, 38, 42, 56, 67)),
            ],
            [
                "row1" => json_encode(array(16, 38, 59, 73, 86)),
                "row2" => json_encode(array(7, 22, 45, 60, 79)),
                "row3" => json_encode(array(19, 26, 48, 64, 89)),
            ],
            [
                "row1" => json_encode(array(5, 19, 33, 76, 81)),
                "row2" => json_encode(array(8, 43, 54, 65, 82)),
                "row3" => json_encode(array(23, 39, 66, 78, 87)),
            ],
            [
                "row1" => json_encode(array(4, 38, 53, 68, 78)),
                "row2" => json_encode(array(6, 12, 22, 58, 88)),
                "row3" => json_encode(array(13, 25, 47, 59, 89)),
            ],
            [
                "row1" => json_encode(array(11, 30, 41, 51, 86)),
                "row2" => json_encode(array(19, 23, 46, 57, 61)),
                "row3" => json_encode(array(5, 29, 33, 76, 90)),
            ],
            [
                "row1" => json_encode(array(28, 40, 54, 68, 87)),
                "row2" => json_encode(array(6, 13, 30, 46, 74)),
                "row3" => json_encode(array(19, 29, 33, 56, 78)),
            ],
            [
                "row1" => json_encode(array(1, 17, 47, 54, 70)),
                "row2" => json_encode(array(5, 24, 33, 67, 79)),
                "row3" => json_encode(array(6, 38, 58, 69, 86)),
            ],
            [
                "row1" => json_encode(array(1, 11, 35, 76, 83)),
                "row2" => json_encode(array(9, 13, 24, 57, 69)),
                "row3" => json_encode(array(15, 26, 37, 59, 77)),
            ],
            [
                "row1" => json_encode(array(38, 48, 53, 75, 84)),
                "row2" => json_encode(array(8, 18, 26, 54, 61)),
                "row3" => json_encode(array(27, 58, 66, 76, 90)),
            ],
            [
                "row1" => json_encode(array(3, 19, 61, 73, 81)),
                "row2" => json_encode(array(9, 29, 37, 74, 89)),
                "row3" => json_encode(array(38, 41, 50, 67, 78)),
            ],
            [
                "row1" => json_encode(array(15, 29, 31, 68, 85)),
                "row2" => json_encode(array(18, 44, 55, 75, 88)),
                "row3" => json_encode(array(9, 46, 58, 76, 90)),
            ],
            [
                "row1" => json_encode(array(17, 31, 55, 62, 83)),
                "row2" => json_encode(array(8, 34, 63, 75, 87)),
                "row3" => json_encode(array(26, 39, 43, 58, 88)),
            ],
            [
                "row1" => json_encode(array(11, 26, 35, 41, 67)),
                "row2" => json_encode(array(16, 39, 45, 50, 81)),
                "row3" => json_encode(array(9, 46, 53, 78, 84)),
            ],
            [
                "row1" => json_encode(array(3, 37, 49, 66, 88)),
                "row2" => json_encode(array(5, 17, 20, 56, 75)),
                "row3" => json_encode(array(9, 21, 59, 69, 90)),
            ],
            [
                "row1" => json_encode(array(2, 39, 48, 53, 66)),
                "row2" => json_encode(array(17, 26, 58, 69, 74)),
                "row3" => json_encode(array(9, 18, 29, 49, 88)),
            ],
            [
                "row1" => json_encode(array(4, 17, 20, 40, 62)),
                "row2" => json_encode(array(7, 37, 42, 63, 81)),
                "row3" => json_encode(array(43, 50, 68, 76, 88)),
            ],
            [
                "row1" => json_encode(array(5, 18, 59, 61, 87)),
                "row2" => json_encode(array(6, 23, 32, 41, 73)),
                "row3" => json_encode(array(29, 34, 45, 69, 74)),
            ],
            [
                "row1" => json_encode(array(29, 36, 49, 72, 86)),
                "row2" => json_encode(array(1, 13, 51, 63, 78)),
                "row3" => json_encode(array(6, 19, 56, 69, 89)),
            ],
            [
                "row1" => json_encode(array(6, 11, 24, 49, 59)),
                "row2" => json_encode(array(7, 13, 65, 72, 80)),
                "row3" => json_encode(array(16, 27, 30, 76, 90)),
            ],
            [
                "row1" => json_encode(array(11, 22, 42, 76, 84)),
                "row2" => json_encode(array(3, 18, 34, 55, 61)),
                "row3" => json_encode(array(4, 28, 46, 65, 86)),
            ],
            [
                "row1" => json_encode(array(3, 31, 43, 52, 63)),
                "row2" => json_encode(array(4, 23, 38, 59, 82)),
                "row3" => json_encode(array(12, 47, 65, 76, 83)),
            ],
            [
                "row1" => json_encode(array(9, 31, 62, 71, 80)),
                "row2" => json_encode(array(33, 48, 54, 73, 83)),
                "row3" => json_encode(array(23, 34, 55, 68, 90)),
            ],
            [
                "row1" => json_encode(array(11, 28, 35, 57, 75)),
                "row2" => json_encode(array(7, 39, 58, 78, 88)),
                "row3" => json_encode(array(14, 41, 64, 79, 90)),
            ],
            [
                "row1" => json_encode(array(14, 42, 55, 61, 72)),
                "row2" => json_encode(array(9, 37, 48, 73, 83)),
                "row3" => json_encode(array(15, 28, 57, 65, 90)),
            ],
            [
                "row1" => json_encode(array(2, 13, 32, 48, 83)),
                "row2" => json_encode(array(3, 19, 22, 35, 50)),
                "row3" => json_encode(array(29, 53, 60, 78, 84)),
            ],
            [
                "row1" => json_encode(array(7, 11, 26, 68, 85)),
                "row2" => json_encode(array(8, 38, 41, 55, 87)),
                "row3" => json_encode(array(14, 39, 49, 57, 76)),
            ],
            [
                "row1" => json_encode(array(8, 17, 21, 40, 56)),
                "row2" => json_encode(array(29, 36, 45, 60, 78)),
                "row3" => json_encode(array(18, 38, 46, 67, 87)),
            ],
            [
                "row1" => json_encode(array(23, 42, 52, 76, 85)),
                "row2" => json_encode(array(3, 15, 29, 53, 67)),
                "row3" => json_encode(array(6, 36, 45, 58, 78)),
            ],
            [
                "row1" => json_encode(array(23, 42, 68, 76, 84)),
                "row2" => json_encode(array(7, 17, 36, 49, 52)),
                "row3" => json_encode(array(8, 19, 24, 78, 86)),
            ],
            [
                "row1" => json_encode(array(1, 37, 44, 55, 60)),
                "row2" => json_encode(array(8, 17, 27, 56, 67)),
                "row3" => json_encode(array(29, 39, 45, 76, 90)),
            ],
            [
                "row1" => json_encode(array(18, 20, 53, 62, 70)),
                "row2" => json_encode(array(8, 35, 66, 72, 82)),
                "row3" => json_encode(array(25, 46, 59, 77, 85)),
            ],
            [
                "row1" => json_encode(array(39, 46, 55, 67, 88)),
                "row2" => json_encode(array(1, 18, 21, 59, 75)),
                "row3" => json_encode(array(2, 25, 47, 69, 78)),
            ],
            [
                "row1" => json_encode(array(11, 34, 57, 65, 79)),
                "row2" => json_encode(array(3, 26, 46, 68, 87)),
                "row3" => json_encode(array(5, 15, 27, 48, 90)),
            ],
            [
                "row1" => json_encode(array(3, 14, 58, 64, 75)),
                "row2" => json_encode(array(8, 16, 20, 79, 85)),
                "row3" => json_encode(array(24, 32, 44, 66, 87)),
            ],
            [
                "row1" => json_encode(array(7, 18, 21, 44, 85)),
                "row2" => json_encode(array(36, 47, 53, 75, 88)),
                "row3" => json_encode(array(19, 27, 55, 64, 76)),
            ],
            [
                "row1" => json_encode(array(15, 45, 56, 69, 83)),
                "row2" => json_encode(array(16, 21, 38, 59, 87)),
                "row3" => json_encode(array(6, 19, 27, 70, 88)),
            ],
            [
                "row1" => json_encode(array(4, 32, 48, 68, 88)),
                "row2" => json_encode(array(9, 26, 35, 58, 78)),
                "row3" => json_encode(array(16, 28, 37, 69, 79)),
            ],
            [
                "row1" => json_encode(array(9, 10, 33, 64, 88)),
                "row2" => json_encode(array(13, 35, 46, 57, 78)),
                "row3" => json_encode(array(15, 25, 39, 47, 89)),
            ],
            [
                "row1" => json_encode(array(12, 26, 31, 57, 65)),
                "row2" => json_encode(array(4, 33, 44, 75, 84)),
                "row3" => json_encode(array(7, 35, 59, 67, 88)),
            ],
            [
                "row1" => json_encode(array(7, 27, 33, 53, 61)),
                "row2" => json_encode(array(10, 29, 59, 62, 73)),
                "row3" => json_encode(array(8, 14, 35, 44, 76)),
            ],
            [
                "row1" => json_encode(array(13, 26, 36, 45, 77)),
                "row2" => json_encode(array(19, 48, 51, 60, 87)),
                "row3" => json_encode(array(5, 29, 39, 49, 59)),
            ],
            [
                "row1" => json_encode(array(11, 48, 58, 65, 83)),
                "row2" => json_encode(array(3, 16, 22, 49, 68)),
                "row3" => json_encode(array(6, 29, 38, 79, 90)),
            ],
            [
                "row1" => json_encode(array(2, 21, 49, 62, 72)),
                "row2" => json_encode(array(14, 24, 35, 55, 78)),
                "row3" => json_encode(array(5, 19, 39, 59, 90)),
            ],
            [
                "row1" => json_encode(array(4, 10, 66, 72, 88)),
                "row2" => json_encode(array(18, 32, 41, 75, 89)),
                "row3" => json_encode(array(8, 19, 22, 57, 69)),
            ],
            [
                "row1" => json_encode(array(8, 19, 33, 43, 83)),
                "row2" => json_encode(array(9, 28, 47, 75, 85)),
                "row3" => json_encode(array(39, 54, 60, 79, 90)),
            ],
            [
                "row1" => json_encode(array(4, 38, 45, 63, 73)),
                "row2" => json_encode(array(9, 12, 23, 54, 87)),
                "row3" => json_encode(array(13, 27, 39, 48, 75)),
            ],
            [
                "row1" => json_encode(array(22, 44, 51, 67, 88)),
                "row2" => json_encode(array(13, 23, 30, 53, 74)),
                "row3" => json_encode(array(29, 45, 58, 78, 89)),
            ],
            [
                "row1" => json_encode(array(18, 30, 63, 75, 85)),
                "row2" => json_encode(array(4, 26, 39, 48, 64)),
                "row3" => json_encode(array(9, 57, 65, 76, 89)),
            ],
            [
                "row1" => json_encode(array(17, 26, 38, 63, 84)),
                "row2" => json_encode(array(8, 40, 68, 71, 85)),
                "row3" => json_encode(array(18, 44, 51, 78, 90)),
            ],
            [
                "row1" => json_encode(array(16, 22, 57, 61, 74)),
                "row2" => json_encode(array(4, 59, 64, 77, 82)),
                "row3" => json_encode(array(5, 27, 33, 44, 87)),
            ],
            [
                "row1" => json_encode(array(4, 15, 35, 41, 53)),
                "row2" => json_encode(array(16, 25, 36, 60, 84)),
                "row3" => json_encode(array(9, 43, 55, 69, 88)),
            ],
            [
                "row1" => json_encode(array(34, 44, 56, 66, 82)),
                "row2" => json_encode(array(2, 14, 21, 46, 72)),
                "row3" => json_encode(array(8, 19, 22, 69, 79)),
            ],
            [
                "row1" => json_encode(array(8, 10, 26, 78, 88)),
                "row2" => json_encode(array(27, 38, 46, 66, 89)),
                "row3" => json_encode(array(9, 18, 29, 47, 52)),
            ],
            [
                "row1" => json_encode(array(9, 10, 41, 55, 87)),
                "row2" => json_encode(array(14, 39, 46, 56, 88)),
                "row3" => json_encode(array(18, 22, 49, 67, 76)),
            ],
            [
                "row1" => json_encode(array(1, 14, 25, 41, 50)),
                "row2" => json_encode(array(17, 26, 49, 57, 64)),
                "row3" => json_encode(array(2, 19, 30, 78, 85)),
            ],
            [
                "row1" => json_encode(array(8, 10, 23, 74, 87)),
                "row2" => json_encode(array(15, 31, 50, 69, 79)),
                "row3" => json_encode(array(9, 24, 36, 41, 52)),
            ],
            [
                "row1" => json_encode(array(1, 11, 45, 73, 84)),
                "row2" => json_encode(array(28, 39, 53, 78, 87)),
                "row3" => json_encode(array(2, 19, 58, 63, 79)),
            ],
            [
                "row1" => json_encode(array(24, 34, 54, 67, 78)),
                "row2" => json_encode(array(14, 39, 56, 79, 80)),
                "row3" => json_encode(array(7, 16, 28, 47, 86)),
            ],
            [
                "row1" => json_encode(array(5, 53, 65, 71, 83)),
                "row2" => json_encode(array(9, 21, 34, 46, 75)),
                "row3" => json_encode(array(11, 25, 58, 79, 85)),
            ],
            [
                "row1" => json_encode(array(8, 25, 42, 78, 83)),
                "row2" => json_encode(array(11, 29, 48, 58, 88)),
                "row3" => json_encode(array(16, 32, 60, 79, 89)),
            ],
            [
                "row1" => json_encode(array(12, 28, 38, 47, 69)),
                "row2" => json_encode(array(1, 15, 56, 74, 88)),
                "row3" => json_encode(array(5, 19, 48, 58, 78)),
            ],
            [
                "row1" => json_encode(array(17, 37, 58, 66, 86)),
                "row2" => json_encode(array(2, 46, 68, 74, 88)),
                "row3" => json_encode(array(4, 18, 25, 48, 79)),
            ],
            [
                "row1" => json_encode(array(17, 29, 36, 58, 85)),
                "row2" => json_encode(array(7, 18, 39, 47, 74)),
                "row3" => json_encode(array(9, 59, 69, 75, 86)),
            ],
            [
                "row1" => json_encode(array(13, 20, 38, 40, 54)),
                "row2" => json_encode(array(16, 24, 68, 70, 83)),
                "row3" => json_encode(array(2, 27, 58, 73, 88)),
            ],
            [
                "row1" => json_encode(array(22, 39, 42, 78, 80)),
                "row2" => json_encode(array(8, 14, 44, 63, 83)),
                "row3" => json_encode(array(19, 26, 57, 68, 90)),
            ],
            [
                "row1" => json_encode(array(6, 33, 60, 79, 83)),
                "row2" => json_encode(array(7, 18, 21, 49, 64)),
                "row3" => json_encode(array(29, 35, 56, 68, 86)),
            ],
            [
                "row1" => json_encode(array(15, 28, 51, 72, 87)),
                "row2" => json_encode(array(1, 29, 40, 62, 78)),
                "row3" => json_encode(array(6, 32, 46, 52, 88)),
            ],
            [
                "row1" => json_encode(array(5, 31, 48, 54, 66)),
                "row2" => json_encode(array(11, 29, 38, 59, 89)),
                "row3" => json_encode(array(9, 18, 49, 68, 73)),
            ],
            [
                "row1" => json_encode(array(4, 29, 35, 48, 60)),
                "row2" => json_encode(array(5, 17, 55, 79, 84)),
                "row3" => json_encode(array(7, 37, 49, 61, 89)),
            ],
            [
                "row1" => json_encode(array(25, 36, 59, 65, 85)),
                "row2" => json_encode(array(1, 19, 29, 42, 74)),
                "row3" => json_encode(array(3, 44, 68, 76, 86)),
            ],
            [
                "row1" => json_encode(array(10, 43, 51, 66, 80)),
                "row2" => json_encode(array(17, 20, 34, 58, 77)),
                "row3" => json_encode(array(2, 24, 38, 49, 90)),
            ],
            [
                "row1" => json_encode(array(6, 35, 50, 63, 86)),
                "row2" => json_encode(array(13, 29, 44, 52, 64)),
                "row3" => json_encode(array(18, 38, 46, 53, 73)),
            ],
            [
                "row1" => json_encode(array(2, 14, 24, 63, 73)),
                "row2" => json_encode(array(39, 47, 52, 77, 84)),
                "row3" => json_encode(array(8, 18, 25, 59, 86)),
            ],
            [
                "row1" => json_encode(array(1, 11, 34, 56, 83)),
                "row2" => json_encode(array(17, 23, 36, 45, 66)),
                "row3" => json_encode(array(9, 26, 57, 70, 85)),
            ],
            [
                "row1" => json_encode(array(12, 46, 50, 72, 82)),
                "row2" => json_encode(array(9, 17, 36, 60, 89)),
                "row3" => json_encode(array(25, 39, 49, 56, 67)),
            ],
            [
                "row1" => json_encode(array(2, 10, 36, 43, 54)),
                "row2" => json_encode(array(7, 19, 39, 59, 62)),
                "row3" => json_encode(array(9, 25, 48, 69, 87)),
            ],
            [
                "row1" => json_encode(array(19, 26, 43, 53, 66)),
                "row2" => json_encode(array(5, 48, 54, 79, 81)),
                "row3" => json_encode(array(9, 27, 34, 67, 85)),
            ],
            [
                "row1" => json_encode(array(3, 20, 31, 66, 70)),
                "row2" => json_encode(array(7, 13, 23, 48, 78)),
                "row3" => json_encode(array(8, 15, 38, 53, 83)),
            ],
            [
                "row1" => json_encode(array(22, 39, 62, 70, 84)),
                "row2" => json_encode(array(15, 25, 58, 64, 77)),
                "row3" => json_encode(array(5, 16, 47, 67, 78)),
            ],
            [
                "row1" => json_encode(array(7, 36, 45, 69, 88)),
                "row2" => json_encode(array(8, 12, 29, 39, 53)),
                "row3" => json_encode(array(9, 14, 47, 59, 74)),
            ],
            [
                "row1" => json_encode(array(24, 43, 56, 79, 82)),
                "row2" => json_encode(array(14, 44, 59, 67, 88)),
                "row3" => json_encode(array(6, 18, 25, 39, 68)),
            ],
            [
                "row1" => json_encode(array(16, 33, 69, 72, 83)),
                "row2" => json_encode(array(1, 17, 36, 75, 85)),
                "row3" => json_encode(array(7, 18, 45, 51, 89)),
            ],
            [
                "row1" => json_encode(array(24, 37, 46, 59, 65)),
                "row2" => json_encode(array(3, 15, 26, 38, 85)),
                "row3" => json_encode(array(4, 16, 27, 69, 79)),
            ],
            [
                "row1" => json_encode(array(5, 17, 29, 64, 71)),
                "row2" => json_encode(array(6, 39, 48, 54, 69)),
                "row3" => json_encode(array(7, 18, 59, 76, 83)),
            ],
            [
                "row1" => json_encode(array(8, 11, 27, 31, 80)),
                "row2" => json_encode(array(18, 29, 52, 66, 87)),
                "row3" => json_encode(array(9, 35, 42, 56, 79)),
            ],
            [
                "row1" => json_encode(array(7, 29, 37, 43, 55)),
                "row2" => json_encode(array(10, 59, 69, 70, 88)),
                "row3" => json_encode(array(8, 11, 38, 45, 72)),
            ],
            [
                "row1" => json_encode(array(3, 28, 36, 52, 80)),
                "row2" => json_encode(array(16, 46, 63, 78, 82)),
                "row3" => json_encode(array(6, 29, 38, 66, 90)),
            ],
            [
                "row1" => json_encode(array(15, 37, 55, 69, 71)),
                "row2" => json_encode(array(4, 20, 38, 72, 80)),
                "row3" => json_encode(array(8, 18, 59, 76, 88)),
            ],
            [
                "row1" => json_encode(array(13, 24, 30, 79, 82)),
                "row2" => json_encode(array(5, 17, 41, 50, 60)),
                "row3" => json_encode(array(25, 39, 45, 54, 84)),
            ],
            [
                "row1" => json_encode(array(30, 44, 52, 65, 88)),
                "row2" => json_encode(array(8, 15, 20, 55, 70)),
                "row3" => json_encode(array(19, 23, 37, 46, 76)),
            ],
            [
                "row1" => json_encode(array(28, 33, 66, 73, 88)),
                "row2" => json_encode(array(3, 39, 51, 69, 77)),
                "row3" => json_encode(array(9, 14, 46, 58, 79)),
            ],
            [
                "row1" => json_encode(array(9, 19, 32, 55, 71)),
                "row2" => json_encode(array(25, 41, 59, 74, 89)),
                "row3" => json_encode(array(28, 34, 44, 67, 75)),
            ],
            [
                "row1" => json_encode(array(6, 19, 41, 59, 81)),
                "row2" => json_encode(array(7, 20, 47, 61, 75)),
                "row3" => json_encode(array(9, 30, 49, 69, 88)),
            ],
            [
                "row1" => json_encode(array(14, 26, 44, 55, 63)),
                "row2" => json_encode(array(7, 16, 48, 69, 73)),
                "row3" => json_encode(array(9, 28, 30, 59, 88)),
            ],
            [
                "row1" => json_encode(array(12, 26, 40, 51, 84)),
                "row2" => json_encode(array(6, 37, 46, 58, 78)),
                "row3" => json_encode(array(14, 39, 64, 79, 85)),
            ],
            [
                "row1" => json_encode(array(25, 31, 48, 58, 85)),
                "row2" => json_encode(array(4, 18, 49, 59, 63)),
                "row3" => json_encode(array(29, 33, 64, 73, 87)),
            ],
            [
                "row1" => json_encode(array(49, 54, 64, 75, 85)),
                "row2" => json_encode(array(8, 12, 22, 36, 66)),
                "row3" => json_encode(array(17, 29, 57, 68, 78)),
            ],
            [
                "row1" => json_encode(array(12, 46, 50, 69, 72)),
                "row2" => json_encode(array(1, 38, 48, 57, 82)),
                "row3" => json_encode(array(2, 20, 39, 58, 73)),
            ],
            [
                "row1" => json_encode(array(1, 15, 32, 55, 77)),
                "row2" => json_encode(array(2, 21, 35, 49, 60)),
                "row3" => json_encode(array(9, 18, 23, 59, 87)),
            ],
            [
                "row1" => json_encode(array(16, 21, 36, 44, 50)),
                "row2" => json_encode(array(3, 39, 58, 63, 76)),
                "row3" => json_encode(array(18, 45, 59, 77, 85)),
            ],
            [
                "row1" => json_encode(array(6, 18, 24, 74, 82)),
                "row2" => json_encode(array(8, 38, 56, 69, 79)),
                "row3" => json_encode(array(19, 26, 40, 59, 88)),
            ],
            [
                "row1" => json_encode(array(19, 39, 57, 62, 73)),
                "row2" => json_encode(array(7, 24, 45, 66, 82)),
                "row3" => json_encode(array(9, 28, 48, 78, 90)),
            ],
            [
                "row1" => json_encode(array(2, 23, 32, 56, 61)),
                "row2" => json_encode(array(25, 40, 58, 74, 83)),
                "row3" => json_encode(array(3, 19, 37, 48, 68)),
            ],
            [
                "row1" => json_encode(array(6, 30, 57, 64, 88)),
                "row2" => json_encode(array(7, 16, 36, 42, 69)),
                "row3" => json_encode(array(9, 26, 39, 77, 90)),
            ],
            [
                "row1" => json_encode(array(9, 21, 33, 50, 88)),
                "row2" => json_encode(array(27, 45, 59, 60, 89)),
                "row3" => json_encode(array(11, 38, 47, 69, 74)),
            ],
            [
                "row1" => json_encode(array(14, 39, 40, 54, 80)),
                "row2" => json_encode(array(1, 42, 69, 74, 89)),
                "row3" => json_encode(array(9, 15, 28, 44, 56)),
            ],
            [
                "row1" => json_encode(array(3, 38, 46, 73, 83)),
                "row2" => json_encode(array(11, 20, 56, 66, 79)),
                "row3" => json_encode(array(8, 15, 23, 39, 48)),
            ],
            [
                "row1" => json_encode(array(19, 36, 45, 59, 65)),
                "row2" => json_encode(array(5, 21, 66, 75, 80)),
                "row3" => json_encode(array(9, 22, 48, 67, 87)),
            ],
            [
                "row1" => json_encode(array(7, 54, 64, 79, 85)),
                "row2" => json_encode(array(17, 24, 36, 43, 67)),
                "row3" => json_encode(array(25, 38, 48, 57, 88)),
            ],
            [
                "row1" => json_encode(array(7, 16, 24, 38, 81)),
                "row2" => json_encode(array(47, 55, 66, 73, 82)),
                "row3" => json_encode(array(18, 28, 58, 79, 89)),
            ],
            [
                "row1" => json_encode(array(7, 15, 55, 64, 80)),
                "row2" => json_encode(array(20, 39, 44, 65, 83)),
                "row3" => json_encode(array(28, 56, 68, 70, 87)),
            ],
            [
                "row1" => json_encode(array(3, 17, 25, 54, 74)),
                "row2" => json_encode(array(29, 33, 46, 78, 83)),
                "row3" => json_encode(array(5, 34, 55, 63, 85)),
            ],
            [
                "row1" => json_encode(array(5, 11, 20, 38, 84)),
                "row2" => json_encode(array(14, 27, 44, 66, 88)),
                "row3" => json_encode(array(8, 16, 58, 68, 75)),
            ],
            [
                "row1" => json_encode(array(7, 12, 30, 51, 71)),
                "row2" => json_encode(array(16, 49, 55, 61, 72)),
                "row3" => json_encode(array(23, 31, 68, 75, 90)),
            ],
            [
                "row1" => json_encode(array(18, 29, 44, 72, 86)),
                "row2" => json_encode(array(3, 34, 50, 69, 76)),
                "row3" => json_encode(array(5, 19, 38, 52, 78)),
            ],
            [
                "row1" => json_encode(array(6, 23, 36, 42, 55)),
                "row2" => json_encode(array(15, 48, 58, 75, 84)),
                "row3" => json_encode(array(9, 39, 49, 69, 88)),
            ],
            [
                "row1" => json_encode(array(18, 20, 61, 79, 87)),
                "row2" => json_encode(array(22, 33, 41, 53, 69)),
                "row3" => json_encode(array(3, 26, 35, 45, 59)),
            ],
            [
                "row1" => json_encode(array(1, 15, 28, 48, 76)),
                "row2" => json_encode(array(7, 17, 33, 49, 81)),
                "row3" => json_encode(array(19, 36, 61, 78, 82)),
            ],
            [
                "row1" => json_encode(array(7, 18, 61, 74, 83)),
                "row2" => json_encode(array(24, 49, 59, 75, 84)),
                "row3" => json_encode(array(28, 35, 64, 78, 90)),
            ],
            [
                "row1" => json_encode(array(15, 24, 44, 52, 84)),
                "row2" => json_encode(array(1, 26, 63, 72, 86)),
                "row3" => json_encode(array(18, 31, 59, 65, 73)),
            ],
            [
                "row1" => json_encode(array(3, 12, 34, 56, 85)),
                "row2" => json_encode(array(19, 24, 47, 58, 62)),
                "row3" => json_encode(array(35, 59, 65, 76, 86)),
            ],
            [
                "row1" => json_encode(array(12, 23, 35, 67, 78)),
                "row2" => json_encode(array(16, 27, 45, 54, 87)),
                "row3" => json_encode(array(6, 48, 58, 79, 89)),
            ],
            [
                "row1" => json_encode(array(8, 15, 33, 50, 68)),
                "row2" => json_encode(array(16, 27, 40, 74, 88)),
                "row3" => json_encode(array(17, 38, 46, 53, 79)),
            ],
            [
                "row1" => json_encode(array(27, 31, 42, 66, 72)),
                "row2" => json_encode(array(1, 43, 69, 77, 84)),
                "row3" => json_encode(array(7, 11, 32, 55, 78)),
            ],
            [
                "row1" => json_encode(array(26, 32, 65, 78, 80)),
                "row2" => json_encode(array(4, 27, 33, 59, 81)),
                "row3" => json_encode(array(6, 36, 44, 79, 85)),
            ],
            [
                "row1" => json_encode(array(8, 18, 21, 41, 71)),
                "row2" => json_encode(array(28, 37, 68, 77, 85)),
                "row3" => json_encode(array(29, 39, 44, 50, 89)),
            ],
            [
                "row1" => json_encode(array(2, 29, 34, 67, 80)),
                "row2" => json_encode(array(13, 36, 48, 72, 89)),
                "row3" => json_encode(array(3, 14, 39, 56, 78)),
            ],
            [
                "row1" => json_encode(array(4, 25, 40, 54, 71)),
                "row2" => json_encode(array(5, 30, 55, 74, 80)),
                "row3" => json_encode(array(26, 34, 47, 63, 85)),
            ],
            [
                "row1" => json_encode(array(30, 43, 69, 78, 84)),
                "row2" => json_encode(array(9, 18, 46, 53, 89)),
                "row3" => json_encode(array(25, 36, 47, 57, 90)),
            ],
            [
                "row1" => json_encode(array(3, 19, 45, 65, 73)),
                "row2" => json_encode(array(9, 32, 48, 55, 81)),
                "row3" => json_encode(array(37, 58, 68, 79, 84)),
            ],
            [
                "row1" => json_encode(array(23, 39, 44, 54, 83)),
                "row2" => json_encode(array(7, 19, 46, 60, 78)),
                "row3" => json_encode(array(27, 49, 57, 64, 84)),
            ],
            [
                "row1" => json_encode(array(4, 24, 39, 44, 67)),
                "row2" => json_encode(array(6, 13, 54, 79, 87)),
                "row3" => json_encode(array(7, 17, 28, 45, 90)),
            ],
            [
                "row1" => json_encode(array(15, 27, 51, 77, 83)),
                "row2" => json_encode(array(28, 41, 57, 78, 88)),
                "row3" => json_encode(array(5, 36, 43, 66, 90)),
            ],
            [
                "row1" => json_encode(array(4, 23, 33, 47, 66)),
                "row2" => json_encode(array(18, 26, 55, 68, 82)),
                "row3" => json_encode(array(28, 39, 48, 77, 88)),
            ],
            [
                "row1" => json_encode(array(8, 29, 35, 51, 77)),
                "row2" => json_encode(array(13, 36, 53, 60, 83)),
                "row3" => json_encode(array(38, 41, 54, 68, 88)),
            ],
            [
                "row1" => json_encode(array(23, 40, 53, 66, 71)),
                "row2" => json_encode(array(8, 15, 26, 32, 87)),
                "row3" => json_encode(array(48, 57, 68, 73, 89)),
            ],
            [
                "row1" => json_encode(array(12, 27, 31, 55, 81)),
                "row2" => json_encode(array(36, 44, 62, 76, 86)),
                "row3" => json_encode(array(6, 16, 29, 57, 66)),
            ],
            [
                "row1" => json_encode(array(29, 39, 59, 68, 87)),
                "row2" => json_encode(array(6, 16, 41, 69, 76)),
                "row3" => json_encode(array(8, 19, 44, 78, 88)),
            ],
            [
                "row1" => json_encode(array(6, 19, 43, 61, 83)),
                "row2" => json_encode(array(7, 35, 51, 78, 85)),
                "row3" => json_encode(array(29, 47, 55, 63, 87)),
            ],
            [
                "row1" => json_encode(array(6, 27, 38, 60, 85)),
                "row2" => json_encode(array(7, 45, 58, 63, 89)),
                "row3" => json_encode(array(18, 28, 47, 67, 71)),
            ],
            [
                "row1" => json_encode(array(3, 28, 37, 49, 52)),
                "row2" => json_encode(array(4, 16, 55, 67, 85)),
                "row3" => json_encode(array(7, 29, 56, 69, 73)),
            ],
            [
                "row1" => json_encode(array(19, 25, 41, 52, 65)),
                "row2" => json_encode(array(6, 29, 39, 55, 75)),
                "row3" => json_encode(array(7, 48, 58, 66, 84)),
            ],
            [
                "row1" => json_encode(array(18, 24, 34, 62, 87)),
                "row2" => json_encode(array(9, 39, 45, 52, 68)),
                "row3" => json_encode(array(19, 29, 46, 59, 79)),
            ],
            [
                "row1" => json_encode(array(15, 39, 58, 76, 82)),
                "row2" => json_encode(array(9, 18, 21, 43, 62)),
                "row3" => json_encode(array(23, 45, 69, 77, 90)),
            ],
            [
                "row1" => json_encode(array(11, 41, 62, 74, 81)),
                "row2" => json_encode(array(8, 16, 37, 47, 68)),
                "row3" => json_encode(array(29, 39, 48, 59, 90)),
            ],
            [
                "row1" => json_encode(array(15, 27, 34, 41, 74)),
                "row2" => json_encode(array(1, 38, 46, 58, 61)),
                "row3" => json_encode(array(5, 28, 66, 76, 89)),
            ],
            [
                "row1" => json_encode(array(1, 13, 46, 62, 87)),
                "row2" => json_encode(array(25, 48, 56, 65, 77)),
                "row3" => json_encode(array(4, 15, 27, 35, 49)),
            ],
            [
                "row1" => json_encode(array(8, 43, 50, 62, 75)),
                "row2" => json_encode(array(19, 35, 44, 79, 81)),
                "row3" => json_encode(array(23, 48, 57, 67, 82)),
            ],
            [
                "row1" => json_encode(array(2, 37, 41, 64, 82)),
                "row2" => json_encode(array(4, 25, 47, 58, 71)),
                "row3" => json_encode(array(5, 16, 38, 75, 86)),
            ],
            [
                "row1" => json_encode(array(11, 36, 48, 63, 75)),
                "row2" => json_encode(array(17, 20, 57, 66, 87)),
                "row3" => json_encode(array(9, 19, 23, 58, 77)),
            ],
            [
                "row1" => json_encode(array(19, 23, 34, 43, 66)),
                "row2" => json_encode(array(8, 28, 51, 76, 88)),
                "row3" => json_encode(array(9, 35, 47, 52, 90)),
            ],
            [
                "row1" => json_encode(array(6, 20, 34, 64, 88)),
                "row2" => json_encode(array(23, 40, 50, 65, 74)),
                "row3" => json_encode(array(9, 13, 28, 39, 75)),
            ],
            [
                "row1" => json_encode(array(15, 43, 58, 61, 76)),
                "row2" => json_encode(array(9, 18, 27, 31, 67)),
                "row3" => json_encode(array(28, 32, 45, 68, 84)),
            ],
            [
                "row1" => json_encode(array(24, 30, 46, 60, 78)),
                "row2" => json_encode(array(9, 27, 33, 65, 86)),
                "row3" => json_encode(array(11, 28, 36, 55, 87)),
            ],
            [
                "row1" => json_encode(array(34, 40, 53, 79, 82)),
                "row2" => json_encode(array(11, 38, 44, 56, 62)),
                "row3" => json_encode(array(16, 22, 45, 65, 90)),
            ],
            [
                "row1" => json_encode(array(21, 30, 56, 75, 84)),
                "row2" => json_encode(array(19, 48, 58, 77, 89)),
                "row3" => json_encode(array(4, 26, 31, 67, 79)),
            ],
            [
                "row1" => json_encode(array(19, 29, 30, 75, 88)),
                "row2" => json_encode(array(5, 35, 56, 66, 78)),
                "row3" => json_encode(array(8, 37, 49, 58, 68)),
            ],
            [
                "row1" => json_encode(array(8, 25, 49, 69, 84)),
                "row2" => json_encode(array(16, 34, 54, 73, 87)),
                "row3" => json_encode(array(17, 28, 57, 75, 89)),
            ],
            [
                "row1" => json_encode(array(6, 12, 33, 55, 80)),
                "row2" => json_encode(array(13, 23, 35, 62, 83)),
                "row3" => json_encode(array(37, 48, 56, 67, 89)),
            ],
            [
                "row1" => json_encode(array(29, 50, 62, 76, 82)),
                "row2" => json_encode(array(14, 32, 45, 51, 88)),
                "row3" => json_encode(array(4, 15, 48, 58, 77)),
            ],
            [
                "row1" => json_encode(array(12, 39, 43, 69, 82)),
                "row2" => json_encode(array(16, 20, 45, 59, 70)),
                "row3" => json_encode(array(3, 21, 47, 72, 87)),
            ],
            [
                "row1" => json_encode(array(1, 14, 48, 69, 71)),
                "row2" => json_encode(array(18, 22, 33, 59, 88)),
                "row3" => json_encode(array(7, 19, 23, 39, 73)),
            ],
            [
                "row1" => json_encode(array(3, 13, 50, 66, 71)),
                "row2" => json_encode(array(9, 33, 59, 75, 88)),
                "row3" => json_encode(array(27, 34, 45, 67, 79)),
            ],
            [
                "row1" => json_encode(array(2, 44, 50, 73, 85)),
                "row2" => json_encode(array(7, 22, 38, 48, 67)),
                "row3" => json_encode(array(29, 49, 68, 79, 89)),
            ],
            [
                "row1" => json_encode(array(6, 29, 32, 54, 70)),
                "row2" => json_encode(array(10, 39, 42, 78, 89)),
                "row3" => json_encode(array(17, 47, 57, 60, 90)),
            ],
            [
                "row1" => json_encode(array(8, 27, 48, 59, 81)),
                "row2" => json_encode(array(14, 37, 49, 75, 86)),
                "row3" => json_encode(array(9, 38, 63, 76, 87)),
            ],
            [
                "row1" => json_encode(array(2, 31, 46, 52, 65)),
                "row2" => json_encode(array(13, 37, 49, 58, 84)),
                "row3" => json_encode(array(8, 18, 22, 71, 90)),
            ],
            [
                "row1" => json_encode(array(17, 32, 48, 65, 86)),
                "row2" => json_encode(array(8, 23, 53, 75, 87)),
                "row3" => json_encode(array(27, 36, 57, 68, 78)),
            ],
            [
                "row1" => json_encode(array(7, 13, 23, 54, 63)),
                "row2" => json_encode(array(26, 38, 44, 56, 71)),
                "row3" => json_encode(array(28, 48, 59, 67, 74)),
            ],
            [
                "row1" => json_encode(array(7, 37, 48, 55, 77)),
                "row2" => json_encode(array(16, 23, 39, 60, 85)),
                "row3" => json_encode(array(9, 28, 56, 64, 88)),
            ],
            [
                "row1" => json_encode(array(7, 14, 21, 61, 72)),
                "row2" => json_encode(array(18, 25, 42, 55, 77)),
                "row3" => json_encode(array(28, 32, 56, 64, 80)),
            ],
            [
                "row1" => json_encode(array(18, 28, 37, 68, 79)),
                "row2" => json_encode(array(9, 45, 50, 69, 86)),
                "row3" => json_encode(array(29, 38, 49, 55, 87)),
            ],
            [
                "row1" => json_encode(array(3, 18, 25, 54, 87)),
                "row2" => json_encode(array(6, 33, 57, 66, 77)),
                "row3" => json_encode(array(36, 43, 59, 78, 89)),
            ],
            [
                "row1" => json_encode(array(29, 44, 54, 77, 81)),
                "row2" => json_encode(array(4, 15, 37, 65, 87)),
                "row3" => json_encode(array(16, 58, 66, 79, 88)),
            ],
            [
                "row1" => json_encode(array(27, 46, 65, 78, 83)),
                "row2" => json_encode(array(7, 17, 33, 59, 69)),
                "row3" => json_encode(array(9, 19, 37, 47, 89)),
            ],
            [
                "row1" => json_encode(array(39, 55, 65, 78, 83)),
                "row2" => json_encode(array(8, 24, 48, 68, 79)),
                "row3" => json_encode(array(9, 15, 27, 49, 57)),
            ],
            [
                "row1" => json_encode(array(9, 20, 41, 67, 76)),
                "row2" => json_encode(array(15, 49, 54, 69, 83)),
                "row3" => json_encode(array(17, 21, 31, 55, 77)),
            ],
            [
                "row1" => json_encode(array(28, 39, 48, 67, 75)),
                "row2" => json_encode(array(8, 12, 29, 53, 87)),
                "row3" => json_encode(array(17, 49, 57, 78, 90)),
            ],
            [
                "row1" => json_encode(array(18, 37, 41, 50, 78)),
                "row2" => json_encode(array(5, 45, 57, 67, 80)),
                "row3" => json_encode(array(9, 38, 48, 68, 86)),
            ],
            [
                "row1" => json_encode(array(7, 21, 42, 67, 87)),
                "row2" => json_encode(array(16, 26, 30, 47, 79)),
                "row3" => json_encode(array(29, 35, 49, 58, 90)),
            ],
            [
                "row1" => json_encode(array(9, 24, 37, 63, 72)),
                "row2" => json_encode(array(19, 48, 51, 77, 82)),
                "row3" => json_encode(array(28, 39, 52, 79, 84)),
            ],
            [
                "row1" => json_encode(array(25, 39, 53, 77, 88)),
                "row2" => json_encode(array(3, 27, 49, 57, 68)),
                "row3" => json_encode(array(9, 15, 29, 58, 78)),
            ],
            [
                "row1" => json_encode(array(13, 24, 39, 53, 69)),
                "row2" => json_encode(array(1, 26, 47, 56, 80)),
                "row3" => json_encode(array(7, 29, 49, 79, 82)),
            ],
            [
                "row1" => json_encode(array(10, 29, 37, 56, 67)),
                "row2" => json_encode(array(6, 39, 41, 58, 86)),
                "row3" => json_encode(array(15, 45, 69, 73, 87)),
            ],
            [
                "row1" => json_encode(array(22, 34, 42, 78, 88)),
                "row2" => json_encode(array(4, 15, 35, 49, 51)),
                "row3" => json_encode(array(5, 28, 52, 63, 90)),
            ],
            [
                "row1" => json_encode(array(26, 34, 59, 76, 85)),
                "row2" => json_encode(array(2, 15, 38, 48, 68)),
                "row3" => json_encode(array(7, 19, 29, 69, 78)),
            ],
            [
                "row1" => json_encode(array(20, 30, 55, 63, 83)),
                "row2" => json_encode(array(4, 35, 49, 70, 88)),
                "row3" => json_encode(array(14, 27, 58, 79, 90)),
            ],
            [
                "row1" => json_encode(array(11, 21, 40, 60, 73)),
                "row2" => json_encode(array(1, 15, 26, 66, 80)),
                "row3" => json_encode(array(2, 47, 53, 67, 78)),
            ],
            [
                "row1" => json_encode(array(4, 18, 59, 73, 83)),
                "row2" => json_encode(array(27, 30, 44, 61, 85)),
                "row3" => json_encode(array(9, 19, 31, 77, 86)),
            ],
            [
                "row1" => json_encode(array(9, 20, 30, 65, 78)),
                "row2" => json_encode(array(21, 38, 49, 66, 80)),
                "row3" => json_encode(array(11, 22, 53, 68, 84)),
            ],
            [
                "row1" => json_encode(array(5, 22, 45, 57, 85)),
                "row2" => json_encode(array(10, 25, 35, 59, 89)),
                "row3" => json_encode(array(26, 36, 60, 76, 90)),
            ],
            [
                "row1" => json_encode(array(31, 44, 60, 72, 85)),
                "row2" => json_encode(array(16, 20, 36, 64, 89)),
                "row3" => json_encode(array(22, 57, 68, 73, 90)),
            ],
            [
                "row1" => json_encode(array(1, 14, 31, 44, 53)),
                "row2" => json_encode(array(7, 16, 24, 39, 85)),
                "row3" => json_encode(array(29, 56, 63, 77, 87)),
            ],
            [
                "row1" => json_encode(array(3, 13, 43, 54, 70)),
                "row2" => json_encode(array(4, 23, 38, 44, 60)),
                "row3" => json_encode(array(26, 39, 55, 62, 84)),
            ],
            [
                "row1" => json_encode(array(1, 23, 65, 78, 84)),
                "row2" => json_encode(array(4, 16, 26, 45, 55)),
                "row3" => json_encode(array(9, 17, 34, 49, 87)),
            ],
            [
                "row1" => json_encode(array(30, 47, 54, 66, 84)),
                "row2" => json_encode(array(16, 29, 37, 57, 87)),
                "row3" => json_encode(array(3, 17, 39, 59, 75)),
            ],
            [
                "row1" => json_encode(array(4, 31, 45, 60, 76)),
                "row2" => json_encode(array(19, 33, 52, 67, 85)),
                "row3" => json_encode(array(6, 21, 47, 55, 90)),
            ],
            [
                "row1" => json_encode(array(8, 18, 21, 36, 87)),
                "row2" => json_encode(array(22, 41, 57, 60, 77)),
                "row3" => json_encode(array(38, 49, 68, 79, 88)),
            ],
            [
                "row1" => json_encode(array(7, 18, 24, 58, 67)),
                "row2" => json_encode(array(27, 30, 46, 69, 75)),
                "row3" => json_encode(array(8, 33, 49, 77, 85)),
            ],
            [
                "row1" => json_encode(array(9, 23, 33, 47, 66)),
                "row2" => json_encode(array(12, 39, 53, 74, 83)),
                "row3" => json_encode(array(17, 59, 69, 77, 90)),
            ],
            [
                "row1" => json_encode(array(17, 38, 43, 63, 78)),
                "row2" => json_encode(array(8, 46, 59, 69, 80)),
                "row3" => json_encode(array(9, 18, 24, 79, 88)),
            ],
            [
                "row1" => json_encode(array(9, 17, 21, 68, 82)),
                "row2" => json_encode(array(29, 39, 40, 55, 85)),
                "row3" => json_encode(array(46, 58, 69, 70, 88)),
            ],
            [
                "row1" => json_encode(array(2, 21, 32, 55, 85)),
                "row2" => json_encode(array(6, 29, 39, 45, 78)),
                "row3" => json_encode(array(9, 15, 58, 64, 89)),
            ],
            [
                "row1" => json_encode(array(14, 39, 42, 54, 79)),
                "row2" => json_encode(array(7, 16, 20, 43, 67)),
                "row3" => json_encode(array(23, 45, 58, 68, 84)),
            ],
            [
                "row1" => json_encode(array(9, 13, 21, 77, 80)),
                "row2" => json_encode(array(23, 30, 50, 67, 82)),
                "row3" => json_encode(array(27, 38, 44, 69, 90)),
            ],
            [
                "row1" => json_encode(array(9, 17, 27, 72, 88)),
                "row2" => json_encode(array(32, 41, 54, 67, 77)),
                "row3" => json_encode(array(38, 49, 58, 78, 90)),
            ]
        ]);
    }
}
