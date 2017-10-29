/*
Navicat MySQL Data Transfer

Source Server         : mysql123
Source Server Version : 50553
Source Host           : 127.0.0.1:3306
Source Database       : feifan

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-10-29 11:08:59
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin_action
-- ----------------------------
DROP TABLE IF EXISTS `admin_action`;
CREATE TABLE `admin_action` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `table_name` varchar(100) NOT NULL DEFAULT '' COMMENT '表名',
  `key` int(11) NOT NULL COMMENT '主键',
  `action` varchar(100) NOT NULL COMMENT '动作',
  `field` varchar(500) DEFAULT '' COMMENT '被修改的字段',
  `value` text COMMENT '被修改的值',
  `type` tinyint(4) DEFAULT '1' COMMENT '操作类型：1更新，2插入，3删除',
  `created_at` datetime DEFAULT NULL COMMENT '操作时间',
  `created_by` int(11) DEFAULT NULL COMMENT '操作者ID',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='操作记录表';

-- ----------------------------
-- Records of admin_action
-- ----------------------------

-- ----------------------------
-- Table structure for admin_menu
-- ----------------------------
DROP TABLE IF EXISTS `admin_menu`;
CREATE TABLE `admin_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '序号',
  `name` varchar(30) NOT NULL COMMENT '菜单名',
  `pid` int(11) DEFAULT '0' COMMENT '父ID',
  `level` smallint(6) DEFAULT '1' COMMENT '层级',
  `sort` int(11) DEFAULT '1' COMMENT '排序值',
  `url` varchar(250) DEFAULT '' COMMENT '跳转链接',
  `icon` varchar(250) DEFAULT NULL COMMENT '图标',
  `is_show` tinyint(4) DEFAULT '1' COMMENT '是否显示',
  `category` tinyint(4) DEFAULT '1' COMMENT '菜单分类',
  `state` tinyint(4) DEFAULT '1' COMMENT '状态',
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COMMENT='菜单表';

-- ----------------------------
-- Records of admin_menu
-- ----------------------------
INSERT INTO `admin_menu` VALUES ('1', '系统管理', '0', '1', '1', 'system', '<i class=\"Hui-iconfont\">&#xe62e;</i>', '1', '1', '1', '2016-08-22 17:54:31', '1', '2016-09-01 17:21:03', '1');
INSERT INTO `admin_menu` VALUES ('2', '系统设置', '1', '2', '2', 'system/setting', '', '1', '1', '1', '2016-08-22 17:54:58', '1', '2016-08-22 17:54:58', '1');
INSERT INTO `admin_menu` VALUES ('3', '系统菜单', '1', '2', '3', 'system/menu', '', '1', '1', '1', '2016-08-22 17:55:35', '1', '2016-08-22 18:59:43', '1');
INSERT INTO `admin_menu` VALUES ('4', '系统日志', '1', '2', '4', 'system/logList', '', '1', '1', '1', '2016-08-22 18:42:11', '1', '2016-09-02 11:40:45', '1');
INSERT INTO `admin_menu` VALUES ('5', '管理员管理', '0', '1', '2', 'admin', '<i class=\"Hui-iconfont\">&#xe62d;</i>', '1', '1', '1', '2016-08-22 18:43:29', '1', '2016-09-01 17:21:03', '1');
INSERT INTO `admin_menu` VALUES ('6', '管理员列表', '5', '2', '2', 'admin/list', '', '1', '1', '1', '2016-08-22 18:46:24', '1', '2016-08-22 18:46:24', '1');
INSERT INTO `admin_menu` VALUES ('7', '角色列表', '5', '2', '3', 'admin/roleList', '', '1', '1', '1', '2016-08-22 18:46:50', '1', '2016-08-30 18:25:01', '1');
INSERT INTO `admin_menu` VALUES ('8', '权限列表', '5', '2', '4', 'admin/permissionList', '', '1', '1', '1', '2016-08-22 18:47:10', '1', '2016-08-30 18:24:58', '1');
INSERT INTO `admin_menu` VALUES ('9', '会员管理', '0', '1', '3', 'user', '<i class=\"Hui-iconfont\">&#xe60d;</i>', '1', '1', '1', '2016-08-22 18:47:49', '1', '2016-09-01 17:21:03', '1');
INSERT INTO `admin_menu` VALUES ('10', '会员列表', '9', '2', '2', 'user/list', '', '1', '1', '1', '2016-08-22 18:48:13', '1', '2016-08-27 19:45:26', '1');
INSERT INTO `admin_menu` VALUES ('11', '资讯管理', '0', '1', '4', 'article', '<i class=\"Hui-iconfont\">&#xe616;</i>', '1', '1', '1', '2016-08-22 18:48:55', '1', '2016-09-01 17:21:03', '1');
INSERT INTO `admin_menu` VALUES ('12', '资讯列表', '11', '2', '2', 'article/list', '', '1', '1', '1', '2016-08-22 18:49:15', '1', '2016-11-07 16:16:43', '1');
INSERT INTO `admin_menu` VALUES ('13', '图片管理', '0', '1', '5', 'picture', '<i class=\"Hui-iconfont\">&#xe613;</i>', '1', '1', '1', '2016-08-22 18:49:39', '1', '2016-09-01 17:21:03', '1');
INSERT INTO `admin_menu` VALUES ('14', '图片列表', '13', '2', '2', 'picture/list', '', '1', '1', '1', '2016-08-22 18:49:54', '1', '2016-08-22 18:49:54', '1');
INSERT INTO `admin_menu` VALUES ('15', '产品管理', '0', '1', '6', 'product', '<i class=\"Hui-iconfont\">&#xe620;</i>', '1', '1', '1', '2016-08-22 18:51:04', '1', '2016-09-01 17:21:03', '1');
INSERT INTO `admin_menu` VALUES ('16', '产品列表', '15', '2', '2', 'product/list', '', '1', '1', '1', '2016-08-22 18:51:18', '1', '2016-08-22 18:51:18', '1');
INSERT INTO `admin_menu` VALUES ('17', '评论管理', '0', '1', '7', 'comment', '<i class=\"Hui-iconfont\">&#xe622;</i>', '1', '1', '1', '2016-08-22 18:51:35', '1', '2016-09-01 17:21:03', '1');
INSERT INTO `admin_menu` VALUES ('18', '评论列表', '17', '2', '2', 'comment/list', '', '1', '1', '1', '2016-08-22 18:52:10', '1', '2016-08-22 18:52:10', '1');
INSERT INTO `admin_menu` VALUES ('19', '系统统计', '0', '1', '9', '', '<i class=\"Hui-iconfont\">&#xe61a;</i>', '1', '1', '1', '2016-08-22 19:00:05', '1', '2016-09-01 17:40:33', '1');
INSERT INTO `admin_menu` VALUES ('20', '栏目菜单', '11', '2', '1', 'article/menu', '', '1', '1', '1', '2016-11-07 16:16:40', '1', '2016-11-07 16:16:43', '1');
INSERT INTO `admin_menu` VALUES ('21', '操作日志', '1', '2', '5', 'system/actionList', '', '1', '1', '1', '2016-12-14 16:00:00', '1', '2016-12-14 16:00:00', '1');

-- ----------------------------
-- Table structure for admin_user
-- ----------------------------
DROP TABLE IF EXISTS `admin_user`;
CREATE TABLE `admin_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL COMMENT '账号',
  `password` varchar(80) NOT NULL COMMENT '密码',
  `realname` varchar(30) NOT NULL DEFAULT '' COMMENT '真名',
  `login_time` datetime DEFAULT NULL COMMENT '最后登录时间',
  `power` int(11) DEFAULT '10000' COMMENT '权力值',
  `state` tinyint(4) DEFAULT '1' COMMENT '状态',
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='后台用户表';

-- ----------------------------
-- Records of admin_user
-- ----------------------------
INSERT INTO `admin_user` VALUES ('1', 'ChisWill', '$2y$13$a8vBCI7Ah7MNoXV7O6gokuGYmv1FHLZx7amWEFSn1K4zI8JE9rJpi', 'ChisWill', '2017-03-13 13:49:07', '10000', '1', '2016-08-06 23:36:12', '0', '2016-08-31 11:41:15', '1');
INSERT INTO `admin_user` VALUES ('2', 'admin', '$2y$13$a8vBCI7Ah7MNoXV7O6gokuGYmv1FHLZx7amWEFSn1K4zI8JE9rJpi', 'admin', null, '9999', '1', '2016-08-06 23:36:12', '1', '2016-08-06 23:36:12', '1');

-- ----------------------------
-- Table structure for api_app
-- ----------------------------
DROP TABLE IF EXISTS `api_app`;
CREATE TABLE `api_app` (
  `user_id` int(11) NOT NULL,
  `key` varchar(100) DEFAULT NULL COMMENT '秘钥',
  `rate_limit` decimal(8,4) DEFAULT '1.0000' COMMENT '每秒最大请求次数',
  `total` int(11) DEFAULT '0' COMMENT '总调用次数',
  `allowance` int(11) DEFAULT '0' COMMENT '当前请求次数',
  `allowance_updated_at` int(11) DEFAULT '0' COMMENT '最后请求时间',
  `state` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='API接口调用次数表';

-- ----------------------------
-- Records of api_app
-- ----------------------------

-- ----------------------------
-- Table structure for api_user
-- ----------------------------
DROP TABLE IF EXISTS `api_user`;
CREATE TABLE `api_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL COMMENT '账号',
  `password` varchar(100) DEFAULT NULL COMMENT '密码',
  `state` tinyint(4) DEFAULT '1' COMMENT '状态',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='API用户表';

-- ----------------------------
-- Records of api_user
-- ----------------------------

-- ----------------------------
-- Table structure for article
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL COMMENT '标题',
  `menu_id` int(11) NOT NULL DEFAULT '0',
  `template` varchar(100) DEFAULT '' COMMENT '模板',
  `content` text COMMENT '内容',
  `cover` varchar(100) DEFAULT '' COMMENT '封面图',
  `state` tinyint(4) DEFAULT '1' COMMENT '状态',
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article
-- ----------------------------

-- ----------------------------
-- Table structure for article_menu
-- ----------------------------
DROP TABLE IF EXISTS `article_menu`;
CREATE TABLE `article_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL COMMENT '菜单名',
  `pid` int(11) DEFAULT '0',
  `level` smallint(6) DEFAULT '1' COMMENT '层级',
  `code` varchar(250) DEFAULT '1' COMMENT '从属排序值',
  `sort` int(11) DEFAULT '1' COMMENT '排序值',
  `child_num` int(11) DEFAULT '0' COMMENT '子集数',
  `passwd` varchar(100) DEFAULT '' COMMENT '密码',
  `url` varchar(250) DEFAULT '' COMMENT '链接',
  `is_show` tinyint(4) DEFAULT '1' COMMENT '是否显示',
  `category` tinyint(4) DEFAULT '1' COMMENT '菜单分类',
  `state` tinyint(4) DEFAULT '1' COMMENT '状态',
  `created_at` datetime DEFAULT NULL COMMENT '创建时间',
  `created_by` int(11) DEFAULT NULL COMMENT '创建人',
  `updated_at` datetime DEFAULT NULL COMMENT '修改时间',
  `updated_by` int(11) DEFAULT NULL COMMENT '修改人',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='文章栏目菜单表';

-- ----------------------------
-- Records of article_menu
-- ----------------------------

-- ----------------------------
-- Table structure for auth_assignment
-- ----------------------------
DROP TABLE IF EXISTS `auth_assignment`;
CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of auth_assignment
-- ----------------------------
INSERT INTO `auth_assignment` VALUES ('业务', '10', '1482809759');
INSERT INTO `auth_assignment` VALUES ('业务', '5', '1479891082');
INSERT INTO `auth_assignment` VALUES ('业务', '6', '1479891114');
INSERT INTO `auth_assignment` VALUES ('业务', '8', '1482809701');
INSERT INTO `auth_assignment` VALUES ('业务', '9', '1482809726');
INSERT INTO `auth_assignment` VALUES ('员工', '4', '1479462209');
INSERT INTO `auth_assignment` VALUES ('员工', '7', '1481090590');
INSERT INTO `auth_assignment` VALUES ('领导', '2', '1479378259');
INSERT INTO `auth_assignment` VALUES ('领导', '3', '1479462142');

-- ----------------------------
-- Table structure for auth_item
-- ----------------------------
DROP TABLE IF EXISTS `auth_item`;
CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `idx-auth_item-type` (`type`),
  CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of auth_item
-- ----------------------------
INSERT INTO `auth_item` VALUES ('adminAdminAddPermission', '2', '添加权限', null, null, '1479461682', '1479461682');
INSERT INTO `auth_item` VALUES ('adminAdminAjaxDeleteAdmin', '2', '删除管理员', null, null, '1479461682', '1479461682');
INSERT INTO `auth_item` VALUES ('adminAdminAjaxDeleteRole', '2', '删除角色', null, null, '1479461682', '1479461682');
INSERT INTO `auth_item` VALUES ('adminAdminAjaxRoleInfo', '2', '查看角色权限', null, null, '1479461682', '1479461682');
INSERT INTO `auth_item` VALUES ('adminAdminAjaxUpdatePermission', '2', '修改权限', null, null, '1479461682', '1479461682');
INSERT INTO `auth_item` VALUES ('adminAdminCreateRole', '2', '创建角色', null, null, '1479461682', '1479461682');
INSERT INTO `auth_item` VALUES ('adminAdminEditRole', '2', '编辑角色', null, null, '1479461682', '1479461682');
INSERT INTO `auth_item` VALUES ('adminAdminList', '2', '管理员列表', null, null, '1479461682', '1479461682');
INSERT INTO `auth_item` VALUES ('adminAdminPermissionList', '2', '权限列表', null, null, '1479461682', '1479461682');
INSERT INTO `auth_item` VALUES ('adminAdminRoleList', '2', '角色列表', null, null, '1479461682', '1479461682');
INSERT INTO `auth_item` VALUES ('adminAdminSaveAdmin', '2', '创建/修改管理员', null, null, '1479461682', '1479461682');
INSERT INTO `auth_item` VALUES ('adminArticleList', '2', '资讯列表', null, null, '1479461682', '1479461682');
INSERT INTO `auth_item` VALUES ('adminArticleMenu', '2', '栏目菜单', null, null, '1479461682', '1479461682');
INSERT INTO `auth_item` VALUES ('adminArticleSaveArticle', '2', '添加/编辑文章', null, null, '1479461682', '1479461682');
INSERT INTO `auth_item` VALUES ('adminSystemAddSetting', '2', '添加系统设置', null, null, '1479461682', '1479461682');
INSERT INTO `auth_item` VALUES ('adminSystemDeleteSetting', '2', '删除系统设置', null, null, '1479461682', '1479461682');
INSERT INTO `auth_item` VALUES ('adminSystemLogDetail', '2', '查看日志详情', null, null, '1479461682', '1479461682');
INSERT INTO `auth_item` VALUES ('adminSystemLogList', '2', '系统日志', null, null, '1479461682', '1479461682');
INSERT INTO `auth_item` VALUES ('adminSystemMenu', '2', '系统菜单', null, null, '1479461682', '1479461682');
INSERT INTO `auth_item` VALUES ('adminSystemSaveSetting', '2', '修改系统设置', null, null, '1479461682', '1479461682');
INSERT INTO `auth_item` VALUES ('adminSystemSetting', '2', '查看系统设置', null, null, '1479461682', '1479461682');
INSERT INTO `auth_item` VALUES ('adminUserList', '2', '会员列表', null, null, '1479461682', '1479461682');
INSERT INTO `auth_item` VALUES ('oaAdminAddPermission', '2', '添加权限', null, null, '1479377039', '1479377039');
INSERT INTO `auth_item` VALUES ('oaAdminAjaxDeleteAdmin', '2', '删除管理员', null, null, '1479377039', '1479377039');
INSERT INTO `auth_item` VALUES ('oaAdminAjaxDeleteRole', '2', '删除角色', null, null, '1479377039', '1479377039');
INSERT INTO `auth_item` VALUES ('oaAdminAjaxRoleInfo', '2', '查看角色权限', null, null, '1479377039', '1479377039');
INSERT INTO `auth_item` VALUES ('oaAdminAjaxUpdateAdmin', '2', '快速修改', null, null, '1479378130', '1479378130');
INSERT INTO `auth_item` VALUES ('oaAdminAjaxUpdatePermission', '2', '修改权限', null, null, '1479377039', '1479377039');
INSERT INTO `auth_item` VALUES ('oaAdminCreateRole', '2', '创建角色', null, null, '1479377039', '1479377039');
INSERT INTO `auth_item` VALUES ('oaAdminEditRole', '2', '编辑角色', null, null, '1479377039', '1479377039');
INSERT INTO `auth_item` VALUES ('oaAdminList', '2', '管理员列表', null, null, '1479377039', '1479377039');
INSERT INTO `auth_item` VALUES ('oaAdminPermissionList', '2', '权限列表', null, null, '1479377039', '1479377039');
INSERT INTO `auth_item` VALUES ('oaAdminRoleList', '2', '角色列表', null, null, '1479377039', '1479377039');
INSERT INTO `auth_item` VALUES ('oaAdminSaveAdmin', '2', '创建/修改管理员', null, null, '1479377039', '1479377039');
INSERT INTO `auth_item` VALUES ('oaAppAdvanceUpdate', '2', '私密信息修改', null, null, '1479377603', '1479377603');
INSERT INTO `auth_item` VALUES ('oaAppAjaxUpdateApp', '2', '快速修改', null, null, '1479378802', '1479378802');
INSERT INTO `auth_item` VALUES ('oaAppList', '2', '项目列表', null, null, '1479377039', '1479377039');
INSERT INTO `auth_item` VALUES ('oaAppSaveApp', '2', '创建/编辑项目', null, null, '1479377039', '1479377039');
INSERT INTO `auth_item` VALUES ('oaSystemMenu', '2', '系统菜单', null, null, '1479377039', '1479377039');
INSERT INTO `auth_item` VALUES ('oaUserAjaxUpdateOaUser', '2', '快捷更新客户信息', null, null, '1479890685', '1479890685');
INSERT INTO `auth_item` VALUES ('oaUserList', '2', '客户列表', null, null, '1479890685', '1479890685');
INSERT INTO `auth_item` VALUES ('oaUserRecord', '2', '录入联系记录', null, null, '1479890685', '1479890685');
INSERT INTO `auth_item` VALUES ('oaUserRecordList', '2', '查看联系记录', null, null, '1479890685', '1479890685');
INSERT INTO `auth_item` VALUES ('oaUserSaveUser', '2', '添加客户', null, null, '1479890685', '1479890685');
INSERT INTO `auth_item` VALUES ('业务', '1', 'oa', null, null, '1479890728', '1479890728');
INSERT INTO `auth_item` VALUES ('员工', '1', 'oa', null, null, '1479377692', '1479377692');
INSERT INTO `auth_item` VALUES ('系统管理员', '1', 'admin', null, null, '1479461885', '1479461935');
INSERT INTO `auth_item` VALUES ('超级管理员', '1', 'admin', null, null, '1479461946', '1479461946');
INSERT INTO `auth_item` VALUES ('运营管理员', '1', 'admin', null, null, '1479461922', '1479461922');
INSERT INTO `auth_item` VALUES ('领导', '1', 'oa', null, null, '1479377062', '1479891466');

-- ----------------------------
-- Table structure for auth_item_child
-- ----------------------------
DROP TABLE IF EXISTS `auth_item_child`;
CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of auth_item_child
-- ----------------------------
INSERT INTO `auth_item_child` VALUES ('系统管理员', 'adminAdminAjaxDeleteAdmin');
INSERT INTO `auth_item_child` VALUES ('系统管理员', 'adminAdminAjaxDeleteRole');
INSERT INTO `auth_item_child` VALUES ('系统管理员', 'adminAdminAjaxRoleInfo');
INSERT INTO `auth_item_child` VALUES ('系统管理员', 'adminAdminCreateRole');
INSERT INTO `auth_item_child` VALUES ('系统管理员', 'adminAdminEditRole');
INSERT INTO `auth_item_child` VALUES ('系统管理员', 'adminAdminList');
INSERT INTO `auth_item_child` VALUES ('系统管理员', 'adminAdminRoleList');
INSERT INTO `auth_item_child` VALUES ('系统管理员', 'adminAdminSaveAdmin');
INSERT INTO `auth_item_child` VALUES ('运营管理员', 'adminArticleList');
INSERT INTO `auth_item_child` VALUES ('运营管理员', 'adminArticleMenu');
INSERT INTO `auth_item_child` VALUES ('运营管理员', 'adminArticleSaveArticle');
INSERT INTO `auth_item_child` VALUES ('系统管理员', 'adminSystemSaveSetting');
INSERT INTO `auth_item_child` VALUES ('系统管理员', 'adminSystemSetting');
INSERT INTO `auth_item_child` VALUES ('运营管理员', 'adminUserList');
INSERT INTO `auth_item_child` VALUES ('领导', 'oaAdminAjaxDeleteAdmin');
INSERT INTO `auth_item_child` VALUES ('领导', 'oaAdminAjaxUpdateAdmin');
INSERT INTO `auth_item_child` VALUES ('员工', 'oaAdminList');
INSERT INTO `auth_item_child` VALUES ('领导', 'oaAdminSaveAdmin');
INSERT INTO `auth_item_child` VALUES ('领导', 'oaAppAdvanceUpdate');
INSERT INTO `auth_item_child` VALUES ('领导', 'oaAppAjaxUpdateApp');
INSERT INTO `auth_item_child` VALUES ('员工', 'oaAppList');
INSERT INTO `auth_item_child` VALUES ('员工', 'oaAppSaveApp');
INSERT INTO `auth_item_child` VALUES ('业务', 'oaUserAjaxUpdateOaUser');
INSERT INTO `auth_item_child` VALUES ('业务', 'oaUserList');
INSERT INTO `auth_item_child` VALUES ('业务', 'oaUserRecord');
INSERT INTO `auth_item_child` VALUES ('业务', 'oaUserRecordList');
INSERT INTO `auth_item_child` VALUES ('业务', 'oaUserSaveUser');
INSERT INTO `auth_item_child` VALUES ('领导', '业务');
INSERT INTO `auth_item_child` VALUES ('业务', '员工');
INSERT INTO `auth_item_child` VALUES ('领导', '员工');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '系统管理员');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '运营管理员');

-- ----------------------------
-- Table structure for auth_rule
-- ----------------------------
DROP TABLE IF EXISTS `auth_rule`;
CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of auth_rule
-- ----------------------------

-- ----------------------------
-- Table structure for laravel_user
-- ----------------------------
DROP TABLE IF EXISTS `laravel_user`;
CREATE TABLE `laravel_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户表',
  `user` varchar(40) NOT NULL DEFAULT '' COMMENT '商品ID',
  `pwd` varchar(300) NOT NULL DEFAULT '' COMMENT 'session_id',
  `role` smallint(3) NOT NULL DEFAULT '1' COMMENT '角色id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of laravel_user
-- ----------------------------
INSERT INTO `laravel_user` VALUES ('1', 'admin', '$2y$10$DGK5I4TVJX1HxnIbAiaZaeqICBkatKv5p94nbMK7v4rHT7JDqudsS', '1');

-- ----------------------------
-- Table structure for log
-- ----------------------------
DROP TABLE IF EXISTS `log`;
CREATE TABLE `log` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `level` int(11) DEFAULT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `log_time` double DEFAULT NULL,
  `prefix` text COLLATE utf8_unicode_ci,
  `message` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `idx_log_level` (`level`),
  KEY `idx_log_category` (`category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of log
-- ----------------------------

-- ----------------------------
-- Table structure for luntan_comment
-- ----------------------------
DROP TABLE IF EXISTS `luntan_comment`;
CREATE TABLE `luntan_comment` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(4) unsigned NOT NULL,
  `content` varchar(500) NOT NULL DEFAULT '' COMMENT '评论内容',
  `content_id` int(4) DEFAULT NULL,
  `create_time` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of luntan_comment
-- ----------------------------
INSERT INTO `luntan_comment` VALUES ('1', '3', 'dddddddddddddddd', '1', '1496913650');
INSERT INTO `luntan_comment` VALUES ('2', '3', 'dddddddddddddd', '1', '1496914007');
INSERT INTO `luntan_comment` VALUES ('3', '3', 'ni hao nihao', '1', '1496972744');
INSERT INTO `luntan_comment` VALUES ('4', '3', '你好你和你', '1', '1496973369');
INSERT INTO `luntan_comment` VALUES ('5', '3', '阿诗丹顿水电费第三方', '3', '1496973427');
INSERT INTO `luntan_comment` VALUES ('6', '3', '所发生的发斯蒂芬斯蒂芬的', '13', '1496973495');
INSERT INTO `luntan_comment` VALUES ('7', '2', '你好我在评论', '12', '1496974045');
INSERT INTO `luntan_comment` VALUES ('8', '2', '你好习总', '2', '1496974198');
INSERT INTO `luntan_comment` VALUES ('9', '2', 'xfsdf', '13', '1496974263');
INSERT INTO `luntan_comment` VALUES ('10', '0', 'dsfgsdfsdfsdfsdfsdfds', '13', '1496980900');
INSERT INTO `luntan_comment` VALUES ('11', '0', 'sfsfdsdfsdf', '13', '1496980975');
INSERT INTO `luntan_comment` VALUES ('12', '2', '我爱我的小羊羊', '13', '1496981083');

-- ----------------------------
-- Table structure for luntan_content
-- ----------------------------
DROP TABLE IF EXISTS `luntan_content`;
CREATE TABLE `luntan_content` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `theme_id` int(4) unsigned NOT NULL,
  `content` text NOT NULL COMMENT '内容',
  `author` varchar(30) NOT NULL DEFAULT '' COMMENT '作者',
  `click_num` int(4) DEFAULT '0',
  `praise_num` int(4) DEFAULT '0',
  `images` varchar(200) NOT NULL DEFAULT '' COMMENT '图片',
  `create_time` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of luntan_content
-- ----------------------------
INSERT INTO `luntan_content` VALUES ('1', '快乐时间段风口浪尖', '1', 'kjkjshkhfsakjfdkjsdkjfjkshfd', '张三', '0', '0', '', null);
INSERT INTO `luntan_content` VALUES ('2', '以习近平为核心党中央全面深化改革落实工作纪实', '2', '习近平总书记在中央全面深化改革领导小组第34次会议上进一步指出，督察是抓落实的重要手段。从初期强调要配备专门督察力量，到中央深改领导小组会议专题研究改革督察落实工作，到明确提出“三督三察”，到进一步要求提高督察工作的广度深度，全面深化改革每推进一步，党中央对抓督察促落实的要求就更进一', '', '0', '0', '', null);
INSERT INTO `luntan_content` VALUES ('3', '啦啦啦', '1', '2015年以来，中央深改领导小组多次作出具体工作部署，对督察落实进行推动、规范、指导，各地区各部门建立健全督察机制，落实责任制，把督察工作摆到更重要的位置。', '', '0', '0', '', null);
INSERT INTO `luntan_content` VALUES ('4', 'aaaa', '3', 'kkkkkkkkkkk', 'lisi', '0', '0', '', '1496885181');
INSERT INTO `luntan_content` VALUES ('5', 'aaaa', '3', 'kkkkkkkkkkk', 'lisi', '0', '0', '', '1496885417');
INSERT INTO `luntan_content` VALUES ('6', 'aaaa', '3', 'kkkkkkkkkkk', 'lisi', '0', '0', '', '1496886017');
INSERT INTO `luntan_content` VALUES ('7', 'aaaa', '3', 'kkkkkkkkkkk', 'lisi', '0', '0', '', '1496886186');
INSERT INTO `luntan_content` VALUES ('8', 'aaaa', '3', 'kkkkkkkkkkk', 'lisi', '0', '0', '', '1496886243');
INSERT INTO `luntan_content` VALUES ('9', 'aaaa', '3', 'kkkkkkkkkkk', 'lisi', '0', '0', '', '1496886333');
INSERT INTO `luntan_content` VALUES ('10', '习近平你好', '2', '你好习总', '习总2', '0', '0', '', '1496887631');
INSERT INTO `luntan_content` VALUES ('11', '独孤九剑', '3', '破刀试', '令狐', '0', '0', '', '1496887678');
INSERT INTO `luntan_content` VALUES ('12', '啦啦啦', '2', '啦啦啦啦好', '你好', '0', '0', '', '1496887819');
INSERT INTO `luntan_content` VALUES ('13', '我爱我的小羊羊', '1', '我爱我的小羊羊', '飞', '0', '0', '', '1496895253');

-- ----------------------------
-- Table structure for luntan_theme
-- ----------------------------
DROP TABLE IF EXISTS `luntan_theme`;
CREATE TABLE `luntan_theme` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL DEFAULT '' COMMENT '标题',
  `moderator` varchar(50) NOT NULL DEFAULT '' COMMENT '版主',
  `create_time` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of luntan_theme
-- ----------------------------
INSERT INTO `luntan_theme` VALUES ('1', 'php专区', '版主1', null);
INSERT INTO `luntan_theme` VALUES ('2', 'web专区', '版主2', null);
INSERT INTO `luntan_theme` VALUES ('3', 'mysql专区', '版主3', null);
INSERT INTO `luntan_theme` VALUES ('4', 'css专区', '版主4', null);
INSERT INTO `luntan_theme` VALUES ('5', 'js专区', '版主5', null);

-- ----------------------------
-- Table structure for luntan_user
-- ----------------------------
DROP TABLE IF EXISTS `luntan_user`;
CREATE TABLE `luntan_user` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL DEFAULT '' COMMENT '用户名',
  `password` char(32) NOT NULL DEFAULT '' COMMENT '用户密码',
  `create_time` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user` (`user`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of luntan_user
-- ----------------------------
INSERT INTO `luntan_user` VALUES ('1', '张123', 'e10adc3949ba59abbe56e057f20f883e', '1496372235');
INSERT INTO `luntan_user` VALUES ('2', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '1496643681');
INSERT INTO `luntan_user` VALUES ('3', 'admin4', 'e10adc3949ba59abbe56e057f20f883e', '1496884644');

-- ----------------------------
-- Table structure for migration
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `version` varchar(80) NOT NULL,
  `apply_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='数据库版本迁移表';

-- ----------------------------
-- Records of migration
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------

-- ----------------------------
-- Table structure for my_discuss
-- ----------------------------
DROP TABLE IF EXISTS `my_discuss`;
CREATE TABLE `my_discuss` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `article_id` int(4) unsigned NOT NULL COMMENT '帖子编号',
  `content` varchar(500) NOT NULL DEFAULT '' COMMENT '回复的内容',
  `comment_time` datetime NOT NULL COMMENT '回复的时间',
  `userid` int(4) NOT NULL COMMENT '评论人编号',
  `pid` int(4) NOT NULL COMMENT '帖子所在专区编号',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of my_discuss
-- ----------------------------

-- ----------------------------
-- Table structure for my_list
-- ----------------------------
DROP TABLE IF EXISTS `my_list`;
CREATE TABLE `my_list` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(4) NOT NULL COMMENT '所在专区编号',
  `article` varchar(30) NOT NULL DEFAULT '' COMMENT '专区名称',
  `title` varchar(30) NOT NULL DEFAULT '' COMMENT '主题',
  `content` varchar(500) NOT NULL DEFAULT '' COMMENT '内容',
  `author` varchar(40) NOT NULL DEFAULT '' COMMENT '作者',
  `createtime` datetime NOT NULL COMMENT '创建时间',
  `clicks` int(4) NOT NULL DEFAULT '0' COMMENT '点击次数',
  `money` float(2,2) NOT NULL,
  `money2` double NOT NULL,
  `money3` float(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `content` (`content`(255))
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of my_list
-- ----------------------------
INSERT INTO `my_list` VALUES ('1', '0', '细说php', '', 'php讲解', '', '0000-00-00 00:00:00', '0', '0.00', '0', '12.45');
INSERT INTO `my_list` VALUES ('2', '0', '面向对象', '', '', '', '0000-00-00 00:00:00', '0', '0.00', '0', '1233.45');
INSERT INTO `my_list` VALUES ('3', '0', '', '', '', '', '0000-00-00 00:00:00', '0', '0.99', '0', null);
INSERT INTO `my_list` VALUES ('4', '0', '', '', '', '', '0000-00-00 00:00:00', '0', '0.99', '0', null);
INSERT INTO `my_list` VALUES ('5', '0', '', '', '', '', '0000-00-00 00:00:00', '0', '0.99', '0', null);
INSERT INTO `my_list` VALUES ('6', '0', '', '', '', '', '0000-00-00 00:00:00', '0', '0.99', '0', null);
INSERT INTO `my_list` VALUES ('7', '0', '', '', '', '', '0000-00-00 00:00:00', '0', '0.00', '1.12', null);
INSERT INTO `my_list` VALUES ('8', '0', '', '', '', '', '0000-00-00 00:00:00', '0', '0.99', '0', null);
INSERT INTO `my_list` VALUES ('9', '0', '', '', '', '', '0000-00-00 00:00:00', '0', '0.00', '280.678767', null);
INSERT INTO `my_list` VALUES ('10', '0', '', '', '', '', '0000-00-00 00:00:00', '0', '0.99', '0', null);
INSERT INTO `my_list` VALUES ('11', '0', '', '', '', '', '0000-00-00 00:00:00', '0', '0.99', '15.98', null);
INSERT INTO `my_list` VALUES ('12', '0', '', '', '', '', '0000-00-00 00:00:00', '0', '0.99', '12.44', null);
INSERT INTO `my_list` VALUES ('13', '0', '', '', '', '', '0000-00-00 00:00:00', '0', '0.99', '0', null);
INSERT INTO `my_list` VALUES ('14', '0', '', '', '', '', '0000-00-00 00:00:00', '0', '0.99', '0', null);
INSERT INTO `my_list` VALUES ('15', '0', '', '', '', '', '0000-00-00 00:00:00', '0', '0.99', '0', null);
INSERT INTO `my_list` VALUES ('16', '0', '', '', '', '', '0000-00-00 00:00:00', '0', '0.99', '0', null);
INSERT INTO `my_list` VALUES ('17', '0', '', '', '', '', '0000-00-00 00:00:00', '0', '0.99', '0', null);

-- ----------------------------
-- Table structure for my_prefecture
-- ----------------------------
DROP TABLE IF EXISTS `my_prefecture`;
CREATE TABLE `my_prefecture` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `images` varchar(30) NOT NULL DEFAULT '' COMMENT '专区图片',
  `name` varchar(30) NOT NULL DEFAULT '' COMMENT '专区名称',
  `moderator` varchar(40) NOT NULL DEFAULT '' COMMENT '版主',
  `createtime` datetime NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of my_prefecture
-- ----------------------------
INSERT INTO `my_prefecture` VALUES ('1', '', 'php', 'php版主', '2017-05-12 22:50:29');
INSERT INTO `my_prefecture` VALUES ('2', '', 'asp', 'asp版主', '2017-05-12 22:50:48');
INSERT INTO `my_prefecture` VALUES ('3', '', 'net', 'net版主', '2017-05-12 22:51:19');
INSERT INTO `my_prefecture` VALUES ('4', '', 'h5', 'h5版主', '2017-05-12 22:51:41');

-- ----------------------------
-- Table structure for my_shop_cart
-- ----------------------------
DROP TABLE IF EXISTS `my_shop_cart`;
CREATE TABLE `my_shop_cart` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goodsid` int(10) unsigned NOT NULL COMMENT '商品ID',
  `session_id` varchar(40) NOT NULL COMMENT 'session_id',
  `userId` int(10) unsigned DEFAULT NULL COMMENT '用户ID',
  `goodsName` varchar(60) NOT NULL COMMENT '商品名称',
  `goodsNum` smallint(5) unsigned NOT NULL COMMENT '商品数量',
  `goodsType` varchar(200) NOT NULL COMMENT '商品规格',
  `goodsImg` varchar(200) NOT NULL COMMENT '商品图片',
  `goodsPrice` double(10,2) unsigned NOT NULL COMMENT '商品价格',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of my_shop_cart
-- ----------------------------
INSERT INTO `my_shop_cart` VALUES ('1', '1', '', '1', '苹果手机', '12', '黑色，4G运行内存，32G储存，1200像素', '', '198.25');
INSERT INTO `my_shop_cart` VALUES ('2', '5', 'rkhnikanjds0piqq5peg9s8hs5', null, '苹果', '1', '', '', '2589.00');
INSERT INTO `my_shop_cart` VALUES ('3', '5', 'rkhnikanjds0piqq5peg9s8hs5', null, '苹果', '1', '', '', '2589.00');
INSERT INTO `my_shop_cart` VALUES ('4', '5', 'rkhnikanjds0piqq5peg9s8hs5', null, '苹果', '1', '', '', '2589.00');
INSERT INTO `my_shop_cart` VALUES ('5', '4', 'rkhnikanjds0piqq5peg9s8hs5', null, '苹果手机', '1', '', '', '99.98');
INSERT INTO `my_shop_cart` VALUES ('6', '4', 'rkhnikanjds0piqq5peg9s8hs5', null, '苹果手机', '1', '', '', '99.98');
INSERT INTO `my_shop_cart` VALUES ('7', '4', 'rkhnikanjds0piqq5peg9s8hs5', null, '苹果手机', '1', '', '', '99.98');
INSERT INTO `my_shop_cart` VALUES ('8', '1', 'l9ankfobqu5tlkn34kd9gefmr2', null, '手机6s', '12', '', '', '2999.23');
INSERT INTO `my_shop_cart` VALUES ('9', '4', 'l9ankfobqu5tlkn34kd9gefmr2', null, '苹果手机', '1', '', '', '99.98');
INSERT INTO `my_shop_cart` VALUES ('10', '5', 'l9ankfobqu5tlkn34kd9gefmr2', null, '苹果', '1', '', '', '2589.00');
INSERT INTO `my_shop_cart` VALUES ('11', '4', 'qo2dnkql28emlliuu6m57oefl4', null, '苹果手机', '1', '', '', '99.98');
INSERT INTO `my_shop_cart` VALUES ('12', '1', 'qo2dnkql28emlliuu6m57oefl4', null, '手机6s', '12', '', '', '2999.23');
INSERT INTO `my_shop_cart` VALUES ('13', '5', '6pm72v9fe9smd1kp0pqknooc94', null, '苹果', '1', '', '', '2589.00');
INSERT INTO `my_shop_cart` VALUES ('14', '5', 'vc2nu0lr3gmrs4u9gihtihqrk4', null, '苹果', '1', '', '', '2589.00');
INSERT INTO `my_shop_cart` VALUES ('15', '4', 'bs9unnar7do7ilk29hbpimijf4', null, '苹果手机', '1', '', '', '99.98');
INSERT INTO `my_shop_cart` VALUES ('16', '1', 'bs9unnar7do7ilk29hbpimijf4', null, '手机6s', '12', '', '', '2999.23');
INSERT INTO `my_shop_cart` VALUES ('17', '4', '06kbcjclt64760uma0mi4hp3q7', '1', '苹果手机', '1', '', '', '99.98');
INSERT INTO `my_shop_cart` VALUES ('18', '5', '06kbcjclt64760uma0mi4hp3q7', '1', '苹果', '1', '', '', '2589.00');
INSERT INTO `my_shop_cart` VALUES ('19', '4', '72ufmclkth23gt2vsfse8dpmr5', '9', '苹果手机', '1', '', '', '99.98');
INSERT INTO `my_shop_cart` VALUES ('20', '5', 'duq99ksmumcmsdntobk6c6hs61', null, '苹果', '1', '', '', '2589.00');
INSERT INTO `my_shop_cart` VALUES ('21', '5', 'tnvg2fgrf427kkpdstkf8m9k34', '10', '苹果', '1', '', '', '2589.00');
INSERT INTO `my_shop_cart` VALUES ('22', '4', 'tnvg2fgrf427kkpdstkf8m9k34', '10', '苹果手机', '11', '', '', '99.98');
INSERT INTO `my_shop_cart` VALUES ('23', '5', 'g3tufu6m3qrn2aa2fou41o1o51', null, '苹果', '1', '', '', '2589.00');
INSERT INTO `my_shop_cart` VALUES ('24', '1', 'sboa2ofmph7f94gso1kqdje2v6', '9', '手机6s', '12', '', '', '2999.23');
INSERT INTO `my_shop_cart` VALUES ('25', '3', 'sboa2ofmph7f94gso1kqdje2v6', '9', '裙子', '1', '', '', '99.99');
INSERT INTO `my_shop_cart` VALUES ('26', '4', 'uqd2t9pq4h7iumorj4v9bm6jc2', '9', '苹果手机', '1', '', '', '99.98');

-- ----------------------------
-- Table structure for my_user
-- ----------------------------
DROP TABLE IF EXISTS `my_user`;
CREATE TABLE `my_user` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '' COMMENT '有户名',
  `autonym` varchar(20) NOT NULL DEFAULT '' COMMENT '真实姓名',
  `password` varchar(40) NOT NULL DEFAULT '' COMMENT '密码',
  `sex` varchar(10) NOT NULL DEFAULT '' COMMENT '性别',
  `birthday` date NOT NULL COMMENT '生日',
  `tel` varchar(20) NOT NULL DEFAULT '' COMMENT '手机号',
  `qq` varchar(30) NOT NULL DEFAULT '' COMMENT 'QQ号',
  `email` varchar(40) NOT NULL DEFAULT '' COMMENT '邮箱',
  `homepage` varchar(100) NOT NULL DEFAULT '' COMMENT '主页',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态',
  `address` varchar(100) NOT NULL DEFAULT '' COMMENT '地址',
  PRIMARY KEY (`id`),
  KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of my_user
-- ----------------------------
INSERT INTO `my_user` VALUES ('1', 'dafei', '张飞', '', '男', '2017-01-04', '', '', '', '', '1', '地址');
INSERT INTO `my_user` VALUES ('2', '小陈', '晨晨', '', '', '0000-00-00', '', '', '', '', '1', '');
INSERT INTO `my_user` VALUES ('3', '', '', '', '', '0000-00-00', '', '', '', '', '1', '');

-- ----------------------------
-- Table structure for nation
-- ----------------------------
DROP TABLE IF EXISTS `nation`;
CREATE TABLE `nation` (
  `nid` int(11) NOT NULL AUTO_INCREMENT,
  `nationName` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`nid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of nation
-- ----------------------------
INSERT INTO `nation` VALUES ('1', '汉族');
INSERT INTO `nation` VALUES ('2', '苗族');
INSERT INTO `nation` VALUES ('3', '傣族');
INSERT INTO `nation` VALUES ('4', '白族');
INSERT INTO `nation` VALUES ('5', '回族');
INSERT INTO `nation` VALUES ('6', '维吾尔族');
INSERT INTO `nation` VALUES ('7', '彝族');

-- ----------------------------
-- Table structure for oa_app
-- ----------------------------
DROP TABLE IF EXISTS `oa_app`;
CREATE TABLE `oa_app` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(20) NOT NULL COMMENT '项目代号',
  `name` varchar(50) DEFAULT '' COMMENT '项目名称',
  `domain` varchar(50) DEFAULT '' COMMENT '域名',
  `ip` varchar(20) DEFAULT '' COMMENT 'IP',
  `type` varchar(20) DEFAULT '' COMMENT '项目类型',
  `server_info` text COMMENT '服务器信息',
  `wechat_info` text COMMENT '微信信息',
  `pay_info` text COMMENT '支付信息',
  `sms_info` text COMMENT '短信接口信息',
  `requirement_info` text COMMENT '需求信息',
  `process_info` text COMMENT '进度描述',
  `created_at` datetime DEFAULT NULL COMMENT '创建时间',
  `created_by` int(11) DEFAULT NULL COMMENT '创建人',
  `updated_at` datetime DEFAULT NULL COMMENT '最后修改时间',
  `updated_by` int(11) DEFAULT NULL COMMENT '最后修改人',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='项目信息表';

-- ----------------------------
-- Records of oa_app
-- ----------------------------

-- ----------------------------
-- Table structure for oa_menu
-- ----------------------------
DROP TABLE IF EXISTS `oa_menu`;
CREATE TABLE `oa_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '序号',
  `name` varchar(30) NOT NULL COMMENT '菜单名',
  `pid` int(11) DEFAULT '0' COMMENT '父ID',
  `level` smallint(6) DEFAULT '1' COMMENT '层级',
  `sort` int(11) DEFAULT '1' COMMENT '排序值',
  `url` varchar(250) DEFAULT '' COMMENT '跳转链接',
  `icon` varchar(250) DEFAULT NULL COMMENT '图标',
  `is_show` tinyint(4) DEFAULT '1' COMMENT '是否显示',
  `category` tinyint(4) DEFAULT '1' COMMENT '菜单分类',
  `state` tinyint(4) DEFAULT '1' COMMENT '状态',
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COMMENT='菜单表';

-- ----------------------------
-- Records of oa_menu
-- ----------------------------
INSERT INTO `oa_menu` VALUES ('1', '系统管理', '0', '1', '1', 'system', '<i class=\"Hui-iconfont\">&#xe62e;</i>', '1', '1', '1', '2016-08-22 17:54:31', '1', '2016-09-01 17:21:03', '1');
INSERT INTO `oa_menu` VALUES ('2', '系统设置', '1', '2', '2', 'system/setting', '', '1', '1', '-1', '2016-08-22 17:54:58', '1', '2016-08-22 17:54:58', '1');
INSERT INTO `oa_menu` VALUES ('3', '系统菜单', '1', '2', '3', 'system/menu', '', '1', '1', '1', '2016-08-22 17:55:35', '1', '2016-08-22 18:59:43', '1');
INSERT INTO `oa_menu` VALUES ('4', '系统日志', '1', '2', '4', 'system/logList', '', '1', '1', '-1', '2016-08-22 18:42:11', '1', '2016-09-02 11:40:45', '1');
INSERT INTO `oa_menu` VALUES ('5', '员工管理', '0', '1', '2', 'admin', '<i class=\"Hui-iconfont\">&#xe62d;</i>', '1', '1', '1', '2016-08-22 18:43:29', '1', '2016-11-17 13:45:16', '1');
INSERT INTO `oa_menu` VALUES ('6', '员工列表', '5', '2', '2', 'admin/list', '', '1', '1', '1', '2016-08-22 18:46:24', '1', '2016-11-17 13:45:25', '1');
INSERT INTO `oa_menu` VALUES ('7', '角色列表', '5', '2', '3', 'admin/roleList', '', '1', '1', '1', '2016-08-22 18:46:50', '1', '2016-11-17 18:07:25', '1');
INSERT INTO `oa_menu` VALUES ('8', '权限列表', '5', '2', '4', 'admin/permissionList', '', '1', '1', '1', '2016-08-22 18:47:10', '1', '2016-08-30 18:24:58', '1');
INSERT INTO `oa_menu` VALUES ('9', '客户管理', '0', '1', '3', 'user', '<i class=\"Hui-iconfont\">&#xe60d;</i>', '1', '1', '1', '2016-08-22 18:47:49', '1', '2016-11-23 10:00:37', '1');
INSERT INTO `oa_menu` VALUES ('10', '客户列表', '9', '2', '2', 'user/list', '', '1', '1', '1', '2016-08-22 18:48:13', '1', '2016-11-23 10:19:55', '1');
INSERT INTO `oa_menu` VALUES ('11', '项目管理', '0', '1', '4', 'app', '<i class=\"Hui-iconfont\">&#xe616;</i>', '1', '1', '1', '2016-08-22 18:48:55', '1', '2016-11-17 17:36:18', '1');
INSERT INTO `oa_menu` VALUES ('12', '资讯列表', '11', '2', '2', 'article/list', '', '1', '1', '-1', '2016-08-22 18:49:15', '1', '2016-11-07 16:16:43', '1');
INSERT INTO `oa_menu` VALUES ('13', '图片管理', '0', '1', '5', 'picture', '<i class=\"Hui-iconfont\">&#xe613;</i>', '1', '1', '-1', '2016-08-22 18:49:39', '1', '2016-09-01 17:21:03', '1');
INSERT INTO `oa_menu` VALUES ('14', '图片列表', '13', '2', '2', 'picture/list', '', '1', '1', '-1', '2016-08-22 18:49:54', '1', '2016-08-22 18:49:54', '1');
INSERT INTO `oa_menu` VALUES ('15', '产品管理', '0', '1', '6', 'product', '<i class=\"Hui-iconfont\">&#xe620;</i>', '1', '1', '-1', '2016-08-22 18:51:04', '1', '2016-09-01 17:21:03', '1');
INSERT INTO `oa_menu` VALUES ('16', '产品列表', '15', '2', '2', 'product/list', '', '1', '1', '-1', '2016-08-22 18:51:18', '1', '2016-08-22 18:51:18', '1');
INSERT INTO `oa_menu` VALUES ('17', '评论管理', '0', '1', '7', 'comment', '<i class=\"Hui-iconfont\">&#xe622;</i>', '1', '1', '-1', '2016-08-22 18:51:35', '1', '2016-09-01 17:21:03', '1');
INSERT INTO `oa_menu` VALUES ('18', '评论列表', '17', '2', '2', 'comment/list', '', '1', '1', '-1', '2016-08-22 18:52:10', '1', '2016-08-22 18:52:10', '1');
INSERT INTO `oa_menu` VALUES ('19', '系统统计', '0', '1', '9', '', '<i class=\"Hui-iconfont\">&#xe61a;</i>', '1', '1', '-1', '2016-08-22 19:00:05', '1', '2016-09-01 17:40:33', '1');
INSERT INTO `oa_menu` VALUES ('20', '项目列表', '11', '2', '1', 'app/list', '', '1', '1', '1', '2016-11-07 16:16:40', '1', '2016-11-17 17:36:22', '1');
INSERT INTO `oa_menu` VALUES ('21', '员工业绩', '5', '2', '4', 'admin/bonusList', '', '1', '1', '1', '2016-11-07 16:16:40', '1', '2016-11-17 17:36:22', '1');

-- ----------------------------
-- Table structure for oa_process
-- ----------------------------
DROP TABLE IF EXISTS `oa_process`;
CREATE TABLE `oa_process` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `app_id` int(11) NOT NULL,
  `desc` text NOT NULL COMMENT '进度描述',
  `created_at` datetime DEFAULT NULL COMMENT '发表时间',
  `created_by` int(11) DEFAULT NULL COMMENT '发表人',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='项目进度记录表';

-- ----------------------------
-- Records of oa_process
-- ----------------------------

-- ----------------------------
-- Table structure for oa_tips
-- ----------------------------
DROP TABLE IF EXISTS `oa_tips`;
CREATE TABLE `oa_tips` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `target_id` int(11) DEFAULT '0',
  `field` varchar(20) DEFAULT '',
  `type` tinyint(4) DEFAULT '1' COMMENT '提示类别：1项目信息，2客户信息',
  `read_state` tinyint(4) DEFAULT '-1',
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`,`target_id`,`field`,`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of oa_tips
-- ----------------------------

-- ----------------------------
-- Table structure for oa_user
-- ----------------------------
DROP TABLE IF EXISTS `oa_user`;
CREATE TABLE `oa_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '序号',
  `name` varchar(50) DEFAULT '' COMMENT '姓名',
  `tel` varchar(50) DEFAULT '' COMMENT '联系电话',
  `wechat_id` varchar(50) DEFAULT '' COMMENT '微信号',
  `qq` varchar(20) DEFAULT '' COMMENT 'QQ',
  `requirement` text COMMENT '需求',
  `contact_time` datetime DEFAULT NULL COMMENT '最后联系时间',
  `level` int(11) DEFAULT '0' COMMENT '意向等级(0-100)',
  `created_at` datetime DEFAULT NULL COMMENT '创建时间',
  `created_by` int(11) DEFAULT NULL COMMENT '联系人',
  `updated_at` datetime DEFAULT NULL COMMENT '最后更新时间',
  `updated_by` int(11) DEFAULT NULL COMMENT '最后修改人',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='客户表';

-- ----------------------------
-- Records of oa_user
-- ----------------------------

-- ----------------------------
-- Table structure for oa_user_contact
-- ----------------------------
DROP TABLE IF EXISTS `oa_user_contact`;
CREATE TABLE `oa_user_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `content` text NOT NULL COMMENT '联系内容',
  `created_at` datetime DEFAULT NULL COMMENT '联系时间',
  `created_by` int(11) DEFAULT NULL COMMENT '联系人',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='客户联系记录表';

-- ----------------------------
-- Records of oa_user_contact
-- ----------------------------

-- ----------------------------
-- Table structure for option
-- ----------------------------
DROP TABLE IF EXISTS `option`;
CREATE TABLE `option` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `option_name` varchar(64) NOT NULL DEFAULT '' COMMENT '配置名',
  `option_value` longtext COMMENT '配置值',
  `type` tinyint(4) DEFAULT '1' COMMENT '配置类型',
  `state` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `option_name` (`option_name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='参数配置表';

-- ----------------------------
-- Records of option
-- ----------------------------
INSERT INTO `option` VALUES ('1', 'common_settings', 'a:16:{i:0;a:10:{s:2:\"id\";i:1;s:3:\"pid\";s:1:\"0\";s:4:\"name\";s:12:\"网站设置\";s:3:\"var\";N;s:5:\"value\";N;s:4:\"type\";N;s:5:\"alter\";N;s:7:\"comment\";N;s:5:\"level\";i:1;s:7:\"uploads\";a:0:{}}i:1;a:10:{s:2:\"id\";i:9;s:3:\"pid\";s:1:\"0\";s:4:\"name\";s:12:\"微信设置\";s:3:\"var\";N;s:5:\"value\";N;s:4:\"type\";N;s:5:\"alter\";N;s:7:\"comment\";N;s:5:\"level\";i:1;s:7:\"uploads\";a:0:{}}i:2;a:10:{s:2:\"id\";i:2;s:3:\"pid\";s:1:\"1\";s:4:\"name\";s:12:\"公共设置\";s:3:\"var\";N;s:5:\"value\";N;s:4:\"type\";N;s:5:\"alter\";N;s:7:\"comment\";N;s:5:\"level\";i:2;s:7:\"uploads\";a:0:{}}i:3;a:10:{s:2:\"id\";i:5;s:3:\"pid\";s:1:\"1\";s:4:\"name\";s:9:\"SEO设置\";s:3:\"var\";N;s:5:\"value\";N;s:4:\"type\";N;s:5:\"alter\";N;s:7:\"comment\";N;s:5:\"level\";i:2;s:7:\"uploads\";a:0:{}}i:4;a:10:{s:2:\"id\";i:10;s:3:\"pid\";s:1:\"9\";s:4:\"name\";s:12:\"公共参数\";s:3:\"var\";N;s:5:\"value\";N;s:4:\"type\";N;s:5:\"alter\";N;s:7:\"comment\";N;s:5:\"level\";i:2;s:7:\"uploads\";a:0:{}}i:5;a:10:{s:2:\"id\";i:3;s:3:\"pid\";s:1:\"2\";s:4:\"name\";s:12:\"网站名称\";s:3:\"var\";s:8:\"web_name\";s:5:\"value\";s:0:\"\";s:4:\"type\";s:4:\"text\";s:5:\"alter\";N;s:7:\"comment\";s:24:\"网站名称，2-6个字\";s:5:\"level\";i:3;s:7:\"uploads\";a:0:{}}i:6;a:10:{s:2:\"id\";i:4;s:3:\"pid\";s:1:\"2\";s:4:\"name\";s:10:\"网站LOGO\";s:3:\"var\";s:8:\"web_logo\";s:5:\"value\";N;s:4:\"type\";s:4:\"file\";s:5:\"alter\";N;s:7:\"comment\";s:10:\"网站LOGO\";s:5:\"level\";i:3;s:7:\"uploads\";a:0:{}}i:7;a:10:{s:2:\"id\";i:6;s:3:\"pid\";s:1:\"5\";s:4:\"name\";s:9:\"SEO开关\";s:3:\"var\";s:10:\"seo_switch\";s:5:\"value\";s:1:\"1\";s:4:\"type\";s:5:\"radio\";s:5:\"alter\";s:34:\"a:2:{i:1;s:3:\"开\";i:0;s:3:\"关\";}\";s:7:\"comment\";s:42:\"是否开启SEO的默认关键字和描述\";s:5:\"level\";i:3;s:7:\"uploads\";a:0:{}}i:8;a:10:{s:2:\"id\";i:7;s:3:\"pid\";s:1:\"5\";s:4:\"name\";s:9:\"关键字\";s:3:\"var\";s:7:\"seo_key\";s:5:\"value\";s:0:\"\";s:4:\"type\";s:4:\"text\";s:5:\"alter\";N;s:7:\"comment\";s:21:\"SEO的默认关键字\";s:5:\"level\";i:3;s:7:\"uploads\";a:0:{}}i:9;a:10:{s:2:\"id\";i:8;s:3:\"pid\";s:1:\"5\";s:4:\"name\";s:6:\"描述\";s:3:\"var\";s:8:\"seo_desc\";s:5:\"value\";s:0:\"\";s:4:\"type\";s:8:\"textarea\";s:5:\"alter\";N;s:7:\"comment\";s:18:\"SEO的默认描述\";s:5:\"level\";i:3;s:7:\"uploads\";a:0:{}}i:10;a:10:{s:2:\"id\";i:11;s:3:\"pid\";s:1:\"2\";s:4:\"name\";s:12:\"短信签名\";s:3:\"var\";s:8:\"web_sign\";s:5:\"value\";s:0:\"\";s:4:\"type\";s:4:\"text\";s:5:\"alter\";N;s:7:\"comment\";s:27:\"短信签名，2-5个汉字\";s:5:\"level\";i:3;s:7:\"uploads\";a:0:{}}i:11;a:10:{s:2:\"id\";i:12;s:3:\"pid\";s:2:\"10\";s:4:\"name\";s:5:\"AppId\";s:3:\"var\";s:8:\"wx_appid\";s:5:\"value\";N;s:4:\"type\";s:4:\"text\";s:5:\"alter\";N;s:7:\"comment\";s:23:\"微信公众号的AppId\";s:5:\"level\";i:3;s:7:\"uploads\";a:0:{}}i:12;a:10:{s:2:\"id\";i:13;s:3:\"pid\";s:2:\"10\";s:4:\"name\";s:9:\"AppSecret\";s:3:\"var\";s:12:\"wx_appsecret\";s:5:\"value\";N;s:4:\"type\";s:4:\"text\";s:5:\"alter\";N;s:7:\"comment\";s:27:\"微信公众号的AppSecret\";s:5:\"level\";i:3;s:7:\"uploads\";a:0:{}}i:13;a:10:{s:2:\"id\";i:14;s:3:\"pid\";s:2:\"10\";s:4:\"name\";s:5:\"MCHID\";s:3:\"var\";s:8:\"wx_mchid\";s:5:\"value\";N;s:4:\"type\";s:4:\"text\";s:5:\"alter\";N;s:7:\"comment\";s:17:\"微信商户号ID\";s:5:\"level\";i:3;s:7:\"uploads\";a:0:{}}i:14;a:10:{s:2:\"id\";i:15;s:3:\"pid\";s:2:\"10\";s:4:\"name\";s:3:\"KEY\";s:3:\"var\";s:6:\"wx_key\";s:5:\"value\";N;s:4:\"type\";s:4:\"text\";s:5:\"alter\";N;s:7:\"comment\";s:15:\"微信秘钥KEY\";s:5:\"level\";i:3;s:7:\"uploads\";a:0:{}}i:15;a:10:{s:2:\"id\";i:16;s:3:\"pid\";s:1:\"2\";s:4:\"name\";s:9:\"Copyright\";s:3:\"var\";s:13:\"web_copyright\";s:5:\"value\";s:0:\"\";s:4:\"type\";s:8:\"textarea\";s:5:\"alter\";N;s:7:\"comment\";s:12:\"版权信息\";s:5:\"level\";i:3;s:7:\"uploads\";a:0:{}}}', '1', '1');

-- ----------------------------
-- Table structure for qipei_user
-- ----------------------------
DROP TABLE IF EXISTS `qipei_user`;
CREATE TABLE `qipei_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `user_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of qipei_user
-- ----------------------------
INSERT INTO `qipei_user` VALUES ('1', 'gfgh', '', '2017-05-11 22:43:56');

-- ----------------------------
-- Table structure for rbac_node
-- ----------------------------
DROP TABLE IF EXISTS `rbac_node`;
CREATE TABLE `rbac_node` (
  `id` int(4) NOT NULL AUTO_INCREMENT COMMENT '用户许可表',
  `operation` varchar(50) NOT NULL DEFAULT '' COMMENT '用户操作的节点',
  `title` varchar(50) NOT NULL DEFAULT '' COMMENT '操作名称',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of rbac_node
-- ----------------------------
INSERT INTO `rbac_node` VALUES ('1', 'index', '');
INSERT INTO `rbac_node` VALUES ('2', 'article', '');
INSERT INTO `rbac_node` VALUES ('3', 'user', '');
INSERT INTO `rbac_node` VALUES ('4', 'order', '');
INSERT INTO `rbac_node` VALUES ('5', 'role', '');
INSERT INTO `rbac_node` VALUES ('6', 'urlget', '');
INSERT INTO `rbac_node` VALUES ('7', 'system', '');
INSERT INTO `rbac_node` VALUES ('8', 'listsa', '');
INSERT INTO `rbac_node` VALUES ('9', 'add', '');
INSERT INTO `rbac_node` VALUES ('10', 'updete', '');
INSERT INTO `rbac_node` VALUES ('11', 'delete', '');
INSERT INTO `rbac_node` VALUES ('12', 'deleteall', '');
INSERT INTO `rbac_node` VALUES ('13', 'set', '');
INSERT INTO `rbac_node` VALUES ('14', 'listAuth', '');
INSERT INTO `rbac_node` VALUES ('15', 'addRole', '');
INSERT INTO `rbac_node` VALUES ('16', 'receive', '');
INSERT INTO `rbac_node` VALUES ('17', 'userRole', '');
INSERT INTO `rbac_node` VALUES ('18', 'vip2', '');
INSERT INTO `rbac_node` VALUES ('19', 'yyy', 'yyy');

-- ----------------------------
-- Table structure for rbac_role
-- ----------------------------
DROP TABLE IF EXISTS `rbac_role`;
CREATE TABLE `rbac_role` (
  `id` int(4) NOT NULL AUTO_INCREMENT COMMENT '分组的id',
  `role_title` varchar(20) NOT NULL DEFAULT '' COMMENT '角色名称',
  `node_id` varchar(50) NOT NULL DEFAULT '' COMMENT '节点的id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of rbac_role
-- ----------------------------
INSERT INTO `rbac_role` VALUES ('1', '普通组', '1,2,3,4,7');
INSERT INTO `rbac_role` VALUES ('2', '高级组', '1,2,3');
INSERT INTO `rbac_role` VALUES ('3', '超级组', '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19');

-- ----------------------------
-- Table structure for rbac_user
-- ----------------------------
DROP TABLE IF EXISTS `rbac_user`;
CREATE TABLE `rbac_user` (
  `id` int(4) NOT NULL AUTO_INCREMENT COMMENT '用户表',
  `username` varchar(30) NOT NULL DEFAULT '' COMMENT '用户名称',
  `pwd` char(32) NOT NULL DEFAULT '' COMMENT '密码',
  `role_id` tinyint(1) NOT NULL COMMENT '分组ID',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of rbac_user
-- ----------------------------
INSERT INTO `rbac_user` VALUES ('1', 'admin', '', '1');
INSERT INTO `rbac_user` VALUES ('2', 'admin2', '', '1');
INSERT INTO `rbac_user` VALUES ('3', 'admin3', '', '2');
INSERT INTO `rbac_user` VALUES ('4', 'admin4', '', '2');
INSERT INTO `rbac_user` VALUES ('5', 'admin5', '', '3');

-- ----------------------------
-- Table structure for shop_class
-- ----------------------------
DROP TABLE IF EXISTS `shop_class`;
CREATE TABLE `shop_class` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL DEFAULT '' COMMENT '类型名父类',
  `pid` int(4) unsigned DEFAULT NULL COMMENT '子类',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of shop_class
-- ----------------------------
INSERT INTO `shop_class` VALUES ('1', '电器', '0');
INSERT INTO `shop_class` VALUES ('2', '家用电器', '1');
INSERT INTO `shop_class` VALUES ('3', '数码商品', '1');
INSERT INTO `shop_class` VALUES ('4', '电脑', '3');
INSERT INTO `shop_class` VALUES ('5', '手机', '3');
INSERT INTO `shop_class` VALUES ('9', '女装', '8');
INSERT INTO `shop_class` VALUES ('8', '服装', '0');
INSERT INTO `shop_class` VALUES ('10', '男装', '8');
INSERT INTO `shop_class` VALUES ('11', '洗衣机', '2');
INSERT INTO `shop_class` VALUES ('12', '衬衫', '8');
INSERT INTO `shop_class` VALUES ('13', '西装', '8');
INSERT INTO `shop_class` VALUES ('14', '男士牛仔裤', '10');
INSERT INTO `shop_class` VALUES ('15', '女士牛仔裤', '9');
INSERT INTO `shop_class` VALUES ('16', '苹果手机', '5');
INSERT INTO `shop_class` VALUES ('17', '小米手机', '5');

-- ----------------------------
-- Table structure for shop_classzm
-- ----------------------------
DROP TABLE IF EXISTS `shop_classzm`;
CREATE TABLE `shop_classzm` (
  `id` int(4) NOT NULL AUTO_INCREMENT COMMENT '商品分类表',
  `name` varchar(20) NOT NULL DEFAULT '' COMMENT '商品的类名',
  `ids` int(4) NOT NULL COMMENT '子类的ID',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of shop_classzm
-- ----------------------------

-- ----------------------------
-- Table structure for shop_fenlei
-- ----------------------------
DROP TABLE IF EXISTS `shop_fenlei`;
CREATE TABLE `shop_fenlei` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL DEFAULT '' COMMENT '分类名称',
  `pid` int(4) NOT NULL COMMENT '子分类',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of shop_fenlei
-- ----------------------------
INSERT INTO `shop_fenlei` VALUES ('1', '电器', '0');
INSERT INTO `shop_fenlei` VALUES ('2', '服装', '0');
INSERT INTO `shop_fenlei` VALUES ('3', '空调', '1');
INSERT INTO `shop_fenlei` VALUES ('4', '毛衣', '2');
INSERT INTO `shop_fenlei` VALUES ('5', '母婴', '0');
INSERT INTO `shop_fenlei` VALUES ('6', '奶粉', '5');
INSERT INTO `shop_fenlei` VALUES ('7', '数码', '0');
INSERT INTO `shop_fenlei` VALUES ('8', '手机', '7');
INSERT INTO `shop_fenlei` VALUES ('9', '苹果手机', '8');
INSERT INTO `shop_fenlei` VALUES ('10', '华为手机', '8');
INSERT INTO `shop_fenlei` VALUES ('11', '尿不湿', '5');
INSERT INTO `shop_fenlei` VALUES ('12', '电视机', '1');
INSERT INTO `shop_fenlei` VALUES ('13', '短袖', '2');
INSERT INTO `shop_fenlei` VALUES ('14', '洗衣机', '1');
INSERT INTO `shop_fenlei` VALUES ('15', '短裤', '2');

-- ----------------------------
-- Table structure for shop_goods
-- ----------------------------
DROP TABLE IF EXISTS `shop_goods`;
CREATE TABLE `shop_goods` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `goodsType` int(4) unsigned DEFAULT NULL COMMENT '商品所属分类',
  `goods_property` int(4) unsigned DEFAULT NULL COMMENT '商品属性id',
  `goodsName` varchar(50) NOT NULL DEFAULT '' COMMENT '商品名称',
  `goodsPrice` double(6,2) DEFAULT NULL COMMENT '商品价格',
  `goodsImg` varchar(120) NOT NULL DEFAULT '' COMMENT '商品图片地址',
  `tejia` int(10) unsigned NOT NULL,
  `goodsIntr` varchar(900) NOT NULL DEFAULT '' COMMENT '商品介绍',
  PRIMARY KEY (`id`),
  KEY `goodsName` (`goodsName`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of shop_goods
-- ----------------------------
INSERT INTO `shop_goods` VALUES ('1', '5', null, '手机6s', '2999.23', 'scimages/57d0c55bNa8230260.jpg', '1', '苹果手机不能买，要买就买老人机kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk');
INSERT INTO `shop_goods` VALUES ('2', '10', null, '衬衫', '288.99', 'scimages/57d0c55bNa8230260.jpg', '0', '海澜之家男装');
INSERT INTO `shop_goods` VALUES ('3', '9', null, '裙子', '99.99', 'scimages/57d0c55bNa8230260.jpg', '0', 'XXX牌子');
INSERT INTO `shop_goods` VALUES ('4', null, null, '苹果手机', '99.98', '1.jpg', '0', '');
INSERT INTO `shop_goods` VALUES ('5', null, null, '苹果', '2589.00', '1.jpg', '0', '');

-- ----------------------------
-- Table structure for shop_goodszm
-- ----------------------------
DROP TABLE IF EXISTS `shop_goodszm`;
CREATE TABLE `shop_goodszm` (
  `id` int(4) NOT NULL AUTO_INCREMENT COMMENT '商品表',
  `goodsname` varchar(100) NOT NULL DEFAULT '' COMMENT '商品名称',
  `goodsimgurl` varchar(260) NOT NULL DEFAULT '' COMMENT '商品的图片',
  `goodsprce` double(7,2) NOT NULL DEFAULT '0.00' COMMENT '商品的价格',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of shop_goodszm
-- ----------------------------
INSERT INTO `shop_goodszm` VALUES ('1', '华为手机', '', '0.00');
INSERT INTO `shop_goodszm` VALUES ('2', '小米手机', '', '4.66');
INSERT INTO `shop_goodszm` VALUES ('3', '苹果手机', '', '55.89');
INSERT INTO `shop_goodszm` VALUES ('4', '笔记本', '', '0.00');
INSERT INTO `shop_goodszm` VALUES ('5', '360手机', '', '0.00');
INSERT INTO `shop_goodszm` VALUES ('6', '', '', '0.00');

-- ----------------------------
-- Table structure for shop_goods_property
-- ----------------------------
DROP TABLE IF EXISTS `shop_goods_property`;
CREATE TABLE `shop_goods_property` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL DEFAULT '' COMMENT '商品的属性值',
  `goodsid` int(4) NOT NULL COMMENT '商品的ID',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of shop_goods_property
-- ----------------------------
INSERT INTO `shop_goods_property` VALUES ('1', '黑色', '1');
INSERT INTO `shop_goods_property` VALUES ('2', '红色', '1');
INSERT INTO `shop_goods_property` VALUES ('3', '金色', '1');
INSERT INTO `shop_goods_property` VALUES ('4', '白色', '1');
INSERT INTO `shop_goods_property` VALUES ('5', '4.7寸', '1');
INSERT INTO `shop_goods_property` VALUES ('6', '5.5寸', '1');
INSERT INTO `shop_goods_property` VALUES ('7', '官方标配', '1');
INSERT INTO `shop_goods_property` VALUES ('8', '港版', '1');
INSERT INTO `shop_goods_property` VALUES ('9', '美版', '1');
INSERT INTO `shop_goods_property` VALUES ('10', '国行', '1');
INSERT INTO `shop_goods_property` VALUES ('11', '2GROM', '1');
INSERT INTO `shop_goods_property` VALUES ('12', '4GROM', '1');
INSERT INTO `shop_goods_property` VALUES ('13', '8GROM', '1');
INSERT INTO `shop_goods_property` VALUES ('14', '16G内存', '1');
INSERT INTO `shop_goods_property` VALUES ('15', '32G内存', '1');
INSERT INTO `shop_goods_property` VALUES ('16', '64G内存', '1');

-- ----------------------------
-- Table structure for shop_user
-- ----------------------------
DROP TABLE IF EXISTS `shop_user`;
CREATE TABLE `shop_user` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '' COMMENT '用户名',
  `password` char(32) NOT NULL DEFAULT '' COMMENT '密码',
  `create_time` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of shop_user
-- ----------------------------
INSERT INTO `shop_user` VALUES ('1', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '1499128835');
INSERT INTO `shop_user` VALUES ('2', 'admin1', 'e10adc3949ba59abbe56e057f20f883e', '1499129203');
INSERT INTO `shop_user` VALUES ('3', 'admin2', 'e10adc3949ba59abbe56e057f20f883e', '1499129505');
INSERT INTO `shop_user` VALUES ('4', 'admin4', 'e10adc3949ba59abbe56e057f20f883e', '1499129556');
INSERT INTO `shop_user` VALUES ('5', 'admin4', 'e10adc3949ba59abbe56e057f20f883e', '1499129566');
INSERT INTO `shop_user` VALUES ('6', 'admin5', 'e10adc3949ba59abbe56e057f20f883e', '1499129692');
INSERT INTO `shop_user` VALUES ('7', 'admin3', 'e10adc3949ba59abbe56e057f20f883e', '1499129784');
INSERT INTO `shop_user` VALUES ('8', 'admin6', 'e10adc3949ba59abbe56e057f20f883e', '1499130204');
INSERT INTO `shop_user` VALUES ('9', 'admin7', 'e10adc3949ba59abbe56e057f20f883e', '1499130249');
INSERT INTO `shop_user` VALUES ('10', 'admin8', 'e10adc3949ba59abbe56e057f20f883e', '1499130811');
INSERT INTO `shop_user` VALUES ('11', 'demo1', '11ddbaf3386aea1f2974eee984542152', '1499131751');
INSERT INTO `shop_user` VALUES ('12', 'zhangfei', 'e10adc3949ba59abbe56e057f20f883e', '1499140578');
INSERT INTO `shop_user` VALUES ('13', '张三', '202cb962ac59075b964b07152d234b70', '1500543863');

-- ----------------------------
-- Table structure for shop_userzm
-- ----------------------------
DROP TABLE IF EXISTS `shop_userzm`;
CREATE TABLE `shop_userzm` (
  `id` int(4) NOT NULL AUTO_INCREMENT COMMENT '商城用户表',
  `username` varchar(30) NOT NULL DEFAULT '' COMMENT '用户表',
  `pwd` char(32) NOT NULL DEFAULT '' COMMENT '密码',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of shop_userzm
-- ----------------------------

-- ----------------------------
-- Table structure for shop_user_link
-- ----------------------------
DROP TABLE IF EXISTS `shop_user_link`;
CREATE TABLE `shop_user_link` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `usernameid` int(4) unsigned DEFAULT NULL COMMENT '用户表id',
  `address` varchar(150) NOT NULL DEFAULT '' COMMENT '地址',
  `tel` varchar(20) NOT NULL DEFAULT '' COMMENT '手机号',
  PRIMARY KEY (`id`),
  KEY `tel` (`tel`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of shop_user_link
-- ----------------------------

-- ----------------------------
-- Table structure for study
-- ----------------------------
DROP TABLE IF EXISTS `study`;
CREATE TABLE `study` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `xingming` varchar(20) NOT NULL DEFAULT '',
  `city` varchar(20) NOT NULL DEFAULT '',
  `shouji` varchar(20) NOT NULL DEFAULT '',
  `guojia` varchar(20) DEFAULT '',
  `num` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of study
-- ----------------------------
INSERT INTO `study` VALUES ('1', '张三', '西安', '130012345678', '中国', '50');
INSERT INTO `study` VALUES ('2', 'yyyyy', '渭南', '', '中国', '90');
INSERT INTO `study` VALUES ('3', '王五', '汉中', '', '中国', '60');
INSERT INTO `study` VALUES ('4', '张三', '西安', '', '美国', '40');
INSERT INTO `study` VALUES ('5', '小王', '渭南市', '123456', 'chaina', '30');
INSERT INTO `study` VALUES ('6', '张三丰', '', '', '', '0');
INSERT INTO `study` VALUES ('7', '张三丰', '', '', '', '0');
INSERT INTO `study` VALUES ('9', 'ffffffff', '', '', '', '0');
INSERT INTO `study` VALUES ('10', 'yyyyy', '', '', '', '1');

-- ----------------------------
-- Table structure for study1
-- ----------------------------
DROP TABLE IF EXISTS `study1`;
CREATE TABLE `study1` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `ipd` int(4) unsigned NOT NULL DEFAULT '0',
  `name` varchar(30) NOT NULL DEFAULT '' COMMENT '姓名',
  `age` int(4) NOT NULL DEFAULT '0' COMMENT '年龄',
  `sex` varchar(30) NOT NULL DEFAULT '' COMMENT '性别',
  `relish` varchar(40) NOT NULL DEFAULT '' COMMENT '爱好',
  `class` varchar(30) NOT NULL DEFAULT '' COMMENT '班级',
  `img` varchar(300) NOT NULL DEFAULT '' COMMENT '图片',
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=114 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of study1
-- ----------------------------
INSERT INTO `study1` VALUES ('1', '1', '南山门杨戬', '18', '男', '音乐', '好好学习2222', '');
INSERT INTO `study1` VALUES ('2', '2', '巨灵神', '30', '男', '足球张', 'php班', '');
INSERT INTO `study1` VALUES ('3', '4', '孙悟空', '30', '男', '高薪就业', 'php班', '');
INSERT INTO `study1` VALUES ('4', '0', '飞凡有朋友就推荐', '30', '男', '足球2', 'php班', '');
INSERT INTO `study1` VALUES ('5', '0', '黄飞鸿11', '30', '男', '足球3', 'php班', '');
INSERT INTO `study1` VALUES ('6', '0', '蜘蛛精', '30', '男', '足球4', 'php班', '');
INSERT INTO `study1` VALUES ('7', '0', '哪吒闹海', '29', '男', '足球5', 'php班', '');
INSERT INTO `study1` VALUES ('8', '0', '玉皇大帝', '28', '男', '足球6', '玉皇大帝', '');
INSERT INTO `study1` VALUES ('9', '0', '黑旋风李逵', '30', '男', '足球7', 'php班', '');
INSERT INTO `study1` VALUES ('10', '0', '女儿国国王', '30', '男', '足球8', 'php班', '');
INSERT INTO `study1` VALUES ('11', '0', '梁山好汉李逵', '30', '男', '足球9', 'php班', '');
INSERT INTO `study1` VALUES ('12', '0', '牛魔王', '30', '男', '足球10', 'php班', '');
INSERT INTO `study1` VALUES ('13', '0', '张11', '30', '男', '足球11', 'php班', '');
INSERT INTO `study1` VALUES ('14', '0', '张12', '30', '男', '足球12', 'php班', '');
INSERT INTO `study1` VALUES ('15', '0', '张13', '30', '男', '足球13', 'php班', '');
INSERT INTO `study1` VALUES ('16', '0', '铁扇公主', '30', '女', '铁扇', 'php班04班', '');
INSERT INTO `study1` VALUES ('17', '0', '天山童姥', '0', '女', '男', '足球', '');
INSERT INTO `study1` VALUES ('18', '0', '王小子', '88', '女', '44', 'tttttt', '');
INSERT INTO `study1` VALUES ('19', '0', '银脚大黄', '12', '男', '吃唐僧肉', '不知道1', '');
INSERT INTO `study1` VALUES ('20', '0', '小白龙', '18', '男', '奔跑', '无 没有', '');
INSERT INTO `study1` VALUES ('21', '0', '东海龙王', '19', '男', '美女', '不知道', '');
INSERT INTO `study1` VALUES ('22', '0', '北海龙王', '55', '男', '美女', '师傅', '');
INSERT INTO `study1` VALUES ('23', '0', '干露露1', '21', '女', '演戏', 'yyyyy', '');
INSERT INTO `study1` VALUES ('24', '0', '赵薇', '33', '女', '电影', '不知道', '');
INSERT INTO `study1` VALUES ('25', '0', '你好', '23', '', '', '不知道', '');
INSERT INTO `study1` VALUES ('26', '0', '黑风怪', '12', '男', '不详', '不详', '');
INSERT INTO `study1` VALUES ('27', '0', '太上老君', '12', '男', '的地方', '唔清楚', '');
INSERT INTO `study1` VALUES ('28', '0', '不知道', '0', '', '', '', '');
INSERT INTO `study1` VALUES ('29', '0', 'jjjjj', '90', '', '', '', '');
INSERT INTO `study1` VALUES ('30', '0', '黄飞鸿', '18', '男', '武术', '太极班1', '');
INSERT INTO `study1` VALUES ('31', '0', '张不知道', '34', '女', '体育', 'PHP', '');
INSERT INTO `study1` VALUES ('32', '0', 'wang 同学', '13', '', '', 'dddddd', '');
INSERT INTO `study1` VALUES ('33', '0', '习大大3', '13', '男', '祖国', '是是是', '');
INSERT INTO `study1` VALUES ('34', '0', '西安你好', '20', '', '睡觉', 'smarty班级', '');
INSERT INTO `study1` VALUES ('35', '0', '渭南', '13', '', '旅游', 'phpbanb', '');
INSERT INTO `study1` VALUES ('36', '0', '没有名字', '0', '男', '不知道', '不知道班级', '');
INSERT INTO `study1` VALUES ('37', '0', '蒋介石', '88', '男', '美女', '中国富强', '');
INSERT INTO `study1` VALUES ('38', '0', '你好PHP班', '13', '', 'PHP研究', 'PHP版', '');
INSERT INTO `study1` VALUES ('39', '0', '中国油田1', '13', '女', 'PHP研究', 'PHP版', '');
INSERT INTO `study1` VALUES ('80', '0', '少林武功', '90', '', '', '', '');
INSERT INTO `study1` VALUES ('108', '0', 'AAAAA', '18', '', '', 'php', '');
INSERT INTO `study1` VALUES ('42', '9', '你好不知道', '30', '', '不知道', '不知道1', '');
INSERT INTO `study1` VALUES ('43', '0', '好学生', '0', '', '', '', '');
INSERT INTO `study1` VALUES ('110', '0', 'AAAAAS', '19', '', '', 'phpB', '');
INSERT INTO `study1` VALUES ('109', '0', 'AAAAAQ', '15', '', '', 'phpA', '');
INSERT INTO `study1` VALUES ('48', '0', 'zzzzz', '5', '', '', '', '');
INSERT INTO `study1` VALUES ('49', '0', '张思', '99', '', '', '', '');
INSERT INTO `study1` VALUES ('50', '0', '张思3', '99', '', '', '', '');
INSERT INTO `study1` VALUES ('51', '0', '李思', '55', '', '', '', '');
INSERT INTO `study1` VALUES ('105', '0', 'uuuuu', '0', '', '', '', '');
INSERT INTO `study1` VALUES ('53', '0', 'dddd', '44', '', '', '', '');
INSERT INTO `study1` VALUES ('54', '0', '李四123', '23', '', '', '', '');
INSERT INTO `study1` VALUES ('55', '0', '李武', '15', '', '', '', '');
INSERT INTO `study1` VALUES ('57', '0', '黄飞鸿VS', '30', '', '', '', '');
INSERT INTO `study1` VALUES ('58', '0', '黄飞鸿VS1', '30', '', '', '', '');
INSERT INTO `study1` VALUES ('59', '0', '黄飞鸿VS2', '30', '', '', '', '');
INSERT INTO `study1` VALUES ('61', '0', 'jjjjj', '0', '', '', '', '');
INSERT INTO `study1` VALUES ('62', '0', 'kkk', '14', '', '', '', '');
INSERT INTO `study1` VALUES ('63', '0', '令狐冲', '28', '', '', '华山论剑', '');
INSERT INTO `study1` VALUES ('64', '0', '令狐冲1', '25', '', '', '华山论剑1', '');
INSERT INTO `study1` VALUES ('65', '0', '周芷若', '18', '', '', '九阴白骨爪', '');
INSERT INTO `study1` VALUES ('66', '0', '周芷若', '18', '', '', '九阴白骨爪', '');
INSERT INTO `study1` VALUES ('67', '0', '周芷若a', '18', '', '', '九阴白骨爪a', '');
INSERT INTO `study1` VALUES ('68', '0', '周芷若b', '18', '', '', '九阴白骨爪b', '');
INSERT INTO `study1` VALUES ('69', '0', '周芷若c', '18', '', '', '九阴白骨爪c', '');
INSERT INTO `study1` VALUES ('70', '0', '周芷若a1', '18', '', '', '九阴白骨爪a', '');
INSERT INTO `study1` VALUES ('71', '0', '周芷若b2', '18', '', '', '九阴白骨爪b', '');
INSERT INTO `study1` VALUES ('72', '0', '周芷若c3', '18', '', '', '九阴白骨爪c', '');
INSERT INTO `study1` VALUES ('73', '0', '周芷若a1', '18', '', '', '九阴白骨爪a', '');
INSERT INTO `study1` VALUES ('74', '0', '周芷若b2', '18', '', '', '九阴白骨爪b', '');
INSERT INTO `study1` VALUES ('76', '0', '张三', '23', '', '', '你好phpp', '');
INSERT INTO `study1` VALUES ('77', '0', 'adminj', '21', '', '', '', '');
INSERT INTO `study1` VALUES ('78', '0', '犬夜叉', '24', '', '', '坎坎坷坷', '');
INSERT INTO `study1` VALUES ('89', '0', '你是什么人我不知道啊', '12', '女', '没有', '达到的', '');
INSERT INTO `study1` VALUES ('88', '0', '知道先生', '0', '', '', '', '');
INSERT INTO `study1` VALUES ('86', '0', '知道先生', '0', '', '', '', '');
INSERT INTO `study1` VALUES ('90', '0', '李暮暮', '23', '', '', 'PHP高级版', '');
INSERT INTO `study1` VALUES ('91', '0', '张三丰1', '105', '', '', '太极', '');
INSERT INTO `study1` VALUES ('92', '0', '王老板', '23', '', '', '地主', '');
INSERT INTO `study1` VALUES ('93', '0', '熊大', '2', '', '', '森林', '');
INSERT INTO `study1` VALUES ('94', '0', '三生三世', '23', '', '', '看空间', '');
INSERT INTO `study1` VALUES ('95', '0', '师傅是否水电费', '34', '', '', '的是否水电费', '');
INSERT INTO `study1` VALUES ('96', '0', '降龙十八掌', '12', '', '', '太极', 'uploads/nuo8aXcwJPb5Gmdq8ohZsNxzRDIPwrgTrchmvmNu.jpeg');
INSERT INTO `study1` VALUES ('97', '0', '我的名字', '23', '', '', 'php班级', '');
INSERT INTO `study1` VALUES ('98', '0', '张三', '18', '', '音乐', '好好学习', '');
INSERT INTO `study1` VALUES ('112', '0', 'AAAAA', '18', '', '', 'php', '');
INSERT INTO `study1` VALUES ('111', '0', 'BBBB', '1', '', '', 'Aphp', '');
INSERT INTO `study1` VALUES ('101', '0', 'uuuuyyyy', '127', '', '', '2uuuuyyyy', '');
INSERT INTO `study1` VALUES ('102', '0', 'uuuuyyyy', '88', '', '', '2uuuuyyyy', '');
INSERT INTO `study1` VALUES ('103', '0', '王五103', '67', '', '', '', '');

-- ----------------------------
-- Table structure for teacher
-- ----------------------------
DROP TABLE IF EXISTS `teacher`;
CREATE TABLE `teacher` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `ipd` int(4) unsigned NOT NULL DEFAULT '0',
  `name` varchar(20) NOT NULL DEFAULT '',
  `age` tinyint(2) NOT NULL DEFAULT '0',
  `sex` varchar(10) NOT NULL DEFAULT '',
  `class` varchar(20) NOT NULL DEFAULT '',
  `relish` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of teacher
-- ----------------------------
INSERT INTO `teacher` VALUES ('1', '3', '刘老师1', '29', '男', 'php精英班', '写作');
INSERT INTO `teacher` VALUES ('2', '4', '刘老师2', '29', '男', 'php精英班', '写作');
INSERT INTO `teacher` VALUES ('3', '5', '刘老师3', '29', '男', 'php精英班', '写作');
INSERT INTO `teacher` VALUES ('4', '0', '刘老师4', '29', '男', 'php精英班', '写作');
INSERT INTO `teacher` VALUES ('5', '0', '刘老师5', '29', '男', 'php精英班', '写作');
INSERT INTO `teacher` VALUES ('6', '0', '刘老师6', '29', '男', 'php精英班', '写作');
INSERT INTO `teacher` VALUES ('7', '0', '刘老师7', '29', '男', 'php精英班', '写作');
INSERT INTO `teacher` VALUES ('8', '0', '刘老师8', '29', '男', 'php精英班', '写作');
INSERT INTO `teacher` VALUES ('9', '0', '刘老师9', '29', '男', 'php精英班', '写作');
INSERT INTO `teacher` VALUES ('10', '0', '刘老师10', '29', '男', 'php精英班', '写作');
INSERT INTO `teacher` VALUES ('11', '0', '刘老师11', '29', '男', 'php精英班', '写作');

-- ----------------------------
-- Table structure for test
-- ----------------------------
DROP TABLE IF EXISTS `test`;
CREATE TABLE `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `mobile` char(11) DEFAULT NULL,
  `title` char(20) DEFAULT NULL,
  `message` text,
  `reg_date` date DEFAULT NULL,
  `state` tinyint(4) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='测试表（表结构可以随意调整）';

-- ----------------------------
-- Records of test
-- ----------------------------

-- ----------------------------
-- Table structure for test1
-- ----------------------------
DROP TABLE IF EXISTS `test1`;
CREATE TABLE `test1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of test1
-- ----------------------------
INSERT INTO `test1` VALUES ('2', '苗族');
INSERT INTO `test1` VALUES ('3', '维族');
INSERT INTO `test1` VALUES ('4', '彝族');

-- ----------------------------
-- Table structure for test2
-- ----------------------------
DROP TABLE IF EXISTS `test2`;
CREATE TABLE `test2` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `tname` varchar(50) COLLATE utf8_bin NOT NULL,
  `t1id` int(11) NOT NULL,
  PRIMARY KEY (`tid`),
  KEY `t1id` (`t1id`),
  CONSTRAINT `test2_ibfk_1` FOREIGN KEY (`t1id`) REFERENCES `test1` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of test2
-- ----------------------------
INSERT INTO `test2` VALUES ('2', '张三', '2');
INSERT INTO `test2` VALUES ('3', '王五', '3');
INSERT INTO `test2` VALUES ('4', '赵六', '4');

-- ----------------------------
-- Table structure for tg_buy
-- ----------------------------
DROP TABLE IF EXISTS `tg_buy`;
CREATE TABLE `tg_buy` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT COMMENT '购物车表的id',
  `goodsID` smallint(4) unsigned NOT NULL COMMENT '商品的id号',
  `goodsmun` int(4) unsigned NOT NULL COMMENT '购买数量',
  `userid` int(4) unsigned NOT NULL COMMENT '用户的id号',
  `goodsstyle` varchar(200) NOT NULL COMMENT '商品的属性',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tg_buy
-- ----------------------------
INSERT INTO `tg_buy` VALUES ('1', '7', '2', '1', '42码.不加绒');
INSERT INTO `tg_buy` VALUES ('2', '7', '1', '1', '42码.超薄款');
INSERT INTO `tg_buy` VALUES ('3', '7', '2', '1', '36码');
INSERT INTO `tg_buy` VALUES ('4', '5', '2', '1', '12L');
INSERT INTO `tg_buy` VALUES ('5', '2', '3', '1', '大屏.金属');
INSERT INTO `tg_buy` VALUES ('6', '8', '3', '1', 'uu');
INSERT INTO `tg_buy` VALUES ('7', '7', '1', '1', '36码.35码.42码');
INSERT INTO `tg_buy` VALUES ('8', '3', '2', '4', '金属边框.曲屏');
INSERT INTO `tg_buy` VALUES ('9', '2', '10', '1', '大屏.金属');
INSERT INTO `tg_buy` VALUES ('10', '2', '1', '1', '大屏.金属');
INSERT INTO `tg_buy` VALUES ('11', '2', '1', '1', '大屏.金属');
INSERT INTO `tg_buy` VALUES ('12', '3', '12', '1', '金属边框.曲屏');

-- ----------------------------
-- Table structure for tg_class
-- ----------------------------
DROP TABLE IF EXISTS `tg_class`;
CREATE TABLE `tg_class` (
  `id` smallint(4) unsigned NOT NULL AUTO_INCREMENT COMMENT '分类表',
  `title` varchar(30) NOT NULL DEFAULT '' COMMENT '分类名称',
  `pid` smallint(4) unsigned NOT NULL COMMENT 'tg_classID',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tg_class
-- ----------------------------
INSERT INTO `tg_class` VALUES ('1', '家电', '0');
INSERT INTO `tg_class` VALUES ('2', '冰箱', '1');
INSERT INTO `tg_class` VALUES ('3', '洗衣机', '1');
INSERT INTO `tg_class` VALUES ('4', '手机', '0');
INSERT INTO `tg_class` VALUES ('5', '热水器', '1');
INSERT INTO `tg_class` VALUES ('6', '3C', '0');
INSERT INTO `tg_class` VALUES ('7', '服装', '0');
INSERT INTO `tg_class` VALUES ('8', '国产', '4');
INSERT INTO `tg_class` VALUES ('9', '苹果手机', '4');
INSERT INTO `tg_class` VALUES ('10', '苹果8', '9');

-- ----------------------------
-- Table structure for tg_goods
-- ----------------------------
DROP TABLE IF EXISTS `tg_goods`;
CREATE TABLE `tg_goods` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT COMMENT '商品表',
  `name` varchar(100) NOT NULL DEFAULT '' COMMENT '商品名称',
  `price` double(10,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '商品的价格',
  `mun` mediumint(4) unsigned NOT NULL DEFAULT '100' COMMENT '库存数量',
  `address` varchar(300) NOT NULL DEFAULT '' COMMENT '地址',
  `content` text NOT NULL COMMENT '介绍详情',
  `pic` varchar(200) NOT NULL DEFAULT '' COMMENT '商品封面图1',
  `pic2` varchar(200) NOT NULL DEFAULT '' COMMENT '商品封面图2',
  `classid` int(11) NOT NULL,
  `times` int(4) NOT NULL,
  `uptimes` int(4) NOT NULL COMMENT '修改的时间',
  `status` smallint(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tg_goods
-- ----------------------------
INSERT INTO `tg_goods` VALUES ('1', '苹果8手机', '6888.00', '44', '陕西.西安市.雁塔区.', '<p>苹果手机特价处理，1000元苹果8抓紧时间前抢购</p>', '150571850335277.jpg', '150528962452292.jpg', '4', '1505289624', '1505791340', '0');
INSERT INTO `tg_goods` VALUES ('2', '华为手机p8', '1780.00', '44', '陕西.西安市.雁塔区.', '<p>华为最新款手机ddf</p>', '15053515565263.jpg', '150535155640912.jpg', '4', '1505351556', '1509243338', '1');
INSERT INTO `tg_goods` VALUES ('3', '小米手机', '1678.00', '20', '陕西西安市雁塔区高新三路', '<p>不知道怎么回事<br/></p>', '150537431779614.jpg', '150537431715700.jpg', '4', '1505374317', '0', '1');
INSERT INTO `tg_goods` VALUES ('4', '海尔洗衣机1', '1100.00', '20', '陕西.西安市.雁塔区.', '\r\n海尔洗衣机点点滴滴\r\n\r\n', '150569687250506.jpg', '150569687239045.jpg', '3', '1505696872', '1505699311', '0');
INSERT INTO `tg_goods` VALUES ('5', '美的热水器', '1199.00', '20', '陕西.西安市.雁塔区.', '<p>美的热水器</p>', '150578241151152.jpg', '150578241123313.jpg', '5', '1505782411', '1505784005', '1');
INSERT INTO `tg_goods` VALUES ('6', '国美热水器', '1200.00', '21', '陕西.西安市.雁塔区.', '<p>点点滴滴</p>', '150587048018948.jpg', '150587048025287.jpg', '5', '1505870480', '1505892760', '1');
INSERT INTO `tg_goods` VALUES ('7', '男士秋冬牛仔裤', '59.00', '120', '陕西西安市雁塔区达到的弟弟多多多', '<p>点点滴滴<br/></p>', '150589299376058.jpg', '150589299370909.JPG', '7', '1505892993', '0', '1');
INSERT INTO `tg_goods` VALUES ('8', 'uuu', '55.00', '9', '陕西西安市雁塔区fsfdsf', '<p>sdfsdfsdf</p>', '150597676985526.jpg', '150597676957346.jpg', '6', '1505976769', '0', '1');

-- ----------------------------
-- Table structure for tg_style
-- ----------------------------
DROP TABLE IF EXISTS `tg_style`;
CREATE TABLE `tg_style` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT COMMENT '商品属性表的id',
  `stylename` varchar(50) NOT NULL DEFAULT '' COMMENT '属性名称',
  `class_id` int(4) NOT NULL COMMENT '商品的id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tg_style
-- ----------------------------
INSERT INTO `tg_style` VALUES ('1', '黑色a', '1');
INSERT INTO `tg_style` VALUES ('23', '金色年华a', '1');
INSERT INTO `tg_style` VALUES ('22', '大屏', '2');
INSERT INTO `tg_style` VALUES ('21', '金属', '2');
INSERT INTO `tg_style` VALUES ('5', '金属边框', '3');
INSERT INTO `tg_style` VALUES ('6', '曲屏', '3');
INSERT INTO `tg_style` VALUES ('7', '全自动', '4');
INSERT INTO `tg_style` VALUES ('8', '静音', '4');
INSERT INTO `tg_style` VALUES ('9', '智能', '4');
INSERT INTO `tg_style` VALUES ('10', '土豪金', '4');
INSERT INTO `tg_style` VALUES ('11', '土豪金色a', '1');
INSERT INTO `tg_style` VALUES ('12', '玫瑰金色a', '1');
INSERT INTO `tg_style` VALUES ('13', '苹果系统a', '1');
INSERT INTO `tg_style` VALUES ('14', '12L', '5');
INSERT INTO `tg_style` VALUES ('24', '静音', '6');
INSERT INTO `tg_style` VALUES ('25', '快速', '6');
INSERT INTO `tg_style` VALUES ('26', '36码', '7');
INSERT INTO `tg_style` VALUES ('27', '35码', '7');
INSERT INTO `tg_style` VALUES ('28', '41码', '7');
INSERT INTO `tg_style` VALUES ('29', '42码', '7');
INSERT INTO `tg_style` VALUES ('30', '加绒', '7');
INSERT INTO `tg_style` VALUES ('31', '不加绒', '7');
INSERT INTO `tg_style` VALUES ('32', '超薄款', '7');
INSERT INTO `tg_style` VALUES ('33', '加厚款', '7');
INSERT INTO `tg_style` VALUES ('34', 'uu', '8');

-- ----------------------------
-- Table structure for tg_user
-- ----------------------------
DROP TABLE IF EXISTS `tg_user`;
CREATE TABLE `tg_user` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(30) NOT NULL DEFAULT '' COMMENT '用户名',
  `pwd` varchar(32) NOT NULL DEFAULT '' COMMENT '密码',
  `create_time` int(4) DEFAULT NULL,
  `userroleid` smallint(6) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user` (`user`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tg_user
-- ----------------------------
INSERT INTO `tg_user` VALUES ('1', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '1505113293', '1');
INSERT INTO `tg_user` VALUES ('2', 'admin1', 'e10adc3949ba59abbe56e057f20f883e', '1505267934', '2');
INSERT INTO `tg_user` VALUES ('3', 'admin2', 'e10adc3949ba59abbe56e057f20f883e', '1505267994', '3');
INSERT INTO `tg_user` VALUES ('4', 'rzh', 'e10adc3949ba59abbe56e057f20f883e', '1508407150', '1');
INSERT INTO `tg_user` VALUES ('5', 'adminqqe', 'e10adc3949ba59abbe56e057f20f883e', '1508408229', '1');

-- ----------------------------
-- Table structure for think_zixun
-- ----------------------------
DROP TABLE IF EXISTS `think_zixun`;
CREATE TABLE `think_zixun` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '文章表',
  `title` char(50) NOT NULL DEFAULT '' COMMENT '文章标题',
  `type` smallint(4) NOT NULL COMMENT '文章类型',
  `neirong` varchar(1500) NOT NULL DEFAULT '' COMMENT '文章内容',
  `author` varchar(200) NOT NULL DEFAULT '' COMMENT '来源',
  `updatetime` int(4) NOT NULL COMMENT '更新时间',
  `sort` int(10) NOT NULL DEFAULT '100' COMMENT '排序',
  `view` int(10) NOT NULL DEFAULT '0' COMMENT '浏览次数',
  `status` smallint(4) NOT NULL COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_zixun
-- ----------------------------
INSERT INTO `think_zixun` VALUES ('1', '不知道哪里出了事', '1', '我们很好', '张三', '1500687204', '100', '0', '1');
INSERT INTO `think_zixun` VALUES ('3', 'php高级教程', '0', '高级课程需要学习linux  redis 缓存技术   后期需要把这些东西自己学会。', '不知道', '1501897580', '100', '0', '0');
INSERT INTO `think_zixun` VALUES ('2', '飞凡教育', '1', '讲解讲解军军军军军，坎坎坷坷扩     ', '弟弟', '0', '100', '0', '0');

-- ----------------------------
-- Table structure for tr
-- ----------------------------
DROP TABLE IF EXISTS `tr`;
CREATE TABLE `tr` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `kecheng` varchar(20) NOT NULL,
  `password` varchar(32) DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tr
-- ----------------------------
INSERT INTO `tr` VALUES ('1', '1', '张老师', 'php', '');
INSERT INTO `tr` VALUES ('2', '3', '王老师', '.net', '');
INSERT INTO `tr` VALUES ('3', '4', '苏老师', 'web', '');
INSERT INTO `tr` VALUES ('4', '6', '李老师', 'java', '');
INSERT INTO `tr` VALUES ('5', '9', '黄老师', '主要讲解所有课程', '');
INSERT INTO `tr` VALUES ('7', '0', '张三丰', '太极拳', '');
INSERT INTO `tr` VALUES ('8', '0', '令狐冲', '独孤九剑', '');
INSERT INTO `tr` VALUES ('9', '0', '张三丰1', '123456', '');
INSERT INTO `tr` VALUES ('10', '0', '张三丰2', '123456', '');
INSERT INTO `tr` VALUES ('11', '0', '张三丰3', '', '123456');
INSERT INTO `tr` VALUES ('12', '0', 'dfsdf', '', 'ggggggggggg');
INSERT INTO `tr` VALUES ('13', '0', '张五', '', '123456');
INSERT INTO `tr` VALUES ('14', '0', '2', '', '2');
INSERT INTO `tr` VALUES ('15', '0', '223', '', '23');
INSERT INTO `tr` VALUES ('16', '0', '223kk', '', '');
INSERT INTO `tr` VALUES ('17', '0', 'admin', '', '123456');
INSERT INTO `tr` VALUES ('18', '0', 'admins', '', '');

-- ----------------------------
-- Table structure for tr1
-- ----------------------------
DROP TABLE IF EXISTS `tr1`;
CREATE TABLE `tr1` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `kecheng` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tr1
-- ----------------------------
INSERT INTO `tr1` VALUES ('1', '0', 'dg', 'ffff');
INSERT INTO `tr1` VALUES ('2', '0', '张飞', '大飞哥');

-- ----------------------------
-- Table structure for tr_a
-- ----------------------------
DROP TABLE IF EXISTS `tr_a`;
CREATE TABLE `tr_a` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `id_a` tinyint(2) DEFAULT NULL,
  `id_b` mediumint(3) DEFAULT NULL,
  `id_c` bigint(8) DEFAULT NULL,
  `id_d` float(8,2) DEFAULT NULL,
  `id_e` double(3,2) DEFAULT NULL,
  `id_f` float(3,1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tr_a
-- ----------------------------
INSERT INTO `tr_a` VALUES ('1', '1', '1', '1', '0.99', '1.00', null);
INSERT INTO `tr_a` VALUES ('2', null, null, null, '0.99', '1.22', '99.9');
INSERT INTO `tr_a` VALUES ('3', null, null, null, '3.56', '3.56', '21.6');
INSERT INTO `tr_a` VALUES ('4', null, null, null, null, null, '1.7');
INSERT INTO `tr_a` VALUES ('5', null, null, null, '567897.88', '9.99', '67.7');
INSERT INTO `tr_a` VALUES ('6', null, null, null, '1000000.00', null, null);

-- ----------------------------
-- Table structure for tr_b
-- ----------------------------
DROP TABLE IF EXISTS `tr_b`;
CREATE TABLE `tr_b` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `id_a` date DEFAULT NULL,
  `id_b` time DEFAULT NULL,
  `id_c` year(4) DEFAULT NULL,
  `id_d` datetime DEFAULT NULL,
  `id_e` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tr_b
-- ----------------------------
INSERT INTO `tr_b` VALUES ('1', '2017-05-25', '14:41:29', '2017', '2017-05-25 14:41:46', '2017-05-26 14:41:53');
INSERT INTO `tr_b` VALUES ('2', null, null, null, null, '2017-05-25 14:43:19');
INSERT INTO `tr_b` VALUES ('3', null, null, null, null, '2017-05-25 14:43:54');

-- ----------------------------
-- Table structure for tr_string
-- ----------------------------
DROP TABLE IF EXISTS `tr_string`;
CREATE TABLE `tr_string` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `id_a` char(20) NOT NULL DEFAULT '',
  `id_b` varchar(20) NOT NULL DEFAULT '',
  `id_c` tinyblob NOT NULL,
  `id_d` tinytext NOT NULL,
  `id_e` blob NOT NULL,
  `id_f` text NOT NULL,
  `id_g` mediumblob NOT NULL,
  `id_h` longblob NOT NULL,
  `id_i` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tr_string
-- ----------------------------
INSERT INTO `tr_string` VALUES ('1', 'df', 'sdf', '', 'dfd', '', 'dfsf', '', '', 'dsf');
INSERT INTO `tr_string` VALUES ('2', 'dsf', 'sdfsd', '', 'sdf', '', 'sfsdf', '', '', 'fdggfh');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL COMMENT '用户名',
  `password` varchar(80) NOT NULL COMMENT '密码',
  `mobile` char(11) DEFAULT '' COMMENT '手机号',
  `nickname` varchar(20) DEFAULT '' COMMENT '昵称',
  `face` varchar(80) DEFAULT '' COMMENT '头像',
  `state` tinyint(4) DEFAULT '1' COMMENT '状态',
  `created_at` datetime DEFAULT NULL COMMENT '注册时间',
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='用户表';

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'ChisWill', '$2y$13$a8vBCI7Ah7MNoXV7O6gokuGYmv1FHLZx7amWEFSn1K4zI8JE9rJpi', 'ChisWill', 'ChisWill', '', '1', '2016-08-10 14:39:09', '0', '2016-08-10 14:39:09', '0');
INSERT INTO `user` VALUES ('2', 'admin', '$2y$13$a8vBCI7Ah7MNoXV7O6gokuGYmv1FHLZx7amWEFSn1K4zI8JE9rJpi', 'admin', 'admin', '', '1', '2016-08-10 14:39:09', '1', '2016-08-10 14:39:09', '1');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `updated_at` varchar(80) DEFAULT '',
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT '0',
  `uname` varchar(50) NOT NULL DEFAULT '',
  `upwd` varchar(50) NOT NULL DEFAULT '',
  `uage` tinyint(4) NOT NULL DEFAULT '0',
  `usex` enum('男','女') NOT NULL DEFAULT '男',
  `unation` int(11) NOT NULL DEFAULT '0',
  `name` varchar(40) NOT NULL DEFAULT '',
  `email` varchar(80) NOT NULL DEFAULT '',
  `password` varchar(80) NOT NULL DEFAULT '',
  `created_at` varchar(80) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('', '1', '0', '', '', '0', '男', '0', '', '', '', '');
INSERT INTO `users` VALUES ('2017-08-11 04:07:55', '2', '0', '', '', '0', '男', '0', 'admin', 'skfks@qq.com', '$2y$10$H4PC06yow4/LmVJW8UUCLO.l7vTVDXsSYO0C5HwhrfFVis5F9zbuu', '2017-08-11 04:07:55');

-- ----------------------------
-- Table structure for wxfl
-- ----------------------------
DROP TABLE IF EXISTS `wxfl`;
CREATE TABLE `wxfl` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(20) DEFAULT NULL COMMENT '无限分类技术',
  `ipd` int(4) unsigned DEFAULT NULL COMMENT '和id相同',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wxfl
-- ----------------------------
INSERT INTO `wxfl` VALUES ('1', '中国', '0');
INSERT INTO `wxfl` VALUES ('2', '陕西', '1');
INSERT INTO `wxfl` VALUES ('3', '西安', '2');
INSERT INTO `wxfl` VALUES ('4', '宝鸡', '2');
INSERT INTO `wxfl` VALUES ('6', '山西', '1');
INSERT INTO `wxfl` VALUES ('7', '运城', '6');
INSERT INTO `wxfl` VALUES ('9', '北京', '1');
INSERT INTO `wxfl` VALUES ('10', '上海', '1');
INSERT INTO `wxfl` VALUES ('15', '高新区', '3');
INSERT INTO `wxfl` VALUES ('14', '浦东区', '10');
INSERT INTO `wxfl` VALUES ('16', '山东', '1');
INSERT INTO `wxfl` VALUES ('17', '淄博', '16');
INSERT INTO `wxfl` VALUES ('18', '淄博县', '17');

-- ----------------------------
-- Table structure for zm_content
-- ----------------------------
DROP TABLE IF EXISTS `zm_content`;
CREATE TABLE `zm_content` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `prefectureId` int(4) DEFAULT NULL,
  `headline` varchar(80) NOT NULL DEFAULT '' COMMENT '标题',
  `content` text NOT NULL COMMENT '内容',
  `images` varchar(150) NOT NULL DEFAULT '' COMMENT '图片地址',
  `author` varchar(20) NOT NULL DEFAULT '' COMMENT '作者',
  `create_time` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `headline` (`headline`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zm_content
-- ----------------------------
INSERT INTO `zm_content` VALUES ('1', '1', '国际社会高度关注习近平哈萨克斯坦之行', '6月7日至10日，中国国家主席习近平将对哈萨克斯坦进行国事访问，并出席上海合作组织成员国元首理事会第十七次会议和阿斯塔纳专项世博会开幕式。这是4年内习近平主席第三次访问哈萨克斯坦，也是继5月“一带一路”国际合作高峰论坛后习近平主席首次出访。消息传出，哈萨克斯坦以及上合组织相关成员国、观察员国的各界人士，都表达了对习近平主席此访的热切期待。\r\n\r\n　　“盼望习主席这次访问带来发展合作新活力”', '', '', null);
INSERT INTO `zm_content` VALUES ('2', '1', 'PHP', '', '', '', null);
INSERT INTO `zm_content` VALUES ('3', '2', '微博', '韩国国防部计划对\"萨德\"用地——庆尚北道星州高尔夫球场进行小规模环评，且争取在本月内完成相关工作。但青瓦台方面认为要进行大规模的战略环评。', '', '', null);
INSERT INTO `zm_content` VALUES ('4', '3', '三个专区', '', '', '', null);
INSERT INTO `zm_content` VALUES ('5', '1', 'dsfsdf', 'saaaaaaaaaaaaaaad', '', 'fgdfgd', '1497076929');
INSERT INTO `zm_content` VALUES ('6', '2', '前端最流行的框架', '前端最流行的框架是bootstrap ,  AngularJS 还有js写的后端框架node.js', '', '不知道', '1497077913');
INSERT INTO `zm_content` VALUES ('7', null, '飞凡学院', '坎坎坷坷扩扩扩扩扩扩扩扩扩扩扩扩扩扩扩扩扩扩扩扩扩扩扩扩扩扩扩扩扩扩扩  	\r\n       	    	  ', '', '不知道', null);

-- ----------------------------
-- Table structure for zm_discuss
-- ----------------------------
DROP TABLE IF EXISTS `zm_discuss`;
CREATE TABLE `zm_discuss` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `contentId` int(4) unsigned DEFAULT NULL,
  `discuss` varchar(500) NOT NULL DEFAULT '' COMMENT '评论内容',
  `commentator` varchar(50) NOT NULL DEFAULT '' COMMENT '评论人',
  `create_time` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zm_discuss
-- ----------------------------
INSERT INTO `zm_discuss` VALUES ('1', null, '鼎折覆餗', '双方都', null);
INSERT INTO `zm_discuss` VALUES ('2', '1', 'ddddddddddddddddddddfffffffffffffffff', 'zhangsan', null);
INSERT INTO `zm_discuss` VALUES ('3', '1', 'fddddddddddg', 'zhangsan', null);
INSERT INTO `zm_discuss` VALUES ('4', '1', '你好中个', 'admin', null);
INSERT INTO `zm_discuss` VALUES ('5', '1', '的点点滴滴多多多多多多多多多多多v', '0', null);
INSERT INTO `zm_discuss` VALUES ('6', '1', '断是否付付付付多付付', '0', null);
INSERT INTO `zm_discuss` VALUES ('7', '6', 'eeeeeeeeeeddddddddd', 'admin', null);
INSERT INTO `zm_discuss` VALUES ('8', '1', '都已经六月底了', 'admin', null);

-- ----------------------------
-- Table structure for zm_prefecture
-- ----------------------------
DROP TABLE IF EXISTS `zm_prefecture`;
CREATE TABLE `zm_prefecture` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL DEFAULT '' COMMENT '主题',
  `cont` varchar(100) NOT NULL DEFAULT '',
  `create_time` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zm_prefecture
-- ----------------------------
INSERT INTO `zm_prefecture` VALUES ('1', 'php专区', '专区1', null);
INSERT INTO `zm_prefecture` VALUES ('2', 'web前端专区', '专区2', null);
INSERT INTO `zm_prefecture` VALUES ('3', 'php框架专区', '专区3', null);
INSERT INTO `zm_prefecture` VALUES ('4', '前端框架', '专区4', null);
INSERT INTO `zm_prefecture` VALUES ('5', 'CMS专区', '专区5', null);

-- ----------------------------
-- Table structure for zm_user
-- ----------------------------
DROP TABLE IF EXISTS `zm_user`;
CREATE TABLE `zm_user` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL DEFAULT '' COMMENT '用户名',
  `password` char(32) NOT NULL DEFAULT '' COMMENT '密码',
  `create_time` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user` (`user`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zm_user
-- ----------------------------
INSERT INTO `zm_user` VALUES ('1', 'amdin', 'e10adc3949ba59abbe56e057f20f883e', '1496558549');
INSERT INTO `zm_user` VALUES ('2', 'zhangsan', 'e10adc3949ba59abbe56e057f20f883e', '1496558668');
INSERT INTO `zm_user` VALUES ('3', 'admin1', 'e10adc3949ba59abbe56e057f20f883e', '1496558701');
INSERT INTO `zm_user` VALUES ('4', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '1496558757');
INSERT INTO `zm_user` VALUES ('5', 'admin2', 'e10adc3949ba59abbe56e057f20f883e', '1496559227');
INSERT INTO `zm_user` VALUES ('6', 'admin3', 'e10adc3949ba59abbe56e057f20f883e', '1496559240');
INSERT INTO `zm_user` VALUES ('7', 'admin4', 'e10adc3949ba59abbe56e057f20f883e', '1496562593');
INSERT INTO `zm_user` VALUES ('8', 'admin5', 'e10adc3949ba59abbe56e057f20f883e', '1496562702');
INSERT INTO `zm_user` VALUES ('9', '张三丰', 'e10adc3949ba59abbe56e057f20f883e', '1496566486');
