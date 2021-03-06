<?php


abstract class BaseCdrPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'cdr';

	
	const CLASS_DEFAULT = 'lib.model.Cdr';

	
	const NUM_COLUMNS = 34;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const CALLDATE = 'cdr.CALLDATE';

	
	const CLID = 'cdr.CLID';

	
	const SRC = 'cdr.SRC';

	
	const DST = 'cdr.DST';

	
	const DCONTEXT = 'cdr.DCONTEXT';

	
	const CHANNEL = 'cdr.CHANNEL';

	
	const DSTCHANNEL = 'cdr.DSTCHANNEL';

	
	const LASTAPP = 'cdr.LASTAPP';

	
	const LASTDATA = 'cdr.LASTDATA';

	
	const DURATION = 'cdr.DURATION';

	
	const BILLSEC = 'cdr.BILLSEC';

	
	const DISPOSITION = 'cdr.DISPOSITION';

	
	const AMAFLAGS = 'cdr.AMAFLAGS';

	
	const ACCOUNTCODE = 'cdr.ACCOUNTCODE';

	
	const UNIQUEID = 'cdr.UNIQUEID';

	
	const USERFIELD = 'cdr.USERFIELD';

	
	const DESTINATION_TYPE = 'cdr.DESTINATION_TYPE';

	
	const AR_ASTERISK_ACCOUNT_ID = 'cdr.AR_ASTERISK_ACCOUNT_ID';

	
	const INCOME_AR_RATE_ID = 'cdr.INCOME_AR_RATE_ID';

	
	const INCOME = 'cdr.INCOME';

	
	const COST_AR_RATE_ID = 'cdr.COST_AR_RATE_ID';

	
	const VENDOR_ID = 'cdr.VENDOR_ID';

	
	const COST = 'cdr.COST';

	
	const AR_TELEPHONE_PREFIX_ID = 'cdr.AR_TELEPHONE_PREFIX_ID';

	
	const CACHED_INTERNAL_TELEPHONE_NUMBER = 'cdr.CACHED_INTERNAL_TELEPHONE_NUMBER';

	
	const CACHED_EXTERNAL_TELEPHONE_NUMBER = 'cdr.CACHED_EXTERNAL_TELEPHONE_NUMBER';

	
	const EXTERNAL_TELEPHONE_NUMBER_WITH_APPLIED_PORTABILITY = 'cdr.EXTERNAL_TELEPHONE_NUMBER_WITH_APPLIED_PORTABILITY';

	
	const CACHED_MASKED_EXTERNAL_TELEPHONE_NUMBER = 'cdr.CACHED_MASKED_EXTERNAL_TELEPHONE_NUMBER';

	
	const SOURCE_ID = 'cdr.SOURCE_ID';

	
	const SOURCE_COST = 'cdr.SOURCE_COST';

	
	const IS_EXPORTED = 'cdr.IS_EXPORTED';

	
	const SOURCE_DATA_TYPE = 'cdr.SOURCE_DATA_TYPE';

	
	const SOURCE_DATA = 'cdr.SOURCE_DATA';

	
	const ID = 'cdr.ID';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Calldate', 'Clid', 'Src', 'Dst', 'Dcontext', 'Channel', 'Dstchannel', 'Lastapp', 'Lastdata', 'Duration', 'Billsec', 'Disposition', 'Amaflags', 'Accountcode', 'Uniqueid', 'Userfield', 'DestinationType', 'ArAsteriskAccountId', 'IncomeArRateId', 'Income', 'CostArRateId', 'VendorId', 'Cost', 'ArTelephonePrefixId', 'CachedInternalTelephoneNumber', 'CachedExternalTelephoneNumber', 'ExternalTelephoneNumberWithAppliedPortability', 'CachedMaskedExternalTelephoneNumber', 'SourceId', 'SourceCost', 'IsExported', 'SourceDataType', 'SourceData', 'Id', ),
		BasePeer::TYPE_COLNAME => array (CdrPeer::CALLDATE, CdrPeer::CLID, CdrPeer::SRC, CdrPeer::DST, CdrPeer::DCONTEXT, CdrPeer::CHANNEL, CdrPeer::DSTCHANNEL, CdrPeer::LASTAPP, CdrPeer::LASTDATA, CdrPeer::DURATION, CdrPeer::BILLSEC, CdrPeer::DISPOSITION, CdrPeer::AMAFLAGS, CdrPeer::ACCOUNTCODE, CdrPeer::UNIQUEID, CdrPeer::USERFIELD, CdrPeer::DESTINATION_TYPE, CdrPeer::AR_ASTERISK_ACCOUNT_ID, CdrPeer::INCOME_AR_RATE_ID, CdrPeer::INCOME, CdrPeer::COST_AR_RATE_ID, CdrPeer::VENDOR_ID, CdrPeer::COST, CdrPeer::AR_TELEPHONE_PREFIX_ID, CdrPeer::CACHED_INTERNAL_TELEPHONE_NUMBER, CdrPeer::CACHED_EXTERNAL_TELEPHONE_NUMBER, CdrPeer::EXTERNAL_TELEPHONE_NUMBER_WITH_APPLIED_PORTABILITY, CdrPeer::CACHED_MASKED_EXTERNAL_TELEPHONE_NUMBER, CdrPeer::SOURCE_ID, CdrPeer::SOURCE_COST, CdrPeer::IS_EXPORTED, CdrPeer::SOURCE_DATA_TYPE, CdrPeer::SOURCE_DATA, CdrPeer::ID, ),
		BasePeer::TYPE_FIELDNAME => array ('calldate', 'clid', 'src', 'dst', 'dcontext', 'channel', 'dstchannel', 'lastapp', 'lastdata', 'duration', 'billsec', 'disposition', 'amaflags', 'accountcode', 'uniqueid', 'userfield', 'destination_type', 'ar_asterisk_account_id', 'income_ar_rate_id', 'income', 'cost_ar_rate_id', 'vendor_id', 'cost', 'ar_telephone_prefix_id', 'cached_internal_telephone_number', 'cached_external_telephone_number', 'external_telephone_number_with_applied_portability', 'cached_masked_external_telephone_number', 'source_id', 'source_cost', 'is_exported', 'source_data_type', 'source_data', 'id', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Calldate' => 0, 'Clid' => 1, 'Src' => 2, 'Dst' => 3, 'Dcontext' => 4, 'Channel' => 5, 'Dstchannel' => 6, 'Lastapp' => 7, 'Lastdata' => 8, 'Duration' => 9, 'Billsec' => 10, 'Disposition' => 11, 'Amaflags' => 12, 'Accountcode' => 13, 'Uniqueid' => 14, 'Userfield' => 15, 'DestinationType' => 16, 'ArAsteriskAccountId' => 17, 'IncomeArRateId' => 18, 'Income' => 19, 'CostArRateId' => 20, 'VendorId' => 21, 'Cost' => 22, 'ArTelephonePrefixId' => 23, 'CachedInternalTelephoneNumber' => 24, 'CachedExternalTelephoneNumber' => 25, 'ExternalTelephoneNumberWithAppliedPortability' => 26, 'CachedMaskedExternalTelephoneNumber' => 27, 'SourceId' => 28, 'SourceCost' => 29, 'IsExported' => 30, 'SourceDataType' => 31, 'SourceData' => 32, 'Id' => 33, ),
		BasePeer::TYPE_COLNAME => array (CdrPeer::CALLDATE => 0, CdrPeer::CLID => 1, CdrPeer::SRC => 2, CdrPeer::DST => 3, CdrPeer::DCONTEXT => 4, CdrPeer::CHANNEL => 5, CdrPeer::DSTCHANNEL => 6, CdrPeer::LASTAPP => 7, CdrPeer::LASTDATA => 8, CdrPeer::DURATION => 9, CdrPeer::BILLSEC => 10, CdrPeer::DISPOSITION => 11, CdrPeer::AMAFLAGS => 12, CdrPeer::ACCOUNTCODE => 13, CdrPeer::UNIQUEID => 14, CdrPeer::USERFIELD => 15, CdrPeer::DESTINATION_TYPE => 16, CdrPeer::AR_ASTERISK_ACCOUNT_ID => 17, CdrPeer::INCOME_AR_RATE_ID => 18, CdrPeer::INCOME => 19, CdrPeer::COST_AR_RATE_ID => 20, CdrPeer::VENDOR_ID => 21, CdrPeer::COST => 22, CdrPeer::AR_TELEPHONE_PREFIX_ID => 23, CdrPeer::CACHED_INTERNAL_TELEPHONE_NUMBER => 24, CdrPeer::CACHED_EXTERNAL_TELEPHONE_NUMBER => 25, CdrPeer::EXTERNAL_TELEPHONE_NUMBER_WITH_APPLIED_PORTABILITY => 26, CdrPeer::CACHED_MASKED_EXTERNAL_TELEPHONE_NUMBER => 27, CdrPeer::SOURCE_ID => 28, CdrPeer::SOURCE_COST => 29, CdrPeer::IS_EXPORTED => 30, CdrPeer::SOURCE_DATA_TYPE => 31, CdrPeer::SOURCE_DATA => 32, CdrPeer::ID => 33, ),
		BasePeer::TYPE_FIELDNAME => array ('calldate' => 0, 'clid' => 1, 'src' => 2, 'dst' => 3, 'dcontext' => 4, 'channel' => 5, 'dstchannel' => 6, 'lastapp' => 7, 'lastdata' => 8, 'duration' => 9, 'billsec' => 10, 'disposition' => 11, 'amaflags' => 12, 'accountcode' => 13, 'uniqueid' => 14, 'userfield' => 15, 'destination_type' => 16, 'ar_asterisk_account_id' => 17, 'income_ar_rate_id' => 18, 'income' => 19, 'cost_ar_rate_id' => 20, 'vendor_id' => 21, 'cost' => 22, 'ar_telephone_prefix_id' => 23, 'cached_internal_telephone_number' => 24, 'cached_external_telephone_number' => 25, 'external_telephone_number_with_applied_portability' => 26, 'cached_masked_external_telephone_number' => 27, 'source_id' => 28, 'source_cost' => 29, 'is_exported' => 30, 'source_data_type' => 31, 'source_data' => 32, 'id' => 33, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, )
	);

	
	public static function getMapBuilder()
	{
		include_once 'lib/model/map/CdrMapBuilder.php';
		return BasePeer::getMapBuilder('lib.model.map.CdrMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = CdrPeer::getTableMap();
			$columns = $map->getColumns();
			$nameMap = array();
			foreach ($columns as $column) {
				$nameMap[$column->getPhpName()] = $column->getColumnName();
			}
			self::$phpNameMap = $nameMap;
		}
		return self::$phpNameMap;
	}
	
	static public function translateFieldName($name, $fromType, $toType)
	{
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
		if ($key === null) {
			throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
		}
		return $toNames[$key];
	}

	

	static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
	{
		if (!array_key_exists($type, self::$fieldNames)) {
			throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants TYPE_PHPNAME, TYPE_COLNAME, TYPE_FIELDNAME, TYPE_NUM. ' . $type . ' was given.');
		}
		return self::$fieldNames[$type];
	}

	
	public static function alias($alias, $column)
	{
		return str_replace(CdrPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(CdrPeer::CALLDATE);

		$criteria->addSelectColumn(CdrPeer::CLID);

		$criteria->addSelectColumn(CdrPeer::SRC);

		$criteria->addSelectColumn(CdrPeer::DST);

		$criteria->addSelectColumn(CdrPeer::DCONTEXT);

		$criteria->addSelectColumn(CdrPeer::CHANNEL);

		$criteria->addSelectColumn(CdrPeer::DSTCHANNEL);

		$criteria->addSelectColumn(CdrPeer::LASTAPP);

		$criteria->addSelectColumn(CdrPeer::LASTDATA);

		$criteria->addSelectColumn(CdrPeer::DURATION);

		$criteria->addSelectColumn(CdrPeer::BILLSEC);

		$criteria->addSelectColumn(CdrPeer::DISPOSITION);

		$criteria->addSelectColumn(CdrPeer::AMAFLAGS);

		$criteria->addSelectColumn(CdrPeer::ACCOUNTCODE);

		$criteria->addSelectColumn(CdrPeer::UNIQUEID);

		$criteria->addSelectColumn(CdrPeer::USERFIELD);

		$criteria->addSelectColumn(CdrPeer::DESTINATION_TYPE);

		$criteria->addSelectColumn(CdrPeer::AR_ASTERISK_ACCOUNT_ID);

		$criteria->addSelectColumn(CdrPeer::INCOME_AR_RATE_ID);

		$criteria->addSelectColumn(CdrPeer::INCOME);

		$criteria->addSelectColumn(CdrPeer::COST_AR_RATE_ID);

		$criteria->addSelectColumn(CdrPeer::VENDOR_ID);

		$criteria->addSelectColumn(CdrPeer::COST);

		$criteria->addSelectColumn(CdrPeer::AR_TELEPHONE_PREFIX_ID);

		$criteria->addSelectColumn(CdrPeer::CACHED_INTERNAL_TELEPHONE_NUMBER);

		$criteria->addSelectColumn(CdrPeer::CACHED_EXTERNAL_TELEPHONE_NUMBER);

		$criteria->addSelectColumn(CdrPeer::EXTERNAL_TELEPHONE_NUMBER_WITH_APPLIED_PORTABILITY);

		$criteria->addSelectColumn(CdrPeer::CACHED_MASKED_EXTERNAL_TELEPHONE_NUMBER);

		$criteria->addSelectColumn(CdrPeer::SOURCE_ID);

		$criteria->addSelectColumn(CdrPeer::SOURCE_COST);

		$criteria->addSelectColumn(CdrPeer::IS_EXPORTED);

		$criteria->addSelectColumn(CdrPeer::SOURCE_DATA_TYPE);

		$criteria->addSelectColumn(CdrPeer::SOURCE_DATA);

		$criteria->addSelectColumn(CdrPeer::ID);

	}

	const COUNT = 'COUNT(cdr.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT cdr.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(CdrPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(CdrPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = CdrPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}
	
	public static function doSelectOne(Criteria $criteria, $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = CdrPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return CdrPeer::populateObjects(CdrPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			CdrPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = CdrPeer::getOMClass();
		$cls = Propel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinArAsteriskAccount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(CdrPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(CdrPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(CdrPeer::AR_ASTERISK_ACCOUNT_ID, ArAsteriskAccountPeer::ID);

		$rs = CdrPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinArTelephonePrefix(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(CdrPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(CdrPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(CdrPeer::AR_TELEPHONE_PREFIX_ID, ArTelephonePrefixPeer::ID);

		$rs = CdrPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinArRateRelatedByIncomeArRateId(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(CdrPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(CdrPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(CdrPeer::INCOME_AR_RATE_ID, ArRatePeer::ID);

		$rs = CdrPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinArRateRelatedByCostArRateId(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(CdrPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(CdrPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(CdrPeer::COST_AR_RATE_ID, ArRatePeer::ID);

		$rs = CdrPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinArAsteriskAccount(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		CdrPeer::addSelectColumns($c);
		$startcol = (CdrPeer::NUM_COLUMNS - CdrPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		ArAsteriskAccountPeer::addSelectColumns($c);

		$c->addJoin(CdrPeer::AR_ASTERISK_ACCOUNT_ID, ArAsteriskAccountPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = CdrPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = ArAsteriskAccountPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getArAsteriskAccount(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addCdr($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initCdrs();
				$obj2->addCdr($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinArTelephonePrefix(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		CdrPeer::addSelectColumns($c);
		$startcol = (CdrPeer::NUM_COLUMNS - CdrPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		ArTelephonePrefixPeer::addSelectColumns($c);

		$c->addJoin(CdrPeer::AR_TELEPHONE_PREFIX_ID, ArTelephonePrefixPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = CdrPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = ArTelephonePrefixPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getArTelephonePrefix(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addCdr($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initCdrs();
				$obj2->addCdr($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinArRateRelatedByIncomeArRateId(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		CdrPeer::addSelectColumns($c);
		$startcol = (CdrPeer::NUM_COLUMNS - CdrPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		ArRatePeer::addSelectColumns($c);

		$c->addJoin(CdrPeer::INCOME_AR_RATE_ID, ArRatePeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = CdrPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = ArRatePeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getArRateRelatedByIncomeArRateId(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addCdrRelatedByIncomeArRateId($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initCdrsRelatedByIncomeArRateId();
				$obj2->addCdrRelatedByIncomeArRateId($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinArRateRelatedByCostArRateId(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		CdrPeer::addSelectColumns($c);
		$startcol = (CdrPeer::NUM_COLUMNS - CdrPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		ArRatePeer::addSelectColumns($c);

		$c->addJoin(CdrPeer::COST_AR_RATE_ID, ArRatePeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = CdrPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = ArRatePeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getArRateRelatedByCostArRateId(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addCdrRelatedByCostArRateId($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initCdrsRelatedByCostArRateId();
				$obj2->addCdrRelatedByCostArRateId($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(CdrPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(CdrPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(CdrPeer::AR_ASTERISK_ACCOUNT_ID, ArAsteriskAccountPeer::ID);

		$criteria->addJoin(CdrPeer::AR_TELEPHONE_PREFIX_ID, ArTelephonePrefixPeer::ID);

		$criteria->addJoin(CdrPeer::INCOME_AR_RATE_ID, ArRatePeer::ID);

		$criteria->addJoin(CdrPeer::COST_AR_RATE_ID, ArRatePeer::ID);

		$rs = CdrPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinAll(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		CdrPeer::addSelectColumns($c);
		$startcol2 = (CdrPeer::NUM_COLUMNS - CdrPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		ArAsteriskAccountPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + ArAsteriskAccountPeer::NUM_COLUMNS;

		ArTelephonePrefixPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + ArTelephonePrefixPeer::NUM_COLUMNS;

		ArRatePeer::addSelectColumns($c);
		$startcol5 = $startcol4 + ArRatePeer::NUM_COLUMNS;

		ArRatePeer::addSelectColumns($c);
		$startcol6 = $startcol5 + ArRatePeer::NUM_COLUMNS;

		$c->addJoin(CdrPeer::AR_ASTERISK_ACCOUNT_ID, ArAsteriskAccountPeer::ID);

		$c->addJoin(CdrPeer::AR_TELEPHONE_PREFIX_ID, ArTelephonePrefixPeer::ID);

		$c->addJoin(CdrPeer::INCOME_AR_RATE_ID, ArRatePeer::ID);

		$c->addJoin(CdrPeer::COST_AR_RATE_ID, ArRatePeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = CdrPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


					
			$omClass = ArAsteriskAccountPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getArAsteriskAccount(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addCdr($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initCdrs();
				$obj2->addCdr($obj1);
			}


					
			$omClass = ArTelephonePrefixPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3 = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getArTelephonePrefix(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addCdr($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj3->initCdrs();
				$obj3->addCdr($obj1);
			}


					
			$omClass = ArRatePeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4 = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getArRateRelatedByIncomeArRateId(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addCdrRelatedByIncomeArRateId($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj4->initCdrsRelatedByIncomeArRateId();
				$obj4->addCdrRelatedByIncomeArRateId($obj1);
			}


					
			$omClass = ArRatePeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj5 = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getArRateRelatedByCostArRateId(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addCdrRelatedByCostArRateId($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj5->initCdrsRelatedByCostArRateId();
				$obj5->addCdrRelatedByCostArRateId($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAllExceptArAsteriskAccount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(CdrPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(CdrPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(CdrPeer::AR_TELEPHONE_PREFIX_ID, ArTelephonePrefixPeer::ID);

		$criteria->addJoin(CdrPeer::INCOME_AR_RATE_ID, ArRatePeer::ID);

		$criteria->addJoin(CdrPeer::COST_AR_RATE_ID, ArRatePeer::ID);

		$rs = CdrPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptArTelephonePrefix(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(CdrPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(CdrPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(CdrPeer::AR_ASTERISK_ACCOUNT_ID, ArAsteriskAccountPeer::ID);

		$criteria->addJoin(CdrPeer::INCOME_AR_RATE_ID, ArRatePeer::ID);

		$criteria->addJoin(CdrPeer::COST_AR_RATE_ID, ArRatePeer::ID);

		$rs = CdrPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptArRateRelatedByIncomeArRateId(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(CdrPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(CdrPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(CdrPeer::AR_ASTERISK_ACCOUNT_ID, ArAsteriskAccountPeer::ID);

		$criteria->addJoin(CdrPeer::AR_TELEPHONE_PREFIX_ID, ArTelephonePrefixPeer::ID);

		$rs = CdrPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptArRateRelatedByCostArRateId(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(CdrPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(CdrPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(CdrPeer::AR_ASTERISK_ACCOUNT_ID, ArAsteriskAccountPeer::ID);

		$criteria->addJoin(CdrPeer::AR_TELEPHONE_PREFIX_ID, ArTelephonePrefixPeer::ID);

		$rs = CdrPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinAllExceptArAsteriskAccount(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		CdrPeer::addSelectColumns($c);
		$startcol2 = (CdrPeer::NUM_COLUMNS - CdrPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		ArTelephonePrefixPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + ArTelephonePrefixPeer::NUM_COLUMNS;

		ArRatePeer::addSelectColumns($c);
		$startcol4 = $startcol3 + ArRatePeer::NUM_COLUMNS;

		ArRatePeer::addSelectColumns($c);
		$startcol5 = $startcol4 + ArRatePeer::NUM_COLUMNS;

		$c->addJoin(CdrPeer::AR_TELEPHONE_PREFIX_ID, ArTelephonePrefixPeer::ID);

		$c->addJoin(CdrPeer::INCOME_AR_RATE_ID, ArRatePeer::ID);

		$c->addJoin(CdrPeer::COST_AR_RATE_ID, ArRatePeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = CdrPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = ArTelephonePrefixPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getArTelephonePrefix(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addCdr($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initCdrs();
				$obj2->addCdr($obj1);
			}

			$omClass = ArRatePeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getArRateRelatedByIncomeArRateId(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addCdrRelatedByIncomeArRateId($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initCdrsRelatedByIncomeArRateId();
				$obj3->addCdrRelatedByIncomeArRateId($obj1);
			}

			$omClass = ArRatePeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getArRateRelatedByCostArRateId(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addCdrRelatedByCostArRateId($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initCdrsRelatedByCostArRateId();
				$obj4->addCdrRelatedByCostArRateId($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptArTelephonePrefix(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		CdrPeer::addSelectColumns($c);
		$startcol2 = (CdrPeer::NUM_COLUMNS - CdrPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		ArAsteriskAccountPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + ArAsteriskAccountPeer::NUM_COLUMNS;

		ArRatePeer::addSelectColumns($c);
		$startcol4 = $startcol3 + ArRatePeer::NUM_COLUMNS;

		ArRatePeer::addSelectColumns($c);
		$startcol5 = $startcol4 + ArRatePeer::NUM_COLUMNS;

		$c->addJoin(CdrPeer::AR_ASTERISK_ACCOUNT_ID, ArAsteriskAccountPeer::ID);

		$c->addJoin(CdrPeer::INCOME_AR_RATE_ID, ArRatePeer::ID);

		$c->addJoin(CdrPeer::COST_AR_RATE_ID, ArRatePeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = CdrPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = ArAsteriskAccountPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getArAsteriskAccount(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addCdr($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initCdrs();
				$obj2->addCdr($obj1);
			}

			$omClass = ArRatePeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getArRateRelatedByIncomeArRateId(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addCdrRelatedByIncomeArRateId($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initCdrsRelatedByIncomeArRateId();
				$obj3->addCdrRelatedByIncomeArRateId($obj1);
			}

			$omClass = ArRatePeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getArRateRelatedByCostArRateId(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addCdrRelatedByCostArRateId($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initCdrsRelatedByCostArRateId();
				$obj4->addCdrRelatedByCostArRateId($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptArRateRelatedByIncomeArRateId(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		CdrPeer::addSelectColumns($c);
		$startcol2 = (CdrPeer::NUM_COLUMNS - CdrPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		ArAsteriskAccountPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + ArAsteriskAccountPeer::NUM_COLUMNS;

		ArTelephonePrefixPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + ArTelephonePrefixPeer::NUM_COLUMNS;

		$c->addJoin(CdrPeer::AR_ASTERISK_ACCOUNT_ID, ArAsteriskAccountPeer::ID);

		$c->addJoin(CdrPeer::AR_TELEPHONE_PREFIX_ID, ArTelephonePrefixPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = CdrPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = ArAsteriskAccountPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getArAsteriskAccount(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addCdr($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initCdrs();
				$obj2->addCdr($obj1);
			}

			$omClass = ArTelephonePrefixPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getArTelephonePrefix(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addCdr($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initCdrs();
				$obj3->addCdr($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptArRateRelatedByCostArRateId(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		CdrPeer::addSelectColumns($c);
		$startcol2 = (CdrPeer::NUM_COLUMNS - CdrPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		ArAsteriskAccountPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + ArAsteriskAccountPeer::NUM_COLUMNS;

		ArTelephonePrefixPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + ArTelephonePrefixPeer::NUM_COLUMNS;

		$c->addJoin(CdrPeer::AR_ASTERISK_ACCOUNT_ID, ArAsteriskAccountPeer::ID);

		$c->addJoin(CdrPeer::AR_TELEPHONE_PREFIX_ID, ArTelephonePrefixPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = CdrPeer::getOMClass();

			$cls = Propel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = ArAsteriskAccountPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getArAsteriskAccount(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addCdr($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initCdrs();
				$obj2->addCdr($obj1);
			}

			$omClass = ArTelephonePrefixPeer::getOMClass();


			$cls = Propel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getArTelephonePrefix(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addCdr($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initCdrs();
				$obj3->addCdr($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}

	
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	
	public static function getOMClass()
	{
		return CdrPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(CdrPeer::ID); 

				$criteria->setDbName(self::DATABASE_NAME);

		try {
									$con->begin();
			$pk = BasePeer::doInsert($criteria, $con);
			$con->commit();
		} catch(PropelException $e) {
			$con->rollback();
			throw $e;
		}

		return $pk;
	}

	
	public static function doUpdate($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; 
			$comparison = $criteria->getComparison(CdrPeer::ID);
			$selectCriteria->add(CdrPeer::ID, $criteria->remove(CdrPeer::ID), $comparison);

		} else { 			$criteria = $values->buildCriteria(); 			$selectCriteria = $values->buildPkeyCriteria(); 		}

				$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}
		$affectedRows = 0; 		try {
									$con->begin();
			$affectedRows += BasePeer::doDeleteAll(CdrPeer::TABLE_NAME, $con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	 public static function doDelete($values, $con = null)
	 {
		if ($con === null) {
			$con = Propel::getConnection(CdrPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Cdr) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(CdrPeer::ID, (array) $values, Criteria::IN);
		}

				$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; 
		try {
									$con->begin();
			
			$affectedRows += BasePeer::doDelete($criteria, $con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public static function doValidate(Cdr $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(CdrPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(CdrPeer::TABLE_NAME);

			if (! is_array($cols)) {
				$cols = array($cols);
			}

			foreach($cols as $colName) {
				if ($tableMap->containsColumn($colName)) {
					$get = 'get' . $tableMap->getColumn($colName)->getPhpName();
					$columns[$colName] = $obj->$get();
				}
			}
		} else {

		}

		$res =  BasePeer::doValidate(CdrPeer::DATABASE_NAME, CdrPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = CdrPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
            $request->setError($col, $failed->getMessage());
        }
    }

    return $res;
	}

	
	public static function retrieveByPK($pk, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$criteria = new Criteria(CdrPeer::DATABASE_NAME);

		$criteria->add(CdrPeer::ID, $pk);


		$v = CdrPeer::doSelect($criteria, $con);

		return !empty($v) > 0 ? $v[0] : null;
	}

	
	public static function retrieveByPKs($pks, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria();
			$criteria->add(CdrPeer::ID, $pks, Criteria::IN);
			$objs = CdrPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseCdrPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			require_once 'lib/model/map/CdrMapBuilder.php';
	Propel::registerMapBuilder('lib.model.map.CdrMapBuilder');
}
