SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `fitness` (
  `id` bigint(1) NOT NULL,
  `user` bigint(1) NOT NULL DEFAULT '0',
  `data` varchar(250) NOT NULL,
  `time` int(1) NOT NULL DEFAULT '0',
  `value` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `fitness`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `fitness`
  MODIFY `id` bigint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;
