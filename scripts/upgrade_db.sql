alter table ar_params modify column vat_tax_perc integer(20) not null default 0;
alter table ar_params add `logo_image_in_invoices` VARCHAR(120);
alter table ar_params add `invoice_notes` VARCHAR(2048);
alter table ar_params add `invoice_payment_terms` VARCHAR(2048);
alter table ar_params add `current_invoice_nr` INTEGER(11) default 1 NOT NULL;
alter table ar_params drop column`pdf_call_report`;
alter table ar_invoice add `pdf_call_report` LONGBLOB;
alter table ar_invoice_creation add `ar_params_id` INTEGER;
ALTER TABLE ar_invoice_creation ADD (KEY `ar_invoice_creation_FI_1` (`ar_params_id`), CONSTRAINT `ar_invoice_creation_FK_1` FOREIGN KEY (`ar_params_id`) REFERENCES `ar_params` (`id`));
ALTER TABLE ar_invoice ADD `info_or_ads_image1` VARCHAR(1024);
ALTER TABLE ar_invoice ADD `info_or_ads_image2` VARCHAR(1024);
ALTER TABLE ar_invoice_creation ADD `info_or_ads_image1` VARCHAR(1024);
ALTER TABLE ar_invoice_creation ADD `info_or_ads_image2` VARCHAR(1024);
ALTER TABLE ar_params ADD `logo_html_color` VARCHAR(12);
CREATE TABLE `ar_payment` (`id` int(11) NOT NULL AUTO_INCREMENT, `ar_party_id` int(11) DEFAULT NULL, `date` date DEFAULT NULL, `invoice_nr` varchar(20) DEFAULT NULL, `payment_method` varchar(1024) DEFAULT NULL, `payment_references` varchar(1024) DEFAULT NULL, `amount` int(20) NOT NULL DEFAULT '0', `note` text, PRIMARY KEY (`id`), KEY `ar_payment_date_index` (`date`), KEY `ar_payment_invoice_nr_index` (`invoice_nr`), KEY `ar_payment_amount_index` (`amount`), KEY `ar_payment_FI_1` (`ar_party_id`), CONSTRAINT `ar_payment_FK_1` FOREIGN KEY (`ar_party_id`) REFERENCES `ar_party` (`id`)) ENGINE=InnoDB DEFAULT CHARSET=latin1;
ALTER TABLE ar_invoice ADD `total_bundle_without_tax` int(20) DEFAULT '0';
ALTER TABLE ar_invoice ADD `total_calls_without_tax` int(20) DEFAULT '0';
CREATE TABLE `ar_rate_incremental_info` (`id` int(11) NOT NULL AUTO_INCREMENT, `ar_party_id` int(11) DEFAULT NULL, `ar_rate_id` int(11) DEFAULT NULL,  `period` varchar(1024) DEFAULT NULL,   `last_processed_cdr_date` datetime DEFAULT NULL,   `last_processed_cdr_id` int(20) DEFAULT NULL,   `bundle_rate` longtext,   PRIMARY KEY (`id`),   KEY `ar_rate_incremental_info_period_index` (`period`(767)),   KEY `ar_rate_incremental_info_FI_1` (`ar_party_id`),   KEY `ar_rate_incremental_info_FI_2` (`ar_rate_id`),   CONSTRAINT `ar_rate_incremental_info_FK_1` FOREIGN KEY (`ar_party_id`) REFERENCES `ar_party` (`id`),   CONSTRAINT `ar_rate_incremental_info_FK_2` FOREIGN KEY (`ar_rate_id`) REFERENCES `ar_rate` (`id`) ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
ALTER TABLE ar_asterisk_account ADD `is_active` int(11) NOT NULL DEFAULT '1';
ALTER TABLE ar_invoice ADD `ar_params_id` int(11) DEFAULT NULL;
ALTER TABLE ar_params ADD `payment_days` int(20) DEFAULT NULL;
ALTER TABLE ar_params ADD `reconnection_fee` VARCHAR(50) DEFAULT NULL;
ALTER TABLE ar_params ADD `info_telephone_number` varchar(512) DEFAULT NULL;
ALTER TABLE ar_params ADD `late_payment_fee` VARCHAR(50) DEFAULT NULL;
ALTER TABLE ar_params ADD `etf_bbs` varchar(512) DEFAULT NULL;
ALTER TABLE ar_params ADD `etf_acc_no` varchar(512) DEFAULT NULL;
ALTER TABLE ar_params ADD `account_department` varchar(512) DEFAULT NULL;
ALTER TABLE ar_params ADD `direct_debit_payment_email` varchar(512) DEFAULT NULL;
ALTER TABLE ar_params ADD `direct_debit_payment_telephone_number` varchar(512) DEFAULT NULL;
CREATE TABLE `ar_lock`(`id` INTEGER  NOT NULL AUTO_INCREMENT, `name` CHAR(255)  NOT NULL, `time` DATETIME, `info` VARCHAR(1024), PRIMARY KEY (`id`), KEY `ar_lock_name_index`(`name`) ) ENGINE=InnoDB DEFAULT CHARSET=latin1;


