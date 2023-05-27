<?php
namespace App\Exports;

use App\Teacher;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TeachersExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Teacher::query()
        ->join('users', 'teachers.user_id', '=', 'users.id')
        ->select('teachers.user_id', 'users.name', 'teachers.gender', 'teachers.phone', 'teachers.dateofbirth', 'teachers.current_address')->get();
    }

    public function headings(): array
    {
        return [
            'id',
            'Nama',
            'gender',
            'No.HP',
            'TTL',
            'Alamat',
            // 'permanent_address',
        ];
    }
}
