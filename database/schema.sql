
---------------------------------------- START DS_USERS--------------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `ds_users` (
  `id` varchar(36) NOT NULL,
  `date_entered` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `created_by` varchar(36) DEFAULT NULL,
  `modified_by` varchar(36) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `ds_users`
ADD `first_name` varchar(50) NOT NULL,
ADD `last_name` varchar(50) NOT NULL,
ADD `user_name` varchar(50) NOT NULL,
ADD `user_hash` varchar(255) NOT NULL,
ADD `user_type` varchar(50) DEFAULT NULL,
ADD `status` varchar(50) NOT NULL,
ADD UNIQUE KEY `user_name` (`user_name`);

INSERT INTO `ds_users` (`id`, `date_entered`, `date_modified`, `created_by`, `modified_by`, `deleted`, `first_name`, `last_name`, `user_name`, `user_hash`, `user_type`, `status`) VALUES
 ('1', '2025-03-07 17:29:15', '2025-03-07 17:29:16', '1', NULL, 0, 'System', 'Admin', 'ADMIN', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'super_admin', 'active');

-- END DS_USERS

---------------------------------------- START DS_USER_ROLES--------------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `ds_user_roles` (
  `id` varchar(36) NOT NULL,
  `date_entered` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `created_by` varchar(36) DEFAULT NULL,
  `modified_by` varchar(36) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `ds_user_roles`
ADD `user_id` varchar(36) DEFAULT NULL,
ADD `role_id` varchar(36) DEFAULT NULL,
ADD `user_name` VARCHAR(150) NULL,
ADD `role_name` VARCHAR(150) NULL,
ADD `level` INT(10) NULL DEFAULT '0';

-- END DS_USER_ROLES
---------------------------------------- START DS_ROLES--------------------------------------------------------------------------------