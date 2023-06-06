CREATE TABLE `User` (
                        `user_id` int PRIMARY KEY,
                        `username` varchar(255),
                        `password` varchar(255),
                        `email` varchar(255),
                        `is_admin` boolean,
                        `is_staff` boolean,
                        `is_logistic` boolean
);

CREATE TABLE `Announce` (
                            `announce_id` int PRIMARY KEY,
                            `title` varchar(255),
                            `details` varchar(255),
                            `area` int,
                            `post_address` varchar(255),
                            `gps_latitude` float,
                            `gps_longitude` float,
                            `bedroom_number` int,
                            `bathroom_number` int,
                            `housing_type` varchar(255)
);

CREATE TABLE `ServiceComment` (
                                  `comment_id` int PRIMARY KEY,
                                  `announce_id` int,
                                  `user_id` int,
                                  `content` varchar(255)
);

CREATE TABLE `Review` (
                          `review_id` int PRIMARY KEY,
                          `announce_id` int,
                          `user_id` int,
                          `rate` int,
                          `comment` varchar(255)
);

CREATE TABLE `Picture` (
                           `picture_id` int PRIMARY KEY,
                           `announce_id` int,
                           `path` varchar(255)
);

CREATE TABLE `Booking` (
                           `booking_id` int PRIMARY KEY,
                           `user_id` int,
                           `announce_id` int,
                           `starting_date` date,
                           `ending_date` date,
                           `price` decimal(10,2)
);

CREATE TABLE `Tags` (
                        `tag_id` int PRIMARY KEY,
                        `content` varchar(255)
);

CREATE TABLE `AnnounceTags` (
                                `announce_id` int,
                                `tag_id` int
);

ALTER TABLE `ServiceComment` ADD FOREIGN KEY (`announce_id`) REFERENCES `Announce` (`announce_id`);

ALTER TABLE `Picture` ADD FOREIGN KEY (`announce_id`) REFERENCES `Announce` (`announce_id`);

ALTER TABLE `Booking` ADD FOREIGN KEY (`user_id`) REFERENCES `User` (`user_id`);

ALTER TABLE `Booking` ADD FOREIGN KEY (`announce_id`) REFERENCES `Announce` (`announce_id`);

ALTER TABLE `Review` ADD FOREIGN KEY (`announce_id`) REFERENCES `Announce` (`announce_id`);

ALTER TABLE `ServiceComment` ADD FOREIGN KEY (`user_id`) REFERENCES `User` (`user_id`);

ALTER TABLE `Review` ADD FOREIGN KEY (`user_id`) REFERENCES `User` (`user_id`);

ALTER TABLE `AnnounceTags` ADD FOREIGN KEY (`announce_id`) REFERENCES `Announce` (`announce_id`);

ALTER TABLE `AnnounceTags` ADD FOREIGN KEY (`tag_id`) REFERENCES `Tags` (`tag_id`);