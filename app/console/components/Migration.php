<?php
/**
 * Migration class file
 *
 * @author Sebastian Krein <sebastian@itstrategen.de>
 */

namespace console\components;

/**
 * Class Migration
 */
class Migration extends \yii\db\Migration
{
    protected $tableOptions = null;

    public function init()
    {
        parent::init();
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $this->tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
    }

    /**
     * Add a foreign key and build the name based on tables and columns automatically.
     *
     *
     * @param string       $table      the table that the foreign key constraint will be added to.
     * @param string|array $columns    the name of the column to that the constraint will be added on. If there are multiple columns, separate them with commas or use an array.
     * @param string       $refTable   the table that the foreign key references to.
     * @param string|array $refColumns the name of the column that the foreign key references to. If there are multiple columns, separate them with commas or use an array.
     * @param string       $delete     the ON DELETE option. Most DBMS support these options: RESTRICT, CASCADE, NO ACTION, SET DEFAULT, SET NULL
     * @param string       $update     the ON UPDATE option. Most DBMS support these options: RESTRICT, CASCADE, NO ACTION, SET DEFAULT, SET NULL
     *
     * @see buildForeignKeyName for full documentation
     */
    public function addForeignKeyAutoName($table, $columns, $refTable, $refColumns, $delete = null, $update = null)
    {
        parent::addForeignKey(
            self::buildForeignKeyName($table, $columns, $refTable, $refColumns),
            $table,
            $columns,
            $refTable,
            $refColumns,
            $delete,
            $update
        );
    }

    /**
     * Builds foreign key name in the following schema:
     * FK__<table>-<column>-<nextColumn>__<refTable>-<refColumn>-<nextRefColumn>
     *
     * @param $table
     * @param $columns
     * @param $refTable
     * @param $refColumns
     *
     * @return string
     */
    public static function buildForeignKeyName($table, $columns, $refTable, $refColumns)
    {
        $columns    = [$columns];
        $refColumns = [$refColumns];

        return sprintf('FK__%s-%s__%s-%s', $table, implode('-', $columns), $refTable, implode('-', $refColumns));
    }

    /**
     * Add a foreign key and build the name based on tables and columns automatically.
     *
     *
     * @param string       $table   the table that the foreign key constraint will be added to.
     * @param string|array $columns the name of the column to that the constraint will be added on. If there are multiple columns, separate them with commas or use an array.
     * @param bool         $unique  the table that the foreign key references to.
     *
     * @see buildForeignKeyName for full documentation
     */
    public function createIndexAutoName($table, $columns, $unique = false)
    {
        parent::createIndex(
            self::buildIndexName($table, $columns),
            $table,
            $columns,
            $unique
        );
    }

    /**
     * Builds index name in the following schema:
     * IX<table>-<column>-<nextColumn>
     *
     * @param $table
     * @param $columns
     *
     * @return string
     */
    public static function buildIndexName($table, $columns)
    {
        $columns = (array) $columns;

        return sprintf('IX__%s-%s', $table, implode('-', $columns));
    }
}