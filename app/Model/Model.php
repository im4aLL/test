<?php

namespace App\Model;

use App\Library\Database;
use Carbon\Carbon;

class Model
{
    /**
     * Database class instance
     * 
     * @var instance
     */
    protected $db;
    
    /**
     * Table name
     * 
     * @var string
     */
    protected $table;
    
    /**
     * Global framework object
     * 
     * @var object 
     */
    public $f3;
    
    
    /**
     * Constructor
     * 
     * @param type object
     */
    public function __construct($f3)
    {
        $this->f3 = $f3;
        $this->db = new Database();
        
        $this->db->connect($this->f3->get('config.database'));
    }
    
    /**
     * Get all records from a table
     * 
     * @return array
     */
    public function all()
    {
        return $this->db->query('SELECT * FROM '.$this->table.' ORDER by created_at DESC')->get();
    }

    /**
     * Get a single record
     *
     * @param $id
     * @return null
     */
    public function get($id)
    {
        return $this->db->table($this->table)->select(['condition' => 'WHERE id = '.$id])->first();
    }

    /**
     * Save data into table
     *
     * @param $data
     * @return array
     */
    public function add($data)
    {
        if(count($data) == 0) {
            return false;
        }

        return $this->db->table($this->table)->insert(array_merge($data, $this->getTimestamps()));
    }

    /**
     * Update a record
     *
     * @param $data
     * @param $condition
     * @return array|bool
     */
    public function update($data, $condition)
    {
        if(count($data) == 0) {
            return false;
        }

        return $this->db->table($this->table)->update(array_merge($data, $this->getTimestamps(true)), $condition);
    }

    /**
     * Delete a record
     *
     * @param $condition
     * @return array|bool
     */
    public function delete($condition)
    {
        if(count($condition) == 0) {
            return false;
        }

        return $this->db->table($this->table)->delete($condition);
    }

    /**
     * Set created_at and updated_at
     *
     * @param bool|false $update
     * @return array
     */
    protected function getTimestamps($update = false)
    {
        $timestamps = [];

        if(!$update) {
            $timestamps['created_at'] = Carbon::now();
            $timestamps['updated_at'] = Carbon::now();
        }
        else {
            $timestamps['updated_at'] = Carbon::now();
        }

        return $timestamps;
    }
}
