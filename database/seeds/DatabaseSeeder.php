<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // $this->newAccessWork();
        //$this->newAccessBudget();
        $this->permission();
    }


    function newAccessWork(){

    		DB::table('permissions')->insert([

            [  'id' => '200', 'name' => 'work-edit' , 'guard_name' => 'web'  ],
            [  'id' => '201', 'name' => 'work-delete' , 'guard_name' => 'web'  ],
            [  'id' => '202', 'name' => 'work-add' , 'guard_name' => 'web'  ],
            [  'id' => '203', 'name' => 'work-index' , 'guard_name' => 'web'  ],
    
        	]);

    		
    }

      function newAccessBudget(){

    		DB::table('permissions')->insert([

            [  'id' => '300', 'name' => 'budget-edit' , 'guard_name' => 'web'  ],
            [  'id' => '301', 'name' => 'budget-delete' , 'guard_name' => 'web'  ],
            [  'id' => '302', 'name' => 'budget-add' , 'guard_name' => 'web'  ],
            [  'id' => '303', 'name' => 'budget-index' , 'guard_name' => 'web'  ],
            
        ]);


	
	
    }


    function permission(){

    	 	DB::table('role_has_permissions')->insert([

        [  'permission_id' => 300, 'role_id' => 1 ],
        [  'permission_id' => 301, 'role_id' => 1 ],
        [  'permission_id' => 302, 'role_id' => 1 ],
        [  'permission_id' => 303, 'role_id' => 1 ],
      

    	]);


        	DB::table('role_has_permissions')->insert([

            [  'permission_id' => 200, 'role_id' => 1 ],
            [  'permission_id' => 201, 'role_id' => 1 ],
            [  'permission_id' => 202, 'role_id' => 1 ],
            [  'permission_id' => 203, 'role_id' => 1 ],
          
    
        	]);

    }

    function permissionSpatie(){ 

    	const ROL_ID = 1; //User Admin 

    }
}
