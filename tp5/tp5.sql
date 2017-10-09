CREATE TABLE `tg_user` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT COMMENT'用户表',
  `user` varchar(30) not null DEFAULT '' COMMENT '用户名',
  `pwd` varchar(32) NOT NULL DEFAULT '' COMMENT '密码',
  `create_time` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user` (`user`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

CREATE TABLE tg_goods(
	id int(4) unsigned not null AUTO_INCREMENT COMMENT '商品表',
	name varchar(100) not null DEFAULT '' COMMENT '商品名称',
	price DOUBLE(10,2) unsigned not null DEFAULT 00.00 COMMENT '商品的价格',
	mun MEDIUMINT(4) unsigned not null DEFAULT 100 COMMENT'库存数量',
	address varchar(300) not null DEFAULT'' COMMENT'地址',
	content text(1000) not null DEFAULT '' COMMENT '介绍详情',
	pic varchar(200) not null DEFAULT'' COMMENT '商品封面图1',
	pic2 varchar(200) not null DEFAULT '' COMMENT '商品封面图2',
	classid int(11) NOT NULL,
	times int(4) NOT NULL,
	uptimes int(4) NOT NULL COMMENT '修改的时间',
	status smallint(2) NOT NULL DEFAULT '1',
	PRIMARY KEY (id),
	index (name)
)ENGINE=MyISAM  DEFAULT CHARSET=utf8;

CREATE TABLE tg_class( 
	id smallint(4) unsigned not null AUTO_INCREMENT COMMENT '分类表',
	title varchar(30) not null  DEFAULT '' COMMENT '分类名称',
	pid smallint(4) unsigned not null  COMMENT 'tg_classID',
	PRIMARY KEY (id)
)ENGINE=MyISAM  DEFAULT CHARSET=utf8;

CREATE TABLE tg_style(
   id int(4) unsigned not null AUTO_INCREMENT COMMENT'商品属性表的id',
   stylename varchar(50) not null DEFAULT '' COMMENT '属性名称',
   class_id int(4) not null COMMENT '商品的id',
   PRIMARY KEY (id)
)ENGINE=MyISAM  DEFAULT CHARSET=utf8;

select tg_goods.name,tg_class.title from tg_goods inner join tg_class on tg_goods.classid=tg_class.id;
select * from tg_goods inner join tg_class on tg_goods.classid=tg_class.id;
select * ,tg_class.id as kk from tg_goods inner join tg_class on tg_goods.classid=tg_class.id;


CREATE TABLE tg_buy(
 id int(4) unsigned not null AUTO_INCREMENT COMMENT'购物车表的id',
 goodsID smallint(4) unsigned not null COMMENT '商品的id号',
 goodsmun int(4) unsigned not null COMMENT '购买数量',
 userid int(4) unsigned not null COMMENT '用户的id号',
 goodsstyle varchar(200) not null COMMENT '商品的属性',
 PRIMARY KEY (id)
)ENGINE=MyISAM  DEFAULT CHARSET=utf8;


create table RBAC_user(
   id int(4) not null AUTO_INCREMENT COMMENT '用户表',
   username varchar(30) not null DEFAULT '' COMMENT '用户名称',
   pwd char(32) not null DEFAULT '' COMMENT '密码',
   role_id TINYINT(1) not null COMMENT '分组ID',
   PRIMARY key (id)
)ENGINE=MyISAM DEFAULT CHARSET=utf8;

create table RBAC_role(
id int(4) not null AUTO_INCREMENT COMMENT '分组的id',
role_title varchar(20) not null DEFAULT '' COMMENT '角色名称',
node_id varchar(50)not null DEFAULT'' COMMENT '节点的id',
PRIMARY key (id)
)ENGINE=MyISAM DEFAULT CHARSET=utf8;


create table RBAC_node(
	 id int(4) not null AUTO_INCREMENT COMMENT '用户许可表',
	 operation varchar(50) not null DEFAULT '' COMMENT '用户操作的节点',
	 title varchar(50) not null DEFAULT '' COMMENT'操作名称',
  PRIMARY key (id)
)ENGINE=MyISAM DEFAULT CHARSET=utf8;