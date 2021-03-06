<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1beta1/query.proto

namespace Google\Cloud\Firestore\V1beta1;

use Google\Cloud\Firestore\V1beta1\StructuredQuery\CollectionSelector;
use Google\Cloud\Firestore\V1beta1\StructuredQuery\Filter;
use Google\Cloud\Firestore\V1beta1\StructuredQuery\Order;
use Google\Cloud\Firestore\V1beta1\StructuredQuery\Projection;
use Google\Protobuf\Int32Value;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\Message;
use Google\Protobuf\Internal\RepeatedField;
use GPBMetadata\Google\Firestore\V1Beta1\Query;

/**
 * A Firestore query.
 *
 * Generated from protobuf message <code>google.firestore.v1beta1.StructuredQuery</code>
 */
class StructuredQuery extends Message
{
    /**
     * The projection to return.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.StructuredQuery.Projection select = 1;</code>
     */
    private $select = null;
    /**
     * The collections to query.
     *
     * Generated from protobuf field <code>repeated .google.firestore.v1beta1.StructuredQuery.CollectionSelector from = 2;</code>
     */
    private $from;
    /**
     * The filter to apply.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.StructuredQuery.Filter where = 3;</code>
     */
    private $where = null;
    /**
     * The order to apply to the query results.
     * Firestore guarantees a stable ordering through the following rules:
     *  * Any field required to appear in `order_by`, that is not already
     *    specified in `order_by`, is appended to the order in field name order
     *    by default.
     *  * If an order on `__name__` is not specified, it is appended by default.
     * Fields are appended with the same sort direction as the last order
     * specified, or 'ASCENDING' if no order was specified. For example:
     *  * `SELECT * FROM Foo ORDER BY A` becomes
     *    `SELECT * FROM Foo ORDER BY A, __name__`
     *  * `SELECT * FROM Foo ORDER BY A DESC` becomes
     *    `SELECT * FROM Foo ORDER BY A DESC, __name__ DESC`
     *  * `SELECT * FROM Foo WHERE A > 1` becomes
     *    `SELECT * FROM Foo WHERE A > 1 ORDER BY A, __name__`
     *
     * Generated from protobuf field <code>repeated .google.firestore.v1beta1.StructuredQuery.Order order_by = 4;</code>
     */
    private $order_by;
    /**
     * A starting point for the query results.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.Cursor start_at = 7;</code>
     */
    private $start_at = null;
    /**
     * A end point for the query results.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.Cursor end_at = 8;</code>
     */
    private $end_at = null;
    /**
     * The number of results to skip.
     * Applies before limit, but after all other constraints. Must be >= 0 if
     * specified.
     *
     * Generated from protobuf field <code>int32 offset = 6;</code>
     */
    private $offset = 0;
    /**
     * The maximum number of results to return.
     * Applies after all other constraints.
     * Must be >= 0 if specified.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value limit = 5;</code>
     */
    private $limit = null;

    /**
     * Constructor.
     *
     * @param array                                                                                 $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type Projection                         $select
     *           The projection to return.
     *     @type CollectionSelector[]|RepeatedField $from
     *           The collections to query.
     *     @type Filter                             $where
     *           The filter to apply.
     *     @type Order[]|RepeatedField                                                              $order_by
     *           The order to apply to the query results.
     *           Firestore guarantees a stable ordering through the following rules:
     *            * Any field required to appear in `order_by`, that is not already
     *              specified in `order_by`, is appended to the order in field name order
     *              by default.
     *            * If an order on `__name__` is not specified, it is appended by default.
     *           Fields are appended with the same sort direction as the last order
     *           specified, or 'ASCENDING' if no order was specified. For example:
     *            * `SELECT * FROM Foo ORDER BY A` becomes
     *              `SELECT * FROM Foo ORDER BY A, __name__`
     *            * `SELECT * FROM Foo ORDER BY A DESC` becomes
     *              `SELECT * FROM Foo ORDER BY A DESC, __name__ DESC`
     *            * `SELECT * FROM Foo WHERE A > 1` becomes
     *              `SELECT * FROM Foo WHERE A > 1 ORDER BY A, __name__`
     *     @type Cursor     $start_at
     *           A starting point for the query results.
     *     @type Cursor     $end_at
     *           A end point for the query results.
     *     @type int        $offset
     *           The number of results to skip.
     *           Applies before limit, but after all other constraints. Must be >= 0 if
     *           specified.
     *     @type Int32Value $limit
     *           The maximum number of results to return.
     *           Applies after all other constraints.
     *           Must be >= 0 if specified.
     * }
     */
    public function __construct($data = NULL) {
        Query::initOnce();
        parent::__construct($data);
    }

    /**
     * The projection to return.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.StructuredQuery.Projection select = 1;</code>
     * @return Projection
     */
    public function getSelect()
    {
        return $this->select;
    }

    /**
     * The projection to return.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.StructuredQuery.Projection select = 1;</code>
     * @param Projection $var
     * @return $this
     */
    public function setSelect($var)
    {
        GPBUtil::checkMessage($var, StructuredQuery_Projection::class);
        $this->select = $var;

        return $this;
    }

    /**
     * The collections to query.
     *
     * Generated from protobuf field <code>repeated .google.firestore.v1beta1.StructuredQuery.CollectionSelector from = 2;</code>
     *
     * @return RepeatedField
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * The collections to query.
     *
     * Generated from protobuf field <code>repeated .google.firestore.v1beta1.StructuredQuery.CollectionSelector from = 2;</code>
     *
     * @param CollectionSelector[]|RepeatedField $var
     * @return $this
     */
    public function setFrom($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, CollectionSelector::class);
        $this->from = $arr;

        return $this;
    }

    /**
     * The filter to apply.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.StructuredQuery.Filter where = 3;</code>
     * @return Filter
     */
    public function getWhere()
    {
        return $this->where;
    }

    /**
     * The filter to apply.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.StructuredQuery.Filter where = 3;</code>
     * @param Filter $var
     * @return $this
     */
    public function setWhere($var)
    {
        GPBUtil::checkMessage($var, StructuredQuery_Filter::class);
        $this->where = $var;

        return $this;
    }

    /**
     * The order to apply to the query results.
     * Firestore guarantees a stable ordering through the following rules:
     *  * Any field required to appear in `order_by`, that is not already
     *    specified in `order_by`, is appended to the order in field name order
     *    by default.
     *  * If an order on `__name__` is not specified, it is appended by default.
     * Fields are appended with the same sort direction as the last order
     * specified, or 'ASCENDING' if no order was specified. For example:
     *  * `SELECT * FROM Foo ORDER BY A` becomes
     *    `SELECT * FROM Foo ORDER BY A, __name__`
     *  * `SELECT * FROM Foo ORDER BY A DESC` becomes
     *    `SELECT * FROM Foo ORDER BY A DESC, __name__ DESC`
     *  * `SELECT * FROM Foo WHERE A > 1` becomes
     *    `SELECT * FROM Foo WHERE A > 1 ORDER BY A, __name__`
     *
     * Generated from protobuf field <code>repeated .google.firestore.v1beta1.StructuredQuery.Order order_by = 4;</code>
     *
     * @return RepeatedField
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * The order to apply to the query results.
     * Firestore guarantees a stable ordering through the following rules:
     *  * Any field required to appear in `order_by`, that is not already
     *    specified in `order_by`, is appended to the order in field name order
     *    by default.
     *  * If an order on `__name__` is not specified, it is appended by default.
     * Fields are appended with the same sort direction as the last order
     * specified, or 'ASCENDING' if no order was specified. For example:
     *  * `SELECT * FROM Foo ORDER BY A` becomes
     *    `SELECT * FROM Foo ORDER BY A, __name__`
     *  * `SELECT * FROM Foo ORDER BY A DESC` becomes
     *    `SELECT * FROM Foo ORDER BY A DESC, __name__ DESC`
     *  * `SELECT * FROM Foo WHERE A > 1` becomes
     *    `SELECT * FROM Foo WHERE A > 1 ORDER BY A, __name__`
     *
     * Generated from protobuf field <code>repeated .google.firestore.v1beta1.StructuredQuery.Order order_by = 4;</code>
     *
     * @param Order[]|RepeatedField $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, Order::class);
        $this->order_by = $arr;

        return $this;
    }

    /**
     * A starting point for the query results.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.Cursor start_at = 7;</code>
     *
     * @return Cursor
     */
    public function getStartAt()
    {
        return $this->start_at;
    }

    /**
     * A starting point for the query results.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.Cursor start_at = 7;</code>
     *
     * @param Cursor $var
     * @return $this
     */
    public function setStartAt($var)
    {
        GPBUtil::checkMessage($var, Cursor::class);
        $this->start_at = $var;

        return $this;
    }

    /**
     * A end point for the query results.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.Cursor end_at = 8;</code>
     *
     * @return Cursor
     */
    public function getEndAt()
    {
        return $this->end_at;
    }

    /**
     * A end point for the query results.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.Cursor end_at = 8;</code>
     *
     * @param Cursor $var
     * @return $this
     */
    public function setEndAt($var)
    {
        GPBUtil::checkMessage($var, Cursor::class);
        $this->end_at = $var;

        return $this;
    }

    /**
     * The number of results to skip.
     * Applies before limit, but after all other constraints. Must be >= 0 if
     * specified.
     *
     * Generated from protobuf field <code>int32 offset = 6;</code>
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * The number of results to skip.
     * Applies before limit, but after all other constraints. Must be >= 0 if
     * specified.
     *
     * Generated from protobuf field <code>int32 offset = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setOffset($var)
    {
        GPBUtil::checkInt32($var);
        $this->offset = $var;

        return $this;
    }

    /**
     * The maximum number of results to return.
     * Applies after all other constraints.
     * Must be >= 0 if specified.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value limit = 5;</code>
     * @return Int32Value
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * The maximum number of results to return.
     * Applies after all other constraints.
     * Must be >= 0 if specified.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value limit = 5;</code>
     * @param Int32Value $var
     * @return $this
     */
    public function setLimit($var)
    {
        GPBUtil::checkMessage($var, Int32Value::class);
        $this->limit = $var;

        return $this;
    }

    /**
     * Returns the unboxed value from <code>getLimit()</code>

     * The maximum number of results to return.
     * Applies after all other constraints.
     * Must be >= 0 if specified.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value limit = 5;</code>
     * @return int|null
     */
    public function getLimitValue()
    {
        return $this->readWrapperValue("limit");
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int32Value object.

     * The maximum number of results to return.
     * Applies after all other constraints.
     * Must be >= 0 if specified.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value limit = 5;</code>
     * @param int|null $var
     * @return $this
     */
    public function setLimitValue($var)
    {
        $this->writeWrapperValue("limit", $var);
        return $this;}

}

