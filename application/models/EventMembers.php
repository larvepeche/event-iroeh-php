<?php
class EventMembers extends CI_Model
{

    private $ID;
    private $lastName;
    private $firstName;
    private $email;
    private $age;
    private $phone;
    private $gender;
    private $evState;
    private $tableName = "event_members";

    /**
     * Get the value of lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get the value of firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of age
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     *
     * @return  self
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    public function getId()
    {
        return $this->ID;
    }

    public function setId($ID)
    {
        $this->ID = $ID;
        return $this;
    }

    /**
     * Get the value of gender
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set the value of gender
     *
     * @return  self
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get the value of evState
     */
    public function getEvState()
    {
        return $this->evState;
    }

    /**
     * Set the value of evState
     *
     * @return  self
     */
    public function setEvState($evState)
    {
        $this->evState = $evState;

        return $this;
    }



    public function __construct()
    {
        parent::__construct();
        $this->evState = 1;
    }

    public function set($lastName, $firstName, $email, $age, $phone, $gender)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->email = $email;
        $this->age = $age;
        $this->phone = $phone;
        $this->gender = $gender;
    }

    public function insert()
    {
        $data = array(
            'lastname' => $this->lastName,
            'firstname' => $this->firstName,
            'email' => $this->email,
            'age' => $this->age,
            'phone' => $this->phone,
            'gender' => $this->gender
        );
        $this->db->insert($this->tableName, $data);
        $id_cours = $this->db->insert_id();
        return $id_cours;
    }


    public function select($email)
    {
        return $this->db->get_where($this->tableName, $email)->result();
    }
}
