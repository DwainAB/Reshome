CREATE TABLE `users` (
  `user_id` int PRIMARY KEY,
  `username` varchar(255),
  `password` varchar(255),
  `isAdmin` boolean
);

CREATE TABLE `posts` (
  `post_id` int PRIMARY KEY,
  `user_id` int,
  `title` varchar(255),
  `content` text,
  `created_at` timestamp
);

CREATE TABLE `comments` (
  `comment_id` int PRIMARY KEY,
  `content` text,
  `created_at` timestamp,
  `user_id` int,
  `post_id` int
);

CREATE TABLE `tags` (
  `tag_id` int PRIMARY KEY,
  `name` varchar(255)
);

CREATE TABLE `tag_post` (
  `post_id` int,
  `tag_id` int
);

ALTER TABLE `posts` ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

ALTER TABLE `comments` ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

ALTER TABLE `comments` ADD FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`);

ALTER TABLE `tag_post` ADD FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`);

ALTER TABLE `tag_post` ADD FOREIGN KEY (`tag_id`) REFERENCES `tags` (`tag_id`);
