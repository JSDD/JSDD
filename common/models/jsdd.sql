# Host: 127.0.0.1  (Version 5.5.53)
# Date: 2017-04-07 16:38:50
# Generator: MySQL-Front 6.0  (Build 1.101)


#
# Structure for table "jsdd_article"
#

DROP TABLE IF EXISTS `jsdd_article`;
CREATE TABLE `jsdd_article` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL COMMENT '文章标题',
  `content` text COMMENT '文章内容',
  `user-id` int(11) unsigned DEFAULT NULL COMMENT '用户id',
  `create-time` time DEFAULT NULL COMMENT '创建时间',
  `update-time` time DEFAULT NULL COMMENT '编辑时间',
  `statu` int(11) unsigned NOT NULL DEFAULT '1' COMMENT '状态',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='文章表';

#
# Structure for table "jsdd_collection"
#

DROP TABLE IF EXISTS `jsdd_collection`;
CREATE TABLE `jsdd_collection` (
  `Id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '收藏id',
  `article-id` int(11) unsigned DEFAULT NULL COMMENT '文章id',
  `user-id` int(11) unsigned DEFAULT NULL COMMENT '用户id',
  `create-time` time DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='收藏表';

#
# Structure for table "jsdd_comment"
#

DROP TABLE IF EXISTS `jsdd_comment`;
CREATE TABLE `jsdd_comment` (
  `Id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '评价id',
  `article-id` int(11) unsigned DEFAULT NULL COMMENT '文章id',
  `user-id` int(11) unsigned DEFAULT NULL COMMENT '用户id',
  `content` varchar(1255) DEFAULT NULL COMMENT '评价内容',
  `create-time` time DEFAULT NULL COMMENT '发布时间',
  `update-time` time DEFAULT NULL COMMENT '编辑时间',
  `statu` int(11) unsigned NOT NULL DEFAULT '1' COMMENT '状态',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='评价表';

#
# Structure for table "jsdd_images"
#

DROP TABLE IF EXISTS `jsdd_images`;
CREATE TABLE `jsdd_images` (
  `Id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '图片Id',
  `name` varchar(255) DEFAULT NULL COMMENT '图片名',
  `url` varchar(255) DEFAULT NULL COMMENT '图片url',
  `upload-time` time DEFAULT NULL COMMENT '上传时间',
  `size` varchar(255) DEFAULT NULL COMMENT '图片大小',
  `statu` int(11) unsigned NOT NULL DEFAULT '1' COMMENT '状态',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='图片表';

#
# Structure for table "jsdd_like"
#

DROP TABLE IF EXISTS `jsdd_like`;
CREATE TABLE `jsdd_like` (
  `Id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '点赞id',
  `article-id` int(11) unsigned DEFAULT NULL COMMENT '文章id',
  `comment-id` int(11) unsigned DEFAULT NULL COMMENT '评论id',
  `user-group` varchar(255) DEFAULT NULL COMMENT '用户id组, 格式[id=>time, ...]',
  `count` int(11) DEFAULT '0' COMMENT '点赞数量',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='点赞表';

#
# Structure for table "jsdd_logs"
#

DROP TABLE IF EXISTS `jsdd_logs`;
CREATE TABLE `jsdd_logs` (
  `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT '日志id',
  `user-id` int(11) unsigned DEFAULT NULL COMMENT '用户id',
  `articel-id` int(11) unsigned DEFAULT NULL COMMENT '文章id',
  `comment-id` int(11) unsigned DEFAULT NULL,
  `reply-id` int(11) unsigned DEFAULT NULL,
  `collection-id` int(11) unsigned DEFAULT NULL,
  `create-time` time DEFAULT NULL COMMENT '创建时间',
  `type` varchar(255) DEFAULT NULL COMMENT '操作类型（signin, signup, createArticel, createComment, createReply, createCollection）',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='日志表';

#
# Structure for table "jsdd_reply"
#

DROP TABLE IF EXISTS `jsdd_reply`;
CREATE TABLE `jsdd_reply` (
  `Id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '评价回复id',
  `user-id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '用户id',
  `comment-id` int(11) unsigned DEFAULT NULL COMMENT '评价id',
  `content` varchar(255) DEFAULT NULL COMMENT '回复内容',
  `create-time` time DEFAULT NULL COMMENT '创建时间',
  `update-time` time DEFAULT NULL COMMENT '编辑时间',
  `statu` int(11) unsigned NOT NULL DEFAULT '1' COMMENT '状态',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='评价回复表';

#
# Structure for table "jsdd_user"
#

DROP TABLE IF EXISTS `jsdd_user`;
CREATE TABLE `jsdd_user` (
  `Id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `email` varchar(255) DEFAULT NULL COMMENT 'E-mail',
  `phone` varchar(32) DEFAULT NULL COMMENT '手机号码',
  `password` varchar(255) DEFAULT NULL COMMENT '登录密码',
  `name` varchar(255) DEFAULT NULL COMMENT '真是姓名',
  `nikname` varchar(255) DEFAULT NULL COMMENT '用户昵称',
  `headimg` varchar(255) DEFAULT NULL COMMENT '用户头像',
  `address` varchar(255) DEFAULT NULL COMMENT '所在地',
  `birthday` time DEFAULT NULL COMMENT '生日',
  `sex` int(11) unsigned DEFAULT NULL COMMENT '性别',
  `creat-time` time DEFAULT NULL COMMENT '创建时间',
  `last-time` time DEFAULT NULL COMMENT '最后登录时间',
  `remarks` varchar(255) DEFAULT NULL COMMENT '备注',
  `auth` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '用户权限',
  `status` int(11) unsigned NOT NULL DEFAULT '1' COMMENT '是否可用',
  PRIMARY KEY (`Id`),
  UNIQUE KEY `唯一索引` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COMMENT='用户表';
