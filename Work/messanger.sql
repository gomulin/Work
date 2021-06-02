CREATE TABLE `message` (
  `message_id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(64) NOT NULL,
  `message` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `users` (
  `login` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`),
  ADD UNIQUE KEY `message_id` (`message_id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`login`);

ALTER TABLE `message`
  MODIFY `message_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
