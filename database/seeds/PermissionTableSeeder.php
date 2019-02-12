<?php


use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;


class PermissionTableSeeder extends Seeder

{

    /**

     * Run the database seeds.

     *

     * @return void

     */

    public function run()

    {

       $permissions = [

           'role-list',

           'role-create',

           'role-edit',

           'role-delete',

           'Account-list',

           'Account-create',

           'Account-edit',

           'Account-delete',
		   
		       'Comission-list',

           'Comission-create',

           'Comission-edit',

           'Comission-delete',
		   
		       'Customer-list',

           'Customer-create',

           'Customer-edit',

           'Customer-delete',
		   
		       'Expense-list',

           'Expense-create',

           'Expense-edit',

           'Expense-delete',
		   
		       'Invoice-list',

           'Invoice-create',

           'Invoice-edit',

           'Invoice-delete',
		   
		       'Lead-list',

           'Lead-create',

           'Lead-edit',

           'Lead-delete',
		   
		       'Order-list',

           'Order-create',

           'Order-edit',

           'Order-delete',
		   
		       'Project-list',

           'Project-create',

           'Project-edit',

           'Project-delete',
		   
		       'Proposal-list',

           'Proposal-create',

           'Proposal-edit',

           'Proposal-delete',
		   
		       'Task-list',

           'Task-create',

           'Task-edit',

           'Task-delete',
		   
		       'Ticket-list',

           'Ticket-create',

           'Ticket-edit',

           'Ticket-delete',

           'Product-list',

           'Product-create',

           'Product-edit',

           'Product-delete',

           'Report-list',

           'Report-create',

           'Report-edit',

           'Report-delete',

           'Message-list',

           'Message-create',

           'Message-edit',

           'Message-delete'


        ];


        foreach ($permissions as $permission) {

             Permission::create(['name' => $permission]);

        }

    }

}