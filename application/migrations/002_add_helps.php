<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2015 OA Wu Design
 */

class Migration_Add_helps extends CI_Migration {
  public function up () {
    $this->db->query (
      "CREATE TABLE `helps` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        
        `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '標題',
        `nickname` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '暱稱',
        `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '地址',
        `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'E-mail',
        `description` text  COMMENT '描述',
        
        `tags_string` text  COMMENT '關鍵字 字串',
        
        `latitude` DOUBLE NOT NULL COMMENT '緯度',
        `longitude` DOUBLE NOT NULL COMMENT '經度',

        `send_enabled` tinyint(1) NOT NULL DEFAULT '1' COMMENT '是否寄送 E-mail',
        `time` datetime NOT NULL DEFAULT '" . date ('Y-m-d H:i:s') . "' COMMENT '時間點',

        `updated_at` datetime NOT NULL DEFAULT '" . date ('Y-m-d H:i:s') . "' COMMENT '更新時間',
        `created_at` datetime NOT NULL DEFAULT '" . date ('Y-m-d H:i:s') . "' COMMENT '新增時間',
        PRIMARY KEY (`id`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;"
    );
  }
  public function down () {
    $this->db->query (
      "DROP TABLE `helps`;"
    );
  }
}