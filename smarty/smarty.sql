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
	price DOUBLE(5,2) unsigned not null DEFAULT 00.00 COMMENT '商品的价格',
	mun MEDIUMINT(4) unsigned not null DEFAULT 100 COMMENT'库存数量',
	address varchar(300) not null DEFAULT'' COMMENT'地址',
	content text(1000) not null DEFAULT '' COMMENT '介绍详情',
	pic varchar(200) not null DEFAULT'' COMMENT '商品封面图1',
	pic2 varchar(200) not null DEFAULT '' COMMENT '商品封面图2',
	PRIMARY KEY (id),
	index (name)
)ENGINE=MyISAM  DEFAULT CHARSET=utf8;