/**
 * Class DB
 */
class DB
{
    static function getInstance($db_name)
    {
        return $db_name;
    }
}

/**
 * Class DaoDataBaseAbstract
 */
abstract class DaoDataBaseAbstract
{
    protected $_connection;
    protected $_primaryKey;
    protected $_tableName;

    /**
     * DaoDataBaseAbstract constructor.
     * @param DB $connection
     */
    public function __construct(DB $connection)
    {
        $this->_connection = $connection;
    }

    public function find($value, $key = NULL)
    {
        if (is_null($key)) {
            $key = $this->_primaryKey;
        }
        return $this->_connection->fetch(sprintf("SELECT * FROM %s WHERE %s = '%s'", $this->_tableName, $this->_primaryKey, $value));
    }

    public function findAll($value, $key = NULL)
    {
        //..
    }

    public function insert($assocArray)
    {
        //..
    }

    public function update($assocArray)
    {
        //..
    }

    public function delete($key = NULL)
    {
        //..
    }
}

/**
 * Class DaoProduct
 */
class DaoProduct extends DaoDataBaseAbstract
{
    protected $_tableName = "users";

    public function findByName($name)
    {
        return $this->find($name, 'name');
    }
}
