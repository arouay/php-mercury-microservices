<?php
return array("#tableName"=>"CatalogProduct","#primaryKeys"=>array("id"),"#manyToOne"=>array("catalog","product"),"#fieldNames"=>array("id"=>"id","catalog"=>"catalog","product"=>"product","datecp"=>"datecp"),"#fieldTypes"=>array("id"=>"int(11)","catalog"=>false,"product"=>false,"datecp"=>"datetime"),"#nullable"=>array(),"#notSerializable"=>array("catalog","product"),"#transformers"=>array(),"#accessors"=>array("id"=>"setId","catalog"=>"setCatalog","product"=>"setProduct","datecp"=>"setDatecp"),"#joinColumn"=>array("catalog"=>array("className"=>"models\\Catalog","name"=>"catalog","nullable"=>false),"product"=>array("className"=>"models\\Product","name"=>"product","nullable"=>false)),"#invertedJoinColumn"=>array("catalog"=>array("member"=>"catalog","className"=>"models\\Catalog"),"product"=>array("member"=>"product","className"=>"models\\Product")));