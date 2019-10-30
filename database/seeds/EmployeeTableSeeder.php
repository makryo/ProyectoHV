<?php

use Illuminate\Database\Seeder;
use App\Employee;
class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employee = new Employee();

        $employee->fullname = "Kevin Cortez";
        $employee->cellphone = "96251734";
        $employee->email = "kev45@gmail.com";
        $employee->address = "concepcion las minas";
        $employee->area = "recepcion";
        $employee->fech_init = "12/05/2017";
        $employee->salario = "salario";
    }
}
