<?php

class Employee
{
    /**
     * Employee's unique id
     * @var int $id
     */
public $id;
    /**
     * Employee's surname
     * @var string $surname
     */
 
public $surname;
/**
* Hashed als salted password * @var string $password
*/
    public $password;
    
}



class Machine {
    /**
     * Machine's unique id
* @var int $id
*/
public $id;
    /**
     * Machine's title
     * @var string $title
     */
    public $title;



/**
* assigns the machine to the given employee (checks the machine out)
* @param Employee $employee the employee who wants to check out the machine
*/
public function checkout(Employee $employee) : void { 
    $assign_machine = "INSERT INTO TblEmployeesMachines (EmployeeId, MachineId, Action)
    VALUES ($employee->id, $id, 1)";
}
/**
* Indicates that no employee has taken the machine with them * and that the employee put the machine back to the warehouse */
public function back_to_warehouse() : void {
    $back_machine = "UPDATE TblEmployeesMachines SET Action=2";
}

}

function allResource($employee_name) {

    $employee_id = "SELECT * FROM TblEmployees WHERE Surname = $employee_name";

    $get_resources = "SELECT * FROM TblEmployeesMachines WHERE EmployeeId = $employee_id";
    $result = $connect_db->query($get_resources);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo "id: " . $row["id"]. " - Machine Id: " . $row["MachineId"]. " " . $row["MachineId"];
        }
}

}

allResource('Sandy');