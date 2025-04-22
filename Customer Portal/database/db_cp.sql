SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `customer_list` (
  `id` int(30) NOT NULL,
  `customer_code` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `fullname` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 = Active, 2= Inactive',
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `customer_list` (`id`, `customer_code`, `password`, `fullname`, `status`, `date_created`, `date_updated`) VALUES
(1, '20210001', 'a88df23ac492e6e2782df6586a0c645f', 'Williams, Mike D', 1, '2021-11-05 13:12:15', '2021-11-05 14:58:01'),
(4, '20210002', '100af4e620024b40bbfc49214ea66509', 'Lou, Samantha Jane C', 1, '2021-11-05 14:59:58', '2021-11-05 15:19:32');

CREATE TABLE `customer_meta` (
  `customer_id` int(30) NOT NULL,
  `meta_field` text NOT NULL,
  `meta_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `customer_meta` (`customer_id`, `meta_field`, `meta_value`) VALUES
(1, 'lastname', 'Williams'),
(1, 'firstname', 'Mike'),
(1, 'middlename', 'D'),
(1, 'gender', 'Male'),
(1, 'dob', '1997-06-23'),
(1, 'contact', '09223554991'),
(1, 'address', 'My Address, Here City, There Province, 2306'),
(1, 'email', 'mwilliams@sample.com'),
(1, 'cpassword', 'mwilliams'),
(1, 'cur_password', '20210001'),
(4, 'lastname', 'Lou'),
(4, 'firstname', 'Samantha Jane'),
(4, 'middlename', 'C'),
(4, 'gender', 'Female'),
(4, 'dob', '1997-10-14'),
(4, 'contact', '097876546522'),
(4, 'address', 'Sample Address Only, Anywhere, 2306'),
(4, 'email', 'sjlou@sample.com'),
(4, 'cpassword', ''),
(4, 'cur_password', '20210002');


CREATE TABLE `billing_list` (
  `id` int(30) NOT NULL,
  `billing_code` varchar(50) NOT NULL,
  `customer_id` int(30) NOT NULL,
  `total_amount` float NOT NULL DEFAULT 0,
  `discount_perc` float NOT NULL DEFAULT 0,
  `discount` float NOT NULL DEFAULT 0,
  `tax_perc` float NOT NULL DEFAULT 0,
  `tax` float NOT NULL DEFAULT 0,
  `remarks` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0=pending, 1=Paid',
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `billing_list` (`id`, `billing_code`, `customer_id`, `total_amount`, `discount_perc`, `discount`, `tax_perc`, `tax`, `remarks`, `status`, `date_created`, `date_updated`) VALUES
(1, '202100001', 1, 592.9, 2, 12.1, 12, 72.6, 'Sample Only', 1, '2021-11-05 13:12:43', '2021-11-05 13:45:49'),
(3, '202100002', 4, 717.24, 5, 37.7495, 12, 90.5988, 'Sample Invoice 2', 1, '2021-11-05 15:10:47', '2021-11-05 15:19:56');

CREATE TABLE `billing_product` (
  `billing_id` int(30) NOT NULL,
  `product_id` int(30) NOT NULL,
  `price` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `billing_product` (`billing_id`, `product_id`, `price`) VALUES
(1, 1, 250),
(1, 3, 355),
(2, 3, 355),
(2, 1, 250),
(2, 2, 399.99),
(3, 2, 399.99),
(3, 3, 355);

CREATE TABLE `product_list` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `product_list` (`id`, `name`, `description`, `price`, `status`, `date_created`, `date_updated`) VALUES
(1, 'Device Cleaning', 'Device Cleaning', 250, 1, '2021-11-05 09:48:30', '2021-11-05 09:48:30'),
(2, 'Software Trouble Shooting', 'Software Trouble Shooting', 399.99, 1, '2021-11-05 09:50:34', '2021-11-05 09:50:34'),
(3, 'Parts Replacements', 'Parts Replacements', 355, 1, '2021-11-05 09:51:53', '2021-11-05 09:51:53');

CREATE TABLE `system_info` (
  `id` int(30) NOT NULL,
  `meta_field` text NOT NULL,
  `meta_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `system_info` (`id`, `meta_field`, `meta_value`) VALUES
(1, 'name', 'Customer Portal'),
(6, 'short_name', 'CP'),
(11, 'logo', 'uploads/logo-1636098009.png'),
(13, 'user_profile', 'uploads/user_avatar.jpg'),
(14, 'cover', 'uploads/cover-1636097638.png'),
(15, 'content', 'Array');

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `middlename` text DEFAULT NULL,
  `lastname` varchar(250) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `profile` text DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 0,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` (`id`, `firstname`, `middlename`, `lastname`, `username`, `password`, `profile`, `last_login`, `type`, `date_added`, `date_updated`) VALUES
(1, 'Adminstrator', NULL, 'Admin', 'admin', '0192023a7bbd73250516f069df18b500', 'uploads/avatar-1.png?v=1635556826', NULL, 1, '2021-01-20 14:02:37', '2021-10-30 09:20:26'),
(11, 'Claire', NULL, 'Blake', 'cblake', 'cd74fae0a3adf459f73bbf187607ccea', 'uploads/avatar-11.png?v=1635920566', NULL, 1, '2021-11-03 14:22:46', '2021-11-03 14:22:46'),
(14, 'John', NULL, 'Smith', 'jsmith', '39ce7e2a8573b41ce73b5ba41617f8f7', 'uploads/avatar-14.png?v=1636074078', NULL, 2, '2021-11-05 09:01:18', '2021-11-05 09:01:18');

CREATE TABLE `user_meta` (
  `user_id` int(30) NOT NULL,
  `meta_field` text NOT NULL,
  `meta_value` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `customer_list`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `customer_meta`
  ADD KEY `customer_id` (`customer_id`);


ALTER TABLE `billing_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);


ALTER TABLE `billing_product`
  ADD KEY `billing_id` (`billing_id`),
  ADD KEY `product_id` (`product_id`);

ALTER TABLE `product_list`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `system_info`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `user_meta`
  ADD KEY `user_id` (`user_id`);


ALTER TABLE `customer_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;


ALTER TABLE `billing_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;


ALTER TABLE `product_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;


ALTER TABLE `system_info`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;


ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;


ALTER TABLE `customer_meta`
  ADD CONSTRAINT `customer_meta_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer_list` (`id`) ON DELETE CASCADE;
COMMIT;