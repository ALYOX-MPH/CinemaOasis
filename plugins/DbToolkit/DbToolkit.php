<?php

namespace Plugins\DbToolkit;

class DbToolkit
{
    protected $connection;

    /**
     * Constructor
     * 
     * @param array $params
     * @return void
     */
    public function initConnection()
    {
        $host = $_ENV['DB_HOST'];
        $dbname = $_ENV['DB_NAME'];
        $user = $_ENV['DB_USER'];
        $password = $_ENV['DB_PASSWORD'];
        $port = $_ENV['DB_PORT'];

        $this->connection = mysqli_connect($host, $user, $password, $dbname, $port);

        if (!$this->connection) {
            die("Error de conexión: " . mysqli_connect_error());
        }
        
        mysqli_set_charset($this->connection, "utf8");
    }

    /**
     * Escapes a value for use in a query
     * 
     * @return void
     */
    public function escape($value)
    {
        if (is_string($value)) {
            return mysqli_real_escape_string($this->connection, $value);
        }
        return $value; // No es necesario escapar números u otros tipos
    }

    /**
     * Ejecuta una consulta SQL
     * 
     * @param string $sql
     * @param array $params
     * @return array
     */
    public function query($sql, $params = [])
    {
        $stmt = mysqli_prepare($this->connection, $sql);
        if (!$stmt) {
            die("Error en la preparación de la consulta: " . mysqli_error($this->connection));
        }

        if (!empty($params)) {
            $types = str_repeat('s', count($params));
            mysqli_stmt_bind_param($stmt, $types, ...$params);
        }

        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        mysqli_stmt_close($stmt);

        return $rows;
    }

    /**
     * Ejecuta una consulta SQL y devuelve el número de filas afectadas
     * 
     * @param string $sql
     * @param array $params
     * @return int
     */
    public function execute($sql, $params = [])
    {
        $stmt = mysqli_prepare($this->connection, $sql);
        if (!$stmt) {
            die("Error en la preparación de la consulta: " . mysqli_error($this->connection));
        }

        if (!empty($params)) {
            $types = str_repeat('s', count($params));
            mysqli_stmt_bind_param($stmt, $types, ...$params);
        }

        $success = mysqli_stmt_execute($stmt);

        mysqli_stmt_close($stmt);

        return $success;
    }

    /**
     * Ejecuta una consulta SQL y devuelve el número de filas afectadas
     * 
     * @param string $table
     * @param array $data (Es un array porque al final $Post[] es un array)
     * @return int
     */
    public function insert($table, $data)
    {
        $columns = array_keys($data);
        $params = array_values($data);
        $placeholders = str_repeat('?,', count($columns) - 1) . '?';
        $sql = "INSERT INTO $table (" . implode(', ', $columns) . ") 
                    VALUES ($placeholders)";
        return $this->execute($sql, $params);
    }

    /**
     * Ejecuta una consulta SQL y devuelve el número de filas afectadas
     * 
     * @param string $sql
     * @param array $params
     * @return int
     */
    public function update($table, $data, $where)
    {
        $columns = array_keys($data);
        $params = array_values($data);

        $setClause = implode(' = ?, ', $columns) . ' = ?';

        $whereClause = [];
        $whereParams = [];
        foreach ($where as $key => $value) {
            $whereClause[] = "$key = ?";
            $whereParams[] = $value;
        }
        $whereString = implode(' AND ', $whereClause);

        $sql = "UPDATE $table SET $setClause WHERE $whereString";

        $params = array_merge($params, $whereParams);

        return $this->execute($sql, $params);
    }

    /*
     * Ejecuta una consulta SQL y devuelve el número de filas afectadas
     * 
     * @param string $sql
     * @param array $params
     * @return int
     */
    public function delete($table, $where)
    {
        $sql = "DELETE FROM $table WHERE $where";
        return $this->execute($sql);
    }

    /**
     * Devuelve el número de filas afectadas
     * 
     * @param string $sql
     * @param array $params
     * @return int
     */
    public function lastInsertId()
    {
        return mysqli_insert_id($this->connection);
    }

    /**
     * Devuelve el número de filas afectadas
     * 
     * @param string $sql
     * @param array $params
     * @return int
     */
    public function beginTransaction()
    {
        return mysqli_begin_transaction($this->connection);
    }

    /**
     * Commits the current transaction
     * 
     * @return bool
     */
    public function commit()
    {
        return mysqli_commit($this->connection);
    }

    /**
     * Rolls back the current transaction
     * 
     * @return bool
     */
    public function rollBack()
    {
        return mysqli_rollback($this->connection);
    }

    /**
     * Closes the connection
     * 
     * @return void
     */
    public function close()
    {
        mysqli_close($this->connection);
    }
}