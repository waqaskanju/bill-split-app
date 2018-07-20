ALTER TABLE `bills` ADD `mhb_share` INT( 2 ) NOT NULL AFTER `ans_share` ,
ADD `mus_share` INT( 2 ) NOT NULL AFTER `mhb_share` ,
ADD `isq_share` INT( 2 ) NOT NULL AFTER `mus_share`

ALTER TABLE `bills` ADD `asf_share` INT( 2 ) NOT NULL DEFAULT '0' AFTER `isq_share` 


**************************************************************************

ALTER TABLE `setting` ADD `mhb_def_val` INT( 1 ) NOT NULL DEFAULT '0' AFTER `ans_def_val` ,
ADD `mus_def_val` INT( 1 ) NOT NULL DEFAULT '0' AFTER `mhb_def_val` ,
ADD `isq_def_val` INT( 1 ) NOT NULL DEFAULT '0' AFTER `mus_def_val` 




ALTER TABLE `setting` ADD `asf_def_val` INT( 1 ) NOT NULL DEFAULT '0'

***************************************************************************

INSERT INTO `user` (`username`, `password`) VALUES ('mehboob', 'e10adc3949ba59abbe56e057f20f883e'), ('mushtaq', 'e10adc3949ba59abbe56e057f20f883e'), ('ishaq', 'e10adc3949ba59abbe56e057f20f883e')


f13-preview.awardspace.net



ALTER TABLE `bills` ADD `wzr_share` INT( 2 ) NOT NULL DEFAULT '0' AFTER `nae_share` 
ALTER TABLE `setting` ADD `wzr_def_val` INT( 1 ) NOT NULL DEFAULT '0' AFTER `nae_def_val` 
INSERT INTO `user` (`username`, `password`) VALUES ('wazir', 'e10adc3949ba59abbe56e057f20f883e')