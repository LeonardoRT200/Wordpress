CREATE TABLE IF NOT EXISTS `#__mec_events` (
  `id` int(10) NOT NULL,
  `post_id` int(10) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `repeat` tinyint(4) NOT NULL DEFAULT '0',
  `rinterval` varchar(10) COLLATE [:COLLATE:] DEFAULT NULL,
  `year` varchar(80) COLLATE [:COLLATE:] DEFAULT NULL,
  `month` varchar(80) COLLATE [:COLLATE:] DEFAULT NULL,
  `day` varchar(80) COLLATE [:COLLATE:] DEFAULT NULL,
  `week` varchar(80) COLLATE [:COLLATE:] DEFAULT NULL,
  `weekday` varchar(80) COLLATE [:COLLATE:] DEFAULT NULL,
  `weekdays` varchar(80) COLLATE [:COLLATE:] DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=[:CHARSET:] COLLATE=[:COLLATE:] AUTO_INCREMENT=1;

ALTER TABLE `#__mec_events` ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `ID` (`id`), ADD UNIQUE KEY `post_id` (`post_id`);
ALTER TABLE `#__mec_events` MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;

ALTER TABLE `#__mec_events` ADD `days` TEXT NULL DEFAULT NULL, ADD `time_start` INT(10) NOT NULL DEFAULT '0', ADD `time_end` INT(10) NOT NULL DEFAULT '0';

ALTER TABLE `#__mec_events` ADD `not_in_days` TEXT NOT NULL DEFAULT '' AFTER `days`;
ALTER TABLE `#__mec_events` CHANGE `days` `days` TEXT NOT NULL DEFAULT '';

ALTER TABLE `#__mec_events` ADD INDEX (`start`, `end`, `repeat`, `rinterval`, `year`, `month`, `day`, `week`, `weekday`, `weekdays`, `time_start`, `time_end`);

CREATE TABLE IF NOT EXISTS `#__mec_dates` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) NOT NULL,
  `dstart` date NOT NULL,
  `dend` date NOT NULL,
  `tstart` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `tend` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=[:CHARSET:] COLLATE=[:COLLATE:];

ALTER TABLE `#__mec_dates` ADD PRIMARY KEY (`id`), ADD KEY `post_id` (`post_id`), ADD KEY `tstart` (`tstart`), ADD KEY `tend` (`tend`);
ALTER TABLE `#__mec_dates` MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;