<?php


namespace App\Enums;

enum UserStatus: string
{
    case STAFF = 'staff';
    case STUDENT = 'student';
    case SU = "super_user";
    case OS = "Office Superintendent";
    case HOD = "Head of Department";
    case PRINCIPAL = "Principal";
    case DEAN = "Dean";
}
