CREATE TABLE `tg_user` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(30) not null DEFAULT '' COMMENT '用户名',
  `pwd` varchar(32) NOT NULL DEFAULT '' COMMENT '密码',
  `create_time` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user` (`user`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;