<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $user = new User([
            "first_name" => $row['first_name'],
            "last_name" => $row['last_name'],
            "email" => $row['email'],
            "mobile_number" => $row['mobile_number'],
            "address"=> $row['address'],
            "gender"=> $row['gender'],
            "hostel"=> $row['hostel'],
            "room_no"=> $row['room_no'],
            "bed_no"=> $row['bed_no'],
            "faculty"=> $row['faculty'],
            "digree_programme"=> $row['digree_programme'],
            "role_id" => 2, // User Type User
            "status" => 1,
            "password" => Hash::make('password')
        ]);

        // Delete Any Existing Role
        DB::table('model_has_roles')->where('model_id',$user->id)->delete();
            
        // Assign Role To User
        $user->assignRole($user->role_id);

        return $user;
    }
}
