<?php

namespace App\Enums;


enum CasteCategories: string
{
    case CAT_I = 'Category-I';
    case CAT_IIA = 'Category-II(A)';
    case CAT_IIIA = 'Category-III(A)';
    case CAT_IIIB = 'Category-III(B)';
    case CAT_SC = 'Schedule Caste';
    case CAT_ST = 'Schedule Tribe';
    case General = 'General';
}
