
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    //Declaring attributest of the model class


	protected $table = "Person";
	protected $primaryKey = "PersonID";

	

	protected $dateFormat = 'U';

	//This is used when customizing the names of the columns that would be used to store date of the table
	const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';


    //You can change the connection name for this particular model 
    //protected $connection = 'connection-name';
}
