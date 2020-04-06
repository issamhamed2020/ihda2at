<?php

use Illuminate\Database\Seeder;
use App\Company;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $company = new Company;
        $company->name = "إدارة المحتوى";
        $company->save();

        $user = new User;
        $user->name = "أدمن إدارة المحتوى";
        $user->company_id = $company->id;
        $user->email = "admin@admin.com";
        $user->password = bcrypt("admin");
        $user->save();
    }
}
